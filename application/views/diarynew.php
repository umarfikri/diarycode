
<div class="section landing-section"  data-parallax="true" style="background-image: url('assets/img/login-image.jpg');">
    <div class="container" style="margin-top: 6rem!important;">        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-center">New Post</h5>
                        <div class="row">
                            <div class="col-md-12 ml-auto mr-auto">
                                <form>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" id="title">                                
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Content</label>
                                        <div class="col-sm-12">                                
                                        <textarea class="form-control" name="content" id="content" style="height: 50px"></textarea>
                                        <script>
                                            // Replace the <textarea id="editor1"> with a CKEditor 4
                                            // instance, using default configuration.
                                            CKEDITOR.replace( 'content' );
                                        </script>                                
                                        </div>                                                               
                                    </div>                            

                                    <label>Mood</label>
                                    <div class="row justify-content-center">
                                        <div class="form-check-radio ml-4">
                                            <label class="form-check-label text-warning">
                                                <input class="form-check-input " type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                Happy
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check-radio ml-4">
                                            <label class="form-check-label text-primary">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                Sad
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check-radio ml-4">
                                            <label class="form-check-label text-danger">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                Angry
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check-radio ml-4">
                                            <label class="form-check-label" style="color: #ce72ce;">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                Nervous
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check-radio ml-4">
                                            <label class="form-check-label text-success">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                Sick
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check-radio ml-4">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                Tired
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input class="form-control" type="file" id="formFile" name="image">                                
                                    </div>       
                                    <div class="form-group">
                                        <label>Image Title</label>
                                        <input type="text" class="form-control" id="imagetitle">
                                    </div>                                                                                      

                                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>           
    </div>  
       
</div>

  