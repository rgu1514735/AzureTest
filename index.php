<html>
<head>
</head>
<body>
<form style="margin-left: 300px;" method="post" action="index.php">
    <label> please input a number if it's odd or even</label>
    <input type="text" max="30" name="num"><br/>

    <input type="submit" value="Check">

</form>

<?php
    $num = $_POST['num'];
    echo $num;


?>

</body>
</html>