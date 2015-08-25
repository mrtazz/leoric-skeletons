#
# some housekeeping tasks
#

NAME=PROJECTNAME
PREFIX ?= /usr/local
VERSION=$(shell git describe --abbrev=0)
PKG_RELEASE ?= 1
PROJECT_URL="https://github.com/mrtazz/$(NAME)"
SOURCES=
TARGETS=

.PHONY: test rpm deb

rpm: $(SOURCES)
	  fpm -t rpm -s dir \
    --name $(NAME) \
    --version $(VERSION) \
    --iteration $(PKG_RELEASE) \
    --epoch 1 \
    --license MIT \
    --maintainer "FULLNAME <EMAIL>" \
    --url $(PROJECT_URL) \
    --vendor mrtazz \
    usr

deb: $(SOURCES)
	  fpm -t deb -s dir \
    --name $(NAME) \
    --version $(VERSION) \
    --iteration $(PKG_RELEASE) \
    --epoch 1 \
    --license MIT \
    --maintainer "FULLNAME <EMAIL>" \
    --url $(PROJECT_URL) \
    --vendor mrtazz \
    usr

test:
	echo "Implement me!"
