<?php 
$this->load->helper('form');
?> 
<div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading text-center">
                      <h4>Profile Of <?php echo $Profiledata['FirstName']; ?> <?php echo $Profiledata['LastName']; ?> </h4>
                    </div>
                      
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-4 text-center well">
                          <img class="img-responsive img-circle" src="<?php echo base_url(); ?>asset/img/avatar.jpg">
                          
                      </div>  
                      <div class="col-md-8">
                          <!--form class="cmxform" id="signupForm" method="post" action="<?php base_url(); ?>index.php/SignUp/register"-->
                          
                          <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <p>First Name : </p>  
                              <h4><?php echo $Profiledata['FirstName']; ?></h4>
                              
                            </div>

                            

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <p>Username : </p>  
                              <h4><?php echo $Profiledata['Username']; ?></h4>
                              
                            </div>
                          </div>
                          
                          <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <p>Last Name : </p>  
                              <h4><?php echo $Profiledata['LastName']; ?></h4>
                              
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <p>Email : </p>  
                              <h4><?php echo $Profiledata['Email']; ?></h4>
                              
                            </div>  
                            
                            
                          </div>
                          <div class="col-md-12">
                              <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <p>Purpose of Registration : </p>  
                              <div class="well">
                                  <?php echo $Profiledata['Purpose']; ?>
                              </div>
                              
                            </div>  
                          </div>  
                            
                          <div class="col-md-12">
                             
                        </div>
                           
                     
                            
                    </div>
                  </div>
                </div>
              </div>
<div class="clearfix"></div>
              