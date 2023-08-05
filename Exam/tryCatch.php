<?php
$a = 1;
$b = 0;
try {
    $ans = $a / $b;
    echo $ans;
} catch (Exception $e) {
    echo "divide by zero";
    $e->getMessage();
}
