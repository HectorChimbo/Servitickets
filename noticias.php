<!doctype html>
<html>
	<?php include ('metadatos.php');?>
	<body class="fondo">

		<!-- HEADER SECTION -->
		<div class="navbar navbar-fixed-top navbar-inverse" role="">

			<!-- TOPBAR SECTION -->
			<nav class="top-bar important-class" data-topbar>

				<!-- TITLE AREA & LOGO -->
				<ul class="title-area">
					<li class="name">
						<img src="img/cabecera.png" alt="" id="logo-image">

					</li>
					<li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
				</ul> <!-- END TITLE AREA & LOGO -->

				<!-- MENU ITEMS -->
				<section class="top-bar-section">
					<ul class="right">
						<li><a href="index.php">INICIO</a></li>
						<!--li><a href="#">Portfolio</a></li-->
						<li><!-- class="has-dropdown"-->
							<a href="noticias.php">NOTICIAS</a>
							<!--ul class="dropdown">
								<li><a href="#">NOTICIA #1</a></li>
								<li><a href="#">NOTICIA #2</a></li>
								<li><a href="#">NOTICIA #N</a></li>
							</ul-->
						</li>
                        <li><a href="#">PRODUCTOS</a></li>
						<li><a href="#">CONT&Aacute;CTENOS</a></li>
					</ul>
				</section> <!-- END MENU ITEMS -->
			</nav> <!-- END TOPBAR SECTION -->
		</div> <!-- END HEADER SECTION

		<!-- CONTENT FILL WHEN SCROLL = 0 -->
		
 

		<!-- CONTENT SECTION -->
		<div class="row content-section">
        
        
           
			<div class="main-content container">
            <div class="container"> 
			<?php include('banner.php');?>
            </div>
            	
			<div class=" small-12 medium-12 large-12 columns"><!--cuerpo -->
            
                <div class="full-width__section">
                  <div class="full-width__section-inner">
                    <h3 class="welcome__heading welcome__heading--testimonials">
                      ¡EVENTOS DISPONIBLES SOLO EN SERVITICKETS!
                    </h3>
                    <div class="testimonial ng-scope" ng-controller="TestimonialsController">
                  <div class="loader loader--gray fadeIn ng-hide" data-ng-hide="ready"></div>
                  <ul class="row testimonials__items">
                    <li class="col-sm-4 testimonials__item testimonials__item--middle wow fadeInRight animated" ng-show="page === 1" style="visibility: visible; -webkit-animation: fadeInRight;">
                      <div class="testimonials__item-inner">
                        <p class="testimonials__content">
                          Your Twitter gibberish will now be made sense to the world. kudos, <a target="_blank" href="http://twitter.com/SERVITICKETS">@SERVITICKETS</a> is translating the world <a href="/">SERVITICKETS.com</a> <a href="https://twitter.com/search?q=%23language&amp;src=hash" target="_blank">#language</a>
                        </p>
                        <p class="testimonials__signature clearfix">
                          <img alt="Aileen liao" class="testimonials__avatar" height="40" src="https://dhchbx0tszrcx.cloudfront.net/assets/testimonials/aileen-liao-5e0d2269eb4c25f6d587ca61312cb812.png" width="40">
                          <span class="testimonials__author">
                            <span class="testimonials__author-name">
                              Aileen Liao
                            </span><br>
                            <span class="testimonials__author-details">
                              @aileenmeow • Strategist
                            </span>
                          </span>
                        </p>
                        <div class="testimonials__angle"></div>
                      </div>
                    </li>
                    <li class="col-sm-4 testimonials__item wow fadeInRight animated" ng-show="page === 1" style="visibility: visible; -webkit-animation: fadeInRight;">
                      <div class="testimonials__item-inner">
                        <p class="testimonials__content">
                          <a target="_blank" href="http://twitter.com/SERVITICKETS">@SERVITICKETS</a> I wish you’d been around back when I was getting <a target="_blank" href="http://twitter.com/favstar">@favstar</a> started.  <a target="_blank" href="http://twitter.com/favstar250_es">@favstar250_es</a> could have used you.
                        </p>
                        <p class="testimonials__signature clearfix">
                          <img alt="Tim haines" class="testimonials__avatar" height="40" src="https://dhchbx0tszrcx.cloudfront.net/assets/testimonials/tim-haines-197b4cdc26f133d29e34bfcac2232195.png" width="40">
                          <span class="testimonials__author">
                            <span class="testimonials__author-name">
                              Tim Haines
                            </span><br>
                            <span class="testimonials__author-details">
                              @timhaines • <a href="http://favstar.fm/" target="_blank" title="Favstar">Founder</a>
                            </span>
                          </span>
                        </p>
                        <div class="testimonials__angle"></div>
                      </div>
                    </li>
                    <li class="col-sm-4 testimonials__item wow fadeInRight animated" ng-show="page === 1" style="visibility: visible; -webkit-animation: fadeInRight;">
                      <div class="testimonials__item-inner">
                        <p class="testimonials__content">
                          <a target="_blank" href="http://twitter.com/SERVITICKETS">@SERVITICKETS</a> is great for reaching and interacting with audiences across countries and languages. Especially when quality matters.
                        </p>
                        <p class="testimonials__signature clearfix">
                          <img alt="Thomas kjemperud" class="testimonials__avatar" height="40" src="https://dhchbx0tszrcx.cloudfront.net/assets/testimonials/thomas-kjemperud-50753d0be9d6919e4094c5f793b8c7b9.png" width="40">
                          <span class="testimonials__author">
                            <span class="testimonials__author-name">
                              Thomas Kjemperud
                            </span><br>
                            <span class="testimonials__author-details">
                              @kjemperud • <a href="http://startupletters.com/" target="_blank" title="Startup Letters">Curator</a>
                            </span>
                          </span>
                        </p>
                        <div class="testimonials__angle"></div>
                      </div>
                    </li>
                    <li class="col-sm-4 testimonials__item testimonials__item--middle animated fadeInRight ng-hide" ng-show="page === 2">
                      <div class="testimonials__item-inner">
                        <p class="testimonials__content">
                          SERVITICKETS is the most elegant way to handle automated translation of tweets. Essential for anyone targeting multiple markets.
                        </p>
                        <p class="testimonials__signature clearfix">
                          <img alt="Jerrie pelser" class="testimonials__avatar" height="40" src="https://dhchbx0tszrcx.cloudfront.net/assets/testimonials/jerrie-pelser-d259c90a3c42b5a0bf1a8320023e068d.png" width="40">
                          <span class="testimonials__author">
                            <span class="testimonials__author-name">
                              Jerrie Pelser
                            </span><br>
                            <span class="testimonials__author-details">
                              @beabigrockstar • Blogger
                            </span>
                          </span>
                        </p>
                        <div class="testimonials__angle"></div>
                      </div>
                    </li>
                
                    <li class="col-sm-4 testimonials__item animated fadeInRight ng-hide" ng-show="page === 2">
                      <div class="testimonials__item-inner">
                        <p class="testimonials__content">
                          SERVITICKETS is a fantastic idea, and its execution is flawless. I can now reach out to million more users effortlessly!
                        </p>
                        <p class="testimonials__signature clearfix">
                          <img alt="Vincent le moign" class="testimonials__avatar" height="40" src="https://dhchbx0tszrcx.cloudfront.net/assets/testimonials/vincent-le-moign-95295f79c2b64a938df7df3b4e6e6ec7.png" width="40">
                          <span class="testimonials__author">
                            <span class="testimonials__author-name">
                              Vincent Le Moign
                            </span><br>
                            <span class="testimonials__author-details">
                              @webalys • Entrepreneur
                            </span>
                          </span>
                        </p>
                        <div class="testimonials__angle"></div>
                      </div>
                    </li>
                    <li class="col-sm-4 testimonials__item animated fadeInRight ng-hide" ng-show="page === 2">
                      <div class="testimonials__item-inner">
                        <p class="testimonials__content">
                          I love <a target="_blank" href="http://twitter.com/SERVITICKETS">@SERVITICKETS</a> new service. Try it out. Translate all your tweets instantly in any language you need to. Easy to use and nice interface.
                        </p>
                        <p class="testimonials__signature clearfix">
                          <img alt="Yann sander" class="testimonials__avatar" height="40" src="https://dhchbx0tszrcx.cloudfront.net/assets/testimonials/yann-sander-304fc9706e4ab66d8cddd2365d54c2c5.png" width="40">
                          <span class="testimonials__author">
                            <span class="testimonials__author-name">
                              Yan Sander
                            </span><br>
                            <span class="testimonials__author-details">
                              @yannsander • Founder
                            </span>
                          </span>
                        </p>
                        <div class="testimonials__angle"></div>
                      </div>
                    </li>
                  </ul>
                  <ul class="testimonial__pagination">
                
                    <li class="testimonial__pagination-item testimonial__pagination-nav testimonial__pagination-nav--prev" ng-click="prev()">
                    </li>
                    <li class="testimonial__pagination-item testimonial__pagination-page testimonial__pagination-page--current" ng-class="{'testimonial__pagination-page--current': current(1)}" ng-click="goTo(1)">
                      <i class="fa fa-circle"></i>
                    </li>
                    <li class="testimonial__pagination-item testimonial__pagination-page" ng-class="{'testimonial__pagination-page--current': current(2)}" ng-click="goTo(2)">
                
                      <i class="fa fa-circle"></i>
                    </li>
                    <li class="testimonial__pagination-item testimonial__pagination-nav testimonial__pagination-nav--next" ng-click="next()">
                    </li>
                  </ul>
                </div>
                
                  </div>
    	
				
				
		</div> <!-- END CONTENT SECTION -->


		<!-- FOOTER SECTION -->
		<div class="footer-section container" >
        	<div class="full-width__section-inner full-width__section-inner--large footer__inner">
			<?php  include('footer.php');?>
            </div>
		</div> <!-- END FOOTER SECTION -->

		<!-- JAVASCRIPTS -->
		
	</body>
</html>
