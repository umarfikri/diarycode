<div class="section section-dark text-center">
  <div class="container">
    <h2 class="title">Mood Calendar</h2>
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
                <th scope="row"><?=$i?></th>              
                  <?php for ($j=1; $j <= 12; $j++): ?>
                    <td class="bg-primary">Mood Sad</td>                                
                  <?php endfor; ?>                               
              </tr>
            <?php endfor; ?>                 
          </tbody>
        </table>
      </div>
    </div>
  </div>    
</div>