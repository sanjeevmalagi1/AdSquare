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
               $this->load->model('Imglinks_model');
               
               foreach ($Items as $Item) {
                   
                   $card['imgLink']=$this->Imglinks_model->GetImgLink($Item[$ItemType]);
                   $card['link']= $Item[$ItemType];
                   $card['text']=$Item[$ItemType];
                   $this->load->view('Templates/card.php',$card);
               }
               
               ?>
                <div class="clearfix"></div> 
               
            </div>
        </div>
    </div>
</div>   
