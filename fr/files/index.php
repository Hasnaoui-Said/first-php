<?php 

    // $para = readfile('content.txt');
    // echo $para;

    // $file = 'content.txt';
    // if(file_exists($file)){
        // read file
        // echo readfile($file);
        // Size of file
        // echo filesize($file);
        // absolute path
        // echo realpath($file);
        // autre methode pour manipuler les file
        //=> php file
        // copy file
        // $file_copy = 'my_file.txt';
        // if(file_exists($file_copy)){
        //     copy($file, 'copy/file_copy');
        // }else{
        //     echo 'Attention, file Deja exist! <br>';
        // }
        // rename file
        // rename($file_copy, 'copy/my_files.txt');
        // delete file 
        // unlink("copy/my_files.txt");

        // manipuler les fichier
        // echo 'file exist <br>';
        // // r=> read, r+=> read write, a+=> le cursor a la fin
        // $handle = fopen($file, 'a+');
        // recuperer le contenue d'un fichier
        // echo fread($handle, filesize($file));
        // read lgine par ligne
        // echo fgets($handle);
        // echo fgets($handle);
        // echo fgets($handle);
        // while(!feof($handle)){
        //     echo fgets($handle) . '<br>';
        // }
        // echo fgets($handle);
        // recuperer un seul carra
        // echo fgetc($handle);
        // fwrite($handle, "\nTop of cursors.");
        // fclose($handle);

    // }else{
    //     echo 'file Doesn\'t exist<br>';
    // }
    // create folder
    // mkdir('storage');
    // delete folder
    // rmdir('storage');
    // create file
    // touch('storage/index.txt');
    // delete folder not emty
    // unlink('storage/index.txt');
    // rmdir('storage');