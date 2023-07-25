
@section('title')
Landing page
@endsection


@extends('layouts.app')
@section('content')


    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0 overflow-hidden" id="banner" data-bs-theme="light">


        <div class="bg-white overlay " ></div>

        <!--/.bg-holder-->

            <div class="row flex-center pt-0  pb-lg-9 pb-xl-0 ">

             <!-- Hero -->
<div class="p-5 text-center bg-image rounded-3" style="
background-image: url('../../../images/R.jpg');
height: 500px;
">
<div class="mask" style="background-color: rgba(0, 0, 0, 0);">
<div class="d-flex justify-content-center align-items-center h-100">
  <div class="text-white ">
    <h1 class="mb-3" style="color: lightcyan">Accédez à une éducation de qualité<br> où que vous soyez,<br> à votre propre rythme.<br> Rejoignez notre communauté <br>pour mieux apprendre </h1>
    <a class="btn btn-outline-light btn-lg" href="{{ route('login') }}" role="button">Connecter vous!</a>
  </div>
</div>
</div>
</div>
<!-- Hero -->

            </div>

        </div>

        <div class="clearfix fs-50 border border mb-3 "></div>
<div class="section-lg counters">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-6 mb-3">
        <div class="text-center">
          <i class="bi bi-person"></i>
          <span class="count-nos" id="target">25</span>
          <p class="count-lable">Etudiants</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-6 mb-3">
        <div class="text-center">
          <i class="bi bi-graph-up"></i>
          <span class="count-nos" id="target2">12</span>
          <p class="count-lable">Formateur</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-6 mb-3">
        <div class="text-center">
          <i class="bi bi-puzzle"></i>
          <span class="count-nos" id="target3">21350</span>
          <p class="count-lable">Cours</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-6 mb-3">
        <div class="text-center">
          <i class="bi bi-trophy"></i>
          <span class="count-nos" id="target4">128560</span>
          <p class="count-lable">Earnings</p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="clearfix border border m-2"></div>
<div class="section-lg m-5">
  <div class="container">
    <div class="col-md-8 offset-md-2 sec-heading text-center">
      <h2>Nos diverses Categories</h2>
      <p>Suspendisse ante mi iaculis ac eleifend id venenatis non eros. Sed rhoncus gravida eli eu sollicitudin sem iaculis.</p>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 projects"><a href="#"><img src={{ asset ('images/AP1.jpg')}} alt="" class="img-fluid">
          <h3>Art & Culture</h3>
          <span>View Course</span> </a> </div>
      <div class="col-md-4 col-sm-6 projects"><a href="#"><img src={{ asset ('images/acquis2.jpg')}} alt="" class="img-fluid">
          <h3>Musique</h3>
          <span>View Course</span> </a> </div>
      <div class="col-md-4 col-sm-6 projects"><a href="#"><img src={{ asset ('images/acquis3.jpg')}} alt="" class="img-fluid">
          <h3>Artisanat</h3>
          <span>View Course</span> </a> </div>
      <div class="col-md-4 col-sm-6 projects "><a href="#"><img src={{ asset ('images/acquis41.jpg')}}  alt="" class="img-fluid">
          <h3>Mine & Carrières</h3>
          <span>View Course</span> </a> </div>
      <div class="col-md-4 col-sm-6 projects"><a href="#"><img src={{ asset ('images/acquis5.jpg')}} alt="" class="img-fluid">
          <h3>Informatique</h3>
          <span>View Course</span> </a> </div>
      <div class="col-md-4 col-sm-6 projects"><a href="#"><img src={{ asset ('images/acquis6.jpg')}} alt="" class="img-fluid">
          <h3>Droit</h3>
          <span>View Course</span> </a> </div>
    </div>
  </div>
</div>


    </div>
  </div>
</div>

<div class="clearfix table-bordered border border-2 m-2"></div>
<div class="section-lg m-2">
  <div class="container">
    <div class="row">
      <div class="col-md-8 order-2 order-md-1"><img class="img-fluid" src="{{ asset('images/course-4.jpg')}}" alt="course"></div>
      <div class="col-md-4 order-1 order-md-2">
        <div class="mt-5">
          <div class="fea-info">
            <h4><i class="bi bi-lightbulb"></i> Learn Anything Online</h4>
            <p>Suspendisse ante mi iaculis ac eleifend id venenatis non eros. Sed rhoncus gravida eli.</p>
          </div>
          <div class="fea-info">
            <h4><i class="bi bi-trophy"></i> Communicate with People</h4>
            <p>Suspendisse ante mi iaculis ac eleifend id venenatis non eros. Sed rhoncus gravida eli eu sollicitudin sem iaculis.</p>
          </div>
          <div class="fea-info">
            <h4><i class="bi bi-puzzle"></i> Share Your Knowledge</h4>
            <p>Suspendisse ante mi iaculis ac eleifend id venenatis non eros. Sed rhoncus gravida.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


        <!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/anchorjs/anchor.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="../vendors/swiper/swiper-bundle.min.js"> </script>
    <script src="../vendors/typed.js/typed.js"></script>
    <script src="../vendors/fontawesome/all.min.js"></script>
    <script src="../vendors/lodash/lodash.min.js"></script>
    <script src="../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="../vendors/list.js/list.min.js"></script>
    <script src="../assets/js/theme.js"></script>



@endsection
