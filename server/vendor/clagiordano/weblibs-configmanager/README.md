![BuildStatus](https://travis-ci.org/clagiordano/weblibs-configmanager.svg?branch=master) ![License](https://img.shields.io/github/license/clagiordano/weblibs-configmanager.svg)

# weblibs-configmanager
weblibs-configmanager is a tool library for easily read and access to php config array file and direct read/write configuration file / object.

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/54c4e80c-ff15-4235-8bec-a4c71bbe3ba5/big.png)](https://insight.sensiolabs.com/projects/54c4e80c-ff15-4235-8bec-a4c71bbe3ba5)

## Why use weblibs-configmanager ?
The purpose of this project is to propose a simple and lightweight library to manage php hierarchical configuration files.

## Installation
The recommended way to install weblibs-configmanager is through [Composer](https://getcomposer.org).
```bash
composer require clagiordano/weblibs-configmanager
```

## Usage examples

### Write a sample config file like this
```
<?php

return array (
  'app' => 'app_name',
  'db' => 
  array (
    'host' => 'localhost',
    'user' => 'sample_user',
    'pass' => 'sample_pass',
    'port' => 3306,
  ),
  'other' => 
  array (
    'multi' => 
    array (
      'deep' => 
      array (
        'nested' => 'config_value',
      ),
    ),
  ),
);

```

### Instance ConfigManager object

```php
use clagiordano\weblibs\configmanager\ConfigManager;

/**
 * Instance object to read argument file
 */
$config = new ConfigManager("configfile.php");
```

### Check if a value exists into config file

```php
/**
 * Check if a value exists into config file
 */
$value = $config->existValue('app');
```

### Read a simple element from config file

```php
/**
 * Read a simple element from config file
 */
$value = $config->getValue('app');
```

### Access to a nested element from config

```php
/**
 * Access to a nested element from config
 */
$nestedValue = $config->getValue('other.multi.deep.nested');
```

### Change config value at runtime

```php
/**
 * Change config value at runtime
 */
$this->config->setValue('other.multi.deep.nested', "SUPERNESTED");
```

### Save config file with original name (OVERWRITE) 

```php
/**
 * Save config file with original name (OVERWRITE) 
 */
$this->config->saveConfigFile();
```

### Or save config file with a different name

```php
/**
 * Save config file with original name (OVERWRITE) 
 */
$this->config->saveConfigFile('/new/file/name/or/path/test.php');
```

### Optionally you can also reload config file from disk after save

```php
/**
 * Optionally you can also reload config file from disk after save
 */
$this->config->saveConfigFile('/new/file/name/or/path/test.php', true);
```

### Load another configuration file without reinstance ConfigManager

```php
/**
 * Load another configuration file without reinstance ConfigManager
 */
$this->config->loadConfig('another_config_file.php');
```

## Legal
*Copyright (C) Claudio Giordano <claudio.giordano@autistici.org>*
