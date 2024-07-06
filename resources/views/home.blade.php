@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pengaduan Fasilitas Desa Kalipucang</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="masyarakat/css/bootstrap.min.css">
    <link rel="stylesheet" href="masyarakat/css/owl.carousel.min.css">
    <link rel="stylesheet" href="masyarakat/css/magnific-popup.css">
    <link rel="stylesheet" href="masyarakat/css/font-awesome.min.css">
    <link rel="stylesheet" href="masyarakat/css/themify-icons.css">
    <link rel="stylesheet" href="masyarakat/css/nice-select.css">
    <link rel="stylesheet" href="masyarakat/css/flaticon.css">
    <link rel="stylesheet" href="masyarakat/css/gijgo.css">
    <link rel="stylesheet" href="masyarakat/css/animate.css">
    <link rel="stylesheet" href="masyarakat/css/slick.css">
    <link rel="stylesheet" href="masyarakat/css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="masyarakat/css/style.css">

    <style>
        .header-area {
            padding: 10px 0;
        }
        .header_bottom_border {
            padding: 10px 0;
        }
        .slider_area {
            margin-top: -20px; /* Adjust this value as needed */
        }
        .slider_text {
            margin: 0;
            padding: 20px 0;
        }
        .testimonial_area {
            padding: 60px 0;
        }
        .footer {
            padding: 40px 0;
        }
        .footer_widget {
            margin-bottom: 30px;
        }
        .copy-right_text {
            padding: 20px 0;
        }
        .slider_text h3, .testmonial_author h3 {
            font-family: Arial, sans-serif !important;
            font-weight: bold !important;
        }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- slider_area_start -->
    <div class="slider_area" style="margin-bottom: 30px;">
        <div class="slider_active owl-carousel">
            <div class="single_slider d-flex align-items-center slider_bg_1 overlay" style="background-image: url('/Masyarakat/img/banner/Namane.png');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="slider_text text-center">
                                <h3>Selamat Datang </h3>
                                <p>Website Pengaduan Fasilitas Desa Kalipucang</p>
                                <a href="{{ route('pengaduan.index') }}" class="boxed-btn3">Tulis Pengaduan <i class="fas fa-edit"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center slider_bg_1 overlay" style="background-image: url('/Masyarakat/img/banner/Namane.png');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="slider_text text-center">
                                <h3>PEFADES <i class="fas fa-handshake"></i></h3>
                                <p>Pengaduan Fasilitas Desa Kalipucang</p>
                                <a href="{{ route('pengaduan.index') }}" class="boxed-btn3">Tulis Pengaduan <i class="fas fa-edit"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center slider_bg_1 overlay" style="background-image: url('/Masyarakat/img/banner/Namane.png');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="slider_text text-center">
                                <h3><i class="fas fa-bullhorn"></i></h3>
                                <p>Ayo Tulis Pengaduanmu Sekarang!</p>
                                <a href="{{ route('pengaduan.index') }}" class="boxed-btn3">Tulis Pengaduan <i class="fas fa-edit"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
      <!-- Custom CSS -->
      <style>
        .boxed-btn3 {
            background-color: rgb(44, 175, 26); /* Green background */
            color: white !important; /* White text */
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    
        .boxed-btn3:hover {
            background-color: darkgreen; /* Darker green background on hover */
            color: white !important; /* Ensure text stays white on hover */
        }
    
        .slider_text h3 i {
            margin-left: 10px; /* Add some space between text and icon */
        }
    
        .slider_text a i {
            margin-left: 5px; /* Add some space between text and icon */
        }
    </style>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Services Section Start -->
<div class="services_area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title">Layanan Kami <i class="fas fa-concierge-bell"></i></h2>
                <p class="section-subtitle">Kami menyediakan berbagai layanan untuk mendukung kesejahteraan masyarakat Desa Kalipucang.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single_service">
                    <i class="fas fa-tools fa-3x"></i>
                    <h4>Perbaikan Fasilitas</h4>
                    <p>Memastikan fasilitas desa selalu dalam kondisi baik.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single_service">
                    <i class="fas fa-water fa-3x"></i>
                    <h4>Pengelolaan Air</h4>
                    <p>Menyediakan air bersih dan pengelolaan sanitasi yang baik.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single_service">
                    <i class="fas fa-seedling fa-3x"></i>
                    <h4>Pertanian dan Lingkungan</h4>
                    <p>Mendukung pertanian berkelanjutan dan menjaga kelestarian lingkungan.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Section End -->

<!-- Gallery Section Start -->
<!-- Gallery Section Start -->
<div class="gallery_area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title">Kegiatan dan Aktivitas Desa <i class="fas fa-images"></i></h2>
                <p class="section-subtitle">Berikut adalah beberapa kegiatan dan aktivitas yang dilakukan di Desa Kalipucang.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_gallery">
                    <img src="Masyarakat/img/testmonial/desaa.jpg" alt="Kegiatan Desa 1" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_gallery">
                    <img src="Masyarakat/img/testmonial/petani.jpeg" alt="Kegiatan Desa 2" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_gallery">
                    <img src="Masyarakat/img/testmonial/badminton.jpeg" alt="Kegiatan Desa 3" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery Section End -->

<!-- Custom CSS for Gallery Section -->
<style>
    .gallery_area {
        padding: 50px 0;
    }

    .single_gallery {
        margin-bottom: 30px;
        overflow: hidden;
        border-radius: 10px;
    }

    .single_gallery img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 10px;
    }

    .section-title {
        margin-bottom: 20px;
        font-size: 32px;
        font-weight: bold;
    }

    .section-subtitle {
        margin-bottom: 40px;
        font-size: 18px;
        color: #666;
    }
