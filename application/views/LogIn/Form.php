<?php 
$this->load->helper('form');
?>  
<div class="col-md-6 col-md-offset-3 ">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading text-center">
                      <h4>Log In</h4>
                    </div>
                      <div class="text-center">
                          <p style="font-size: 15px; padding-top: 100px;"> New User? <a href="<?php echo base_url(); ?>index.php/Signup">Sign Up</a> </p>
                      </div>
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                         <?php echo form_open('Login', 'class="cmxform"" id="signupForm"'); ?>
                        <!--form class="cmxform" id="signupForm" method="get" action=""-->
                          
                         <div class="col-md-12">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_username" name="validate_username" required>
                              <span class="bar"></span>
                              <label>Username</label>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group form-animate-text" style="margin-top:10px !important;">
                              <input type="password" class="form-text" id="validate_password" name="validate_password" required>
                              <span class="bar"></span>
                              <label>Password</label>
                            </div>
                          </div>  

                         
                            
                          <div class="col-md-12 text-center">
                              
                              <input class="submit btn btn-danger" type="submit" value="Submit">
                        </div>
                           
                      </form>
                          
                            
                    </div>
                  </div>
                </div>
              </div>
              