# PHP7 app/lib blueprint

Structure, code style, static analysis, PHPUnit, travis-ci template, alpine-based Docker.

Create project:
```bash
composer create-project korchasa/app-blueprint <project_dir>
```

Dev usage:
```bash
composer check-loop --timeout=0 # check everything every 10 secs
```

Other scripts:
```bash
composer style # check code style with code_sniffer
composer style-fix # fix code style
composer analyze # static analysis
composer unit # run unit tests
composer check # style && analyze && unit
```

Generate ```Dockerfile``` from composer platform reqs
```bash
docker run --rm -v "$(pwd)":/work korchasa/composer2docker > Dockerfile
```
