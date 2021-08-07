<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body style="background-color:#ddc8ae;">
 <?php
  include 'navbar1.php';
  ?>

    </body>
    <section class="contact" id="Contact%20Us" style="margin-top: 70px;">
        <h4 class="text-center " style="text-shadow:2px 2px 2px gray; color:black; font-size:60px;">Contact Us</h4>
        <div class="form" >
            <input class="form-input" type=" text" name="name " id ="name" placeholder="Enter Your name">
            <input class="form-input" type=" phone" name="phone " id ="phone" placeholder="Enter Your Phone">
            <input class="form-input" type=" email" name="email" id ="email" placeholder="Enter Your Email">
            <textarea class="form-input" name="text" id="text" cols="30" rows="10" placeholder="Ellaborate your concern"></textarea>
            <button class="btn btn-dark">Submit</button>
        </div>
    </section>
    
    <style>
 body {
  background-size:cover ;
  }
.contact{
    height: 300px;
}
.text-center{
    text-align: center;
    padding: 40px;
}
.form{
    max-width: 500px;
    margin:38px auto;
}
.btn-dark{
    color:  white;
    border: 0px solid grey;
    font-size: 35px;
    padding: 8px 20px;
    margin: 7px 3px;
    border-radius: 8px;
    cursor: pointer;
}
.form-input{
    margin: 14px 0;
    padding: 5px 3px;
    width: 100%;
    font-size: 18px;
    border: 0px solid grey;
    border-radius: 6px;
}

    </style>