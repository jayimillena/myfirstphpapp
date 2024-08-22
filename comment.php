<?php

    $conn = mysqli_connect("localhost", "root", "", "myfirstphp");

    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $send = $_POST['send'];

    if($send)
    {
        echo "$name: $comment";
        $insert_query = "INSERT INTO `comments` 
                        (
                            `name`, 
                            `comment`
                        ) 
                        VALUES 
                        (
                            '$name', 
                            '$comment'
                        )";

        $select_db = mysqli_select_db($conn, 'myfirstphp');
        $save = mysqli_query($conn, $insert_query);

        if($save)
        {
            echo "Comment has been saved";    
        }
        else 
        {
            echo "Comment has not been saved";
        }
        
    }
?>