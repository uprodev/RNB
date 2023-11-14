<div class="search-wrapper">
  <button class="search-trigger" type="button">
    <img class="trigger-base" src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/ico-search.svg" alt="" />
    <img class="trigger-close" src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/ico-close.svg" alt="" />
  </button>
  <div class="search-form">
    <form role="search" method="get" action="<?php echo home_url( '/' ) ?>" class="form-search">
      <input type="text" name="s" id="s" placeholder="<?php _e('Search RNB', 'RNB') ?>" />
      <button type="submit"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/ico-search.svg" alt="" /></button>
    </form>
  </div>
</div>