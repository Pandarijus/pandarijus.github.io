
/*=============================================================
    Authour URI: www.binarytheme.com
    License: Commons Attribution 3.0

    http://creativecommons.org/licenses/by/3.0/

    100% To use For Personal And Commercial Use.
    IN EXCHANGE JUST GIVE US CREDITS AND TELL YOUR FRIENDS ABOUT US
   
    ========================================================  */


(function ($) {
    "use strict";
    var mainApp = {

        main_fun: function () {
            /*====================================
             CUSTOM LINKS SCROLLING FUNCTION 
            ======================================*/

            $('a[href*=#]').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
               && location.hostname == this.hostname) {
                    var $target = $(this.hash);
                    $target = $target.length && $target
                    || $('[name=' + this.hash.slice(1) + ']');
                    if ($target.length) {
                        var targetOffset = $target.offset().top;
                        $('html,body')
                        .animate({ scrollTop: targetOffset }, 800); //set scroll speed here
                        return false;
                    }
                }
            });
            /*====================================
            VAGAS SLIDESHOW SCRIPTS
            ======================================*/
            $(function () {
                $.vegas('slideshow', {
                    backgrounds: [
                      { src: 'assets/img/1.jpg', fade: 1000, delay: 9000 }, //CHANGE THESE IMAGES WITH YOUR ORIGINAL IMAGES
                      { src: 'assets/img/2.png', fade: 1000, delay: 9000 }, //THESE IMAGES ARE FOR DEMO PURPOSE ONLY YOU, CAN NOT USE THEM WITHOUT AUTHORS PERMISSION
                       { src: 'assets/img/3.jpg', fade: 1000, delay: 9000 }, 
                     { src: 'assets/img/4.png', fade: 1000, delay: 9000 },
                     { src: 'assets/img/5.png', fade: 1000, delay: 9000 },
                     { src: 'assets/img/6.png', fade: 1000, delay: 9000 },
                     { src: 'assets/img/7.png', fade: 1000, delay: 9000 },
                     { src: 'assets/img/8.png', fade: 1000, delay: 9000 },
                     { src: 'assets/img/9.png', fade: 1000, delay: 9000 },
                     { src: 'assets/img/10.png', fade: 1000, delay: 9000 },
                     { src: 'assets/img/11.png', fade: 1000, delay: 9000 },
                     { src: 'assets/img/12.png', fade: 1000, delay: 9000 },
                     { src: 'assets/img/13.png', fade: 1000, delay: 9000 },
                     { src: 'assets/img/14.png', fade: 1000, delay: 9000 },
                     { src: 'assets/img/15.png', fade: 1000, delay: 9000 },
                    ]
                })('overlay', {
                    /** SLIDESHOW OVERLAY IMAGE **/
                    src: 'assets/plugins/vegas/overlays/01.png' // THERE ARE TOTAL 01 TO 15 .png IMAGES AT THE PATH GIVEN, WHICH YOU CAN USE HERE
                });

            });

       

            /*====================================
               SIDE MENU SCRIPTS BELOW 
           ======================================*/
            var menuLeft = document.getElementById('cbp-spmenu-s1'),
               menuRight = document.getElementById('cbp-spmenu-s2'),
           showLeftPush = document.getElementById('showLeftPush'),
           showRightPush = document.getElementById('showRightPush'),
           body = document.body;

            showLeftPush.onclick = function () {
                classie.toggle(this, 'active');
                classie.toggle(body, 'cbp-spmenu-push-toright');
                classie.toggle(menuLeft, 'cbp-spmenu-open');
                disableOther('showLeftPush');
            };
            showRightPush.onclick = function () {
                classie.toggle(this, 'active');
                classie.toggle(body, 'cbp-spmenu-push-toleft');
                classie.toggle(menuRight, 'cbp-spmenu-open');
                disableOther('showRightPush');
            };
            function disableOther(button) {

                if (button !== 'showLeftPush') {
                    classie.toggle(showLeftPush, 'disabled');
                }
                if (button !== 'showRightPush') {
                    classie.toggle(showRightPush, 'disabled');
                }
            }


            /*====================================
               WRITE YOUR SCRIPTS BELOW 
           ======================================*/


        },

        initialization: function () {
            mainApp.main_fun();

        }

    }
    // Initializing ///

    $(document).ready(function () {
        mainApp.main_fun();
    });

}(jQuery));



