<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Spark City Bank</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body style="background-color:white;">
<?php
  include 'navbar1.php';
?>

	<div class="container" style="margin-top: 149px;">
        <h1 class="text-center pt-4" style="text-shadow:2px 2px 2px gray; color:black; font-size:60px">Transaction History
         </h1>
        
       <br>
       <div class="table-responsive-sm">  
        <table class="table table-hover table-striped table-condensed ">
        <thead class="bg-dark" style="color : white;">
            <tr>
                <th class="text">S.No.</th>
                <th class="text">Sender</th>
                <th class="text">Receiver</th>
                <th class="text">Amount</th>
                <th class="text">Date & Time</th>
                
            </tr>
        </thead>
     <tbody>
        <?php

            include 'config.php';

            $sql ="SELECT * FROM `transaction`";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
            
              
        <?php
            }

        ?> 
        </tbody>
     </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
<style>
 
*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	
}
.text{
    
    text-align: center;

}
h1{
	font-size: 40px;
}
table{
	letter-spacing: 1.2px;
}
td{
	text-align: center;
    background-color:black;
}

@media only screen and (orientation: portrait){
	*{
		letter-spacing: 1px;
	}
} 

</style>
</html>
