<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
    <style>
        .main
        {
            display: grid;
            grid-template-columns:50% 50%;
            grid-template-rows: 10% 90% 10% 10%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           
            overflow:hidden;
           
        }
             
        #d1
        {
           position: relative;
           
           top: 170px;
           right: 200%;
           height: 200px;
           width: 200px;

           animation: mymove 5s forwards;
         
         


}

@keyframes mymove {
  0% {right: 100%;}
  100% {right:25%;}
}
@keyframes moves {
    from {left:210%}
    to{left: 120%;}
    
}
#id2
{
    position: relative;
    top: -20%;
    left: 210%;
    animation: moves 5s forwards;
    font-family: 'Jost', sans-serif;
    
    width: 300px;
    height: 335px;
    border-radius: 18px;
    background-image: linear-gradient(180deg,#a7cf41,#b6da7d);
    
	        box-shadow: 1px 10px 20px #000;
          

    
}
h1,h2
{
  font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-optical-sizing: auto;
  font-style: normal;
}
           
body
{
    text-align: center;
    
    
}
#n1,#n2
{
    border-radius: 4px;
    size: 10px;
    
	width: 60%;
	height: 10px;
	background: #e0dede;

	margin: 10px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;

}
#n3
{

  width:  auto;
  min-width:  100px;
  border-radius:  24px; 
  text-align:  center; 
  padding: 15px;
  margin-top:  5px; 
  background: #e0dede;
  color: black; 
  font-size:  14px;
  margin-left:  auto; 
  font-weight:  500; 
  box-shadow:  0px 2px 6px -1px rgba(0,0,0,.13); 
  border:  none;
  transition:  all .3s ease; 
  outline: 0; 
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  letter-spacing: 1px;
   position:relative;
  top:-10px;
  &:hover {
    transform:  translateY(-3px);
    box-shadow:  0 2px 6px -1px rgba(.65);
    &:active {
      transform:  scale(.99);
    }
  }
}
body {
  background-image: url('Picsart_24-03-23_13-15-40-204.jpg');
  animation: bg 5s linear infinite; /* Animation for looping */
  background-position: 27% 140%; /* Initial background position */
  background-size: cover; /* Make the background image cover the entire body */
  background-repeat: repeat-x; /* Repeat the background image horizontally */
  background-color: rgba(255, 255, 255, 0.2); /* Optional: Add a background color with transparency */

}

@keyframes bg {
  from {
    background-position: 50% 140%; /* Start position */
  }
  to {
    background-position: 200% 140%; /* End position */
  }
}
a
{
  text-decoration: none; 
  color: black; 
  letter-spacing: 1x;  
  text-shadow: 0.5px 1px 0.5px black;

}
#n{
  background-color: #a7cf41; grid-column: 1 /span 2; height: 100px; width: 200% ;
  

}
    </style>
</head>
<body >
    <form action="Dconnection.php" method="POST" class="main"  >
        <div style="background-color: #a7cf41; grid-column: 1 /span 2; height: 85px; "> <h1 style="position: relative; right: 350px; letter-spacing: 1.2px;   text-shadow: 0.5px 0.5px 0.5px black; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Delivary boy login </h1></div>

        <div style="grid-column: 1 span 2;">
        <div id="d1">
            <img src="./scotter-gif (1).gif" >
        </div>


      <div  id="id2" >

    <h2 style="font-size: large ; padding-top: 10px; font-size: 2.3em; padding-top: 40px; letter-spacing: 1.2px; text-shadow: 0.5px 0.5px 0.5px black; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Login</h2>

    <input type="text" name="us" id="n1" placeholder="username" style= "font-size: 15px;">
    <h2>

    <input type="password" name="pass" id="n2" placeholder="password" style= "font-size: 15px;"><br><br>
    <input type="submit" id="n3">
    
    <br><br>

    
    </div>
      <div id="n">
    <div style="text-decoration: none; color: black; letter-spacing: 1x;  text-shadow: 0.5px 1px 0.5px;  padding:10px;"><a href="admin.php" > <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; position:relative; top:-5px">Click here to admin login<h2> </a></div>
   </div>
          
      
</form>

    

</body>
</html>