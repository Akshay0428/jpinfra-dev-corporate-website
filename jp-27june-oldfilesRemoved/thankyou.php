<?php
if(isset($_POST['email'])) {

  $first_name = $_POST['first_name']; // required
    $email_from = $_POST['email']; // required
    $phone = $_POST['phone']; // not required
    $comments = $_POST['comments']; // required
	$email_from2 = 'sales2@jpinfra.com'; // required
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "sales@jpinfra.com,niranjan.mahadik@jpinfra.com"; 
	//$email_to = "service.technofiz@gmail.com,aniket@ehindustan.com";   
    
    $email_subject = "Enquiry from Jp Infra";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    //$email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
   
//   $email_from="pradeepg.wrm@gmail.com";
// $email_to="test.wrm@whiteriversmedia.com";//
// $email_subject="Form Submit";
$email_message = '<html><body>';
$email_message.='<table cellpadding="0" cellspacing="0" border="0" width="700" align="center" style="color:#0f0f0f;font-size:10px;font-family:Arial,Helvetica,sans-serif">
  <tbody>
   
  
   
   


   <tr>
   <td style="font:bold;font-size:17px;padding:0px 80px">Form details below.</td>
   </tr>
    
   <tr>
   <td style="font:bold;font-size:17px;padding:15px 80px">
   Name : '.clean_string($first_name).' <br>
   Email : '.clean_string($email_from).' <br>
   Contact No. : '.clean_string($phone).'  <br>
   Message : '.clean_string($comments).'<br>


   </td>
   </tr>

   
   
   
   
   
   <tr><td style="font:bold;font-size:17px;padding:0px 80px;padding-bottom:0px">
   
    </td></tr>
</tbody></table>';
      $email_message .= "</body></html>";
// create email headers
//$headers = 'From: '.$email_from."\r\n".
//'Reply-To: '.$email_from."\r\n" .
//'X-Mailer: PHP/' . phpversion();

$headers = "From: " . $email_from2 . "\r\n";
$headers .= "Reply-To: ". $email_from2 . "\r\n";
//$headers .= "CC: ajeet.wrm@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


@mail($email_to, $email_subject, $email_message, $headers);

// // create email headers
// $headers = 'From: '.$email_from."\r\n".
// 'Reply-To: '.$email_from."\r\n" .
// 'X-Mailer: PHP/' . phpversion();
// @mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<!DOCTYPE html>
<html lang="zxx">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Basic Page Needs
    ================================================== -->
    
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us – JP INFRA</title> 
  <meta name="language" content="en" />
  <meta content='width=device-width, initial-scale=1.0' name='viewport' />
  <meta name="description" content="Contact JP Infra. Get the complete details including address, phone number and email-id or fill up the contact form and our team will get in touch with you." />
  <meta name="keywords" content="contact, contact us, contact details, contact jp infra, jp infra" /> 
  <meta property="og:title" content="Contact Us – JP INFRA"/>
  <meta property="og:description" content="Contact JP Infra. Get the complete details including address, phone number and email-id or fill up the contact form and our team will get in touch with you.">
  <meta property="og:image" content="http://www.jpinfra.com/images/logo.png">
  <meta property="og:type" content="website"/> 

  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@jpinfraofficial">
  <meta name="twitter:creator" content="@jpinfraofficial">
  <meta name="twitter:url"content="http://www.jpinfra.com/contact-us.php">
  <meta name="twitter:description" content="Contact JP Infra. Get the complete details including address, phone number and email-id or fill up the contact form and our team will get in touch with you.">
  <meta name="twitter:image" content="http://www.jpinfra.com/images/logo.png"> 
  
  <!-- ==============================================
  Favicons
  =============================================== -->
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  
  <!-- ==============================================
  CSS VENDOR
  =============================================== -->
  <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
  
  <!-- ==============================================
  Custom Stylesheet
  =============================================== -->
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  
    <script type="text/javascript" src="js/vendor/modernizr.min.js"></script>

	
	<!-- Facebook Pixel Code 14-01-2020 -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '211768772712142');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=211768772712142&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code 14-01-2020 -->


