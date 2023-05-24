<!DOCTYPE html>

<html lang="en">

<head>
  <base href="<?php echo base_url(); ?>" />
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Diary Code
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css?v=2.4.0" rel="stylesheet" />
  <link href="assets/css/paper-kit.css?v=2.4.0" rel="stylesheet" />
  <!--Custom-->
  <script src="assets/ckeditor/ckeditor.js"></script>
  <script src="https://kit.fontawesome.com/f0dc1777fc.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
</head>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">      
      <div class="navbar-translate">
        <a class="navbar-brand" <?= ($module == 'index') ? 'nav-link active' : 'nav-link';?> href="home">
          Home
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">                                   
          <li class="nav-item">
            <a class="<?= ($module == 'diaryentry') ? 'nav-link active' : 'nav-link';?>" href="home/diaryentry">Diary Entry</a>
          </li>       
          <li class="nav-item">
            <a class="<?= ($module == 'diarynew') ? 'nav-link active' : 'nav-link';?>" href="home/diarynew">New Story</a>
          </li>  
          <li class="nav-item">
            <a class="<?= ($module == 'calendar') ? 'nav-link active' : 'nav-link';?>" href="home/calendar">Calendar</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="home/logout">Logout</a>
          </li> 
        </ul> 

        <div id="music">
          <!-- Microphone Rec Permission -->
          <script>
            navigator.mediaDevices.getUserMedia({ audio: true }).then(function (stream) {
              
            var x = document.getElementById("BgMsc"); 
            x.play();

            // stop microphone stream acquired by getUserMedia
            stream.getTracks().forEach(function (track) { track.stop(); });
            });
          </script>
          <audio id="BgMsc" loop <?=($music->mscsts == 1) ? 'muted' : '';?>>
            <source src=<?=$music->path.$music->bgmsc;?> type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>

          <!-- Can loop -->
          <!-- <script>                
              var x = document.getElementById("myAudio").loop; 
              x.play();                
          </script> 
          <audio id="myAudio" controls loop>
            <source src="assets/Karakuri_Pierrot.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>    -->

          <!-- Can Loop -->    
          <!-- <audio controls autoplay loop>
            <source src="assets/Karakuri_Pierrot.ogg" type="audio/ogg">
            <source src="assets/Karakuri_Pierrot.mp3" type="audio/mpeg">
          </audio> -->            
        </div> 

      </div>
    </div>
  </nav>
  <!-- End Navbar -->