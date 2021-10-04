<?php

return [
    'model' => \App\Models\Inquilino::class,
    'field_name' => 'slug',
    'foreign_key' => 'inquilino_id',
    'route_param' => 'account',
    'subdomains_except' => [
        'master'
    ]
];