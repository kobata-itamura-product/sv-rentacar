

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
<h1>

<!-- <?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$maker = $_POST["Jcar"];
		echo "{$maker}";
	}
?> -->

	 - 新規登録画面

</h1>


<form  method = "POST" id = "form1" action = "add_confirm.php">

    <p>モデル名：</p>
    <p><textarea cols="50" rows="2"></textarea></p>
    
	<div id="select">
	<div class="selectBox">
	
		<p>タイプ：</p>
		
		<div class="selectBox__output"></div>
		<div class="selectBox__selector">
			<div class="selectBox__selectorItem" data-select="cat1">選択してください</div>
			<div class="selectBox__selectorItem" data-select="cat2">セダン</div>
			<div class="selectBox__selectorItem" data-select="cat3">SUV</div>
			<div class="selectBox__selectorItem" data-select="cat2">ハッチバック</div>
			<div class="selectBox__selectorItem" data-select="cat3">クーペ </div>
			<div class="selectBox__selectorItem" data-select="cat3">ワゴン</div>
			<div class="selectBox__selectorItem" data-select="cat3">バン</div>
			<div class="selectBox__selectorItem" data-select="cat2">ミニバン</div>
			<div class="selectBox__selectorItem" data-select="cat3">軽</div>
		</div>

		<p>クラス：</p>
	
		<div class="selectBox__output"></div>
		<div class="selectBox__selector">
			<div class="selectBox__selectorItem" data-select="cat1">選択してください</div>
			<div class="selectBox__selectorItem" data-select="cat2">1シリーズ</div>
			<div class="selectBox__selectorItem" data-select="cat3">3シリーズ</div>
			<div class="selectBox__selectorItem" data-select="cat2">5シリーズ</div>
			<div class="selectBox__selectorItem" data-select="cat3">UX200h </div>
			<div class="selectBox__selectorItem" data-select="cat2">LC</div>
			<div class="selectBox__selectorItem" data-select="cat3">アクア</div>
		</div>
		
	<div> <!-- select-->
	<div> <!-- selectbox-->

	<p>

    <label for="input">画像ファイル：</label>
        
	<table>

		<tr>
		<td>画像1 *メイン画像<input type="file" name="input1" id="input1" accept="image/*"></td>
        <td><figure id="figure1" style="display: none">
			<figcaption></figcaption>
			<img name="img1" src="" alt="" id="figureImage1" style="max-width: 200px">
        </figure>
		</td>
		</tr>

		<tr>
		<td>画像2<input type="file" name="input2" id="input2" accept="image/*"></td>
        <td><figure id="figure2" style="display: none">
			<figcaption></figcaption>
          	<img name="img2" src="" alt="" id="figureImage2" style="max-width: 200px">
        </figure>
		</td>
		</tr>

		<tr>
		<td>画像3<input type="file" name="input3" id="input3" accept="image/*"></td>
        <td><figure id="figure3" style="display: none">
			<figcaption></figcaption>
          	<img name="img3" src="" alt="" id="figureImage3" style="max-width: 200px">
        </figure>
		</td>
		</tr>

		<tr>
		<td>画像4<input type="file" name="input4" id="input4" accept="image/*"></td>
        <td><figure id="figure4" style="display: none">
			<figcaption></figcaption>
          	<img name="img4" src="" alt="" id="figureImage4" style="max-width: 200px">
        </figure>
		</td>
		</tr>

		
		<tr>
		<td>画像5<input type="file" name="input5" id="input5" accept="image/*"></td>
        <td><figure id="figure5" style="display: none">
			<figcaption></figcaption>
          	<img name="img5" src="" alt="" id="figureImage5" style="max-width: 200px">
        </figure>
		</td>
		</tr>
	
		<tr>
		<td>画像6<input type="file" name="input6" id="input6" accept="image/*"></td>
        <td><figure id="figure6" style="display: none">
			<figcaption></figcaption>
          	<img name="img6" src="" alt="" id="figureImage6" style="max-width: 200px">
        </figure>
		</td>
		</tr>
	
		<tr>
		<td>画像7<input type="file" name="input7" id="input7" accept="image/*"></td>
        <td><figure id="figure7" style="display: none">
			<figcaption></figcaption>
          	<img name="img7" src="" alt="" id="figureImage7" style="max-width: 200px">
        </figure>
		</td>
		</tr>
	</table>


	<p>
	<input type="submit" class ="submit1" value="戻る" formaction="maker_select.php">
	<input type="submit" class ="submit2" value="登録" formaction="add_confirm.php">

</form>





<script src="main.js"></script>

</body>
</html>