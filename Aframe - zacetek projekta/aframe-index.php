<?php
//session_start();
//if($_SESSION["username"] == "")
//{
//  header("Location:http://83.212.82.110/");
//  exit;
//} http://www.randomsnippets.com/2008/02/12/how-to-hide-and-show-your-div/
//session_unset();
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title> Spolnost skrita pod posteljo</title>
    <script src="https://unpkg.com/aframe-text-geometry-component/dist/aframe-text-geometry-component.min.js"></script>
    <meta name="description" content="360&deg; Image Gallery - A-Frame">
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
    <script src="https://npmcdn.com/aframe-animation-component@3.0.1"></script>
    <script src="https://npmcdn.com/aframe-event-set-component@3.0.1"></script>
    <script src="https://npmcdn.com/aframe-layout-component@3.0.1"></script>
    <script src="https://npmcdn.com/aframe-template-component@3.1.1"></script>
    <script src="components.js"></script>
    <script src="https://unpkg.com/aframe-slice9-component/dist/aframe-slice9-component.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        hideUsAll();
        setTimeout(function(){
          $('#agreed').remove();
        }, 5000);
        $(".icon0").click(function(){

          hideUsAll();
          $('.boxZero').attr('visible','true');
        });
        $(".icon1").click(function(){

          hideUsAll();
          $('.texT1').attr('visible','true');
          $('.boxOne').attr('visible','true');
        });
        $(".icon2").click(function(){

          hideUsAll();
          $('.texT2').attr('visible','true');
          $('.boxTwo').attr('visible','true');
        });
        $(".icon3").click(function(){

          hideUsAll();
          $('.texT3').attr('visible','true');
          $('.boxThree').attr('visible','true');
        });
        $(".icon4").click(function(){

          hideUsAll();
          $('.texT4').attr('visible','true');
          $('.boxFour').attr('visible','true');
        });
        $(".icon5").click(function(){

          hideUsAll();
          $('.texT5').attr('visible','true');
          $('.boxFive').attr('visible','true');
        });
        $(".icon6").click(function(){

          hideUsAll();
          $('.texT6').attr('visible','true');
          $('.boxSix').attr('visible','true');
        });
        $(".icon7").click(function(){

          hideUsAll();
          $('.texT7').attr('visible','true');
          $('.boxSeven').attr('visible','true');
        });
        $(".icon8").click(function(){

          hideUsAll();
          $('.texT8').attr('visible','true');
          $('.boxEight').attr('visible','true');
        });
        $(".icon9").click(function(){

          hideUsAll();
          $('.texT9').attr('visible','true');
          $('.boxNine').attr('visible','true');
        });
        $(".nexT1").click(function(){
          $('.texT9').attr('visible','false');
          $('.texT14').attr('visible','true');
        });
        $(".nexT1back").click(function(){
          $('.texT14').attr('visible','false');
          //
          $('.texT9').attr('visible','true');
        });
        $(".nexT2").click(function(){
          $('.texT8').attr('visible','false');
          $('.texT13').attr('visible','true');
        });
        $(".nexT2back").click(function(){
          $('.texT13').attr('visible','false');
          //
          $('.texT8').attr('visible','true');
        });
        $(".nexT3").click(function(){
          $('.texT6').attr('visible','false');
          $('.texT12').attr('visible','true');
        });
        $(".nexT3back").click(function(){
          $('.texT12').attr('visible','false');
          //
          $('.texT6').attr('visible','true');
        });
        $(".nexT4").click(function(){
          $('.texT4').attr('visible','false');
          $('.texT11').attr('visible','true');
        });
        $(".nexT4back").click(function(){
          $('.texT11').attr('visible','false');
          //
          $('.texT4').attr('visible','true');
        });
        $(".nexT5").click(function(){
          $('.texT3').attr('visible','false');
          $('.texT10').attr('visible','true');
        });
        $(".nexT5back").click(function(){
          $('.texT10').attr('visible','false');
          //
          $('.texT3').attr('visible','true');
        });
    });



    function hideUsAll(){
      $('.boxZero').attr('visible','false');
      $('.boxOne').attr('visible','false');
      $('.boxTwo').attr('visible','false');
      $('.boxThree').attr('visible','false');
      $('.boxFour').attr('visible','false');
      $('.boxFive').attr('visible','false');
      $('.boxSix').attr('visible','false');
      $('.boxSeven').attr('visible','false');
      $('.boxEight').attr('visible','false');
      $('.boxNine').attr('visible','false');

      $('.texT1').attr('visible','false');
      $('.texT2').attr('visible','false');
      $('.texT3').attr('visible','false');
      $('.texT4').attr('visible','false');
      $('.texT5').attr('visible','false');
      $('.texT6').attr('visible','false');
      $('.texT7').attr('visible','false');
      $('.texT8').attr('visible','false');
      $('.texT9').attr('visible','false');
      $('.texT10').attr('visible','false');
      $('.texT11').attr('visible','false');
      $('.texT12').attr('visible','false');
      $('.texT13').attr('visible','false');
      $('.texT14').attr('visible','false');

    }
    </script>
  </head>
  <body>
    <a-scene>
      <a-assets>
        <script id="link" type="text/html">
          <a-entity class="icone"
            geometry="primitive: plane; height: 1; width: 1"
            material="shader: flat; src: ${thumb}"
            event-set__1="_event: mousedown; scale: 1 1 1"
            event-set__2="_event: mouseup; scale: 1.2 1.2 1"
            event-set__3="_event: mouseenter; scale: 1.2 1.2 1"
            event-set__4="_event: mouseleave; scale: 1 1 1"
            set-image="on: click; target: #image-360; src: ${src}"
            sound="on: click; src: #click-sound"></a-entity>
        </script>
      </a-assets>
      <!-- <a-sky id="image-360" radius="10" src="#city"></a-sky> --><a-sky id="image-360" color="#14b0e2" radius="10"></a-sky>
      <!-- --><!-- rgb 255 153 0   204 0 153 -->

    <a-entity id="agreed">
    <a-image src="images/opozorilo.jpg" id="opozorilo" material="width:4" position="0 0 -6.773" geometry="height:6.22;width:9.99"></a-image>
    <!-- <a-entity class="pressMe" position="3.486 -2.063 -6.564" geometry="primitive:plane;width:1.43;height:0.53" material="color:#484848;"></a-entity>
    <a-entity class="pressMe" position="4.879 -1.94 -6.161" text__obvok="value:Se strinjam!;height:1.87;letterSpacing:2.02;lineHeight:1.76;opacity:1.19;tabSize:5.51;width:4.37"></a-entity>
    -->
    </a-entity>

    <a-entity id="link" class="icon0" layout="type: line; margin: 1.5" position="-5.853 -3.859 0.139" rotation="-40 95.49 0">
        <a-plane material=" opacity: 0.75;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="align:center; opacity:1.3; value:Bakterija in virusi\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity>

      <a-entity class="boxZero">

      <a-sky src="http://localhost/serverData/images/test.png" radius="9,5" phi-start="160" id = "image-360"></a-sky>
      </a-entity>



      <a-entity id="link" class="icon1" layout="type: line; margin: 1.5" position="-5.804 -4 -1.935" rotation="-40 73.28 0">
        <a-plane material=" opacity: 0.75;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="align:center; opacity:1.3; value:Miko-  plazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity> 

      <a-entity class="boxOne">
      <a-entity geometry="width: 7; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="-8.045 -0.002 -2.623" rotation="-10 73.28 0"></a-entity>
      <a-entity geometry="width: 7; height: 4;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="-8.062 -2.099 -2.63" rotation="-10 73.28 0" text="value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>
      <a-entity position="-7.195 0.028 -3.869" rotation="0 73.28 0" text="value:Genitalna mikoplazma;color:rgb(51, 204, 255);height:2.31;letterSpacing:2.02;lineHeight:1.76;opacity:1.19;tabSize:5.51;width:6.31"></a-entity>
