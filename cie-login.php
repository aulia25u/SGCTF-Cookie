<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Toko Kue Cookie</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<center>
<br><br>
<h1>Shinon Ngidam Cookie</h1>
<br>
<?php 
if($_COOKIE['admin']== "true" ) {
?>
<div class="alert alert-success alert-dismissible fade show">
		 <h4>sgctf21{Bud1_b3li_Ku3}</h4>
</div>
<br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/cGzujGfXrlI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<?php
     }
	 else{
		 ?>
<div class="alert alert-info alert-dismissible fade show">

		 <h4> Tapi Sayang Disini Gaada Flagnya</h4>
		 <h4> Coba Chek Toko Cookie</h4>
</div>

		 <?php
	 }
?>
	 <div class="login100-pic js-tilt" data-tilt>
                        <img src="kue.jpeg" alt="IMG" height="25%" width="25%">
                    </div>
<center>
</html>