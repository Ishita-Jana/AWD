<?php

include '../form/config.php';
if(isset($_GET['deleteid'])){

    $id = $_GET['deleteid'];
    
    $query = "delete from admission where ID=$id";
    $run = mysqli_query($conn,$query);
    if($run){
        echo "deleted successfully";
        header("Refresh:0; admin_panel.php");


    }
    else{
        die(mysqli_error($conn));
    }
}
?>