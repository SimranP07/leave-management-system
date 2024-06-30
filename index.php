<?php
    include 'templates/header.php'
?>
<?php
   /* $user='select * from users';
    $result=$con->query($user);
    echo"<pre>";
    print_r($result);
    echo"<pre>";
    print_r($result->fetch_assoc());
    die

    $newuser= "INSERT INTO `users`(`id`, `full_name`, `username`, `email`, `password`, `role_id`, `department_id`, `phone`, `address`, `dob`, `gender`, `status`, `created_at`, `updated_at`) 
    VALUES ('[value-1]','Sneha Tandale','Sneha101','snehatandale2265@gmail.com','sneha2265','1','1','7865657867','Peth Vadgaon','2006-11-1','Female','1','[value-13]','[value-14]')";

    if ($con->query($newuser) === TRUE)
    {
        echo"Record is Inserted Successfully";
    }
    else
    {
        echo"Error Occured";
    }

    $newuser= "UPDATE `users` SET `full_name`='Simran Vishwakarama' WHERE `id`=2";

    if ($con->query($newuser) === TRUE)
    {
        echo"<br> Record is Updated Successfully";
    }
    else
    {
        echo"Error Occured";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username= $_POST['username'];
        $password= $_POST['password'];

        $user = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";

        $result = $con->query($user);
       if($result){
            header()
       }*/
        
   

?>
    <section class="hero-banner d-flex align-item-center justify-content-center">
        <div class="container text-center">
            <h1 class="">Leave Management System</h1>
            <p>Internship Project</p>
            <a href="login.php"><button class="btn btn-primary">Login</button></a>
        </div>
    </section>   


<?php
    include 'templates/footer.php'
?>