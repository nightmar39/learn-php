<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <h1>Recommended Books</h1> 
    
    <?php 
        $books = [
            "Do Androids Dream of Electric Sheep",
            "The Langoliers", 
            "Hail Mary"
        ];
    ?> 

<!-- Ideal PHP implementation (for long complex pages) --> 

    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?> 
    </ul>

<!-- Simple PHP implementation 
    <ul>
        <?php foreach ($books as $book) {
            echo "<li>$book</li>"; 
        } 
        ?>
    </ul>
-->

<!-- Old Manual HTML method of creating list
    <ul>
        <li>Do Androids Dream of Electric Sheep</li>
        <li>The Langoliers</li>
        <li>Hail Mary</li>
    </ul>
-->
    <p>The second book in the list is <?= $books[1] ?> </p>
</body>
</html>