<?php

$url_name = "https://v6.exchangerate-api.com/v6/8aa0ca713a87af935d0a12ce/latest/USD";

  $ch_session = curl_init();

curl_setopt($ch_session, CURLOPT_RETURNTRANSFER, 1);

  curl_setopt($ch_session, CURLOPT_URL, $url);

  $result_url = curl_exec($ch_session);

  echo $result_url;

  ?>
