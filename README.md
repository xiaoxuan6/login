Installation
![Image text](https://github.com/xiaoxuan6/login/blob/master/login.png)

![Image text](https://github.com/xiaoxuan6/login/blob/master/user.png)

First, install dependencies:

    1、composer require james.xue/login
    
    2、php artisan migrate
 
Configuration
 In the extensions section of the config/admin.php file, add some configuration that belongs to this extension.
 
     'extensions' => [
         'login' => [
             // set to false if you want to disable this extension
             'enable' => true,
         ]
     ]

