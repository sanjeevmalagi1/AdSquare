<div class="col-md-12 top-20 padding-0">
              <div class="col-md-12">
                <div class="panel">
                  <div class="panel-heading">
                      <h3>Membership Requests</h3>
                  </div>  
                  <div class="panel-body">
                  
                  <div class="responsive-table">
                      
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email ID</th>
                        <th>Username</th>
                        <th>Requested on</th>
                        <th>Purpose of registration</th>
                        
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!--tr>
                        <td>1</td>
                        <td>Sanjeev Malagi</td>
                        <td>sanjeevmalagi@gmail.com</td>
                        <td>sanjeevmalagi</td>
                        <td>16/11/2016</td>
                        <td>post ads</td>
                        <td>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Choose
                                  <span class="icon-arrow-down icons"></span>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Confirm</a></li>
                                  <li><a href="#">Ignore</a></li>
                                </ul>
                            </div>
                        </td>
                      </tr-->
                      <?php 
                      foreach ($Users as $User) {
                      
                      ?>
                      <tr>
                        <td><?php echo $User['ID']; ?></td>
                        <td><?php echo $User['FirstName'].' '.$User['LastName']; ?></td>
                        <td><?php echo $User['Email']; ?></td>
                        <td><?php echo $User['Username']; ?></td>
                        <td>16/11/2016</td>
                        <td><?php echo $User['Purpose']; ?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Choose
                                  <span class="icon-arrow-down icons"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>index.php/Admin/Confirm/<?php echo $User['ID']; ?>">Confirm</a></li>
                                  
                                </ul>
                            </div>
                        </td>
                      </tr>
                      <?php
                      }
                      ?>
                      
                    </tbody>
                  </table>
                  </div>
                  <div class="col-md-6" style="padding-top:20px;">
                    <span>showing 0-10 of 30 items</span>
                  </div>
                  <div class="col-md-6">
                        <ul class="pagination pull-right">
                          <li>
                            <a href="#" aria-label="Previous">
                              <span aria-hidden="true">«</span>
                            </a>
                          </li>
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li>
                            <a href="#" aria-label="Next">
                              <span aria-hidden="true">»</span>
                            </a>
                          </li>
                        </ul>
                  </div>
                </div>
              </div>
            </div>  
          </div>