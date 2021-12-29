<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ilmia Novida Sari - Web Desain</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset ('img/favicon.png')}}" rel="icon">
  <link href="{{asset ('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset ('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset ('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset ('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset ('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset ('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset ('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset ('css/style.css')}}" rel="stylesheet">


  {{-- Template Image Editor  --}}

    <link
      type="text/css"
      href="https://uicdn.toast.com/tui-color-picker/v2.2.6/tui-color-picker.css"
      rel="stylesheet"
    />
    <link
      type="text/css"
      href="{{asset('dist/tui-image-editor.css')}}"
      rel="stylesheet"
    />
    <style>
      @import url(http://fonts.googleapis.com/css?family=Noto+Sans);
      html,
      body {
        height: 100%;
        margin: 0;
      }
    </style>
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li class="mb-2" href="#logo" class="navbar-brand md-4"><img src="img/logo.jpeg" alt="..." class="rounded-circle" height="54" width="63"></li>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Template</span></a></li>
        <li><a href="#edit" class="nav-link scrollto"><i class="bx bx-edit"></i> <span>Edit</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>APLIKASI DESAIN</h1>
      <p>Web Desain <span class="typed" data-typed-items="Banner, Stiker, Kartu Nama, Editing"></span></p>
      <p>Web Desain Untuk Semua Orang</p>
      <!-- <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Dashboard Templates</h2>
          <p>Websites ini juga menyediakan templates dan desain khusus untuk mempermudah kalian
          </p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-app">Stiker</li>
              <li data-filter=".filter-card">Kartu Nama</li>
              <li data-filter=".filter-web">Banner</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset ('img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{asset ('img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus">
     
                    </i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  <a href="#edit" > <i class="bx bx-edit" onclick="myFunction('{{asset ('img/portfolio/portfolio-1.jpg')}}')"></i></a>
                 
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset ('img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{asset ('img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  <a href="#edit" > <i class="bx bx-edit" onclick="myFunction('{{asset ('img/portfolio/portfolio-2.jpg')}}')"></i></a>
                
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset ('img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{asset ('img/portfolio/portfolio-3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  <a href="#edit" > <i class="bx bx-edit" onclick="myFunction('{{asset ('img/portfolio/portfolio-3.jpg')}}')"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset ('img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{asset ('img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  <a href="#edit" > <i class="bx bx-edit" onclick="myFunction('{{asset ('img/portfolio/portfolio-4.jpg')}}')"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset ('img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{asset ('img/portfolio/portfolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  <a href="#edit" > <i class="bx bx-edit" onclick="myFunction('{{asset ('img/portfolio/portfolio-5.jpg')}}')"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset ('img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{asset ('img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  <a href="#edit" > <i class="bx bx-edit" onclick="myFunction('{{asset ('img/portfolio/portfolio-6.jpg')}}')"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset ('img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{asset ('img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  <a href="#edit" > <i class="bx bx-edit" onclick="myFunction('{{asset ('img/portfolio/portfolio-7.jpg')}}')"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset ('img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{asset ('img/portfolio/portfolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  <a href="#edit" > <i class="bx bx-edit" onclick="myFunction('{{asset ('img/portfolio/portfolio-8.jpg')}}')"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset ('img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{asset ('img/portfolio/portfolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  <a href="#edit" > <i class="bx bx-edit" onclick="myFunction('{{asset ('img/portfolio/portfolio-9.jpg')}}')"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <section id="edit" class="portfolio section-bg">
    <div class="container" data-aos="zoom-in" data-aos-delay="350">
      <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
 <title>React Laravel</title>

 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
 {{-- <div id="app"></div>

 <script src="{{ asset('js/app.js') }}"></script> --}}

 <div id="tui-image-editor-container"></div>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.4.0/fabric.js"
    ></script>
    <script
      type="text/javascript"
      src="https://uicdn.toast.com/tui.code-snippet/v1.5.0/tui-code-snippet.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://uicdn.toast.com/tui-color-picker/v2.2.6/tui-color-picker.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.3/FileSaver.min.js"
    ></script>
    <script type="text/javascript" src="{{asset ('dist/tui-image-editor.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/theme/white-theme.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/theme/black-theme.js')}}"></script>
    <script>
      // Image editor
      // var imageEditor = new tui.ImageEditor("#tui-image-editor-container", {
      //   includeUI: {
          
      //     theme: blackTheme, // or whiteTheme
      //     initMenu: "filter",
      //     menuBarPosition: "bottom"
      //   },
      //   cssMaxWidth: 700,
      //   cssMaxHeight: 1000,
      //   usageStatistics: false
      // });
      // window.onresize = function() {
      //   imageEditor.ui.resizeEditor();
      // };
      // var imageURL = '{{asset ('img/portfolio/portfolio-9.jpg')}}' // this url be dynamic
var imageEditor = new tui.ImageEditor('#tui-image-editor-container', {
includeUI: {
uiSize: {
width: '100%',
height: '500px'
},
theme: blackTheme,
initMenu: 'filter',
menuBarPosition: 'bottom'
},
cssMaxWidth: 600,
cssMaxHeight: 400
});
imageEditor.loadImageFromURL(imageURL, "SampleImage").then(result=>{
imageEditor.ui.resizeEditor({imageSize: 300});
}).catch(err=>{
console.error("Something went wrong:", err);
})

function myFunction(url) {

  var imageEditor = new tui.ImageEditor('#tui-image-editor-container', {
includeUI: {
  loadImage: {
path: url,
name: 'SampleImage'
},
uiSize: {
width: '100%',
height: '500px'
},
theme: blackTheme,
initMenu: 'filter',
menuBarPosition: 'bottom'
},
cssMaxWidth: 600,
cssMaxHeight: 400
});
imageEditor.loadImageFromURL(url, "SampleImage").then(result=>{
imageEditor.ui.resizeEditor({imageSize: 300});
}).catch(err=>{
console.error("Something went wrong:", err);
})
}
    </script>
</body>
    </div>
  </section><!-- End Edit -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Ilmia Novida Sari</h3>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset ('vendor/aos/aos.js')}}"></script>
  <script src="{{asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset ('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset ('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset ('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset ('vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset ('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset ('vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset ('vendor/waypoints/noframework.waypoints.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset ('js/main.js')}}"></script>

</body>

</html>