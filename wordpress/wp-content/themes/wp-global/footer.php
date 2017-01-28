
  <footer id="footer" role="contentinfo" class="clearfix">
    <div class="footer-first">
      <div class="region region-footer-first">
        <?php wpeFootNav(); ?>
      </div>
      <!-- /.region -->
    </div>
    <div class="footer-second">
      <div class="region region-footer-second">
        <section id="block-menu-menu-footer-menu" class="block block-menu">
          <div class="content">
            <ul class="menu">
              <li class="first last leaf"><a href="http://bsc.global/sitemap.html" title="">Карта сайта</a></li>
            </ul>
          </div>
        </section>
        <!-- /.block -->
        <section id="block-search-form" class="block block-search">
          <div class="content">
            <form action="<?php echo home_url(); ?>" role="search" method="post" id="search-block-form" accept-charset="UTF-8">
              <div>
                <div class="container-inline">
                  <div class="podz2 element-invisible">Форма поиска</div>



                  <div class="form-item form-type-textfield form-item-search-block-form">
                    <label class="element-invisible" for="edit-search-block-form--2">Поиск </label>
                    <input title="Введите ключевые слова для поиска." type="search" id="edit-search-block-form--2" name="s" value="" size="15" maxlength="128" class="form-text">
                  </div>
                  <div class="form-actions form-wrapper" id="edit-actions--2">
                    <input type="submit" id="edit-submit--2" name="op" value="Поиск" class="form-submit">
                  </div>
                  <input type="hidden" name="form_build_id" value="form-MPWbW_ljEsqtY_Vs_GwYVUbXeuixfwiCIjawjrGsN08">
                  <input type="hidden" name="form_id" value="search_block_form">
                </div>
              </div>
            </form>
          </div>
        </section>
        <!-- /.block -->
      </div>
      <!-- /.region -->
    </div>
    <div class="footer-third">
      <div class="region region-footer-third">
        <section id="block-block-4" class="block block-block">
          <div class="content">
            <div>© Copyright 2010 - 2016 ООО «ЦЕНТР ПОДДЕРЖКИ БИЗНЕСА»</div>
          </div>
        </section>
        <!-- /.block -->
        <section id="block-block-5" class="block block-block">
          <div class="content">
            <div class="social-link">
              <?php if( have_rows('social' ) ): ?>
                <?php while ( have_rows('social', 7 ) ) : the_row(); ?>

                      <a href="<?php the_sub_field('link'); ?>">
                        <?php $image = get_sub_field('image');
                        if( !empty($image) ): ?>
                          <img src="<?php echo $image['url']; ?>" style="height:40px; width:40px" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                      </a>

                  <?php  endwhile; ?>
              <?php endif; ?>

            </div>
          </div>
        </section>
        <!-- /.block -->
      </div>
      <!-- /.region -->
    </div>

  </footer>
  <!-- /#footer -->
  <a href="http://bsc.global/user" class="user-btn"></a>
  <div class="wrapper">

  </div>
  <?php wp_footer(); ?>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/js_IkgOrrVZK1UTp2HktvFi5vo1g7b25Muyr5GoySikuic.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/js_cB943J-eVVlnUqhVab2leZYpt4f51qgZ7Qpen_yuE4M.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/js_NpX2cwCeepkWZZ194B6-ViyVBHleaYLOx5R9EWBOMRU.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/js_cmTVmwHROt4_M9Lz2L8VboCUKoFN7nExZqRIGIae_YU.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/js_TFK5XC8op-7J844rRbwEgjCg-VEr6azsccgsZyFml6s.js"></script>
