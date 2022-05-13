<?php
search_page();

function search_page(){
	$message=search_validate();
	staart();
	?>
	<p style="margin: 0px"><?php echo $message; ?></p>
	<?php
	finnish();
}
// Search function
function search_validate(){
global $conn;}
if (isset ($_POST['submit'])) {

    $search1 = $_POST['search'];
	$search2 = $_POST['search2'];
// delete from search bar Oy
	$search = preg_replace('/\bOy\b/i', '', $search1);
// search by company and area	
	$sql = "SELECT * FROM work WHERE company LIKE '%$search%' AND Toimiala = '$search2'";
	$result = $conn->query($sql);
//if the search by company and area does not return results, the search is performed by company or area
	if (mysqli_num_rows($result)==0){
		$sql ="SELECT * FROM work WHERE company LIKE '%$search%' OR Toimiala LIKE '%$search2%'";
		$result = $conn->query($sql);
		$notfound = "Hakusi ei löytynyt, saatat olla kiinnostunut seuraavista vaihtoehdoista";
	}
    //output function
    function vivod($result)
    {
		// message output
		global $notfound;
		if (!empty($notfound)){?>
		<div class="container-rabota mb-2">
		<div class="card">
		<div class="card-header">
		<h3 class="card-title text-center"><?php echo $notfound; ?></h3>
		</div>
		</div>
		</div>
		<?php
		}
		// search information output
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $id2=$row['id']?>
                    <div class="container-rabota mb-2">
                        <a class="ssilka" href="index.php?act=work&id=<?php echo $id2 ?>">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Työssäoppiminenpaika</h5>
                            </div>
                            <div class="card-body">
                                <p class="mb-3"> Toimiala: <?php echo $row['Toimiala'] ?>  </p>
                                <p class="mb-3"> Postitoimipaikka:  <?php echo mb_strimwidth($row['Postitoimipaikka'], 0,100, '...') ?> </p>
                                <p class="mb-2">  Yhtiö:  <?php echo $row['company' ]?> </p>
                            </div>
                        </div>
                        </a>
                     </div>

            <?php }
        }
    }
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
    <!--<p>cab button</p>-->
    <?php if(isset($_COOKIE['AsiakasNimi'])){?>
        <form method="post" action="index.php?act=cab">
            <input type="submit" value="Oma luokka" class="knopkaba btn-outline-primary btn-lg me-3">

        </form> <?php }  ?>
    <!--<p>Etusivu</p>-->
    <form  action="index.php">
        <input type="submit" value="Takaisin" class="knopkaba btn-outline-primary btn-lg me-3">
    </form>
    <!--<p>Kirjaidu Ulos Button</p>-->
    <?php KirjaiduUlos(); function KirjaiduUlos(){if(isset($_COOKIE['AsiakasNimi'])){?>
        <form method="post" action="index.php">
            <input type="submit" name="kirjaiduulos" id="kirjaiduulos" value="Kirjaidu Ulos" class="knopkaba btn-outline-primary btn-lg me-3" />

        </form> <?php } } ?>
    <!--<p>Registration button</p>-->
     <?php RegaButton();
KirjaiduUlos3();  ?>
    <!--<p>Login button</p>-->
       <?php 	 
	 $myClass->LoginButton();
KirjaiduUlos2();  ?>
</nav>
<!--<p>Displaying search results</p>-->
<div class="vivod">
    <span>
        <?php
            vivod($result);
        ?>
    </span>
</div>
</body>

