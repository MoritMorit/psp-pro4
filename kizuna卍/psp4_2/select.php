

  <!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>はじめてのHTML</title>
 </head>
 <body>
    <div style="width: 320px; height: 568px; position: relative; background: white">
        <div style="width: 273px; height: 72px; left: 23px; top: 25px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word"> しつもんをえらんで自分だけのプロフ帳を作ろう！<br/> かんせいしたプロフ帳はおともだちに共有して<br/>たのしもう！</div>
        <div style="width: 184px; height: px; left: 50px; top: 162px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word">

          <label><input type="checkbox" class='check' value="なまえ">なまえ<br></label>
          <label><input type="checkbox" class='check' value="けつえきがた">けつえきがた<br></label>
          <label><input type="checkbox" class='check' value="どこすみ">どこすみ<br></label>
          <label><input type="checkbox" class='check' value="好きな食べ物">好きな食べ物<br></label>
          <label><input type="checkbox" class='check' value="コイバナトーク">コイバナトーク<br></label>
          <label><input type="checkbox" class='check' id="other" name="interest" value="other" />その他<br></label>
          <input type="text" id="otherValue" name="other" aria-label="Other interest" />
        
        </div>
        <p id="msg"></p>
        <div id="pre_com" style="width: 179px; height: 49px; left: 70px; top: 478px; position: absolute">
          <div style="width: 179px; height: 49px; left: 0px; top: 0px; position: absolute; background: #D9D9D9"></div>
          <div style="width: 147px; height: 31px; left: 16px; top: 18px; position: absolute; text-align: center; color: black; font-size: 16px; font-family: Inter; font-weight: 400; word-wrap: break-word">プロフカード作成</div>
        </div>
      </div>

      <script src="Question.js"></script>
      <script>
        user = "<?php echo $_GET['user']?>";
        
        

        

        function pre_com() {

          const cbs = document.getElementsByClassName('check'); //check boxにcheckしたもんのリスト




          
            myData = JSON.parse( localStorage[user] ); //userのjsonのパースにアクセスしたものをmydataに格納

            var none=0;
            let myQuestion = {};

            for( ii=0 ; ii<cbs.length ; ii++ ) {
              if( cbs[ii].checked == true ){
                 //alert( cbs[ii].value );
                 myQuestion[cbs[ii].value] = "";
              }else{
                none++;
              }
            }

            if(none == 5){
              alert('choose at least one ;)');
            }else{
              myData['myP'] = myQuestion;
              localStorage[user] = JSON.stringify( myData );
              location.href = "pre_com.php?user="+user;
              
            }

            

          }

          
        
        const otherCheckbox = document.querySelector("#other");
        const otherText = document.querySelector("#otherValue");
        otherText.style.visibility = "hidden";

          otherCheckbox.addEventListener("change", () => {
            if (otherCheckbox.checked) {
              otherText.style.visibility = "visible";
              otherText.value = "";
            } else {
              otherText.style.visibility = "hidden";
            }
});


        pre_com_button = document.getElementById("pre_com");
        pre_com_button.onclick = pre_com;
    
    
      </script>


 </body>
</html>