<div class="section landing-section text-center" data-parallax="true" style="background-image: url('<?=$profile->path.$profile->other_img;?>');">
  <div class="container">
    <h2 class="title text-light">Mood Calendar</h2>
      <div class="row">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Years
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-dark">
            <thead class="thead-dark">
              <tr>
                <th class="col">Day / Month</th>
                <th class="col">January</th>
                <th class="col">February</th>
                <th class="col">March</th>
                <th class="col">April</th>        
                <th class="col">May</th>
                <th class="col">June</th>
                <th class="col">July</th>
                <th class="col">August</th>
                <th class="col">September</th>
                <th class="col">October</th>
                <th class="col">September</th>
                <th class="col">December</th>
              </tr>
            </thead>            
              <tbody>            
                <?php for ($i=1; $i <= 31; $i++): ?>                                      
                      <tr>
                        <th><?=$i?></th>  
                          <?php foreach ($entrylist as $key) : ?>
                            <?php  
                                $date = $key->date;  
                                $month = date("n", strtotime($date));   //Tell num month
                                $day   = date("j", strtotime($date));   //Tell num day
                                // print_r("<pre>");
                                // print_r($day);   
                                // print_r("<br>");     
                                // die;
                            ?>                
                            <?php for ($j=1; $j <= 12; $j++): ?>                 
                              <?php if(($month==$j) && ($day==$i)): ?>               
                                <td class="bg-primary">Day <?=$i?>Month <?=$j?><?=$key->date;?></td>
                              <?php else: ?>
                                <td class="bg-secondary">Day <?=$i?>Month <?=$j?><?=$key->date;?></td>
                              <?php endif; ?>
                            <?php endfor; ?>
                          <?php endforeach; ?>
                      </tr>                                                                                                                
                <?php endfor; ?>                 
              </tbody>            
          </table>

          <div class="container">            
            <h3 class="text-light" style="text-decoration: underline overline;">Indicator</h3>
            <div class="row justify-content-center">
              <h3><span class="badge bg-warning ml-4"  style="width: 150px">Happy</span></h3>
              <h3><span class="badge bg-primary ml-4" style="width: 150px">Sad</span></h3>
              <h3><span class="badge bg-danger ml-4" style="width: 150px">Angry</span></h3>
              <h3><span class="badge ml-4" style="width: 150px; background-color: #ce72ce; !important">Nervous</span></h3>
              <h3><span class="badge bg-success ml-4" style="width: 150px">Sick</span></h3>
              <h3><span class="badge bg-secondary ml-4" style="width: 150px">Tired</span></h3>
            </div>
          </div>                              
        </div>
      </div>    
  </div>    
</div>