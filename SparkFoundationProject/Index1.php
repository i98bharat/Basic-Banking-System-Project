<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="icon" type="" sizes="32x32" href="https://icons8.com/icon/89820/globe">
        
        <title>Spark City Bank</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body style="background-color:#ddc8ae;">
<div id="container">

    <?php include 'navbar1.php' ?>

<style>
.nav-link:hover {
            text-decoration: underline;
        }
::-webkit-scrollbar {
  width: 20px;
}
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
::-webkit-scrollbar-thumb {
  background: blue; 
  border-radius: 10px;
}
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
</style>
    
    <div class="container-large" style=" height:600px; width: 100%; padding:8% 2% 2% 2%; ">
        
        <div class="row">
            <div class="col" style="margin-left: 5%;">
                <br><br>&nbsp;<p 
                    style="font-size:90px; text-shadow:3px 3px 3px grey; color:#002330; text-align:center;"><b>Welcome to <br> Sparks City
                        Bank</b></p>
            </div>
            <div class="col" style="margin:0% 0% 0% 5%; text-align:center;">
                &nbsp;<img src="Image/super.jpg" alt="" style="width:80%;">
            </div>
        </div>
    </div>

    <img src="Image/bground.png" alt="" style="width:100%; position:absolute; ">
    <center style="margin-bottom: 0px;">
        <div class="container"
            style="backdrop-filter: blur(5px);  padding:20px 0px 20px 0px;"> 
    
         <marquee behavior="scroll" scrollamount="15">
           <h1 style="text-shadow:2px 2px 2px gray; color:black;"><b>Our Facilities</b></h1>
         </marquee>
            <div class="container" style="margin:30px 0px 20px 0px;">
                <div class="row">
                    <div class="col-lg ">
                        <div
                            style="background-color:#002330; color:#ddc8ae; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-praying-hands fa-7x "></i><br><br>
                            <a href="creatuser.php"><button type="button" class="btn btn-outline-light mybtn">Create User</button></a><br>
                            <h6>Here, you can creat users.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:#002330; color:#ddc8ae; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-rupee-sign fa-7x"></i><br><br>
                            <a href="transfermoney.php"><button type="button" class="btn btn-outline-light mybtn">Transfer
                                    Money</button></a><br>
                            <h6>Here, you can send money from your account.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:#002330; color:#ddc8ae; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-comment-alt fa-6x"></i><br><br>
                            <a href="transactionhistory.php"><button type="button" class="btn btn-outline-light mybtn">Transaction History</button></a><br>
                            <h6>Here, you can check the remaining balance in your account.</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </center>
    <div class = "footer" style="color: rgb(235, 230, 230);text-align: center;margin-top: 300px; background-color: #212529;
    width: 100%;padding: 7px;margin-bottom: 0px;height: 11%;position: relative;left: 0;bottom: 0;font-size: 90%;" >
        <p>© 2021 Bharat Soni. All Rights Reserved | Terms and Conditions, "GRIP August Internship"</p>
    </div>


</div>
</body>
</html>