<!-- Global site tag (gtag.js) - Google Ads: 691954232 15-06-2020-->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-691954232"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-691954232');
</script>

<!-- Event snippet for JP Infra conversion page 15-06-2020-->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-691954232/O8VuCJ6dmdABELjE-ckC'});
</script>

<!-- Global site tag (gtag.js) - Google Ads: 691954232 15-06-2020-->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-691954232"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-691954232');
</script>

<!-- Facebook Pixel Code 15-06-2020 -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '234349474670485');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=234349474670485&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


<!-- Facebook Event Pixel Code 14-01-2020 -->
<script>
  fbq('track', 'Lead');
</script>
<!--End of Facebook Event Pixel Code 14-01-2020 -->    

</head>
<script>
  fbq('track', 'Lead');
</script>

<body>
  
  <!-- Load page -->
  <div class="animationload">
    <div class="loader"></div>
  </div>
  
  <!-- BACK TO TOP SECTION -->
  <a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

  <!-- HEADER -->
    <div class="header header-1">
      <!-- TOPBAR -->
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-4">
            <!-- <div class="topbar-left">
              <div class="welcome-text">
              We help the world growing since 1983
              </div>
            </div> -->
          </div>
          <div class="col-sm-9 col-md-8">
            <div class="topbar-right">
              <ul class="topbar-menu">
                <li><a href="tel:1800 313 9999" title=""><i class="fa fa-phone"></i> 1800 313 9999</a></li>
                <li><a href="mailto:sales@jpinfra.com" title=""><i class="fa fa-envelope"></i> sales@jpinfra.com </a></li>

                <li><a href="contact.html" title=""><i class="fa fa-user"></i> Enquire Now </a></li>

              </ul>
              <ul class="topbar-sosmed">
              <li>
                <a href="https://www.facebook.com/jpinfraofficial"  target="_blank"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="https://twitter.com/jpinfraofficial" target="_blank"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/company-beta/1595120" target="_blank"><i class="fa fa-linkedin"></i></a>
              </li>
              <li>
                <a href="https://www.youtube.com/channel/UCKbh2Wm3zyCywNdanDNhvOA" target="_blank"><i class="fa fa-youtube"></i></a>
              </li>
              
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- enquiry now pop-up starts -->

      <!-- enquiry now pop-up ends -->
    </div>

    <!-- NAVBAR SECTION -->
    <div class="navbar navbar-main">
    
      <div class="container container-nav">
        <div class="row">
            
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
          </div>

          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" />
            <img src="images/logo-stiky.png" alt="" class="logo-stiky" />
          </a>

          <nav class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html"> HOME </a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> ABOUT US <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="Overview.html">Overview</a></li>
                <li><a href="management-team.html">Management Team</a></li>
                <li><a href="operational-focus.html">Operational Focus</a></li>
                <li><a href="areas-of-expertise.html">Areas of Expertise</a></li>
                <li><a href="partners.html">Partners</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> OUR PROJECTS <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                                    <li><a href="jp-north/codenamenowornever/" target="_blank">Codename Now Or Never</a></li>							
                                    <li><a href="https://www.jpinfra.com/jp-north/celeste/" target="_blank">Celeste</a></li>							
                                    <li><a href="http://www.codenameopenstreets.com/" target="_blank">Codename OpenStreets</a></li>
                                    <li><a href="http://www.codenamehotcake.com/" target="_blank">Codename Hotcake</a></li>
                                    <li><a href="jp-north/" target="_blank">North Garden City</a></li> 
                                    <li><a href="jp-decks/" target="_blank">JP Decks</a></li>	
                                    <li><a href="altus.html">Altus</a></li>
                                    <li><a href="unity-tower.html">Unity Towers</a></li>
                                    <li><a href="http://www.jpinfra.com/chalet-amar/" target="_blank">Chalet Amar</a></li>
                                    <li><a href="boulevard.html">Boulevard</a></li> 
                                </ul>
              </li>
              <li><a href="media.html">MEDIA</a></li>

              <li><a href="life.html">LIFE@JP INFRA</a></li>

              <li><a href="contact.html">CONTACT US</a></li>

            </ul>
          </nav>
            
        </div>
      </div>
      </div>

    </div>
    <!-- Header ends -->
 
  <!-- BANNER -->
  <div class="section banner-page">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="title-page">Contact</div>
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contact Us</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- CONTACT -->
  <div class="section contact">
    <div class="container">
      <div class="row">
        <div class="clearfix"></div>
        <div class="col-sm-4 col-md-4">
