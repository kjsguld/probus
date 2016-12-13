jQuery(document).ready(function(){

  /*
   * windowSize
   * call this function to get windowSize any time
   */
  function windowSize() {
    windowHeight = window.innerHeight ? window.innerHeight : $(window).height();
    windowWidth = window.innerWidth ? window.innerWidth : $(window).width();

  }

  // For example, get window size on window resize
  jQuery(window).resize(function() {
    windowSize();
    console.log('width is :', windowWidth, 'Height is :', windowHeight);
    if (windowWidth < 768) {
      console.log('width is under 768px !');
    }
  });

  // register click on any #link
  jQuery('a[href^="#"]').on('click', function(event) {
    // remove and then add .active
    jQuery("ul.nav li").click(function() {
      jQuery("ul.nav li").removeClass('active');
      jQuery(this).addClass('active');
    });
    // smooth scroll
    var target = jQuery(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        jQuery('html, body').stop().animate({
            scrollTop: target.offset().top-70
        }, 1000);
    }
  });
});