<a-sky src="http://localhost/serverData/images/mikroplazma.jpg" radius="10" id = "image-360"></a-sky>
<a-image id="mikro-text" rotation="0 26.8 0" position="-4.327 -1.843 -7.613" geometry="height:3.43;width:4.72" material="" src="http://localhost/serverData/images/text/microplasma-text.jpg"></a-image>
      </a-entity>



      <a-entity id="link" class="icon2" layout="type: line; margin: 1.5" position="-4.984 -4 -3.656" rotation="-40 55.22 0">
        <a-plane  material=" opacity: 0.9;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="value:Gonoreja\n\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity>

      <a-entity class="boxTwo">
      <a-entity geometry="width: 6.25; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="-7.322 1.573 -5.008" rotation="-10 55.22 0"></a-entity>
      <a-entity geometry="width: 6.25; height: 5.94;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="-7.203 -1.421 -4.928" rotation="-10 55.22 0" text="value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>
      <a-entity position="-5.603 1.577 -6.809" rotation="0 55.22 0" text="value:Gonoreja;color:rgb(51, 204, 255);height:2.31;letterSpacing:2.02;lineHeight:1.76;opacity:1.19;tabSize:5.51;width:6.31"></a-entity><a-sky src="http://localhost/serverData/images/gonoreja.jpg" radius="10" id = "image-360"></a-sky>

      </a-entity>

      <a-entity id="link" class="icon3" layout="type: line; margin: 1.5" position="-3.579 -4 -5.027" rotation="-40 36.44 0">
        <a-plane  material=" opacity: 0.9;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="value:Sifilis\n\n\n\n;align:center; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity>

      <a-entity class="boxThree">
      <a-entity geometry="width: 7; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="-5.264 1.267 -6.892" rotation="-10 36.44 0"></a-entity>
      <a-entity geometry="width: 7; height: 6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="-5.215 -1.536 -6.848" rotation="-10 36.44 0" text="value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>

      <a-entity position="-2.449 1.297 -8.772" rotation="0 36.44 0" text="value:Sifilis;color:rgb(51, 204, 255);height:2.31;letterSpacing:2.02;lineHeight:1.76;opacity:1.19;tabSize:5.51;width:7.92"></a-entity>
      <a-entity class="nexT5" rotation="-9.99 33.09 -90" position="-2.618 -4.144 -7.98" geometry="primitive:triangle;vertexA:-0.31 0.5 0;vertexB:-0.43 -0.12 0;vertexC:-0.04 -0.1 0" material="side:double;color:#ed005a"></a-entity>
      <a-entity class="nexT5back" rotation="-9.99 33.47 90" position="-2.967 -3.659 -7.791" geometry="primitive:triangle;vertexA:-0.31 0.5 0;vertexB:-0.43 -0.12 0;vertexC:-0.04 -0.1 0" material="side:double;color:#ed005a"></a-entity>
      <a-sky src="http://localhost/serverData/images/sifilis.jpg" radius="10" id = "image-360"></a-sky>
