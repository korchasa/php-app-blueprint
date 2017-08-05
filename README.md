# PHP app/lib blueprint

[![Build Status](https://travis-ci.org/korchasa/php-app-blueprint.svg?style=flat-square)](https://travis-ci.org/korchasa/php-app-blueprint)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.0-8892BF.svg?style=flat-square)](https://php.net/)

Structure, code style, static analysis, PHPUnit, travis-ci template.

Create project:
```bash
composer create-project korchasa/php-app-blueprint <project_dir>
```

Dev usage:
```bash
composer run-script check-loop # check everything every 10 secs
```

Other scripts:
```bash
composer run-script style # check code style with code_sniffer
composer run-script style-fix # fix code style
composer run-script analyze # static analysis
composer run-script unit # run unit tests
composer run-script check # style && analyze && unit
``` 
