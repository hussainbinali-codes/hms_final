
<p><img src="https://track.infyom.com/assets/img/logo-red-black.png"></p>

## Hospital Management System

## Installation Step

Clone a Project

- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan jwt:secret`
- **Setup .env file**
- **Run migration `php artisan migrate`**
- **Run seeder `php artisan db:seed`**
- **Create virtual host with name `local.hms.com`**
- **Run `npm install`**
- **Run `npm run dev`**
- **create a server.php file and change the content in .htaccess**
- **move the index file tto root directory**


// composer install on hostinger
 php -r "unlink('composer-setup.php');"
 php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
 php composer-setup.php --2
php composer.phar --version
 php composer.phar install

