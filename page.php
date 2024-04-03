<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          body, html {
  margin: 0;
  padding: 0;
  height: 100%;
}
    .main
        {
            display: grid;
            height: 100%;
            width: 100%;
            grid-template-columns:33.3% 33.3% 33.3%;
            grid-template-rows: 20% 70% 10%;
        
           
           
           

        }
        .d1
        {
            position: relative; top: 100px; left: 150px;
            height: 600px;
            width: 600px;
        }

        .img1
        {
            position: relative;
            overflow :hidden ;
            width:300px;
            height: 300px;
            overflow: visible;
        }
.img1::before
{
    content: '';
    width: 50px;
    height: 200px;
    position:absolute;
    background-color: white;
    transform: skewX(-40deg);
    animation: sm 2s linear forwards infinite;
    /* animation: name duration timing-function delay iteration-count direction fill-mode; */
    opacity: 0.5;
    
}
@keyframes sm {
    0%{left: -100px;}
    100%{left:300px;} 
} 
.img2::before
{
    content: '';
    width: 50px;
    height: 300px;
    position:absolute;
    background-color: white;
    transform: skewX(-40deg);
    animation: sm 2s linear forwards infinite;
    /* animation: name duration timing-function delay iteration-count direction fill-mode; */
    opacity: 0.5;
    
}
@keyframes sm {
    0%{left: -100px;}
    100%{left:300px;} 
} 
.d{
    position: relative;
    top: 75px;
    left: 100px;
    

}
.img3
{
    position: relative;
    top: -120px;
    right: 100px;
}
.img3::before
{
    content: '';
    width: 50px;
    height: 400px;
    position:absolute;
    background-color: white;
    transform: skewX(-40deg);
    animation: sm 2s linear forwards infinite;
    /* animation: name duration timing-function delay iteration-count direction fill-mode; */
    opacity: 0.5;
    
}
@keyframes sm {
    0%{left: -100px;}
    100%{left:450px;} 
} 
a{
    text-decoration: none;
    color: black;
    letter-spacing: 1.2px; 
      text-shadow: 0.5px 0.5px 0.5px black;
      font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
     opacity: 0.8;
}
    </style>
</head>
<body style="overflow:hidden">
<div class="main">
<div style="background-color: #a7cf41; grid-column: 1 /span 3; height: 85px; width:110% "> </div>


  
   <div  class="d1 d"> <a href="nonmilk.php"><h1 style="position: relative; top: -75px; left: 60px; text-decoration: none; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">NON MILK</h1>  <div class="img2"><img src="7314273_3625294.jpg" height="250px" width="350px" ></div> </a> </div> 
   <div  class="d1"> <a href="milk.php"><h1 style="position: relative; top: -100px; left: 50px; text-decoration: none; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">MILK</h1>  <div class="img1"><img src="milk-product.png" height="200px" width="200px" class="img2"></div> </a> </div> 
     <div  class="d1"> <a href="allorders.php"><h1 style="position: relative; top: -96px;  left: -10px; text-decoration: none ;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">ALL ORDERS </h1>  <div class="img3"><img src="WhatsApp Image 2024-03-26 at 18.04.26_b74fa719.jpg" height="370px" width="370px" class="img2"></div> </a> </div> 
<div style="background-color: #a7cf41; grid-column: 1 /span 3; height: 100%; width:110%"> </div>
</body>
</html>