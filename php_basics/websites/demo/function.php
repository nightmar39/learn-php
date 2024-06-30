<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
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
        #Takes in an array of books and author name, returns an array of books filtered by the designated author
        function filterByAuthor($books, $author) {

            $filteredBooks = []; 

            foreach ($books as $book) { 
                if ($book['author'] === $author) {
                    $filteredBooks[] = $book; 
                }
            
            }
            
            return $filteredBooks; 

        }

        #More generic function to filter by any generic key or value
        function filterBy($list, $key, $value){
            $filteredItems = []; 
            
            foreach ($list as $item){
                if ($item[$key] === $value) {
                    $filteredItems[] = $item; 
                }
            }

            return $filteredItems; 
        }
    ?>
    <h2>Andy Weir Books </h2>
    <ul>
        <!--Loops through books returned by filtered array and only prints those--> 
        <?php foreach (filterByAuthor($books, 'Andy Weir') as $book) : ?> 
            <li> 
                Name : <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']?></a> <br>                
                Author : <?= $book['author']?> <br> 
                Year : <?= $book['year']?> <br>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>