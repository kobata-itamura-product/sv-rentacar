function main () {
  const input1 = document.querySelector('#input1')
  const figure1 = document.querySelector('#figure1')
  const figureImage1 = document.querySelector('#figureImage1')
  
  const input2 = document.querySelector('#input2')
  const figure2 = document.querySelector('#figure2')
  const figureImage2 = document.querySelector('#figureImage2')

  const input3 = document.querySelector('#input3')
  const figure3 = document.querySelector('#figure3')
  const figureImage3 = document.querySelector('#figureImage3')

  const input4 = document.querySelector('#input4')
  const figure4 = document.querySelector('#figure4')
  const figureImage4 = document.querySelector('#figureImage4')
  
  const input5 = document.querySelector('#input5')
  const figure5 = document.querySelector('#figure5')
  const figureImage5 = document.querySelector('#figureImage5')
  
  const input6 = document.querySelector('#input6')
  const figure6 = document.querySelector('#figure6')
  const figureImage6 = document.querySelector('#figureImage6')
  
  const input7 = document.querySelector('#input7')
  const figure7 = document.querySelector('#figure7')
  const figureImage7 = document.querySelector('#figureImage7')
  
  
  //画像1
  input1.addEventListener('change', (event) => { 
    const [file] = event.target.files

    if (file) {
      figureImage1.setAttribute('src', URL.createObjectURL(file))
      figure1.style.display = 'block'
    } else {
      figure1.style.display = 'none'
    }
  })
    

  //画像2
  input2.addEventListener('change', (event) => { 
    const [file] = event.target.files

    if (file) {
      figureImage2.setAttribute('src', URL.createObjectURL(file))
      figure2.style.display = 'block'
    } else {
      figure2.style.display = 'none'
    }
  })
    

  //画像3
  input3.addEventListener('change', (event) => { 
    const [file] = event.target.files

    if (file) {
      figureImage3.setAttribute('src', URL.createObjectURL(file))
      figure3.style.display = 'block'
    } else {
      figure3.style.display = 'none'
    }
  })


  //画像4
  input4.addEventListener('change', (event) => { 
    const [file] = event.target.files

    if (file) {
      figureImage4.setAttribute('src', URL.createObjectURL(file))
      figure4.style.display = 'block'
    } else {
      figure4.style.display = 'none'
    }
  })


  //画像5
  input5.addEventListener('change', (event) => { 
    const [file] = event.target.files

    if (file) {
      figureImage5.setAttribute('src', URL.createObjectURL(file))
      figure5.style.display = 'block'
    } else {
      figure5.style.display = 'none'
    }
  })


  //画像6
  input6.addEventListener('change', (event) => { 
    const [file] = event.target.files

    if (file) {
      figureImage6.setAttribute('src', URL.createObjectURL(file))
      figure6.style.display = 'block'
    } else {
      figure6.style.display = 'none'
    }
  })

    
  //画像7
  input7.addEventListener('change', (event) => { 
    const [file] = event.target.files

    if (file) {
      figureImage7.setAttribute('src', URL.createObjectURL(file))
      figure7.style.display = 'block'
    } else {
      figure7.style.display = 'none'
    }
  })
    
    
}

$(document).ready(function(){
    $("#confirm_button").click(function(){
        var result = confirm("次のダイアログボックスを表示しますか？");
        if(result) {
            alert("次のステップを表示します！");
        } else {
            alert("キャンセルしました。");
        }
    });
}); 

$(function(){
    $('#form1').submit2(function(){
        if(window.confirm('登録しますか？')) {
            return true;
        } else {
            return false;
        }
    });
});



main()