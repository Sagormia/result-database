<?php
    session_start();
    if(!$_SESSION['user']){
        header('Location:loginform.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="cs/style.css" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container">
    <a href="logout.php?logout=true"><button type="button" class="btn btn-primary btn-lg mt-3 mb-2" >Logout</button></a>
        <table class="table">
            <thead class="thead-dark text-center">
                <tr>
                    <th scope="col">SL</th>                    
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Reg</th>
                    <th scope="col">Department</th>
                    <th scope="col">Semester</th> 
                    <th scope="col">GPA</th>   
                    <th scope="col">Year</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>

                </tr>
            </thead>
                    <tbody class="text-center">
                        <?php
                            include "data.php";
                            $ob= new Data;

                            $sh = $ob->viewdata();
                            if($sh->num_rows>0)
                            {
                                while($d=$sh->fetch_object())
                                {
                        ?>
                                        <tr>
                                            <td><?php echo $d->id; ?></td>
                                            <td><?php echo $d->name; ?></td>
                                            <td><?php echo $d->roll; ?></td>
                                            <td><?php echo $d->reg; ?></td>
                                            <td><?php echo $d->department; ?></td>
                                            <td><?php echo $d->semester; ?></td>
                                            <td><?php echo $d->GPA; ?></td>
                                            <td><?php echo $d->year; ?></td>
                                            <td>
                                                <a href='Edit.php?id=<?php echo $d->id; ?>'>
                                                    <button class='btn btn-primary'>edit</button>
                                                </a>
                                            </td>
                                            <td>
                                                <a href='delete.php?id=<?php echo $d->id; ?>'>
                                                    <button class='btn btn-danger'>delete</button>
                                                </a>
                                            </td>
                                        </tr>
                        <?php
                                }
                            } 
                        ?>
                    </tbody>
            </table> 
    </div>
</body>
</html>
