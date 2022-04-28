<?php
    include('../db.php');
    $allData = $_POST['allData'];
    $i=1;
    foreach($allData as $key => $value)
    {
        $sql="UPDATE productig SET sequence=".$i." where productIGId=".$value;
        $result = mysqli_query($con, $sql);
        $i++;
    }

?>

