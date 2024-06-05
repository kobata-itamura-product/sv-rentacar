<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "sv_rentacar";

// DB接続
$conn = new mysqli($servername, $username, $password, $dbname);

// データベースへの接続を確認
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//require 'database2.php';

// アップロードされた画像を保存するフォルダ
$target_dir = "uploads/";

// フォームから送信された画像ファイルを処理
if(isset($_POST["submit"])) {
    // ファイルの数を取得
    $countfiles = count($_FILES['file']['name']);

    // すべてのファイルを処理
    for($i=0;$i<$countfiles;$i++) {
        // ファイル名を取得
        $filename = $_FILES['file']['name'][$i];

        if ($filename != "") {

            // ファイルをアップロードする
            move_uploaded_file($_FILES['file']['tmp_name'][$i],$target_dir.$filename);

            // DB接続
            //$pdo = connect();

            // データベースにファイル名を挿入する
            $sql = "INSERT INTO images (file_name) VALUES ('$filename')";
            //$sql->execute();
            if ($conn->query($sql) === TRUE) {
               // echo "登録完了";
            }
        }
    }
}


// データベース接続を閉じる
//$conn->close();



?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<style>
#click-btn {
  display: block;
  margin: 20px auto;
  background-color: purple;
  color: white;
  border: 0;
  padding: 6px 10px;
}

#click-btn2 {
  margin: 20px auto;
  background-color: green;
  color: white;
  border: 0;
  padding: 8px 10px;
}

#popup-wrapper {
  background-color: rgba(0, 0, 0, .5);
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: none;
}

#popup-inside {
  text-align: center;
  width: 100%;
  max-width: 300px;
  background: white;
  margin: 10% auto;
  padding: 20px;
  position: relative;
}

#message a {
  background: purple;
  color: white;
  text-decoration: none;
  padding: 6px 10px;
}

#click-btn2 a {
  background: green;
  color: white;
  text-decoration: none;
  padding: 6px 10px;
}

#close {
  position: absolute;
  top: 0;
  right: 5px;
  cursor: pointer;
}


</style>


</head>
<body>




</script>
    <form action="" method="post" enctype="multipart/form-data">
        画像を選択してください。
        <p><input type="file" name="file[]" multiple>
        <p><input type="file" name="file[]" multiple>
        <p><input type="file" name="file[]" multiple>
        <p><input type="file" name="file[]" multiple>
        <p><input type="file" name="file[]" multiple>
        <p><input type="submit"  value="戻る" formaction="maker_select.php">
        <p><input type="submit" value="登録" name="submit">

</div>



    </form>



    <p><input type="submit" id="click-btn" value="登録" name="submit">

<div id="popup-wrapper">
  <div id="popup-inside">
    <div id="close">x</div>
      <div id="message">
      <h3>登録完了しました！<br />続けて登録しますか？</h3>
      <a href="list.php">いいえ</a>
      <button id="click-btn2"><a href="maker_select.php">はい</a></button>
    </div>
  </div>



<script src="main.js"></script>

<script>
const clickBtn = document.getElementById('click-btn');
const popupWrapper = document.getElementById('popup-wrapper');
const close = document.getElementById('close');

// ボタンをクリックしたときにポップアップを表示させる
clickBtn.addEventListener('click', () => {
  popupWrapper.style.display = "block";
});

// ポップアップの外側又は「x」のマークをクリックしたときポップアップを閉じる
popupWrapper.addEventListener('click', e => {
  if (e.target.id === popupWrapper.id || e.target.id === close.id) {
    popupWrapper.style.display = 'none';
  }
});

const clickBtn2 = document.getElementById('click-btn2');
const popupWrapper2 = document.getElementById('popup-wrapper');
const close2 = document.getElementById('close');

// ボタンをクリックしたときにポップアップを表示させる
clickBtn2.addEventListener('click', () => {
  popupWrapper2.style.display = "block";
});

// ポップアップの外側又は「x」のマークをクリックしたときポップアップを閉じる
popupWrapper2.addEventListener('click', e => {
  if (e.target.id === popupWrapper.id || e.target.id === close2.id) {
    popupWrapper2.style.display = 'none';
  }
});

</script>


<?php



if (isset($_POST['submit'])) {
  
  $alert = "<script type='text/javascript'>alert('登録が完了しました！');</script>";
  echo $alert;

  //header('Location: ./maker_select.php');
  //exit;
}
?>

</body>
</html>
