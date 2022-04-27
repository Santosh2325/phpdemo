<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Landing Page</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	


	<!----Font Awesome Kit---->

	<script src="https://kit.fontawesome.com/d97045d1aa.js" crossorigin="anonymous"></script>

	<!----Custom Stylesheet----> 


	<link rel="stylesheet" type="text/css" href="css/style1.css">
	
</head>
<body>


	<!----Navbar Section---->

	<div id="sidenav" class="sidenav">
		<span class="icon" id="menu-icon" onclick="opennav()"><img src="img/Group 9.svg"></span>
      <a href="javascript:void(0)" class="close-icon" onclick="closenav()">&times;</a>
      <a href="#">Menu 1</a>
      <a href="#">Menu 2</a>
      <a href="#">Menu 3</a>
      <a href="#">Menu 4</a>
      <a href="#">Menu 5</a>
  </div>
  <span class="icon" id="menu-icon" onclick="opennav()"><img src="img/Group 9.svg"></span>

  <div class="container">
      <div class="logo">
          <img src="img/Image 1.png">
      </div>
  </div>
  
      <div class="cart">
          <img src="img/Image .png">


      </div>

      <div class="container">
      	<div class="row">
      		<div class="col-lg-12">

      			<h1> My cart</h1>
      			<table>

      			<?php 
      			if(isset($_SESSION['Piza1'])){

      			foreach ($_SESSION['Piza1'] as $key => $value) {
      					

      					$Total=$total+$value['price'];
      					echo "
      					
    
  <tr>
    <th>sr</th>
    <th>$value[image]</th>
    <th>$value[name]</th>
    <th>$value[price]</th>
    
    <th> <input type='number',value='$value'['Quntity] ,'min=1' 'max=10'</th>
    <th><button type='submit'>Remove</button> </th>

  </tr>
  ";
}}


  ?>
  
  
</table>


<div class="total ">
  	<h3>total</h3>
  	<h4><?php echo $total ?></h4>
  	<button>order now</button>
  </div>







  </body>
  </html>





