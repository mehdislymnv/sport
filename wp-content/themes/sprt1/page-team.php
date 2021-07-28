<?php get_header() ?>
<section id="top">
         
         <div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
         <div class="inner-information-text">
            <div class="container">
            <?php
            if (have_posts()):
                while (have_posts()): the_post();
                get_template_part( 'template-parts/page/breadcrumb', 'version1', [
                'page_title' => get_the_title()
            ]);
            ?>
               <!-- 
                breadcrumb
               
                -->
            </div>
         </div>
      </section>
      <section id="contant" class="contant main-heading team">
         <div class="row">
            <div class="container">
               <div class="col-md-3 column">
                  <div class="card">
                     <img class="img-responsive" src="<?= get_template_directory_uri() ?>/assets/images/img-1-4.jpg" alt="John" style="width:100%">
                     <div class="">
                        <h4>John Doe</h4>
                        <p class="title">Designer</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 column">
                  <div class="card">
                     <img class="img-responsive" src="<?= get_template_directory_uri() ?>/assets/images/img-1-2.jpg" alt="Mike" style="width:100%">
                     <div class="">
                        <h4>Mike Ross</h4>
                        <p class="title">Art Director</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 column">
                  <div class="card">
                     <img class="img-responsive" src="<?= get_template_directory_uri() ?>/assets/images/img-1-3.jpg" alt="John" style="width:100%">
                     <div class="">
                        <h4>John Doe</h4>
                        <p class="title">Designer</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 column">
                  <div class="card">
                     <img class="img-responsive" src="<?= get_template_directory_uri() ?>/assets/images/img-1-4.jpg" alt="John" style="width:100%">
                     <div class="">
                        <h4>John Doe</h4>
                        <p class="title">Designer</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 column">
                  <div class="card">
                     <img class="img-responsive" src="<?= get_template_directory_uri() ?>/assets/images/img-1-2.jpg" alt="Mike" style="width:100%">
                     <div class="">
                        <h4>Mike Ross</h4>
                        <p class="title">Art Director</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 column">
                  <div class="card">
                     <img class="img-responsive" src="<?= get_template_directory_uri() ?>/assets/images/img-1-3.jpg" alt="John" style="width:100%">
                     <div class="">
                        <h4>John Doe</h4>
                        <p class="title">Designer</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 column">
                  <div class="card">
                     <img class="img-responsive" src="<?= get_template_directory_uri() ?>/assets/images/img-1-3.jpg" alt="John" style="width:100%">
                     <div class="">
                        <h4>John Doe</h4>
                        <p class="title">Designer</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 column">
                  <div class="card">
                     <img class="img-responsive" src="<?= get_template_directory_uri() ?>/assets/images/img-1-4.jpg" alt="John" style="width:100%">
                     <div class="">
                        <h4>John Doe</h4>
                        <p class="title">Designer</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

<?php
    endwhile;
    else:
        get_template_part('template-parts/common/content', 'none');
    endif;
?>
<?php get_footer() ?>