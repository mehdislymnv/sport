<?php get_header() ?>
 
   
<section id="contant" class="contant">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-sm-12 col-xs-12">
                  <div class="news-post-holder">
                    
                     <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="news-post-widget">
                           <img class="img-responsive" src="<?= the_post_thumbnail_url() ?>" alt="<?= the_title() ?>">
                           <div class="news-post-detail">
                              <span class="date">  <?= the_field('news_date') ?></span>
                              <h2><a href="<?= the_permalink() ?>">Free play to ground in anywhere</a></h2>
                              <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                           </div>
                        </div>
                     </div>
                     
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
      </section>

    
 <?php get_footer() ?>