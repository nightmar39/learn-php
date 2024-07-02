<?php require "partials/head.php" ?> 
  <?php require "partials/nav.php"; ?>
  <?php require "partials/banner.php"; ?>
  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      Adding test content here 
    </ul>
    </div>
  </main>
</div>

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

<?php require "partials/footer.php"; ?> 