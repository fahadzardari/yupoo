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
            'downjacket' => $this->getDownJackets(),
        ];


        return Inertia::render('Home', ['categories' => $categories]);
    }

    public function category($category)
    {
        return Inertia::render('Home');
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

    public function album($category, $album)
    {
        if ($category == 'belts') {
            $images = $this->getBelts();
        } else {
            $images = $this->getDownJackets();
        }
        if ($category == 'downjackets') {
            $images = $this->getBelts();
        } else {
            $images = $this->getDownJackets();
        }
        if ($category == 'shirts') {
            $images = $this->getBelts();
        } else {
            $images = $this->getDownJackets();
        }
        if ($category == 'tshirts') {
            $images = $this->getBelts();
        } else {
            $images = $this->getDownJackets();
        }
        if ($category == 'sweater') {
            $images = $this->getBelts();
        } else {
            $images = $this->getDownJackets();
        }
        if ($category == 'jackets') {
            $images = $this->getBelts();
        } else {
            $images = $this->getDownJackets();
        }


        $images = $images[$album];

        return Inertia::render('Album', ['images' => $images]);
    }

public function images(){

    return Inertia::render('Images');
}


}
