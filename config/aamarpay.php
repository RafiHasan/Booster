<?php

return [
    'store_id' => env('AAMARPAY_STORE_ID','boosterbd'),
    'signature_key' => env('AAMARPAY_KEY','86ced6c53766abe68e0274094ea9aaa0'),
    'sandbox' => env('AAMARPAY_SANDBOX', true),
    'redirect_url' => [
        'success' => [
            'route' => 'about' // payment.success
        ],
        'cancel' => [
            'url' => '/explore' // payment/cancel or you can use route also
        ]
    ]
];
