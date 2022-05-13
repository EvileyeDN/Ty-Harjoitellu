<!DOCTYPE html >
<?php
index_page();

function index_page(){
	$message=index_validate();
	staart();
	?>
	<p style="margin: 0px"><?php echo $message; ?></p>
	<?php
	finnish();
}

function index_validate(){
global $conn;}
?>
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
<body>
<!--<p>logo</p>-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <?php logo(); ?>
    <div class="collapse navbar-collapse" id="navbarNav">
    </div>
    <!--<p>Haku button</p>-->
   <?php VivodTest(); ?>
    <!--<p>Cab button</p>-->
    <?php if(isset($_COOKIE['AsiakasNimi'])){?>
        <form method="post" action="index.php?act=cab">
            <input type="submit" value="Oma luokka" class="knopkaba btn-outline-primary btn-lg me-3">

        </form> <?php }  ?>
    <!--<p>Kirjaidu ulos button</p>-->
    <?php KirjaiduUlos(); function KirjaiduUlos(){if(isset($_COOKIE['AsiakasNimi'])){?>
        <form method="post">
            <input type="submit" name="kirjaiduulos" id="kirjaiduulos" value="Kirjaidu Ulos" class="knopkaba btn-outline-primary btn-lg me-3" />

        </form> <?php } } ?>
    <!--<p>Registration button</p>-->
  <?php RegaButton();
KirjaiduUlos3();  ?>
    <!--<p>Kirjaidu sisään button</p>-->
     <?php
	 $myClass->LoginButton(); KirjaiduUlos2();  ?>
	 </nav>
<!--<p>Random työ </p>-->
<div style="margin-top: 10%">
<?php random();?>
</div>
</body>
</html>

