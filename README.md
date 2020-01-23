# Slug validation rules for Laravel

[![Build Status](https://travis-ci.com/seeds-std/laravel-slug-rule.svg?branch=master)](https://travis-ci.com/seeds-std/laravel-slug-rule)
[![codecov](https://codecov.io/gh/seeds-std/laravel-slug-rule/branch/master/graph/badge.svg)](https://codecov.io/gh/seeds-std/laravel-slug-rule)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/seeds-std/laravel-slug-rule/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/seeds-std/laravel-slug-rule/?branch=master)

Checks if the slug is valid format with Str::slug().

## Installation

```shell
composer require seeds-std/laravel-slug-rule
```

## Usage

```php
Validator::make(['slug' => 'laravel-5-framework'], ['name' => new \SeedsStd\SlugValidation\Slug()])
    ->passes(); // true
```

### Options

- separator

```php
Validator::make(['slug' => 'laravel_5_framework'], ['name' => new \SeedsStd\SlugValidation\Slug(['separator' => '_'])])
    ->passes(); // true
```

## Translation

Translate validation messages with `resources/lang/ja/validation.php`

```php
<?php

return [
    'slug' => ':attributeは有効なスラッグを指定してください。',
];
```
