

<!DOCTYPE html>
<html>

<head>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<style>
	


	.submit{
	    border:1px solid #777;
	    padding: 4px 10px;
	    color: #fff;
	    cursor: pointer;
	    background: #428ec9;
	    border-radius: 5px;
     
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

	
	.submit:hover{
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
		    -webkit-border-radius: 5px;
		    -webkit-box-shadow: 1px 1px 1px #ff4500;
		         
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
		  height: 60px;
		}
		.selectBox select{
		  position: absolute;
		  left: 0;
		  top: 0;
		  width: 100%;
		  height: 100%;
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

  <meta charset="utf-8">
  <title>車種登録画面</title>
  
</head>
<body>
<h1>選択画像確認画面</h1>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$image1 = $_POST["image1"];
		$image2 = $_POST["image2"];
		$image3 = $_POST["image3"];
		$image4 = $_POST["image4"];
		$image5 = $_POST["image5"];
		$image6 = $_POST["image6"];
		$image7 = $_POST["image7"];
		echo "<p />画像1 :  {$image1} ";
		echo "<p />画像2 :  {$image2} ";
		echo "<p />画像3 :  {$image3} ";
		echo "<p />画像4 :  {$image4} ";
		echo "<p />画像5 :  {$image5} ";
		echo "<p />画像6 :  {$image6} ";
		echo "<p />画像7 :  {$image7} ";
	}
?>

<form action="">
      <div>
        <label for="input">画像ファイル</label>
        <figure id=<?php $image1 ?> style="display: none">
          <figcaption>画像ファイルのプレビュー</figcaption>
          <img src="" alt="" id="figureImage" style="max-width: 100%">
        </figure>
      </div>
</form>

<div>
	<p>
    <input type="submit" class ="submit" value="戻る" formaction="test.blade.php">
    <input type="submit" class ="submit" value="登録" formaction="add_confirm.php">
</div>
  
<script src="main.js"></script>

</body>
</html>