<?PHP

function createReview(){
  echo 'サウナログを登録してくださいな！' . PHP_EOL;
  echo '施設名:';
  $title = trim(fgets(STDIN));

  echo '都道府県:';
  $prefecture = trim(fgets(STDIN));

  echo '評価（5点満点の整数）:';
  $score = trim(fgets(STDIN));

  echo '感想';
  $summary = trim(fgets(STDIN));

  echo '登録が完了。お疲れ様！' . PHP_EOL;

  return [
    'title' => $title,
    'prefecture' => $prefecture,
    'score' => $score,
    'summary' => $summary,
  ];
}

function responseReview($reviews){
  echo 'サウナログを表示します' . PHP_EOL;

  foreach($reviews as $review) {
    echo '施設名' . $review['title'] . PHP_EOL;
    echo '都道府県' . $review['prefecture'] . PHP_EOL;
    echo '評価' . $review['score'] . PHP_EOL;
    echo '感想' . $review['summary'] . PHP_EOL;
    echo '===================' . PHP_EOL;
  }
}

$reviews = [];

//サウナログについてのトップページ
while(true){
  echo '1.サウナログを登録' . PHP_EOL;
  echo '2.サウナログを表示' . PHP_EOL;
  echo '9.アプリケーションを終了' . PHP_EOL;
  echo '番号を入力してね!';
  $num = trim(fgets(STDIN));

//N＝１ のとき、登録する処理
if($num ==='1') {
  $reviews[] = createReview();


//N＝２ のとき、表示する処理
}elseif($num === '2') {
  responseReview($reviews);

//N＝９ のとき、終了する処理
}elseif($num === '9'){
  break;
}
};



//配列・連想配列についての理解
//関数をリターンで返す処理
//変数宣言
//繰り返し処理・foreach処理

//上の理解がまだまだ