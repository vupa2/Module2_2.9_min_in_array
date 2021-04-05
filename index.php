<?php
function findMinNum($arr)
{
  $min = $arr[0];
  for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] < $arr[0]) $min = $arr[$i];
  }
  return $min;
}

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
  $str = str_replace(' ', '', $_POST["input"]);
  $arr = explode(",", $str);
  $result = findMinNum($arr);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>[*Bài tập] Tìm giá trị nhỏ nhất trong mảng</title>
</head>

<body>
  <h1>[*Bài tập] Tìm giá trị nhỏ nhất trong mảng</h1>

  <form action="" method="POST">
    <input type="text" name="input" id="input">
    <label for="input">Nhập mảng ngăn cách bẳng dấu ,</label>
    <br>
    <br>
    <input type="submit" value="Submit">
  </form>

  <?php if (isset($result)) : ?>
    <h4>Số nhỏ nhất là <?= $result ?></h4>
  <?php endif; ?>
</body>

</html>
