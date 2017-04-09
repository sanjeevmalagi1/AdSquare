<div class="col-sm-12">
    <div class="panel">
    <div class="panel-heading">
    <h4>Your Subscriptions</h4>
    <p>
      Check your current Subscriptions Status.
    </p>
  </div>
  <div class="panel-body">
    <div class="panel col-md-8 responsive-table animated wow bounceInLeft" style="min-height: 254px;">
        <table class="table table-hover" >
          <tbody>
              <tr class="panel-heading">
             
            <th>No</th>
            <th>Platform</th>
            <th>Channel</th>
            <th>Slot</th>
            <th>Status</th>
            <th></th>
            
          </tr>
          <?php 
          $count=1;
            foreach ($Subscriptions as $Subscription) {
                
          ?>  
          <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $Subscription['Platform']; ?></td>
            <td>
              <?php echo $Subscription['Name']; ?>
            </td>
            <td>
              <?php echo $Subscription['Slot']; ?>
            </td>
            <td>
              <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                      <span class="sr-only">20% Complete</span>
                    </div>
              </div>
               
            </td>
            <td>
              <div class="btn-group" role="group">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                  <span class="icon-arrow-down icons"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Remove</a></li>
                  <li><a href="<?php echo $Subscription['Link']; ?>">Renew</a></li>
                  
                </ul>
                  
              </div>
            </td>
            
          </tr>
          <?php 
            $count++;
            } ?>
          
        </tbody>
    </table>
        
        
        
        
    </div>
    <div class="panel col-sm-4 animated wow bounceInRight">
            <div class="panel-heading-white panel-heading text-center">
               <h4>Doughnut Chart</h4>
             </div>
             <div class="panel-body">
               <center>
               <canvas class="doughnut-chart" height="110" width="220" style="width: 220px; height: 110px;"></canvas>
               </center>
             </div>
    </div>
  </div>
</div>
</div>
<script>
    var doughnutData = [
        <?php 
            foreach ($Subscriptions as $Subscription) {
        ?>
                {
                    value: <?php echo $Subscription['Days']; ?>,
                    color: "rgb(<?php echo rand(100, 255); ?>,<?php echo rand(100, 255); ?>,<?php echo rand(100, 255); ?>)",
                    highlight: "rgb(<?php echo rand(0, 255); ?>,<?php echo rand(0, 255); ?>,<?php echo rand(0, 255); ?>)",
                    label: "<?php echo $Subscription['Platform']; ?> :<?php echo $Subscription['Name']; ?> : <?php echo $Subscription['Slot']; ?>"
                },
        <?php 
            }
        ?>                
                
            ];

</script>

