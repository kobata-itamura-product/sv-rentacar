




<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ダイアログボックス</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



<script>


$(document).ready(function(){
  $("#openDialog").click(function(){
    $("#dialog1").show();
  });
});

$(document).ready(function(){
    $("#registerButton").click(function(){
        $("#confirmationDialog").dialog({
            resizable: false,
            height: "auto",
            width: 400,
            modal: true,
            buttons: {
                "いいえ": function() {
                    // いいえをクリックした時の処理
                    $(this).dialog("close");
                },
                "はい": function() {
                    // はいをクリックした時の処理（データベースに登録など）
                    // ここにデータベースへの登録などの処理を追加
                                            


                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'insert.php'); // サーバーサイドの処理を呼び出すURLを指定
                    xhr.onload = function() {


                        // 最初のダイアログボックスを表示
                        $("#dialog1").dialog({
                            autoOpen: true,
                            modal: true,
                            buttons: {
                                "いいえ": function() {
                                    $(this).dialog("close");
                                },
                                "はい": function() {
                                    $(this).dialog("close");
                                    $("#dialog2").dialog("open");
                                }
                            }
                        });

                        // 2番目のダイアログボックスを表示
                        $("#dialog2").dialog({
                            autoOpen: false,
                            modal: true,
                            buttons: {
                                "いいえ": function() {
                                    $(this).dialog("close");
                                    window.location.href = "list.php";
                                },
                                "はい": function() {
                                    $(this).dialog("close");
                                    window.location.href = "maker_select.php";
                                }
                            }
                        });

                    $(this).dialog("close");
                    $("#dialog2").dialog("open");  //データベースに登録しました。
                }
            }
            }
        });
    });
});

</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<!-- 
<form action="" method="post" enctype="multipart/form-data">
        <p><input type="file" name="file[]" multiple>
        <p><input type="file" name="file[]" multiple>
        <p><input type="file" name="file[]" multiple>
        <p><input type="file" name="file[]" multiple>
        <p><input type="file" name="file[]" multiple>
    </form>


<form>
<button id="openDialog">登録する</button>
</form> -->




<h4>登録画面</h4>


<form action="upload.php" method="post" name="submit" enctype="multipart/form-data">
        <p><input type="file" name="file[]" multiple>
        <p><input type="file" name="file[]" multiple>
        <p><input type="file" name="file[]" multiple>
        <p><input type="file" name="file[]" multiple>
        <p><input type="file" name="file[]" multiple>
        <p><input type="button" value="登録する" name="submit" id="registerButton">
</form>

<p><br></p><br><p><br></p><p><br></p><br><p><br></p><p><br></p><br><p><br></p>
<p><br></p><br><p><br></p><p><br></p><br><p><br></p><p><br></p><br><p><br></p>


<div id="confirmationDialog" title="登録確認" style="hidden">
  <p>この内容で登録しますか？</p>
</div>

<!-- ダイアログボックス1 -->
<div id="dialog1" title="最終確認" style="hidden" >

</div>

<!-- ダイアログボックス2 -->
<div id="dialog2" title="登録完了" style="hidden">
    <p>登録が完了しました。</p>
    <p>続けて登録しますか？</p>
</div>

</body>
</html>
