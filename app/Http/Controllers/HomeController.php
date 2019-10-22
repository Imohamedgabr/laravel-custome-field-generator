<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use FCM;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $fields = 
    [ 
        [
        'type'=> "input",
        'inputType'=> "text",
        'label'=> "Name",
        'model'=> "name",
        'placeholder'=> "Your name",
        'featured'=> true,
        'required'=> true,
        'styleClasses'=> 'space'
        ],[
        'type'=> "input",
        'inputType'=> "password",
        'label'=> "Password",
        'model'=> "password",
        'min'=> 6,
        'required'=> true,
        'hint'=> "Minimum 6 characters",
        'styleClasses'=> 'space',
        ],[
        'type'=> "input",
        'inputType'=> "email",
        'label'=> "E-mail",
        'model'=> "email",
        'placeholder'=> "User's e-mail address",
        'styleClasses'=> 'space',
        ],[
        'type'=> "vueMultiSelect",    
        'model'=> "library",
        'label'=> "Libraries",
        'placeholder'=> "Select your favorite library",
        'required'=> true, 
        'validator'=> '',
        'selectOptions'=> [
        'multiple'=> true,
        'key'=> "name",
        'label'=> "name",
        'searchable'=> true,
        'clearOnSelect'=> false,
        'closeOnSelect'=> false,
        'limit'=>2 // limits the visible results to 2
        ],
            'values'=> [
            [
              "name"=> "Vue.js",
              "language"=> "JavaScript"
            ],
            [
              "name"=> "Rails",
              "language"=> "Ruby"
            ],
            [
              "name"=> "Sinatra",
              "language"=> "Ruby"
            ]
          ]
        ]
    ];
    $fields = json_encode($fields);
    return view('home')->with('fields',$fields);
    }
}
