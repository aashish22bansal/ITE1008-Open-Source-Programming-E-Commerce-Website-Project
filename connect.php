<?php
$ProductID=filter_input(INPUT_POST,'PID');
$Pname=filter_input(INPUT_POST,'Pname');
$Pdesc=filter_input(INPUT_POST,'Pdesc');
$UnitPrice=filter_input(INPUT_POST,'UnitPrice');
$Category=filter_input(INPUT_POST,'Category');
$Discount=filter_input(INPUT_POST,'Discount');
$UnitsOrd=filter_input(INPUT_POST,'UnitsOrd');
$UnitsStock=filter_input(INPUT_POST,'UnitsStock');
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="ecommerce";
$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
    die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
    $sql="INSERT INTO product (ProductID,ProductName,ProductDescription,UnitPrice,Category_,Discount,UnitsOnOrder,UnitsInStock) values ('$ProductID','$Pname','$Pdesc','$UnitPrice','$Category','$Discount','$UnitsOrd','$UnitsStock')";
    if($conn->query($sql)){
        echo "New record is inserted";
    }
    else{
        echo "Error".$sql."<br>".$conn->error;
    }
    $conn->close();
}
?>