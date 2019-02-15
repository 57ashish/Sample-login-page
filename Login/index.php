
<?php include"header.php" ?>
<?php 
  if(isset($_POST['log'])) {
     $connection=mysqli_connect("localhost","root","","page");
     $name=$_POST['fname'];
     $email=$_POST['email'];
     $password=$_POST['pass'];
     /* $hashFormat="$2y$10$";
        $salt="gdhkfncksoreldmchsyu22";
         $hashF_and_salt=$hashFormat . $salt;
         $encript_password=crypt($password,$hashF_and_salt);
     $query="insert into login values ('{$name}','{$email}','{$encript_password}')";
     for password encryption*/
     $query="insert into login values ('{$name}','{$email}','{$password}')";
     $insert_query=mysqli_query($connection,$query);
     if($insert_query)
     {
      
      header("Location:welcome.php");
     }
}
?>
     <div class=" col-lg-4 ml-md-auto mt-4" id="login"  >
        <div class="card border border-primary rounded-lg bg-warning">
         <div class="card-header text-center text-primary"><h2>WELCOME</h2></div>
          <div class="card-body">
                  <form method="post" action="">
             <div class="form-group row">
               <label for="fullname" class="col-sm-4 col-form-label text-primary">FullName</label>
               <div class="col-sm-12">
                 <input type="text" class="form-control" id="name" name="fname" placeholder="Full Name">
               </div>
             </div>
             <div class="form-group row">
               <label for="email" class="col-sm-4 col-form-label text-primary ">Email</label>
               <div class="col-sm-12">
                 <input type="email" class="form-control" id="email" name="email" placeholder="Email">
               </div>
             </div>
             <div class="form-group row">
               <label for="password" class="col-sm-4 col-form-label text-primary">Password</label>
               <div class="col-sm-12">
                 <input type="password" class="form-control" id="password" name="pass" placeholder="password">
               </div>
             </div>
           </div>
            <button type="submit" name="log" class="btn btn-primary ml-3 mr-3  p-2">Login</button>
            <button type="submit" name="sub" class="btn btn-primary ml-3 mr-3 mt-1 mb-2 p-2">Sign up</button>
         </form>
         </div>
      </div>
    </div>
  <?php include"footer.php" ?>
