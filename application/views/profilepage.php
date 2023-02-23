<div class="section landing-section"  data-parallax="true" style="background-image: url('<?=$profile->path.$profile->home_img;?>');">
    <div class="container" style="margin-top: 6rem!important;">        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-center">Register</h5>
                        <div class="row">
                            <div class="col-md-12 ml-auto mr-auto">
                            <form method="POST" enctype="multipart/form-data">
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
                                                                        
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password" value="<?=$profile->password;?>">                                
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

  