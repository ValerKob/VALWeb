@extends('layouts.main')

@section('title', 'Home')

@section('content')
{{-- SGlav BLog --}}
<section class="titleBlog">
    <div class="container">
        <div class="info">
            <div class="infoLeft">
                <div class="infoContent">
                    <div class="infoTitle txt">
                        Веб разработчик,
                        которых вы искали 
                        для <span>своего бизнеса!</span>
                    </div> 
                    <div class="infoText txt">
                      Нетривиальные креативные решения. Динамический и 
                      привлекательный дизайн, который подчеркивает 
                      <span>уникальность вашего бренда.</span>
                    </div>
                    <div class="buttons">
                        <button class="blob-btn">
                          Связаться
                          <span class="blob-btn__inner">
                            <span class="blob-btn__blobs">
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                            </span>
                          </span>
                        </button>
                        <br/>
                      
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                        <defs>
                          <filter id="goo">
                            <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
                            <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                          </filter>
                        </defs>
                      </svg>
                  </div>
              </div>
            </div>
            <div class="infoRight">
              <div class="infoEllipse">
                <div class="infoEllipseWrapperImg">
                  <img class="infoEllipseImg" src="./assets/images/val.jpg" alt="">
                </div>
              </div>
            </div>
        </div>
    </div>
    <img class="svgTitle" src="./assets/images/glav4.svg" alt="">
</section>
{{-- EGlav Blog --}}
@endsection