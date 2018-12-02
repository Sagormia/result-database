<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/display.css" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

</head>
<body>
    <div class="container py-5"> 
         <a href="home.php"><button type="button" class="btn btn-primary">&laquo;Back to Home</button></a>              
            <?php
            include "data.php";
            $s = new Data;
            if(isset($_POST['search']))
            {
                $roll=$_POST['search'];
                $year=$_POST['y'];
                $data=$s->search_result($roll,$year);
            }
            if($data->num_rows>0)
            {
                while($d=$data->fetch_object())
                {
                   ?>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="row mt-5">
                                <div class="col-md-4 mx-auto">
                                    <div class="card bg-light rounded-0">
                                        <div class="card-body text-dark text-center">
                                            <span>Name: <?php echo $d->name; ?></span><br />
                                            <span>Roll: <?php echo $d->roll; ?></span><br />
                                            <span>Reg: <?php echo $d->reg; ?></span><br />
                                            <span>Semester: <?php echo $d->semester; ?></span><br />
                                            <span>Department: <?php echo $d->department; ?></span><br />
                                            <span>GPA: <?php echo $d->GPA; ?></span>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php
                }

            }        
            ?>       
     </div>       
</body>
</html>