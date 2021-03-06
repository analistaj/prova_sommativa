<!DOCTYPE html>
<html lang="en">
<head>
<title>Dove siamo - Broccolo Bill</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/form.css">
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
<script src="js/TMForm.js"></script>
<script src="js/modal.js"></script>

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
               <li><a href="/">home</a></li>
               <li><a href="menu">menu</a></li>
               <li><a href="prenotazioni">prenota</a></li>
               <li><a href="blog">blog</a></li>
               <li class="current"><a href="dovesiamo">contacts</a></li>
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
<section class="content ctn__1"><div class="ic"></div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h2>Dove siamo</h2>
        <div class="map">
          <div class="row">
            <div class="grid_9">
              <figure class="">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2863.345084003982!2d12.249644215419979!3d44.138129028955724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132ca4cb9fbd4afd%3A0x1c6a6eb040aafdda!2sVia+Fiume%2C+12%2C+47521+Cesena+FC!5e0!3m2!1sit!2sit!4v1459384795470" style="border:0"></iframe>
              </figure>
            </div>
            <div class="grid_3">
              <div class="map_block">
                <div class="map_title">Dove:</div>
                Via Fiume, 12 - Cesena  47521.
              </div>
              <div class="map_block">
                <div class="map_title">Telefono:</div>
                +1 800 559 6580 <br>+1 800 603 6035
              </div>
              <div class="map_block">
                <div class="map_title">Email:</div>
                <a href="#">info@broccolobill.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="grid_8">
        <p>24/7 support is on for all <span class="color1 fw"><a href="http://www.templatemonster.com/" rel="nofollow">premium themes</a></span>. <br>
          Guys from <span class="color1 fw"><a href="http://www.templatetuning.com/" rel="nofollow">Template Tuning</a></span> are always ready to help you with customization of the chosen theme.</p>
        Kas facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut velitoin pharetra luctus diama scelerisque eros convallis accumsan. 
      </div>
    </div>
  </div>
</section>
<div class="form_block">
  <div class="container">
    <div class="row">
      <div class="grid_11">
        <h2>Contattaci</h2>
        <form id="form" >
        <div class="form_spinner">
        <img src="images/Preloader_4.gif" alt="">
        </div>
        <div class="modal fade response-message">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
        asfasfasf
        </div>      
        </div>
        </div>
        </div>
        <div class="response-error-message"></div>
        <label class="name">
        <input type="text" name="name" placeholder="Nome:" value="" data-constraints="@Required @JustLetters" />
        <span class="empty-message">*Questo campo è richiesto.</span>
        <span class="error-message">*Questo non è un nome valido.</span>
        </label>         
        <label class="email">
        <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
        <span class="empty-message">*Questo campo è richiesto.</span>
        <span class="error-message">*Questo non è un nome valido.</span>
        </label>
        <label class="phone">
        <input type="text" name="phone" placeholder="Telefono:" value="" data-constraints="@Required @JustNumbers"/>
        <span class="empty-message">*Questo campo è richiesto.</span>
        <span class="error-message">*Questo non è un nome valido.</span>
        </label>
        <label class="message">
        <textarea name="message" placeholder="Messaggio:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
        <span class="empty-message">*Questo campo è richiesto.</span>
        <span class="error-message">*Questo non è un nome valido.</span>
        </label>
        <div class="clear"></div>
        <div class="btns">
        <a href="#" data-type="reset" class="btn">Cancella</a>
        <a href="#" data-type="submit" class="btn">Invia</a>
        </div>
        </form>   
      </div>
    </div>
  </div>
</div>
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
        <div class="copyright"><span class="brand"> </span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
        </div>
      </div>
    </div>
  </div> 
</footer> 
</body>
</html>