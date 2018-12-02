<?php
    include "data.php";
    $ob=new Data;
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $roll=$_POST['roll'];
        $reg = $_POST['reg'];
        $department = $_POST['de'];
        $semester=$_POST['sem'];
        $gpa = $_POST['gp'];
        $year =$_POST['year'];

        $ob->update($name,$roll,$reg,$department,$semester,$gpa,$year);
    }
    $id= $_GET['id'];
    $select = $ob->search($id);
    if($select->num_rows>0){
        while($d=$select->fetch_object()){
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
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card rounded-0">
                            <div class="card-header bg-dark">
                                <h3 class="mb-0 text-white text-center">Fill up the result form</h3>
                            </div>
                            <div class="card-body bg-light">
                                <form method="post" action="#"> 
                                        <select class="form-control" name="sem">
                                        <option>Select your semester</option>
                                        <option <?php if($d->semester=='1st'){ echo 'selected';} ?>  value="1st">1st</option>
                                        <option <?php if($d->semester=='2nd'){ echo 'selected';} ?> value="2nd">2nd</option>
                                        <option <?php if($d->semester=='3rd'){ echo 'selected';} ?> value="3rd">3rd</option>
                                        <option <?php if($d->semester=='4th'){ echo 'selected';} ?> value="4th">4th</option>
                                        <option <?php if($d->semester=='5th'){ echo 'selected';} ?> value="5th">5th</option>
                                        <option <?php if($d->semester=='6th'){ echo 'selected';} ?> value="6th">6th</option>
                                        <option <?php if($d->semester=='7th'){ echo 'selected';} ?> value="7th">7th</option>
                                        <option <?php if($d->semester=='8th'){ echo 'selected';} ?> value="8th">8th</option>
                                    </select>
                                    <div class="row mt-4 ">
                                        <div class="col-6">
                                            <input type="text" name="name" value="<?php echo $d->name; ?>" class="form-control" placeholder="Type name">
                                        </div>
                                        <div class="col-6">
                                            <input type="number" name="roll" value="<?php echo $d->roll; ?>" class="form-control" min="100000" max="999999" placeholder="Type roll" required>
                                        </div>
                                    </div>  
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <input type="number" name="reg" value="<?php echo $d->reg; ?>" class="form-control" placeholder="Type registration no.">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="de" value="<?php echo $d->department; ?>" class="form-control" placeholder="Type department">
                                        </div>
                                    </div>  
                                
                                    <div class="row mt-4 ">
                                        <div class="col-6">
                                            <input type="text" name="gp" value="<?php echo $d->GPA; ?>" class="form-control" placeholder="Type gpa">
                                        </div>
                                        <div class="col-6">
                                            <input type="number" name="year" value="<?php echo $d->year; ?>" class="form-control" placeholder="Type year">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $d->id; ?>" >    
                                    <button type="submit" class="btn btn-info w-100 mt-3" name="submit">Edit</button>
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
<?php
         
        }
    }
?>