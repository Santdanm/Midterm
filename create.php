<?php


if(count($_POST)>0) {
//print_r($_POST); // print array at top


$error='';
//make sure the name isnt in the file 
    if(file_exists('../Data/quotes.csv')){
        
$fh=fopen('../Data/quotes.csv','r');
while($line=fgets($fh)) {
   if($_POST['quote']==trim($line)) {
       //found the name already
       $error='the quote already exists';
   };
    
}
fclose($fh);
        }

//add the name to the csv file




if(strlen($error)>0) echo $error;
else{
    $fh=fopen('../Data/quotes.csv','a');
    fputs($fh,$_POST['quote'].PHP_EOL);
    fclose($fh);
    echo 'Thanks for adding ' .$_POST['quote'].' to our amazing website!';
    header('location: index.php');

}
    }
?>

<form method="POST">
    Enter a quote you'd like <br />
    <input type="text" name="quote" /><br />
    <button type="submit"> Add Quote
    </button>




</form>
<a href="index.php">Go back to index</a>
<hr />
