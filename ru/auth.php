<?php

return [
    'sign_in' => 'Войти',
    'go_to_login' => 'Перейти к входу',
    'failed' => 'Логин или пароль не правильный',

    'forgot_password' => [
        'label' => 'Забыли пароль?',
        'label_help' => 'Введите вашу почту чтобы восстановить ваш пароль.',
        'button' => 'Восстановить пользователя',
    ],

    'reset_password' => [
        'button' => 'Сбросить пароль и войти',
    ],

    'two_factor' => [
        'label' => '2Факторная авторизация',
        'label_help' => 'This account requires a second layer of authentication in order to continue. Please enter the code generated by your device to complete this login.',
        'checkpoint_failed' => 'The two-factor authentication token was invalid.',
    ],

    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
    'password_requirements' => 'Password must be at least 8 characters in length and should be unique to this site.',
    '2fa_must_be_enabled' => 'The administrator has required that 2-Factor Authentication be enabled for your account in order to use the Panel.',
];