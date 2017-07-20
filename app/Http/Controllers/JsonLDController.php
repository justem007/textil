<?php

namespace Textil\Http\Controllers;

use Illuminate\Http\Request;
use JsonLd\Classes\FooBar\FooBar;
use JsonLd\Classes\Service\Service;
use JsonLd\Context;
use Textil\Repositories\HorariosRepositoryEloquent;

class JsonLDController extends Controller
{
    /**
     * @var HorariosRepositoryEloquent
     */
    protected $repository;

    /**
     * JsonLDController constructor.
     * @param HorariosRepositoryEloquent $repository
     */
    public function __construct(HorariosRepositoryEloquent $repository)
    {
        $this->repository = $repository;
    }

    public function jsonLD()
    {
        $jsonld = Context::create(FooBar::class, [
            'name' => 'Foo Foo headline',
            'description' => 'Bar bar article description',
            'url' => 'http://google.com',
        ]);

        $service = Context::create(Service::class,[
            'serviceType' => $this->repository->find(1,['horario']),
            'provider' => [
                'name' => 'Rossina Estamparia'
            ],
            'areaServed' => [
                'name' => 'Rio de Janeiro, São Paulo, Minas Gerais, Florianópolis'
            ],
            'hasOfferCatalog' => [
                'name' => 'Sublimação Metro corrido, base tecido de poliéster'
            ],
        ]);

        $context = Context::create('local_business',[
            'name' => 'Consectetur Adipiscing',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            'telephone' => '555-555-5555',
            'openingHours' => 'mon,tue,fri',
            'address' => [
                'streetAddress' => '112 Apple St.',
                'addressLocality' => 'Hamden',
                'addressRegion' => 'CT',
                'postalCode' => '06514',
            ],
            'geo' => [
                'latitude' => '41.3958333',
                'longitude' => '-72.8972222',
            ],
        ]);

        $product = Context::create('product',[
            'name' => 'Nome do Produto',
            'description' => 'Descrição do produto',
            'brand' => 'Brand do Produto',
            'image' => 'url do produto',
            'sku' => 'Sku do Produto',
            'url' => 'Url do Produto',
            'review' => [
                'itemReviewed' => [
                    'name' => 'Name Produto',
                    'alternateName' => 'Produto no lugar do null',
                    'description' => 'Produto no lugar do null',
                    'image' => 'Produto no lugar do null',
                    'url' => 'Produto no lugar do null',
                ],
                'reviewRating' => [
                    'ratingValue' => 'Produto no lugar do null',
                    'bestRating' => 'Produto no lugar do null',  // Required if the rating system is not on a 5-point scale
                    'worstRating' => 'Produto no lugar do null', // Required if the rating system is not on a 5-point scale
                ],
                'aggregateRating' => [
                    'reviewCount' => 'Produto no lugar do null',
                    'ratingValue' => 'Produto no lugar do null',
                    'bestRating' => 'Produto no lugar do null',
                    'worstRating' => 'Produto no lugar do null',
                    'ratingCount' => 'Produto no lugar do null',
                ],
                'name' => 'Produto no lugar do null',
                'author' => [
                    'name' => 'Produto no lugar do null',
                ],
                'reviewBody' => 'Produto no lugar do null',
                'publisher' => [
                    'address' => [
                        'streetAddress' => '',
                        'addressLocality' => '',
                        'addressRegion' => '',
                        'addressCountry' => '',
                        'postalCode' => '',
                    ],
                    'logo' => [
                        'url' => 'Produto no lugar do null',
                        'height' => 'Produto no lugar do null',
                        'width' => 'Produto no lugar do null',
                        'caption' => 'Produto no lugar do null',
                        'thumbnail' => [
                            'url' => 'Produto no lugar do null',
                            'height' => 'Produto no lugar do null',
                            'width' => 'Produto no lugar do null',
                            'caption' => 'Produto no lugar do null',
                        ],
                    ],
                    'contactPoint' => [
                        'telephone' => 'Produto no lugar do null',
                        'contactType' => 'Produto no lugar do null',
                    ],
                ],
                'duration' => [
                    'additionalType' => 'Produto no lugar do null',
                    'name' => 'Produto no lugar do null',
                    'image' => 'Produto no lugar do null',
                ],
                'datePublished' => 'Produto no lugar do null',
            ],
            'aggregateRating' => [
                'reviewCount' => 'Produto no lugar do null',
                'ratingValue' => 'Produto no lugar do null',
                'bestRating' => 'Produto no lugar do null',
                'worstRating' => 'Produto no lugar do null',
                'ratingCount' => 'Produto no lugar do null',
            ],
            'offers' => [
                'itemOffered' => 'Produto no lugar do null',
                'price' => 69.9,
                'priceCurrency' => 59.9,
                'priceValidUntil' => 59.9,
                'url' => 'Produto no lugar do null',
                'itemCondition' => 'Produto no lugar do null',
                'availability' => 'Produto no lugar do null'
            ],
            'gtin8' => 'gtin8 do Produto',
            'gtin13' => 'gtin13 do Produto',
            'gtin14' => 'gtin14 do Produto',
            'mpn' => 'mpn do Produto',
            'category' => 'Categoria do Produto',
            'model' => 'model do Produto'
        ]);

        return view('jsonld.jsonld')->with(['context' => $context, 'jsonld' => $jsonld, 'service' => $service, 'product' => $product]);
    }
}
