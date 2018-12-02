<?php
    include "data.php";
    $del = new Data;
    $id = $_GET['id'];
    if($del->delete($id)){
        header("Location:show.php");
    }else{
        echo "error";
    }
?>