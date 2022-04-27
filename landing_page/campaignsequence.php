<?php
    include('../db.php');
    $allData = $_POST['allData'];
    $i=1;
    foreach($allData as $key => $value)
    {
        $sql="UPDATE campaign SET sequence=".$i." where campaignId=".$value;
        $result = mysqli_query($con, $sql);
        $i++;
    }

?>

