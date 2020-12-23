<?php
  echo htmlspecialchars ($_POST['name']);
?> さんの今日の運勢は

<?php
  $num = rand(0, 2);
  if ($num == 0) {
    echo "大吉です。";
  } else if ($num == 1) {
    echo "吉です。";
  } else {
    echo "凶です。";
  }
?>

<p>今日の運勢を投稿してみよう!!</p>
<form method="post" action="Test.php">
<input type="text" name="toukou" size="60">
<input type="submit" value="送信">
</form>
<hr>
<?php
$ichiran = file_get_contents('Test.txt');
if (@$_POST['toukou']) {
  $ichiran = htmlspecialchars($_POST['toukou']) . "<hr>$ichiran";
  file_put_contents('Test.txt', $ichiran);
}
echo $ichiran;
?>