<?php 
$this->load->helper('form');
?> 
<div class="col-md-6 col-md-offset-3 ">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading text-center">
                      <h4>Sign Up</h4>
                    </div>
                      <div class="text-center">
                          Already a member?<a href="<?php ECHO base_url(); ?>index.php/LogIn"> Log In</a> 
                      </div>
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                          <!--form class="cmxform" id="signupForm" method="post" action="<?php base_url(); ?>index.php/SignUp/register"-->
                          <?php echo form_open('SignUp/register', 'class="cmxform"" id="signupForm"'); ?>
                          <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_firstname" name="validate_firstname" required>
                              <span class="bar"></span>
                              <label>Firstname</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_lastname" name="validate_password" required>
                              <span class="bar"></span>
                              <label>Password</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_username" name="validate_username" required>
                              <span class="bar"></span>
                              <label>Username</label>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_password" name="validate_lastname" required>
                              <span class="bar"></span>
                              <label>Lastname</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_confirm_password" name="validate_confirm_password" required>
                              <span class="bar"></span>
                              <label>Confirm Password</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="email" class="form-text" id="validate_email" name="validate_email" required>
                              <span class="bar"></span>
                              <label>Email</label>
                            </div>
                            
                          </div>
                          <div class="col-md-12">
                              <label>Purpose of Registration</label> 
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <textarea class="form-control" rows="7" id="purpose" name="purpose"></textarea>
                                    <span class="bar"></span>
                                    
                                </div>
                          </div>  
                            
                          <div class="col-md-12">
                              <div class="form-group form-animate-checkbox">
                                  <input type="checkbox" class="checkbox"  id="validate_agree" name="validate_agree">
                                  <label>Please agree to our policy  <a><small>View Policy And Terms</small></a></label>
                              </div>
                              <input class="submit btn btn-primary" type="submit" value="Submit">
                        </div>
                           
                      </form>
                            
                    </div>
                  </div>
                </div>
              </div>
              