<?php 
$this->load->helper('form');
?>  
<style>
      .cropit-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 250px;
        height: 250px;
      }

      .cropit-preview-image-container {
        cursor: move;
      }

      .image-size-label {
        margin-top: 10px;
      }

      input {
        display: block;
      }

      button[type="submit"] {
        margin-top: 10px;
      }

      #result {
        margin-top: 10px;
        width: 900px;
      }

      #result-data {
        display: block;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        word-wrap: break-word;
      }
    </style>
<div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>Add A new Platform</h4>
                    </div>
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                          <?php echo form_open_multipart('Admin/AddPlatform', 'class="cmxform"" id="signupForm"'); ?>
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
                              <input type="text" class="form-text" id="validate_firstname" name="validate_platform_name" required="" aria-required="true">
                              <span class="bar"></span>
                              <label>Name of the Platform</label>
                            </div>
                            
                              
                            <div class="image-editor">
                                <div class="image-editor">
                                    <input type="file" name="image-data1" class="cropit-image-input">
                                    <div class="cropit-preview"></div>
                                    <div class="image-size-label">
                                      Resize image
                                    </div>
                                    <input type="range" class="cropit-image-zoom-input">
                                    <input type="hidden" name="image-data" class="hidden-image-data" />
                                    
                                </div>
                            </div>  
                            

                            
                        </div>                   
                        <div class="col-md-12">
                              
                              <button class="submit btn btn-danger" type="submit" value="Submit">Add Platform</button>
                        </div>
                        
                      </form>
                      
                      
                      

                    </div>
                  </div>
                </div>
              </div>
    
    <script>
      $(function() {
        $('.image-editor').cropit();

        $('form').submit(function() {
          // Move cropped image data to hidden input
          var imageData = $('.image-editor').cropit('export');
          $('.hidden-image-data').val(imageData);

          // Print HTTP request params
          var formValue = $(this).serialize();
          $('#result-data').text(formValue);

          // Prevent the form from actually submitting
          return false;
        });
      });
    </script>