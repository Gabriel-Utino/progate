<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
$totalprice = 0;
$maxName = '';
$maxAmount = 0;
foreach($menus as $menu) {
  echo $menu['name']."は".$menu['price']."円です";
  echo '<br>';
  if($menu['price'] > $maxAmount) {
    $maxAmount = $menu['price'];
    $maxName = $menu['name'];
  }
  $totalprice += $menu['price'];
}
echo "合計金額は".$totalprice."円です";
echo '<br>';
echo $maxName."が最高価格で".$maxAmount."円です";

?>