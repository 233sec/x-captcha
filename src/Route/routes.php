<?php

Route::any('/recaptcha/api2/demo', env('APP_CAPTCHA_CONTROLLER').'@demo')->name('frontend.captcha.demo');                                    # 应用 DEMO
Route::get('/recaptcha/api2/worker.js', env('APP_CAPTCHA_CONTROLLER').'@pow')->name('frontend.captcha.pow');                                    # POW.js
Route::get('/recaptcha/api2/api.js', env('APP_CAPTCHA_CONTROLLER').'@apiJs')->name('frontend.captcha.loader');                               # API.js
Route::get('/recaptcha/api2/r20170315121834/recaptcha__zh_cn.js', env('APP_CAPTCHA_CONTROLLER').'@js')->name('frontend.captcha.js');         # JS
Route::get('/recaptcha/api2/r20170315121834/styles__ltr.css', env('APP_CAPTCHA_CONTROLLER').'@css')->name('frontend.captcha.css');           # CSS
Route::get('/recaptcha/api2/anchor', env('APP_CAPTCHA_CONTROLLER').'@anchor')->name('frontend.captcha.anchor');                              # 无需验证 角标
Route::get('/recaptcha/api2/fallback', env('APP_CAPTCHA_CONTROLLER').'@fallback')->name('frontend.captcha.fallback');                        # 回落验证 点击后出现的页面
Route::get('/recaptcha/api2/fallback.css', env('APP_CAPTCHA_CONTROLLER').'@fallbackCss')->name('frontend.captcha.fallback.css');             # 回落验证 点击后出现的页面
Route::get('/recaptcha/api2/image', env('APP_CAPTCHA_CONTROLLER').'@fallimage')->name('frontend.captcha.fallimg');                           # 回落验证 点击后出现的页面
Route::get('/recaptcha/api2/r20170315121834/fallback_zh_cn.js', env('APP_CAPTCHA_CONTROLLER').'@falljs')->name('frontend.captcha.falljs');    # JS
Route::any('/recaptcha/api2/userverify', env('APP_CAPTCHA_CONTROLLER').'@userverify')->name('frontend.captcha.userverify');                  # 用户侧 验证
Route::any('/recaptcha/api2/siteverify', env('APP_CAPTCHA_CONTROLLER').'@siteverify')->name('frontend.captcha.siteverify');                  # 站点侧 验证
