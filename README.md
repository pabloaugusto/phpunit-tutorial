# Simple phpunit TDD tutorial [![Packagist License][badge_license]](LICENSE.md)

[![Travis Status][badge_build]][link-travis]
[![Coverage Status][badge_coverage]][link-scrutinizer]
[![Github Issues][badge_issues]][link-github-issues]


A simple PHP project to learn the basic of TDD with phpunit

## Objecives
The goal is to build Class called Calc and test it with phpunit

## Objectives definition
You have to implement the classes and pass into all tests.

## Tasks
*  create class named Calc
*  implement Calc::soma
*  implement Calc::subtracao
*  implement testCalc

## Requirements
*  git
*  php
*  composer
*  phpunit
*  php-xdebug

Install requiriments

    sudo apt-get install git php7.2 composer phpunit php-xdebug

## Installation
To instal:

    git clone https://github.com/pabloaugusto/phpunit-tutorial
    cd phpunit-tutorial
    composer install

## Test
Run the tests with command: 

    cd phpunit-tutorial
    ./vendor/bin/phpunit

or, if you have phpunit at your path:

    cd phpunit-tutorial
    phpunit


###  Reference

* [PHP Unit](https://phpunit.de/)


[badge_php]:          https://img.shields.io/badge/PHP-Framework%20agnostic-4F5B93.svg?style=flat-square
[badge_license]:      https://img.shields.io/packagist/l/arcanedev/seo-helper.svg?style=flat-square
[badge_build]:        https://img.shields.io/travis/ARCANEDEV/SEO-Helper.svg?style=flat-square
[badge_coverage]:     https://img.shields.io/scrutinizer/coverage/g/ARCANEDEV/SEO-Helper.svg?style=flat-square
[badge_quality]:      https://img.shields.io/scrutinizer/g/ARCANEDEV/SEO-Helper.svg?style=flat-square
[badge_insight]:      https://img.shields.io/sensiolabs/i/73e1a779-7ca7-4a75-b6d3-452d7852187e.svg?style=flat-square
[badge_issues]:       https://img.shields.io/github/issues/ARCANEDEV/SEO-Helper.svg?style=flat-square
[badge_package]:      https://img.shields.io/badge/package-arcanedev/seo--helper-blue.svg?style=flat-square
[badge_release]:      https://img.shields.io/packagist/v/arcanedev/seo-helper.svg?style=flat-square
[badge_downloads]:    https://img.shields.io/packagist/dt/arcanedev/seo-helper.svg?style=flat-square

[link-author]:        https://github.com/pabloaugusto
[link-github-repo]:   https://github.com/pabloaugusto/phpunit-tutorial
[link-github-issues]: https://github.com/pabloaugusto/phpunit-tutorial/issues
[link-contributors]:  https://github.com/pabloaugusto/phpunit-tutorial/graphs/contributors
[link-travis]:        https://travis-ci.org/pabloaugusto/phpunit-tutorial
