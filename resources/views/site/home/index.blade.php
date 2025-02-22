@extends('layouts.merge.site')
@section('titulo', 'Oficial')
@section('content')



<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up" class="aos-init aos-animate">Desfrute a <br>Nossa Comida deliciosa</h1>
            <p data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">Nós somos uma equipa talentosa na cozinha</p>
            <div class="d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img aos-init aos-animate" data-aos="zoom-out">
            <img src="/site/assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <section class="my-5 py-5"></section>

   

  </main>





@endsection
