<?php get_header(); ?>

<?php $hero = get_field('hero'); ?>

<div class="header-info">
  <div class="container">
    <div class="text-center">
      <div class="header-info-items text-white">
        <img src="<?php echo $hero['image']; ?>" alt="" class="fade-in-down" width="300px" />
        <span class="pt-4 d-block flip-up"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
        <h2 class="main-heading flip-up">
          <?php echo $hero['tagline']; ?> <br /><?php echo $hero['tagline_2']; ?>
        </h2>

        <?php if ($hero['link']) : ?>
          <a class="button-link" href="<?php echo $hero['link']; ?>"><button class="btn-main flip-up"><?php echo $hero['link_text']; ?></button></a>
        <?php endif; ?>

      </div>
    </div>
  </div>
</div>

<?php $about = get_field('about'); ?>

<section id="learn-to-drive" class="py-4">
  <div class="container">
    <div class="row py-2">
      <div class="col-xl-7 d-none d-xl-block" style="opacity: 0.8">
        <img src="<?php bloginfo('template_directory'); ?>/img/driving-lessons.png" alt="" class="driving-lessons fade-in-right" />
      </div>
      <div class="col-xl-5">
        <h2 class="main-heading l-heading fade-in-right">
          <span class="l">L</span>earn To Drive
        </h2>
        <div class="fade-in-up">
          <?php echo $about['about_main_text']; ?>
        </div>

        <h2 class="main-heading fade-in-up">
          <span class="l">L</span>arry's Aim For You:
        </h2>
        <ul>
          <li class="fade-in-right" style="animation-delay: 50ms !important">
            <?php echo $about['about_bullet_1']; ?>
          </li>
          <li class="fade-in-right" style="animation-delay: 550ms !important">
            <?php echo $about['about_bullet_2']; ?>
          </li>
          <li class="fade-in-right" style="animation-delay: 1250ms !important">
            <?php echo $about['about_bullet_3']; ?>
          </li>
        </ul>
      </div>
    </div>
    <div class="testimonials pt-4">
      <?php echo do_shortcode('[sp_testimonial id="100"]'); ?>
    </div>
  </div>
</section>



<?php $offer = get_field('whats_on_offer'); ?>

<section id="whats-on-offer" class="py-4">
  <div class="container">
    <h2 class="main-heading text-center mb-4">What's On Offer:</h2>
    <div class="row py-2 text-center offer-container">
      <div class="col-lg-3 offer-bg ">
        <i class="<?php echo $offer['icon_1']; ?> fa-5x move-in-up"></i>
        <p class="py-2 main-heading"><?php echo $offer['heading_1']; ?></p>

        <?php if ($offer['link_1']) : ?>
          <a class="button-link" href="<?php echo $offer['link_1']; ?>"><button class="btn-main fade-in-right"><?php echo $offer['link_text_1']; ?></button></a>
        <?php endif; ?>

      </div>
      <div class="col-lg-3 offer-bg">
        <i class="<?php echo $offer['icon_2']; ?> fa-5x move-in-up"></i>
        <p class="py-2 main-heading"><?php echo $offer['heading_2']; ?></p>

        <?php if ($offer['link_2']) : ?>
          <a class="button-link" href="<?php echo $offer['link_2']; ?>"><button class="btn-main fade-in-right"><?php echo $offer['link_text_2']; ?></button></a>
        <?php endif; ?>

      </div>
      <div class="col-lg-3 offer-bg">
        <i class="<?php echo $offer['icon_3']; ?> fa-5x move-in-up"></i>
        <p class="py-2 main-heading"><?php echo $offer['heading_3']; ?></p>

        <?php if ($offer['link_3']) : ?>
          <a class="button-link" href="<?php echo $offer['link_3']; ?>"><button class="btn-main fade-in-right"><?php echo $offer['link_text_3']; ?></button></a>
        <?php endif; ?>

      </div>
    </div>

    <div class="row text-center counter-container pt-3">
      <div class="col-lg-4 py-3">
        <i class="<?php echo $offer['icon_4']; ?> fa-5x py-2 move-in-up"></i>
        <div class="counter py-2" data-target="<?php echo $offer['number_1']; ?>"></div>
        <span><?php echo $offer['description_1']; ?></span>
      </div>
      <div class="col-lg-4 py-3">
        <i class="<?php echo $offer['icon_5']; ?> fa-5x py-2 move-in-up"></i>
        <div class="counter py-2" data-target="<?php echo $offer['number_2']; ?>"></div>
        <span><?php echo $offer['description_2']; ?></span>
      </div>
      <div class="col-lg-4 py-3">
        <i class="<?php echo $offer['icon_6']; ?> fa-5x py-2 move-in-up"></i>
        <div class="counter py-2" data-target="<?php echo $offer['number_3']; ?>"></div>
        <span><?php echo $offer['description_3']; ?></span>
      </div>
    </div>



  </div>
</section>

<?php $fees = get_field('fees'); ?>

<section id="fees" class="py-4">
  <div class="container pb-4">
    <h2 class="main-heading text-center"><?php echo $fees['fees_heading']; ?></h2>

    <div class="receipt fade-in-right">
      <div class="content">
        <h4 class="text-center"><strong><?php echo $fees['fees_title']; ?></strong></h4>
        <p class="text-center">
          <strong><?php echo $fees['fees_address']; ?> <br /><?php echo $fees['fees_telephone_number']; ?></strong>
        </p>
        <table class="table table-borderless">
          <thead>
            <tr>
              <th></th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $fees['item_1']; ?></td>
              <td>£<?php echo $fees['price_1']; ?></td>
            </tr>
            <tr>
              <td><?php echo $fees['item_2']; ?></td>
              <td>£<?php echo $fees['price_2']; ?></td>
            </tr>
            <tr>
              <td><?php echo $fees['item_3']; ?></td>
              <td>£<?php echo $fees['price_3']; ?></td>
            </tr>
            <tr>
              <td><?php echo $fees['item_4']; ?></td>
              <td>£<?php echo $fees['price_4']; ?></td>
            </tr>
          </tbody>
        </table>
        <p class="text-center"><?php echo $fees['fees_message']; ?></p>

        <?php if ($fees['link']) : ?>
          <a href="<?php echo $fees['link']; ?>" class="button-link"><button class="receipt-btn"><?php echo $fees['link_text']; ?></button></a>

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>


<?php $book = get_field('book'); ?>

<section id="book" class="py-4">
  <div class="container">
    <h2 class="main-heading text-center">Book a <span class="l">L</span>esson</h2>
    <p class="text-center">
      <?php echo $book['book_text']; ?>
     
    </p>
    <?php echo do_shortcode("[CP_APP_HOUR_BOOKING]"); ?>
  </div>
</section>



<!-- CONTACT -->

<section id="contact" class="py-4">
  <div class="container">
    <h2 class="main-heading text-center">Contact</h2>
    <p class="text-center">
      Use the contact form below and Larry will get back to you within 24
      hours!
    </p>
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Contact")) : ?>
    <?php endif; ?>
  </div>
</section>

<div class="container pb-4">
  <?php
  echo do_shortcode('[smartslider3 slider="2"]');
  ?>
</div>

<?php get_footer(); ?>