<?php
$this->load->model('Links_model');
$this->load->model('Platforms_model');
$Platforms=$this->Links_model->GetPlatforms();
?>
          <!-- start:Left Menu -->
          <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header"><span class="fa-home fa"></span> Advertise 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <?php foreach ($Platforms as $Platform) {
                          ?> 
                          <li><a href="<?php echo (base_url()."index.php/Platform/index/") ; ?><?php echo $this->Platforms_model->GetNameFormID($Platform['Platform']); ?>"><?php echo $this->Platforms_model->GetNameFormID($Platform['Platform']); ?></a></li> 
                          <?php
                          }
                          ?>
                          
                      </ul>
                    </li>
                    <li class="ripple">
                        <a class="nav-header" href="<?php echo base_url()."index.php/Subscription" ?>">
                        <span class="fa-diamond fa"></span>Current Subscriptions
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="topnav.html">Top Navigation</a></li>
                        <li><a href="boxed.html">Boxed</a></li>
                      </ul>
                    </li>
                    <?php 
                        if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
                        {
                     ?>
                    <li class="ripple">
                        <a class="nav-header" href="<?php echo base_url()."index.php/Admin/MembershipRequests" ?>">
                        <span class="fa fa-user-plus"></span> Membership Requests
                        
                      </a>
                      
                    </li>
                    <?php
                        }
                     ?>
                    
                    <?php 
                        if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
                        {
                     ?>
                    <li class="ripple">
                        <a class="nav-header" href="<?php echo base_url()."index.php/Admin/ManageMembers" ?>">
                        <span class="fa fa-users"></span> Manage Members
                        
                      </a>
                      
                    </li>
                    <?php
                        }
                     ?>
                    <?php 
                        if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
                        {
                     ?>
                    <li class="ripple">
                      <a class="tree-toggle nav-header"><span class="fa fa-plus-square"></span> Add
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="<?php echo base_url().'index.php/Admin/AddPlatform'; ?>">Add Platform</a></li>
                          <li><a href="<?php echo base_url().'index.php/Admin/AddChannel'; ?>">Add Channel</a></li>
                          <li><a href="<?php echo base_url().'index.php/Admin/AddSlot'; ?>">Add Slot</a></li>
                      </ul>
                    </li>
                    <?php
                        }
                     ?>
                    <?php 
                        if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
                        {
                     ?>
                    <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-minus-square"></span> Remove <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                          <li><a href="<?php echo base_url().'index.php/Admin/RemovePlatform'; ?>">Remove Platforms</a></li>
                          <li><a href="<?php echo base_url().'index.php/Admin/RemoveChannel'; ?>">Remove Channel</a></li>
                          <li><a href="<?php echo base_url().'index.php/Admin/RemoveSlot'; ?>">Remove Slot</a></li>
                      </ul>
                    </li>
                    <?php
                        }
                     ?>
                    <?php 
                        if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
                        {
                     ?>
                    <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-check-square-o"></span> Edit <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                          <li><a href="<?php echo base_url().'index.php/Admin/EditPlatform'; ?>">Edit Platforms</a></li>
                          <li><a href="<?php echo base_url().'index.php/Admin/EditChannel'; ?>">Edit Channel</a></li>
                          <li><a href="<?php echo base_url().'index.php/Admin/EditSlot'; ?>">Edit Slot</a></li>
                      </ul>
                    </li>
                    <?php
                        }
                     ?>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Forms  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="formelement.html">Form Element</a></li>
                        <li><a href="#">Wizard</a></li>
                        <li><a href="#">File Upload</a></li>
                        <li><a href="#">Text Editor</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-table"></span> Tables  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="datatables.html">Data Tables</a></li>
                        <li><a href="handsontable.html">handsontable</a></li>
                        <li><a href="tablestatic.html">Static</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a href="calendar.html"><span class="fa fa-calendar-o"></span>Calendar</a></li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-envelope-o"></span> Mail <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="mail-box.html">Inbox</a></li>
                        <li><a href="compose-mail.html">Compose Mail</a></li>
                        <li><a href="view-mail.html">View Mail</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-file-code-o"></span> Pages  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="forgotpass.html">Forgot Password</a></li>
                        <li><a href="login.html">SignIn</a></li>
                        <li><a href="reg.html">SignUp</a></li>
                        <li><a href="article-v1.html">Article v1</a></li>
                        <li><a href="search-v1.html">Search Result v1</a></li>
                        <li><a href="productgrid.html">Product Grid</a></li>
                        <li><a href="profile-v1.html">Profile v1</a></li>
                        <li><a href="invoice-v1.html">Invoice v1</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa "></span> MultiLevel  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li class="ripple">
                          <a class="sub-tree-toggle nav-header">
                            <span class="fa fa-envelope-o"></span> Level 1
                            <span class="fa-angle-right fa right-arrow text-right"></span>
                          </a>
                          <ul class="nav nav-list sub-tree">
                            <li><a href="mail-box.html">Level 2</a></li>
                            <li><a href="compose-mail.html">Level 2</a></li>
                            <li><a href="view-mail.html">Level 2</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="credits.html">Credits</a></li>
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->
          
            <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                    <li class="active ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-home fa"></span>Platforms 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          
                          <?php foreach ($Platforms as $Platform) {
                          ?> 
                          <li><a href="<?php echo (base_url()."index.php/Platform/index/".$Platform['Platform']); ?>"><?php echo $Platform['Platform']; ?></a></li> 
                          <?php
                          }
                          ?>
                      </ul>
                    </li>
                    <li class="ripple">
                        <a class="nav-header" href="<?php echo base_url().'index.php/Subscription'; ?>">
                        <span class="fa-diamond fa"></span>Layout
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="topnav.html">Top Navigation</a></li>
                        <li><a href="boxed.html">Boxed</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span>Charts
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="chartjs.html">ChartJs</a></li>
                        <li><a href="morris.html">Morris</a></li>
                        <li><a href="flot.html">Flot</a></li>
                        <li><a href="sparkline.html">SparkLine</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-pencil-square"></span>Ui Elements
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="color.html">Color</a></li>
                        <li><a href="weather.html">Weather</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="panels.html">Panels & Tabs</a></li>
                        <li><a href="notifications.html">Notifications & Tooltip</a></li>
                        <li><a href="badges.html">Badges & Label</a></li>
                        <li><a href="progress.html">Progress</a></li>
                        <li><a href="sliders.html">Sliders</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="modal.html">Modals</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                       <span class="fa fa-check-square-o"></span>Forms
                       <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="formelement.html">Form Element</a></li>
                        <li><a href="#">Wizard</a></li>
                        <li><a href="#">File Upload</a></li>
                        <li><a href="#">Text Editor</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-table"></span>Tables
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="datatables.html">Data Tables</a></li>
                        <li><a href="handsontable.html">handsontable</a></li>
                        <li><a href="tablestatic.html">Static</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a href="calendar.html">
                         <span class="fa fa-calendar-o"></span>Calendar
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-envelope-o"></span>Mail
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="mail-box.html">Inbox</a></li>
                        <li><a href="compose-mail.html">Compose Mail</a></li>
                        <li><a href="view-mail.html">View Mail</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-file-code-o"></span>Pages
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="forgotpass.html">Forgot Password</a></li>
                        <li><a href="login.html">SignIn</a></li>
                        <li><a href="reg.html">SignUp</a></li>
                        <li><a href="article-v1.html">Article v1</a></li>
                        <li><a href="search-v1.html">Search Result v1</a></li>
                        <li><a href="productgrid.html">Product Grid</a></li>
                        <li><a href="profile-v1.html">Profile v1</a></li>
                        <li><a href="invoice-v1.html">Invoice v1</a></li>
                      </ul>
                    </li>
                     <li class="ripple"><a class="tree-toggle nav-header"><span class="fa "></span> MultiLevel  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li class="ripple">
                          <a class="sub-tree-toggle nav-header">
                            <span class="fa fa-envelope-o"></span> Level 1
                            <span class="fa-angle-right fa right-arrow text-right"></span>
                          </a>
                          <ul class="nav nav-list sub-tree">
                            <li><a href="mail-box.html">Level 2</a></li>
                            <li><a href="compose-mail.html">Level 2</a></li>
                            <li><a href="view-mail.html">Level 2</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="credits.html">Credits</a></li>
                  </ul>
            </div>
        </div>       
      </div>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
