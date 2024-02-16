<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style_subpage.css">
</head>
<body>
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
        <div class="left-username">
          <div class="online-dot">
            <span class="dot" id="d-online"></span>
          </div>
          <div class="uname">
            <b>tsukihi_fenix</b>
          </div>
        </div>

        <div class="active-page" >
          <a class="back-button" href="index.php">
            <img src="img/left-arrow-white.png" alt="back" width=12px>
          </a>
          <div class="active-page-title">
            <b></b>
          </div>
        </div>  
        <?php include "music_list.php"?>
        <div class="left-garbage">
          <img src="img/trash.png" alt="trash" width=40px>
        </div>

      </div>

      <div class="right-main">
        <div class="img-shuba-duck">
          <img src="img/shuba-duck.png" alt="shub-duck">
        </div>
      </div> 

    </div>
  </div>

<footer>
   <div class="footer">
        <img src="img/footer-wave.png" alt="footer-wave" id="wave-footer">
        <img src="img/akashi-kirei.png" alt="akashi" id="akashi-footer">
  </div>
</footer>

</body>

