<?php
    include('../db.php');
    $allData = $_POST['allData'];
    $i=1;
    foreach($allData as $key => $value)
    {
        $sql="UPDATE brandvideo SET sequence=".$i." where brandVideoId=".$value;
        $result = mysqli_query($con, $sql);
        $i++;
    }

?>

