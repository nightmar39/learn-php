<!DOCTYPE html>
<html lang="en" style=" 
    display: grid;
    margin: 0;
    place-items: center;
    height: 100vh;
">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        #Variable example 
        $name = "Dark Matter";

        #Boolean variable example 
        $read = false; 

        #Conditional example 
        if ($read) {
            $message = "You have read $name";
        }
        else {
            $message = "You have not read $name";
        }
    ?>
    <h1>
        <!-- Will print the value of the message variable modified above 
        <?php echo $message; ?> -->  
        
        <!-- Will also print the value of the variable messgae, just a cleaner syntax --> 
        <?= $message ?> 
    </h1>

    <p> Adding test line </p>
</body>
</html>