<!--          <div class="widget download">
            <a href="#" class="btn btn-secondary btn-block btn-sidebar"><span class="fa  fa-file-pdf-o"></span> Company Brochure</a>
          </div> -->
          <div class="widget contact-info-sidebar"> 
            
            <div class="widget-title">
              Contact Info
            </div>
            <ul class="list-info">
              <li>
                <div class="info-icon">
                  <span class="fa fa-map-marker"></span>
                </div>
                <div class="info-text">
                    <b>JP Infra Mumbai Pvt. Ltd.</b><br>
                                    4th Floor, Viraj Towers, <br>
                                    Western Express Highway, <br>
                                    Near WEH Metro Station, <br>
                                    Andheri (E), Mumbai-400093

                </div> </li>
              <li>
                <div class="info-icon">
                  <span class="fa fa-phone"></span>
                </div>
                <div class="info-text">022 42415678</div>
              </li>
              <li>
                <div class="info-icon">
                  <span class="fa fa-phone-square"></span>
                </div>
                <div class="info-text">1800-313-9999</div>
              </li>
              <li>
                <div class="info-icon">
                  <span class="fa fa-fax"></span>
                </div>
                <div class="info-text">022 42415679</div>
              </li>
              <li>
                <div class="info-icon">
                  <span class="fa fa-envelope"></span>
                </div>
                <div class="info-text">sales@jpinfra.com </div>
              </li>
              
            </ul>
          </div> 

        </div>
        <div class="col-sm-8 col-md-8">

            <p class="section-heading-3">Thank you, your enquiry has been submitted. </p>
            <div class="margin-bottom-30"></div>
            <h3 class="section-heading-2">
              Should you wish to receive more information then please call 1800 313 9999.
              <br>

             
            </h3>


           </div>

      </div>
      
    </div>
  </div>  
   
  <!-- FOOTER SECTION -->
  <div class="footer">
    
    <div class="container">
      
      <div class="row">
        <div class="col-sm-3 col-md-3">
          <div class="footer-item">
            <img src="images/logo.png" alt="logo bottom" class="logo-bottom">
            <p>Established in 2006, JP Infra is fast maturing into a business with ambitious growth plans and a powerful vision of the types of development it wants to bring to market.</p>
            <div class="footer-sosmed">
              <a href="https://www.facebook.com/jpinfraofficial" target="_blank" title="">
                <div class="item">
                  <i class="fa fa-facebook"></i>
                </div>
              </a>
              <a href="https://twitter.com/jpinfraofficial" target="_blank" title="">
                <div class="item">
                  <i class="fa fa-twitter"></i>
                </div>
              </a>
              <a href="https://www.linkedin.com/company-beta/1595120/" target="_blank" title="">
                <div class="item">
                  <i class="fa fa-linkedin"></i>
                </div>
              </a> 
              <a href="https://www.youtube.com/channel/UCKbh2Wm3zyCywNdanDNhvOA" target="_blank" title="">
                <div class="item">
                  <i class="fa fa-youtube"></i>
                </div>
              </a>
               
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="footer-item">
            <div class="footer-title">
              NEWS &amp; MEDIA
            </div>
            <ul class="recent-post">
              <li><a href="http://epaper.loksatta.com/1070692/indian-express/14-%2001-2017#page/19/2" title="">LOKSATTA</a>
              <span class="date"><i class="fa fa-clock-o"></i> January 14, 2017</span></li>

              <li><a href="http://epaper.enavabharat.com/?mod=1&pgnum=1&edcode=87&pagedate=2017-1-14" title="">NAVBHARAT</a>
              <span class="date"><i class="fa fa-clock-o"></i> January 14, 2017</span></li>


            </ul>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="footer-item">
            <div class="footer-title">
              QUICK LINKS
            </div>
            <ul class="list">
                <li><a href="Overview.html" title="">ABOUT US</a></li>
              <li><a href="projects.html" title="">OUR PROJECTS</a></li>
              <li><a href="media.html" title="">MEDIA</a></li>
              <li><a href="life.html">LIFE@JP INFRA</a></li>
              <li><a href="contact.html">CONTACT US</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="footer-item">
            <div class="footer-title">
              SUBSCRIBE
            </div>
            <p>Once you are subscribed to our newsletter, you will get the latest updates and features on the website. The subscription is free.</p>
            <form action="#" class="footer-subscribe">
                    <input type="email" name="EMAIL" class="form-control" placeholder="Enter your email">
                    <input id="p_submit" type="submit" value="send">
                    <label for="p_submit"><i class="fa fa-envelope"></i></label>
                    <p>Get latest updates and offers.</p>
                  </form>
          </div>
        </div>
      </div>
    </div>
    
    <div class="fcopy">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <p class="ftex">&copy; 2017 JP Infra - All Rights Reserved</p> 
          </div>
        </div>
      </div>
    </div>
    
  </div>
  
  <!-- JS VENDOR -->
  <script type="text/javascript" src="js/vendor/jquery.min.js"></script>
  <script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/vendor/jquery.superslides.js"></script>
  <script type="text/javascript" src="js/vendor/owl.carousel.js"></script>
  <script type="text/javascript" src="js/vendor/bootstrap-hover-dropdown.min.js"></script>
  <script type="text/javascript" src="js/vendor/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript" src="js/vendor/easings.js"></script>
  <script type="text/javascript" src="js/vendor/isotope.pkgd.min.js"></script>

  <!-- sendmail -->
  <script type="text/javascript" src="js/vendor/validator.min.js"></script>
  <script type="text/javascript" src="js/vendor/form-scripts.js"></script>
  
  <script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&amp;ver=4.1.5'></script>

  <script type="text/javascript" src="js/script.js"></script>
  //Script to generate captcha code
