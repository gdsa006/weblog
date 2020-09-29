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

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">

    <!-- Fontawesome-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    
    <!-- OwlCarousel -->
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css">

    <!-- Animation -->
    <link rel="stylesheet" media="screen and (min-width: 768px)" href="css/aos.css">

    <link rel="icon" type="image/png" href="images/favicon.png">


    <title>AVO Realty | Showings on Demand | Live, Interactive, Virtual</title>
    </head>
    <body>
    @include('./layout/header')
    <div class="" id="wrapper">
        <div class="wrap">
            @yield('content')
        </div>
        @include('./layout/footer')
    </div>
        <!-- Bootstrap jQuery -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.navScroll.js"></script>
    <!-- All Script -->
    <script src="js/script.js"></script>

    <!-- Owl Carousel -->
    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="js/owl.carousel.js"></script>
    <!-- Animation -->
    <script src="js/aos.js"></script>

    
<script>        
var help = '{{ route('help') }}';         
var mail = '{{ route('mail') }}';
 </script>


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




<script>
$('.sendMail').on('submit', function(e){
    e.preventDefault();
    var form = document.forms.namedItem("contactForm");
    $('.sendMail input[type=submit]').val('Sending...');
    $('.sendMail input[type=submit]').attr('disabled','disabled');
    $.ajax({
        method: 'POST',
        url: mail,
        data: new FormData(form),
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            console.log(data);
            if(data.message == 'success'){
            }
            else{
                $("#validationErrors").html(data.message + '<br>');
            }
        }
    })
}); 
</script>
    </body>
</html>
