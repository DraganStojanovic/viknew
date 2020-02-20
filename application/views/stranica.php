<div class="w3layouts-top-strip">

<div class="container">
<div class="banner-btm-agile">
<div class="col-md-9 btm-wthree-left">

    <?php if(isset($vest)):$vest = $vest[0];  ?>

              <div class="wthree-top">


                  <div class="w3agile-top">

                      <div class="w3agile_special_deals_grid_left_grid">
                          <a href="<?php echo base_url();?>home/vest/<?php echo $vest->id; ?>">
                            <?php if($vest->youtube): ?>
                              <iframe width="854" height="480" src="<?php echo $vest->youtube;?>" frameborder="0" allowfullscreen></iframe>
                            <?php else: ?>
                              <img src="<?php echo base_url(); ?>images/<?php echo $vest->file_name; ?>" class="img-responsive" alt="<?php echo $vest->alt; ?>" />
                            <?php endif; ?>
                          </a>
                      </div>

                  </div>

                  <div class="w3agile-bottom">

                      <div class="col-md-9 w3agile-right">
                          <h3><a href="<?php echo base_url();?>home/vest/<?php echo $vest->id; ?>"><?php echo $vest->title; ?> </a></h3>
                          <p><?php echo $vest->text; ?></p>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>

						<?php endif; ?>
  </div>

      
        <!-- //btm-wthree-right -->
        <div class="clearfix"></div>
    </div>
</div>
