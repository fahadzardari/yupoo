<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use function GuzzleHttp\json_decode;

class HomeController extends Controller
{


    public function index()
    {

        $categories = [
            'belts' => $this->getBelts(),
            'downjackets' => $this->getDownJackets(),
            'jackets' => $this->getJackets(),
            'shirts' => $this->getShirts(),
            'sweaters' => $this->getSweaters(),
            'tshirts' => $this->getTShirts()

        ];


        return Inertia::render('Home', ['categories' => $categories]);
    }

    public function category($category)
    {

        switch ($category) {
            case 'belts':
                $images = ['belts' => $this->getBelts()];
                break;
            case 'downjackets':
                $images = ['downjackets' => $this->getDownJackets()];
                break;
            case 'jackets':
                $images = ['jackets' => $this->getJackets()];
                break;
            case 'shirts':
                $images = ['shirts' => $this->getShirts()];
                break;
            case 'sweaters':
                $images = ['sweaters' => $this->getSweaters()];
                break;
            case 'tshirts':
                $images = ['tshirts' => $this->getTShirts()];
                break;
            default:
                return "Category not found";
        }
        //return json_encode($images);
        //exit;
        return Inertia::render('Category', ['categories' => $images]);
    }



    public function getBelts()
    {
        return [
            '1' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ],
            '2' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ],
            '3' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '4' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '5' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '6' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '7' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '8' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ]
        ];
    }
    public function getDownJackets()
    {
        return [
            '1' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ],
            '2' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ],
            '3' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '4' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '5' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '6' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '7' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '8' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ]
        ];
    }
    public function getJackets()
    {
        return [
            '1' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ],
            '2' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ],
            '3' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '4' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '5' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '6' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '7' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '8' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ]
        ];
    }
    public function getShirts()
    {
        return [
            '1' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ],
            '2' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ],
            '3' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '4' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '5' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '6' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '7' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '8' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ]
        ];
    }
    public function getSweaters()
    {
        return [
            '1' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ],
            '2' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ],
            '3' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '4' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '5' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '6' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '7' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '8' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ]
        ];
    }
    public function getTshirts()
    {
        return [
            '1' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ],
            '2' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ],
            '3' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '4' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '5' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '6' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '7' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ], '8' => [
                '1.jpg',
                '2.jpg',
                '3.jpg',
                '4.jpg',
                '5.jpg',
                '6.jpg',
                '7.jpg',
            ]
        ];
    }
    public function album($category, $album)
    {
        // if ($category == 'belts') {
        //     $images = $this->getBelts();
        // } else  {
        //     $images = $this->getDownJackets();
        // }

        switch ($category) {
            case 'belts':
                $images =  $this->getBelts();
                break;
            case 'downjackets':
                $images = $this->getDownJackets();
                break;
            case 'jackets':
                $images = $this->getJackets();
                break;
            case 'shirts':
                $images =  $this->getShirts();
                break;
            case 'sweaters':
                $images = $this->getSweaters();
                break;
            case 'tshirts':
                $images =  $this->getTShirts();
                break;
            default:
                return "Category not found";
        }

        $images = $images[$album];

        return Inertia::render('Album', ['images' => $images, 'category' => $category, 'album' => $album]);
    }
}
