<a href="/Quotes/create.php">Add a new quote</a>
<hr />

<?php
$index = 0;
$fh = fopen('Data/quotes.csv', 'r');
?>

<h1>OUR DATABASE OF QUOTES!</h1>
<ul class="list-group">
<?php
    while($line= fgets($fh)){
        if (strlen(trim($line))>0){
            echo '<li class="list-group-item">'.substr(trim($line), 0).'</a> (<a href="Quotes/detail.php?index='.$index.'">Detail)</a>(<a href="Quotes/delete.php?index='.$index.'">Delete)</a></li>';
        }
        $index++;
    }
    fclose($fh); 
    
    ?>
</ul>
