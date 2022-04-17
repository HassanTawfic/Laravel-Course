<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

public function index(){
    $blogsInfo = [
        [
            'id'=>'1',
            'title'=>'Hello',
            'postedBy'=> 'Hassan',
            'createdAt'=> '16-4-2022 12:00'
        ],
        [
            'id'=>'2',
            'title'=>'Hello',
            'postedBy'=> 'Hassan',
            'createdAt'=> '16-4-2022 12:00'
        ],
        [
            'id'=>'3',
            'title'=>'Hello',
            'postedBy'=> 'Hassan',
            'createdAt'=> '16-4-2022 12:00'
        ],
        [
            'id'=>'4',
            'title'=>'Hello',
            'postedBy'=> 'Hassan',
            'createdAt'=> '16-4-2022 12:00'
        ]
    ];

    return view('blogs/index',['blogs'=> $blogsInfo ]);
}
public function create()
{
    return view('blogs/create');
}
public function show($id){

    $blogsInfo = [
        [
            'id'=>'1',
            'title'=>'Hello',
            'postedBy'=> 'Hassan',
            'createdAt'=> '16-4-2022 12:00'
        ],
        [
            'id'=>'2',
            'title'=>'Hello',
            'postedBy'=> 'Hassan',
            'createdAt'=> '16-4-2022 12:00'
        ],
        [
            'id'=>'3',
            'title'=>'Hello',
            'postedBy'=> 'Hassan',
            'createdAt'=> '16-4-2022 12:00'
        ],
        [
            'id'=>'4',
            'title'=>'Hello',
            'postedBy'=> 'Hassan',
            'createdAt'=> '16-4-2022 12:00'
        ]
    ];

    return view('blogs/{show}',['blogs'=> $blogsInfo ]);

}
    public function store(){
        $blogsInfo = [
            [
                'id'=>'1',
                'title'=>'Hello',
                'postedBy'=> 'Hassan',
                'createdAt'=> '16-4-2022 12:00'
            ],
            [
                'id'=>'2',
                'title'=>'Hello',
                'postedBy'=> 'Hassan',
                'createdAt'=> '16-4-2022 12:00'
            ],
            [
                'id'=>'3',
                'title'=>'Hello',
                'postedBy'=> 'Hassan',
                'createdAt'=> '16-4-2022 12:00'
            ],
            [
                'id'=>'4',
                'title'=>'Hello',
                'postedBy'=> 'Hassan',
                'createdAt'=> '16-4-2022 12:00'
            ]
        ];

        return view('blogs/index',['blogs'=> $blogsInfo ]);
    }

}
