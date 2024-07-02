<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>


<h2>Filtered Books </h2>
    <ul>
        <!--Loops through books returned by filtered array and only prints those--> 
        <?php foreach ($filteredItems as $book) : ?> 
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