# Slug validation rules for Laravel

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
    'slug'                 => ':attributeは有効なスラッグを指定してください。',
];
```
