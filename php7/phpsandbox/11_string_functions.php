<?php
    #substr() 
    #Returns a portion of a string
    $output = substr('Hello', 1, 3);
    $output = substr('Hello', -3);
    
    echo $output. "<br><br>";

    #strlen()
    #Returns the length of a string including space

    $output = strlen('Hello World');
    echo $output . "<br><br>";

    #strpos()
    # Finds the position of the first occurrence of a sub string
    $output = strpos('Hello World', 'o');
    echo $output . "<br><br>";

    #strpos()
    # Finds the position of the last occurrence of a sub string
    $output = strrpos('Hello World', 'o');
    echo $output . "<br><br>";

    $text = 'Hello              ';
    $trimmed = trim($text);
    var_dump($trimmed);
    echo "<br><br>";

    #strtoupper(), strtolower()
    # Makes everything uppercase and vice-cersa

    $output = strtoupper("Hello World<br><br>");
    echo $output;

    #ucwords()
    #Capitalize
    
    $output = ucwords('hello world!<br><br>');
    echo $output;

    # str_replace()
    # Replace all occurences of a search string with a replacement

    $text = "Hello World";
    $output = str_replace('World', 'Everyone<br><br>', $text);
    echo $output;

    # is_tring()
    # Check if string
    
    $val = '22';
    $output = is_string($val);
    echo $output . "<br><br>";

    $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

    foreach($values as $value){
        if(is_string($value)){
            echo "{$value} is a string<br>";
        }
    }

    # gzcompress()
    # Compress a string

    $string = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore illum excepturi temporibus, quod ullam animi adipisci impedit aperiam atque accusantium corporis quo dicta explicabo cupiditate consectetur, itaque qui? Quaerat ratione natus facilis. Est similique obcaecati atque inventore dolor reiciendis, ad ratione corrupti eligendi harum necessitatibus sequi tenetur soluta possimus quis qui, consectetur impedit cum fugit nobis fuga, voluptatibus totam dicta? Et fuga voluptas atque velit tenetur eligendi molestias commodi minima quam accusantium excepturi sapiente aliquid minus animi doloribus tempore, id, dolores corporis libero obcaecati earum deserunt. Molestias ab aliquid, neque nisi mollitia necessitatibus corporis reiciendis distinctio autem voluptate esse aliquam maiores rerum. Nemo eius ab quidem assumenda asperiores consequatur est amet, natus cupiditate odio blanditiis tempore, inventore at perferendis distinctio veniam ullam expedita, reprehenderit labore? Repellendus, assumenda! Impedit dolorum assumenda perferendis porro error facere! Sequi natus, adipisci exercitationem voluptates id error ab! Provident necessitatibus quibusdam numquam deserunt minima expedita. Voluptatem.";

    $compressed = gzcompress($string);

    echo $compressed . "<br><br><br>";

    // Uncompress
    $original = gzuncompress($compressed);

    echo $original;

    

