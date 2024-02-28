<?php

return [
    'adminEmail' => 'admin@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'bsVersion' => '5.x',
    'maskMoneyOptions' => [
        // 'prefix' => 'US$ ',
        // 'suffix' => '',
        // 'affixesStay' => true,
        'thousands' => '.',
        'decimal' => ',',
        'precision' => 2,
        'allowZero' => true,
        'allowNegative' => false,
    ]
];
