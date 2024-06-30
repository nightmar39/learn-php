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
            ]

            ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?> 
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