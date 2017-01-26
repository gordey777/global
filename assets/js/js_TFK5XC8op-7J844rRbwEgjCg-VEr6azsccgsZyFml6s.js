var Drupal = Drupal || {};

(function($, Drupal){
    "use strict";

  Drupal.behaviors.framework = {
        attach: function(context) {
            $('.tooltip').tooltip();

            // страница партнерство
            if($('.tabs-partnership').length) {
              $('.tabs-content > div').hide();
              $('.tabs-content > div:first').show();

              $('.tabs-partnership > div').click(function() {
                $('.tabs-partnership > div').removeClass('active');
                $(this).addClass('active');
                $('.tabs-content > div').hide();
                $('.tabs-content > div').eq($(this).index()).show();
              });

              var hash = window.location.hash;
              if(hash.length) {
                $(hash).click();
              }
            }

            //главная страница
            if($('.node-type-main-page').length) {
                $('#block-views-services-block-block .views-row').click(function() {
                    var url = $(this).find('a').attr('href');
                    if(url != undefined) {
                        document.location.href = url;
                    }
                });

                var count = $('.field-slider-wrap .field-item').length;
                var i = 0;
                $('.field-slider-wrap .field-item .quote').hide();
                $('.field-slider-wrap .field-item:first .quote').show();

                var slider = function() {
                    var j = i;
                    $('.field-slider-wrap .field-item').eq(j).find('.quote').slideUp();
                    $('.field-slider-wrap .field-item').eq(i++).animate({'opacity': 0} , 1000);

                    if(i == count) {
                        i = 0;
                    }

                    $('.field-slider-wrap .field-item').eq(i).animate({'opacity': 1} , 500);
                    $('.field-slider-wrap .field-item').eq(i).find('.quote').slideDown();
                }

                setInterval(slider, 5000);

                setInterval(function() {
                    $('.node-type-main-page .sale-text span').toggleClass('active');
                }, 500)
            }

            //фирмы
            if($('.view-firms').length) {
                $('.view-filters').after($('.view-header'));

                $('.view-firms').ajaxComplete(function(event, xhr, settings) {
                    $('.active-choise-option').text($('input[name=field_type_tid]:checked').parent().find('label').text());
                });

                var per_page = $('.views-widget-per-page').clone(true);
                $('.form-select', per_page).change(function() {
                    $('#edit-items-per-page').val($(".form-select option:selected", per_page).val()).change();
                });
                $('.view-firms > .item-list > .pager').once(function() {
                    $(this).before(per_page.show());
                });

                $('.unflag-action').closest('tr').addClass('favorite-row');

                $(document)
                    .off('click', '.flag-action')
                    .on('click','.flag-action',function() {
                        $('.fav span').text(parseInt($('.fav span').text()) + 1);
                        $(this).closest('tr').addClass('favorite-row');
                    });

                $(document)
                    .off('click', '.unflag-action')
                    .on('click','.unflag-action',function() {
                        $('.fav span').text(parseInt($('.fav span').text()) - 1);
                        $(this).closest('tr').removeClass('favorite-row');
                    });

                Drupal.behaviors.framework.niceRadio();
            }

            if($('.view-catalog-ur-address').length) {
              var per_page = $('.views-widget-per-page').clone(true);
              $('.form-select', per_page).change(function() {
                $('#edit-items-per-page').val($(".form-select option:selected", per_page).val()).change();
              });
              $('.view-catalog-ur-address > .item-list > .pager').once(function() {
                $(this).before(per_page.show());
              });

              $('#catalog-ur-address').prepend($('.view-catalog-ur-address'));
            }

            if($('.hidden-body').length) {
                $('.under-content').after($('.hidden-body').show());
            }

            if($('#block-email-subscribe-email-subs-subscribe-block').length) {
                $('#block-email-subscribe-email-subs-subscribe-block #edit-submit').after($('.form-info'));
            }



            //TENDER
            if($('.field-name-field-list-service').length) {
                $('.field-name-field-list-service').append('<div class="tender-content-body"></div>');

                var lengthList = $('.field-name-field-list-service > .field-items > .field-item').length;
                var services = null;
                (function() {
                    var j = 0;
                    services = setInterval(function() {
                    Drupal.behaviors.framework.serviceList( $('.field-name-field-list-service > .field-items > .field-item:eq(' + j + ') .field-collection-view'));
                    j++;
                    if(j == lengthList) {
                        j = 0;
                    }
                }, 2000);})();

                $('.field-name-field-list-service .field-items .field-item .field-collection-view').click(function() {
                    Drupal.behaviors.framework.serviceList($(this));
                    clearInterval(services);
                });
            }

            if($('.view-catalog-ur-address').length) {
                $(".view-catalog-ur-address .views-field-title > a").magnificPopup({
                    type:"inline",
                    removalDelay: 300,
                    mainClass: 'mfp-fade',
                    midClick: true
                });
            }

            $('.link-dop-uslugi').closest('tr').nextAll().toggle();
            $('.link-dop-uslugi').click(function() {
              $(this).closest('tr').nextAll().toggle();

              return false;
            });

            //PARTNER MODULE
            if($('#webform-client-form-425').length) {
                $('.webform-component--partner input').val(window.top.location.host);
            }

            //профайл юзера
            if($('.page-user .profile').length) {
              $('.page-user .profile textarea').click(function() {
                $('.page-user .profile textarea').select();
              });
            }

            if ($('.accordion-area').length) {
              setTimeout(Drupal.behaviors.framework.accordion(), 500);
            }

            //страница контактов
            if($('.maps-container').length){
              $('.maps-container').click(function () {
                $('.maps-container iframe').css("pointer-events", "auto");
              });
            }

        },

        niceRadio: function() {
            if(!$('.nice-radio').length) {
                var div = $('<div>', {class: 'nice-radio'});
                $('.view-filters input[type=radio]').before(div);
                $('input[name=field_type_tid]:checked').parent().find('.nice-radio, label').addClass('active');
            }
        },

        serviceList: function(elem) {
            var offset_y_parent = $('.field-name-field-list-service > .field-items').offset().top;
            var offset_top = elem.offset().top - offset_y_parent;
            $('.field-name-field-list-service .field-items .field-item .field-collection-view').removeClass('active');
            elem.addClass('active');
            var text = elem.find('.field-name-field-desc .field-item').html();
            $('.tender-content-body').css('margin-top', offset_top).html(text);
        },
        accordion: function () {
          $('.accordion-area > .accordion-body').hide();
          $('.accordion-area > .accordion-title').click(function () {
            $(this).toggleClass('active').next().slideToggle('slow');
            return false;
          }).next().hide();
        }

    };

  // Set with to tabs.
  Drupal.behaviors.ParagraphTabs = {
    attach: function (context) {
      if($('.quicktabs-wrapper', context).length > 0) {
        var tabs = $('.quicktabs-wrapper .quicktabs-tabs', context);
        var counts_li = $('li', tabs).length;
        var width = tabs.width();
        console.log(width);
        $('a', tabs).width(width / counts_li - 36);
      }
    }
  };

  // Set with to tabs.
  Drupal.behaviors.VerticalTabs = {
    attach: function (context) {
      if($('.vertical-tabs', context).length > 0) {
        $('.vertical-tabs-title > div:first, .vertical-tabs-body > div:first', context).addClass('active');
        $('.vertical-tabs-title > div', context).click(function() {
          $('.vertical-tabs-title > div, .vertical-tabs-body > div', context).removeClass('active');
          $(this).addClass('active');
          $('.vertical-tabs-body > div', context).eq($(this).index()).addClass('active');
        });
      }
    }
  };

  // Show and hide popup login.
  Drupal.behaviors.mblPopupLogin = {
    attach: function (context) {
      // Show login popup.
      $('.login-popup-link', context).bind('click', function () {
        $('#login-popup').show();
        return false;
      });

      // Hide login popup.
      $('.login-popup-btn-close', context).bind('click', function () {
        var $popup = $('#login-popup', context);
        $popup.find('.messages').remove();
        $popup.find('input[type=text], input[type=email], textarea').val('');
        //$('#webform-client-form-6197')[0].reset();
        $popup.hide();

        return false;
      });
    }
  };

  // Yandex Goal.
  Drupal.ajax.prototype.commands.yandex_goal = function(ajax, response, status) {
    yaCounter35055460.reachGoal(response.target);
  }


})(jQuery, Drupal);;
