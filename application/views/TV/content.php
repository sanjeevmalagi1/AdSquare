<div class="col-md-12" style="padding:20px;">
    <div class="col-md-12 padding-0">
        <div class="col-md-12 padding-0">
            <div class="col-md-12 padding-0">
                <div class="panel box-v4">
                        <div class="panel-heading bg-white border-none">
                          <h4><span class="icon-notebook icons"></span><?php echo $title; ?></h4>
                        </div>
                    </div> 
               <?php
               //print_r($Platforms);
               foreach ($Names as $Name) {
                   
                   $card['imgLink']="asset/img/logomi.png";
                   $card['link']=  base_url()."index.php/Platform/".$Name['Name'];
                   $this->load->view('Templates/card.php',$card);
               }
               
               ?>
                <div class="clearfix"></div> 
               
            </div>
        </div>
    </div>
</div>    