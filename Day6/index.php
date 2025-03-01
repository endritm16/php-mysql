<?php
//fopen we use to open a file
//$my_file = fopen("ds.text", "w");

//fclose we use it to close a file
 //fclose( $my_file );

    // $myfile_name = "ds.txt";
    // $my_file = fopen($my_file_name, "r");
    // $my_size = filesize($my_filename);
    // $my_filedata = fread($my_file, $my_size);


    //feof we use to print everything in a
//     $file = fopen("ds.txt", "r")
//     while(!feof($file)){
//         echo fgets($file). "<br>"
//     }

// fclose($file);


    //fwrite make us write new text in an existing file
    // $my_file = fopen("ds.txt", "w");
    // $my_text = "Endrit Mehmeti \n";
    // fwrite($my_file, $my_text);

    //w+ mode lets us create a new file
    // $h = fopen("data.txt", "w+");
    // fwrite($h, "Test 1");

    // $h = fopen("data.txt", "a+");
    // fwrite($h, "\n Add more lines to the file");
    // flose($h);

    //file_put_contents is identics to fopen(), fwrite(), fclose(),
    file_put_contents("test.txt", "Add more text");
    echo file_get_contents("test.txt");
 ?>
