<?php

namespace Textil\Http\Controllers;

use Illuminate\Http\Request;
use PagSeguro;

class PagseguroController extends Controller
{
    /**
     *
     */
    public function pagseguro()
    {
        $data = [
            'items' => [
                [
                    'id' => '18',
                    'description' => 'Item Um',
                    'quantity' => '1',
                    'amount' => '65.90',
                    'weight' => '250',
//                'shippingCost' => '3.5',
                    'width' => '50',
                    'height' => '45',
                    'length' => '60',
                ],
                [
                    'id' => '19',
                    'description' => 'Item Dois',
                    'quantity' => '1',
                    'amount' => '65.90',
                    'weight' => '250',
//                'shippingCost' => '8.5',
                    'width' => '40',
                    'height' => '50',
                    'length' => '80',
                ],
            ],
            'shipping' => [
                'address' => [
                    'postalCode' => '24722070',
                    'street' => 'AVENIDA PRESIDENTE ROOSEVELT',
                    'number' => '130',
                    'district' => 'Vista Alegre',
                    'city' => 'São Gonçalo',
                    'state' => 'RJ',
                    'country' => 'BRA',
                ],
                'type' => 1,
                'cost' => 30.4,
            ],
            'sender' => [
                'email' => 'c59609105488534211508@sandbox.pagseguro.com.br',
                'name' => 'Isaque de Souza Barbosa',
                'documents' => [
                    [
                        'number' => '01234567890',
                        'type' => 'CPF'
                    ]
                ],
                'phone' => '11985445522',
                'bornDate' => '1988-03-21',
            ]
        ];

        $checkout = PagSeguro::checkout()->createFromArray($data);
        $credentials = PagSeguro::credentials()->get();
        $information = $checkout->send($credentials); // Retorna um objeto de laravel\pagseguro\Checkout\Information\Information
        if ($information) {
            dd($information->getCode(),$information->getDate(), $information->getLink());
        }
    }

    /**
     *
     */
    public function recarga()
    {
        $data = [
            'items' => [
                [
                    'id' => '18',
                    'description' => 'Item Um',
                    'quantity' => '1',
                    'amount' => '65.90',
                    'weight' => '250',
//                'shippingCost' => '3.5',
                    'width' => '50',
                    'height' => '45',
                    'length' => '60',
                ],
                [
                    'id' => '19',
                    'description' => 'Item Dois',
                    'quantity' => '1',
                    'amount' => '65.90',
                    'weight' => '250',
//                'shippingCost' => '8.5',
                    'width' => '40',
                    'height' => '50',
                    'length' => '80',
                ],
            ],
            'shipping' => [
                'address' => [
                    'postalCode' => '24722070',
                    'street' => 'AVENIDA PRESIDENTE ROOSEVELT',
                    'number' => '130',
                    'district' => 'Vista Alegre',
                    'city' => 'São Gonçalo',
                    'state' => 'RJ',
                    'country' => 'BRA',
                ],
                'type' => 1,
                'cost' => 30.4,
            ],
            'sender' => [
                'email' => 'c59609105488534211508@sandbox.pagseguro.com.br',
                'name' => 'Isaque de Souza Barbosa',
                'documents' => [
                    [
                        'number' => '01234567890',
                        'type' => 'CPF'
                    ]
                ],
                'phone' => '11985445522',
                'bornDate' => '1988-03-21',
            ]
        ];

        $data ['cellphone_charger'] = '+5521989129035';

        $checkout = PagSeguro::checkout()->createFromArray($data);

        dd($checkout);
    }

    /**
     *
     */
    public function credencias()
    {
        $credentials = PagSeguro::credentials()->get();

        dd($credentials) ;
    }
}
