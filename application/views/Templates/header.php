<body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                 <b>ADSQUARE.COM</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Type anywhere to <b>Search</b> </label>
                    </div>
                  </div>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span><?php echo $this->session->userdata('FirstName').' '.$this->session->userdata('LastName'); ?></span></li>
                  <li class="dropdown avatar-dropdown">
                      <img src="<?php echo base_url(); ?>asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown animated wow pulse">
                     <li><a href="http://localhost/adsquare/index.php/Profile"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="http://localhost/adsquare/index.php/Subscription"><span class="fa fa-calendar"></span> My Subscriptions</a></li>
                     <?php 
                        if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
                        {
                     ?>
                     <li><a href="http://localhost/adsquare/index.php/Admin/MembershipRequests"><span class="fa fa-user-plus"></span> Membership Requests</a></li>
                     <?php
                        }
                     ?>
                     <?php 
                        if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
                        {
                     ?>
                     <li><a href="http://localhost/adsquare/index.php/Admin/ManageMembers"><span class="fa fa-users"></span> Manage Members</a></li>
                     <?php
                        }
                     ?>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li>
                        <li><a href="http://localhost/adsquare/index.php/LogOut"><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li ><a><span class="fa fa-coffee"></span></a></li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->