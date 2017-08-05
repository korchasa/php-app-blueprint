# PHP app/lib blueprint

[![Build Status](https://travis-ci.org/korchasa/php-app-blueprint.svg?style=flat-square)](https://travis-ci.org/korchasa/php-app-blueprint)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.0-8892BF.svg?style=flat-square)](https://php.net/)


PHPUnit, phpqa, travis-ci

Create project:
```bash
composer create-project korchasa/php-app-blueprint <project_dir>
```
Usage:
```bash
composer run-script style # check code style with code_sniffer
composer run-script style-fix # fix code style
composer run-script analyze # static analysis
composer run-script unit # run unit tests
composer run-script check # style && analyze && unit
``` 
