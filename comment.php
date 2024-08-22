<?php

    $conn = mysqli_connect("localhost", "root", "", "");

    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $send = $_POST['send'];

    if($send)
    {
        echo "$name: $comment";
    }
?>