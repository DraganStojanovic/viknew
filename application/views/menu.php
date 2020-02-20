<br><br>
<div class="container">
  <section>
  <div class="col-sm-12">
    <h3 align="center"><strong><span style="color:Aqua">Ново на нашем сајту. Провера стања рачуна.</span></strong></h3><br><hr>
    <p align="center"><strong><span style="color:Aqua">ПРОВЕРИТЕ СТАЊЕ ВАШЕГ РАЧУНА :</span></strong></p><hr>

  </span></strong></ol><hr style="width: 100%; color: Aqua; height: 1px; background-color:Aqua;" /><br>

    									  <li><strong><span style="color:Aqua">Рачун.....              </span></strong><a href="http://www.racuniviko.rs" target="_blank" class="btn btn-info">ПРОВЕРИТЕ ВАШ РАЧУН</a></li>
    									  </span></strong></ul>
                      </span></strong></ol><br><hr style="width: 100%; color: Aqua; height: 1px; background-color:Aqua;" /><br>

<h3 align="center"><strong><span style="color:red">Обавештење о промени рачуна ЈКП "Водовод и Канализација" Обреновац 2019.год.</span></strong></h3><br><hr>
<p align="center"><strong><span style="color:red">ПРЕУЗМИТЕ БРОЈ РАЧУНА :</span></strong></p><hr>

                                      </span></strong></ol><hr style="width: 100%; color: red; height: 1px; background-color:red;" /><br>

									  <li><strong><span style="color:red">Рачун.....              </span></strong><a href="https://www.vikobrenovac.com/podaci/obavestenje za promenu racuna 040420191000.doc" target="_blank" class="btn btn-danger">ПРЕУЗМИТЕ РАЧУН</a></li>
									  </span></strong></ul>
                                      </span></strong></ol><br><hr style="width: 100%; color: red; height: 1px; background-color:red;" /><br>


                    <h2 align="center"><strong><span style="color:black">ДНЕВНИ БИЛТЕН</p></span></strong></h2><br>
                    <h3 align="center"><strong><span style="color:black">Погледајте дневна дешавања на терену.</span></strong></h3><br><br>
                    <h2 align="center"><strong><span style="color:red">ВАЖНА ОБАВЕШТЕЊА</p></span></strong></h2><br>
                    <?php foreach ($alert as $alert_item): ?>
                        <!-- <h6 align="center"><strong><span style="color:green">Обаештење на редном броју : <?php echo $alert_item['id']; ?></span></strong></h6><br>
                        <h3 align="center"><strong><span style="color:red; display: none;"><?php echo $alert_item['slug']; ?></span></strong></h3><br> -->
                        <h3 align="center"><strong><span style="color:red"><?php echo $alert_item['title']; ?></span></strong></h3><br>
                        <h4 align="center"><strong><span style="color:red"><?php echo $alert_item['text']; ?></span></strong></h4><br>

                   <?php endforeach; ?><br><br>



                                      <h3 align="center"><strong><span style="color:black">ПЛАН АКТИВНОСТИ СЛУЖБЕ ОДРЖАВАЊА ВОДОВОДНИХ МРЕЖА</span></strong></h3><br>
                                      <h4 align="center"><strong><span style="color:black">Служба одржавања водоводних мрежа дневни радови:</span></strong></h4><br><hr>
                                      <div class="container">
                    <ol class="list-group"><strong><span style="color:black">
                      <!-- <li>Барич ул.Баричких Бораца бр.50 - рад на санацији лома цеви ;</li>
                      <li>Барич ул.Београдска бр.56/е - рад на санацији лома цеви ;</li>
                      <li>Мала Моштаница ул.Рудничка бр.1 - рад на санацији лома цеви ;</li>
                      <li>Стублине Лазића Крај -Ископ рова ;</li>
                      <li>Одвоз питке воде у Стублине, Велико Поље, Пироман, Бровић, Љубинић, Вукићевицу и Орашац ;</li> -->


              <div class="table-responsive">
        <table class="table table-striped">
        <thead>
    <tr>
        <td><strong><span style="color:black">*</span></strong></td>
        <td><strong><span style="color:black">Датум</span></strong></td>
        <td><strong><span style="color:black">Дневни радови</span></strong></td>
    </tr>
    </thead>
<?php foreach ($post as $post_item): ?>
        <tr>
            <td><span style="color:black">-</span></td>
            <td><span style="color:black"><?php echo $post_item['title']; ?> године</span></td>
            <td><span style="color:black"><?php echo $post_item['text']; ?></span></td>
            <td>
                <a href="<?php echo site_url('post/'.$post_item['slug']); ?>"></a>
                <a href="<?php echo site_url('post/edit/'.$post_item['id']); ?>"></a>
                <a href="<?php echo site_url('post/delete/'.$post_item['id']); ?>" "></a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
</div>

									  </span></strong></ul><br>
                                      </span></strong></ol>
</div>
                                      <br><hr style="width: 100%; color: black; height: 1px; background-color:black;" /><br>

<br><br>
</div>
</section>
</div>

<div class="container">
<section class="clearfix">
<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
		<div class="col-sm-3">
        <article>
        <div class="image-hover img-zoom-out">
			<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
		</div>
        <br><hr>

        <h3><?php echo $post['summary']; ?></h3>
        <br>

		<small class="post-date">Време објаве: <?php echo $post['created_at']; ?><br>Категорија <strong><?php echo $post['name']; ?></strong></small><br>
		<?php echo word_limiter($post['body'], 10); ?>
		<br><br>
		<p><a class="agileits w3layouts"  href="<?php echo site_url('/posts/'.$post['slug']); ?>">Више</a></p><br><hr>

        </article>

		</div>

<?php endforeach; ?>
<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
</div>
</section>


</div><br><br>




<div class="container">
   <section class="clearfix">
<?php if(isset($news)): ?>
        <?php foreach($news as $n): ?>

    <div class="col-sm-3">
           <article>
            <a href="<?php echo base_url();?>home/vest/<?php echo $n->id; ?>">

                        <?php if($n->youtube): ?>
                             <div class="embed-responsive embed-responsive-16by9">
                               <iframe class="embed-responsive-item" src="<?php echo $n->youtube;?>" allowfullscreen></iframe>
                            </div>

                            <?php else: ?>
                               <div class="image-hover img-zoom-out">
                              <img src="<?php echo base_url(); ?>images/<?php echo $n->file_name; ?>" class="img-responsive" alt="<?php echo $n->alt; ?>" />
                            </div>
                            <?php endif; ?>
                    <br>
                    <h3><a href="<?php echo base_url();?>home/vest/<?php echo $n->id; ?>"><?php echo $n->title; ?> </a></h3><br>

                          <p><?php echo word_limiter($n->summary,10); ?></p><br>
                          <a class="agileits w3layouts" href="<?php echo base_url();?>home/vest/<?php echo $n->id; ?>">Више <span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></a><br><br><hr>

            </a>
            </article>
            </div>




<?php endforeach; ?>
<?php echo "\n"; ?>
      <?php else: echo "Nema vesti."; ?>
      <?php endif; ?>
    </section>
</div>

        <!-- //btm-wthree-right stari clearfix -->
        <div class="clearfix"></div>

    </div> <!-- .div .container -->
