<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello there',
        'name' => 'Washingtone Aura',
        
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
    'jobs' => [
            [
                'id' => '1',
                'title' => 'Manager',
               'salary' => '60, 000'
            ],
            [   
                'id' => '2',
                'title' => 'Director',
                'salary' => '50, 000'
            ],
            [
                'id' => '3',
                'title' => 'Programmer',
                 'salary' => '45, 000'
            ],
            [
                'id' => '4',
                'title' => 'Designer',
                 'salary' => '40, 000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => '1',
            'title' => 'Manager',
            'salary' => '60, 000'
        ],
        [   
            'id' => '2',
            'title' => 'Director',
            'salary' => '50, 000'
        ],
        [
            'id' => '3',
            'title' => 'Programmer',
                'salary' => '45, 000'
        ],
        [
            'id' => '4',
            'title' => 'Designer',
                'salary' => '40, 000'
        ]
    ];

    //Arr::first($jobs, function($job) use ($id){
        //return $job['id'] == $id;
    //});
    //dd($id);


    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    //dd($job);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});