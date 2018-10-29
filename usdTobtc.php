<?php
function  usdTobtc($usd){
  $url="https://api.bitfinex.com/v1/ticker/btcusd";
  $json=json_decode(file_get_contents($url), true);
  $btc_conversion=1/json("last_price");
  $price=$btc_conversion*$usd;
  echo $price;
  }
  ?>
  
  
