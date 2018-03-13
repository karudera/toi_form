<?php
// １．データベースに接続する
$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

// ２．SQL文を実行する
$sql = 'SELECT * FROM `survey` ORDER BY `created` DESC';
$stmt = $dbh->prepare($sql);
$stmt->execute();

$survey_line =array();
while (1) {
	$rec = $stmt->fetch(PDO::FETCH_ASSOC);
	if ($rec == false) {
		break;
	}
    $survey_line[] = $rec;

}

// ３．データベースを切断する
$dbh = null;
?>

<?php
foreach ($survey_line as $one_toi) {
?>
<?php echo $one_toi["id"]; ?><br>
<?php echo $one_toi["nickname"]; ?><br>
<?php echo $one_toi["email"]; ?><br>
<?php echo $one_toi["content"]; ?><br>
<?php echo $one_toi["created"]; ?><br>
<hr>
<?php
}
?>