<script type="text/javascript">
  <!--//--><![CDATA[//><!--
  jQuery.extend(Drupal.settings, {
    "basePath": "\/",
    "pathPrefix": "",
    "ajaxPageState": {
      "theme": "framework",
      "theme_token": "z_ouHkokpmM1gfstxgSyKtGtxER_DLTclizWtF7RyJo",
      "jquery_version": "1.8",
      "js": {
        "https:\/\/ajax.googleapis.com\/ajax\/libs\/jquery\/1.8.2\/jquery.min.js": 1,
        "0": 1,
        "misc\/jquery.once.js": 1,
        "misc\/drupal.js": 1,
        "https:\/\/ajax.googleapis.com\/ajax\/libs\/jqueryui\/1.10.2\/jquery-ui.min.js": 1,
        "1": 1,
        "sites\/all\/modules\/jquery_update\/replace\/ui\/external\/jquery.cookie.js": 1,
        "sites\/all\/modules\/jquery_update\/replace\/misc\/jquery.form.min.js": 1,
        "sites\/all\/modules\/views_slideshow\/js\/views_slideshow.js": 1,
        "sites\/all\/libraries\/bxslider\/jquery.bxslider.min.js": 1,
        "misc\/ajax.js": 1,
        "sites\/all\/modules\/jquery_update\/js\/jquery_update.js": 1,
        "sites\/all\/modules\/extlink\/extlink.js": 1,
        "public:\/\/languages\/ru_-MAjCC1M1IKhJRrpQutseIQIJc6oRdvWOFuacXspWFg.js": 1,
        "misc\/progress.js": 1,
        "sites\/all\/modules\/ctools\/js\/modal.js": 1,
        "sites\/all\/modules\/modal_forms\/js\/modal_forms_popup.js": 1,
        "sites\/all\/modules\/bxslider_views_slideshow\/bxslider_views_slideshow.js": 1,
        "sites\/all\/modules\/captcha\/captcha.js": 1,
        "sites\/all\/modules\/webform\/js\/webform.js": 1,
        "sites\/all\/themes\/framework\/js\/script.js": 1
      },
      "css": {
        "modules\/system\/system.base.css": 1,
        "modules\/system\/system.menus.css": 1,
        "modules\/system\/system.messages.css": 1,
        "modules\/system\/system.theme.css": 1,
        "sites\/all\/modules\/views_slideshow\/views_slideshow.css": 1,
        "misc\/ui\/jquery.ui.core.css": 1,
        "misc\/ui\/jquery.ui.theme.css": 1,
        "misc\/ui\/jquery.ui.tooltip.css": 1,
        "sites\/all\/modules\/date\/date_api\/date.css": 1,
        "modules\/field\/theme\/field.css": 1,
        "modules\/node\/node.css": 1,
        "modules\/search\/search.css": 1,
        "modules\/user\/user.css": 1,
        "sites\/all\/modules\/youtube\/css\/youtube.css": 1,
        "sites\/all\/modules\/extlink\/extlink.css": 1,
        "sites\/all\/modules\/views\/css\/views.css": 1,
        "sites\/all\/modules\/ckeditor\/css\/ckeditor.css": 1,
        "sites\/all\/modules\/ctools\/css\/ctools.css": 1,
        "sites\/all\/modules\/ctools\/css\/modal.css": 1,
        "sites\/all\/modules\/modal_forms\/css\/modal_forms_popup.css": 1,
        "0": 1,
        "1": 1,
        "2": 1,
        "sites\/all\/libraries\/bxslider\/jquery.bxslider.css": 1,
        "sites\/all\/modules\/webform\/css\/webform.css": 1,
        "sites\/all\/themes\/framework\/css\/style.css": 1
      }
    },
    "CToolsModal": {
      "loadingText": "Loading...",
      "closeText": "Close Window",
      "closeImage": "\u003Cimg typeof=\u0022foaf:Image\u0022 src=\u0022http:\/\/bsc.global\/sites\/all\/modules\/ctools\/images\/icon-close-window.png\u0022 alt=\u0022Close window\u0022 title=\u0022Close window\u0022 \/\u003E",
      "throbber": "\u003Cimg typeof=\u0022foaf:Image\u0022 src=\u0022http:\/\/bsc.global\/sites\/all\/modules\/ctools\/images\/throbber.gif\u0022 alt=\u0022\u0417\u0430\u0433\u0440\u0443\u0437\u043a\u0430\u0022 title=\u0022Loading...\u0022 \/\u003E"
    },
    "modal-popup-small": {
      "modalSize": {
        "type": "fixed",
        "width": 300,
        "height": 430
      },
      "modalOptions": {
        "opacity": 0.85,
        "background": "#000"
      },
      "animation": "fadeIn",
      "modalTheme": "ModalFormsPopup",
      "throbber": "\u003Cimg typeof=\u0022foaf:Image\u0022 src=\u0022http:\/\/bsc.global\/sites\/all\/modules\/modal_forms\/images\/loading_animation.gif\u0022 alt=\u0022Loading...\u0022 title=\u0022\u0417\u0430\u0433\u0440\u0443\u0437\u043a\u0430\u0022 \/\u003E",
      "closeText": "\u0417\u0430\u043a\u0440\u044b\u0442\u044c"
    },
    "modal-popup-medium": {
      "modalSize": {
        "type": "fixed",
        "width": 550,
        "height": 450
      },
      "modalOptions": {
        "opacity": 0.85,
        "background": "#000"
      },
      "animation": "fadeIn",
      "modalTheme": "ModalFormsPopup",
      "throbber": "\u003Cimg typeof=\u0022foaf:Image\u0022 src=\u0022http:\/\/bsc.global\/sites\/all\/modules\/modal_forms\/images\/loading_animation.gif\u0022 alt=\u0022Loading...\u0022 title=\u0022\u0417\u0430\u0433\u0440\u0443\u0437\u043a\u0430\u0022 \/\u003E",
      "closeText": "\u0417\u0430\u043a\u0440\u044b\u0442\u044c"
    },
    "modal-popup-large": {
      "modalSize": {
        "type": "scale",
        "width": 0.8,
        "height": 0.8
      },
      "modalOptions": {
        "opacity": 0.85,
        "background": "#000"
      },
      "animation": "fadeIn",
      "modalTheme": "ModalFormsPopup",
      "throbber": "\u003Cimg typeof=\u0022foaf:Image\u0022 src=\u0022http:\/\/bsc.global\/sites\/all\/modules\/modal_forms\/images\/loading_animation.gif\u0022 alt=\u0022Loading...\u0022 title=\u0022\u0417\u0430\u0433\u0440\u0443\u0437\u043a\u0430\u0022 \/\u003E",
      "closeText": "\u0417\u0430\u043a\u0440\u044b\u0442\u044c"
    },
    "viewsSlideshow": {
      "partners-block": {
        "methods": {
          "goToSlide": ["viewsSlideshowPager", "viewsSlideshowSlideCounter", "bxsliderViewsSlideshow"],
          "nextSlide": ["viewsSlideshowPager", "viewsSlideshowSlideCounter", "bxsliderViewsSlideshow"],
          "pause": ["viewsSlideshowControls"],
          "play": ["viewsSlideshowControls"],
          "previousSlide": ["viewsSlideshowPager", "viewsSlideshowSlideCounter", "bxsliderViewsSlideshow"],
          "transitionBegin": ["viewsSlideshowPager", "viewsSlideshowSlideCounter"],
          "transitionEnd": []
        },
        "paused": 0
      }
    },
    "viewsSlideshowBxslider": {
      "views_slideshow_bxslider_images_1": {
        "general": {
          "mode": "horizontal",
          "speed": 500,
          "slideMargin": 0,
          "startSlide": 0,
          "randomStart": 0,
          "infiniteLoop": 1,
          "hideControlOnEnd": 0,
          "captions": 0,
          "ticker": 0,
          "tickerHover": 0,
          "adaptiveHeight": 0,
          "adaptiveHeightSpeed": 500,
          "video": 0,
          "touchEnabled": 1,
          "preloadImages": "all",
          "disable_standard_css": 0,
          "useCSS": 1,
          "align_image": "left",
          "align_caption": "left",
          "swipeThreshold": 50,
          "oneToOneTouch": 1,
          "preventDefaultSwipeX": 1,
          "preventDefaultSwipeY": 0,
          "color_caption": "80, 80, 80, 0.75"
        },
        "controlsfieldset": {
          "controls": 1,
          "nextText": "",
          "prevText": "",
          "startText": "",
          "stopText": "",
          "autoControls": 0,
          "autoControlsCombine": 0
        },
        "pagerfieldset": {
          "pager": 0,
          "pagerType": "full",
          "pagerShortSeparator": " \/ "
        },
        "autofieldset": {
          "pause": 4000,
          "autoStart": 0,
          "auto": 0,
          "autoHover": 0,
          "autoDelay": 0,
          "autoDirection": "next"
        },
        "carousel": {
          "minSlides": 1,
          "maxSlides": 5,
          "moveSlides": 1,
          "slideWidth": "260px"
        },
        "callback": [],
        "fixes": {
          "height_does_not_dyn_change": 0
        }
      }
    },
    "ajax": {
      "edit-submit": {
        "callback": "webform_client_form_ajax_callback",
        "event": "mousedown",
        "keypress": true,
        "prevent": "click",
        "url": "\/system\/ajax",
        "submit": {
          "_triggering_element_name": "op",
          "_triggering_element_value": "\u0417\u0430\u043a\u0430\u0437\u0430\u0442\u044c \u0437\u0432\u043e\u043d\u043e\u043a"
        }
      }
    },
    "extlink": {
      "extTarget": "_blank",
      "extClass": 0,
      "extLabel": "(\u0432\u043d\u0435\u0448\u043d\u044f\u044f \u0441\u0441\u044b\u043b\u043a\u0430)",
      "extImgClass": 0,
      "extSubdomains": 1,
      "extExclude": "",
      "extInclude": "",
      "extCssExclude": "",
      "extCssExplicit": "",
      "extAlert": 0,
      "extAlertText": "This link will take you to an external web site.",
      "mailtoClass": 0,
      "mailtoLabel": "(\u0441\u0441\u044b\u043b\u043a\u0430 \u0434\u043b\u044f \u043e\u0442\u043f\u0440\u0430\u0432\u043a\u0438 email)"
    }
  });
  //--><!]]>
  </script>

</body>
</html>
