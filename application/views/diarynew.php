<div class="card mt-4" id="basic-info">
            <div class="card-header">
              <h5>Aduan Baharu</h5>
            </div>
            <div class="card-body pt-0">
            <form method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-6">
                  <label class="form-label">Tajuk</label>
                  <div class="input-group">
                    <input id="tajuk" name="tajuk" class="form-control" type="text" placeholder="Tajuk" required="required" onfocus="focused(this)" onfocusout="defocused(this)">
                  </div>
                </div>
                <div class="col-6">
                  <label class="form-label">Tarikh</label>
                  <div class="input-group">
                    <input id="tarikh" name="tarikhaduan" class="form-control" type="date" placeholder="date" required="required" value="<?= date("Y-m-d") ?>" onfocus="focused(this)" onfocusout="defocused(this)" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-12">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" required="required" rows="3"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-12">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Justifikasi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="justifikasi" required="required" rows="3"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <label class="form-label">File</label>
                  <div class="input-group">
                    <input id="file" name="attachment" class="form-control" type="file" placeholder="date" onfocus="focused(this)" onfocusout="defocused(this)">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-12">
                  <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0" value="submit" name="submit">Hantar</button>
                </div>
              </div>
            </form>
            </div>
          </div>