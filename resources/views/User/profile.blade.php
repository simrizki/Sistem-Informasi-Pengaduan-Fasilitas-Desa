@extends('layouts.app') <!-- Sesuaikan dengan nama layout yang Anda gunakan -->

@section('content')

<style>
    .bold-arial {
        font-weight: bold;
        font-family: Arial, sans-serif;
    }
</style>

    <div class="container">
        <h1 class="text-center mt-4 mb-4" style="font-weight: bold; font-family: Arial, sans-serif;">Profile Desa Kalipucang</h1>
        
        <div class="village_info_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-md-14 text-center">
                        <img src="Masyarakat/img/baldes.JPG" alt="Desa Kalipucang" style="width: 100%; max-width: 100%; height: auto;">
                        <h4 style="margin-top: 20px; font-family: Arial, sans-serif;">Desa Kalipucang</h4>
                        <p style="text-align: justify; font-size: 16px; line-height: 1.6;">Kalipucang adalah Desa yang cukup luas jika dibandingkan dengan desa di sekitarnya. Dan merupakan perbatasan antara Tegal dengan Brebes. Kalipucang memiliki sebuah pasar tradisional yang cukup terkenal yaitu Pasar Pegeg. Penduduknya mayoritas adalah muslim. Memiliki jiwa sosialisasi yang tinggi dengan penduduk di sekitarnya. Penghasilan yang diperoleh mayoritas berasal dari petani dan pedagang. Dan sebagian yang lain adalah perantau.</p>
                    </div>
                </div>
            </div>
        </div>    

        <div class="container">
            <p>Kehidupan sosial sangat dipengaruhi oleh nilai-nilai kebersamaan dan gotong royong. Ini tidak hanya menjadi ciri khas masyarakat Indonesia, tetapi juga pondasi utama dalam membangun hubungan sosial yang solid di antara penduduk desa. Gotong royong di Desa Kalipucang tercermin dalam berbagai aktivitas, mulai dari membersihkan lingkungan bersama-sama hingga saling membantu dalam kegiatan pertanian dan perayaan tradisional.</p>
            
            <div class="row mt-5">
                <div class="col-lg-4 mb-4">
                    <div class="single_testmonial text-center">
                        <h2>Kegiatan Balaidesa</h2>
                        <img src="\Masyarakat\img\testmonial\desaa.jpg" alt="Testimonial Image" class="img-fluid">
                        <p>"Rapat Musdes Penetapan Peraturan Desa Tentang Anggaran Pendapatan dan Belanja Desa (APBDES) Tahun 2023."</p>
                        <div class="testmonial_author"></div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="single_testmonial text-center">
                        <h2>Aktivitas Masyarakat</h2>
                        <img src="\Masyarakat\img\testmonial\badminton.jpeg" alt="Testimonial Image" class="img-fluid">
                        <p>"Kegiatan badminton di gedung aula Desa Kalipucang, Kecamatan Jatibarang, Kabupaten Brebes merupakan salah satu aktivitas olahraga yang rutin dilakukan oleh masyarakat setempat."</p>
                        <div class="testmonial_author"></div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="single_testmonial text-center">
                        <h2>Kegiatan Balaidesa</h2>
                        <img src="\Masyarakat\img\testmonial\desa.jpeg" alt="Testimonial Image" class="img-fluid">
                        <p>"Kehidupan sosial di desa ini juga dipengaruhi oleh nilai-nilai kebersamaan dan gotong royong, yang merupakan ciri khas masyarakat Indonesia."</p>
                        <div class="testmonial_author"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
