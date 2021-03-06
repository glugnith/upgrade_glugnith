<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav-admin/user/plugins/recaptchacontact/blueprints.yaml',
    'modified' => 1473884594,
    'data' => [
        'name' => 'reCAPTCHA Contact',
        'version' => '1.0.9',
        'description' => 'This plugin adds contact form features for sending email with google reCAPTCHA 2.0 validation.',
        'icon' => 'paper-plane-o',
        'author' => [
            'name' => 'aRadianOff',
            'email' => 'inesnaya@aradianoff.com',
            'url' => 'http://aradianoff.com'
        ],
        'homepage' => 'https://github.com/aradianoff/recaptchacontact',
        'keywords' => 'contact, plugin, g-recaptcha',
        'bugs' => 'https://github.com/aradianoff/recaptchacontact/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'default_lang' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Default language',
                    'default' => 'en',
                    'help' => 'Fallback default language code for non-multilang sites.',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'disable_css' => [
                    'type' => 'toggle',
                    'label' => 'Disable Plugin-specific CSS',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => true,
                        0 => false
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'inject_template' => [
                    'type' => 'toggle',
                    'label' => 'Inject Contact Template Automatically',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => true,
                        0 => false
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'grecaptcha_sitekey' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'reCAPTCHA Sitekey',
                    'default' => '',
                    'help' => 'Your Google reCaptcha Sitekey',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'grecaptcha_secret' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'reCAPTCHA Secret key',
                    'default' => '',
                    'help' => 'Your Google reCaptcha Secret key',
                    'validate' => [
                        'type' => 'text'
                    ]
                ]
            ]
        ]
    ]
];
