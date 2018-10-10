<?php

require 'vendor/autoload.php';

header('Content-Type: text/plain; charset=utf-8');

echo 'calculateHomeWorkSum: ';
echo \calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;

echo '\Nfq\Akademija\Not_Typed\calculateHomeWorkSum: ';
echo \Nfq\Akademija\Not_Typed\calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;

echo '\Nfq\Akademija\Soft\calculateHomeWorkSum: ';
echo \Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;

echo '\Nfq\Akademija\Strict\calculateHomeWorkSum: ';
echo \Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;