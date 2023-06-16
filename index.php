<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashzy Daily Bonus Bypass</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
    @font-face {
        font-family: Conto-Bold;
        src: url(Conto-Bold.ttf);
    }

    *{
        margin: 0;
        padding: 0;
        font-family: Conto-Bold;
        box-sizing: border-box;
    }

    body{
        background-color: rgb(238, 238, 238);
    }

    .content{
        width: 100%;
        padding: 30px;
        z-index: 999999;
        position: absolute;
    }

    .bg_image{
        width: 100%;
        height: 100vh;
        position: absolute;
        top: 30%;
        background-image: url('https://smartttech.in/logo_img.png');
        background-size: 80px;
        position: absolute;
        top: 0px;
        z-index: 1;
        opacity: 0.2;
        background-position: center;
    }

    .content h1{
        font-size: 18px;
        margin-top: 50px;
        margin-bottom: 30px;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-align: center;
        font-family: 'Righteous', cursive;
        font-weight: 100;
        text-shadow: 0px 0px 1px #16161778;
    }

    .content .text{
         width: 100%;
         height: 60px;
         margin: 10px 0;
         background-color: transparent;
         border: 2px solid #dedede;
         padding: 10px 15px;
         font-family: Conto-Bold;
         border-radius: 10px;
         border-left: 4px solid #d3d3d3;
         border-right: 4px solid #d3d3d3;
         outline: none;
         letter-spacing: 1px;
         transition: 0.5s ease-in-out;
         font-size: 14px;
         background-color: rgb(238, 238, 238);
        }

        .text:focus{
            border-left: 4px solid rgb(0, 141, 146);
            border-right: 4px solid rgb(0, 141, 146);
        }

        .content .submit{
            position: relative;
            transition: all .25s ease;
            overflow: hidden;
            width: 100%;
            height: 60px;
            margin: 15px 0;
            background-color: rgb(0, 141, 146);
            border: none;
            padding: 10px 15px;
            font-family: Conto-Bold;
            border-radius: 7px;
            outline: none;
            letter-spacing: 1px;
            transition: 0.5s ease-in-out;
            color: #fff;
            box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.582);
            cursor: pointer;
            font-size: 15px;
            border-left: 4px solid rgb(2, 127, 131);
            border-right: 4px solid rgb(2, 127, 131);
        }

        .content .submit:hover{
   background-color: rgb(2, 130, 134);
}

.shine{
    background-image: linear-gradient(112deg, rgba(255,255,255,0) 0%,rgba(255,255,255,0) 50%, rgba(248, 248, 248, 0.39) 70%, rgba(255,255,255,0) 80%, rgba(255,255,255,0) 100%);
    background-size: 200% 200%;
    background-repeat: no-repeat;
    animation: shine-animation 4s ease-in-out infinite;
}

@keyframes shine-animation{
    from{
        background-position: 200% 0;
    }to{
        background-position: -200% 0;
    }
}

.content .telBtn{
    width: 100%;
    height: 60px;
    margin-top: 30px;
    background-color: rgb(0, 141, 146);
    border: none;
    padding: 0px 15px;
    font-family: Conto-Bold;
    border-radius: 7px;
    outline: none;
    letter-spacing: 1px;
    transition: 0.5s ease-in-out;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    text-align: center;
    text-transform: capitalize;
    box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.39);
    border-left: 4px solid rgb(2, 127, 131);
    border-right: 4px solid rgb(2, 127, 131);
    position: relative;
    text-decoration: none;
}

.content .telBtn .fa-paper-plane{
    position: absolute;
    left: 20px;
    padding: 15px;
    font-size: 20px;
    border-radius: 0px;
}

.content .telBtn span{
    margin-left: 25px;
}

.success{
    font-size: 13px;
    letter-spacing: 1px;
    padding: 18px 10px;
    margin: 10px 0;
    border-radius: 7px;
    background-color: #d1e6dd;
    color: #105133;
    border: 1px solid #9fcfba;
    text-align: center;
}

