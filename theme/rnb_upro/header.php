<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>

<?php if ($field = get_field('code_header', 'option')): ?>
  <?= $field ?>
<?php endif ?>

<body <?php body_class('home'); ?>>
  <?php wp_body_open(); ?>
  <div class="page-wrapper">
    <!-- start header-->
    <header id="header" class="header">
      <div class="container-fluid">
        <div class="header-panel header-panel--logo">

          <?php if ($field = get_field('logo_header', 'option')): ?>
            <div class="logo">
              <a href="<?= get_home_url() ?>">
                <?= wp_get_attachment_image($field['ID'], 'full') ?>
              </a>
            </div>
          <?php endif ?>

          <?php if ($field = get_field('link', 'option')): ?>
            <a href="<?= $field['url'] ?>" class="btn btn-red btn-modal"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
          <?php endif ?>

        </div>
        <div class="header-panel header-panel--navigation">
          <nav class="main-navigation">

            <?php wp_nav_menu( array(
              'theme_location'  => 'header',
              'container'       => '',
              'items_wrap'      => '<ul>%3$s</ul>'
            )); ?>

          </nav>
        </div>
        <div class="header-panel header-panel--meta">

          <?php get_search_form() ?>

          <div class="lang-wrapper">

            <?php custom_language_switcher() ?>
            
          </div>
          <button class="nav-trigger" type="button">
            <img class="trigger-base" src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/ico-menu.svg" alt="" />
            <img class="trigger-close" src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/ico-close.svg" alt="" />
          </button>
        </div>
      </div>
    </header>
    <!-- end header-->

    <!-- start content-->
    <div class="page-content">