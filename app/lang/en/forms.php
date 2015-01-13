<?php

return [

    // Setup form fields
    'setup' => [
        'email'            => 'Email',
        'username'         => 'Username',
        'password'         => 'Password',
        'site_name'        => 'Site Name',
        'site_domain'      => 'Site Domain',
        'site_timezone'    => 'Select your timezone',
        'site_locale'      => 'Select your language',
        'enable_google2fa' => 'Enable Google Two Factor Authentication',
    ],

    // Login form fields
    'login' => [
        'email'         => 'Email',
        'password'      => 'Password',
        '2fauth'        => 'Authentication Code',
        'invalid'       => 'Invalid email or password',
        'invalid-token' => 'Invalid token',
    ],

    // Incidents form fields
    'incidents' => [
        'name'         => 'Name',
        'status'       => 'Status',
        'message'      => 'Message',
        'message-help' => 'You may also use Markdown.',

        'templates' => [
            'name'     => 'Name',
            'template' => 'Template',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Name',
        'status'      => 'Status',
        'group'       => 'Group',
        'description' => 'Description',
        'link'        => 'Link',
        'tags'        => 'Tags',
        'tags-help'   => 'Comma separated.',

        'groups' => [
            'name' => 'Name',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'         => 'Site Name',
            'site-url'          => 'Site URL',
            'site-timezone'     => 'Site Timezone',
            'site-locale'       => 'Site Language',
            'about-this-page'   => 'About this page',
            'days-of-incidents' => 'How many days of incidents to show?',
            'banner'            => 'Banner Image',
            'banner-help'       => "It's recommended that you upload files no bigger than 930px wide .",
            'google-analytics'  => "Google Analytics code",
        ],
        'security' => [
            'allowed-domains'      => 'Allowed domains',
            'allowed-domains-help' => 'Comma separated. The domain set above is automatically allowed by default.',
        ],
        'stylesheet' => [
            'custom-css' => 'Custom Stylesheet',
        ],
        'theme' => [
            'background-color' => 'Background Color',
            'text-color'       => 'Text Color',
        ],
    ],

    'user' => [
        'username'       => 'Username',
        'email'          => 'Email',
        'password'       => 'Password',
        'api-token'      => 'API Token',
        'api-token-help' => 'Regenerating your API token will revoke all existing applications.',
        '2fa'            => [
            'help' => 'Enabling two factor authentication increases security of your account. You will need to download <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> or a similar app on to your mobile device. When you login you will be asked to provide a token generated by the app.',
        ],
    ],

    // Buttons
    'add'    => 'Add',
    'save'   => 'Save',
    'update' => 'Update',
    'create' => 'Create',
    'edit'   => 'Edit',
    'delete' => 'Delete',
    'submit' => 'Submit',
    'cancel' => 'Cancel',
    'remove' => 'Remove'
];
