<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $gender;
    if($_POST['male'])
    {
        $gender = $_POST['male'];
    }else
    {
        $gender = $_POST['female'];
    }



    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;

?>