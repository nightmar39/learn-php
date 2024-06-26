# Programming Basics

### Run php server locally

Looks for a index.html or index.php file in the dir where the command is being run. 

`php -S localhost:8000`

You inject PHP into your HTML using php tags, you can add logic or reference PHP variables in your html file `index.php` 

### Strings

Strings are created and referenced using either double or single quotes. 

The . operator can be used to concatenate strings 

```php
echo "Hello World" 
echo "Hello" . "World" 
```

### Variables

Denoted by a $, initialized and referenced using dollar sign. 

**If you want the variable to resolve in a string, you must use double quotes “”, single quotes will literally print out the variable’s name** 

```php
$greeting = "Hello" 

echo $greeting 
echo "$greeting" # will print hello 
echo '$greeting' # will print $greeting 

$read = true #Will print a boolean 
```

We can refer to these variables in our html. 

```html
<h1> 
		<?php echo $message; ?>
		<?= $message ?> # This is a claener shorthand of the code above 
	</h1>
```

We can also set logic as a variable and reference that logic later

```php
$filteredOutput = filterByAuthor($books, "Andy Weir") 
```

### Conditionals

### Array

```php
$books = [
	"A Song of Ice and Fire", 
	"Lord of the Rings", 
	"Harry Potter"
]
```

We can use the `array_filter` method to filter an array by a customer function we define

```php
		$filteredBooks = array_filter($books, function ($book) {
			return $book['releaseYear'] >= 2000; 
		});
```

Associative Arrays 

Create associations, basically a key, value array. Each key points to a value 

```php
<?php 
 $books = [
	[
		'name' => 'Do Androids Dream of Electric Sheep',
		'author' => 'Philip K. Dick',
		'purchaseUrl' => 'http://example.com'
	],
	[
		'name' => 'Project Hail Mary',
		'author' => 'Andy Weir',
		'purchaseUrl' => 'http://example.com'
	]
];
?>

<ul>
	<?php foreach ($books as $book) : ?>
		<li>
			<a href="<?= $book['purchaseUrl'] ?>
			<?= $book['name']; ?>
		</li>
	<?php endforeach; ?>
</ul>

```

### Loops

Below is an ideal way to write the loop inside of an HTML block (using php variable syntax)

```html
<?php foreach ($books as $book) : ?>
			<li> <?= $book ?> </li>
<?php endforeach; ?>

```

Native PHP for loop 

```php
foreach ($books as $book) {
	echo "<h1>$book</h1>"; 
}

$book[2] // get the third item in the books array 
```

Conditionals 

Single Equal to assign value, triple equals to check equality. 

`if ($book['author'] === 'Andy Weir')`

Functions - 

Created and defined as a blueprint, called later in code 

```php
function filterByAuthor($books, $author){
	filteredBooks = [];

	foreach ($books as $book){
		if ($book['author'] === $author)
			filteredBooks[] = $book;
	}
}

return $filteredBooks; 
}
```

Lambda Function - 

An unnamed function written as an expression, can be cast into a variable and referenced through that variable name. 

```php
$filter = function ($items, $key, $value) {
			$filteredItems = [];

			foreach ($items as $item) {
				if ($item[$key] ===  $value){
					$filteredItems[] = $item; 
				}
			}
			return $filteredItems;
		};

		$filteredBooks = $filter($books, 'author' ,'Andy Weir');
```

We can also pass other functions into functions this way 

```php
$filter = function ($items, $fn) {
			$filteredItems = [];

			foreach ($items as $item) {
				if ($fn($item)){
					$filteredItems[] = $item; 
				}
			}
			return $filteredItems;
		};

		$filteredBooks = $filter($books, function ($book) {
			return $book['releaseYear'] >= 2000; 
		});
```