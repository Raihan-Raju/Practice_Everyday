<?php
include("cdn/header.php");

// include("");

?>
   


   <div class="">
           <div class="col-2">
                <?php include("include/sidebar.php"); ?>
            </div>
   </div>

  <div   style="background-image: url('img/img1.png');
    background-repeat: no-repeat;"
     class="container">
       <?php
        include("include/nav.php");
        ?>
           <div class="row">
                    
                             
                  <div class="col-5">
                  <div class="mb-3">
                      <label for="formFile" class="form-label">Default file input example</label>
                      <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                      <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>
                    <div class="mb-3">
                      <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                      <input class="form-control" type="file" id="formFileDisabled" disabled>
                    </div>
                    <div class="mb-3">
                      <label for="formFileSm" class="form-label">Small file input example</label>
                      <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                    <div>
                      <label for="formFileLg" class="form-label">Large file input example</label>
                      <input class="form-control form-control-lg" id="formFileLg" type="file">
                    </div>
                 </div> 



               <div class="col-5">

                    <form>
                       <fieldset>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                       </fieldset>
                   </form>
               </div>
           </div>
    </div>

     
    <?php
    include("cdn/footer.php");
    ?>