<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Number Randomizer

Initialization:

    $ cd <project dir> && composer install

Development Environment Configuration:

    Host(Vagrant): Ubuntu Xenial (NGINX 1.10, PHP-FPM 8.0, Mysql 5.7)

Testing: For the base class run the artisan command


    $ cd <project dir> && php artisan numbers:base

    List of numbers are: 28,25,8,2,7,5,18,6,15,1
    Average of numbers are: 11.5
    Sum of numbers are: 115
    Sorted Desc list of numbers are: 28,25,18,15,8,7,6,5,2,1
    Sorted Asc list of numbers are: 1,2,5,6,7,8,15,18,25,28

Testing: For the custom inherited class run the artisan command

    $ cd <project dir> && php artisan numbers:custom

    List of numbers are: 23,24,25,2,19,18,11,26,12,27
    Average of numbers are: 18.7
    First on the list: 23
    Last on the list: 27
    Sum of first and last are: 50
    Sorted Desc list of numbers are: 27,26,25,24,23,19,18,12,11,2
    Sorted Asc list of numbers are: 2,11,12,18,19,23,24,25,26,27
