<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ilmia Novida Sari - Web Desain</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="{{ asset ('img/favicon.png') }}" rel="icon">
    <link href="{{ asset ('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset ('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset ('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset ('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    {{-- Template Image Editor --}}

    <link type="text/css" href="https://uicdn.toast.com/tui-color-picker/v2.2.6/tui-color-picker.css"
        rel="stylesheet" />
    <link type="text/css" href="{{ asset('dist/tui-image-editor.css') }}" rel="stylesheet" />
    <style>
        <blade import|%20url(http%3A%2F%2Ffonts.googleapis.com%2Fcss%3Ffamily%3DNoto%2BSans)%3B%0D>html,
        body {
            height: 100%;
            margin: 0;
        }

        .drawing-area {
            position: absolute;
            top: 60px;
            left: 122px;
            z-index: 10;
            width: 200px;
            height: 400px;
        }

        .canvas-container {
            width: 200px;
            height: 400px;
            position: relative;
            user-select: none;
        }

        /* Tempat Menaruh Warna */
        #tshirt-div {
            width: 500px;
            height: 620px;
            position: relative;
            background-color: #fff;
        }

        #canvas {
            position: absolute;
            width: 200px;
            height: 400px;
            left: 0px;
            top: 0px;
            user-select: none;
            cursor: default;
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
                <li class="mb-2" href="#logo" class="navbar-brand md-4"><img src="img/logo.jpeg" alt="..."
                        class="rounded-circle" height="54" width="63"></li>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
                </li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>Template</span></a></li>
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
                            <img src="{{ asset ('img/portfolio/portfolio-1.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset ('img/portfolio/portfolio-1.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                            class="bx bx-plus">

                                        </i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                    <a href="#edit"> <i class="bx bx-edit"
                                            onclick="myFunction('{{ asset ('img/portfolio/portfolio-1.jpg') }}')"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset ('img/portfolio/portfolio-2.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset ('img/portfolio/portfolio-2.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                    <a href="#edit"> <i class="bx bx-edit"
                                            onclick="myFunction('{{ asset ('img/portfolio/portfolio-2.jpg') }}')"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset ('img/portfolio/portfolio-3.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset ('img/portfolio/portfolio-3.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                    <a href="#edit"> <i class="bx bx-edit"
                                            onclick="myFunction('{{ asset ('img/portfolio/portfolio-3.jpg') }}')"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset ('img/portfolio/portfolio-4.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset ('img/portfolio/portfolio-4.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                    <a href="#edit"> <i class="bx bx-edit"
                                            onclick="myFunction('{{ asset ('img/portfolio/portfolio-4.jpg') }}')"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset ('img/jacket.png') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset ('img/jacket.png') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                    <a href="#edit"> <i class="bx bx-edit"
                                            onclick="gantiBG('{{ asset ('img/jacket.png') }}')"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset ('img/bomber.png') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset ('img/bomber.png') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                    <a href="#edit"> <i class="bx bx-edit"
                                            onclick="gantiBG('{{ asset ('img/bomber.png') }}')"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset ('img/sweatshirt.png') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset ('img/sweatshirt.png') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                    <a href="#edit"> <i class="bx bx-edit"
                                            onclick="gantiBG('{{ asset ('img/sweatshirt.png') }}')"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset ('img/polo.png') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset ('img/polo.png') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                    <a href="#edit"> <i class="bx bx-edit"
                                            onclick="gantiBG('{{ asset ('img/polo.png') }}')"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset ('img/hoodie.png') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset ('img/hoodie.png') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                    <a href="#edit"> <i class="bx bx-edit"
                                            onclick="gantiBG('{{ asset ('img/hoodie.png') }}')"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->
    <section id="edit" style="background: #FFF;">
        <div class="" data-aos="zoom-in" data-aos-delay="350">
            <!-- Create the container of the tool -->
            <center>
                <h1>Edit design anda disini</h1>
                <p>Untuk hapus gambar anda tekan tombol <kbd>DEL</kbd> pada keyboard.</p>
                <div class="col-12">
                    <div class="col-6">
                        <label for="tshirt-kind">Jenis:</label>
                        <select id="tshirt-kind" class="form-select">
                            <!-- You can add any color with a new option and definings its hex code -->
                            <option value="{{ url('/img/background_tshirt.png') }}">Kaos</option>
                            <option value="{{ url('/img/background_hoodie.png') }}">Hoodie</option>
                            <option value="{{ url('/img/background_polo.png') }}">Polo</option>
                            <option value="{{ url('/img/background_singlet.png') }}">Singlet</option>
                            <option value="{{ url('/img/background_jacket.png') }}">Jaket   </option>
                            <option value="{{ url('/img/background_sweater.png') }}">Sweater   </option>
                        </select>

                    </div>
                </div>
                <hr>
                <div id="tshirt-div">
                    <img id="tshirt-backgroundpicture"
                        src="{{ url('/img/background_tshirt.png') }}" />

                    <div id="drawingArea" class="drawing-area">
                        <div class="canvas-container">
                            <canvas id="tshirt-canvas" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>

                <!-- The select that will allow the user to pick one of the static designs -->
                <br>
                <div class="d-none">
                    <label for="tshirt-design">T-Shirt Design:</label>
                    <select id="tshirt-design">
                        <option value="">Select one of our designs ...</option>
                        <option value="./batman_small.png">Batman</option>
                    </select>
                </div>
                <!-- The Select that allows the user to change the color of the T-Shirt -->
                <br><br>
                <div class="col-12">
                    <div class="col-6">
                        <label for="tshirt-color">Warna Kaos:</label>
                        <select id="tshirt-color" class="form-select">
                            <!-- You can add any color with a new option and definings its hex code -->
                            <option value="#fff">Putih</option>
                            <option value="#000">Hitam</option>
                            <option value="#f00">Merah</option>
                            <option value="#008000">Hijau</option>
                            <option value="#ff0">Kuning</option>
                        </select>
                        <input type="color" value="blue" id="kaos" class="form-control col-4 m-1"/>
                    </div>
                    <div class="col-6">
                        <label for="tshirt-custompicture">Upload Design Anda:</label>
                        <input type="file" class="form-control" id="tshirt-custompicture" />
                    </div>
                    <br>
                    <div class="col-6 row">
                        <input type="color" value="blue" id="fill" class="form-control col-4 m-1"/>
                        <select id="font" class="form-control col-3 m-1">
                            <option>arial</option>
                            <option>tahoma</option>
                            <option>times new roman</option>
                        </select>
                        <button class="btn btn-success col-4 m-1" onclick="addText()">Add Custom Text</button>
                    </div>
                    <br>
                    <div class="col-6 row">
                        <a  class="btn btn-danger" onclick="donlot('design.jpeg')">Simpan Jpeg</a>
                        <a class="btn btn-success" onclick="donlot('design.png')">Simpan PNG</a>
                        <a  class="btn btn-primary" onclick="cetakPDF()" >Simpan PDF</a>

                    </div>
                </div>
            </center>
        </div>

    </section><!-- End Portfolio Section -->



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
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="{{ asset('js/app.js') }}"></script>
    <div id="tui-image-editor-container"></div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.4.0/fabric.js"></script>
    <script type="text/javascript" src="https://uicdn.toast.com/tui.code-snippet/v1.5.0/tui-code-snippet.min.js">
    </script>
    <script type="text/javascript" src="https://uicdn.toast.com/tui-color-picker/v2.2.6/tui-color-picker.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.3/FileSaver.min.js">
    </script>
    <script type="text/javascript" src="{{ asset ('dist/tui-image-editor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/theme/white-theme.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/theme/black-theme.js') }}"></script>
    <!-- Vendor JS Files -->
    <script src="{{ asset ('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset ('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset ('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset ('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset ('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset ('vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset ('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset ('vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset ('vendor/waypoints/noframework.waypoints.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset ('js/main.js') }}"></script>


    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/460/fabric.min.js"
        integrity="sha512-ybPp3kCrNQXdvTfh99YLIdnajWnQvHuEKDJ+b26mxI9w+pLhnBo3HmNLJ1pEUBFO1Q0bfJxApeqecNbmaV763g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        document.getElementById("tshirt-kind").addEventListener("change", function () {
            console.log("AJNEG");
            document.getElementById("tshirt-backgroundpicture").src = this.value;
        }, false);

        let canvas = new fabric.Canvas('tshirt-canvas');

        function updateTshirtImage(imageURL) {
            fabric.Image.fromURL(imageURL, function (img) {
                img.scaleToHeight(300);
                img.scaleToWidth(300);
                canvas.centerObject(img);
                canvas.add(img);
                canvas.renderAll();
            });
        }

function gantiBG(urlnya){
    document.getElementById("tshirt-backgroundpicture").src = urlnya;
}
        // Update the TShirt color according to the selected color by the user
        document.getElementById("tshirt-color").addEventListener("change", function () {
            document.getElementById("tshirt-div").style.backgroundColor = this.value;
        }, false);

        // Update the TShirt color according to the selected color by the user
        document.getElementById("tshirt-design").addEventListener("change", function () {

            // Call the updateTshirtImage method providing as first argument the URL
            // of the image provided by the select
            updateTshirtImage(this.value);
        }, false);

        // When the user clicks on upload a custom picture
        document.getElementById('tshirt-custompicture').addEventListener("change", function (e) {
            var reader = new FileReader();

            reader.onload = function (event) {
                var imgObj = new Image();
                imgObj.src = event.target.result;

                // When the picture loads, create the image in Fabric.js
                imgObj.onload = function () {
                    var img = new fabric.Image(imgObj);

                    img.scaleToHeight(300);
                    img.scaleToWidth(300);
                    canvas.centerObject(img);
                    canvas.add(img);
                    canvas.renderAll();
                };
            };

            // If the user selected a picture, load it
            if (e.target.files[0]) {
                reader.readAsDataURL(e.target.files[0]);
            }
        }, false);

        $('#fill').change(function(){
                var obj = canvas.getActiveObject();

                if(obj){
                    // old api
                    // obj.setFill($(this).val());
                    obj.set("fill", this.value);
                }
                canvas.renderAll();
                });


                // warna kaos diubah sesuai pilihan
                $('#kaos').change(function(){
                   
            document.getElementById("tshirt-div").style.backgroundColor = this.value;
       
                });
             
                $('#font').change(function(){
                var obj = canvas.getActiveObject();
                
                if(obj){
                    // old api
                    // obj.setFontFamily($(this).val());
                    obj.set("fontFamily", this.value);
                }
                
                canvas.renderAll();
                });

                function addText() {
                var oText = new fabric.IText('Tap and Type', { 
                    left: 100, 
                    top: 100 ,
                });

                canvas.add(oText);
                oText.bringToFront();
                canvas.setActiveObject(oText);
                $('#fill, #font').trigger('change');
                }
            
        // var link = document.getElementById("saveImg");
        //     // link.innerHTML = 'download image';
        //     link.addEventListener('click', function(ev) {
        //     link.href = canvas.toDataURL();
        //     link.download = "{{date('YmdHis')}}";
        // }, false);
        
        var element = document.getElementById('tshirt-div');

        $('#saveImg').on('click', function(){
                // html2canvas(element).then(function(canvas) {
                //     document.body.appendChild(canvas);
                // });
                // html2canvas(element)
                //     .then(canvas => {
                //         let data = new FormData();
                //         data.set('image', canvas.toDataURL("image/jpeg", 1));
                    
                //         axios.post('/save-screenshot', data, {
                //             headers: {
                //                 'Content-Type': 'multipart/form-data',
                //                 // 'token': $("meta[name='csrf-token']").attr("content"),
                //             }
                //         })
                //         .then((data) => {
                //             console.log('message: ', data.data.message);
                //         })
                //         .catch(error => {
                //             console.log('error: ', error);
                //         })
                //     });
                

                    html2canvas(element).then(function(canvas) {
                        var base64URL = canvas.toDataURL('image/jpeg').replace('image/jpeg', 'image/octet-stream');

                                // AJAX request
                                $.ajax({
                                    url: '/save-screenshot',
                                    type: 'post',
                                    data: {image: base64URL,_token: '{{csrf_token()}}'},
                                    success: function(data){
                                        // console.log('Upload successfully');
                                        alert('File berhasil didownload silahkan cek ke download anda');
                                    }
                                });
                            console.log(base64URL);
                    });
            });

// Download nya

function donlot(namanya){
    html2canvas(element).then(function(canvas) {
                        var base64URL = canvas.toDataURL('image/jpeg').replace('image/jpeg', 'image/octet-stream');

                              
                        var a = document.createElement("a"); //Create <a>
                        a.href =  base64URL; //Image Base64 Goes here
                        a.download = namanya; //File name Here
                        a.click();
                            console.log(base64URL);
                    });
  
}

function cetakPDF(){
    html2canvas(element).then(function(canvas) {
                        var base64URL = canvas.toDataURL('image/jpeg');

//                         $.ajax({
//                             headers: {
//     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//   },
//         dataType: 'json',
//         type: 'POST',
//         url: '/cetak',
//         data: {
//             data1: base64URL
//         },
//         success: function (sukses) {          
//            console.log("sukses")
//         },
//         failure: function (response) {          
//             console.log(response)
            
//         }
//     }); 
var form = new FormData();
form.append("gambar",base64URL);

console.log(base64URL)
var settings = {
  "url": "http://localhost:8000/cetak",
  "method": "POST",
  "timeout": 0,
  "processData": false,
  "mimeType": "multipart/form-data",
  "contentType": false,
  "data": form
};

$.ajax(settings).done(function (response) {
  console.log(response);
  window.location = 'design.pdf';
});
                    });
  
}

        // When the user selects a picture that has been added and press the DEL key
        // The object will be removed !
        document.addEventListener("keydown", function (e) {
            var keyCode = e.keyCode;

            if (keyCode == 46) {
                console.log("Removing selected element on Fabric.js on DELETE key !");
                canvas.remove(canvas.getActiveObject());
            }
        }, false);

    </script>

</body>

</html>
