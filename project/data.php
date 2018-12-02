<?php
    class Data{
        //database connection property
        public $host = 'localhost';
        public $uname = 'root';
        public $pass ='';
        public $db = 'result';
        public $con;
    
        public $name;
        public $roll;
        public $reg;
        public $deparment;
        public $semester;
        public $GPA;
        public $year;
        public $id;
        public $user;
        public $username;
       
        public $sql;
        public $result;
        public function __construct(){
            if(!isset($this->con)){
                $this->con = new mysqli($this->host,$this->uname,$this->pass,$this->db);
            }
            return $this->con;
        }
        public function __destruct(){
            $this->con->close();
        }
        public function insert($n,$r,$re,$d,$s,$g,$y){
            $this->name = $n;
            $this->roll = $r;
            $this->reg = $re;
            $this->department = $d;
            $this->semester = $s;
            $this->GPA = $g;
            $this->year = $y;
            $this->sql = "INSERT INTO result_insert(name,roll,reg,department,semester,GPA,year) VALUES('$this->name','$this->roll','$this->reg','$this->department','$this->semester','$this->GPA','$this->year')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                echo '<div class="container"><div class="col-12 mt-2"><div class="alert alert-success text-center" role="alert">
                Result info added successfully
              </div></div></div>';
            }else{
                echo '<div class="container"><div class="col-12 mt-2"><div class="alert alert-danger text-center" role="alert">
                Something went wrong. Please try again.
              </div></div></div>';
            }
        }
        public function viewdata(){
            $this->sql= "SELECT * FROM result_insert";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo "Error";
            }
        }
        public function update($n,$r,$re,$d,$s,$g,$y){
            $this->name = $n;
            $this->roll = $r;
            $this->reg = $re;
            $this->department = $d;
            $this->semester = $s;
            $this->GPA = $g;
            $this->year = $y;
            $this->sql = "UPDATE result_insert SET name='$this->name', roll='$this->roll', reg='$this->reg', department='$this->department', semester='$this->semester', GPA='$this->GPA', year='$this->year' WHERE id='$this->id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                echo '<div class="container"><div class="col-12 mt-2"><div class="alert alert-success text-center" role="alert">
                Result info updated successfully
              </div></div></div>';
            }else{
                echo '<div class="container"><div class="col-12 mt-2"><div class="alert alert-danger text-center" role="alert">
                Something went wrong. Please try again.
              </div></div></div>';
            }
        }
        public function delete($id){
            $this->id = $id;
            $this->sql = "DELETE FROM result_insert WHERE id='$this->id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        public function search($kw){
            $this->keyword = $kw;
            $this->sql = "SELECT * FROM result_insert WHERE id='$this->keyword'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo "Not result found";
            }
        }
        public function search_result($r,$y){
            $this->roll = $r;
            $this->year = $y;
            $this->sql = "SELECT * FROM result_insert WHERE roll='$this->roll' AND year='$this->year'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo "Not result found";
            }
        }
        //session
        public function index(){
            if($_SESSION['user']>0){
                return true;
            }else{
                return false;
            }
        }
        public function retrive($u){
            $this->username = $u;
            $this->sql= "SELECT * FROM login WHERE uname='$this->username'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo "error";
            }
        }
        public function set_session($uid){
            session_start();
            $this->user= $uid;
            $_SESSION['user'] = $this->user;
        }  
        
    }
?>
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>