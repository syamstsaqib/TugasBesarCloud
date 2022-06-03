<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Borneo Bumerang Store</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('template-beranda')}}/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('template-beranda')}}/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('template-beranda')}}/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('template-beranda')}}/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('template-beranda')}}/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{asset('template-beranda')}}/css/owl.carousel.min.css">
      <link rel="stylesheet" href="{{asset('template-beranda')}}/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
	<!-- header section start -->
    <div class="header_section header_main">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<div class="logo"><a href="#"><img src="{{asset('storage/bumerang/logo3(1).png')}}"></a></div>
				</div>
				<div class="col-sm-7">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link" href="{{url('/')}}">Beranda</a>
                           <a class="nav-item nav-link" href="{{url('/jenis-bumerang')}}">Jenis Bumerang</a>
                           <a class="nav-item nav-link" href="{{url('/toko-bumerang')}}">Toko Bumerang</a>
                           <!-- <a class="nav-item nav-link" href="racing boots.html">Racing Boots</a>
                           <a class="nav-item nav-link" href="contact.html">Contact</a>
                           <a class="nav-item nav-link last" href="#"><img src="images/search_icon.png"></a>
                           <a class="nav-item nav-link last" href="contact.html"><img src="images/shop_icon.png"></a> -->
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
    </div>
    



@yield('content')





<div class="section_footer">
		<div class="container">
			<div class="mail_section">
				<div class="row">
					<div class="col-sm-6 col-lg-2">
						<div><a href="#"><img src="{{asset('storage/bumerang/logo3(1).png')}}"></a></div>
					</div>
					<div class="col-sm-6 col-lg-2">
						<div class="footer-logo"><img src="{{asset('template-beranda/images/phone-icon.png')}}"><span class="map_text">+62 895394473002</span></div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="footer-logo"><img src="{{asset('template-beranda/images/email-icon.png')}}"><span class="map_text">syamsbbc@gmail.com</span></div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="social_icon">
							<ul>
								<li><a href="https://www.facebook.com/groups/194307497278681/"><img src="{{asset('template-beranda/images/fb-icon.png')}}"></a></li>
								<!-- <li><a href="#"><img src="{{asset('template-beranda/images/twitter-icon.png')}}"></a></li> -->
								<li><a href="https://www.instagram.com/asosiasi.abi/"><img src="{{asset('template-beranda/images/instagram.png')}}" style="width: 31px; height: 25px;"></a></li>
								
								<!-- <li><a href="#"><img src="{{asset('template-beranda/images/google-icon.png')}}"></a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>
			<div class="footer_section_2">
				<div class="row">
					<!-- <div class="col-sm-4 col-lg-2">
						<p class="dummy_text"> ipsum dolor sit amet, consectetur ipsum dolor sit amet, consectetur ipsum dolor sit amet,</p>
					</div> -->
					<div class="col-sm-4 col-lg-2">
						<h2 class="shop_text">Alamat </h2>
						<div class="image-icon"><img src="{{asset('template-beranda/images/map-icon.png')}}"><span class="pet_text">Jl. Belum jadi RT 99 No. 99 Balikpapan Utara</span></div>
					</div>
					<div class="col-sm-4 col-md-6 col-lg-3">
						<h2 class="shop_text">Product</h2>
						<div class="delivery_text">
							<ul>
								<li>Indoor</li>
								<li>Outdoor</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4 col-lg-3">
						<h2 class="adderess_text">Tambahan</h2>
						<div class="delivery_text">
							<ul>
								<li><p>Jika ada yang ingin ditanyakan bisa menghubungi contact diatas atau ke 0808912345</p></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4">
						<img src="{{asset('storage/bumerang/login.jpeg')}}" class="text-right">
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- section footer end -->
	<div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html  Templates</a></div>


      <!-- Javascript files-->
      <script src="{{asset('template-beranda')}}/js/jquery.min.js"></script>
      <script src="{{asset('template-beranda')}}/js/popper.min.js"></script>
      <script src="{{asset('template-beranda')}}/js/bootstrap.bundle.min.js"></script>
      <script src="{{asset('template-beranda')}}/js/jquery-3.0.0.min.js"></script>
      <script src="{{asset('template-beranda')}}/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="{{asset('template-beranda')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="{{asset('template-beranda')}}/js/custom.js"></script>
      <!-- javascript --> 
      <script src="{{asset('template-beranda')}}/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
        });
         
         
$('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
      </script> 
   </body>
</html>