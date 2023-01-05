
<div class="section landing-section"  data-parallax="true" style="background-image: url('assets/img/login-image.jpg');">    
      <div class="container" style="margin-top: 6rem!important;">    
        <div class="row">  
            <?php foreach ($entrylist as $key) : ?>
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-body d-flex flex-column">  
                        <h2 class="title text-center"><?= $key->title;?></h2>
                        <h4 class="text-center mb-2">29/12/2022</h4>
                        <div class="col-md-8 ml-auto mr-auto">                        
                            <h5 class="description" style="text-align: justify; text-justify: inter-word;"><?= $key->content;?></h5>
                            <br>
                            <img src="assets/img/login-image.jpg" class="rounded mx-auto d-block" alt="Gambar Test">
                            <h3 class="text-center mb-2"><?= $key->img_title;?></h3>

                            <?php
                                if ($key->mood==1){
                                    $textmood="Mood Happy";
                                    $textcolour="bg-warning";
                                }
                                else if ($key->mood==2){
                                    $textmood="Mood Sad";
                                    $textcolour="bg-primary";
                                }
                                else if ($key->mood==3){
                                    $textmood="Mood Angry";
                                    $textcolour="bg-danger";
                                }
                                else if ($key->mood==4){
                                    $textmood="Mood Nervous";
                                    $textcolour="color: #ce72ce;";
                                }
                                else if ($key->mood==5){
                                    $textmood="Mood Sick";
                                    $textcolour="bg-success";
                                }
                                else if ($key->mood==6){
                                    $textmood="Mood Tired";
                                    $textcolour="bg-secondary";
                                }
                                else{
                                    $textmood="Unavailable";                                    
                                }
                            ?>
                            <?php if ($textmood != "Unavailable") : ?>
                                <div class="text-center"><span class="badge <?= $textcolour?> mt-auto" style="font-size: 1.75em !important;"><?= $textmood?></span></div>       
                            <?php elseif ($textmood == "Nervous") : ?>
                                <div class="text-center"><span class="badge mt-auto" style="font-size: 1.75em !important;<?= $textcolour?>"><?= $textmood?></span></div>
                            <?php  endif; ?>

                            <br>                            
                        </div>
                    </div>  
                </div>
            </div>
            <?php endforeach; ?>
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-body">  
                        <h2 class="title text-center">Title</h2>
                        <h4 class="text-center mb-2">29/12/2022</h4>
                        <div class="col-md-8 ml-auto mr-auto">                        
                            <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
                            <img src="assets/img/login-image.jpg" class="rounded mx-auto d-block" alt="Gambar Test">
                            <h1><span class="badge bg-warning position-absolute bottom-0 start-0">Mood Happy</span></h1>
                            <br>                            
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                        </nav>  
                    </div>  
                </div>
            </div>
        </div>  
      </div>   
    
</div>