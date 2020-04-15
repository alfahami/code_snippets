<?php 
    $path = '/dir1/myfile.php';
    $file = 'file1.txt';

    // Return filename
    echo basename($path). '<br>';

    // Return filename without ext
    echo basename($path, '.php'). '<br>';


    // Return the dir name from path
    echo dirname($path) . '<br>';

    // Check if file or folder exists
    echo file_exists($file) .'<br>';

    // Get absolute path
    echo realpath($file). '<br>';

    // Check to see if file 
    echo is_file($file) .'<br>';

    // Check if writable
    echo is_writable($file) .'<br>';

    // Check if readable
    echo is_readable($file). '<br>';

    // Get file size
    echo filesize($file);

    // Create a directory
    mkdir('testing');

    // Remove directory if empty
    rmdir('testing');

    // Copy file
    echo copy('file1.txt', 'file2.txt');

    // Rename file
    rename('file2.txt', 'myfile.txt');

    // Delete file
    unlink('myfile.txt') .'<br>';

    // Write form file to string
    echo file_get_contents($file) .'<br>';

    // Write string to file
    echo file_put_contents($file, 'Goodbye World');

    $current = file_get_contents($file);

    $current .= ' Goodbye World';

    file_put_contents($file, $current);

    // Open Fille For Reading
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo $data;

    // Open file for writing 
    $handle = fopen('file2.txt', 'w');
    $txt = "Come on bro!\n";
    fwrite($handle, $txt);
    $txt = 'Steve Smith';
    fwrite($handle, $txt);
    fclose($handle);