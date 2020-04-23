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
        //$('#image-360').attr('src', '#j10');
        //var el = document.querySelector("#hideMeNow");
        //el.setAttribute("visible",false);
        
        $(".cubeOne").click(function(){
          backgroundColor();
          $('.glava').attr('visible','false');
          $('.boxOne').attr('visible', 'false');
          $('.skrijKocko').attr('visible', 'false');
          sky.setAttribute('src', '#fuzobakterija');
          $('#image-360').attr('src', '#fuzobakterija');

        });
        $(".icon1").click(function(){
          backgroundColor();
          hideUsAll();
          $('.texT1').attr('visible','true');
          //$('#image-360').attr('src', '#f6'); 
          $('.boxOne').attr('visible','true');
          //alert("Background has been changed")
        });
        $(".icon2").click(function(){
          backgroundColor();
          hideUsAll();
          $('.texT2').attr('visible','true');
          //$('#image-360').attr('src', '#g7'); 
          $('.boxTwo').attr('visible','true');
          //alert("Background has been changed")
        });
        $(".icon3").click(function(){
          backgroundColor();
          hideUsAll();
          $('.texT3').attr('visible','true');
          //$('#image-360').attr('src', '#g7'); 
          $('.boxThree').attr('visible','true');
          //alert("Background has been changed")
        });
        $(".icon4").click(function(){
          backgroundColor();
          hideUsAll();
          $('.texT4').attr('visible','true');
          //$('#image-360').attr('src', '#g7'); 
          $('.boxFour').attr('visible','true');
          //alert("Background has been changed")
        });
        $(".icon5").click(function(){
          backgroundColor();
          hideUsAll();
          $('.texT5').attr('visible','true');
          //$('#image-360').attr('src', '#g7'); 
          $('.boxFive').attr('visible','true');
          //alert("Background has been changed")
        });
        $(".icon6").click(function(){
          backgroundColor();
          hideUsAll();
          $('.texT6').attr('visible','true');
          //$('#image-360').attr('src', '#g7'); 
          $('.boxSix').attr('visible','true');
          //alert("Background has been changed")
        });
        $(".icon7").click(function(){
          backgroundColor();
          hideUsAll();
          $('.texT7').attr('visible','true');
          //$('#image-360').attr('src', '#g7'); 
          $('.boxSeven').attr('visible','true');
          //alert("Background has been changed")
        });
        $(".icon8").click(function(){
          backgroundColor();
          hideUsAll();
          $('.texT8').attr('visible','true');
          //$('#image-360').attr('src', '#g7'); 
          $('.boxEight').attr('visible','true');
          //alert("Background has been changed")
        });
        $(".icon9").click(function(){
          backgroundColor();
          hideUsAll();
          $('.texT9').attr('visible','true');
          //$('#image-360').attr('src', '#g7'); 
          $('.boxNine').attr('visible','true');
          //alert("Background has been changed")
        });
        $(".nexT1").click(function(){
          $('.texT9').attr('visible','false');
          //$('#image-360').attr('src', '#g7'); 
          $('.texT14').attr('visible','true');
          //alert("Background has been changed")
        });
        $(".nexT1back").click(function(){
          $('.texT14').attr('visible','false');
          // 
          $('.texT9').attr('visible','true');
        });
        $(".nexT2").click(function(){
          $('.texT8').attr('visible','false');
          //$('#image-360').attr('src', '#g7'); 
          $('.texT13').attr('visible','true');
          //alert("Background has been changed")
        });
        $(".nexT2back").click(function(){
          $('.texT13').attr('visible','false');
          // 
          $('.texT8').attr('visible','true');
        });
        $(".nexT3").click(function(){
          $('.texT6').attr('visible','false');
          //$('#image-360').attr('src', '#g7'); 
          $('.texT12').attr('visible','true');
          //alert("Background has been changed")
        });
        $(".nexT3back").click(function(){
          $('.texT12').attr('visible','false');
          // 
          $('.texT6').attr('visible','true');
        });
        $(".nexT4").click(function(){
          $('.texT4').attr('visible','false');
          //$('#image-360').attr('src', '#g7'); 
          $('.texT11').attr('visible','true');
          //alert("Background has been changed")
        });
        $(".nexT4back").click(function(){
          $('.texT11').attr('visible','false');
          // 
          $('.texT4').attr('visible','true');
        });
        $(".nexT5").click(function(){
          $('.texT3').attr('visible','false');
          //$('#image-360').attr('src', '#g7'); 
          $('.texT10').attr('visible','true');
          //alert("Background has been changed")
        });
    });



    function hideUsAll(){
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

    function backgroundColor(){
      var colors = ["#ff0066","#00cc66","#0099cc","#ff6600","#008be2","#96e200","#8b00e2","#ff8c00","#ff0033"];                
      var rand = Math.floor(Math.random()*colors.length);
      $('#image-360').attr('color', colors[rand]);
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

      <a-entity id="link" class="icon1" layout="type: line; margin: 1.5" position="-5.804 -4 -1.935" rotation="-40 73.28 0">
        <a-plane material=" opacity: 0.75;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="opacity:1.3; value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity> 

      <a-entity class="boxOne">
      <a-entity geometry="width: 7; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="-8.045 -0.002 -2.623" rotation="-10 73.28 0"></a-entity>
      <a-entity geometry="width: 7; height: 4;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="-8.062 -2.099 -2.63" rotation="-10 73.28 0" text="value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>
      <a-text material="visible:false;" position="-7.549 -0.021 -1.175" rotation="-10 73.28 0" geometry="primitive:plane;width: 5; height: 0.6;" value="Genitalna mikroplazma"></a-text>
      <!--<a-image src="another-image.png"></a-image> -->
<a-sky src="/images/mikroplazma.jpg" radius="10" id = "image-360"></a-sky>
      </a-entity>



      <a-entity id="link" class="icon2" layout="type: line; margin: 1.5" position="-4.984 -4 -3.656" rotation="-40 55.22 0">
        <a-plane  material=" opacity: 0.9;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="value:Gonoreja\n\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity>

      <a-entity class="boxTwo">
      <a-entity geometry="width: 6.25; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="-7.322 1.573 -5.008" rotation="-10 55.22 0"></a-entity>
      <a-entity geometry="width: 6.25; height: 5.94;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="-7.203 -1.421 -4.928" rotation="-10 55.22 0" text="value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>
      <a-text material="visible:false;" position="-6.243 1.316 -3.484" rotation="-10 55.22 0" geometry="primitive:plane;width: 5; height: 0.6;" value="Gonoreja"></a-text>
<a-sky src="/images/gonoreja.jpg" radius="10" id = "image-360"></a-sky>     

      </a-entity>

      <a-entity id="link" class="icon3" layout="type: line; margin: 1.5" position="-3.579 -4 -5.027" rotation="-40 36.44 0">
        <a-plane  material=" opacity: 0.9;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="value:Sifilis\n\n\n\n;align:center; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity>

      <a-entity class="boxThree">
      <a-entity geometry="width: 7; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="-5.264 1.267 -6.892" rotation="-10 36.44 0"></a-entity>
      <a-entity geometry="width: 7; height: 6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="-5.215 -1.536 -6.848" rotation="-10 36.44 0" text="value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>
      <a-text material="visible:false;" position="-2.801 0.626 -3.119" rotation="-10 36.44 0" geometry="primitive:plane;width: 5; height: 0.6;" value="Sifilis"></a-text>
      <a-entity class="nexT5" position="-2.583 -3.959 -7.873" rotation="-9.990  29.570 -90" geometry="primitive: triangle;vertexA: -0.270 0.500 0.000; vertexB:-0.500 -0.700 0.000; vertexC: -0.040 -0.690 0.000" material="side: double;color:#ed005a;"></a-entity>
<a-sky src="/images/sifilis.jpg" radius="10" id = "image-360"></a-sky>

      </a-entity>

      <a-entity id="link" class="icon4" layout="type: line; margin: 1.5" position="-1.842 -4 -5.864" rotation="-40 16.16 0">
        <a-plane  material=" opacity: 0.9;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="value:Klamidija\n\n\n\n; wrapCount:7.23; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity>

      <a-entity class="boxFour">
      <a-entity geometry="width: 7; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="-2.692 2.313 -8.466" rotation="-10 16.16 0"></a-entity>
      <a-entity geometry="width: 7; height: 7;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="-2.609 -1.204 -8.095" rotation="-10 16.16 0" text="value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>
      <a-text material="visible:false;" position="-2.168 1.415 -4.990" rotation="-10 16.16 0" geometry="primitive:plane;width: 5; height: 0.6;" value="Klamidija"></a-text>
      <a-entity class="nexT4" position="0.265 -3.771 -7.980" rotation="-9.990  -14.870 -90" geometry="primitive: triangle;vertexA: -0.310  0.500 0.000; vertexB:-0.430 -0.120 0.000; vertexC: -0.040 -0.100 0.000" material="side: double;color:#ed005a;"></a-entity>
      <a-entity class="nexT4back" position="-0.073 -3.243 -7.970" rotation="-9.990  -14.870 90" geometry="primitive: triangle;vertexA: -0.310  0.500 0.000; vertexB:-0.430 -0.120 0.000; vertexC: -0.040 -0.100 0.000" material="side: double;color:#ed005a;"></a-entity>
      
      <a-sky src="/images/klamidija.jpg" radius="10" id = "image-360"></a-sky>      

      </a-entity>


      <a-entity id="link" class="icon5" layout="type: line; margin: 1.5" position="0 -4 -6.101" rotation="-40 0 0">
        <a-plane  material=" opacity: 0.9;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="value:Triho-\nmonoza\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity>


      <a-entity class="boxFive">
      <a-entity geometry="width: 6.4; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="0.421 1.794 -8.64" rotation="-10 0 0"></a-entity>
      <a-entity geometry="width: 6.4; height: 4.2;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="0.42 -0.555 -8.457" rotation="-10 0 0" text="value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>
      <a-text material="visible:false;" position="-0.504 1.152 -5.42" rotation="-10 0 0" geometry="primitive:plane;width: 5; height: 0.6;" value="Trihomonoza"></a-text>
<a-sky src="/images/trihomonoza.png" radius="10"></a-sky>
      </a-entity>

      <a-entity id="link" class="icon6" layout="type: line; margin: 1.5" position="1.885 -4 -5.82" rotation="-40 -17.74 0">
        <a-plane  material=" opacity: 0.9;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="value:Hiv in\naids\n\n\n;align:center; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity>


      <a-entity class="boxSix">
      <a-entity geometry="width: 7; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="2.759 2.33 -8.308" rotation="-10 -17.74 0"></a-entity>
      <a-entity geometry="width: 7; height: 6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="2.646 -0.916 -7.909" rotation="-10 -17.74 0" text="value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>
      <a-text material="visible:false;" position="1.142 1.476 -5.42" rotation="-10 -17.74 0" geometry="primitive:plane;width: 5; height: 0.6;" value="HIV in AIDS"></a-text>
      <a-entity class="nexT3" position="4.732 -3.468 -6.51" rotation="-9.990  -30.200 -90" geometry="primitive: triangle;vertexA: -0.310  0.500 0.000; vertexB:-0.430 -0.120 0.000; vertexC: -0.040 -0.100 0.000" material="side: double;color:#ed005a;"></a-entity>
      <a-entity class="nexT3back" position="4.425 -2.985 -6.703" rotation="-9.990  -30.200 90" geometry="primitive: triangle;vertexA: -0.310  0.500 0.000; vertexB:-0.430 -0.120 0.000; vertexC: -0.040 -0.100 0.000" material="side: double;color:#ed005a;"></a-entity>

<a-sky src="/images/hiv1.png" radius="10" id = "image-360"></a-sky>

      </a-entity>

      <a-entity id="link" class="icon7" layout="type: line; margin: 1.5" position="3.559 -4 -4.924" rotation="-40 -34.78 0">
        <a-plane  material=" opacity: 0.9;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="value:Hepatitis\nB in C\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity>

      <a-entity class="boxSeven">
      <a-entity geometry="width: 7; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="4.75 1.983 -6.896" rotation="-10 -34.78 0"></a-entity>
      <a-entity geometry="width: 7; height: 6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="4.537 -0.691 -6.575" rotation="-10 -34.78 0" text="value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>
      <a-text material="visible:false;" position="2.132 1.165 -4.414" rotation="-10 -34.78 0" geometry="primitive:plane;width: 5; height: 0.6;" value="Hepatitis B in C"></a-text>
<a-sky src="/images/hepatitis.jpg" radius="10" id = "image-360"></a-sky>
      </a-entity>




      <a-entity id="link" class="icon8" layout="type: line; margin: 1.5" position="4.9 -4 -3.567" rotation="-40 -55.02 0">
        <a-plane  material=" opacity: 0.9;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="value:Papiloma\n\n\n; wrapCount:7.43; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity>

      <a-entity class="boxEight">
      <a-entity geometry="width: 7; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="7.172 2.964 -5.075" rotation="-10 -55.02 0"></a-entity>
      <a-entity geometry="width: 7; height: 6.4;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="6.758 -0.468 -4.796" rotation="-10 -55.02 0" text="value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>
      <a-text material="visible:false;" position="4.31 2.142 -4.674" rotation="-10 -55.02 0" geometry="primitive:plane;width: 5; height: 0.6;" value="Humani virusi papiloma"></a-text>
      <a-entity class="nexT2" position="7.839 -3.249 -2.143" rotation="-9.990  -55.000 -91.5" geometry="primitive: triangle;vertexA: -0.310  0.500 0.000; vertexB:-0.430 -0.120 0.000; vertexC: -0.040 -0.100 0.000" material="side: double;color:#ed005a;"></a-entity>
      <a-entity class="nexT2back" position="7.589 -2.743 -2.472" rotation="-9.990  -55.000 87.28" geometry="primitive: triangle;vertexA: -0.310  0.500 0.000; vertexB:-0.430 -0.120 0.000; vertexC: -0.040 -0.100 0.000" material="side: double;color:#ed005a;"></a-entity>

<a-sky src="/images/papiloma.jpg" radius="10" id = "image-360"></a-sky>
      </a-entity>


      <a-entity id="link" class="icon9" layout="type: line; margin: 1.5" position="5.723 -4 -1.84" rotation="-40 -72.72 0">
        <a-plane  material=" opacity: 0.9;" radius="0.5" color="#484848"geometry="width: 1.25; height: 1.25;" text="value:Herpes\n\n\n\n;align:center; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-plane>
      </a-entity>

      <a-entity class="boxNine">
      <a-entity geometry="width: 7; height: 0.6;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#8c8c8c" position="8.201 2.33 -2.398" rotation="-10 -72.72 0"></a-entity>
      <a-entity geometry="width: 7; height: 5.2;depth: 0.23; primitive: box; buffer: false; skipCache: true" material="color:#303030;" position="7.787 -0.39 -2.277" rotation="-10 -72.72 0" text="value:Mikro-\nplazme\n\n\n; wrapCount:7; width:0.9;color:rgb(51, 204, 255);"></a-entity>
      <a-text material="visible:false;" color="#484848" position="4.76 1.476 -2.242" rotation="-10 -72.72 0" geometry="primitive:plane;width: 5; height: 0.6;" value="Genitalni herpes"></a-text>
      <a-entity class="nexT1" position="7.712 -2.689 0.270" rotation="-9.990  -72.720 -90" geometry="primitive: triangle;vertexA: -0.310  0.500 0.000; vertexB:-0.430 -0.120 0.000; vertexC: -0.040 -0.100 0.000" material="side: double;color:#ed005a;"></a-entity>
      <a-entity class="nexT1back" position="7.804 -2.272 -0.132" rotation="-9.990  -72.720 90" geometry="primitive: triangle;vertexA: -0.310  0.500 0.000; vertexB:-0.430 -0.120 0.000; vertexC: -0.040 -0.100 0.000" material="side: double;color:#ed005a;"></a-entity>
      
      <a-sky src="/images/herpes.jpg" radius="10" id = "image-360"></a-sky>
      <a-image src="/images/text/herpes-text.jpg" position="4.855 0.280 3.950" rotation="1 -119.360 1" geometry="width:5;height:2.5;"></a-image>

      </a-entity>
      
    

      <!-- Camera + cursor. -->
      <a-entity camera look-controls position="0 0 0">
        <a-cursor id="cursor"
          position="0 0 -1"
          animation__click="property: scale; startEvents: click; from: 0.1 0.1 0.1; to: 1 1 1; dur: 150" 
          animation__fusing="property: fusing; startEvents: fusing; from: 1 1 1; to: 0.1 0.1 0.1; dur: 1500"
          event-set__1="_event: mouseenter; color: #E41E9B"
          event-set__2="_event: mouseleave; color: #00CCCC"
          fuse="true">
        </a-cursor>
      </a-entity>
    </a-scene>
    <script src="text.js"></script>
  </body>
</html>