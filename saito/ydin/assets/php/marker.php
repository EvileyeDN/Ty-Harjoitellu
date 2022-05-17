<?php 
// Siibusto function
function staart(){
global $title; ?>
<!DOCTYPE html >
<html lang="ru">
<head>
    <meta charset="UTF-8">
<?php load_assets(); ?>
<title><?php echo $title; ?></title>
<body>
<?php
}
// Load assets functions
function load_assets(){ ?>
 <script></script>
<script type="text/javascript" src="ydin/assets/js/jquery-3.6.0.min.js"> </script>
<script type="text/javascript" src="ydin/assets/js/javascript.js"> </script>
<script type="text/javascript" src="ydin/assets/js/bootstrap.bundle.js"> </script>
<script type="text/javascript" src="ydin/assets/js/bootstrap.js"> </script>
<script type="text/javascript" src="ydin/assets/js/bootstrap.min.js"> </script>
<link type="text/css" href="ydin/assets/css/design.css" rel="stylesheet" media="all" />
<link type="text/css" href="ydin/assets/css/bootstrap.css" rel="stylesheet" media="all" />
<link type="text/css" href="ydin/assets/css/font-awesome.min.css" rel="stylesheet" media="all" />


<?php
}
function finnish(){ ?>
</body>
</html>
<?php
}
?>