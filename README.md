# Simple phpunit TDD tutorial [![Packagist License][badge_license]](LICENSE.md) [![For PHP][badge_php]][link-github-repo]
[![Travis Status][badge_build]][link-travis]
[![Coverage Status][badge_coverage]][link-travis]
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
