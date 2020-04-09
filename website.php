
<html>
    <head>
        <title>Book e-ricks here</title>
        <link href="https://fonts.googleapis.com/css?family=Alegreya|Baloo+Chettan+2|Sacramento&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="travel.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    </head>
    <body>
        <img src="IITR logo.jpg" id="img1">
        <div class="home">
            <div id="content">Hey there , facing poblems to find e-rick at R-land?
              <br><br>
                Now, book your e-rick at fixed prices to travel across the campus and 
                even in the town..
            </div>    
        </div>
<div class="second">
    <img src="e-rick.jpg" id="img2">

     
         <form method="post" action="website.php">
           <div class ="form">
               <div id="pickup">
               <label for="location">Pickup: &nbsp;</label>
               <select id="points" required>
                <option value="">--Please choose an option--</option>
                 <option value="ab">Azad Bhawan</option>
                 <option value="cb">Cautley Bhawan</option>
                 <option value="dap">Dept of Archi & Planning</option>
                 <option value="ee">Electrical Department</option>                 
                 <option value="ece">Ec Department</option>
                 <option value="gb">Ganga Bhawan</option>
                 <option value="gob">Govind Bhawan</option>
                 <option value="hos">Hospital</option>
                 <option value="hydro">Hydrology dept</option>
                 <option value="jb">Jawahar Bhawan</option>
                 <option value="kb">Kasturba Bhawan</option>
                 <option value="lhc">Lecture Hall Complex</option>
                 <option value="lib">Library</option>
                 <option value="mac">Multi Activity Centre</option>
                 <option value="me">Mechanical Department</option>
                 <option value="rkb">Radhakrishnan Bhawan</option>
                 <option value="rjb">Rajendra Bhawan</option>
                 <option value="rb">Rajiv Bhawan</option>
                 <option value="ravb">Ravindra Bhawan</option>
                 <option value="sac">Student Activity Centre</option>
                 <option value="sb">Sarojini Bhawan</option>
                 <option value="vk">Vigyan Kunj</option>
               </select>
              </div>
           <div id="drop">Drop: <br/>
               <button onclick="showbox1()">Inside Campus</button>  
               <input type="text" id="box1" class="hide" name="inside"><br>
               <button onclick="showbox2()">Outside Campus</button>&nbsp; &nbsp; 
               <input type="text" id="box2" class="hide" name="outside"><br>

           </div>

           <div id="when">When: &nbsp; <input type="text" required></div>
           <button type="submit" id="button" onclick="after()">Submit</button>
           </div>
        </form>
        <!-- <div id="price1">You need to pay 10Rs wherever u go inside campus..</div> -->
    </div>
    <?php 
         $conn =new mysqli("localhost", "akanksha", "Prakhar2105", "travel");
            
         
         

         if(isset($_POST["outside"]))

        { $destination=$_POST["outside"];
            if($destination!=NULL)
           $sql = "SELECT `Prices` FROM `Rates` WHERE  `Destination`='$destination'";
            $result = mysqli_query($conn,$sql);
             if(mysqli_num_rows($result) > 0)
          { 
              while($row = mysqli_fetch_row ($result))
             { echo "You need to pay". $row[0];}
          }
          
         else{
                echo "<script type= 'text/javascript'>alert('No place found..Please resubmit the form!');</script>";
            }
        
        }
        
        
        if(isset($_POST["outside"]))
      {  $destination1=$_POST["inside"];
          if($destination1!=NULL){
            echo "<script type= 'text/javascript'>alert('You need to pay 10 Rs for going anywhere inside campus.');</script>";
         }
       /*  else{
            echo "<script type= 'text/javascript'>alert('No place found..Please resubmit the form!');</script>";
        }*/


        }
         $conn->close();
     
        
        
        ?>
        <div class="last">
            <div id="con">Made with &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; by Akanksha !</div>
            <div id="heart" >
                <img class="bottom" src="https://i.stack.imgur.com/iBCpb.png" width="90px">
              </div>
        </div>
        
        
 
        <script>
      function showbox1(){
  document.getElementById('box1').className="show";
}

function showbox2(){
  document.getElementById('box2').className="show";
}
        </script>
    </body>
</html>