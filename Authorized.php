<?php
require_once __DIR__ . '/facebook-sdk/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '1769380070540366',
  'app_secret' => '170ee5f1117544a11aa0ab64bfd7d3b4',
  'default_graph_version' => 'v22.0',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; 
$loginUrl = $helper->getLoginUrl('YOUR_REDIRECT_URL', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
