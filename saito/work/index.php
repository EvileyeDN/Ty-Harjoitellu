
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

// full information output function
function cab_validate()
{
    global $conn;
        $id=$_GET['id'];
		$sql = $conn->query("SELECT * FROM work WHERE id= '$id'");
		if(!isset($_GET['id'])){
          $_GET['id']='';
                               }
         $data = $sql->fetch_array();
         //$description2 = $data['description'];
		 $company2 = $data['company'];
         $Kayntiosoite = $data['Kayntiosoite'];
         $kotisivu = $data['kotisivu'];
         $tunnus = $data['tunnus'];
         $Postitoimipaikka = $data['Postitoimipaikka'];
		 $Osoite = $data['Osoite'];
		 $Yhteyshenkilö = $data['Yhteyshenkilö'];
		 $Yhteyshenkilönsähköpostiosoite = $data['Yhteyshenkilönsähköpostiosoite'];
		 $YhteyshenkilöPuhelin = $data['YhteyshenkilöPuhelin'];
		 //$CompanyID=$data['OsoiteID'];
		 ?>

  <div class="row">
      <div class="col">
          <h5>Työssäoppimispaikan nimi</h5><p><?php echo  $company2;?></p>
      </div>
      <div class="col">
          <h5>Y-tunnus</h5><p><?php echo  $tunnus;?></p>
  </div>
  </div>
  <div class="row">
  <div class="col">
<h5>Osoite</h5><p><?php if (empty($Osoite)){ echo "---";} else echo  $Osoite ?></p>
		 <!--<p> page go button osoite
		 <button type="submit" class="knopkaba btn-outline-primary btn-lg"  onclick="window.location.href = 'index.php?act=osoite&id=<?php echo $CompanyID ?>'">Lue lisä</button> 
		 </p>-->
      </div>
      <div class="col">
          <h5>Postitoimipaikka</h5><p><?php if (empty($Postitoimipaikka)){ echo "---";} else echo  $Postitoimipaikka ?></p>
      </div>
	  </div>
	  <div class="row">
	  <div class="col">
        <h5>Käyntiosoite</h5><p><?php if (empty($Kayntiosoite)){ echo "---";} else echo  $Kayntiosoite ?></p>
    </div>
    <div class="col">
        <h5>Yrityksen kotisivu</h5><p><?php if (empty($kotisivu)){ echo "---";} else echo  $kotisivu ?></p>
    </div>
	</div>
<div class="row">
	  <div class="col">
        <h5>Yhteyshenkilö</h5><p><?php if (empty($Yhteyshenkilö)){ echo "---";} else echo  $Yhteyshenkilö ?></p>
    </div>
    <div class="col">
        <h5>Yhteyshenkilön sähköpostiosoite</h5><p><?php if (empty($Yhteyshenkilönsähköpostiosoite)){ echo "---";} else echo  $Yhteyshenkilönsähköpostiosoite ?></p>
    </div>
</div>
<div class="row">
	  <div class="col">
        <h5>Yhteyshenkilö puhelin</h5><p><?php if (empty($YhteyshenkilöPuhelin)){ echo "---";} else echo  $YhteyshenkilöPuhelin ?></p>
    </div>
</div>

<?php } ?>

<body>
<!--<p>logo</p>-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <?php logo(); ?>
	<div class="collapse navbar-collapse" id="navbarNav">
	</div>
	<!--<p>Haku button</p>-->
    <?php VivodTest(); ?>
	<!--<p>cab button</p>-->
	<?php if(isset($_COOKIE['AsiakasNimi'])){?>
		<form method="post" action="index.php?act=cab">
			<input type="submit" value="Oma luokka" class="knopkaba btn-outline-primary btn-lg me-3">

		</form> <?php }  ?>
	<!--<p>etusivu</p>-->
	<form  action="index.php">
		<input type="submit" value="Takaisin" class="knopkaba btn-outline-primary btn-lg me-3">
	</form>
	<!--<p>kirjaidu ulos button</p>-->
	<?php KirjaiduUlos(); function KirjaiduUlos(){if(isset($_COOKIE['AsiakasNimi'])){?>
		<form method="post" action="index.php">
			<input type="submit" name="kirjaiduulos" id="kirjaiduulos" value="Kirjaidu Ulos" class="knopkaba btn-outline-primary btn-lg me-3" />

		</form> <?php } } ?>
	<!--<p>registation button</p>-->
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
