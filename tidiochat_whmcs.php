<?php

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

function tidiochat_whmcs_config() {
    return [
        'name' => 'TidioChat Integration for WHMCS',
        'description' => 'This module integrates TidioChat into WHMCS.',
        'version' => '1.0',
        'author' => 'Broodle',
        'fields' => [
            'tidiochat_jsfile' => [
                'FriendlyName' => 'Tidio Chat JS File Name',
                'Type' => 'text',
                'Size' => '256',
                'Description' => '.js | Enter the JS File Name for Tidio Chat. (.js will be added automatically)',
                'Placeholder' => 'Example: https://domain.com/path/to/your/file',
            ],
        ],
    ];
}
