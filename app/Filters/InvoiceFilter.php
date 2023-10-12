<?php

namespace App\Filters;

class InvoiceFilter extends Filter
{
    protected array $allowedOperatorsFields = [
        'value'        => ['gt' , 'eq', 'lt', 'gte', 'lte', 'ne'],
        'type'         => ['eq', 'ne' , 'in'],
        'paid'         => ['eq', 'ne'],
        'payment_date' => ['gt' , 'eq', 'lt', 'gte', 'lte', 'ne']
    ];
}