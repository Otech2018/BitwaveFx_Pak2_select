<?php include('../settings.php');
 
$active= "dash";


 
?>


 
<!doctype html>

<html>
	<head>

<?php     
require "script/mlc/script_head.php";
?>

<meta name="viewport" content="width=1024">
   

  
    <meta name="description" content="BEST INVESTMENT IN NIGERIA,  MAKE MONEY ONLINE, ">

    <meta name="keywords" content=" diploiders  ">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    
  <meta http-equiv="pragma" content="no-cache" />

   <title> <?php echo $site_name; ?> | ADMIN OFFICE </title>

	
	</head>

<body >
	<?php     
require "header_admin.php";







if( isset($_POST['update_settings'])  ){
	
	
						$total_deposit_manipulation = addslashes(htmlentities($_POST['total_deposit_manipulation']));
						$total_cashout_manipulation = addslashes(htmlentities($_POST['total_cashout_manipulation']));
						$last_deposit_manipulation = addslashes(htmlentities($_POST['last_deposit_manipulation']));
						$last_cashout_manipulation = addslashes(htmlentities($_POST['last_cashout_manipulation']));
						
					$query121e =  new run_query( "UPDATE `settings` SET total_deposit_manipulation='$total_deposit_manipulation', total_cashout_manipulation='$total_cashout_manipulation', last_deposit_manipulation='$last_deposit_manipulation', last_cashout_manipulation='$last_cashout_manipulation'   where id = 1 ") ;
						 echo "<script>alert(\" SETTINGS SAVED!!! \");</script>"; 
					  echo "<script>window.location.replace(\"admin_dash.php\");</script>"; 

				}






?>
    
<h1 align="center" class="deep-orange-text" >ADMIN OFFICE</h2>  

<div style="margin:25px;" >

		
	
		
		
		  <div class="row">
	
	
		<div class="col m2 l2 s0"></div>
		<div class="col m8 l8 s12">
		<form method="POST" >
		 <div class="card z-depth-4 deep-orange-text">
            <div class="card-content">
              <h2 align="center" style="color:#ff5722;">
			  <br/><b>	SETTINGS</b></h2>
            <div class="row" style="margin:-5px;">
        <div class="input-field col s12">
          <input id="email" type="number" class="validate" required="required" name="total_deposit_manipulation"  value="<?php echo $total_deposit_manipulation; ?>" />
            <label for="email" data-error="wrong" data-success="right"><i class="fa fa-envelope"></i> TOTAL DEPOSIT  </label>
        </div>
      </div>


	<div class="row" style="margin:-5px;">
        <div class="input-field col s12">
          <input id="email" type="number" class="validate" required="required" name="total_cashout_manipulation"  value="<?php echo $total_cashout_manipulation; ?>"   />
            <label for="email" data-error="wrong" data-success="right"><i class="fa fa-lock"></i> TOTAL CASH OUT </label>
        </div>
      </div>
	  
          <input type="hidden"  required="required" name="last_deposit_manipulation"  value="<?php echo $last_deposit_manipulation; ?>"   />
	  
	  

          <input  type="hidden"  required="required" name="last_cashout_manipulation"  value="<?php echo $last_cashout_manipulation; ?>"   />
	  <center>
	 <button type="submit" class="btn" style="background-color:#ff5722;" name="update_settings" >
	  <b>SAVE <i class="fa fa-sign-in"></i> </b></button>
	    </center>
	  </div>
            <div  sytle="font-size:15px;">
            </div> <br/>
          </div>
		</form>
		</div>
		<div class="col m2 l2 s0"></div>


	   
			</div>
			
			
</div>

  </div>
  <div class="footercurve"><img src="styles/images/footercurve.png" alt="" /></div>
</div>
<div class="footerwrap">
  </div>
</div>
	

 <?php     

require "script/mlc/home_footer.php";
?>




</body>

</html>
        