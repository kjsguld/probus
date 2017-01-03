<!-- linkedIn  -->
<?php
error_reporting (E_ALL);
ini_set ('display_errors', 'on');

// own function that is used instead of get_template_directory_uri, to avoid HTTP wrapper problems, AND spl_autoload_register scope issues
function getTempPath()
{
  $siteURL = get_option('siteurl');
  $themeRoot = get_template_directory_uri();
  $pathLen = strlen($themeRoot) - strlen($siteURL);
  $templatePath = substr($themeRoot, -($pathLen-1));
  return $templatePath;
}

spl_autoload_register(function ($class_name) {
  $classPath = getTempPath();
  include  $classPath . '/classes/'. lcfirst($class_name) . '.php';
});

$host = 'api.linkedin.com';
// should match a admin off requested company
// $oauth2_access_token = 'AQUKK5y-O_UyQOWYXpJ2R45i6c02fJgratdedFQnK-TVlxcCYBPyxcD9mhPukYMOGu0o3AyGDOM-YxzYKuG9YqXcc9pnX-is1pg24_vsZioK1szVsfDkTihSuWIChlwky9AoEycrJ86iEhvM_XtqkRj-ZOG-S2_iknaan7-nSZ-EC5SoLHE';
$oauth2_access_token = 'AQVCx3M6kbxzYLQrG1uMf3ahIUVutiOgHUqVMCKpHTFqR9mijkmgW-dO_OEMdsYDsKavrO6cvdWRsjyCRXV5ci6CvtchwhHrxHCjRJZbgR0qfZtBJDPE_CxfdyupJvrA9qyqzen2vilSlTWsA8ngIrfbpaUyjleJ62VPoMiPwS0UR6YmjzQ';
$postCount = 10;
$postStart = 0;
// $companyId = 2414183;
$companyId = 2776718;

$url = 'https://' . $host . '/v1/companies/'. $companyId .'/updates?oauth2_access_token=' . $oauth2_access_token . '&count='.$postCount.'&start='.$postStart.'&format=json';
$cacheFile = getTempPath() . '/cache/cacheResults.json';
$headerOptions = array(
  'Host: '.$host,
  'X-Target-URI: https://'.$host,
  'Connection: Keep-Alive',
  'Content-Type: text/html'
);
$refreshRate = 1;

$feed = new Curl($url, $cacheFile, $headerOptions, $refreshRate);

$feed->setUrlParameter('start=', '0');
$feed->setUrlParameter('count=', '3');
$response = $feed->execute(); // this closes the script
?>
<div class="container-inverse">
  <div id="<?php echo $GLOBALS['sectionType']; ?>" class="container">
    <section id='page-<?php the_ID(); ?>' class="<?php echo $GLOBALS['sectionType']; ?>">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <div id="linkedinFeedContent" class="row">
        <?php foreach ($response['values'] as $value) : ?>
          <div class="col-xs-12 col-sm-4">
            <?php
            // time is given in ms by linkedin
            $time = $value['timestamp'] / 1000;
            ?>
            <p>d. <time datetime="<?php echo date('Y-m-d H:i', $time);?>"><?php echo date('Y.m.d H:i', $time);?></time></p>
            <?php
            if($value['updateContent']['companyStatusUpdate']['share']['content']['description']){
              $desc = $value['updateContent']['companyStatusUpdate']['share']['content']['description'];
              $strlen = 250;
              if (strlen($desc) > $strlen) {
                $desc = substr($desc, 0, $strlen). '...';
              }
              echo '<p>'.$desc.'</p>';
            }
            ?>
            <a href="<?php echo $value['updateContent']['companyStatusUpdate']['share']['content']['shortenedUrl']; ?>" target="_blank">Læs hele nyheden</a>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  </div>
</div>
