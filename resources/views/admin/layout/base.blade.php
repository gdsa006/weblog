<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Pixel Code -->
    
    <!-- Facebook Pixel Code -->
<script>    
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '2626358977606933'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1"  src="https://www.facebook.com/tr?id=2626358977606933&ev=PageView &noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

    <!-- Fontawesome-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <link rel="icon" type="image/png" href="images/favicon.png">
    <style>
    /* Toggle Styles */

#viewport {
  padding-left: 250px;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#content {
  width: 100%;
  position: relative;
  margin-right: 0;
}

/* Sidebar Styles */

#sidebar {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 250px;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background: #37474F;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#sidebar header {
  background-color: #263238;
  font-size: 20px;
  line-height: 52px;
  text-align: center;
}

#sidebar header a {
  color: #fff;
  display: block;
  text-decoration: none;
}

#sidebar header a:hover {
  color: #fff;
}

#sidebar .nav{
  
}

#sidebar .nav a{
  background: none;
  border-bottom: 1px solid #455A64;
  color: #CFD8DC;
  font-size: 14px;
  padding: 16px 24px;
}

#sidebar .nav a:hover{
  background: none;
  color: #ECEFF1;
}

#sidebar .nav a i{
  margin-right: 16px;
}

table tbody tr{
    color: #666666;
}

table tr:hover{
    cursor: pointer;
    color: #000000;

}

.nav>li.active{
  background-color: #000000;
}

.nav>li.active a{
  color: #419a1c !important;
}

#uploaded_image{
  width: 100%;
    float: left;
    background: #efeeec;
    padding: 50px 0;
}

#uploaded_image img{
  margin: 0 auto;
    width: 263px;
    display: block;
}

.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover{
  background-color: #419a1c;
    border-color: #419a1c;
}

.pagination>li>a, .pagination>li>span{
  color: #419a1c;
}
</style>
    <title>AVO Realty | Showings on Demand | Live, Interactive, Virtual</title>
    </head>
    <body>
        




    <div id="viewport">
@include('./admin/layout/sidebar')
  <!-- Content -->
  <div id="content">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
            </a>
          </li>
          <li><a href="/" target="_blank">View Site</a></li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">
      @yield('admincontent')
    </div>
  </div>
</div>








   
        <!-- Bootstrap jQuery -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.navScroll.js') }}"></script>
    <!-- All Script -->
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Owl Carousel -->
    <!-- <script src="{{ asset('js/jquery.min.js') }}"></script> -->
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <!-- Animation -->
    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init({
            duration: 1200,
        });
        // Form Reposnce
        var url = window.location.href;
        if (url.split("?").length > 1) {
            if (url.split("?")[1].startsWith("success=true")) {
                var message = ((decodeURI(url.split("?")[1])).split("&")[1]).split("=")[1];
                $("#sucessAlert #message").html(message);
                $("#sucessAlert").modal("show");
                $("#sucessAlert").click(base_url);
            } else if (url.split("?")[1].startsWith("success=false")) {
                var message = ((decodeURI(url.split("?")[1])).split("&")[1]).split("=")[1];
                // $("#failedAlert #message").html(message);
                $("#failedAlert").modal("show");
                $("#failedAlert").click(base_url);
            }
        }

        function base_url() {
            window.location.href = window.location.href.split("?")[0]
        }
    </script>
         <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
    <script>
    tinymce.init({
        selector:'textarea.description',
        height: 300
    });
    </script>
<script>
          var adminUploadPic = "{{ route('ajaxupload') }}";
  </script>
<script>
$(document).ready(function(){

 $('#upload_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url: adminUploadPic,
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
     console.log(data);
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    $('#uploaded_image').html(data.uploaded_image);
    $('#blog-image').val(data.file_name);
   }
  })
 });

});
</script>
    </body>
</html>
