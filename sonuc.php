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
        top: 120%;
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
       
<?php
  
$search_value=$_POST["search"];
$con=new mysqli("localhost","root","","yapilacaklar_db");
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from musteri where takipno like '%$search_value%'";

        $res=$con->query($sql);

        while($row=$res->fetch_assoc()){
            echo '<b style="color:red">TurkeyCargo Number</b>:  '.$row["takipno"].'<br>';
            echo '<b style="color:red">Name: </b> '.$row["madi"].'<br>';
            echo '<b style="color:red">Surname : </b>  '.$row["msoyadi"].'<br>';
            echo '<b style="color:red">Address:</b>  '.$row["nereye"].'<br>';
            echo '<b style="color:red">Product:</b>  '.$row["neverdi"].'<br>';
            echo '<b style="color:red">Date : </b>  '.$row["tarih"].'<br>';
            echo '<b style="color:blue">Tracking Number : </b>  <a href=https://www.ups.com/track?loc=tr_TR&tracknum='.$row["gercektakipno"].'&requester=WT">  '.$row["gercektakipno"].' </a><br><br><br>';
            

            echo '<a href="deneme.php" style="color:blue">BACK : </a><br><hr>  ';
          
                
            $url = "https://packageradar.com/courier/".$row["firma"]."/tracking/".$row["gercektakipno"];     
            $source = file_get_contents($url);
             
            libxml_use_internal_errors(true);
            $doc = new DOMDocument();
            $doc->loadHTML($source);
            $xpath = new DOMXpath($doc);
             
            $firms = $xpath->query('//*[@id="fragment-checkpoints"]//ul//li');
            
            foreach($firms as $firm)
            {
                $info = $xpath->query('span', $firm);
                echo "Step " . $info->item(0)->textContent . "<br />";
                echo "" . $info->item(1)->textContent . "<br />";
                echo "" . $info->item(2)->textContent . "<hr>";
            }   
        
        }
            
      
          
        }
       
?>
    </div>


</body>
</html>



