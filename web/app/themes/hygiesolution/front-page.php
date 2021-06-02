<?php get_header(); ?>
  <section class="advantages">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-6"></div>
        <div class="col-lg-6">
          <h1 class="subtitle">Restaurants, hôtels, boucheries, traiteurs...</h1>
          <div class="description">
            Avec Hygie, gagnez du temps, de l'argent et de la sérénité !<br>
            -Faites disparaître le papier en cuisine<br>
            -Centralisez vos enregistrements<br>
            -Respectez la réglementation
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="advantages-item">
            <img class="advantages-image" src="https://hygiesolution.com/wp-content/uploads/2020/02/icons8-multiple_devices-3.png" alt="">
            <div class="content">
              <h4 class="title">Application multiplateformes</h4>
              <div class="description">Hygie est disponible sur smartphone et tablette</div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="advantages-item">
            <img class="advantages-image" src="https://hygiesolution.com/wp-content/uploads/2020/02/icons8-multiple_devices-3.png" alt="">
            <div class="content">
              <h4 class="title">Sauvegarde des données dans le cloud</h4>
              <div class="description">Sauvegarde des données dans le cloud</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="advantages-item">
            <img class="advantages-image" src="https://hygiesolution.com/wp-content/uploads/2020/02/icons8-multiple_devices-3.png" alt="">
            <div class="content">
              <h4 class="title">Fonctionnement hors-ligne</h4>
              <div class="description">Fonctionnement hors-ligne</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="advantages-item">
            <img class="advantages-image" src="https://hygiesolution.com/wp-content/uploads/2020/02/icons8-multiple_devices-3.png" alt="">
            <div class="content">
              <h4 class="title">Gestion multi-sites</h4>
              <div class="description">Hygie est disponible sur smartphone et tablette</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="features">
    <div class="container">
      <h2 class="section-title">Fonctionnalités</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="features-item">
            <div class="left-side">
              <h4 class="category">Email on acid</h4>
              <h3 class="title">Lead Graphic Designer</h3>
              <div class="description">Anywhere - Fulltime</div>
            </div>
            <div class="right-side icon-container">
              <img class="icon" src="https://dev.hygiesolution.com/wp-content/uploads/2020/02/Asset-27.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-item">
            <div class="left-side">
              <h4 class="category">Email on acid</h4>
              <h3 class="title">Lead Graphic Designer</h3>
              <div class="description">Anywhere - Fulltime</div>
            </div>
            <div class="right-side icon-container">
              <img class="icon" src="https://dev.hygiesolution.com/wp-content/uploads/2020/02/Asset-27.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-item">
            <div class="left-side">
              <h4 class="category">Email on acid</h4>
              <h3 class="title">Lead Graphic Designer</h3>
              <div class="description">Anywhere - Fulltime</div>
            </div>
            <div class="right-side icon-container">
              <img class="icon" src="https://dev.hygiesolution.com/wp-content/uploads/2020/02/Asset-27.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-item">
            <div class="left-side">
              <h4 class="category">Email on acid</h4>
              <h3 class="title">Lead Graphic Designer</h3>
              <div class="description">Anywhere - Fulltime</div>
            </div>
            <div class="right-side icon-container">
              <img class="icon" src="https://dev.hygiesolution.com/wp-content/uploads/2020/02/Asset-27.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-item">
            <div class="left-side">
              <h4 class="category">Email on acid</h4>
              <h3 class="title">Lead Graphic Designer</h3>
              <div class="description">Anywhere - Fulltime</div>
            </div>
            <div class="right-side icon-container">
              <img class="icon" src="https://dev.hygiesolution.com/wp-content/uploads/2020/02/Asset-27.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-item">
            <div class="left-side">
              <h4 class="category">Email on acid</h4>
              <h3 class="title">Lead Graphic Designer</h3>
              <div class="description">Anywhere - Fulltime</div>
            </div>
            <div class="right-side icon-container">
              <img class="icon" src="https://dev.hygiesolution.com/wp-content/uploads/2020/02/Asset-27.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
    $partners = get_posts(['post_type' => 'partners', 'post_status' => 'publish']);
  ?>
  <section class="partners">
    <div class="container">
      <h1 class="section-title text-center">Ils nous font confiance</h1>
      <ul class="partners-list">
        <?php foreach($partners as $partner): ?>
        <li><img src="<?php echo get_the_post_thumbnail_url($partner, 'large'); ?>" alt="<?php echo $partner->post_title?>"></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
  
  <?php
    $latest = get_posts(['post_type' => 'post', 'post_status' => 'publish', 'order' => 'DESC', 'numberposts' => 3]);
  ?>
  <section class="blogs">
    <div class="container blog-list">
      <h1 class="section-title">Blog</h1>
      <div class="row">
        <?php foreach($latest as $last): ?>
        <div class="col-lg-4 blog-list-item">
          <a href="<?php echo get_permalink($last); ?>" title="<?php echo $last->post_title; ?>">
          <img src="<?php echo get_the_post_thumbnail_url($last, 'large'); ?>" alt="<?php echo $last->post_title; ?>">
          <div class="content">
            <h4 class="title"><?php echo $last->post_title; ?></h4>
            <div class="excerpt"><?php echo $last->post_excerpt; ?></div>
            <a class="btn btn-secondary rounded rounded-10 my-3 text-white link" href="<?php echo get_permalink($last); ?>" title="<?php echo $last->post_title; ?>">En savoir plus</a>
          </div>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php get_footer(); ?>