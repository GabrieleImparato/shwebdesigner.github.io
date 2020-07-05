<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="SH Web Designer, template per siti web professionali ed originali">
    <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrap, SH web designer, SH , siti web, template web">
    <meta name="author" content="Gabriele Imparato">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page - SH</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="Shdesign.css">
    <link rel="shortcut icon" href="SH.png" type="image/x-icon">
    <style type="text/css">
    /*body{
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }*/

    .container-hover{

      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      position:  static;
      width: 1200px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      width: 100%;

    }
    .container-hover .box{
      position: relative;
      width: 280px;
      height: 500px;
      margin: 20px 0;
      box-sizing: border-box;
      overflow: hidden;
      border-radius: 5px;

    }
    .container-hover .box .imgBx{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      clip-path: circle(500px at center 100px);
      transition: .5s;
    }
    .container-hover .box:hover .imgBx{
      clip-path: circle(80px at center 100px);

    }
    .container-hover .box:hover .imgBx img{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 5px;
    }
    .container-hover .box .img-content{
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 60%;
      padding: 10px;
      box-sizing: border-box;
      text-align: center;
    }
    .container-hover .box .img-content h2{
      margin: 0;
      padding: 0;
    }
    .container-hover .box .img-content h2,
    .container-hover .box .img-content p,
    .container-hover .box .img-content button{
      opacity: 0;
      transition: .5s;
      transform: translateY(20px);
    }
    .container-hover .box:hover .img-content h2{
      opacity: 1;
      transform: translateY(0px);
      transition-delay: .5s;

    }
    .container-hover .box:hover .img-content p{
      opacity: 1;
      transform: translateY(0px);
      transition-delay: .7s;
    }
    .container-hover .box:hover .img-content button{
      opacity: 1;
      transform: translateY(0px);
      transition-delay: .9s;
    }
    </style>
  </head>
  <body>

    <div id="loader-gif"></div>

<div id="main-content">

    <nav class="navbar navbar-dark bg-yellow ">
      <img src="SH.png" class="logo" width="50px" height="50px">
      <a class="navbar-brand nav-color-title fl-left" href="index.html">Web Designer</a>
      <a href="#" class="fl-right godown"><img src="shopping-cart.png" class="logo" width="30px" height="30px"><small class="cartbox" >0</small> </a>
    </nav>
    <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">Home</a>
  <button class="navbar-toggler menu-btn" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarsExample01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="template.html">Template</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contatti</a>
      </li>
      <li class="nav-item">
          <a class="nav-link " href="info.html">Info</a>
      </li>
      <li>
        <a href="signin.html">
          <button type="button"  class="btn btn-warning btn-padtop">Log in</button>
        </a>
      </li>
    </ul>
  </div>
</nav>



<div class="container-hover">
  <div class="row">
  <div class="col-6 col-sm-3">
  <div class="box">
    <div class="imgBx">
      <img src="https://source.unsplash.com/280x500/?nature">
    </div>
    <div class="img-content">
      <h2>Titolo</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <button type="button" class="btn btn-dark">Dettagli</button>
    </div>
  </div>
</div>
</div>
<div class="row">
<div class="col-6 col-sm-3">
<div class="box">
  <div class="imgBx">
    <img src="https://source.unsplash.com/280x500/?buildings">
  </div>
  <div class="img-content">
    <h2>Titolo</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <button type="button" class="btn btn-dark">Dettagli</button>
  </div>
</div>
</div>
</div>
<div class="row">
<div class="col-6 col-sm-3">
<div class="box">
  <div class="imgBx">
    <img src="https://source.unsplash.com/280x500/?food">
  </div>
  <div class="img-content">
    <h2>Titolo</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <button type="button" class="btn btn-dark">Dettagli</button>
  </div>
</div>
</div>
</div>
<div class="row">
<div class="col-6 col-sm-3">
<div class="box">
  <div class="imgBx">
    <img src="https://source.unsplash.com/280x500/?cities">
  </div>
  <div class="img-content">
    <h2>Titolo</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <button type="button" class="btn btn-dark">Dettagli</button>
  </div>
</div>
</div>
</div>
</div>





<nav class="navbar navbar-expand-sm navbar-dark bg-footer-up" style="display: block!important;">
      <div class="  navbar-collapse" id="navbarCollapse" >
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active pd-left">
            <a class="nav-link" href="https://www.instagram.com/gabrieleshinobi/?hl=it"  target="_blank"><img src="instagram.png" alt="" width="30px" height="30px"> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active pd-left">
            <a class="nav-link" href="https://www.facebook.com/gabriele.imparato.9"  target="_blank"><img src="facebook.png" alt="" width="30px" height="30px"> <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
<footer class="footer bg-footer">
     <div class="container">
       <span class="text-muted">Copyright (c) 2020 Gabriele Imparato All Rights Reserved.</span>
     </div>
   </footer>

   </div>

   <script type="text/javascript">

   var loader;
   function loadNow(opacity){
     if(opacity<=0){
       displayContent();
     }else{
       loader.style.opacity = opacity;
       window.setTimeout(function(){
         loadNow(opacity - 0.04)
       }, 100);
     }
   }

   function displayContent(){
     loader.style.display = "none";
     document.getElementById('main-content').style.display = 'block';
   }

   document.addEventListener("DOMContentLoaded",function(){
     loader = document.getElementById('loader-gif');
     loadNow(1);
   });


   const menuBTN = document.querySelector('.menu-btn');
   let menuOpen = false;
   menuBTN.addEventListener('click',()=> {
     if (!menuOpen) {
       menuBTN.classList.add('open');
       menuOpen = true;
     } else {
       menuBTN.classList.remove('open');
       menuOpen = false;
     }
   })
   </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
