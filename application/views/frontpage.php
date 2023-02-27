  <div class="page-header" data-parallax="true" style="background-image: url('<?=$profile->path.$profile->home_img;?>');">
    <div class="container">
      <div class="motto text-center">
        <h1>Welcome <?=$profile->nickname;?></h1>
        <h3><?=$profile->motto;?></h3>
        <br />        
      </div>
    </div>
  </div>

  <div class="main">
    <div class="section text-center">
      <div class="container px-4">
        <h2 class="title" style="text-decoration: underline overline;">Profile</h2>
        <div class="row gx-5">
          <div class="col-md-4 ml-auto mr-auto">                      
            <img src="<?=$profile->path.$profile->profile_img;?>" width="300" height="300">                         
          </div>
          <div class="col-md-8 ml-auto mr-auto">            
            <h5 class="description" style="text-align: left; text-justify: inter-word;"><?=$profile->description;?></h5> 
            <br>
            <a href="home/profile" class="btn btn-danger btn-round">Edit Profile</a>                    
          </div>
        </div>
        <br/>
        <br/>
        <h2 class="title" style="text-decoration: underline overline;">Social Media</h2>
        <br>
        <div class="row justify-content-md-center">
          <div class="col-md-3">            
            <div class="info">
              <div class="icon icon-danger">
                <a href=<?=$profile->facebook;?> class="fa-brands fa-facebook"></a>
              </div>
              <div class="description">
                <h4 class="info-title">Facebook</h4>                
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <a href=<?=$profile->twitter;?> class="fa-brands fa-twitter"></a>
              </div>
              <div class="description">
                <h4 class="info-title">Twitter</h4>               
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <a href=<?=$profile->insta;?> class="fa-brands fa-instagram"></a>
              </div>
              <div class="description">
                <h4 class="info-title">Instagram</h4>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>    
    <div class="section section-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title" style="text-decoration: underline overline;">Health</h2>                     

            <div class="text-center">
              <h3>Height: <?=$profile->height;?> cm  Weight: <?=$profile->weight;?> kg</h3>
              <h3>Body Mass Index (BMI): <?=round($profile->weight / ($profile->height/100) ** 2, 2);?> kg</h3>
              <?php
                $year = date('Y', strtotime($profile->birthday));
                $currentyear = date("Y");
                $age = $currentyear - $year;

                if($profile->gender == 0){ //Male
                  $bmr = 88.362 + (13.397 * $profile->weight) + (4.799 * $profile->height) - (5.677 * $age);
                }
                elseif($profile->gender == 1){
                  $bmr = 447.593 + (9.247 * $profile->weight) + (3.098 * $profile->height) - (4.330 * $age);
                }
                // print_r("<pre>");
                // print_r($bmr);
                // die();
              
              ?>

              <h3>Basal Metabolic Rate (BMR): <?=round($bmr, 2);?> kg</h3>
            </div>
            

          </div>
        </div>
      </div>
    </div>
  </div>
