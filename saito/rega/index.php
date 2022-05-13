<?php
rega_page();

function rega_page(){
    $message=rega_validate();
    staart();
    ?>
    <div class="container-rabota content1">
            <div class="card">
                <div class="card-body w-1200">
                    <h2 class="card-title text-center"><?php echo $message ?>
                    </h2>
                </div>
            </div>
    </div>
    <?php
    finnish();
}
// Registration function
function rega_validate(){
    global $conn;
    if (isset ($_POST['submit'])) {


        $name = $_POST['username'];
        $email = $_POST['email'];
        $name2 = $_POST['name'];
        $surname = $_POST['surname'];
        $work = $_POST['work'];
        $password = $_POST['password'];
        $confpassword = $_POST['confpassword'];

		$select = mysqli_query($conn, "SELECT * FROM users WHERE email = '".$_POST['email']."'");
        $select2 = mysqli_query($conn, "SELECT * FROM users WHERE username = '".$_POST['username']."'");
        // message output
		if(mysqli_num_rows($select2))
        {
            $message="Login already exists";
            header("Refresh:2; url=index.php" );
        }
        else
         if(mysqli_num_rows($select)) 
		 {
    $message="Email already exists";
             header("Refresh:2; url=index.php" );
         }
		 else		 
        if ($password != $confpassword)
        {
            $message="Passwords do not match";
            header("Refresh:2; url=index.php" );
        }

        else
            if (trim($name) == "")
            {
                $message="Enter your name";
                header("Refresh:2; url=index.php" );
            }
            else
                if (strlen(trim($name))<=1)
                {

                    $message="Such a name cannot be";
                    header("Refresh:2; url=index.php" );
                }
                else if (trim($email) == "")
                {

                    $message="Enter email";
                    header("Refresh:2; url=index.php" );
                }
                else if (trim($password) == "")
                {
                    $message="Enter your password";
                    header("Refresh:2; url=index.php" );
                }
                else{
                    $hashepsw = password_hash($password, PASSWORD_ARGON2I);
                    $conn->query("INSERT INTO users (username,email,pass,name,surname,work) VALUES('$name','$email','$hashepsw','$name2','$surname','$work')");

                    $message="Registration completed successfully!";
                    header("Refresh:2; url=index.php" );
                }
        return $message;

    }
}
