<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>ぷろふ</title>
 </head>
 <body>

  <div style="width: 320px; height: 568px; position: relative; background: white">
    <div  id="select" style="width: 179px; height: 49px; left: 73px; top: 404px; position: absolute">
      <div style="width: 179px; height: 49px; left: 0px; top: 0px; position: absolute; background: #D9D9D9"></div>
      <div style="width: 103px; height: 22px; left: 38px; top: 14px; position: absolute; text-align: center; color: black; font-size: 20px; font-family: Inter; font-weight: 400; word-wrap: break-word">はじめる</div>
    </div>
    <div style="width: 149px; height: 51px; left: 86px; top: 168px; position: absolute; text-align: center; color: black; font-size: 48px; font-family: Inter; font-weight: 400; word-wrap: break-word">キズナ</div>
    <div id="PB" style="width: 181px; height: 50px; left: 72px; top: 474px; position: absolute">
      <div style="width: 181px; height: 50px; left: 0px; top: 0px; position: absolute; background: #D9D9D9"></div>
      <div style="width: 139px; height: 23px; left: 19px; top: 13px; position: absolute; text-align: center; color: black; font-size: 20px; font-family: Inter; font-weight: 400; word-wrap: break-word">プロフを見る</div>
    </div>
  </div>



  <script>
    user = "<?php echo $_GET['user'];?>";
    alert("ようこそ" + user + "さん");

    function select() {

      location.href = "select.php?user="+user;
    }

    function PB() {

      location.href = "PB.php?user="+user;
    }

    select_button = document.getElementById("select");
    select_button.onclick = select;

    PB_button = document.getElementById("PB");
    PB_button.onclick = PB;

    


  </script>

 </body>
</html>


