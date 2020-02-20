<div class="agile-banner">
	</div>
	<!-- //banner -->
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo base_url(); ?>">Почетна</a></li>
				<li class="active">Извештаји</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	<div class="container">
		<div class="banner-btm-agile">

		<!-- //btm-wthree-left -->

			<div class="agileits_heading_section">
				<h3 class="wthree_head">Извештаји</h3>
				<p class="agileinfo_para">Овде можете преузети извештаје.</p>
			</div>

                                           <?php if(isset($reports20)): ?>
						<ul style="margin-top:100px;">

							<?php foreach($reports20 as $r): ?>
								<h4><strong><?php echo $r->title; ?></strong></h4><hr>
								<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>..Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
							<?php endforeach; ?>

						</ul><hr>
					<?php endif; ?>

				<?php if(isset($reports16)): ?>
					<ul style="margin-top:100px;">

						<?php foreach($reports16 as $r): ?>
							<h4><?php echo $r->title; ?></h4>
						<?php endforeach; ?>

					</ul>
				<?php endif; ?>

            <?php if(isset($reports21)): ?>
                <ul style="margin-top:100px;">

                    <?php foreach($reports21 as $r): ?>
                        <h5><strong><?php echo $r->title; ?></strong></h5><hr>
                        <li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>..Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
                    <?php endforeach; ?>

                </ul><hr>
            <?php endif; ?>

				<?php if(isset($reports19)): ?>
						<ul style="margin-top:100px;">

							<?php foreach($reports19 as $r): ?>
								<h5><strong><?php echo $r->title; ?></strong></h5><hr>
								<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>..Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
							<?php endforeach; ?>

						</ul><hr>
					<?php endif; ?>

				<?php if(isset($reports18)): ?>
						<ul style="margin-top:100px;">

							<?php foreach($reports18 as $r): ?>
								<h5><strong><?php echo $r->title; ?></strong></h5><hr>
								<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>..Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
							<?php endforeach; ?>

						</ul><hr>
					<?php endif; ?>


                  <?php if(isset($reports17)): ?>
						<ul style="margin-top:100px;">

							<?php foreach($reports17 as $r): ?>
								<h5><strong><?php echo $r->title; ?></strong></h5><hr>
								<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>..Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
							<?php endforeach; ?>

						</ul><hr>
					<?php endif; ?>



				<div class="agileits_heading_section">
					<h3 class="wthree_head"></h3>
					<p class="agileinfo_para"></p>
				</div>
					<?php if(isset($reports15)): ?>
						<ul style="margin-top:100px;">

							<?php foreach($reports15 as $r): ?>
								<h4><?php echo $r->title; ?></h4><hr>
								<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>..Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
							<?php endforeach; ?>

						</ul><hr>
					<?php endif; ?>

				<div class="agileits_heading_section">
					<h3 class="wthree_head"></h3>
					<p class="agileinfo_para"></p>
				</div>
					<?php if(isset($reports14)): ?>
						<ul style="margin-top:100px;">

							<?php foreach($reports14 as $r): ?>
								<h4><?php echo $r->title; ?></h4><hr>
								<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>..Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
							<?php endforeach; ?>

						</ul><hr>
					<?php endif; ?>


				<div class="agileits_heading_section">
					<h3 class="wthree_head"></h3>
					<p class="agileinfo_para"></p>
				</div>
					<?php if(isset($reports12)): ?>
						<ul style="margin-top:100px;">

							<?php foreach($reports12 as $r): ?>
								<h4><?php echo $r->title; ?></h4><hr>
								<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>..Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
							<?php endforeach; ?>

						</ul><hr>
					<?php endif; ?>



				<div class="agileits_heading_section">
					<h3 class="wthree_head"></h3>
					<p class="agileinfo_para"></p>
				</div>
					<?php if(isset($reports11)): ?>
						<ul style="margin-top:100px;">

							<?php foreach($reports11 as $r): ?>
								<h4><?php echo $r->title; ?></h4><hr>
								<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>..Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
							<?php endforeach; ?>

						</ul><hr>
					<?php endif; ?>

				               <!-- //dohvatiObicneIzvestajedevet(10) -->

				<div class="agileits_heading_section">
					<h3 class="wthree_head"></h3>
					<p class="agileinfo_para"></p>
				</div>
					<?php if(isset($reports10)): ?>
						<ul style="margin-top:100px;">

							<?php foreach($reports10 as $r): ?>
								<h4><?php echo $r->title; ?></h4><hr>
								<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>..Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
							<?php endforeach; ?>

						</ul><hr>
					<?php endif; ?>

               <!-- //dohvatiObicneIzvestajedevet(9) -->

				<div class="agileits_heading_section">
					<h3 class="wthree_head"></h3>
					<p class="agileinfo_para"></p>
				</div>
					<?php if(isset($reports9)): ?>
						<ul style="margin-top:100px;">

							<?php foreach($reports9 as $r): ?>
								<h4><?php echo $r->title; ?></h4><hr>
								<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>..Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
							<?php endforeach; ?>

						</ul><hr>
					<?php endif; ?>

							<!-- //dohvatiObicneIzvestaje() -->

				<div class="agileits_heading_section">
					<h3 class="wthree_head"></h3>
					<p class="agileinfo_para"></p>
				</div>
					<?php if(isset($reports)): ?>
						<ul style="margin-top:100px;">

							<?php foreach($reports as $r): ?>
								<h4><?php echo $r->title; ?></h4><hr>
								<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>..Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
							<?php endforeach; ?>

						</ul><hr>
					<?php endif; ?>


			<!-- //dohvatiObicneIzvestajedva() -->

				<div class="agileits_heading_section">
					<h3 class="wthree_head"></h3>
					<p class="agileinfo_para"></p>
				</div>
					<?php if(isset($reports2)): ?>
						<ul style="margin-top:100px;">

							<?php foreach($reports2 as $r): ?>
								<h4><?php echo $r->title; ?></h4><hr>
								<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>..Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
							<?php endforeach; ?>

						</ul><hr>
					<?php endif; ?>


			<!-- //dohvatiObicneIzvestajetri() -->

			<div class="agileits_heading_section">
				<h3 class="wthree_head"></h3>
				<p class="agileinfo_para"></p>
			</div>
				<?php if(isset($reports3)): ?>
					<ul style="margin-top:100px;">

						<?php foreach($reports3 as $r): ?>
							<h4><?php echo $r->title; ?></h4><hr>
							<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>...Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
						<?php endforeach; ?>

					</ul><hr>
				<?php endif; ?>

     <!-- //dohvatiObicneIzvestajecetiri() -->

				<div class="agileits_heading_section">
					<h3 class="wthree_head"></h3>
					<p class="agileinfo_para"></p>
				</div>
					<?php if(isset($reports4)): ?>
						<ul style="margin-top:100px;">

							<?php foreach($reports4 as $r): ?>
								<h4><?php echo $r->title; ?></h4><hr>
								<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>...Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
							<?php endforeach; ?>

						</ul><hr>
					<?php endif; ?>

			<!-- //dohvatiObicneIzvestajepet() -->

			<div class="agileits_heading_section">
				<h3 class="wthree_head"></h3>
				<p class="agileinfo_para"></p>
			</div>
				<?php if(isset($reports5)): ?>
					<ul style="margin-top:100px;">

						<?php foreach($reports5 as $r): ?>
							<h4><?php echo $r->title; ?></h4><hr>
							<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>...Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
						<?php endforeach; ?>

					</ul><hr>
				<?php endif; ?>

					<!-- //dohvatiObicneIzvestajesest() -->

				<div class="agileits_heading_section">
					<h3 class="wthree_head"></h3>
					<p class="agileinfo_para"></p>
				</div>
					<?php if(isset($reports6)): ?>
						<ul style="margin-top:100px;">

							<?php foreach($reports6 as $r): ?>
								<h4><?php echo $r->title; ?></h4><hr>
								<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>...Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
							<?php endforeach; ?>

						</ul><hr>
					<?php endif; ?>

						<!-- //dohvatiObicneIzvestajesedam() -->

						<div class="agileits_heading_section">
							<h3 class="wthree_head"></h3>
							<p class="agileinfo_para"></p>
						</div>
							<?php if(isset($reports7)): ?>
								<ul style="margin-top:100px;">

									<?php foreach($reports7 as $r): ?>
										<h4><?php echo $r->title; ?></h4><hr>
										<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>...Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
									<?php endforeach; ?>

								</ul><hr>
							<?php endif; ?>

							<!-- //dohvatiObicneIzvestajeosam() -->

							<div class="agileits_heading_section">
								<h3 class="wthree_head"></h3>
								<p class="agileinfo_para"></p>
							</div>
								<?php if(isset($reports8)): ?>
									<ul style="margin-top:100px;">

										<?php foreach($reports8 as $r): ?>
											<h4><?php echo $r->title; ?></h4><hr>
											<li><label><?php echo $r->summary; ?></label> <?php echo $r->pdf ? "<a href='" . base_url() . "podaci/" .$r->pdf ."'>...Preuzmi pdf fajl</a>" : "<a href='" . base_url() . "podaci/" .$r->excell ."'>...Preuzmi excel fajl</a>" ?></li>
										<?php endforeach; ?>

									</ul><hr>
								<?php endif; ?>




			</div>
			<!-- //btm-wthree-right -->
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- footer -->
