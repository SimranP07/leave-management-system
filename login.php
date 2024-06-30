<?php
    include 'templates/header.php'
?>

<div class="container d-flex align-item-center justify-content-center">    
    <div class="card" style="width:400px">
        <div class="card-header text-center">
            <h5>Login</h5>
        </div>
        <div class="card-body">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                <label>Username</label><br>
                <i class="fa-solid fa-user"></i>
                <input type="text" name="username" class="form-control" placeholder="e.g. PeterParker" required><br>
                <label>Password</label><br>
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" class="form-control" placeholder="Must contain atleast 6 characters" required><br>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
	</div>
</div>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $username= $_POST['username'];
        $password= $_POST['password'];

        $user = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";

        $result = $con->query($user);
        if($result){
            header("Location: http://localhost/Leave-Management-System/admin/index.php"); 
            exit();
        }
    }
?>
<?php
    include 'templates/footer.php'
?>