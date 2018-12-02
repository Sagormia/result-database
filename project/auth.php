<?php
    session_start();
    include "data.php";
    $obj = new Data;
    if(isset($_POST['login'])){
        $u = $_POST['name'];
        $p = $_POST['password'];
       // $_SESSION['login']=$p
        $data = $obj->retrive($u);
        if($data->num_rows>0){
            while($row= $data->fetch_object()){
                $uid = $row->id;
                $password = $row->pass;
            }
        }
        $e_pw = md5($p);
        if($e_pw === $password){
            $obj->set_session($uid);
            $obj->index();
        }
    }else{
        header("Location:loginform.php");
    }
    if($obj->index() == true){
        header('location:input.php');
    }else{
        header('location:loginform.php');
    }
?>