</div>
<!-- end content-->

<!-- start page footer-->
<footer class="page-footer">
  <div class="footer-main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">

          <?php if (get_field('clutch_footer', 'option')): ?>
            <div class="clutch-block">
              <a href="<?= get_field('clutch_footer', 'option')['url'] ?>" target="_blank">

                <?php if ($field = get_field('clutch_footer', 'option')['logo']): ?>
                  <span class="logo">
                    <?= wp_get_attachment_image($field['ID'], 'full') ?>
                  </span>
                <?php endif ?>

                <?php if (get_field('clutch_footer', 'option')['stars'] || get_field('clutch_footer', 'option')['text']): ?>
                <span class="text">

                  <?php if ($field = get_field('clutch_footer', 'option')['stars']): ?>
                    <?= wp_get_attachment_image($field['ID'], 'full') ?>
                  <?php endif ?>

                  <?php if ($field = get_field('clutch_footer', 'option')['text']): ?>
                    <?= $field ?>
                  <?php endif ?>

                </span>
              <?php endif ?>
              
            </a>
          </div>
        <?php endif ?>

      </div>
      <div class="col-md-6 ps-xxl-1">

        <?php if (get_field('subscribe_footer', 'option')): ?>
          <div class="subscription">

            <?php if ($field = get_field('subscribe_footer', 'option')['text']): ?>
              <p><?= $field ?></p>
            <?php endif ?>

            <?php if ($field = get_field('subscribe_footer', 'option')['form']): ?>
              <?= do_shortcode('[contact-form-7 id="' . $field . '"]') ?>
            <?php endif ?>

          </div>
        <?php endif ?>
        
      </div>
    </div>

    <?php if( have_rows('contacts_footer', 'option') ): ?>

      <div class="row flex-md-row-reverse">

        <?php while( have_rows('contacts_footer', 'option') ): the_row(); ?>

          <?php if (get_row_index() % 2 != 0): ?>
            <div class="col-md-6<?php if(get_row_index() == 1) echo ' ps-xxl-1' ?>">
            <?php endif ?>

            <dl>

              <?php if ($field = get_sub_field('title')): ?>
                <dt><?= $field ?></dt>
              <?php endif ?>
              
              <?php if (get_sub_field('text') || get_sub_field('link') || get_sub_field('socials')): ?>
              <dd>

                <?php if (($field = get_sub_field('text')) && get_sub_field('type') == 'Text'): ?>
                <?= $field ?>
              <?php endif ?>

              <?php if (($field = get_sub_field('link')) && get_sub_field('type') == 'Link'): ?>
              <a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
            <?php endif ?>

            <?php if (get_sub_field('type') == 'Socials'): ?>

              <?php if( have_rows('socials') ): ?>

                <ul class="socials">

                  <?php while( have_rows('socials') ): the_row(); ?>

                    <?php if ($field = get_sub_field('title_soc')): ?>
                      <li>
                        <a href="<?php the_sub_field('url_soc') ?>" target="_blank"><?= $field ?></a>
                      </li>
                    <?php endif ?>
                    
                  <?php endwhile; ?>

                </ul>

              <?php endif; ?>

            <?php endif ?>

          </dd>
        <?php endif ?>

      </dl>

      <?php if (get_row_index() % 2 == 0): ?>
      </div>
    <?php endif ?>

  <?php endwhile; ?>

</div>

<?php endif; ?>

</div>
</div>
<div class="footer-bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-lg-3">

        <?php if (get_field('copyright_footer', 'option')): ?>
          <div class="copyright">

            <?php if ($field = get_field('copyright_footer', 'option')['text']): ?>
              <p><?= $field ?></p>
            <?php endif ?>
            
            <?php if ($field = get_field('copyright_footer', 'option')['link']): ?>
              <a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
            <?php endif ?>

          </div>
        <?php endif ?>
        
      </div>
      <div class="col-lg-3 ps-xxl-0 d-none d-lg-block">

        <?php if ($field = get_field('link_footer', 'option')): ?>
          <a href="<?= $field['url'] ?>" class="btn-modal"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
        <?php endif ?>

      </div>
      <div class="col-md-6 ps-xxl-1 d-none d-md-block">
        <nav>

          <?php wp_nav_menu( array(
            'theme_location'  => 'footer',
            'container'       => '',
            'items_wrap'      => '<ul>%3$s</ul>'
          )); ?>

        </nav>
      </div>
    </div>
  </div>
