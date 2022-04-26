<?php
    include('../db.php');
    $allData = $_POST['allData'];
    $i=1;
    foreach($allData as $key => $value)
    {
        $sql="UPDATE client SET sequence=".$i." where id=".$value;
        $result = mysqli_query($con, $sql);
        $i++;
    }

?>

