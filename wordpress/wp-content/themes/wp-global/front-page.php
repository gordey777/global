<?php /* Template Name: Front Page */ get_header(); ?>

  <section id="main" role="main" class="clearfix">
    <a id="main-content"></a>
    <div class="wrapper-1920 slider-wrap">
      <div class="wrapper">
        <div class="field field-name-field-links field-type-link-field field-label-hidden">
          <div class="field-items">
            <?php if( have_rows('left_content_links' ) ): ?>
              <?php while ( have_rows('left_content_links', 7 ) ) : the_row(); ?>
                <div class="field-item">
                  <a href="<?php the_sub_field('link'); ?>">
                   <?php the_sub_field('title'); ?>
                  </a>
                </div>
              <?php  endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="price-list">
          <a href="http://bsc.global/price.xls">
            <span>Скачать список готовых фирм</span>
            <span>последнее обновление: 26.01.2017</span>
          </a>
        </div>
        <!-- slider -->


        <?php if( have_rows('home_page_slider' ) ): ?>
          <div class="field-slider-wrap">
            <?php while ( have_rows('home_page_slider', 7 ) ) : the_row(); ?>
              <div class="field-item">

                <?php $image = get_sub_field('image');
                  if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>

                <div class="quote">
                  <?php the_sub_field('text'); ?>
                </div>

              </div>
            <?php  endwhile; ?>

          </div><!-- /.field-slider-wrap -->
        <?php endif; ?>

      </div>
    </div>


    <div class="sale-text">
      <span>ВНИМАНИЕ АКЦИЯ!!! ООО БЕЗ РАСЧЕТНОГО СЧЕТА - 15 Т.Р.!</span>
    </div>
    <div class="wrapper under-content">
      <div class="region region-under-content">
        <section id="block-block-3" class="block block-block">
          <div class="content">
            <a href="http://bsc.global/#" class="custom-link-item">
              <span class="custom-link-item-img custom-link-item-img-1"></span>
              <span>О компании</span>
            </a>
            <a href="http://bsc.global/partnership" class="custom-link-item">
              <span class="custom-link-item-img custom-link-item-img-2"></span>
              <span>Приглашаем к сотрудничеству</span>
            </a>
            <a href="http://bsc.global/feedback" class="custom-link-item">
              <span class="custom-link-item-img custom-link-item-img-3"></span>
              <span>Заполнить форму онлайн заказа</span>
            </a>
            <a href="http://bsc.global/toDirector" class="custom-link-item">
              <span class="custom-link-item-img custom-link-item-img-4"></span>
              <span>Написать руководителю</span>
            </a>
          </div>
        </section><!-- /.block -->

        <section id="block-views-services-block-block" class="block block-views">
          <div class="block-title h2">Наши услуги</div>
          <div class="content">
            <div class="view view-services-block view-id-services_block view-display-id-block view-dom-id-87374c052e21a45d0a1e5793e3ac2ec3">
              <div class="view-content">

                <?php if( have_rows('servises_links' ) ): ?>
                    <?php while ( have_rows('servises_links', 7 ) ) : the_row(); ?>

                      <div class="views-row">
                        <div class="views-field views-field-field-image">
                          <div class="field-content">
                            <?php $image = get_sub_field('image');
                            if( !empty($image) ): ?>
                              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                          </div>
                        </div>
                        <div class="views-field views-field-title">
                          <div class="field-content h3"><?php the_sub_field('title'); ?></div>
                        </div>
                        <div class="views-field views-field-field-link">
                          <div class="field-content btn"><a href="<?php the_sub_field('link'); ?>">подробнее</a></div>
                        </div>
                      </div>

                    <?php  endwhile; ?>
                <?php endif; ?>

              </div>
            </div>
          </div>
        </section><!-- /.block -->

        <section id="block-views-partners-block" class="block block-views">
          <div class="block-title h2">Мы сотрудничаем с</div>
          <div class="content">
            <div class="view view-partners view-id-partners view-display-id-block view-dom-id-ee6a3dac67be125d1053f01ffbcdb99c">
              <div class="view-content">
                <div class="skin-default">
                  <div id="bxslider_views_slideshow_main_partners-block" class="bxslider_views_slideshow_main views_slideshow_main">
                    <div id="views-slideshow-bxslider-1" class="views-slideshow-bxslider">
                      <ul id="views-slideshow-bxslider-images-1" class="bxslider-views-slideshow-main-frame bxslider">


                        <?php if( have_rows('partners_slider' ) ): ?>
                            <?php while ( have_rows('partners_slider', 7 ) ) : the_row(); ?>

                                    <li id="views_slideshow_cycle_div_1_0" class="bxslider-views-slideshow-main-frame-row">
                                      <div class="views-field views-field-field-image">
                                        <div class="field-content">

                                          <a href="<?php the_sub_field('link'); ?>">
                                            <?php $image = get_sub_field('image');
                                            if( !empty($image) ): ?>
                                              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                            <?php endif; ?>
                                          </a>

                                        </div>
                                      </div>
                                    </li>
                              <?php  endwhile; ?>
                          <?php endif; ?>



                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section><!-- /.block -->

        <section id="block-block-6" class="block block-block">
            <div class="content">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <?php edit_post_link(); ?>
                <?php the_content(); ?>


            <?php endwhile; else: // If 404 page error ?>
                <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
            <?php endif; ?>

          </div>
        </section><!-- /.block -->
      </div><!-- /.region -->
    </div>
  </section><!-- /#main -->
  <div id="full-area">
    <div class="region region-full-area">
      <section id="block-webform-client-block-10" class="block block-webform">
        <div class="content">
          <form class="webform-client-form webform-client-form-10" enctype="multipart/form-data" action="http://bsc.global/" method="post" id="webform-client-form-10" accept-charset="UTF-8">
            <div>
              <div class="form-item webform-component webform-component-markup webform-component--question">
                <div class="call-questions">Остались вопросы?</div>
              </div>
              <div class="call-name form-item webform-component webform-component-textfield webform-component--name">
                <label class="element-invisible" for="edit-submitted-name">Ваше имя <span class="form-required" title="Это поле обязательно для заполнения.">*</span></label>
                <input placeholder="Ваше имя" type="text" id="edit-submitted-name" name="submitted[name]" value="" size="60" maxlength="128" class="form-text required">
              </div>
              <div class="call-phone form-item webform-component webform-component-textfield webform-component--phone">
                <label class="element-invisible" for="edit-submitted-phone">Ваш телефон <span class="form-required" title="Это поле обязательно для заполнения.">*</span></label>
                <input placeholder="Ваш телефон" type="text" id="edit-submitted-phone" name="submitted[phone]" value="" size="60" maxlength="128" class="form-text required">
              </div>
              <input type="hidden" name="details[sid]">
              <input type="hidden" name="details[page_num]" value="1">
              <input type="hidden" name="details[page_count]" value="1">
              <input type="hidden" name="details[finished]" value="0">
              <input type="hidden" name="form_build_id" value="form-UR3WSGHoiku5G945q3ReJBUPN1ej8a6zUOrFeJl3g8k">
              <input type="hidden" name="form_id" value="webform_client_form_10">
              <div class="captcha">
                <input type="hidden" name="captcha_sid" value="1335453">
                <input type="hidden" name="captcha_token" value="80b82e26edef6e6392bf4a5d3535f474">
                <div class="form-item form-type-textfield form-item-captcha-response">
                  <label for="edit-captcha-response">Какой код на картинке? <span class="form-required" title="Это поле обязательно для заполнения.">*</span></label>
                  <span class="field-prefix"><img typeof="foaf:Image" src="<?php echo get_template_directory_uri(); ?>/img/image_captcha" width="144" height="48" alt="CAPTCHA на основе изображений" title="CAPTCHA на основе изображений"></span>
                  <input type="text" id="edit-captcha-response" name="captcha_response" value="" size="15" maxlength="128" class="form-text required">
                  <div class="description">Введите символы, которые показаны на картинке.</div>
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" id="edit-submit" name="op" value="Заказать звонок" class="form-submit">
              </div>
            </div>
          </form>
        </div>
      </section>
      <!-- /.block -->
    </div>
    <!-- /.region -->
  </div>

<?php get_footer(); ?>

