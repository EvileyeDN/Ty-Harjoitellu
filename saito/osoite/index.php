
<?php
work_page();

function work_page(){
	staart();

	finnish();
}
function obyavlenie(){
	$message=cab_validate();
	?>
	<p><?php echo $message; ?></p>
	<?php
}


function cab_validate()
{
    global $conn;
        $id=$_GET['id'];
		$sql = $conn->query("SELECT * FROM rabota.osoite WHERE id= '$id'");
		if(!isset($_GET['id'])){
          $_GET['id']='';
                               }
         $data = $sql->fetch_array();
         $osoite = $data['osoite'];
		 ?>

  <div class="row">
      <div class="col">
          <h5>Työssäoppimispaikan nimi</h5><p><?php echo $osoite;?></p>
      </div>
  </div>

<?php } ?>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <?php logo(); ?>
	<div class="collapse navbar-collapse" id="navbarNav">
	</div>
	<!--<p>Haku button</p>-->
    <?php VivodTest(); ?>
	<!--<p>cab button</p>-->
	<?php if(isset($_COOKIE['AsiakasNimi'])){?>
		<form method="post" action="index.php?act=cab">
			<input type="submit" value="Cab" class="knopkaba btn-outline-primary btn-lg me-3">

		</form> <?php }  ?>
	<!--<p>etusivu</p>-->
	<form  action="index.php">
		<input type="submit" value="Takaisin" class="knopkaba btn-outline-primary btn-lg me-3">
	</form>
	<!--<p>Kirjaidu Ulos button</p>-->
	<?php KirjaiduUlos(); function KirjaiduUlos(){if(isset($_COOKIE['AsiakasNimi'])){?>
		<form method="post" action="index.php">
			<input type="submit" name="kirjaiduulos" id="kirjaiduulos" value="Kirjaidu Ulos" class="knopkaba btn-outline-primary btn-lg me-3" />

		</form> <?php } } ?>
	<!--<p>Registration button</p>-->
    <?php RegaButton();
    KirjaiduUlos3();  ?>
	<!--<p>Login button</p>-->
    <?php $myClass->LoginButton(); KirjaiduUlos2();  ?>
</nav>

<!--<p>Full declaration output</p>-->
<div class="vivod">
<div class="container-rabota mb-2">
	<div class="card">
		<div class="card-body">
			<?php obyavlenie(); ?>
		</div>
	</div>
</div>
</div>
