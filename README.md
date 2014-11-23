Intro JS Asset Bundle
=====================
Yii2 asset bundle wrapper around introjs library

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist devleaks/yii2-introjs "*"
```

or add

```
"devleaks/yii2-introjs": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php
use devleaks\introjs\IntroJSAsset;

IntroJS::register($this);

?>```