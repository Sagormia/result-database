<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/img.css" />
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
    </head>
        <body>
            <div class="container py-5">
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="row mt-5">
                                <div class="col-md-4 mx-auto">
                                    <div class="card rounded-0">
                                        <div class="card-header">
                                            <h3 class="mb-0 text-center">&laquo; Search Result &raquo;</h3>
                                        </div>
                                        <div class="card-body">
                                            <form action="display.php" method="post">
                                                    <input type="number" placeholder="Your roll" name="search"  class="form-control" required/><br />
                                                    <select class="form-control" name="y" required>
                                                        <option value="">--Select your year--</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2014">2014</option>
                                                    </select><br />
                                                    <button type="submit" class="btn btn-success" name="submit" >Search</button>
                                                    <button type="reset" class="btn btn-info" >Clean</button>
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