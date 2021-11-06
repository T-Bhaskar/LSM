<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    
    <link rel="stylesheet" href="slider/style.css">
  </head>
  <body>

    <div class="img-slider">
      <div class="slide active">
        <img src="image/slider3.jpg" alt="" >
        <div><h2>lorem ipsum doller</h2>
      </div>
      </div>
      <div class="slide">
        <img src="image/slider1.jpg" alt="">
        <div class="info">
                </div>
      </div>
      <div class="slide">
        <img src="image/slider2.jpg" alt="">
        <div class="info">
            </div>
      </div>
      <div class="slide">
        <img src="image/slider3.jpg" alt="">
        <div class="info">
             </div>
      </div>
      <div class="slide">
        <img src="image/slider4.jpg" alt="">
        <div class="info">
               </div>
      </div>
      <div class="navigation">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
      </div>
    </div>

    <script type="text/javascript">
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
          btn.classList.remove('active');
        });
      });

      slides[manual].classList.add('active');
      btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
          });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 5000);
      }
      repeater();
    }
    repeat();
    </script>

  </body>
</html>