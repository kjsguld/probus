<?php
/**
 * @author Kristian Guld
 */
class Curl
{
  public $url;

  private $curl;

  public $response;

  public $cacheFile;

  private $cachedResult = FALSE;

  function __construct(string $url, string $cacheFile, array $headerOptions, int $refreshRate)
  {
    $this->url = $url;
    $this->cacheFile = $cacheFile;

    if (file_exists($this->cacheFile) && (filemtime($this->cacheFile) > (time() - 60 * $refreshRate ))) {
       // Cache file is less than one minute old.
      $this->cachedResult = TRUE;
    } else {
       // Our cache is out-of-date, so load the data from our remote server
      $this->curl = curl_init();
      curl_setopt($this->curl, CURLOPT_URL, $this->url);
      curl_setopt($this->curl, CURLOPT_HTTPHEADER, $headerOptions);
      curl_setopt($this->curl, CURLOPT_TIMEOUT, 30);
      curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, TRUE);
    }
  }

  // setUrlParameter is only run in this state when cache is refreshed
  public function setUrlParameter($parameter, $value)
  {
    if (!$this->curl) {
      return FALSE;
    }
    $pos = strpos($this->url, $parameter);
    if(!$pos){
      return FALSE;
    }
    $valPosStart = $pos + strlen($parameter);
    $valPosEnd = strpos($this->url, '&', $valPosStart);

    $stringBefore = substr($this->url, 0, $valPosStart);
    $stringAfter = substr($this->url, $valPosEnd);

    $this->url = $stringBefore . $value . $stringAfter;
    curl_setopt($this->curl, CURLOPT_URL, $this->url);
    return $this->url;
  }

  public function cacheResults($result)
  {
    $file = file_put_contents($this->cacheFile, json_encode($result));
    return $this->getCache($this->cacheFile);
  }

  public function getCache($filename)
  {
    $file = json_decode(file_get_contents($filename), true);
    return $file;
  }

  public function execute()
  {
    //$this->cachedResult = TRUE;
    if($this->cachedResult){
      $this->response = $this->getCache($this->cacheFile);
      // echo "Cached result";
      return $this->response;
    } else {
      $this->response = json_decode(curl_exec($this->curl), true);
      curl_close($this->curl);
      $this->cacheResults($this->response);
      // echo "New result";
      return $this->response;
    }
  }
}
