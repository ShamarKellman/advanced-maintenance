Advanced Maintenance/Coming Soon 
=======================

Laravel package to allow accessible links after running Laravel down.

Great for project which have admin panels or cms functionality where stuff needs to be configured before going live in production.


Requirements
============

* PHP >= 5.6
* Laravel >= 5.4

Installation
============

 ```bash 
 composer require shamarkellman/advanced-maintenance
 ```

Add the service provider in your config/app.php (Laravel 5.4) 

```php
Shamarkellman\AdvancedMaintenance\AdvancedMaintenanceServiceProvider::class,
```    

Publish Config and views

    php artisan vendor:publish --force --provider="Shamarkellman\AdvancedMaintenance\AdvancedMaintenanceServiceProvider"

Usage
=====

Add urls to *advanced-maintenance.php* config file
Example

```php
 'excluded_routes' => [
    'admin',
    'admin/*'
  ]
```


Edit *errors/503.blade.php* to customize view.

**NB** - Can also be used for coming soon pages.


Credits
=======

* Shamar Kellman

License
=======

Published under MIT License
