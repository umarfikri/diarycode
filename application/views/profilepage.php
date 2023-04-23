<div class="section landing-section"  data-parallax="true" style="background-image: url(<?=($profile->home_img == null) ? 'assets/default/other_bg.jpg' : $profile->path.$profile->other_img; ?>);">
    <div class="container" style="margin-top: 6rem!important;">        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-center">Register</h5>
                        <div class="row">
                            <div class="col-md-12 ml-auto mr-auto">
                                <form method="POST" enctype="multipart/form-data">
                                    <h5 class="text-center">Profile</h5>
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" name="fullname" value="<?=$profile->fullname;?>">                                
                                    </div>
                                    <div class="form-group">
                                        <label>Nickname</label>
                                        <input type="text" class="form-control" name="nickname" value="<?=$profile->nickname;?>">                                
                                    </div>
                                    <div class="form-group">
                                        <label>Birthday</label>
                                        <input type="date" class="form-control" name="birthday" value="<?=$profile->birthday;?>">                                
                                    </div>

                                    <div class="form-group">
                                        <label>Profile Description</label>
                                        <div class="col-sm-12">                                
                                            <textarea class="form-control" name="description" style="height: 100px"><?=$profile->description;?></textarea>                                                                      
                                        </div>                                                               
                                    </div>           
                                    <div class="form-group">
                                        <label>Motto</label>
                                        <input type="text" class="form-control" name="motto" value="<?=$profile->motto;?>">                                
                                    </div>      

                                    <h5 class="text-center">Social Media</h5>
                                    <div class="form-group">
                                        <label>Facebook Link</label>
                                        <input type="text" class="form-control" name="facebook" value="<?=$profile->facebook;?>">                                
                                    </div>   
                                    <div class="form-group">
                                        <label>Twitter Link</label>
                                        <input type="text" class="form-control" name="twitter" value="<?=$profile->twitter;?>">                                
                                    </div>   
                                    <div class="form-group">
                                        <label>Instagram Link</label>
                                        <input type="text" class="form-control" name="insta" value="<?=$profile->insta;?>">                                
                                    </div>              

                                    <h5 class="text-center">Background Image</h5>
                                    <div class="form-group">
                                        <label>Profile Image</label>
                                        <input class="form-control" type="file" name="profileimage"> 
                                        <!-- <input class="form-control" type="file" name="imagefile" id="formFile">                                  -->
                                    </div>       
                                    <div class="form-group">
                                        <label>Home Page Background Image</label>
                                        <input class="form-control" type="file" name="homeimage">                                
                                    </div>
                                    <div class="form-group">
                                        <label>Other Backround Image</label>
                                        <input class="form-control" type="file" name="otherimage">                                
                                    </div>                                             
                                    
                                    <h5 class="text-center">Health</h5>                                                                        
                                    <div class="form-group">
                                        <label>Height (cm)</label>
                                        <input type="text" class="form-control" name="height" value="<?=$profile->height;?>">                                
                                    </div>
                                    <div class="form-group">
                                        <label>Weight (kg)</label>
                                        <input type="text" class="form-control" name="weight" value="<?=$profile->weight;?>">                                
                                    </div>
                                    <div class="form-group">
                                        <label>Desired Weight (kg)</label>
                                        <input type="text" class="form-control" name="aimweight" value="<?=$profile->aimweight;?>">                                
                                    </div>
                                    <div class="row justify-content-left">
                                        <label class="ml-4">Gender: </label> 
                                        <div class="form-check-radio ml-4">
                                            <label class="form-check-label">
                                                <input class="form-check-input " type="radio" name="gender" value="0" <?=($profile->gender) == '0' ? 'checked' : '' ?>>
                                                Male
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check-radio ml-4">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="gender" value="1" <?=($profile->gender) == '1' ? 'checked' : '' ?>>
                                                Female
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <h5 class="text-center">Account</h5>                                    
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password" value="<?=$this->encryption->decrypt($profile->password);?>">                                
                                    </div>

                                    <button name="submit" value="submit" class="btn btn-primary mt-4">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>           
    </div>        
</div>

  