</style>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Gallery Section End -->

<!-- Custom CSS for New Sections -->
<style>
    .section-title {
        margin-bottom: 20px;
        font-size: 32px;
        font-weight: bold;
    }

    .section-subtitle {
        margin-bottom: 40px;
        font-size: 18px;
        color: #666;
    }

    .services_area, .gallery_area, .contact_area {
        padding: 50px 0;
    }

    .single_service {
        margin-bottom: 30px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        background-color: #f9f9f9;
    }

    .single_service i {
        color: rgb(19, 131, 206);
        margin-bottom: 15px;
    }

    .single_service h4 {
        margin-bottom: 10px;
        font-size: 20px;
    }

    .single_service p {
        color: #666;
    }

    .single_gallery {
        margin-bottom: 30px;
    }

    .single_gallery img {
        border-radius: 10px;
    }

    .contact_form .form-control {
        margin-bottom: 20px;
        border-radius: 5px;
    }
</style>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- slider_area_end -->

<!-- Pengaduan Section Start -->
<div class="pengaduan_section" style="display: flex; align-items: center; gap: 20px; margin-bottom: 20px;">
    <div class="pengaduan_text" style="flex: 1; padding: 20px 40px; text-align: justify;">
        <h2>Pengaduan Fasilitas Desa Kalipucang</h2>
        <p>
            Selamat datang di halaman Pengaduan Fasilitas Desa! Kami memahami bahwa partisipasi aktif dari masyarakat sangat penting dalam membangun desa yang lebih baik. Di sini, Anda memiliki kesempatan untuk menyampaikan keluhan, kritik, atau saran mengenai berbagai fasilitas publik atau masalah lain yang Anda temui di sekitar desa.
        </p>
        <p>
            Pengaduan dari masyarakat merupakan mekanisme yang efektif untuk membantu pemerintah desa memahami secara langsung tantangan yang dihadapi oleh warga. Setiap masukan yang Anda berikan melalui platform ini akan sangat berarti bagi kami. Dengan mengetahui permasalahan yang dihadapi, kami dapat mengambil tindakan yang tepat dan memastikan fasilitas desa berfungsi optimal untuk kepentingan bersama.
        </p>
        <p>
            Kami juga percaya bahwa keterbukaan dan akuntabilitas dalam menangani pengaduan masyarakat adalah kunci untuk menciptakan lingkungan yang inklusif dan responsif terhadap kebutuhan semua warga desa. Dengan kerjasama Anda, kami yakin desa kita dapat terus berkembang dan menjadi tempat yang nyaman untuk tinggal bagi semua penduduknya.
        </p>
        <p>
            Terima kasih atas partisipasi Anda dalam membangun desa yang lebih baik bersama kami. Kirimkan pengaduan Anda hari ini dan bantu kami menciptakan perubahan positif yang nyata!
        </p>
    </div>
    <div class="pengaduan_img" style="flex: 1;">
        <img src="{{ asset('Masyarakat/img/hoho.png') }}" alt="Gambar Pengaduan Masyarakat" style="width: 100%; height: auto; border-radius: 10px;">
    </div>
