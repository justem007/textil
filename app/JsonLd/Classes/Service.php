<?php
/**
 * Created by PhpStorm.
 * User: rossina
 * Date: 13/06/17
 * Time: 11:18
 */

namespace JsonLd\Classes\Service;


use JsonLd\Classes\LocalBusiness;
use JsonLd\Classes\OfferCatalog;
use JsonLd\Classes\State;
use JsonLd\ContextTypes\AbstractContext;

class Service extends AbstractContext
{
    public $structure = [
        'serviceType' => null,
        'provider' => LocalBusiness::class,
        'areaServed' => State::class,
        'hasOfferCatalog' => OfferCatalog::class,
        'itemListElement' => null
    ];
}