<?php

if (count($_POST)>0){

    if (!isset($_GET['index'])){
        die('Please enter the quote you want to delete');
    }

    if(file_exists('../Data/quotes.csv')){
        $line_counter = 0;
        $new_file_content = '';
        $fh=fopen('../Data/quotes.csv', 'r');
        while($line=fgets($fh)){
            if ($line_counter==$_GET['index']){
                $substring = explode(';', $line);           // Gets the index for the author
                $newstring = $substring[0].';';             // THIS ADDS THE SEMI COLON
                $new_file_content.= $newstring;
                $new_file_content.=$_POST['quote'].PHP_EOL; // THIS ADDS THE INDEX AND SEMI COLON BEFORE THE OVERWRITTEN STRING (MAPS TO AUTHOR)
            }
            else{
                $new_file_content.=$line;
            }
            $line_counter++;
        }
    }
    fclose($fh);
    
    
    file_put_contents('../Data/quotes.csv', $new_file_content); 
    echo 'You have successfully modified the quote.';
}

else{
    $quote_name = '';
    $line_counter = 0;
    $fh = fopen('../Data/quotes.csv', 'r');


    while ($line=fgets($fh)){
        if ($line_counter==$_GET['index']){
            $quote_name = trim($line);
        }
        $line_counter++;
    }
    fclose($fh);
}

?>
    
    <form method="POST">
    Modify the quote<br/>
    <input type="text" name="quote" value="<?=$quote_name?>" /><br />
    <button type="submit"> Modify Quote</button>
</form>