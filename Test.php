<?php
  $num = rand(0, 2);
  if ($num == 0) {
    echo "今日の運勢は大吉です。";
  } else if ($num == 1) {
    echo "今日の運勢は吉です。";
  } else {
    echo "今日の運勢は凶です。";
  }
?>