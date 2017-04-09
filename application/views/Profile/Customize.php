<?php 
$this->load->helper('form');
?> 
<div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading text-center">
                      <h4>Change your Profile</h4>
                    </div>
                      
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-4 text-center">
                          <img class="img-responsive img-circle" src="<?php echo base_url(); ?>asset/img/avatar.jpg">
                          <input type="file" class="btn-primary btn">Change Profile Pic
                      </div>  
                      <div class="col-md-8">
                          <!--form class="cmxform" id="signupForm" method="post" action="<?php base_url(); ?>index.php/SignUp/register"-->
                          <?php echo form_open('Profile/Change', 'class="cmxform"" id="signupForm"'); ?>
                          <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_firstname" name="validate_firstname" required value="<?php echo $Profiledata['FirstName']; ?>">
                              <span class="bar"></span>
                              <label>Firstname</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_lastname" name="validate_password" required>
                              <span class="bar"></span>
                              <label> Old Password</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <input type="text" class="form-text" id="validate_username" name="validate_username" required value="<?php echo $Profiledata['Username']; ?>">
                              <span class="bar"></span>
                              <label>Username</label>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <input type="text" class="form-text" id="validate_password" name="validate_lastname" required value="<?php echo $Profiledata['LastName']; ?>">
                              <span class="bar"></span>
                              <label>Lastname</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_confirm_password" name="validate_confirm_password" required>
                              <span class="bar"></span>
                              <label>New Password</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <input type="email" class="form-text" id="validate_email" name="validate_email" required value="<?php echo $Profiledata['Email']; ?>">
                              <span class="bar"></span>
                              <label>Email</label>
                            </div>
                            
                          </div>
                          <div class="col-md-12">
                              <label>Purpose of Registration</label> 
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <textarea class="form-control" rows="7" id="purpose" name="purpose" value="<?php echo $Profiledata['Purpose']; ?>"></textarea>
                                    <span class="bar"></span>
                                    
                                </div>
                          </div>  
                            
                          <div class="col-md-12">
                              
                              <input class="submit btn btn-primary" type="submit" value="Change">
                        </div>
                           
                      </form>
                            
                    </div>
                  </div>
                </div>
              </div>
              