(function($){wp.customize('rectangulum_main_color',function(value){value.bind(function(to){$('.site-header, .sub-menu,.tagline,.sticky-posts,.site-footer,button, .btn').css('background',to)})});wp.customize('rectangulum_main_color',function(value){value.bind(function(to){$('body, .single .content-right .entry-header .entry-format, .archive .entry-title a').css('color',to)})});wp.customize('rectangulum_additional_color',function(value){value.bind(function(to){$('.navigation-main ul ul,.tagline button,.tagline .btn').css('background',to)})});wp.customize('rectangulum_additional_color',function(value){value.bind(function(to){$('a, .sticky-post-content .entry-title a,.sticky-post-content-2 .entry-title a').css('color',to)})});wp.customize('rectangulum_menu_color',function(value){value.bind(function(to){$('.site-header .site-title a,.site-description, .site-title, .navigation-main ul li a').css('color',to)})});wp.customize('rectangulum_secondary_color',function(value){value.bind(function(to){$('.top-wrapper').css('background',to)})});wp.customize('rectangulum_secondary_color',function(value){value.bind(function(to){$('.navigation-main ul li:hover > a,.navigation-main ul li.current_page_item > a').css('color',to)})});wp.customize('home_tagline',function(value){value.bind(function(to){$('#home-tagline').html(to)})});wp.customize('home_tagline_bgcolor',function(value){value.bind(function(to){$('#home-tagline').css('background',to)})});wp.customize('rectangulum_footer_copyright_text',function(value){value.bind(function(to){$('#copyright-message').text(to)})})})(jQuery);