<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="">
        <p class="lead">Нова Категорија</p>
        <form class="" action="<?php echo base_url() ?>/bilten/dodajKategorijuBilten" method="post">
          <div class="form-group">
            <input type="text" class='form-control' name="catName" value="" placeholder="Nova Kategorija">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-info" name="catSubmit" value="Dodaj">
          </div>
          <?php if($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
              <?php echo $this->session->flashdata("error"); ?>
            </div>
          <?php endif; ?>
          <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success">
              <?php echo $this->session->flashdata("success"); ?>
            </div>
          <?php endif; ?>
        </form>
          <div class="">
            <?php echo form_open_multipart('bilten/dodajBilten');?>
              <p class="lead">Novi Билтен</p>
              <div class="form-group">
                <select  name="bilCategory" class='form-control'>
                  <option value="0">Изабери билтен...</option>
                  <?php if(isset($kategorije)): ?>
                    <?php foreach($kategorije as $kat): ?>
                      <option value="<?php echo $kat->id; ?>"><?php echo $kat->name; ?></option>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </select>
              </div>
              <div class="form-group">
                <textarea placeholder="Naziv fajla za upload" name="bilText" rows="8" cols="80" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="file" name="bilFile" value="" class='form-control'>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-info" name="bilSubmit" value="Dodaj">
              </div>
            </form>
            <?php if($this->session->flashdata('navError')): ?>
             <div class="alert alert-danger">
             <?php echo $this->session->flashdata('navError'); ?>
             </div>
           <?php endif; ?>

              <?php if($this->session->flashdata('navSuccess')): ?>
               <div class="alert alert-success">
               <?php echo $this->session->flashdata('navSuccess'); ?>
               </div>
             <?php endif; ?>

             <?php if($this->session->flashdata('uploadErrors')): ?>
              <div class="alert alert-danger">
              <?php foreach($this->session->flashdata('uploadErrors') as $err): ?>
                <?php echo $err; ?>
              <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
      </div>
    </div>
  </div>

</div>