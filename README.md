# yii-php-redmine-api

*Yii Wrapper of PHP Redmine API*

[PHP Redmine API](https://github.com/kbsali/php-redmine-api)

## how use

### place the files in *extensions/php-redmine-api*

### add this code in your controllers (eg.)
```php
$redmineClient = Yii::createComponent(
    'application.extensions.php-redmine-api.phpRedmineApi', 
    Yii::app()->params['redmineUrl'], 
    Yii::app()->params['redmineApi']
);
$i = $redmineClient->get('issue');
foreach($i['issues'] as $k => $item) {
    /* code here */
}

```