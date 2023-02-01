@extends('layouts.template')

@section('content')
    <br>
    <br>
    <div class="homeSlideshow">
        <div class="SSlides fade">
            <img src="images/red.jpg" style="width:100%">
        </div>

        <div class="SSlides fade">
            <img src="images/blue.jpg" style="width:100%">
        </div>

        <div class="SSlides fade">
            <img src="images/green.jpg" style="width:100%">
        </div>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("SSlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
    <br>
    <br>

    <div class="abouth5" id="about">
        <p>Check out our new collection</p>
        <a href="{{asset('/products')}}" class="main-btn">Shop Now <i class="fa-solid fa-basket-shopping"></i> </a>
    </div>

    <section class="cards">
        <div class="content">
          <div class="card">
            <div class="icon">
                <img src="images/greytee.jpg" alt="HDChoodie1" style="width:70%">
            </div>
            <div class="info">
                <h2>HDC T-shirt</h2>
              <h3>14.99 GBP</h3>
            </div>
          </div>

          <div class="card">
            <div class="icon">
              <img src="images/navysweatshirt.jpg" alt="HDChoodie1" style="width:70%">
            </div>
            <div class="info">
                <h2>HDC Sweatshirt</h2>
              <h3>19.99 GBP</h3>
            </div>
          </div>

          <div class="card">
            <div class="icon">
                <img src="images/pink.jpg" alt="HDChoodie1" style="width:70%">
            </div>
            <div class="info">
                <h2>HDC Hoodie</h2>
              <h3>24.99 GBP</h3>
            </div>
          </div>

        </div>
    </section>




    </div>
    <br>
    <br>
    <br>
@endsection
