<a href="index.php">Go back to index</a>
<hr />

<?php
$fh=fopen('../Data/quotes.csv','r');
$line_counter=0;
while($line=fgets($fh)) {
    if($line_counter==$_GET['index']) {
        //display the quotes 
        echo $line;
    }
    $line_counter++;


}
fclose($fh);
?>
<hr>
<a href="modify.php?index=<?= $_GET['index'] ?>">Modify</a> <hr />
<a href="delete.php?index=<?= $_GET['index'] ?>">Delete</a>