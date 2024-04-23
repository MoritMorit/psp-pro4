<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>ぷろふ</title>
 </head>
 <body>
    <div style="width: 325px; height: 712px; position: relative; background: white">
        <div style="width: 170px; height: 46px; left: 78px; top: 52px; position: absolute; text-align: center; color: black; font-size: 24px; font-family: Inter; font-weight: 400; word-wrap: break-word">プロフィール帳</div>
        
        <div id='return' style="width: 181px; height: 50px; left: 78px; top: 555px; position: absolute">
          <div style="width: 181px; height: 50px; left: 0px; top: 0px; position: absolute; background: #D9D9D9"></div>
          <div style="width: 138px; height: 25px; left: 23px; top: 12px; position: absolute; text-align: center; color: black; font-size: 20px; font-family: Inter; font-weight: 400; word-wrap: break-word">スタート画面</div>
        </div>
        
        <div id='setting' style="width: 181px; height: 50px; left: 78px; top: 619px; position: absolute">
          <div style="width: 181px; height: 50px; left: 0px; top: 0px; position: absolute; background: #D9D9D9"></div>
          <div style="width: 138px; height: 25px; left: 23px; top: 12px; position: absolute; text-align: center; color: black; font-size: 20px; font-family: Inter; font-weight: 400; word-wrap: break-word">プロフ帳設定</div>
        </div>
        
        <div style="width: 99px; height: 118px; left: 52px; top: 121px; position: absolute; background: #D9D9D9"></div>
        <div style="width: 99px; height: 118px; left: 52px; top: 412px; position: absolute; background: #D9D9D9"></div>
        <div style="width: 99px; height: 118px; left: 189px; top: 267px; position: absolute; background: #D9D9D9"></div>
        <div style="width: 99px; height: 118px; left: 52px; top: 267px; position: absolute; background: #D9D9D9"></div>
        <div style="width: 99px; height: 118px; left: 189px; top: 121px; position: absolute; background: #D9D9D9"></div>
      </div>

      <script>
        user = "<?php echo $_GET['user']?>";


        function Return() {

            location.href = "start.php?user="+user;  
        }

        function Setting() {

            location.href = "setting.php?user"+user;
        }

        return_botton = document.getElementById("return");
        return_botton.onclick = Return;

        setting_botton = document.getElementById("setting");
        setting_botton.onclick = Setting;
        
    
      </script>

      
 </body>
</html>