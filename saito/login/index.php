
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
    header("Refresh: 0,5");
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
// login and password verification function
function login_validate()
{
    global $conn;
    if (isset ($_POST['submit'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = $conn->query("SELECT id,username, pass, email FROM users WHERE email= '$email'");
// password check
        if ($sql->num_rows > 0) {

            $data = $sql->fetch_array();
            if (password_verify($password, $data['pass'])) {

                $nimi = $data['username'];
				$email2 = $data['email'];
                setcookie("AsiakasNimi", $nimi);
				setcookie("AsiakasEmail",$email2);
                $message=" ";
            header("Refresh:0; url=index.php" );

            } else {
            $message="Email tai salasana vaarin";
            header("Refresh:2; url=index.php" );
              
            }
        } else {
            $message="Email tai salasana vaarin";
            header("Refresh:2; url=index.php" );
        }
    }
    return $message;
}
?>
<body>

</body>
