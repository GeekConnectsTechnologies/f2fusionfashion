<?php
    include('../db.php');
    $allData = $_POST['allData'];
    $i=1;
    foreach($allData as $key => $value)
    {
        $sql="UPDATE landingpageproduct SET sequence=".$i." where lpProductId=".$value;
        $result = mysqli_query($con, $sql);
        $i++;
    }

?>

