<?php
    session_start();
    include "data.php";
    $ob= new Data;
    if(!$_SESSION['user']){
        header('Location:loginform.php');
    }
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $roll=$_POST['roll'];
        $reg = $_POST['reg'];
        $department = $_POST['de'];
        $semester=$_POST['sem'];
        $gpa = $_POST['gp'];
        $year =$_POST['year'];

        $ob->insert($name,$roll,$reg,$department,$semester,$gpa,$year);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/anp.css" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="row mt-5">
                    <div class="col-md-6 mx-auto">
                        <div class="card rounded-0">
                            <div class="card-header bg-dark">
                                <h3 class="mb-0 text-white text-center">Fill up the result form</h3>
                            </div>
                            <div class="card-body bg-light">
                                <form method="post" action="#"> 
                                    <select class="form-control" name="sem" required>
                                        <option value="">Select your semester</option>
                                        <option value="1st">1st</option>
                                        <option value="2nd">2nd</option>
                                        <option value="3rd">3rd</option>
                                        <option value="4th">4th</option>
                                        <option value="5th">5th</option>
                                        <option value="6th">6th</option>
                                        <option value="7th">7th</option>
                                        <option value="8th">8th</option>
                                    </select>
                                    <div class="row mt-4 ">
                                        <div class="col-6">
                                            <input type="text" name="name" class="form-control" placeholder="Type name" required />
                                        </div>
                                        <div class="col-6">
                                            <input type="number" name="roll" class="form-control" min="100000" max="999999" placeholder="Type roll" required />
                                        </div>
                                    </div>  
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <input type="number" name="reg" class="form-control" placeholder="Type registration no." required />
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="de" class="form-control" placeholder="Type department" required />
                                        </div>
                                    </div>  
                                
                                    <div class="row mt-4 ">
                                        <div class="col-6">
                                            <input type="text" name="gp" class="form-control" placeholder="Type gpa" required />
                                        </div>
                                        <div class="col-6">
                                            <input type="number" name="year" class="form-control" placeholder="Type year" required />
                                        </div>
                                    </div>    
                                    <button type="submit" class="btn btn-success btn-lg mt-3" name="submit">Submit</button>
                                    <button type="reset" class="btn btn-danger btn-lg mt-3" name="reset">Clean</button>
                                    <a href="logout.php?logout=true"><button type="button" class="btn btn-primary btn-lg mt-3" >Logout</button></a><br /><br />
                                    <a href="show.php" class="bg-success text-white">Show result</a>
                                </form>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>