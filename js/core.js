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

});
