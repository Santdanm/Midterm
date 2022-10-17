<a href="index.php">Go back to index</a>
<hr/> 
<?php
/*
if (!isset($_GET['index'])){
    die("Please enter the quote you want to delete.");
}


$line_counter = 0;
$new_file_content = '';

$fh = fopen('../data/quotes.csv', 'r');
while($line= fgets($fh)){
    if ($line_counter == $_GET['index']){
        $new_file_content.=PHP_EOL;
    }
    else{
        $new_file_content.=$line;
    }
    $line_counter++;
    
}

fclose($fh);

file_put_contents('../data/quotes.csv', $new_file_content);

header('location: index.php');

*/


if (!isset($_GET['index'])){
    die("Please enter the quote you want to delete.");
}


$line_counter = 0;
$new_file_content = '';

$fh = fopen('../Data/quotes.csv', 'r');
while($line= fgets($fh)){
    if ($line_counter == $_GET['index']){
        $new_file_content.=PHP_EOL;
    }
    else{
        $new_file_content.=$line;
    }
    $line_counter++;

}

fclose($fh);

file_put_contents('../Data/quotes.csv', $new_file_content);
header('location: index.php');