.success_text{
    font-size: 13px;
    letter-spacing: 1px;
    padding: 18px 10px;
    margin: 10px 0;
    border-radius: 50px;
    color: #105133;
    text-align: center;
}

.error{
    font-size: 13px;
    letter-spacing: 1px;
    background-color: #f7d7da;
    color: #84200a;
    border: 1px solid #f5c2c7;
    padding: 18px 10px;
    margin: 10px 0;
    border-radius: 7px;
    text-align: center;
}

.error_text{
    font-size: 13px;
    letter-spacing: 1px;
    padding: 18px 10px;
    margin: 10px 0;
    border-radius: 50px;
    color: #84200a;
    text-align: center;
}

.white{
    font-size: 13px;
    letter-spacing: 1px;
    margin: 10px 0;
    background-color: #e2e3e5;
    color: #41464a;
    border: 1px solid #d5dbdb;
    padding: 18px 10px;
    border-radius: 7px;
    text-align: center;
}

.blue{
    font-size: 13px;
    letter-spacing: 1px;
    margin: 10px 0;
    background-color: #cfe2ff;
    color: #084195;
    border: 1px solid #d7d4fe;
    padding: 18px 10px;
    border-radius: 7px;
    text-align: center;
}

select, option{
    width: 100%;
    height: 65px;
    margin: 10px 0;
    background-color: transparent;
    border: 2px solid #dedede;
    padding: 10px 25px;
    font-family: Conto-Bold;
    border-radius: 10px;
    border-left: 4px solid #d3d3d3;
    border-right: 4px solid #d3d3d3;
    outline: none;
    letter-spacing: 1px;
    transition: 0.5s ease-in-out;
    font-size: 13px;
}
</style>

<body>
    <div class="content">
        <h1>Cashzy Daily Bonus Bypass</h1>
</body>
</html>

<?php
function gamerx($url,$data,$headers,$method){
    $gamerx = curl_init();
    curl_setopt($gamerx, CURLOPT_URL, $url);
    curl_setopt($gamerx, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($gamerx, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($gamerx, CURLOPT_POSTFIELDS, $data); curl_setopt($gamerx, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($gamerx, CURLOPT_SSL_VERIFYHOST,FALSE);
    curl_setopt($gamerx, CURLOPT_SSL_VERIFYPEER,FALSE);
    curl_setopt($gamerx, CURLOPT_FOLLOWLOCATION,FALSE);
    $result = curl_exec($gamerx);
    curl_close($gamerx);
    return $result;
}

if(!isset($_GET['submit']) && !isset($_GET['verify'])){
    echo"
    <form mehod='GET' action='?' >
    <input type='text' name='refer' class='text' placeholder='Enter Your Refer Code !!' required>
    <input type='submit' value='BYPASS' name='submit' class='submit'>
    </form>";
}

if(isset($_GET['submit'])){
    $refer=$_GET['refer'];
    $ip=long2ip(mt_rand());
    function RandomNumber($length){
        $str="";
        for($i=0;$i<$length;$i++){
            $str.=mt_rand(0,9);
        }
        return $str;
    }
    $six=RandomNumber(6);
    $result=gamerx('https://my.cashzy.app/u/update/info','referCode='.$refer.'&dailybonus=YES',['Content-Type: application/x-www-form-urlencoded; charset=UTF-8','Host: my.cashzy.app','Connection: Keep-Alive', 'User-Agent:Dalvik/2.1.0 (Linux; U; Android 8.1.0; vivo 1820 Build/O11019)'],'POST');
    if($status=json_decode($result,true)['status'] =='SUCCESS'){
        print"<center><font color='green'>Daily Bonus Claimed Successfully !!</font></center>";
    }
    else
    {print"<center><font color='red'>$result</font></center>";
    }
}
?>