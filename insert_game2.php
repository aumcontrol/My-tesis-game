<?php header('Access-Control-Allow-Origin: *');
date_default_timezone_set("Asia/Bangkok");

$mysqli = new mysqli('localhost', 'aichulap_pdgames', '@aichulapd0000', 'aichulap_pdgames');
if ($mysqli->connect_errno) {
    die('Could not connect: ' . mysqli_connect_errno());;
}

$hn_id = $_GET['hn_id'];
$score_plus = $_GET['score_plus'];
$score_sub = $_GET['score_sub'];
$time = $_GET['time'];
$game_id = $_GET['game_id'];
$level_id = $_GET['level_id'];
$status_game2 = $_GET['status_game2'];
$date1 = date('Y-m-d H:i:s');

//$query = $mysqli->query("SELECT * FROM tbscore WHERE id = $id");
$result = $mysqli->query("INSERT INTO play_game2_table (hn_id, score_game2_plus, score_game2_sub, time_game2, game_id, level_id,create_at,status_game2) VALUES ('$hn_id','$score_plus','$score_sub','$time','$game_id','$level_id','$date1','$status_game2')");

// $row = $query->fetch_array();
// echo $row['id'];

$mysqli->close();
