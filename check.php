

<!DOCTYPE html>
<html lang="ja">
<head>
  <title>入力内容確認</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>入力内容確認</h1>

  <?php
  echo $_POST['nickname']."<br>";
  echo $_POST['email']."<br>";
  echo $_POST['content']."<br>";
   

  $nickname=$_POST['nickname'];
  $email=$_POST['email'];
  $content= $_POST['content'];
 // ニックネーム
  if ($nickname == '') {
    echo 'ニックネームが入力されていません。';
  } else {
    echo 'ようこそ' . $nickname .'様<br>';
  }
  // メールアドレス
  if ($email == '') {
    echo 'メールアドレスが入力されていません。';
  } else {
    echo 'メールアドレス：' . $email.'<br>';
  }
  // お問い合わせ内容
  if ($content == '') {
    echo 'お問い合わせ内容が入力されていません。';
  } else {
    echo 'お問い合わせ内容：' . $content.'<br>';
  }
  ?>
  <form method="post" action="thanks.php">
  <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
  <input type="hidden" name="email" value="<?php echo $email; ?>">
  <input type="hidden" name="content" value="<?php echo $content; ?>">

  <input type="button" onclick="history.back()" value="戻る">
  <?php if ($nickname != '' && $email != '' && $content != ''): ?>
    <input type="submit" value="OK">
  <?php endif; ?>
  </form>

  
</body>
</html>