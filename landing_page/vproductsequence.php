<?php
    include('../db.php');
    $allData = $_POST['allData'];
    $i=1;
    foreach($allData as $key => $value)
    {
        $sql="UPDATE product SET sequence=".$i." where productId=".$value;
        $result = mysqli_query($con, $sql);
        $i++;
    }

?>

