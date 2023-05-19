<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    /* Section-1 */

    .section-1 .container {
        position: relative;
        width: 100%;
        height: 711px;
        margin-top: -80px;

        background: linear-gradient(136.6deg, #0FC598 21.76%, #BFDB38 146.07%);

        background-size: cover;
        /* Menyesuaikan ukuran gambar dengan latar belakang */
        background-repeat: no-repeat;
        /* Tidak mengulang gambar latar belakang */
        background-position: center center;
        /* Posisi gambar latar belakang di tengah-tengah */
        box-shadow: -9px 12px 38px rgba(0, 0, 0, 0.25);
        border-radius: 0px 0px 0px 380px;
        color: white;

    }

    .section-1 .container::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('/img/hero-bg.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        border-radius: 0px 0px 0px 380px;
        /* Atur opasitas sesuai kebutuhan */
    }





    .section-1 .col {
        margin-top: 200px;
        margin-left: 300px;
    }

    .section-1 .row {
        position: relative;
    }

    .section-1 .row h3 {
        font-size: 36px;
        margin-left: 30px;
    }

    .section-1 .row h2 {
        font-family: 'Poppins', sans-serif;
        font-size: 52px;
        font-weight: 700px;
        width: 660px;
        margin-top: -20px;
        margin-bottom: 10px;
    }

    .section-1 .row p {
        font-size: 24px;
        font-weight: 400;
        width: 700px;
    }

    .image-container {
        position: absolute;
        width: 1320px;
        height: 711px;
    }

    .image-container img {
        position: absolute;
        height: auto;
        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
        top: 0;
        left: 0;
    }

    #hero {
        width: 1320px;
        height: 100%;
        margin-left: -12px;
        border-radius: 0px 0px 0px 380px;


    }

    #hero-helm {
        width: 190px;
        /*         height: 280px; */
        margin-top: 120px;
        margin-left: 1120px;
    }

    #hero-sepatu {
        width: 330px;
        margin-top: 510px;
        margin-left: 50px;
    }

    #hero-bulat {
        width: 150px;
        margin-top: 565px;
        margin-left: 1158px;
    }

    /* Section-2 */
    .section-2 {
        margin-top: 100px;
    }

    .section-2 .col {
        margin-left: 70px;
    }

    .section-2 p {
        margin-top: -10px;
    }

    .layanan-container {
        display: flex;
        margin-top: 40px;
        justify-content: center;
        align-items: center;
        width: 1320px;
    }

    .item h2 {
        font-size: 30px;
    }

    .item {
        position: relative;
        width: 300px;
        height: 467px;
        margin: 20px;
        transition: transform 0.3s ease-in-out;
        overflow: hidden;
    }

    .item:hover {
        transform: scale(1.2);
    }

    .item img {
        object-fit: cover;
    }

    .box {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 300px;
        height: 150px;
        padding: 10px;
        background: linear-gradient(113.48deg, #0FC598 0%, #BFDB38 114.8%);
        color: #fff;
        font-weight: bold;
        transform: translateY(100%);
        transition: transform 0.3s ease-in-out;
    }


    .item:hover .box {
        transform: translateY(0%);
    }

    .slider {
        position: relative;
        width: 100%;
        height: 500px;
        overflow: hidden;
    }

    .slider img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .slide-controls {
        position: absolute;
        bottom: 20px;
        transform: translateX(50%);
        display: flex;
    }

    .slide-control {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #fff;
        margin: 0 10px;
        cursor: pointer;
    }

    .slide-control.active {
        background-color: #000;
    }

    #bulatan2 {
        margin-top: -260px;
        width: 200px;
        left: 1115px;
    }

    #lay1 {
        width: 300px;
    }

    #lay2 {
        width: 300px;
    }

    #lay3 {
        width: 300px;
    }

    /* Section 3 */
    .section-3 {
        margin-top: 40px;
    }

    .section-3 .container {
        position: relative;
        width: 100%;
        height: 711px;

        background: linear-gradient(136.6deg, #0FC598 21.76%, #BFDB38 146.07%);
        box-shadow: -9px 12px 38px rgba(0, 0, 0, 0.25);
        border-radius: 0px 380px 0px 0px;
        color: white;
    }

    .section-3 .col {
        margin-top: 40px;
        margin-left: 70px;
    }

    .section-3 .row.text-center {
        margin-top: 60px;
        text-align: center !important;
        justify-content: center;
    }

    .section-3 .col-md-4 {
        background-color: white;
        justify-content: center;
        align-content: center;
        margin: 20px;
        width: 300px;
        border-radius: 20px;
        height: 450px;
    }

    .section-3 .col-md-4 p {
        font-size: 24px;
    }

    .section-3 h3 {
        color: #000;
        font-weight: bold;
    }

    #pelayanan {
        position: absolute;
        height: 100%;
        width: 1320px;
        margin-left: -12px;
        border-radius: 0px 380px 0px 0px;
    }

    /* Section 4 */
    .section-4 {
        margin-top: 70px;
    }

    .section-4 h1 {
        font-size: 50px;
    }

    .section-4 p {
        font-size: 30px;
        margin-bottom: 100px;
    }

    .section-4 .row.text-center .col {
        background: none;
    }

    .section-4 .row {}

    .section-4 .row .col {
        margin: 0px 10px 0px;
    }

    .section-4 img {
        width: 100%;
    }

    /* Section 5 */
    .section-5 {
        margin-top: 120px;

    }
    .section-5 .container{
        width: 100%;
        height: 711px;

        background: linear-gradient(136.6deg, #0FC598 21.76%, #BFDB38 146.07%);
        box-shadow: -18px -24px 38px rgba(0, 0, 0, 0.25);
        border-radius: 380px 0px 0px 0px;
    }
</style>

<section class="section-1">
    <div class="container">
        <div class="image-container">
            <!--             <img src="/img/hero-bg.png" alt="" id="hero"> -->
            <img src="/img/hero-helm.png" alt="" id="hero-helm">
            <img src="/img/hero-sepatu.png" alt="" id="hero-sepatu">
            <img src="/img/hero-bulat.png" alt="" id="hero-bulat">
        </div>

        <div class="row">
            <div class="col">
                <h3>>>>>>></h3>
                <h2><b>Membantu Anda Untuk Merawat Sepatu Dan Helm Anda </b></h2>
                <p>Si Launsh merupakan usaha yang bergerak dibidang jasa laundry cuci sepatu dan Helm berkualitas yang berasal dari Kota Malang dan memiliki cabang di beberapa Kota Besar di Jawa Timur.</p>
            </div>
        </div>
    </div>
</section>

<section class="section-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1><b>Layanan Kami </b></h1>
                <p>Si Launsh Hadir Menjadi Solusi Untuk Kamu</p>
            </div>
        </div>

        <div class="row">
            <div class="layanan-container">
                <div class="item">
                    <img src="/img/layanan1.png" id="lay1">
                    <div class="box">
                        <h2>Baca</h2>
                        <h2>Selengkapnya</h2>
                    </div>
                </div>
                <div class="item">
                    <img src="/img/layanan2.png" id="lay2">
                    <div class="box">
                        <h2>Baca</h2>
                        <h2>Selengkapnya</h2>
                    </div>
                </div>
                <div class="item">
                    <img src="/img/layanan3.png" id="lay3">
                    <div class="box">
                        <h2>Baca</h2>
                        <h2>Selengkapnya</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-3">
    <div class="container">
        <img src="/img/pelayanan-bg.png" alt="" id="pelayanan">
        <div class="row">
            <div class="col">
                <h1><b>Pelayanan Terbaik </b></h1>
                <p>Kami Selalu Mengedepankan Pelayanan Terbaik Untuk Pelanggan</p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4">
                <h3 class="my-3">
                    <img src="/img/pelayanan-jam.png" alt="">
                    Pengerjaan Cepat
                </h3>
                <p class="text-muted">Dalam Pengerjaan layanan kepada pelanggan, kami selalu berusaha untuk mengerjakan sesuai dengan apa yang telah di tentukan</p>
            </div>
            <div class="col-md-4">
                <h3 class="my-3">
                    <img src="/img/pelayanan-like.png" alt="">
                    Pengerjaan Rapi & Bersih
                </h3>
                <p class="text-muted">Selain Cepat tentu kami juga akan selalu mengawasi Tingkat Kebersihan dan Kerapian Sebelum Pelanggan Menerima barang tersebut</p>
            </div>
            <div class="col-md-4">
                <h3 class="my-3">
                    <img src="/img/pelayanan-smile.png" alt="">
                    Menerima Kritik & Saran
                </h3>
                <p class="text-muted">Kami Selalu menerima Kritik & Saran dari Pelanggan demi kemajuan pelayanan kami kedepannya</p>
            </div>
        </div>
    </div>
</section>

<section class="section-4">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1><b>CABANG SI LAUNSH</b></h1>
                <p>Kami Hadir Di Beberapa Kota Di Jawa Timur</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="/img/cabang-surabaya.png" alt="">
            </div>

            <div class="col">
                <img src="/img/cabang-malang.png" alt="">
            </div>

            <div class="col">
                <img src="/img/cabang-pasuruan.png" alt="">
            </div>

            <div class="col">
                <img src="/img/cabang-mojokerto.png" alt="">
            </div>

            <div class="col">
                <img src="/img/cabang-sidoarjo.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="section-5">
    <div class="container">

    </div>
</section>

<?= $this->endSection(); ?>