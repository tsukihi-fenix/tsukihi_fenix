<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style_subpage.css">
  <link rel="stylesheet" href="style_pic.css">
</head>
<body>
  
  <div id="divZoom" class="zoom">
    <div class="zoom-container">
      <img class="zoomContent" id = "imgZoom" src="img/akashi-kirei.png">
      <div id="caption"></div>
    </div>
  </div>

  <div class="padding-div"> </div>
  <div class="container">
    <div class="top-bar">
      
      <div class="top-bar-left">
        <span class="dot" id="d1"></span>
        <span class="dot" id="d2"></span>  
      </div>
      
      <div class="top-bar-title">
        <h1>ようこそ</h1>
      </div>

      <div class="top-bar-right"></div>
    
    </div>

    <div class="main-content">

      <div class="left-main">
        <a class=left-username href="tsukihi_fenix.php">
          <div class="online-dot">
            <span class="dot" id="d-online"></span>
          </div>
          <div class="uname">
            <b>tsukihi_fenix</b>
          </div>
        </a>

        <div class="active-page" >
          <a class="back-button" href="index.php">
            <img src="img/left-arrow-white.png" alt="back" width=12px>
          </a>
          <div class="active-page-title">
            <b></b>
          </div>
        </div>  

        <div class="catalogue-slim" id="active">
            <div class="cat-text" id="ct-txt-b1-1">
              <p><b>All</b></p>
            </div>
        </div>

        <a class="catalogue-slim" id="cts1" href="pic_tuk.php">
            <div class="cat-text" id="ct-txt-b1-1">
              <p><b>TU Kaiserslautern</b></p>
            </div>
        </a>

        <a class="catalogue-slim" id="cts1" href="">
            <div class="cat-text" id="ct-txt-b1-1">
              <p><b>Davenportplatz</b></p>
            </div>
        </a>

        <a class="catalogue-slim" id="cts1" href="">
            <div class="cat-text" id="ct-txt-b1-1">
              <p><b>Kurt-schumacher</b></p>
            </div>
        </a>
       

        <div class="left-garbage">
          <img src="img/trash.png" alt="trash" width=40px>
        </div>

      </div>

      <div class="right-main">
        <?php 
          $dir = 'img/pic-from-g/';
          $files = scandir($dir);
          $caption = array_fill(0,53,"<-- No caption yet -->(￣y▽￣)╭ Ohohoho.....");
          $images = array();
          $caption[0] = "Spielplatz, Davenportplatz";
          $caption[3] = "Library, Building 42, in front of mensa ";
          foreach($files as $file) {
            if(fnmatch('*.jpg', $file)){
              $images[] = $file;
            }
          }
          
          $i = 0;
          foreach($images as $image){
            echo'<div class="pic-frame">';
            echo '<img id="g-img" class = "thumbnail" src='.$dir.$image.'  alt="'.$caption[$i].'"/>';
            echo'</div>';
            $i++;
          }
        ?>


    </div>
  </div>

<footer>
   <div class="footer">
        <img src="img/footer-wave.png" alt="footer-wave" id="wave-footer">
        <img src="img/akashi-kirei.png" alt="akashi" id="akashi-footer">
  </div>
</footer>

<script>
          const zoom=document.getElementById('divZoom');
          const zoomImg=document.getElementById('imgZoom')
          const captionText = document.getElementById("caption");
        
          var img = document.querySelectorAll('.thumbnail')

          for(var i=0;i<img.length;i++){
            img[i].onclick=function(){
              zoom.style.display = "flex";
              zoomImg.src = this.src;
              zoomImg.alt = this.alt;
              captionText.innerHTML = this.alt;

            }
          }

          zoom.onclick = function(){
            imgZoom.className += "out";
            setTimeout(function(){
              zoom.style.display= "none";
              imgZoom.className = "zoomContent";
            }, 400);
          }
        
        </script>

</body>

