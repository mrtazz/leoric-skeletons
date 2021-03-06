#

.PHONY: test jekyll docs clean-docs deploy-docs composer phpmd coverage-html codesniffer

SNIFFS=$(shell awk -vORS=, '{ print $0 }' tests/sniffs.csv | sed 's/,$$/\n/')

composer:
	composer install

test: composer
	mkdir -p build/logs
	./vendor/bin/phpunit -c tests/phpunit.xml

coverage-html: composer
	mkdir -p build/logs
	./vendor/bin/phpunit -c tests/phpunit.xml --coverage-html coverage-html

phpmd: composer
	./vendor/bin/phpmd src/ text cleancode,codesize,controversial,design,naming,unusedcode

codesniffer: composer
	./vendor/bin/phpcs --standard="PSR1,PSR2" --sniffs=$(SNIFFS) src

NAME=PROJECTNAME
VERSION = $(shell git describe --tags --always --dirty)
PROJECT_URL="https://github.com/mrtazz/$(NAME)"

GAUGES_CODE=""

jekyll:
	install -d ./docs
	echo "gaugesid: $(GAUGES_CODE)" > docs/_config.yml
	echo "projecturl: $(PROJECT_URL)" >> docs/_config.yml
	echo "basesite: http://www.unwiredcouch.com" >> docs/_config.yml
	echo "markdown: redcarpet" >> docs/_config.yml
	echo "---" > docs/index.md
	echo "layout: project" >> docs/index.md
	echo "title: $(NAME)" >> docs/index.md
	echo "---" >> docs/index.md
	cat README.md >> docs/index.md

docs: jekyll

clean-docs:
	rm -rf ./docs

deploy-docs: docs
	@cd docs && git init && git remote add upstream "https://${GH_TOKEN}@github.com/mrtazz/$(NAME).git" && \
	git submodule add https://github.com/mrtazz/jekyll-layouts.git ./_layouts && \
	git submodule update --init && \
	git fetch upstream && git reset upstream/gh-pages && \
	git config user.name 'Daniel Schauenberg' && git config user.email d@unwiredcouch.com && \
	touch . && git add -A . && \
	git commit -m "rebuild pages at $(VERSION)" && \
	git push -q upstream HEAD:gh-pages
