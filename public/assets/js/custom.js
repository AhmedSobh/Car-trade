/*
Author: http://webthemez.com
Note: Donate to remove backlink/credits in the footer(webthemez.com)--
Any help: webthemez@gmail.com
Licence: Creative Commons Attribution 3.0** - http://creativecommons.org/licenses/by/3.0/
*/
jQuery(document).ready(function ($) {

    //Set the carousel options
    $('#quote-carousel').carousel({
        pause: true,
        interval: 4000,
    });
    // fancybox
    $(".fancybox").fancybox();
    //isotope
    if ($('.isotopeWrapper').length) {
        var $container = $('.isotopeWrapper');
        var $resize = $('.isotopeWrapper').attr('id');
        // initialize isotope
        $container.isotope({
            itemSelector: '.isotopeItem',
            resizable: false, // disable normal resizing
            masonry: {
                columnWidth: $container.width() / $resize
            }
        });
        $("a[href='#top']").click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });
        $('.navbar-inverse').on('click', 'li a', function () {
            $('.navbar-inverse .in').addClass('collapse').removeClass('in').css('height', '1px');
        });
        $('#filter a').click(function () {
            $('#filter a').removeClass('current');
            $(this).addClass('current');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 1000,
                    easing: 'easeOutQuart',
                    queue: false
                }
            });
            return false;
        });
        $(window).smartresize(function () {
            $container.isotope({
                // update columnWidth to a percentage of container width
                masonry: {
                    columnWidth: $container.width() / $resize
                }
            });
        });
    }

    //fadout of notfication message
      $("#notfication").delay(7000).fadeOut(3000);

    //fadout of warning message
      // $("#warning").delay(80000).fadeOut(3000);


    // close the notfication message
    $('#close').click(function(){
      $('#notfication, #warning').hide();
    });

    //close icone change on hover notification
    $("#close").hover(function () {
          $(this).removeClass("fa-times-circle-o").addClass("fa-times-circle");
      }, function () {
          $(this).removeClass("fa-times-circle").addClass("fa-times-circle-o");
    });

    //delete button
    $('#delete').on('click',function(e) {
      // alert('started');
      e.preventDefault();
      // console.log("prevented");
      $('#delete-form').submit();
      // console.log("prevented");
    });
});
