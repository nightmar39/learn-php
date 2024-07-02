<?php 

    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'www.example.com',
            'year' => 1987 
        ], 

        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'www.example.com',
            'year' => 2002
        ],

        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'www.example.com',
            'year' => 2011 
        ] 

    ];
    #takes in a function which controls how filter is evaluated
    $filter = function ($list, $fn){
        $filteredItems = []; 
        
        foreach ($list as $item){
            #Takes in function that determines filter criteria
            #Function that it takes in must return true or false
            #Will take in a single item from array as parameter
            if ($fn($item)) {
                $filteredItems[] = $item; 
            }
        }

        return $filteredItems; 
    };

    $filteredItems = $filter($books, function($book){
        #The logic within the inner function will be the logic to filter by
        return $book['year'] > 2010; 
    }); 

$header = "Home"; 
require "views/organize.view.php"; 

