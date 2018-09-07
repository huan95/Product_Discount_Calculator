<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Product_Description = $_POST["Product_Description"];
    $Price = $_POST["Price"];
    $Discount_Percent = $_POST["Discount_Percent"];

    $Discount_Amount = $Price * $Discount_Percent * 0.1;
    $Discount_Price = $Price - $Discount_Amount;
}

?>
<html>
<head>
<body>
<form>
    <style type="text/css">
        .login {
            height: 200px;
            width: 300px;
            margin: 0;
            padding: 10px;
            border: 3px red solid;
            border-radius: 15px;
        }

        .login input {
            padding: 5px;
            margin: 5px
        }
    </style>
<div class="login" style="margin-left: 500px; text-align: left">
    <p style="color: green"><b>Product description: </b><?php echo $Product_Description?></p>
    <p style="color: green"><b>Price: </b><?php echo $Price ?> </p>
    <P style="color: green"><b>Discount Percent: </b><?php echo $Discount_Percent?></P>
    <P style="color: green"><b>Discount Amount: </b><?php echo $Discount_Amount?></P>
    <P style="color: green"><b>Discount Price: </b><?php echo $Discount_Price?></P>
</div>
</form>
</body>
</head>
</html>
