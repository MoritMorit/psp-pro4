<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>ぷろふ</title>
 </head>
 <body>
    <div style="width: 320px; height: 701px; position: relative; background: white">


    <div id='save' style="width: 179px; height: 49px; left: 70px; top: 479px; position: absolute">
          <div style="width: 179px; height: 49px; left: 0px; top: 0px; position: absolute; background: #D9D9D9"></div>
          <div style="width: 94px; height: 37px; left: 41px; top: 12px; position: absolute; text-align: center; color: black; font-size: 24px; font-family: Inter; font-weight: 400; word-wrap: break-word">ほぞん</div>
        </div>

        <div id='return' style="width: 181px; height: 50px; left: 67px; top: 548px; position: absolute">
          <div style="width: 181px; height: 50px; left: 0px; top: 0px; position: absolute; background: #D9D9D9"></div>
          <div style="width: 138px; height: 25px; left: 23px; top: 12px; position: absolute; text-align: center; color: black; font-size: 20px; font-family: Inter; font-weight: 400; word-wrap: break-word">スタート画面</div>
        </div>

        <div id='share' style="width: 179px; height: 49px; left: 67px; top: 618px; position: absolute">
          <div style="width: 179px; height: 49px; left: 0px; top: 0px; position: absolute; background: #D9D9D9"></div>
          <div style="width: 121px; height: 26px; left: 29px; top: 12px; position: absolute; text-align: center; color: black; font-size: 24px; font-family: Inter; font-weight: 400; word-wrap: break-word">きょうゆう</div>
        </div>

        <div style="width: 104px; height: 33px; left: 44px; top: 99px; position: absolute">
          <div style="width: 104px; height: 33px; left: 0px; top: 0px; position: absolute; background: #D9D9D9"></div>
          <div style="width: 76.44px; height: 25.67px; left: 15.11px; top: 7.33px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word">プロフィール</div>
        </div>

        <div id='QList' style="width: 200px; height: 300px; left: 44px; top: 150px; position: absolute">

        </div>
      </div>

      <script>
        user = "<?php echo $_GET['user']?>";

        myData = JSON.parse( localStorage[user] );

        qList = document.getElementById('QList');
        for( key in myData.myP ) {
          q = document.createElement('label');
          q.innerHTML = key + '<br>';
          a = document.createElement('input');
          a.type = 'text';
          
          qList.append( q );
          qList.append( a );
          qList.append( document.createElement('br') );
          
//          alert( key + ":" + myData.myP[key]  );

        }

        function Save() {
 
          // location.href = "select.php?user="+user;
          alert('Saved !')
          }

          function Return() {

          location.href = "start.php?user="+user;
          }

          function Share() {

          location.href = "share.php?user="+user;
          }

          save_button = document.getElementById("save");
          save_button.onclick = Save

          return_button = document.getElementById("return");
          return_button.onclick = Return;

          share_button = document.getElementById("share");
          share_button.onclick = Share;



      </script>

 </body>
</html>