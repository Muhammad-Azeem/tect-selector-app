<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<style>
    .cards {
        width: auto;
        box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        margin: 2px;
        padding: 3px;
        height: 65px;
    }
    .foot {
        left: 0;
        bottom: 0;
        width: auto;
        background-color: #e5e8ea;
        text-align: center;
        padding:2%;
        box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2);
    }
    .head {
        left: 0;
        bottom: 0;
        width: auto;
        background-color: #e5e8ea;

        box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2);
    }
</style>
<body style="background: #EDF2F7">
<div style="margin: 10px">
   <center> <img src="{{asset('images/logo.png')}}" style=" height: 50px;width: 100px;  margin-top: 20px;" alt=""></center>
    <div class="head"  style=" background: white; margin-left: 110px; margin-right:110px; margin-top: 20px; ">
        <br>
        <br>

        <span style="color: black; font-weight: bold">&nbsp;&nbsp; Hi {{$name}},</span> <br><br>
        &nbsp;&nbsp; We have attached the list of recommended products for you.<br><br><br>
        &nbsp;&nbsp;Regards, <br>
        &nbsp;&nbsp;{{env('APP_NAME')}}
        <br>
        <br>
        <br>
    </div>
    <br>
    <br>
    <br>
    <div>
        <p>


        </p>
    </div>

</div>
</body>
</html>
