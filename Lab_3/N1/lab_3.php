<?php

echo '#1, A',"\n";
$str = "ahb acb aeb aeeb adcb axeb";
$f = preg_match_all('/a..b/', $str, $matches);

echo $f,"\n";
for($i = 0; $i<$f;$i++){
    echo $matches[0][$i];
    echo "\n";
}
###
echo '#1, B',"\n";

$str = "1a2b3c";
$regexp = ['/1/', '/2/', '/3/'];
for($i = 0; $i < sizeof($regexp);$i++) {
    $fu = preg_replace($regexp[$i], pow($i+1, 3), $str);
    $str = $fu;
}
echo $fu, "\n";

### ИЛИ
$str = "1a2b3c";
$regexp = ['/1/', '/2/', '/3/'];
$replacmets = [1, 8 ,27];
$fu = preg_replace($regexp, $replacmets , $str);
echo $fu, "\n";
###








