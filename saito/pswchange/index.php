<?php
//Kirjaidu Ulos Function
function testfun()
{
//Poiscookie
    setcookie('AsiakasNimi', $_COOKIE['AsiakasNimi'], time()-1);
	setcookie('AsiakasEmail', $_COOKIE['AsiakasEmail'], time()-1);
}
if(array_key_exists('kirjaiduulos',$_POST)){
    testfun();
    header("Refresh: 1");
}
?>
<?php
login_page();

function login_page(){
	$message=login_validate();
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
// shange password function
function login_validate()
{
    global $conn;
    if (isset ($_POST['submit'])) {

        $AsiakasEmail2= $_COOKIE["AsiakasEmail"];
        $password = $_POST['password'];
		$password2 = $_POST['newpassword'];

        $sql = $conn->query("SELECT id,username, pass, email FROM users WHERE email= '$AsiakasEmail2'");
// check password
        if ($sql->num_rows > 0) {

            $data = $sql->fetch_array();
            if (password_verify($password, $data['pass'])) {
				$password2 = password_hash($password2, PASSWORD_ARGON2I);
				$sql = $conn->query("UPDATE users SET pass='00055' WHERE email='$AsiakasEmail2'");
				$sql = $conn->query("UPDATE users SET pass=REPLACE(pass,'00055','$password2') WHERE email IN('$AsiakasEmail2')");
				$message="Password change successful!";
                    header("Refresh:2; url=index.php" );

            } else {
                $message="Email tai salasana vaarin";
                header("Refresh:2; url=index.php" );
            }
        } else {
            $message="Email tai salasana vaarin";
            header("Refresh:2; url=index.php" );
        }
		   return $message;
    }
}
?>