jQuery(document).ready(function(){
  jQuery.ajax({
  type: 'GET',
  url: 'https://api.linkedin.com/v1/people/~?oauth2_access_token=AQUKK5y-O_UyQOWYXpJ2R45i6c02fJgratdedFQnK-TVlxcCYBPyxcD9mhPukYMOGu0o3AyGDOM-YxzYKuG9YqXcc9pnX-is1pg24_vsZioK1szVsfDkTihSuWIChlwky9AoEycrJ86iEhvM_XtqkRj-ZOG-S2_iknaan7-nSZ-EC5SoLHE&format=json',
  headers: {
    "Host":"api.linkedin.com",
    "X-Target-URI":"https://api.linkedin.com",
    "Connection":"Keep-Alive",
    "Accept":"application/json"
  },
  contentType: "application/json",
  dataType: 'jsonp',
  success: function(data) {
    console.log('####');
    console.log(data);
    console.log('Count: ' + data.count);
  },
  error: function(response) {
    console.log(response);
    console.log('Failed to phrase!');
  },
  // complete: function(res)
  // {
  //   console.log(res);
  //   console.log(res.getAllResponseHeaders());
  // }
  });

});
