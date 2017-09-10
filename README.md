# XCaptcha

## INSTALL

```bash
composer require "xiaohuilam/x-captcha":"dev-master"
php artisan make:controller App\\Http\\YourCaptchaController
echo "\r\n" >> .env
echo "APP_CAPTCHA_CONTROLLER=App\\Http\\YourCaptchaController" >> .env
```

and add this into your config/app.php's providers
```
Xiaohuilam\XCaptcha\XCaptcha::class,
```

## LICENSE
MIT
