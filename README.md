# Simple phpunit TDD tutorial [![badge-license]][link-license]

[![Travis Status][badge_build]][link-travis]
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


[badge_build]:        https://img.shields.io/travis/pabloaugusto/phpunit-tutorial.svg?style=flat-square
[badge_issues]:       https://img.shields.io/github/issues/pabloaugusto/phpunit-tutorial.svg?style=flat-square
[badge_downloads]:    https://img.shields.io/packagist/dt/arcanedev/seo-helper.svg?style=flat-square
[badge-lastcommit]:   https://img.shields.io/github/last-commit/pabloaugusto/phpunit-tutorial.svg
[badge-license]:      https://img.shields.io/github/license/pabloaugusto/phpunit-tutorial.svg

[link-author]:        https://github.com/pabloaugusto
[link-github-repo]:   https://github.com/pabloaugusto/phpunit-tutorial
[link-github-issues]: https://github.com/pabloaugusto/phpunit-tutorial/issues
[link-contributors]:  https://github.com/pabloaugusto/phpunit-tutorial/graphs/contributors
[link-travis]:        https://travis-ci.org/pabloaugusto/phpunit-tutorial
[link-license]:       https://github.com/pabloaugusto/phpunit-tutorial/blob/master/LICENSE
