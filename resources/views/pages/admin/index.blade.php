@extends('layouts.main')

@section('title', 'VALWeb')

@section('content')
{{-- SGlav BLog --}}
<section class="adminSection">
  <div class="container">
    <div class="adminTitle txt">
      Войти
    </div>
    <form class="modalFormAdmin" action="signInAdmin" method="POST">
      @csrf
        <div class="input-container ic1">
            <input id="name" class="input" type="text" name="login" placeholder=" " />
            <div class="cut cutAdmin"></div>
            <label for="name" class="placeholder">Login</label>
          </div>
          <div class="input-container ic2">
            <input id="tel" class="input" name="password" type="tel" placeholder=" " />
            <div class="cut cutAdmin cut-short"></div>
            <label for="tel" class="placeholder">Password</label>
          </div>
          <input id="text" class="input" name="check" type="text" style="display: none;" />
        <div class="buttons buttonsAdmin">
          <button type="submit" class="blob-btn">
            Войти
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
    </form>
  </div>
</section>
<!-- EndGlav Blog -->
@endsection
