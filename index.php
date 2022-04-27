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
          

       <h1> My cart</h1>
      			<table>

      			<?php 
      			if(isset($_SESSION['Piza1'])){

      			foreach ($_SESSION['Piza1'] as $key => $value) {
      					

      					@$total=$total+$value['price'];
      					echo "
      					
    
  <tr>
    <th>sr</th>
    <th>$value[image]</th>
    <th>$value[name]</th>
    <th>$value[price]</th>
    
    <th > <input type='number',value=$value[Quntity] ,'min=1' 'max=10'</th>
    <th><button type='submit'>Remove</button> </th>

  </tr>
  ";
}}


  ?>
  
  
</table>


<div class="total ">
	<button class="Button"> order Now</button>
  	
  	<h4>TOTAL RS.<?php echo @$total ?></h4>

  </div>






  </div>
  <span class="icon" id="menu-icon" onclick="opennav()"><img src="img/Group 9.svg"></span>

  <div class="container">
      <div class="logo">
          <img src="img/Image 1.png">
      </div>
  </div>
  
      


	
	<!----Slide Section---->

	<div class="slide">
		
		<div class="slide-secondary-text">
			<p>When you eat food with your family and friends,!<br />  it always tastes better! </p>
		</div>
		<div class="btn">
			<a href="#"><button type="button" class="btn1">Explore Products <span><i class="fas fa-arrow-right arw"></i></span> </button></a>
			<a href="#"><button type="button" class="btn2">About Us</button></a>
		</div>
	</div>
	<!----Product Section---->
	
		<div class="product">
		     <h2> Our produc good for the helth</h2>
		     <hr>
	    </div>


    <!----Product ---->



<div  class="row ">

<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'piza');




$query="SELECT  `name`, `image`, `price`, `dis` FROM `piza` order by id ASC ";

$queryfire = mysqli_query($con, $query);
$num = mysqli_num_rows($queryfire);

if ($num>0) {

	while ($product= mysqli_fetch_array($queryfire)) {
		//print_r($product);
	// code...
		?>
	    
<div class="fram"> 

   	<form  action="manage.php" class=cart method="POST" >
			<img src=" <?php echo $product['image'];?>">
			<h6 > <?php echo $product['name'];?></h6>			

			 <p > RS.<?php echo $product['price'];?> <td>
			 <span > <?php echo $product['dis'];?> % off</span> </p>

       <button type="submit" name="save_cart"> Save Cart   </button>
       <input type="hidden" name="image" value="<?php echo $product['image'];?>">

       <input type="hidden" name="name" value="<?php echo $product['name'];?>">
       <input type="hidden" name="price"  value="<?php echo $product['price'];?> ">
       <input type="hidden" name="discount" value="<?php echo $product['dis'];?> ">
       
	    
	    </form>
	    </div>
		 
<?php
}
}
?>
</div>

   




































   <div  class="row1">

<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'piza');




$query="SELECT `id`, `name`, `price`, `image` FROM `burger`  order by id ASC ";

$queryfire = mysqli_query($con, $query);
$num = mysqli_num_rows($queryfire);

if ($num>0) {

	while ($product= mysqli_fetch_array($queryfire)) {
		//print_r($product);
	// code...
		?>
	    
<div class="fram1"> 

   	<form  action="manage.php" class=cart1 method="POST" >
			<img src=" <?php echo $product['image'];?>">
			<h6 > <?php echo $product['name'];?></h6>			

			 <p > RS.<?php echo $product['price'];?> 
			  </p>

       <button type="submit" name="save_cart"> Save Cart   </button>
       <input type="hidden" name="image" value="<?php echo $product['image'];?>">

       <input type="hidden" name="name" value="<?php echo $product['name'];?>">
       <input type="hidden" name="price"  value="<?php echo $product['price'];?> ">
      
	    
	    </form>
	    </div>
		 
<?php
}
}
?>
</div>


	
	
		
<!----Footer Section---->

	<div class="footer">

		<!----1st Section---->

		<div class="section1">
			<div class="logo">
				<a href="#"><img src="img/Image 1.png"></a>
			</div>
			
			<div class="social-icons">
				<a href="#"><img src="img/Twitter.svg" class="twitter"></a>
				<a href="#"><img src="img/Facebook.svg" class="facebook"></a>
				<a href="#"><img src="img/Instagram.svg" class="instagram"></a>
			</div>
		</div>

		<!----2nd Section---->

		<div class="section2">
			<div class="home">
				<p class="title">Home</p>
				<ul>
					<a href="#"><li>Why Choose Us?</li></a>
					<a href="#"><li>Our Solutions</li></a>
					<a href="#"><li>Our Investors</li></a>
					<a href="#"><li>Testimonials</li></a>
				</ul>
			</div>
		</div>

		<!----3rd Section---->

		<div class="section3">	
			<div class="company">
				<p class="title">Company</p>
				<ul>
					<a href="#"><li>About Us</li></a>
					<a href="#"><li>Expertise</li></a>
					<a href="#"><li>Investors</li></a>
					<a href="#"><li>Explore</li></a>
				</ul>
			</div>
		</div>

		<!----4th Section---->

		<div class="section4">	
			<div class="help">
				<p class="title">Help</p>
				<ul>
					<a href="#"><li>Contact Us</li></a>
					<a href="#"><li>Privacy Policy</li></a>
					<a href="#"><li>Terms of Use</li></a>
				</ul>
			</div>
		</div>

	</div>


	<!----Copyright Section---->

	<div class="copyright"> 		
		<p>&copy; All Rights Reserved GIMS 2021</p>
	</div>

	<!----Javascript Section---->

	<script type="text/javascript",src="https://kit.fontawesome.com/d97045d1aa.js"
      crossorigin="anonymous">
      function opennav()
      {
          document.getElementById("sidenav").style.width = "500px";
          document.getElementById("menu-icon").style.display = "none";
      }

      function closenav()
      {
          document.getElementById("sidenav").style.width = "0";
          document.getElementById("menu-icon").style.display = "block";
      }
  </script>


	


</body>
</html>