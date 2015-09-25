## Laravel Set Up
* Download the composer using brew,
  * i.e. `brew install composer`
* Download laravel installer using the composer,
  * i.e. `composer global require "laravel/installer=~1.1"`
as explained in [laravel website](http://laravel.com/docs/4.2/installation)
* Add a path to laravel as:
  * `export PATH=$PATH:~/.composer/vendor/bin`
* Create a new laravel directory as:
  * `laravel new [name]`
    * e.g. laravel new mouse
* Create a new application key as:
  * `php artisan key:generate`
* Access the Homestead.yaml and host files as:
  * `subl -n ~/.homestead/Homestead/yaml`
  * `subl /etc/hosts`
and modify them to add the mouse application.
* Go to the Homestead directory and run `vagrant provision`

## Accessing MySQL
* Go to the Homestead directory and run `vagrant ssh`

#### Miscellaneous
* Create a folder in your machine and initialize it
  * `git init`
* Create a repository in github
* Run `git remote add origin git@github.com:username/myRepository.git`
* Run `git push -u origin master` to push to github