<?php

namespace Textil\Http\Controllers;

use Illuminate\Http\Request;
use MP;

class MercadoPagoController extends Controller
{
    /**
     *
     */
    public function mercadoPago()
    {
        $preferences = [
            'items' => [
                [
                    'id' => 12,
                    'category_id' => 'phones',
                    'title' => 'iPhone 6',
                    'description' => 'iPhone 6 de 64gb nuevo',
                    'picture_url' => 'http://d243u7pon29hni.cloudfront.net/images/products/iphone-6-dorado-128-gb-red-4g-8-mpx-1256254%20(1)_m.png',
                    'quantity' => 1,
                    'currency_id' => 'BRL',
                    'unit_price' => 1499
                ]
            ],
            'payer' => [
                'address' => [
                    'street_name' => 'AVENIDA PRESIDENTE ROOSEVELT',
                    'street_number' => 130,
                    'zip_code' => '24722070'
                ]
            ]
        ];

        $preference = MP::create_preference($preferences);

        return dd($preference);
    }
}
