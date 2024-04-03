<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .d1
      {
          float: left;
          padding: 15px;
          position: relative;
          left: 70px;
          top: 5px;
      }
      .c1
      {
        display:none ;
      }
      .c ,h1,h2,h3,h4
      {
        text-decoration: none;
    color: black;
    letter-spacing: 1.2px; 
      text-shadow: 0.5px 0.5px 0.5px rgb(233, 229, 229);
      font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
     opacity: 0.8;
     position: relative;
     
      }
      input
      {
        position: relative;
        left: -10px;
        margin-right: 20px;
      }
      .btn{
        background-color: #a7cf41;
      }
     .btn:hover
     {
      
       color: aliceblue;
       box-shadow: black 1px 2px 2px 3px;
     }
     body
{
  margin: 0;
  padding: 0;
  
  /* make it look decent enough */
  background: #232323;
  color: #cdcdcd;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

#menuToggle
{
  display: block;
  position: relative;
  top: 50px;
  left: 50px;
  
  z-index: 1;
  
  -webkit-user-select: none;
  user-select: none;
}

#menuToggle a
{
  text-decoration: none;
  color: #232323;
  
  transition: color 0.3s ease;
}

#menuToggle a:hover
{
  color: tomato;
}


#menuToggle input
{
  display: block;
  width: 40px;
  height: 32px;
  position: absolute;
  top: -7px;
  left: -5px;
  
  cursor: pointer;
  
  opacity: 0; /* hide this */
  z-index: 2; /* and place it over the hamburger */
  
  -webkit-touch-callout: none;
}

/*
 * Just a quick hamburger
 */
#menuToggle span
{
  display: block;
  width: 33px;
  height: 4px;
  margin-bottom: 5px;
  position: relative;
  top: 5px;
  right: 3px;
  
  background: aliceblue;
  border-radius: 10px;
  
  z-index: 1;
  
  transform-origin: 4px 0px;
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              background-image 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              opacity 0.55s ease;
}

#menuToggle span:first-child
{
  transform-origin: 0% 0%;
}

#menuToggle span:nth-last-child(2)
{
  transform-origin: 0% 100%;
}

/* 
 * Transform all the slices of hamburger
 * into a crossmark.
 */
#menuToggle input:checked ~ span
{
  opacity: 1;
  transform: rotate(45deg) translate(-2px, -1px);
  background: #232323;
}

/*
 * But let's hide the middle one.
 */
#menuToggle input:checked ~ span:nth-last-child(3)
{
  opacity: 0;
  transform: rotate(0deg) scale(0.2, 0.2);
}

/*
 * Ohyeah and the last one should go the other direction
 */
#menuToggle input:checked ~ span:nth-last-child(2)
{
  transform: rotate(-45deg) translate(0, -1px);
}

/*
 * Make this absolute positioned
 * at the top left of the screen
 */
#menu
{
  position: absolute;
  width: 400px;

  margin: -100px 0 0 -50px;
  padding: 0px;
  padding-top: 127px;
  top: -50px;
  background-color: #e8ecde;
  list-style-type: none;
  -webkit-font-smoothing: antialiased;

  /* to stop flickering of text in safari */
  transform-origin: 0% 0%;
  transform: translate(-100%, 0);
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
}

#menu li
{
  padding: 10px 0;
  font-size: 22px;
  border-color: #232323;
  padding-left: 20px;
  background-color: rgba(246, 239, 239, 0.1);
  box-shadow: #232323 0px 1px 1px;
  border-radius: 10px;
}

/*
 * And let's slide it in from the left
 */
#menuToggle input:checked ~ ul
{
  transform: none;
}
      .d1
      {
          float: left;
          padding: 15px;
      }
      .c1
      {
        display:none ;
      }
      .c ,h1,h2,h3,h4,h5
      {
        text-decoration: none;
    color: black;
    letter-spacing: 1.2px; 
      text-shadow: 0.5px 0.5px 0.5px rgb(233, 229, 229);
      font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
     opacity: 0.9;
     position: relative;

     
      }
      input
      {
        position: relative;
        left: -10px;
        margin-right: 20px;
      }
      .btn{
        background-color: #a7cf41;
      }
     .btn:hover
     {
      
       color: aliceblue;
       box-shadow: black 1px 2px 2px 3px;
     }

      </style>
      
</head>

            
         

    
      
<body style="display: grid; width: 100%; overflow-x: hidden; background-color: #e8ecde;">
  <nav role="navigation">
       <div id="menuToggle">
         <!--
         A fake / hidden checkbox is used as click reciever,
         so you can use the :checked selector on it.
         -->
         <input type="checkbox" />
         
         <!--
         Some spans to act as a hamburger.
         
         They are acting like a real hamburger,
         not that McDonalds stuff.
         -->
         <span></span>
         <span></span>
         <span></span>
         
         <!--
         Too bad the menu has to be inside of the button
         but hey, it's pure CSS magic.
         -->
         <ul id="menu">
           <div class="panel-heading c" style="height: 80px; background-image: linear-gradient(to right , #a7cf41, #92b635); position: relative;"></div><br>
           <a href="page.php"><li>Home</li></a>
           <a href="#"><li>About</li></a>
           <a href="#"><li>Info</li></a>
           <a href="#"><li>Contact</li></a>
           <a href="boy.php"><li>Log Out</li></a>
         </ul>
       </div>
     </nav>
     <fieldset>
<form method="POST" action="important.php" class="panel-content">
<input name="nonmilk" value="nonmilk" class="c1">
<div class="panel panel-default" style="background-color:#e8ecde; height: 450px;" >

     <div class="panel-heading c" style="height: 80px; background-image: linear-gradient(to right , #a7cf41, #64801e);"><h2 style="color: aliceblue; position: relative; left: 160px ;top:20px ; opacity: 9;">Cauli flower</h2></div>

    <form  >
    
        <div style="position: relative; left: 30px;top:20px; background-color:#a7cf41 ; width: 100px ; border-radius: 8px; height: 30px;">

        <h5 style="position: relative ; left: 20px;">qty : 3<h5></div>

   <div class ="d1"> <img src="cauli1.jpg" height="300px" width="300px" alt="tomoto" style="position: relative; left: 40px;"></div>
   
  <div class ="d1" style="display: flex;  align-items: center; height: 200px; position:relative ;left:260px   " >
    <div>  <h3>deliverd</h3> 
    <input type="text" name="del" style="  border: 2px solid #379b49; ;outline: none; border-radius: 8px;" > <img src="icons8-success-30.png" alt="" style="position: relative; right: 30px; top: -2px;"> </div>
    <div class ="d1"><h3>missing</h3>
    <input type="text" name="inputValue" style="  border: 2px solid #12b7ee; ;outline: none; border-radius: 8px;"" > <img src="icons8-question-48.png" style="position: relative; right: 30px; top: -2px; height: 35px;"></div>
    <div class ="d1"><h3>damaged</h3>
    <input type="text" name="dam" style="  border: 2px solid #c3171a; ;outline: none; border-radius: 8px;"" > <img src="icons8-close-48.png" alt="" style="position: relative; right: 30px; top: -2px; height: 35px;"> </div>
    <br>
    <div style="bottom: 20px;">
<div style="position: relative; top: 130px;">
     <input type="submit" style="border-radius: 10px; border-width: 4px; width: 100px; height: 50px; " class="btn"></div>
</div>

</div>
 </form>
 <div>
</fieldset>


<fieldset>
<form method="POST" action="important.php" class="panel-content">
<input name="nonmilk" value="nonmilk" class="c1">
  <div class="panel panel-default" style="background-color: #e8ecde; height: 450px;" >
  
       <div class="panel-heading c" style="height: 80px; background-image: linear-gradient(to right , #a7cf41, #64801e);"><h2 style="color: aliceblue; position: relative; left: 50px ;top:20px ; opacity: 9;">Tender Coconut</h2></div>
  
      <form >
      
          <div style="position: relative; left: 30px;top:20px; background-color:#a7cf41 ; width: 100px ; border-radius: 8px; height: 30px;">
  
          <h5 style="position: relative ; left: 20px;">qty : 4<h5></div>
  
     <div class ="d1"> <img src="coconut1.jpg" height="300px" width="300px" alt="tomoto" style="position: relative; left: 40px;">
  </div>
    <div class ="d1" style="display: flex;  align-items: center; height: 200px;  position:relative ;left:260px   " >
      <div>  <h3>deliverd</h3> 
      <input type="text" name="del" style="  border: 2px solid #379b49; ;outline: none; border-radius: 8px;" > <img src="icons8-success-30.png" alt="" style="position: relative; right: 30px; top: -2px;"> </div>
      <div class ="d1"><h3>missing</h3>
      <input type="text" name="inputValue" style="  border: 2px solid #12b7ee; ;outline: none; border-radius: 8px;"" > <img src="icons8-question-48.png" style="position: relative; right: 30px; top: -2px; height: 35px;"></div>
      <div class ="d1"><h3>damaged</h3>
      <input type="text" name="dam" style="  border: 2px solid #c3171a; ;outline: none; border-radius: 8px;"" > <img src="icons8-close-48.png" alt="" style="position: relative; right: 30px; top: -2px; height: 35px;"> </div>
      <br>
      <div style="bottom: 20px;">
  <div style="position: relative; top: 130px;">
       <input type="submit" style="border-radius: 10px; border-width: 4px; width: 100px; height: 50px; " class="btn"></div>
  </div>
  
  </div>
   </form>
   <div>
   
  
  </fieldset>
  <fieldset>
<form method="POST" action="important.php" class="panel-content">
  <input name="nonmilk" value="nonmilk" class="c1">
    <div class="panel panel-default" style="background-color: #e8ecde; height: 450px;" >
    
         <div class="panel-heading c" style="height: 80px; background-image: linear-gradient(to right , #a7cf41, #64801e);"><h2 style="color: aliceblue; position: relative; left: 50px ;top:20px ; opacity: 9;">Apple</h2></div>
    
        <form >
        
            <div style="position: relative; left: 30px;top:20px; background-color:#a7cf41 ; width: 100px ; border-radius: 8px; height: 30px;">
    
            <h5 style="position: relative ; left: 20px;">qty : 6<h5></div>
    
       <div class ="d1"> <img src="apple1.jpg" height="300px" width="300px" alt="tomoto" style="position: relative; left: 40px;">
    </div>
      <div class ="d1" style="display: flex;  align-items: center; height: 200px;  position:relative ;left:260px   " >
        <div>  <h3>deliverd</h3> 
        <input type="text" name="del" style="  border: 2px solid #379b49; ;outline: none; border-radius: 8px;" > <img src="icons8-success-30.png" alt="" style="position: relative; right: 30px; top: -2px;"> </div>
        <div class ="d1"><h3>missing</h3>
        <input type="text" name="inputValue" style="  border: 2px solid #12b7ee; ;outline: none; border-radius: 8px;"" > <img src="icons8-question-48.png" style="position: relative; right: 30px; top: -2px; height: 35px;"></div>
        <div class ="d1"><h3>damaged</h3>
        <input type="text" name="dam" style="  border: 2px solid #c3171a; ;outline: none; border-radius: 8px;"" > <img src="icons8-close-48.png" alt="" style="position: relative; right: 30px; top: -2px; height: 35px;"> </div>
        <br>
        <div style="bottom: 20px;">
    <div style="position: relative; top: 130px;">
         <input type="submit" style="border-radius: 10px; border-width: 4px; width: 100px; height: 50px; " class="btn"></div>
    </div>
    
    </div>
     </form>
     <div>
     
    
    </fieldset>
    <fieldset>
<form method="POST" action="important.php" class="panel-content">
    <input name="nonmilk" value="nonmilk" class="c1">
      <div class="panel panel-default" style="background-color: #e8ecde; height: 450px;" >
      
           <div class="panel-heading c" style="height: 80px; background-image: linear-gradient(to right , #a7cf41, #64801e);"><h2 style="color: aliceblue; position: relative; left: 50px ;top:20px ; opacity: 9;">Banana</h2></div>
      
          <form >
          
              <div style="position: relative; left: 30px;top:20px; background-color:#a7cf41 ; width: 100px ; border-radius: 8px; height: 30px;">
      
              <h5 style="position: relative ; left: 20px;">qty : 5<h5></div>
      
         <div class ="d1"> <img src="banana1.jpg" height="300px" width="300px" alt="tomoto" style="position: relative; left: 40px;">
      </div>
        <div class ="d1" style="display: flex;  align-items: center; height: 200px;   position:relative ;left:260px  " >
          <div>  <h3>deliverd</h3> 
          <input type="text" name="del" style="  border: 2px solid #379b49; ;outline: none; border-radius: 8px;" > <img src="icons8-success-30.png" alt="" style="position: relative; right: 30px; top: -2px;"> </div>
          <div class ="d1"><h3>missing</h3>
          <input type="text" name="inputValue" style="  border: 2px solid #12b7ee; ;outline: none; border-radius: 8px;"" > <img src="icons8-question-48.png" style="position: relative; right: 30px; top: -2px; height: 35px;"></div>
          <div class ="d1"><h3>damaged</h3>
          <input type="text" name="dam" style="  border: 2px solid #c3171a; ;outline: none; border-radius: 8px;"" > <img src="icons8-close-48.png" alt="" style="position: relative; right: 30px; top: -2px; height: 35px;"> </div>
          <br>
          <div style="bottom: 20px;">
      <div style="position: relative; top: 130px;">
           <input type="submit" style="border-radius: 10px; border-width: 4px; width: 100px; height: 50px; " class="btn"></div>
      </div>
      
      </div>
       </form>
       <div>
       
      
      </fieldset>
      <fieldset>
<form method="POST" action="important.php" class="panel-content">
      <input name="nonmilk" value="nonmilk" class="c1">
        <div class="panel panel-default" style="background-color: #e8ecde; height: 450px;" >
        
             <div class="panel-heading c" style="height: 80px; background-image: linear-gradient(to right , #a7cf41, #64801e);"><h2 style="color: aliceblue; position: relative; left: 50px ;top:20px ; opacity: 9;">Egg</h2></div>
        
            <form >
            
                <div style="position: relative; left: 30px;top:20px; background-color:#a7cf41 ; width: 100px ; border-radius: 8px; height: 30px;">
        
                <h5 style="position: relative ; left: 20px;">qty : 3<h5></div>
        
           <div class ="d1"> <img src="egg1.jpg" height="300px" width="300px" alt="tomoto" style="position: relative; left: 40px;">
        </div>
          <div class ="d1" style="display: flex;  align-items: center; height: 200px; position:relative ;left:260px    " >
            <div>  <h3>deliverd</h3> 
            <input type="text" name="del" style="  border: 2px solid #379b49; ;outline: none; border-radius: 8px;" > <img src="icons8-success-30.png" alt="" style="position: relative; right: 30px; top: -2px;"> </div>
            <div class ="d1"><h3>missing</h3>
            <input type="text" name="inputValue" style="  border: 2px solid #12b7ee; ;outline: none; border-radius: 8px;"" > <img src="icons8-question-48.png" style="position: relative; right: 30px; top: -2px; height: 35px;"></div>
            <div class ="d1"><h3>damaged</h3>
            <input type="text" name="dam" style="  border: 2px solid #c3171a; ;outline: none; border-radius: 8px;"" > <img src="icons8-close-48.png" alt="" style="position: relative; right: 30px; top: -2px; height: 35px;"> </div>
            <br>
            <div style="bottom: 20px;">
        <div style="position: relative; top: 130px;">
             <input type="submit" style="border-radius: 10px; border-width: 4px; width: 100px; height: 50px; " class="btn"></div>
        </div>
        
        </div>
         </form>
         <div>
         
        
        </fieldset>
        <fieldset>
<form method="POST" action="important.php" class="panel-content">
        <input name="nonmilk" value="nonmilk" class="c1">
          <div class="panel panel-default" style="background-color: #e8ecde; height: 450px;" >
          
               <div class="panel-heading c" style="height: 80px; background-image: linear-gradient(to right , #a7cf41, #64801e);"><h2 style="color: aliceblue; position: relative; left: 50px ;top:20px ; opacity: 9;">Crossiant</h2></div>
          
              <form  >
              
                  <div style="position: relative; left: 30px;top:20px; background-color:#a7cf41 ; width: 100px ; border-radius: 8px; height: 30px;">
          
                  <h5 style="position: relative ; left: 20px;">qty : 9<h5></div>
          
             <div class ="d1"> <img src="trat1.jpg" height="300px" width="330px" alt="tomoto" style="position: relative; left: 40px;">
          </div>
            <div class ="d1" style="display: flex;  align-items: center; height: 200px;   position:relative ;left:260px  " >
              <div>  <h3>deliverd</h3> 
              <input type="text" name="del" style="  border: 2px solid #379b49; ;outline: none; border-radius: 8px;" > <img src="icons8-success-30.png" alt="" style="position: relative; right: 30px; top: -2px;"> </div>
              <div class ="d1"><h3>missing</h3>
              <input type="text" name="inputValue" style="  border: 2px solid #12b7ee; ;outline: none; border-radius: 8px;"" > <img src="icons8-question-48.png" style="position: relative; right: 30px; top: -2px; height: 35px;"></div>
              <div class ="d1"><h3>damaged</h3>
              <input type="text" name="dam" style="  border: 2px solid #c3171a; ;outline: none; border-radius: 8px;"" > <img src="icons8-close-48.png" alt="" style="position: relative; right: 30px; top: -2px; height: 35px;"> </div>
              <br>
              <div style="bottom: 20px;">
          <div style="position: relative; top: 130px;">
               <input type="submit" style="border-radius: 10px; border-width: 4px; width: 100px; height: 50px; " class="btn"></div>
          </div>
          
          </div>
           </form>
           <div>
           
          
          </fieldset>
          <fieldset>
<form method="POST" action="important.php" class="panel-content">
          <input name="nonmilk" value="nonmilk" class="c1">
            <div class="panel panel-default" style="background-color: #e8ecde; height: 450px;" >
            
                 <div class="panel-heading c" style="height: 80px; background-image: linear-gradient(to right , #a7cf41, #64801e);"><h2 style="color: aliceblue; position: relative; left: 50px ;top:20px ; opacity: 9;"> Oreo</h2></div>
            
                <form>
                
                    <div style="position: relative; left: 30px;top:20px; background-color:#a7cf41 ; width: 100px ; border-radius: 8px; height: 30px;">
            
                    <h5 style="position: relative ; left: 20px;">qty : 3<h5></div>
            
               <div class ="d1"> <img src="oreo1.jpg" height="300px" width="300px" alt="tomoto" style="position: relative; left: 40px;">
            </div>
              <div class ="d1" style="display: flex;  align-items: center; height: 200px;   position:relative ;left:260px  " >
                <div>  <h3>deliverd</h3> 
                <input type="text" name="del" style="  border: 2px solid #379b49; ;outline: none; border-radius: 8px;" > <img src="icons8-success-30.png" alt="" style="position: relative; right: 30px; top: -2px;"> </div>
                <div class ="d1"><h3>missing</h3>
                <input type="text" name="inputValue" style="  border: 2px solid #12b7ee; ;outline: none; border-radius: 8px;"" > <img src="icons8-question-48.png" style="position: relative; right: 30px; top: -2px; height: 35px;"></div>
                <div class ="d1"><h3>damaged</h3>
                <input type="text" name="dam" style="  border: 2px solid #c3171a; ;outline: none; border-radius: 8px;"" > <img src="icons8-close-48.png" alt="" style="position: relative; right: 30px; top: -2px; height: 35px;"> </div>
                <br>
                <div style="bottom: 20px;">
            <div style="position: relative; top: 130px;">
                 <input type="submit" style="border-radius: 10px; border-width: 4px; width: 100px; height: 50px; " class="btn"></div>
            </div>
            
            </div>
             </form>
             <div>
             
            
            </fieldset>
</body>
</html>





