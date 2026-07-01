<?php
// Centralized SMTP + recipient settings for site forms.
// NOTE: temporary credentials — to be replaced with production SMTP later.
return [
    'host' => 'smtp.gmail.com',
    'port' => 587,
    'secure' => 'tls',
    'username' => 'helpdesk@fiveonline.in',
    'password' => 'sjltabbdkrsvhwlj',
    'from_email' => 'helpdesk@fiveonline.in',
    'from_name' => 'Koodo India Website',
    'recipients' => [
        'saurabh.fiveonline@gmail.com',
        'dinesh.fiveonline@gmail.com',
    ],
];
