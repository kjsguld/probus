jQuery(document).ready(function(){
  jQuery.ajax({
  url: 'https://www.linkedin.com//v1/companies/2414183/updates?oauth2_access_token=AQUomg7fWQIEcybtifVxT_TemDGjFsgHKnVGhoSqU0zbn48int_3kAYrGG71YdmrV--p8Rt1DPzP54mk7yaImtIcZm6pweUbsDzoa8G-equ2laimWaEheojwkC2QZqv6i3_CA03n5jw_2O9uOjs3_CPHZJMbs6XT1IYaRJB_yPDWOEC4OV0&format=json',
  type: 'GET',
  contentType: "application/json",
  dataType: 'jsonp',
  success: function(data) {
    console.log('Count: ' + data.count);
  },
  error: function() {
    console.log('Failed!');
  },
});

});
