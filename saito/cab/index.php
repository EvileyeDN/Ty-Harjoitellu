<!DOCTYPE html >
<?php
cab_page();

// message value after import depending on address bar value
if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'Jäsentietojen tuonti onnistui.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Tapahtui ongelma, yritä uudelleen.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Lähetä kelvollinen CSV-tiedosto.';
            break;
        default:
            $statusType = '';
            $statusMsg = '';
    }
}

function cab_page(){
	staart();

	finnish();
}

function dannie(){
$message=cab_validate();
?>
<p><?php echo $message; ?></p>
<?php
}

function cab_validate()
{
global $conn;

// displaying information through cookies
$AsiakasEmail2= $_COOKIE["AsiakasEmail"];
$sql = $conn->query("SELECT * FROM users WHERE email= '$AsiakasEmail2'");
$data = $sql->fetch_array();
$nimi = $data['username'];
$email = $data['email'];
$work=$data['work'];
$check=$data['yes'];
echo $nimi,"<br>", $email,"<br>", $work, "<br>";
// display import modal button for admin only
if ($check=='1'){?>
<button type="button" class="btn btn-outline-primary btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#importcsv">Tuonti</button>
<?php 
// Display message after import
global $statusMsg;
if(!empty($statusMsg)){ ?>
<div class="col-xs-12">
    <div class="col mt-3"><h5><?php echo $statusMsg; ?></h5></div>
</div>
<?php } ?>
 <!--<p>Modal import window</p>-->
<div class="modal fade" id="importcsv" tabindex="-1" aria-labelledby="importcsvLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ChangepasswordlLabel">Tuonti</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
				 <!--<p>File upload form</p>-->
			<div class="modal-body">
            <div class="row mb-2" id="importFrm">
			<form action="index.php?act=updatebd" method="post" enctype="multipart/form-data">
			<div class="col">
		  <input class="form-control col-sm-3 me-0" type="file" name="file" />
		  </div>
		  <!--<p>Selecting a field separator</p>-->
		  <div class="row">
		  <div class="form-outline col-sm-6 mt-3">
		  <p>Valitse Sarakkeiden erotin:</p>
		  </div>
		  <div class="form-outline col-sm-5 mt-2">
		  <select class="form-select" aria-label="Выберете разделитель" name="razdelitel" id="razdelitel" type="razdelitel">
                                    <option value=",">,</option>
                                    <option value=";">;</option>
									</select>
		  </div>
		  </div>
		  
		  <div class="col mt-3">
            <input type="submit" class="btn btn-outline-primary btn-lg me-3" name="importSubmit" value="Tuonti">
			<input type="submit" class="btn btn-outline-primary btn-lg me-3" name="importUpdateSubmit" value="päivittää">
			</div>
        </form>
					</div>
                      

 <?php

}
}
?>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <?php logo(); ?>
    <div class="collapse navbar-collapse" id="navbarNav">
    </div>
<!--<p>Haku button</p>-->
         <?php VivodTest(); ?>
    <!--<p>Etusivu</p>-->
    <form  action="index.php">
        <input type="submit" value="Takaisin" class="knopkaba btn-outline-primary btn-lg me-3">
    </form>
	<!--<p>Kirjaidu Ulos</p>-->
    <?php KirjaiduUlos(); function KirjaiduUlos(){if(isset($_COOKIE['AsiakasNimi'])){?>
        <form method="post" action="index.php">
            <input type="submit" name="kirjaiduulos" id="kirjaiduulos" value="Kirjaidu Ulos" class="knopkaba btn-outline-primary btn-lg me-3" />

        </form> <?php } } ?>
	<!--<p>Button for assigning the admin panel to the user</p>-->
	<?php 
	$AsiakasEmail2= $_COOKIE["AsiakasEmail"];
	$sql = $conn->query("SELECT * FROM users WHERE email= '$AsiakasEmail2'");
	$data = $sql->fetch_array();
	$check=$data['yes'];
	if ($check=='1'){?>
		<button type="button" class="btn btn-outline-primary btn-lg me-3" data-bs-toggle="modal" data-bs-target="#AddDeletAdmin">
        Ylläpitäjän oikeudet
        </button>
		
		<div class="modal fade" id="AddDeletAdmin" tabindex="-1" aria-labelledby="AddDeletAdminlLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ChangepasswordlLabel">Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <form action="index.php?act=admin" method="post" >
                        <div class="row mb-2">
                            <label for=inputemail"" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input class="form-control" id="emailpol" name="emailpol" type="emailpol">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input  class="knopka" type="submit" value="Lisää järjestelmänvalvojan oikeudet" name="AddAdmin">
					<input  class="knopka" type="submit" value="Poista järjestelmänvalvojan oikeudet" name="DeletAdmin">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
		
		
		
		
	<?php	
	}
		?>
		
    <!--<p>Change password button</p>-->
<form method="post" class="d-flex">
    <button type="button" class="btn btn-outline-primary btn-lg me-3" data-bs-toggle="modal" data-bs-target="#Changepassword">
        Vaihda salasana
        </button></form>
 <!--<p>Modal password change window</p>-->
    <div class="modal fade" id="Changepassword" tabindex="-1" aria-labelledby="ChangepasswordlLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ChangepasswordlLabel">Registrointi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <form action="index.php?act=psw" method="post" >
                        <div class="row mb-2">
                            <label for=inputemail"" class="col-sm-4 col-form-label">Salasana</label>
                            <div class="col-sm-8">
                                <input class="form-control" id="inputpassword" name="password" type="password">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for=inputPassword"" class="col-sm-4 col-form-label">uusi salasana</label>
                            <div class="col-sm-8">
                                <input class="form-control" id="inputnewPassword" name="newpassword" type="newpassword">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input  class="knopka" name="submit" type="submit" value="Vaihda salasana" >
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</nav>
 <!--<p>Displaying user information through a function</p>-->
<div style="margin-top: 10%">
<div class="container-rabota mb-2">
<div class="card">
    <div class="card-body text-center">
    <?php dannie(); ?>
    </div>
</div>
</div>
</div>
</body>