</div>
</footer>
<!-- end page footer-->
</div>

<a href="#modalForm1" class="btn-fixed btn-modal"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/icons/ico-tel.svg" alt="" /></a>

<?php if (get_field('form_modal', 'option')): ?>
  <div id="modalForm" class="modal-wrapper">
    <div class="modal-bg"></div>
    <div class="modal-box">
      <div class="contact-form">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="text font-3">

                <?php if ($field = get_field('title_modal', 'option')): ?>
                  <div class="title"><?= $field ?></div>
                <?php endif ?>

                <?php if ($field = get_field('text_modal', 'option')): ?>
                  <?= $field ?>
                <?php endif ?>

                <?php if ($field = get_field('label_modal', 'option')): ?>
                  <div class="form-sticker"><?= $field ?></div>
                <?php endif ?>

              </div>
            </div>
            <div class="col-md-6">

              <?php if ($field = get_field('form_modal', 'option')): ?>
                <div class="form">
                  <?= do_shortcode('[contact-form-7 id="' . $field . '"]') ?>
                </div>
              <?php endif ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif ?>

<?php if (get_field('report_form_red', 'option')): ?>
  <div id="reportRed" class="modal-wrapper">
    <div class="modal-bg"></div>
    <div class="modal-box">
      <div class="contact-form">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="text font-3">

                <?php if ($field = get_field('title_modal', 'option')): ?>
                  <div class="title"><?= $field ?></div>
                <?php endif ?>

                <?php if ($field = get_field('text_modal', 'option')): ?>
                  <?= $field ?>
                <?php endif ?>

                <?php if ($field = get_field('label_modal', 'option')): ?>
                  <div class="form-sticker"><?= $field ?></div>
                <?php endif ?>

              </div>
            </div>
            <div class="col-md-6">

              <?php if ($field = get_field('report_form_red', 'option')): ?>
                <div class="form">
                  <?= do_shortcode('[contact-form-7 id="' . $field . '"]') ?>
                </div>
              <?php endif ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif ?>

<?php if (get_field('report_form_blue', 'option')): ?>
  <div id="reportBlue" class="modal-wrapper">
    <div class="modal-bg"></div>
    <div class="modal-box">
      <div class="contact-form">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="text font-3">

                <?php if ($field = get_field('title_modal', 'option')): ?>
                  <div class="title"><?= $field ?></div>
                <?php endif ?>

                <?php if ($field = get_field('text_modal', 'option')): ?>
                  <?= $field ?>
                <?php endif ?>

                <?php if ($field = get_field('label_modal', 'option')): ?>
                  <div class="form-sticker"><?= $field ?></div>
                <?php endif ?>

              </div>
            </div>
            <div class="col-md-6">

              <?php if ($field = get_field('report_form_blue', 'option')): ?>
                <div class="form">
                  <?= do_shortcode('[contact-form-7 id="' . $field . '"]') ?>
                </div>
              <?php endif ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif ?>

<?php if (get_field('report_form', 'option')): ?>
  <div id="reportForm" class="modal-wrapper">
    <div class="modal-bg"></div>
    <div class="modal-box">
      <div class="contact-form">
        <div class="container-fluid">
          <div class="row">

            <?php if ($field = get_field('report_form', 'option')): ?>
              <div class="form">
                <?= do_shortcode('[contact-form-7 id="' . $field . '"]') ?>
              </div>
            <?php endif ?>

          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif ?>


<div id="modalForm1" class="modal-wrapper">
  <div class="modal-bg"></div>
  <div class="modal-box">
    <div class="contact-form">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="text font-3">

              <?php if ($field = get_field('title_modal', 'option')): ?>
                <div class="title"><?= $field ?></div>
              <?php endif ?>

              <?php if ($field = get_field('text_modal', 'option')): ?>
                <?= $field ?>
              <?php endif ?>

              <?php if ($field = get_field('label_modal', 'option')): ?>
                <div class="form-sticker"><?= $field ?></div>
              <?php endif ?>

            </div>
          </div>
          <div class="col-md-6">

            <?php if ($field = get_field('form_modal_2', 'option')): ?>
              <div class="form">
                <?= do_shortcode('[contact-form-7 id="' . $field . '"]') ?>
              </div>
            <?php endif ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

<?php if ($field = get_field('code_footer', 'option')): ?>
  <?= $field ?>
<?php endif ?>

</body>
</html>
