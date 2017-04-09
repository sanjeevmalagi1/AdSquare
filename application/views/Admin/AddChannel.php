<?php 
$this->load->helper('form');
?>  
<div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>Add A new Channel</h4>
                    </div>
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                          <?php echo form_open('Admin/AddChannel', 'class="cmxform"" id="signupForm"'); ?>
                        <!--form class="cmxform" id="signupForm" method="get" action="" novalidate="novalidate"-->
                        
                            <div class="panel warning">
                                <div class="panel-body">
                                  <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                  </blockquote>
                                </div>
                            </div>
                        
                          <div class="col-md-12">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_firstname" name="validate_channelname" required="" aria-required="true">
                              <span class="bar"></span>
                              <label>Name of the Channel</label>
                            </div>
                            
                            Platform:
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <select class="form-control" name="validate_platform">
                                
                                <?php
                                foreach ($platforms as $platform) {                                  
                                ?>
                                <option value="<?php echo $platform['ID']; ?>"><?php echo $platform['Name']; ?></option>
                                <?php
                                }
                                ?>
                                
                              </select>
                             <span class="bar"></span>
                              
                            </div>  
                            
                            Image:
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <!--input type="file" class="form-text" id="validate_lastname" name="validate_lastname" required="" aria-required="true"-->
                              <span class="bar"></span>
                              
                            </div>

                            
                          </div>                   
                          <div class="col-md-12">
                              
                              <input class="submit btn btn-danger" type="submit" value="Submit">
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
              </div>