<a-image id="sifilis-text" rotation="0 0.6199999999999997 0" position="0.544 -1.133 -8.666" geometry="height:3.43;width:4.72" material="" src="http://localhost/serverData/images/text/Sipilis-text.jpg"></a-image>
     </a-entity>

      <a-entity id="link" class="icon4" layout="type: line; margin: 1.5" position="-1.842 -4 -5.864" rotation="-40 16.16 0">
        <a-plane  material=" opacity: 0.9;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="value:Klamidija\n\n\n\n; wrapCount:7.23; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity>

      <a-entity class="boxFour">
      <a-entity geometry="width: 7; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="-2.692 2.313 -8.466" rotation="-10 16.16 0"></a-entity>
      <a-entity geometry="width: 7; height: 7;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="-2.609 -1.204 -8.095" rotation="-10 16.16 0" text="value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>
      <a-entity position="-0.14 2.289 -8.812" rotation="0 16.16 0" text="value:Klamidija;color:rgb(51, 204, 255);height:2.31;letterSpacing:2.02;lineHeight:1.76;opacity:1.19;tabSize:5.51;width:6.31"></a-entity>
      <a-entity class="nexT4" position="0.265 -3.771 -7.980" rotation="-9.990  -14.870 -90" geometry="primitive: triangle;vertexA: -0.310  0.500 0.000; vertexB:-0.430 -0.120 0.000; vertexC: -0.040 -0.100 0.000" material="side: double;color:#ed005a;"></a-entity>
      <a-entity class="nexT4back" position="-0.073 -3.243 -7.970" rotation="-9.990  -14.870 90" geometry="primitive: triangle;vertexA: -0.310  0.500 0.000; vertexB:-0.430 -0.120 0.000; vertexC: -0.040 -0.100 0.000" material="side: double;color:#ed005a;"></a-entity>

      <a-sky src="http://localhost/serverData/images/klamidija.jpg" radius="10" id = "image-360"></a-sky>
      <a-image id="klamidija-text" rotation="-5.73 -22.45999999999999 0" position="3.415 -0.448 -5.675" geometry="height:3.43;width:4.72" material="" src="http://localhost/serverData/images/text/klamidija-text.jpg"></a-image>
      </a-entity>


      <a-entity id="link" class="icon5" layout="type: line; margin: 1.5" position="0 -4 -6.101" rotation="-40 0 0">
        <a-plane  material=" opacity: 0.9;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="align:center; value:Triho-\nmonoza\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity>


      <a-entity class="boxFive">
      <a-entity geometry="width: 6.4; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="0.421 1.794 -8.64" rotation="-10 0 0"></a-entity>
      <a-entity geometry="width: 6.4; height: 4.2;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="0.42 -0.555 -8.457" rotation="-10 0 0" text="value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>

      <a-entity position="2.553 1.807 -8.39" text="value:Trihomonoza;color:rgb(51, 204, 255);height:2.31;letterSpacing:2.02;lineHeight:1.76;opacity:1.19;tabSize:5.51;width:6.31"></a-entity>
