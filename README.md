<p align="center">
    <a href="https://orientdb.com/" target="_blank" rel="external">
        <img src="https://orientdb.com/wp-content/themes/orientdb/img/logo-white.png" height="80px">
    </a>
    <h1 align="center">OrientDB Extension for Yii 2</h1>
    <br>
</p>

This extension provides the [OrientDB](https://orientdb.com/) integration for the [Yii framework 2.0](http://www.yiiframework.com).

For license information check the [LICENSE](LICENSE.md)-file.

Provide a OrientDB client connection from [[Ostico  PhpOrient extension]](https://github.com/Ostico/PhpOrient)


Installation
------------

This extension requires OrientDB server version 2.0 or higher.

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist loutrux/yii2-orientdb
```

or add

```
"loutrux/yii2-orientdb": "~1.0.0"
```

to the require section of your composer.json.

Configuration
-------------

To use this extension, simply add the following code in your application configuration:

```php
return [
    //....
    'components' => [
        'orientdb' => [
            'class' => '\loutrux\orientdb\Connection',
            'hostname'  => 'localhost',
            'port'      => 2424,
            'username'  => 'root',
            'password'  => 'root_pass',
            'dbname'    => 'mydb'
        ],
    ],
];
```
