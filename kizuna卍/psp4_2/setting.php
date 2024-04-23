<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>ぷろふ</title>
 </head>
 <body>
    <div style="width: 320px; height: 568px; position: relative; background: white">
        <div style="width: 216px; height: 40px; left: 47px; top: 50px; position: absolute; color: black; font-size: 20px; font-family: Inter; font-weight: 400; word-wrap: break-word">あなたの<br>プロフ帳ナンバー<br/></div>
        <div id='pbn_p' style="width: 207px; height: 32px; left: 45px; top: 130px; position: absolute; background: #D9D9D9"></div>

        <div style="width: 186px; height: 58px; left: 47px; top: 220px; position: absolute; color: black; font-size: 20px; font-family: Inter; font-weight: 400; word-wrap: break-word">プロフ帳背景を<br/>決めてね</div>
        <div id='green' style="width: 75px; height: 113px; left: 27px; top: 284px; position: absolute; background: #92efdf"></div>
        <div id='yellow' style="width: 75px; height: 113px; left: 215px; top: 284px; position: absolute; background: #fff099"></div>
        <div id='pink' style="width: 75px; height: 113px; left: 123px; top: 284px; position: absolute; background: #ffc5dd"></div>

        <div id='return' style="width: 118px; height: 52px; left: 96px; top: 455px; position: absolute">
            <div style="width: 118px; height: 52px; left: 0px; top: 0px; position: absolute; background: #D9D9D9"></div>
            <div style="width: 70px; height: 44px; left: 22px; top: 8px; position: absolute; color: black; font-size: 32px; font-family: Inter; font-weight: 400; word-wrap: break-word">決定</div>
        </div>
    </div>

    <script>

        user = " <?php echo $_GET['user']?> ";

        myData = JSON.parse( localStorage[user] );

        pbn_p = document.getElementById('pbn_p');
          
        q = document.createElement('label');
        q.innerHTML = myData.pbn ;
        pbn_p.append( q );
   

        // function green(){
        //     alert('Changed to green background.');
        // }

        // function yellow(){
        //     alert('Changed to yellow background.');
        // }

        // function pink(){
        //     alert('Changed to pink background.');
        // }

        // green_button = document.getElementById("green");
        // green_button.onclick=green;
        // yellow_button = document.getElementById("yellow");
        // green_button.onclick=yellow;
        // pink_button = document.getElementById("pink");
        // green_button.onclick=pink;

        function green(){
            alert('Changed to green background.');
        }

        function yellow(){
            alert('Changed to yellow background.');
        }

        function pink(){
            alert('Changed to pink background.');
        }


        green_button = document.getElementById("green");
        green_button.onclick = green;
        yellow_button = document.getElementById("yellow");
        yellow_button.onclick = yellow;
        pink_button = document.getElementById("pink");
        pink_button.onclick = pink;


        function Return() {

            location.href = "PB.php?user="+user;
        }

        return_botton = document.getElementById("return");
        return_botton.onclick = Return;




    </script>

    
 </body>
</html>