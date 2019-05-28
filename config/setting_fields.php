<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Settings
    |--------------------------------------------------------------------------
    |
    | In here you can define all the settings used in your app, it will be
    | available as a settings page where user can update it if needed
    | create sections of settings with a type of input.
    */

    'app' => [  

        'title' => 'General',
        'desc' => 'All the general settings for application.',
        'icon' => 'fa fa-cogs',

        'elements' => [
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'app_name',
                'label' => 'App Name',
                'rules' => 'required|min:2|max:50',
                'class' => 'input-sm', // class for input
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'app_description',
                'label' => 'Tagline',
                'rules' => 'required|min:2|max:50',
                'class' => 'input-sm', // class for input
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'app_email',
                'label' => 'Email',
                'rules' => 'required|min:2|max:50',
                'class' => 'input-sm', // class for input
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'app_admin_url',
                'label' => 'Admin URL',
                'rules' => 'required|min:2|max:50',
                'class' => 'input-sm', // class for input
            ],        
        ],


    ],
    'reading' => [

        'title' => 'Reading',
        'desc' => 'Home page of website, Blog page or home page' ,
        'icon' => 'fa fa-book',

        'elements' => [
            [
                'type' => 'select',
                    'name' => 'home_page',
                    'label' => 'Home Page',
                    'rules' => 'required',
                    'class' => 'input-sm', // class for input
                    'options' => [
                        '-Select-',
                        'Home',
                        'Blog',                                         
                    ]
            ],
            [
                'type' => 'number',
                    'name' => 'post_per_page',
                    'label' => 'Post Per Page',
                    'rules' => 'required',
                    'class' => 'input-sm', // class for input
                    
            ]
        ],


    ],
    'writing' => [

        'title' => 'Writing',
        'desc' => 'Home page of website, Blog page or home page' ,
        'icon' => 'fa fa-pencil',

        'elements' => [
            [
                'type' => 'select',
                    'name' => 'default_post_category',
                    'label' => 'Default Post Category',
                    'rules' => 'required',
                    'class' => 'input-sm', // class for input
                    'options' => [
                        '-Select-',
                        'uncategorised',
                        'Blog',                        
                    ]
            ],
            [
                'type' => 'select',
                    'name' => 'default_post_format',
                    'label' => 'Default Post Format',
                    'rules' => 'required',
                    'class' => 'input-sm', // class for input
                    'options' => [
                        '-Select-',
                        'aside',
                        'chat',
                        'gallery',
                        'link',
                        'quote',
                        'status',
                        'video',
                        'audio',                       
                    ]
            ]
        ],


    ],
    'tax' => [

        'title' => 'Tax Info',
        'desc' => 'Tax and GST info' ,
        'icon' => 'fa fa-picture-o',

        'elements' => [
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'registration_number',
                'label' => 'Registration Number',
                'rules' => 'required|min:2|max:50',
                'class' => 'input-sm', // class for input
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'gst_number',
                'label' => 'GST Number',
                'rules' => 'required|min:2|max:50',
                'class' => 'input-sm', // class for input
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'gst_tax',
                'label' => 'GST %',
                'rules' => 'required|min:2|max:50',
                'class' => 'input-sm', // class for input
            ],
            [
                'type' => 'number',
                'data' => 'string',
                'name' => 'invoice_due_days',
                'label' => 'Invoice Due Days',
                'rules' => 'required|min:2|max:50',
                'class' => 'input-sm', // class for input
            ],
            
        ],


    ],
    

  
];