<?php

namespace Kmlpandey77\Trustpayment\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kmlpandey77\Trustpayment\Trustpayment
 */
class Trustpayment extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'trustpayment';
    }
}
