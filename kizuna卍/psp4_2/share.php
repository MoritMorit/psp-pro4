<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>ぷろふ</title>
 </head>
 <body>
    <div style="width: 320px; height: 568px; position: relative; background: white">
        <div style="width: 198px; height: 68px; left: 66px; top: 59px; position: absolute; color: black; font-size: 20px; font-family: Inter; font-weight: 400; word-wrap: break-word">送り先のお友達の<br/>・ユーザ名<br/>・プロフ帳ナンバー<br/>をいれてね☆</div>
        
        <div id='submit' style="width: 118px; height: 52px; left: 104px; top: 437px; position: absolute">
            <div style="width: 118px; height: 52px; left: 0px; top: 0px; position: absolute; background: #D9D9D9"></div>
            <div style="width: 70px; height: 44px; left: 22px; top: 8px; position: absolute; color: black; font-size: 32px; font-family: Inter; font-weight: 400; word-wrap: break-word">送信</div>
        </div>

        <div style="height: 62px; left: 45px; top: 200px; position: absolute">
            <input style='text' id='friend_name' style="width: 235px; height: 39px; left: 0px; top: 23px; position: absolute; background: #D9D9D9"></input>
            <div style="width: 59px; height: 17px; left: 1px; top: 0px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word">ユーザ名</div>
        </div>

        <div style="width: 235px; height: 61px; left: 42px; top: 308px; position: absolute">
            <input type='text' id='friend_pbn' style="width: 235px; height: 39px; left: 0px; top: 22px; position: absolute; background: #D9D9D9"></input>
            <div style="width: 98px; height: 16px; left: 3px; top: 0px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word">プロフ帳ナンバー</div>
        </div>
    </div>

    <script>
        user = "<?php echo $_GET['user'];?>";


        function submit() {
            fn = document.getElementById("friend_name").value;
            fpbn = document.getElementById("friend_pbn").value;
            
            json = JSON.parse(window.localStorage.getItem(fn));//getしたuser_nameがkeyになっているjsonを探索

            if( json == null ) {// null
                alert("Such user don't exist.");
            }
            else if( json.pbn == fpbn   ) { // 存在　かつ　pbn が一致
                frData = JSON.parse(localStorage[fn]);
                let myP = {};
                frData['myP'] = JSON.parse(window.localStorage[user].getItem(myP));
                localStorage[fn] = JSON.stringify( frData );



                alert(" 送信しました！ ");
                location.href = "start.php?user="+user;
            }
            else
            alert("BOOOOO!!")


            location.href = "PB.php?user="+user;
        }

        submit_button = document.getElementById("submit");
        submit_button.onclick = submit;

    </script>


 </body>
</html>



