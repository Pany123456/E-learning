
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


        <div class="p-5 text-center  rounded-3" style="
        background-color:blue;
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

<div class="clearfix"></div>

<div class="section-lg m-7">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="cource-box">
          <div class="row cource-text">
            <div class="col-lg-4 col-md-4">
              <a href="#"><img class="img-fluid" src={{ asset ('images/primaire2.jpg')}} alt=""></a>
            </div>
            <div class="col-lg-8 col-md-8">
              <div>
                <h4><a href="#">Photoshop - Web Deisgn</a> <span>$195</span></h4>
                <p>Suspendisse ante mi iaculis ac eleifend id venenatis non eros. Sed rhoncus gravida eli eu sollicitudin.</p>
                <a href="#" class="btn btn-sm btn-primary">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Continue adding the other course boxes -->
    </div>
  </div>
</div>

<div class="clearfix"></div>

<div class="section-lg m-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="cource-box">
          <div class="row cource-text">
            <div class="col-lg-4 col-md-4">
              <a href="#"><img class="img-fluid" src={{ asset ('images/primaire2.jpg')}} alt=""></a>
            </div>
            <div class="col-lg-8 col-md-8">
              <div>
                <h4><a href="#">Photoshop - Web Deisgn</a> </h4>
                <p>Suspendisse ante mi iaculis ac eleifend id venenatis non eros. Sed rhoncus gravida eli eu sollicitudin. </p>
                <h4><span>$195</span></h4>
                <a href="#" class="btn btn-sm btn-primary">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Continue adding the other course boxes -->
    </div>
  </div>
</div>

<div class="p-5 text-center bg-image rounded-3" style="
background-color:blue;
height: 200px;
">

</div>
