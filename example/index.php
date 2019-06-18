<?php

require __DIR__ . '/../vendor/autoload.php';

session_start();

/**
 * 创建验证码
 *
 * @return void
 */
function create($id = '')
{
    // $captcha = new \mon\captcha\Captcha(['useZh' => true]); // 中文验证码
    $captcha = new \mon\captcha\Captcha();
    return $captcha->create($id);
}

/**
 * 验证验证码
 *
 * @param [type] $code
 * @return void
 */
function check($code, $id = '')
{
    $captcha = new \mon\captcha\Captcha();
    return $captcha->check($code, $id);
}

// create();

// 获取验证码
$code = (new \mon\captcha\Captcha())->getCode();

var_dump($code);

// 验证验证码
var_dump(check($code['verify_code']));