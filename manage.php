<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"]== 'POST')
{
if(isset($_POST['save_cart'])){
if(isset($_SESSION['Piza1'])){
	$myitems=array_column($_SESSION['Piza1'], 'name');
	if(in_array($_POST['name'],$myitems))

{
	echo "<script> alert('Iteam allreay added');
	window.location.href='index.php';</script>";



}
	$count=count($_SESSION['Piza1']);
	$_SESSION['Piza1'][$count]=array('name'=>$_POST['name'],'price'=>$_POST['price'], 'image'=>$_POST['image'], 'Quantity'=>1 );
	print_r($_SESSION['Piza1']);

		


	}

	else{
	$_SESSION['Piza1'][0]=array('name'=>$_POST['name'],'price'=>$_POST['price'],'image'=>$_POST['image'],'Quantity'=>1 );
     print_r($_SESSION['Piza1']);
	}
}


}	


if(isset($_POST['Remove'])){
	foreach ($_SESSION('Piza1') as $key => $value) {
print_r($key);


	}

}
 

?>