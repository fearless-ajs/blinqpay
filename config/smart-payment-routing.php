<?php
return [
    'routes' => [
        'banks' => 'banks',
        'resolve-account-numbers' => 'resolve-account-numbers',
    ],
    'default' => 'paystack',
    'processors' => [
        'flutterwave' => [
            'base_uri' => env('FLUTTERWAVE_BASE_URI', 'https://api.flutterwave.com/v3'),
            'secret' => env('FLUTTERWAVE_SECRET'),
            'encryption_key' => env('FLUTTERWAVE_ENCRYPTION_KEY'),
            'redirect_url' => env('FLUTTERWAVE_REDIRECT_URL'),
            'cost' => 1.0, // cost per transaction in percentage
            'reliability' => 70, // reliability in percentage
            'currencies' => [
                'NGN'   => 'Nigerian Naira',
                'USD'   => 'US Dollar',
                'GHS'   => 'Ghanaian Cedi',
                'ZAR'   => 'South African Rand',
                'KES'   => 'Kenyan Shilling'
            ]
        ],
        'paystack' => [
            'base_uri' => env('PAYSTACK_BASE_URI', 'https://api.paystack.co'),
            'secret' => env('PAYSTACK_SECRET'),
            'redirect_url' => env('PAYSTACK_REDIRECT_URL'),
            'cost' => 1.5, // cost per transaction in percentage
            'reliability' => 85, // reliability in percentage
            'currencies' => [
                'NGN'   => 'Nigerian Naira',
            ]
        ],
        'stripe' => [
            'base_uri' => env('STRIPE_BASE_URI', 'https://api.stripe.com/v1'),
            'secret' => env('STRIPE_SECRET'),
            'webhook_secret' => env('STRIPE_WEBHOOK_SECRET'),
            'cost' => 2.0, // cost per transaction in percentage
            'reliability' => 90, // reliability in percentage
            'currencies'  => [
                'AFN' => 'Afghan Afghani',
                'ALL' => 'Albanian Lek',
                'DZD' => 'Algerian Dinar',
                'AOA' => 'Angolan Kwanza',
                'ARS' => 'Argentine Peso',
                'AMD' => 'Armenian Dram',
                'AWG' => 'Aruban Florin',
                'AUD' => 'Australian Dollar',
                'AZN' => 'Azerbaijani Manat',
                'BSD' => 'Bahamian Dollar',
                'BDT' => 'Bangladeshi Taka',
                'BBD' => 'Barbadian Dollar',
                'BZD' => 'Belize Dollar',
                'BMD' => 'Bermudian Dollar',
                'BOB' => 'Bolivian Boliviano',
                'BAM' => 'Bosnia & Herzegovina Convertible Mark',
                'BWP' => 'Botswana Pula',
                'BRL' => 'Brazilian Real',
                'GBP' => 'British Pound',
                'BND' => 'Brunei Dollar',
                'BGN' => 'Bulgarian Lev',
                'BIF' => 'Burundian Franc',
                'KHR' => 'Cambodian Riel',
                'CAD' => 'Canadian Dollar',
                'CVE' => 'Cape Verdean Escudo',
                'KYD' => 'Cayman Islands Dollar',
                'XAF' => 'Central African Cfa Franc',
                'XPF' => 'Cfp Franc',
                'CLP' => 'Chilean Peso',
                'CNY' => 'Chinese Renminbi Yuan',
                'COP' => 'Colombian Peso',
                'KMF' => 'Comorian Franc',
                'CDF' => 'Congolese Franc',
                'CRC' => 'Costa Rican Colón',
                'HRK' => 'Croatian Kuna',
                'CZK' => 'Czech Koruna',
                'DKK' => 'Danish Krone',
                'DJF' => 'Djiboutian Franc',
                'DOP' => 'Dominican Peso',
                'XCD' => 'East Caribbean Dollar',
                'EGP' => 'Egyptian Pound',
                'ETB' => 'Ethiopian Birr',
                'EUR' => 'Euro',
                'FKP' => 'Falkland Islands Pound',
                'FJD' => 'Fijian Dollar',
                'GMD' => 'Gambian Dalasi',
                'GEL' => 'Georgian Lari',
                'GIP' => 'Gibraltar Pound',
                'GTQ' => 'Guatemalan Quetzal',
                'GNF' => 'Guinean Franc',
                'GYD' => 'Guyanese Dollar',
                'HTG' => 'Haitian Gourde',
                'HNL' => 'Honduran Lempira',
                'HKD' => 'Hong Kong Dollar',
                'HUF' => 'Hungarian Forint',
                'ISK' => 'Icelandic Króna',
                'INR' => 'Indian Rupee',
                'IDR' => 'Indonesian Rupiah',
                'ILS' => 'Israeli New Sheqel',
                'JMD' => 'Jamaican Dollar',
                'JPY' => 'Japanese Yen',
                'KZT' => 'Kazakhstani Tenge',
                'KES' => 'Kenyan Shilling',
                'KGS' => 'Kyrgyzstani Som',
                'LAK' => 'Lao Kip',
                'LBP' => 'Lebanese Pound',
                'LSL' => 'Lesotho Loti',
                'LRD' => 'Liberian Dollar',
                'MOP' => 'Macanese Pataca',
                'MKD' => 'Macedonian Denar',
                'MGA' => 'Malagasy Ariary',
                'MWK' => 'Malawian Kwacha',
                'MYR' => 'Malaysian Ringgit',
                'MVR' => 'Maldivian Rufiyaa',
                'MRO' => 'Mauritanian Ouguiya',
                'MUR' => 'Mauritian Rupee',
                'MXN' => 'Mexican Peso',
                'MDL' => 'Moldovan Leu',
                'MNT' => 'Mongolian Tögrög',
                'MAD' => 'Moroccan Dirham',
                'MZN' => 'Mozambican Metical',
                'MMK' => 'Myanmar Kyat',
                'NAD' => 'Namibian Dollar',
                'NPR' => 'Nepalese Rupee',
                'ANG' => 'Netherlands Antillean Gulden',
                'TWD' => 'New Taiwan Dollar',
                'NZD' => 'New Zealand Dollar',
                'NIO' => 'Nicaraguan Córdoba',
                'NGN' => 'Nigerian Naira',
                'NOK' => 'Norwegian Krone',
                'PKR' => 'Pakistani Rupee',
                'PAB' => 'Panamanian Balboa',
                'PGK' => 'Papua New Guinean Kina',
                'PYG' => 'Paraguayan Guaraní',
                'PEN' => 'Peruvian Nuevo Sol',
                'PHP' => 'Philippine Peso',
                'PLN' => 'Polish Złoty',
                'QAR' => 'Qatari Riyal',
                'RON' => 'Romanian Leu',
                'RUB' => 'Russian Ruble',
                'RWF' => 'Rwandan Franc',
                'STD' => 'São Tomé and Príncipe Dobra',
                'SHP' => 'Saint Helenian Pound',
                'SVC' => 'Salvadoran Colón',
                'WST' => 'Samoan Tala',
                'SAR' => 'Saudi Riyal',
                'RSD' => 'Serbian Dinar',
                'SCR' => 'Seychellois Rupee',
                'SLL' => 'Sierra Leonean Leone',
                'SGD' => 'Singapore Dollar',
                'SBD' => 'Solomon Islands Dollar',
                'SOS' => 'Somali Shilling',
                'ZAR' => 'South African Rand',
                'KRW' => 'South Korean Won',
                'LKR' => 'Sri Lankan Rupee',
                'SRD' => 'Surinamese Dollar',
                'SZL' => 'Swazi Lilangeni',
                'SEK' => 'Swedish Krona',
                'CHF' => 'Swiss Franc',
                'TJS' => 'Tajikistani Somoni',
                'TZS' => 'Tanzanian Shilling',
                'THB' => 'Thai Baht',
                'TOP' => 'Tongan Paʻanga',
                'TTD' => 'Trinidad and Tobago Dollar',
                'TRY' => 'Turkish Lira',
                'UGX' => 'Ugandan Shilling',
                'UAH' => 'Ukrainian Hryvnia',
                'AED' => 'United Arab Emirates Dirham',
                'USD' => 'United States Dollar',
                'UYU' => 'Uruguayan Peso',
                'UZS' => 'Uzbekistani Som',
                'VUV' => 'Vanuatu Vatu',
                'VND' => 'Vietnamese Đồng',
                'XOF' => 'West African Cfa Franc',
                'YER' => 'Yemeni Rial',
                'ZMW' => 'Zambian Kwacha'
            ]
        ],
    ],
    'routing_rules' => [
        'prioritize' => 'cost',
        'thresholds' => [
            'cost' => 2.0, // maximum acceptable cost percentage
            'reliability' => 90, // minimum acceptable reliability percentage
        ],
    ],
];