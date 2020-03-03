## tt-microapp
字节跳动小程序 sdk  
字节跳动服务端API官方文档 [点击前往](https://microapp.bytedance.com/dev/cn/mini-app/develop/server/server-api-introduction)

* API 齐全
* 丰富合理的注释
* 完善的参数提示
* 支持 `composer` 安装
* 支持 laravel/lumen 框架

## 安装 - install
```bash
$ composer require 96qbhy/tt-microapp 
```

## 使用 - usage
```php
require 'vendor/autoload.php';

$app = new \Qbhy\TtMicroApp\TtMicroApp([
    'access_key' => 'your app id',
    'secret_key' => 'your app secret',
    'debug' => true,
]);

var_dump($app->access_token->getToken()); // 获取 access token
var_dump($app->auth->session('client code')); // 获取 openid
var_dump($app->temp_msg->send('openid', 'template id', 'form id', [], 'page')); //模板消息
var_dump($app->storage); // 存储接口
var_dump($app->qr_code->create()); // 创建二维码接口
var_dump($app->content_security); // 内容安全接口、图片和文本检测
var_dump($app->decrypt->decrypt('encrypted data', 'session key', 'iv')); // 敏感数据处理
```

https://github.com/qbhy/tt-microapp  
96qbhy@gmail.com