<?php session_start();

	if(isset($_GET['nm']) and isset($_GET['cat']) and isset($_GET['page']) and isset($_GET['pub']) and isset($_GET['avl']))
	{
		//add item
		$_SESSION['cart'][] = array("nm"=>$_GET['nm'],"cat"=>$_GET['cat'],"page"=>$_GET['page'],"pub"=>$_GET['pub'],"avl"=>$_GET['avl'],"qty"=>"1");
		
		header("location: viewcart.php");
		
	}
	else if(isset($_GET['id']))
	{
		//del a item
		$id = $_GET['id'];
		unset($_SESSION['cart'][$id]);
		header("location: viewcart.php");
	}
	else if(!empty($_POST))
	{
		//update qty
		foreach($_POST as $id=>$val)
		{
			$_SESSION['cart'][$id]['qty']=$val;
			header("location: viewcart.php");
		}
	}
	else
	{
		header("location:checkout.php");
	}
	
	

?>