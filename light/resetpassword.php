<?php
include 'config2.php';
include 'config.php';
session_start();
if(isset($_SERVER['HTTP_REFERER'])) 
{

$_SESSION["current"]=$_SERVER['HTTP_REFERER'];
}
else
{
$_SESSION["current"]="index.php";

}
if(!isset($_SESSION["user"]))
{
$_SESSION["user"]='Sign in';
}
if($_SESSION["user"]=="Sign in")
{
$_SESSION["out"]="";

}
?>

<!DOCTYPE html>
<html>


<head>
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?4hWkVzXJXwcPADMWWIyvFAje3iUgWSUz";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
<!-- ==========================
Meta Tags 
=========================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- ==========================
Title 
=========================== -->
<title>Reset Password | Wonder Homes</title>

<!-- ==========================
Fonts 
=========================== -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,900,800' rel='stylesheet' type='text/css'>

<!-- ==========================
CSS 
=========================== -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/dragtable.css" rel="stylesheet" type="text/css">
<link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="assets/css/animate.css" rel="stylesheet" type="text/css">
<link href="assets/css/color-switcher.css" rel="stylesheet" type="text/css">
<link href="assets/css/custom.css" rel="stylesheet" type="text/css">
<link href="assets/css/color/red.css" id="main-color" rel="stylesheet" type="text/css">

<style> 

.navbar{
background-color:rgba(136, 136, 136, 0.63);
margin-bottom: 0px;

}

.fa{
color:#ffffff;
font-weight:300;
font-size:15px;
margin-top:15px;
}
h4{
color:#fff;
font-weight:600px;
font-size:28px;
font-family:Calibri;
}
h5{
font-size:28px;
}

body{
font-family:Calibri;
}


.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
width: 98%;
margin: auto;
}

.navbar-brand {
margin-top:-20px;
}

.


</style>

</head>
<body>

<!-- ==========================
SCROLL TOP - START 
=========================== -->
<div id="scrolltop" class="hidden-xs"><i class="fa fa-angle-up"></i></div>
<!-- ==========================
SCROLL TOP - END 
=========================== -->


<div id="page-wrapper"> <!-- PAGE - START -->


<!-- ==========================
HEADER - END 
=========================== -->   

<!-- ==========================
BREADCRUMB - START 
=========================== -->

<!-- ==========================
BREADCRUMB - END 
=========================== -->

<!-- ==========================
ACCOUNT - START 
=========================== -->
<section class="content account">
<div class="container">
<div class="row">
<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
<div class="login-form-wrapper no-border">
<form action="reset.php" method="post">
<h3>Lost Password</h3>
<p>Enter the e-mail address associated with your account. Click submit to have your password e-mailed to you.</p>
<div class="form-group">
<?php $id=$_GET['id'];?>

<label>Password<span class="required">*</span></label>
<input type="password" name="password" class="form-control">
<input type="hidden" name="id" value="<?php echo $id;  ?>"
</div>
<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
</form>
</div>
</div>
</div>
</div>
</section>
<!-- ==========================
ACCOUNT - END 
=========================== -->


<!-- ==========================
FOOTER - START 
=========================== -->


</div> <!-- PAGE - END -->

<!-- ==========================
JS 
=========================== -->        
<script src="assets/code.jquery.com/jquery-latest.min.js"></script>
<script src="assets/code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/jquery.dragtable.js"></script>
<script src="assets/js/jquery.card.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/twitterFetcher_min.js"></script>
<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
<script src="assets/js/color-switcher.js"></script>
<script src="assets/js/custom.js"></script>
<script>
$("#txtSearchKeyword").autocomplete({
source: "assets/keyword.php",
select: function (event, ui) {
//console.log(ui['item']['value']);
$('#hidden_keyword').val(ui['item']['value']);
},
// search: function () { $(this).addClass('auto-complete-loading'); },
//open: function () { $(this).removeClass('auto-complete-loading'); },
appendTo: '.keywords'
}).bind('focus');


</script>
</body>
</html>