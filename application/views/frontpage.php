  <div class="page-header" data-parallax="true" style="background-image: url('assets/img/daniel-olahh.jpg');">
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
            <img src="assets/img/faces/clem-onojeghuo-3.jpg" width="300" height="300">                         
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
            <h2 class="title text-center">Gallery</h2>
            
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/login-image.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/img/federico-beccari.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/img/fabio-mangione.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <br>
          <a href="home/homegallery" class="btn btn-danger btn-round">Edit Home Gallery</a>  


          </div>
        </div>
      </div>
    </div>
  </div>