<a-sky src="http://localhost/serverData/images/trihomonoza.png" radius="10"></a-sky>
      </a-entity>

      <a-entity id="link" class="icon6" layout="type: line; margin: 1.5" position="1.885 -4 -5.82" rotation="-40 -17.74 0">
        <a-plane  material=" opacity: 0.9;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="value: HIV\n\n\n ;align:center; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity>


      <a-entity class="boxSix">
      <a-entity geometry="width: 7; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="2.759 2.33 -8.308" rotation="-10 -17.74 0"></a-entity>
      <a-entity geometry="width: 7; height: 6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="2.646 -0.916 -7.909" rotation="-10 -17.74 0" text="value:HPV\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>
      <a-entity position="5.58 2.304 -7.199" rotation="0 -17.74 0" text="value:HIV;color:rgb(51, 204, 255);height:2.31;letterSpacing:2.02;lineHeight:1.76;opacity:1.19;tabSize:5.51;width:6.7299999999999995"></a-entity>
      <a-entity class="nexT3" position="4.732 -3.468 -6.51" rotation="-9.990  -30.200 -90" geometry="primitive: triangle;vertexA: -0.310  0.500 0.000; vertexB:-0.430 -0.120 0.000; vertexC: -0.040 -0.100 0.000" material="side: double;color:#ed005a;"></a-entity>
      <a-entity class="nexT3back" position="4.425 -2.985 -6.703" rotation="-9.990  -30.200 90" geometry="primitive: triangle;vertexA: -0.310  0.500 0.000; vertexB:-0.430 -0.120 0.000; vertexC: -0.040 -0.100 0.000" material="side: double;color:#ed005a;"></a-entity>

