示例：
![Image text](https://github.com/xiaoxuan6/login/blob/master/login.png)

![Image text](https://github.com/xiaoxuan6/login/blob/master/user.png)

Installation
First, install dependencies:

    1、composer require james.xue/login
    
    2、php artisan migrate
 
    
设置语言
    
   1、中文：修改resources/lang/zh-CN/admin.php 添加如下代码，创建validation.php
    
        'enabled'                => '状态',
        
   validation.php代码如下
    
    <?php
     return [
         'exists' => '该用户已停用!',
     ];
        
   2、英文：修改resources/lang/en 添加
        
        'enabled'                => 'status',
        
Configuration
 In the extensions section of the config/admin.php file, add some configuration that belongs to this extension.
 
     'extensions' => [
         'login' => [
             // set to false if you want to disable this extension
             'enable' => true,
         ]
     ]
     

