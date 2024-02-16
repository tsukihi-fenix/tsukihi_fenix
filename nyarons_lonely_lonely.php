<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style_subpage.css">
  <link rel="stylesheet" href="style_lyrics.css">
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
        

        <?php include "./music_list.php"?>
        
        <div class="left-garbage">
          <img src="img/trash.png" alt="trash" width=40px>
        </div>

      </div>

      <div class="right-main">

        <div class="track-info">
          <div class="album">
            <img src="img/nyarons-lonely.jpeg" alt="nyarons-3">
          </div>
          <div class="track-details">
            <h2>Lonely Lonely</h2><br>
            Nyarons<br>
            <p>Lonely Lonely</p>
          </div>
        </div>

        <div class="lyrics-row">
          <div class="lyrics-romaji">
            Mou niawanai fuku wa suteyou <br>
            Shiikuretto deru made mawashita gacha mo <br>
            Kuroosetto hikidashi aita supeesu <br>
            Yoyuu aru shinpuru raifu <br>
            Besuto janai kedo betaa nara <br>
            Kitto sore de juubun nan da kara <br>
            Otona na engi ni tsukaretara <br>
            Machigaete shimau mae ni oyasumi <br>
          </div>
          <div class="lyrics-english">
            Let's throw away clothes that no longer suit us <br>
            Even the gacha we spun until the secret came out <br>
            Closets, drawers, empty spaces <br>
            Living a simple life with room to spare <br>
            It may not be the best, but if it's better, <br>
            Surely, that's enough <br>
            When tired of acting like an adult, <br>
            Before making a mistake, goodnight <br>
          </div>
        </div>
        <div class="lyrics-row">
          <div class="lyrics-romaji">
            Suibotu no nakami naisho no karupisu <br>
            Nondeta koro mo wakatteita <br>
            Himitsu wa kakushi tooshite chanto kakugo o kimetoi te <br>
            Itsuka no uranai shinjite mitai <br>
            Hoshii mono yori niau mono o <br>
            Erabenakucha yatte ikenai nanimo nokoranai <br>
          </div>
          <div class="lyrics-english">
            The contents of the water bottle, secret Calpis <br>
            Even back when I was drinking it, I knew <br>
            Keep the secret hidden, be prepared <br>
            I want to believe in a fortune from sometime <br>
            Choose what suits you more than what you want <br>
            You have to go on without leaving anything behind <br>
          </div>
        </div>

        
        <div class="lyrics-row">
          <div class="lyrics-romaji">
          Ronrii ronrii toumei na mama de <br>
          Kotaeawase wa shinakute mo ii no
          Sukoshi sabishii kurai de ii no 
          </div>
          <div class="lyrics-english">
            Lonely, lonely, staying transparent <br>
            It's okay not to check the answers <br>
            It's okay to feel a little lonely <br>
          </div>
        </div>

        <div class="lyrics-row">
          <div class="lyrics-romaji">
            Mizuiro kiiro orenji kotton kyandi
            Sakai nai shizuka na guradeeshon
            Yukkuri kawatte iku kokoro
            Shiawase no ōku wa kanchigai?
            Damashi damasare naritatsu banzai
            Mitasaserareru nara kekka ōrai?
          </div>
          <div class="lyrics-english">
            Light blue, yellow, orange, cotton candy
            No boundaries, a quiet gradient
            Slowly, the changing heart
            Is much of happiness a misunderstanding?
            Deceptions upon deceptions, if they fulfill you, is it okay?
          </div>
        </div>


        <div class="lyrics-row">
          <div class="lyrics-romaji">
            Ronrii ronrii oite kebori no kokoro
            Hitotsu futatsu fuete mo ii no
            Sukoshi kanashii kurai de ii no
            Tōi hiroi basho ni tsuitara
            Mou kioku wa usureteru ka na
            Tōhi hitori de tōrisugiteku mirai wa
          </div>
          <div class="lyrics-english">
            Lonely, lonely, leaving behind a heart
            It's okay if one or two more appear
            It's okay to feel a little sad
            When you arrive in a distant, vast place
            Perhaps, memories have already faded
            Avoidance, passing through alone, the future is
          </div>
        </div>
        <div class="lyrics-row">
          <div class="lyrics-romaji">
            Nandemo yokute nandemo yokunakute
            Chūtohanpa de kami ichi nandesu
            Sasai na koto ga mune ni tsukisasatte
            Dōshiyo mo nai
          </div>
          <div class="lyrics-english">
            Anything is fine, and anything is not fine
            It's half-hearted, on a razor's edge
            Trivial things pierce the heart
            What can be done?
          </div>
        </div>
        <div class="lyrics-row">
          <div class="lyrics-romaji">
            Ronrii ronrii toumei na mama de
            Kotaeawase wa shinakute mo ii no
            Sukoshi sabishii kurai ga ii no
            Ronrii ronrii oite kebori no kokoro
            Hitotsu futatsu fuete mo ii no
            Sukoshi kanashii kurai ga ii no
          </div>
          <div class="lyrics-english">
            Lonely, lonely, staying transparent
            It's okay not to check the answers
            It's good to feel a little lonely
            Lonely, lonely, leaving behind a heart
            It's okay if one or two more appear
            It's good to feel a little sad
          </div>
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

