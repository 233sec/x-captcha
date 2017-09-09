<?php
namespace Xiaohuilam\XCaptcha\Traits;

class Route{
    public static function bind(){
        \Route::any('demo', '\App\Http\Controllers\Frontend\CaptchaController@demo')->name('frontend.captcha.demo');                                    # 应用 DEMO
        \Route::get('worker.js', '\App\Http\Controllers\Frontend\CaptchaController@pow')->name('frontend.captcha.pow');                                    # POW.js
        \Route::get('api.js', '\App\Http\Controllers\Frontend\CaptchaController@apiJs')->name('frontend.captcha.loader');                               # API.js
        \Route::get('r20170315121834/recaptcha__zh_cn.js', '\App\Http\Controllers\Frontend\CaptchaController@js')->name('frontend.captcha.js');         # JS
        \Route::get('r20170315121834/styles__ltr.css', '\App\Http\Controllers\Frontend\CaptchaController@css')->name('frontend.captcha.css');           # CSS
        \Route::get('anchor', '\App\Http\Controllers\Frontend\CaptchaController@anchor')->name('frontend.captcha.anchor');                              # 无需验证 角标
        \Route::get('fallback', '\App\Http\Controllers\Frontend\CaptchaController@fallback')->name('frontend.captcha.fallback');                        # 回落验证 点击后出现的页面
        \Route::get('fallback.css', '\App\Http\Controllers\Frontend\CaptchaController@fallbackCss')->name('frontend.captcha.fallback.css');             # 回落验证 点击后出现的页面
        \Route::get('image', '\App\Http\Controllers\Frontend\CaptchaController@fallimage')->name('frontend.captcha.fallimg');                           # 回落验证 点击后出现的页面
        \Route::get('r20170315121834/fallback_zh_cn.js', '\App\Http\Controllers\Frontend\CaptchaController@falljs')->name('frontend.captcha.falljs');    # JS
        \Route::any('userverify', '\App\Http\Controllers\Frontend\CaptchaController@userverify')->name('frontend.captcha.userverify');                  # 用户侧 验证
        \Route::any('siteverify', '\App\Http\Controllers\Frontend\CaptchaController@siteverify')->name('frontend.captcha.siteverify');                  # 站点侧 验证
    }
}