<script>
    jQuery('#mainCaptcha').bind("cut copy paste", function (e) {
        e.preventDefault();
    })
    jQuery(document).ready(function () {
        Captcha();
    })

    function Captcha() {

        var alpha = new Array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        var i;
        for (i = 0; i < 6; i++) {
            var a = alpha[Math.floor(Math.random() * alpha.length)];
            var b = alpha[Math.floor(Math.random() * alpha.length)];
            var c = alpha[Math.floor(Math.random() * alpha.length)];
            var d = alpha[Math.floor(Math.random() * alpha.length)];
            var e = alpha[Math.floor(Math.random() * alpha.length)];
            var f = alpha[Math.floor(Math.random() * alpha.length)];
            var g = alpha[Math.floor(Math.random() * alpha.length)];
        }
        var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' ' + f + ' ' + g;
        document.getElementById("mainCaptcha").value = code
    }
    function ValidCaptcha() {
        var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
        var string2 = removeSpaces(document.getElementById('txtInput').value);
        if (string1 == string2) {
            return true;
        } else {
            return false;
        }
    }
    function removeSpaces(string) {
        return string.split(' ').join('');
    }
    jQuery(document).on('click', '.refreshSpan', function () {

    })
</script>

    
</body>

</html>
 
<?php
 
}
?>