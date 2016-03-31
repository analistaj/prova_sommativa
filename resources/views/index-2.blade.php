<!DOCTYPE html>
<html lang="en">
<head>
<title>Reservation</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="booking/css/booking.css">
<link rel="stylesheet" href="css/stuck.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
    <script src="booking/js/booking.js"></script>

<script>
 $(document).ready(function(){

  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});

  }); 
</script>
<!--[if lt IE 9]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">


<![endif]-->
</head>

<body>
<!--==============================
              header
=================================-->
<header>
<!--==============================
            Stuck menu
=================================-->
  <section id="stuck_container">
    <div class="container">
      <div class="row">
        <div class="grid_12">
        <h1>
          <a href="index.html">
            <img src="images/logo.png" alt="Logo alt">
          </a>
        </h1>  
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li><a href="index.html">home</a></li>
               <li><a href="index-1.html">menu</a></li>
               <li class="current"><a href="index-2.html">reservation</a></li>
               <li><a href="index-3.html">blog</a></li>
               <li><a href="index-4.html">contacts</a></li>
             </ul>
            </nav>        
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</header>        

<!--=====================
          Content
======================-->
<section class="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 30, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="grid_8">
        <h2>Prenota il tuo tavolo</h2>
        <img src="images/page3_img1.jpg" alt="" class="img_inner fleft inn__1">
        <div class="extra_wrapper">
          <div class="text1 tx__1"><a href="#">Vivamus at magna non nunc </a></div>
          <p>Rehoncus. Aliquam nibh antegestas id ictum ado. Praesenterto faucibus maleada faucibusnec laeetert metus id laoreet </p>
          <p>Nullam consectetur orci sed nulla facilisisequaterto. Curabitur vel lorem sit amet nulla perermentum. Aliquam nibh ante, egestas id dictum a, commodo luctus libero.</p>
          Praesent faucibus malesuada faucibus. Donecertolin laoreet metus id laoreet malesuada.  orem ipsum dolor sit amet, consectetur adipiscing elit. 
        </div>
        <div class="clear"></div>
        <h2>Informazioni utili</h2>
        <div class="text1 tx__1"><a href="#">Hivamus at magna non nuncerto limonit nelowert sedrolino. Integer convallis orci vel miеter laoreet, at ornare lorem consequat. Phasellus erat nisl, auctor vel velit sed.</a></div>
        <p>Nehoncus. Aliquam nibh antegestas id ictum ado. Praesenterto faucibus maleada faucibusnec laeet metus id laoreet rolito monert dertolimon.</p>
        <p>Nullam consectetur orci sed nulla facilisisequat. Curabitur vel lorem sit amet nulla perermentum. Aliquam nibh ante, egestas id dictum a, commodo luctus libero. </p>
        Praesent faucibus malesuada faucibus. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed nulla facilisis consequat. Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. <br>
        <a href="#" class="btn">leggi di più</a>
      </div>
      <div class="grid_4">
        <h2>I nostri orari</h2>
        <div class="form_title color1">
        We are open 7 days a week - 8 AM to 12 PM <br>+1 101 889 9898</div>
        <form id="bookingForm">
          <div class="tmInput">
              <input name="Name" placeHolder="Name:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
          </div>
        <div class="tmInput">
          <input name="Email" placeHolder="Email:" type="text" data-constraints="@NotEmpty @Required @Email">
        </div>     
         <div class="clear f_sep1"></div>
          <strong class="dt">Check-in</strong>
         <label class="tmDatepicker">
          <input type="text" name="Date"  placeHolder='10/05/2014' data-constraints="@NotEmpty @Required @Date">
        </label>
        <div class="clear"></div>
          <strong class="dt">Check-out</strong>
        <label class="tmDatepicker">
          <input type="text" name="Date"  placeHolder='20/05/2014' data-constraints="@NotEmpty @Required @Date">
        </label>
        <div class="clear"></div>
        <div class="fl1 ">
        <em>Adults</em>
        <select name="Adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
            <option>1</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        <div class="clear height1"></div>
       
        
        </div>
        <div class="fl1">
        <em>Children</em>
        <select name="Children" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
            <option>0</option>
            <option>0</option>
            <option>1</option>
            <option>2</option>
        </select>
        
        </div>
        <div class="clear"></div>
        
        <div class="tmTextarea">
            <textarea name="Message" placeHolder="Message:" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
        </div>
        <div class="ta__right">
        <a href="#" class="btn" data-type="reset">cancella</a>
        <a href="#" class="btn" data-type="submit">invia</a>
        </div>
    </form>
      </div>
    </div>
  </div>
</section>
<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12">  
        <div class="socials">
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-google-plus"></a>
          <a href="#" class="fa fa-pinterest"></a>
        </div>
        <div class="copyright"><span class="brand"></span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
        </div>
      </div>
    </div>
  </div> 
</footer> 
  <script>
  $(function (){
        $('#bookingForm').bookingForm({
            ownerEmail: '#'
        });
    })
    $(function() {
   $('#bookingForm input, #bookingForm textarea').placeholder();
  });
    
  </script>
</body>
</html>

