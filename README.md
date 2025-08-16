# Imagick IDE helper

This package contains IDE help files for [PECL Imagick extension](https://pecl.php.net/package/imagick). It may be used for autocomplete in your IDE and type checking. 

This package is up to date with **PECL Imagick extension version 3.8** and uses types **compatible with PHP 8.0+**. Additionally it uses type annotations based on [Psalm](https://psalm.dev/).

**This package is for you, if** you do not want to install ImageMagick and the PECL Imagick extension in your development environment, but you also do not want to abstain from type checking and IDE autocomplete.

## Installation

You should not use this package in production. Thereby add the `--dev` flag when requiring.

```bash
composer require --dev cracksalad/imagick-ide-helper
```