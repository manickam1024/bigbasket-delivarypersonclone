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
            grid-template-columns:50% 50%;
            grid-template-rows: 20% 70% 10%;
        
           
           
           
        }
          .s1
          
        {
            flex-shrink: 0;
	margin: 20px;
	height: calc(150px + 6vw);
	width: calc(150px + 6vw);
	background-origin: border-box;
	background-clip: content-box, border-box;
	background-size: cover;
    border-radius: 30%;
    height: 100px; width: 400px;  
    background-image:  linear-gradient(180deg,#a7cf41,#b6da7d); 
    position: relative; top:140px;
    align-items: center;
    letter-spacing: 1.2px;
     text-shadow: 0.5px 0.5px 0.5px black;
     font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-optical-sizing: auto;
  font-style: normal;

	
}
          

        </style>
</head>
<body >
    <div class="main">
<div style="background-color: #a7cf41; grid-column: 1 /span 2; height: 85px; "> <h1 style="position: relative; right: 350px; letter-spacing: 1.2px;   text-shadow: 0.5px 0.5px 1.5px black;"></h1></div>

    <div  class="s1" style="text-align: center; position: relative; left:300px ;top:20px;  ">
        <a href="adminboydetials.php" style="text-decoration: none; color: black;" >  
        <h1>Start Delivary</h1>
    </a> </div>
    <div style="position: relative; top: 140px;" >  <img src="img.jpg" height="300px" width="300px" alt=""> </div>


    <div style="background-color: #a7cf41; grid-column: 1 /span 2; height: 100%; "> <h1 style="position: relative; right: 350px; letter-spacing: 1.2px;   text-shadow: 0.5px 0.5px 1.5px black;"></h1></div>
    </div></body>
</body>
</html>