</div>

<div class="pengaduan_section" style="display: flex; align-items: center; gap: 20px; margin-bottom: 20px;">
    <div class="pengaduan_img" style="flex: 1;">
        <img src="{{ asset('Masyarakat/img/hihi.png') }}" alt="Gambar Pengaduan Masyarakat" style="width: 100%; height: auto; border-radius: 10px;">
    </div>
    <div class="pengaduan_text" style="flex: 1; padding: 20px 40px; text-align: justify;">
        <h2>Manfaat Pengaduan Fasilitas Desa</h2>
        <p>
            1. Mempermudah Penyampaian Keluhan: Website ini menyediakan platform yang mudah diakses bagi warga untuk menyampaikan keluhan, kritik, dan saran mengenai fasilitas desa. Tidak perlu datang langsung ke kantor desa, warga dapat dengan mudah mengisi formulir pengaduan secara online.
        </p>
        <p>
            2. Meningkatkan Transparansi: Dengan adanya website ini, proses penanganan pengaduan menjadi lebih transparan. Warga dapat melihat status pengaduan mereka dan mengetahui langkah-langkah yang sedang diambil untuk menyelesaikan masalah yang dilaporkan.
        </p>
        <p>
            3. Akuntabilitas Pemerintah Desa: Website ini membantu meningkatkan akuntabilitas pemerintah desa. Setiap pengaduan yang masuk akan dicatat dan ditindaklanjuti oleh pihak yang berwenang, sehingga warga dapat memastikan bahwa keluhan mereka tidak diabaikan.
        </p>
        <p>
            4. Peningkatan Kualitas Layanan Publik: Dengan menerima masukan langsung dari masyarakat, pemerintah desa dapat lebih cepat mengidentifikasi dan memperbaiki masalah yang ada. Hal ini akan berdampak pada peningkatan kualitas layanan publik dan fasilitas desa.
        </p>
        <p>
            5. Efisiensi dan Efektivitas: Penyampaian pengaduan secara online menghemat waktu dan biaya, baik bagi warga maupun pemerintah desa. Proses yang efisien ini memungkinkan penyelesaian masalah dengan lebih cepat dan tepat.
        </p>
        <p>
            6. Pemberdayaan Masyarakat: Dengan memberikan saluran komunikasi yang efektif, website ini memberdayakan masyarakat untuk menyuarakan kebutuhan dan harapan mereka. Ini adalah langkah penting dalam menciptakan desa yang lebih inklusif dan responsif.
        </p>
    </div>
</div> 
<!-- Pengaduan Section End -->

<!-- Custom CSS -->
<style>
    .pengaduan_section {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 20px;
    }
    
    .pengaduan_text {
        flex: 1;
        padding: 20px 40px;
        text-align: justify;
    }

    .pengaduan_img {
        flex: 1;
    }

    .pengaduan_img img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }
