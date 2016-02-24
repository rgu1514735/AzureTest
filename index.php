<html>
<head>
</head>
<body>
<?php
echo "Hello world";
echo "<br/>";
echo "tobi";
?>

<?php
    $num = array(12,45,23,67,83,67,23,45,69,24,51,68,48);

    for($i = 0; $i<sizeof($num); $i++)
    {
        if($num[$i] > 50)
        {
            echo $num[$i]." is greater than 50 <br/>";
        }
        else
        {
            echo $num[$i]." is lesser than 50<br/>";
        }
    }
?>

</body>
</html>