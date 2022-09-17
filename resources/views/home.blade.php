@extends('layouts.app')

@section('content')

<head>
  <style>
    .btn {
      border-radius: 30%;
    font-size: 100px;
    }
  </style>
</head>
<body>
  
<div class="container">
  @if (Session::has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{session('success')}}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  @endif

  
  <div class="row justify-content-center ">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner ">
    <div class="carousel-item active ">
      <img class="img w-100 " src="{{ url('img/slide1.png') }}"  alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        
        
      </div>
    </div>
    <div class="carousel-item">
      <img class="img w-100 " src="{{ url('img/slide2.png') }}"  alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        
        
      </div>
    </div>
    <div class="carousel-item">
      <img class="img w-100 " src="{{ url('img/home.png') }}" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        
       
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-2 w-100 ">
    <a class="navbar-brand" href="http://lamara.id/">Lamara</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('pesan') }}">Detail Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/check-out') }}">Check Out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/history') }}">History</a>
        </li>      
      </ul>
    </div>  
  </nav>
   
 
 

<h5 class="text-center mt-4">    Diformulasikan secara eksklusif oleh The Hughes Center for Research and Innovation, USA Lamara hadir untuk Anda yang ingin 
  tampil memukau bak artis Korea. Wajah bersih, bening, bersinar, lembab, tanpa jerawat, tanpa bekas jerawat, tanpa keriput , 
  tanpa flek hitam, tanpa kantung mata, kini bukan lagi hanya sekedar mimpi, tapi Anda bisa mewujudkannya sekarang.

  Lamara - Reveal Your Radiance, adalah inti dari kecerahan sejati-kulit yang bersinar dan sehat.
  Dari daratan (l a) dan lautan (mar) tertanam disetiap produk lamara, dengan campuran ganggang laut dan fermentasi teh. 
  Perpaduan kuat dari probiotik alami, antioksidan, dan nutrisi pencerah kulit ini meningkatkan hidrasi, mengurangi munculnya garis-garis halus dan kerutan,
   serta memperkuat dan mengembalikan vitalitas alami kulit. Temukan cahaya kulit alami Anda,
   yang ternutrisi dan terlindungi bersama lamara.</h5>

   <table class="table mt-4">
    <tr>
      <td>
        <img src="{{ url('img/oil.png') }}" width="200">
      </td>
      <td>
        <img src="{{ url('img/moisturizer.png') }}" width="200">
      </td>
      <td>
        <img src="{{ url('img/eye-cream.png') }}" width="200">
      </td>
      <td>
        <img src="{{ url('img/toner.png') }}" width="200">
      </td>
      <td>
        <img src="{{ url('img/cleanser.png') }}" width="200">
      </td>
    </tr>
  </table>

  <footer class="footer mt-5 w-100">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Links</h4>
          <ul>
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/profil') }}">Profil</a></li>
            <li><a href="{{ url('/produk') }}">Detail Produk</a></li>
            <li><a href="{{ url('check-out') }}">Keranjang</a></li>
            <li><a href="{{ url('/history') }}">History</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Contact Person</h4>
          <ul>
            <li><a href="">Erning : 08119999879</a></li>
            
          </ul>
        </div>

        <div class="footer-col">
          <h4>Follow US</h4>
        <a href=""><i class="fa fa-facebook-official fa-2x"></i></a>
        <a href=""><i class="fa fa-youtube-play fa-2x"></i></a>
        <a href=""><i class="fa fa-instagram fa-2x"></i></a>
        </div>
        </div>
        
      </div>
    </div>
  </footer>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</body>