</style>

   <!-- footer_start -->
   <footer class="footer" style="font-size: 14px; padding: 10px 0; background-color: #181f27;">
    <div class="footer_top" style="padding: 10px 0;">
        <div class="container">
            <div class="row">
                <div class="footer_column col-lg-4 col-md-6 col-sm-12" style="padding: 15px;">
                    <div class="footer_widget" style="text-align: center;">

                        <h3 class="footer_title" style="font-size: 16px; margin-bottom: 10px;">KANTOR</h3>
                        <p style="margin: 5px 0; text-align: justify;">
                            Alamat : Jalan Raya Kalipucang<br>
                            <a href="#">Kode Pos : 52261</a><br>
                            <a href="http://kalipucang-brebes.desa.id/about-us">kalipucang-brebes.desa.id</a>
                        </p>
                        <div class="map_container" style="margin: 10px 0;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31614.434114014756!2d108.89252762129359!3d-6.993806900942155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbd21cbb0ccf1%3A0xb8b55f6067f3f0d2!2sKalipucang%2C%20Brebes%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1592374561234!5m2!1sen!2sid" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="social_links" style="display: flex; justify-content: center;">
                            <ul style="padding: 0; list-style: none;">
                                <!-- Tambahkan tautan sosial media di sini -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer_column col-lg-4 col-md-6 col-sm-12" style="padding: 15px;">
                    <div class="footer_widget">
                        <h3 class="footer_title" style="font-size: 16px; margin-bottom: 10px; text-align: center;">KONTAK</h3>
                        <p style="margin: 5px 0; text-align: center;">
                            No.Telp : N/A<br>
                        </p>
                    </div>
                </div>
                <div class="footer_column col-lg-4 col-md-12" style="padding: 15px;">
                    <div class="footer_widget">
                        <h3 class="footer_title" style="font-size: 16px; margin-bottom: 10px; text-align: center;">TENTANG KAMI</h3>
                        <p style="margin: 5px 0; text-align: justify;">
                            Kalipucang adalah Desa yang cukup luas jika dibandingkan dengan desa di sekitarnya. Dan merupakan perbatasan antara Tegal dengan Brebes. Kalipucang memiliki sebuah pasar tradisional yang cukup terkenal yaitu Pasar Pegeg. Penduduknya mayoritas adalah muslim. Memiliki jiwa sosialisasi yang tinggi dengan penduduk di sekitarnya. Penghasilan yang di dapat mayoritas petani dan pedagang. Dan sebagian yang lain adalah perantau.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text" style="padding: 10px 0; background-color: #e9ecef;">
        <div class="container">
            <div class="footer_border" style="margin: 10px 0; border-top: 1px solid #dee2e6;"></div>
            <div class="row">
                <div class="col-md-12">
                    <p class="copy_right text-center" style="font-size: 12px; margin: 0;">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Desa kalipucang <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="mailto:simrizki64@gmail.com" target="_blank">simrizki64</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-- footer_end -->

    <!-- JS here -->
    <script src="masyarakat/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="masyarakat/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="masyarakat/js/popper.min.js"></script>
    <script src="masyarakat/js/bootstrap.min.js"></script>
    <script src="masyarakat/js/owl.carousel.min.js"></script>
    <script src="masyarakat/js/isotope.pkgd.min.js"></script>
    <script src="masyarakat/js/ajax-form.js"></script>
    <script src="masyarakat/js/waypoints.min.js"></script>
    <script src="masyarakat/js/jquery.counterup.min.js"></script>
    <script src="masyarakat/js/imagesloaded.pkgd.min.js"></script>
    <script src="masyarakat/js/scrollIt.js"></script>
    <script src="masyarakat/js/jquery.scrollUp.min.js"></script>
    <script src="masyarakat/js/wow.min.js"></script>
    <script src="masyarakat/js/nice-select.min.js"></script>
    <script src="masyarakat/js/jquery.slicknav.min.js"></script>
    <script src="masyarakat/js/jquery.magnific-popup.min.js"></script>
    <script src="masyarakat/js/plugins.js"></script>
    <script src="masyarakat/js/gijgo.min.js"></script>
    <script src="masyarakat/js/slick.min.js"></script>
    <script src="masyarakat/js/contact.js"></script>
    <script src="masyarakat/js/jquery.ajaxchimp.min.js"></script>
    <script src="masyarakat/js/jquery.form.js"></script>
    <script src="masyarakat/js/jquery.validate.min.js"></script>
    <script src="masyarakat/js/mail-script.js"></script>
    <script src="masyarakat/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
    </script>
</body>

</html>

@endsection
