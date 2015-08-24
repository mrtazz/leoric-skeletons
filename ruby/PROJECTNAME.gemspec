$:.push File.expand_path('../lib', __FILE__)
require 'PROJECTNAME'

Gem::Specification.new do |gem|
  gem.name          = 'PROJECTNAME'
  gem.version       = PROJECTNAME::VERSION
  gem.authors       = ["FULLNAME"]
  gem.email         = 'EMAIL'
  gem.homepage      = 'https://github.com/USERNAME/PROJECTNAME'
  gem.summary       = ""
  gem.description   = ""

  gem.files         = `git ls-files`.split($\)
  gem.executables   = gem.files.grep(%r{^bin/}).map{ |f| File.basename(f) }
  gem.test_files    = gem.files.grep(%r{^(test|spec|features)/})
  gem.require_paths = ["lib"]

  gem.add_runtime_dependency 'a gem', '>= 0.1.0'
end
