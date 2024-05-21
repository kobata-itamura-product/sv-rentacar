<?php
session_start();
$_SESSION['selected_menu'] = 'selected_menu';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['selected_menu'])) {
        // 選択されたメニューの値をセッションに保存
        $_SESSION['selected_menu'] = $_POST['selected_menu'];
    }
}
?>
<!DOCTYPE html>
<html>



<head>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<style>
	


	.submit1{
	    border:1px solid #777;
		width:90px;
	    padding: 4px 10px;
	    color: #fff;
	    cursor: pointer;
	    background: #428ec9;
	    border-radius: 5px;
        margin-top: 310px;
        margin-left: 230px;
     
		/* Webkit */
		    background: -webkit-gradient(
		        linear,
		        left top,
		        left bottom,
		        from(#99c9e5),
		        to(#428ec9)
		        );
		    -webkit-border-radius: 5px;
		    -webkit-box-shadow: 1px 1px 1px #fff;
		         
		/* Firefox */
		    background: -moz-linear-gradient(
		        top,
		        #99c9e5,
		        #428ec9
		        );
		    -moz-border-radius: 5px;
		    -moz-box-shadow: 1px 1px 1px #fff;
		     
		/* IE */
		    filter:progid:DXImageTransform.Microsoft.gradient
		        (startColorstr=#ff99c9e5,endColorstr=#ff428ec9);
		    zoom: 1;
	}

    div.submit1{
        margin-top: 130px;
        margin-left: 130px;
		text-align:center;
    }
	
	.submit1:hover{
	    border:1px solid #777;
	    padding: 4px 10px;
	    color: #fff;
	    cursor: pointer;
	    background: #ff4500;
	    border-radius: 5px;
     
		/* Webkit */
		    background: -webkit-gradient(
		        linear,
		        left top,
		        left bottom,
		        from(#ffdab9),
		        to(#ff4500)
		        );

		         
		/* Firefox */
		    background: -moz-linear-gradient(
		        top,
		        #99c9e5,
		        #428ec9
		        );
		    -moz-border-radius: 5px;
		    -moz-box-shadow: 1px 1px 1px #fff;
		     
		/* IE */
		    filter:progid:DXImageTransform.Microsoft.gradient
		        (startColorstr=#ff99c9e5,endColorstr=#ff4500);
		    zoom: 1;
		   }
		    
		    
		    
		    
		*{
		  box-sizing: border-box;
		}
		ul,li{
		  margin: 0;
		  padding: 0;
		  list-style: none;
		}

		.selectBox{
		  position: relative;
		  width: 18em;
		  height: 40px;
		}
		.selectBox select{
		  position: absolute;
		  left: 0;
		  top: 0;
		  width: 100%;
		  height: 100%;
          margin-top:200px;
		}
		.selectBox__output{
		  display: flex;
		  align-items: center;
		  position: relative;
		  width: 100%;
		  height: 100%;
		  padding: 1em;
		  border: 1px solid #ccc;
		  background-color: #fff;
		  border-radius: 5px;
		  z-index: 2;
		}
		.selectBox__output::after{
		  display: block;
		  position: absolute;
		  right: 3%;
		  top: 50%;
		  font-family: "CONDENSEicon";
		  transform: translateY(-50%);
		  content: "▼";
		}
		.selectBox__output.open::after{
		  transform: translateY(-50%) rotate(180deg);
		}
		.selectBox__selector{
		  display: none;
		  position: absolute;
		  left: 0;
		  top: calc(100% - 1px);
		  width: 100%;
		  border: 1px solid #ccc;
		  background-color: #fff;
		  z-index: 10;
		}
		.selectBox__selectorItem{
		  width: 100%;
		  padding: .75em;
		}
		.selectBox__selectorItem+.selectBox__selectorItem{
		  border-top: 1px solid #ccc;
		}
		.selectBox__selectorItem:hover{
		  background-color: #008080;
		  color:#fff;
		}



		.submit2{
	    border:1px solid #777;
		width:60px;
	    padding: 4px 10px;
	    color: #fff;
	    cursor: pointer;
	    background: #428ec9;
	    border-radius: 5px;
        margin-top: 110px;
        margin-left: 230px;
     
		/* Webkit */
		    background: -webkit-gradient(
		        linear,
		        left top,
		        left bottom,
		        from(#99c9e5),
		        to(#428ec9)
		        );
		    -webkit-border-radius: 5px;
		    -webkit-box-shadow: 1px 1px 1px #fff;
		         
		/* Firefox */
		    background: -moz-linear-gradient(
		        top,
		        #99c9e5,
		        #428ec9
		        );
		    -moz-border-radius: 5px;
		    -moz-box-shadow: 1px 1px 1px #fff;
		     
		/* IE */
		    filter:progid:DXImageTransform.Microsoft.gradient
		        (startColorstr=#ff99c9e5,endColorstr=#ff428ec9);
		    zoom: 1;
	}

    div.submit2{
        margin-top: -35px;
        margin-left: 240px;
		text-align:center;
    }
	
	.submit2:hover{
	    border:1px solid #777;
	    padding: 4px 10px;
	    color: #fff;
	    cursor: pointer;
	    background: #ff4500;
	    border-radius: 5px;
     
		/* Webkit */
		    background: -webkit-gradient(
		        linear,
		        left top,
		        left bottom,
		        from(#ffdab9),
		        to(#ff4500)
		        );

		         
		/* Firefox */
		    background: -moz-linear-gradient(
		        top,
		        #99c9e5,
		        #428ec9
		        );
		    -moz-border-radius: 5px;
		    -moz-box-shadow: 1px 1px 1px #fff;
		     
		/* IE */
		    filter:progid:DXImageTransform.Microsoft.gradient
		        (startColorstr=#ff99c9e5,endColorstr=#ff4500);
		    zoom: 1;
		   }
		    
		    
		    
		    
		*{
		  box-sizing: border-box;
		}
		ul,li{
		  margin: 0;
		  padding: 0;
		  list-style: none;
		}

		.selectBox{
		  position: relative;
		  width: 18em;
		  height: 40px;
		}
		.selectBox select{
		  position: absolute;
		  left: 0;
		  top: 0;
		  width: 100%;
		  height: 100%;
          margin-top:100px;
		}
		.selectBox__output{
		  display: flex;
		  align-items: center;
		  position: relative;
		  width: 100%;
		  height: 100%;
		  padding: 1em;
		  border: 1px solid #ccc;
		  background-color: #fff;
		  border-radius: 5px;
		  z-index: 2;
		}
		.selectBox__output::after{
		  display: block;
		  position: absolute;
		  right: 3%;
		  top: 50%;
		  font-family: "CONDENSEicon";
		  transform: translateY(-50%);
		  content: "▼";
		}
		.selectBox__output.open::after{
		  transform: translateY(-50%) rotate(180deg);
		}
		.selectBox__selector{
		  display: none;
		  position: absolute;
		  left: 0;
		  top: calc(100% - 1px);
		  width: 100%;
		  border: 1px solid #ccc;
		  background-color: #fff;
		  z-index: 10;
		}
		.selectBox__selectorItem{
		  width: 100%;
		  padding: .75em;
		}
		.selectBox__selectorItem+.selectBox__selectorItem{
		  border-top: 1px solid #ccc;
		}
		.selectBox__selectorItem:hover{
		  background-color: #008080;
		  color:#fff;
		}


    }

</style>

<script>

	$(function(){

		//初期値
		$('.selectBox__output').each(function () {
		  const defaultText = $(this).next('.selectBox__selector').children('.selectBox__selectorItem:first-child').text()
		  $(this).text(defaultText);
		})

		//出力の枠をクリックした時の動作
		$('.selectBox__output').on('click', function (e) {
		  e.stopPropagation();
		  if ($(this).hasClass('open')) {
		    $(this).next('.selectBox__selector').slideUp();
		  } else {
		    $(this).next('.selectBox__selector').slideDown();
		  }
		  $(this).toggleClass('open');
		});

		//選択肢をクリックした時の動作
		$('.selectBox__selectorItem').on('click', function () {
		  const selectVal = $(this).data('select');
		  const selectText = $(this).text();
		  $(this).parent('.selectBox__selector').prev('.selectBox__output').text(selectText);
		  $(this).parent('.selectBox__selector').slideUp();
		  $(this).parents('.selectBox__output').slideDown();
		  $(this).parent('.selectBox__selector').next('select').val(selectVal);
		});
	});

</script>

<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

require 'database.php';

// DB接続
$pdo = connect();

// ステートメント
$sql = "SELECT * FROM makers";
$resultset = $pdo -> query($sql);
//$resultset->prepare($sql);
$resultset->execute();
$resultset->fetch(PDO::FETCH_ASSOC);
$data = "";
foreach ($resultset as $data_val) {
    $data .= "<option value='". $data_val['maker_id'];
    $data .= "'>". $data_val['maker_name']. "</option>";
}


?>

<meta charset="utf-8">
<title>メーカー選択画面</title>
  
</head>

<body>
<h1>メーカー選択画面</h1>


 
  <div id="select">
  <div class="selectBox">
  
    <p>メーカーを選択してください</p>
    


       <form  method = "POST">
            <select name= "selected_menu">
			<?php
              echo $data;
			  $selected_data = $_POST["selected_menu"];
              echo $selected_data;
			?>
            </select>

            <div class="submit1" >
                <input type="submit" name="add" value="新規登録" formaction="/sv-rentacar/resources/views/carmodels/create.blade.php"/>
            </div>

            <div class="submit2" >
			    <input type="submit" name="edit" value="編集" formaction="edit.php"/>
            </div>
       </form>
  </div>


</body>
</html>