<a-sky src="http://localhost/serverData/images/hiv3.jpg" radius="10" id = "image-360"></a-sky>
<a-image id="hiv-text" rotation="0 -60.04999999999999 0" position="6.547 -0.24 -3.462" geometry="height:3.4299999999999997;width:4.720000000000001" material="" src="http://localhost/serverData/images/text/hiv-text.jpg"></a-image>

      </a-entity>

      <a-entity id="link" class="icon7" layout="type: line; margin: 1.5" position="3.559 -4 -4.924" rotation="-40 -34.78 0">
        <a-plane  material=" opacity: 0.9;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="align:center; value:Hepatitis\nB\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity>

      <a-entity class="boxSeven">
      <a-entity geometry="width: 7; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="4.75 1.983 -6.896" rotation="-10 -34.78 0"></a-entity>
      <a-entity geometry="width: 7; height: 6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="4.537 -0.691 -6.575" rotation="-10 -34.78 0" text="value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>

      <a-entity position="6.624 1.967 -5.295" rotation="0 -34.78 0" text="value:Hepatitis B;color:rgb(51, 204, 255);height:2.31;letterSpacing:2.02;lineHeight:1.76;opacity:1.19;tabSize:5.51;width:6.779999999999999"></a-entity>
      <a-sky src="http://localhost/serverData/images/hepatitis.jpg" radius="10" id = "image-360"></a-sky>
      </a-entity>




      <a-entity id="link" class="icon8" layout="type: line; margin: 1.5" position="4.9 -4 -3.567" rotation="-40 -55.02 0">
        <a-plane  material=" opacity: 0.9;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="value:HPV\n\n\n; align:center; wrapCount:7.43; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity>

      <a-entity class="boxEight">
      <a-entity geometry="width: 7; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="7.172 2.964 -5.075" rotation="-10 -55.02 0"></a-entity>
      <a-entity geometry="width: 7; height: 6.4;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="6.758 -0.468 -4.796" rotation="-10 -55.02 0" text="value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>

      <a-entity position="8.619 2.92 -2.416" rotation="0 -55.02 0" text="value:HPV;color:rgb(51, 204, 255);height:2.31;letterSpacing:2.02;lineHeight:1.76;opacity:1.19;tabSize:5.51;width:6.78"></a-entity>      <a-entity class="nexT2" position="7.839 -3.249 -2.143" rotation="-9.990  -55.000 -91.5" geometry="primitive: triangle;vertexA: -0.310  0.500 0.000; vertexB:-0.430 -0.120 0.000; vertexC: -0.040 -0.100 0.000" material="side: double;color:#ed005a;"></a-entity>
      <a-entity class="nexT2back" position="7.589 -2.743 -2.472" rotation="-9.990  -55.000 87.28" geometry="primitive: triangle;vertexA: -0.310  0.500 0.000; vertexB:-0.430 -0.120 0.000; vertexC: -0.040 -0.100 0.000" material="side: double;color:#ed005a;"></a-entity>

<a-sky src="http://localhost/serverData/images/papiloma.jpg" radius="10" id = "image-360"></a-sky>
      </a-entity>


      <a-entity id="link" class="icon9" layout="type: line; margin: 1.5" position="5.723 -4 -1.84" rotation="-40 -72.72 0">
        <a-plane  material=" opacity: 0.9;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="value:Genitalni herpes\n\n\n\n;align:center; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity>

      <a-entity class="boxNine">
      <a-entity geometry="width: 7; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="8.201 2.33 -2.398" rotation="-10 -72.72 0"></a-entity>
      <a-entity geometry="width: 7; height: 5.2;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="7.787 -0.39 -2.277" rotation="-10 -72.72 0" text="value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>

      <a-entity position="8.619 2.347 -0.306" rotation="0 -72.72 0" text="value:Genitalni herpes;color:rgb(51, 204, 255);height:2.31;letterSpacing:2.02;lineHeight:1.76;opacity:1.19;tabSize:5.51;width:6.78"></a-entity>      <a-entity class="nexT1" position="7.712 -2.689 0.270" rotation="-9.990  -72.720 -90" geometry="primitive: triangle;vertexA: -0.310  0.500 0.000; vertexB:-0.430 -0.120 0.000; vertexC: -0.040 -0.100 0.000" material="side: double;color:#ed005a;"></a-entity>
      <a-entity class="nexT1back" position="7.804 -2.272 -0.132" rotation="-9.990  -72.720 90" geometry="primitive: triangle;vertexA: -0.310  0.500 0.000; vertexB:-0.430 -0.120 0.000; vertexC: -0.040 -0.100 0.000" material="side: double;color:#ed005a;"></a-entity>

      <a-sky src="http://localhost/serverData/images/herpes.jpg" radius="10" id = "image-360"></a-sky>

      <a-image id="herpes-text" rotation="0 -109.69 0" position="7.044 -0.234 3.516" geometry="height:3.63;width:4.53" material="" src="http://localhost/serverData/images/text/herpes-text.jpg"></a-image>
      </a-entity>


      <!-- Camera + cursor. -->
      <a-entity camera look-controls position="0 0 0">
        <a-cursor id="cursor"
          position="0 0 -1"
          animation__click="property: scale; startEvents: click; from: 0.1 0.1 0.1; to: 1 1 1; dur: 150"
          animation__fusing="property: fusing; startEvents: fusing; from: 1 1 1; to: 0.1 0.1 0.1; dur: 1500"
          event-set__1="_event: mouseenter; color: #E41E9B"
          fuse="true">
        </a-cursor>
      </a-entity>
    </a-scene>
    <script src="text.js"></script>
  </body>
</html>
