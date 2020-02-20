<div class="agile-banner">
	</div>
	<!-- //banner -->
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo base_url(); ?>">Почетна</a></li>
				<li class="active">Хитни телефони</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	<div class="container">
		<div class="banner-btm-agile">

		<!-- //btm-wthree-left -->
			<div class="col-md-9 btm-wthree-left">
			<div class="agileits_heading_section">
				<h3 class="wthree_head"><span style="color:red">Важни телефони у ЈКП "Водовод и канализација" Обреновац</span></h3>
				<p class="agileinfo_para"><span style="color:red"><strong>Овако можете погледати битне телефоне.</strong></span></p><br><br>
			
        <ul>
            <li><span style="color:red"><strong>Бесплатна тел.линија</strong></span> <span style="color:red"><strong>: 0800-0000-87</strong></span></li>
        </ul><br><hr><br>

			</div>

			<div class="agileits_heading_section">
				<h3 class="wthree_head">Телефони</h3>
				<br>
				<br>
				<hr>
				<!-- <p class="agileinfo_para"><strong>Битне телефони.</strong></p><br><hr> -->
				<ul><strong>
						<li>011/ 7702 067 - Директор / технички секретар/факс.</li><hr>
						<li>011/ 8757 115 - Директор / технички секретар.</li><hr>
						<li>011/ 8728 315 - Наплатно место ул. Цара Лазара бр.3/1.</li><hr>
						<li>011/ 8728 316 - Пријава кварова / централа предузећа.</li><hr>
						<li>011/ 6302 598 - Помоћник директора за техничке послове / руководилац сектора за ИРТО.</li><hr>
						<li>011/ 6302 601 - Помоћник директора за ЕФП / руководилац сектора правних и општих послова.</li><hr>
						<li>011/ 8755 414 - ППВ Забрежје / централа.</li><hr>
						<li>011/ 7702 411 - Руководилац сектора водоснабдевања.</li><hr>
						<li>011/ 8756 410 - Шеф службе контроле рада изворишта, шеф службе производње.</li><hr>
						<li>011/ 8702 519 - ППВ Барич / централа.</li><hr>
						<li>011/ 8701 054 - Инжењер лабораторије.</li><hr>
						<li>011/ 6302 612 - Шеф службе правних послова/јавне набавке.</li><hr>
						<li>011/ 6304 460 - Шеф службе општих послова.</li><hr>
						<li>011/ 6304 428 - Шеф службе продаје.</li><hr>
						<li>011/ 6304 478 - Шеф службе рачуноводства.</li><hr>
						<li>011/ 8721 859 - Наплатно место ул.Војводе Мишића бр.195.</li><hr>
						<li>011/ 6304 461 - Рекламације корисника.</li><hr>
						<li>011/ 6301 474 - Служба набавке / руководилац сектора ЕФП.</li><hr>
						<li>011/ 6302 599 - Референт обрачуна зарада и накнада, сарадник за кадровске послове.</li><hr>
						<li>011/ 8757 371 - Служба ИРТО – прикључење на вик мрежу.</li><hr>
						<li>064/ 8346 540 - Дежурни телефон службе одржавања канализације.</li>
				</strong></ul>

			</div>
				<?php if(isset($reports)): ?>
					<ul style="margin-top:100px;">
						<?php foreach($reports as $r): ?>
							<li><label><?php echo $r->title; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>Preuzmi excell fajl</a>" ?></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
			<!-- //btm-wthree-left -->
				<!-- btm-wthree-right -->
			 <div class="col-md-3 w3agile_blog_left">
				<div class="wthreesearch">
							<form action="#" method="post">
								<input type="search" name="Search" placeholder="Search here" required="">
								<button type="submit" class="btn btn-default search" aria-label="Left Align">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>

				</div>

				<div class="agileinfo_calender">
				<h3>Социјалне мреже</h3>
				<div class="w3ls-social-icons-1">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-google-plus"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-rss"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-behance"></i></a>
				</div>
				</div>

				<?php if(isset($news)): ?>
				<?php foreach ($news as $n): ?>
				<div class="w3ls_popular_posts">

						<h3><a href="<?php echo base_url();?>home/vest/<?php echo $n->id; ?>"><strong><span style="color:black"><?php echo $n->title; ?></span></strong> </a></h3>

						<div class="agileits_popular_posts_grid">
								<div class="w3agile_special_deals_grid_left_grid">

										<a href="<?php echo base_url();?>home/vest/<?php echo $n->id; ?>">
											<?php if($n->youtube): ?>
												<iframe width="270" height="210" src="<?php echo $n->youtube;?>" frameborder="0" allowfullscreen></iframe>
											<?php else: ?>
												<img src="<?php echo base_url(); ?>images/<?php echo $n->file_name; ?>" class="img-responsive" alt="<?php echo $n->alt; ?>" />
											<?php endif; ?>

										</a>
								</div>

								<h4><a href="<?php echo base_url();?>home/vest/<?php echo $n->id; ?>"><?php echo $n->title; ?> </a></h4>
								<p><?php echo $n->summary; ?></p>

						</div>
				</div>

			<?php endforeach; ?>
			<?php else: echo "Nema vesti."; ?>
			<?php endif; ?>

			</div>
			<!-- //btm-wthree-right -->
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- footer -->
