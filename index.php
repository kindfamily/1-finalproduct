<DOCTYPE! html>
<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <style>
/* article masonry layout start */
           
           #columns{
               column-width: 200px;
/*               border: 5px solid green;*/
               column-gap: 20px;
           }
           #columns figure{
               display: inline-block;
               border: 1px solid rgba(0,0,0,0.2);
               margin: 0;
               margin-bottom: 15px;
               padding:10px;
               box-shadow: 2px 2px 5px rgba(0,0,0,0.5);
           }
           #columns figure img{
               width: 100%;
           }
           #columns figure figcaption{
               border-top: 1px solid rgba(0,0,0,0.2);
               padding: 10px;
               margin-top: 10px;
           }
/* article masonry layout start */

           
/* slideshow w3school start */
header img{
   width: 100%;
   height: 100%;
}           

* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}           
           
           
/* slideshow w3school end */
           header{
               border: 1px solid green;
               height: 28%;
               
           }
           article{
               margin-top: 20px;
                border: 1px solid blue;              
                padding: 2px;
                   width: 100%;
/*                height: 60%;*/
           }
           
           }
           footer{
               border: 1px solid black;
               height: 10%;
           }
           @media screen and (min-width:600px) {
              section {
                display: inline-block;
                width: 24%;

               }
            }

        </style>
    </head>
    <body>
                
        <header>
            <div class="slideshow-container">
            <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="1.jpg">
            <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="2.jpg">
            <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="3.jpg">
            <div class="text">Caption Three</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

<!--
            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
-->
        </header>
        <article>
            <div id="columns">
            <figure>
            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/cinderella.jpg">
            <figcaption>Cinderella wearing European fashion of the mid-1860’s</figcaption>
            </figure>

            <figure>
            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/rapunzel.jpg">
            <figcaption>Rapunzel, clothed in 1820’s period fashion</figcaption>
            </figure>

            <figure>
            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/belle.jpg">
            <figcaption>Belle, based on 1770’s French court fashion</figcaption>
            </figure>

            <figure>
            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/mulan_2.jpg">
            <figcaption>Mulan, based on the Ming Dynasty period</figcaption>
            </figure>

            <figure>
            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/sleeping-beauty.jpg">
            <figcaption>Sleeping Beauty, based on European fashions in 1485</figcaption>
            </figure>

            <figure>
            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/pocahontas_2.jpg">
            <figcaption>Pocahontas based on 17th century Powhatan costume</figcaption>
            </figure>

            <figure>
            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/snow-white.jpg">
            <figcaption>Snow White, based on 16th century German fashion</figcaption>
            </figure>    

            <figure>
            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/ariel.jpg">
            <figcaption>Ariel wearing an evening gown of the 1890’s</figcaption>
            </figure>

            <figure>
            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/4273/tiana.jpg">
            <figcaption>Tiana wearing the <i>robe de style</i> of the 1920’s</figcaption>
            </figure> 
            </div>   
        </article>
        <footer>
            footer
        </footer>
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
              showSlides(slideIndex += n);
            }

            function currentSlide(n) {
              showSlides(slideIndex = n);
            }

            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1} 
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none"; 
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block"; 
              dots[slideIndex-1].className += " active";
            }
    </script>
    </body>
</html>
