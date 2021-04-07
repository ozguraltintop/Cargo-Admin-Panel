<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {
        padding: 0;
        margin: 0;
        background: #1abc81;
    }
    .middle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .input {
        width: 60px;
        height: 60px;
        background: none;
        outline: none;
        border-radius: 50px;
        border: 4px solid white;
        box-sizing: border-box;
        transition: width 0.2s ease-in-out,
        border-radius 0.8s ease-in-out,
        padding 0.2s ease-in-out;
        transition-delay: 0.4s;
        color: white;
        font-size: 20px;
    }
    .inclicked {
        width: 360px;
        border-radius: 0;
        padding: 0 15px;
        padding-right: 40px;
    }
    .btn {
        position: absolute;
        width: 60px;
        height: 60px;
        top: 0;
        right: 0;
        box-sizing: border-box;
        background: none;
        border: none;
        outline: none;
        cursor: pointer;
    }
    .btn::before {
        content: "";
        width: 4px;
        height: 25px;
        background: white;
        position: absolute;
        transform: rotate(-45deg);
        bottom: -16px;
        right: -6px;
        transform: 0.3s;
    }
    .close::before, .close::after {
        content: "";
        width: 4px;
        height: 34px;
        background: white;
        position: absolute;
        bottom: 12px;
        right: 28px;
    }
    .close::before {
        transform: rotate(-45deg);
    }
    .close::after {
        transform: rotate(45deg);
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

 $(".btn").on("click",function(){
 $(".input").toggleClass("inclicked");
$(".btn").toggleClass("close")
        })
</script>

</head>
<body>

    <div class="middle">
        <form class="search-box" method="post" action="sonuc.php">
            <input type="text" class="input" name="search">
            <button type="button" class="btn" name="button"></button>
        </form>
        <br><br><br><br><br>
        
    </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(".btn").on("click",function(){
            $(".input").toggleClass("inclicked");
            $(".btn").toggleClass("close")
        })
    </script>

</body>
</html>