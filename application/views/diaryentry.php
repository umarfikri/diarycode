<div class="section landing-section"  data-parallax="true" style="background-image: url('assets/img/login-image.jpg');">    
    <div class="container" style="margin-top: 6rem!important;">    

        <?php if($this->session->flashdata('success')):?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                Success added <?= $this->session->flashdata('success'); ?>
                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>                
            </div>
        <?php elseif($this->session->flashdata('fail')):?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-octagon me-1"></i>
            Failed added <?= $this->session->flashdata('fail'); ?>
            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <?php endif;?>

        <div class="row">  
            <?php foreach ($entrylist as $key) : ?>
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body d-flex flex-column">                           
                                <!-- <button><i class="text-right fa-solid fa-bars"></i></button>                                            -->
                            <h2 class="text-center"><?= $key->title;?></h2>                                                                
                            <?php  
                                $orgDate = $key->date;  
                                $orgTime = $key->time;
                                $newDate = date("d-m-Y ", strtotime($orgDate));  
                                $newTime = date("h:i a", strtotime($orgTime));
                            ?>  
                            <h4 class="text-center mb-4"><?= $newDate;?><?= $newTime;?></h4>                
                            <div class="col-md-8 ml-auto mr-auto">                        
                                <h5 class="description" style="text-align: justify; text-justify: inter-word;"><?= $key->content;?></h5>
                                <br>
                                <?php if ($key->img_url != null) : ?>
                                <img src="<?= $key->img_url.$key->image;?>" class="rounded mx-auto d-block" alt="<?= $key->image;?>" width="500px" height="600px">
                                <h3 class="text-center mb-2"><?= $key->alt_img;?></h3>
                                <?php  endif; ?>

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
                                        $textcolour="background-color: #ce72ce;";
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
                                <?php if ($textmood == "Mood Nervous") : ?>
                                    <div class="text-center"><span class="badge mt-auto" style="font-size: 1.75em !important;<?= $textcolour?>"><?= $textmood?></span></div>
                                <?php elseif ($textmood != "Unavailable") : ?>
                                    <div class="text-center"><span class="badge <?= $textcolour?> mt-auto" style="font-size: 1.75em !important;"><?= $textmood?></span></div>  
                                <?php elseif ($textmood == "Unavailable") : ?>                                                 
                                <?php  endif; ?>
                                <br>                            
                            </div>
                        </div>  
                    </div>
                </div>
            <?php endforeach; ?>
            
            <?php $query = $this->db->count_all('entry');?>
            
            <?php if ($query > 0) : ?>
                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <!-- Check total page -->
                                <?php
                                    $totalpage = ceil($query/10);
                                ?>
                                <!-- Previous page -->
                                <?php if ($this->uri->segment(3) >= 2) :?>
                                    <li class="page-item"><a class="page-link" href="<?= base_url().'home/diaryentry/'.$this->uri->segment(3)-1 ?>">Previous</a></li>
                                <?php  endif; ?>
                                <!-- Num Page -->
                                <?php for ($i=1; $i <= $totalpage; $i++) :?>          
                                    <?php if ($i == $this->uri->segment(3)) :?>
                                        <li class="page-item active"><a class="page-link" href="<?= base_url().'home/diaryentry/'.$i ?>"><?= $i ?></a></li>                               
                                    <?php else :?>
                                        <li class="page-item"><a class="page-link" href="<?= base_url().'home/diaryentry/'.$i ?>"><?= $i ?></a></li>
                                    <?php  endif; ?>
                                <?php endfor; ?>
                                <!-- Next page -->
                                <?php if ($this->uri->segment(3) < $totalpage) :?>
                                    <?php if ($this->uri->segment(3) == 0) :?>
                                        <li class="page-item"><a class="page-link" href="<?= base_url().'home/diaryentry/2' ?>">Next</a></li>                                
                                    <?php else :?>
                                        <li class="page-item"><a class="page-link" href="<?= base_url().'home/diaryentry/'.$this->uri->segment(3)+1 ?>">Next</a></li>
                                    <?php  endif; ?>
                                <?php  endif; ?>
                            </ul>
                        </nav>                       
                        </div>  
                    </div>
                </div>
            <?php  endif; ?>
        </div>  
    </div>   
    
</div>