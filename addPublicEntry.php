<?php
     /**
      * This function can be used to check the sanity of variables
      *
      * @access private
      *
      * @param string $type  The type of variable can be bool, float, numeric, string, array, or object
      * @param string $string The variable name you would like to check
      * @param string $length The maximum length of the variable
      *
      * return bool
      */

    function sanityCheck($string, $type, $length){

      // assign the type
      $type = 'is_'.$type;

      if(!$type($string))
      {
        return FALSE;
      }
      // now we see if there is anything in the string
      elseif(empty($string))
      {
        return FALSE;
      }
      // then we check how long the string is
      elseif(strlen($string) > $length)
      {
        return FALSE;
      }
      else
      {
        // if all is well, we return TRUE
        return TRUE;
      }
    }
    function checkEmail($email){
      return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
    }
    
    header("Content-Type: text/html");
    
    if(isset($_POST['addRecord']))
    {
      $BLOCK = $_POST["inputBlock"];
      $LOT = $_POST["inputLot"];
      $WARD = $_POST["inputWard"];
      $ADDRNUM = $_POST["inputAddrnum"];
      $STREET = $_POST["inputStreet"];
      $ZIP = $_POST["inputZip"];
      $BOARDED = $_POST["inputBoarded"];
      $SPOST = $_POST["inputSign"];
      $PDESC = $_POST["inputDescription"];
      $LCOMMENT = $_POST["inputComments"];
      $image = $_FILES['image'];
      $CHECKPASS=true;
    }
    /*else
    {
      $inc_id = $_REQUEST['ownerid'];
      
      ini_set('display_errors',1);
      error_reporting(E_ALL);

      session_start();
      
      $sql=mysqli_connect("local","pytools","patersonDB","paterson");
      
      
      if(mysqli_connect_errno($sql))
      {
        print("<tr>
              <td>Failed to connect to MySQL: " . mysqli_connect_error() . ";</td>
              
            </tr>");
      }
      else
      {
        $query=mysqli_query($sql, "
          SELECT * 
          FROM OWNERS
          WHERE OWNERID = ".$inc_id."
        ");
        $rowtot = 0;
        while($row=mysqli_fetch_assoc($query)){
          $FNAME=$row["FNAME"];
          $MNAME=$row["MNAME"];
          $LNAME=$row["LNAME"];
          $SOCIAL=$row["SOCIAL"];
          $ADDRESS=$row["ADDRESS"];
          $CITY=$row["CITY"];
          $STATE=$row["STATE"];
          $ZIP=$row["ZIP"];
          $HPHONE=$row["HPHONE"];
          $CPHONE=$row["CPHONE"];
          $DOB=$row["DOB"];
          $EMAIL=$row["EMAIL"];
          $rowtot++;
          $FNameErr="";
          $EmailErr="";
          $DOBErr="";
        }
        if ( $rowtot == 0){
          //header('HTTP/1.0 404 Not Found');
          echo "Add Error Messge";
        }
      }
    }
    */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Abandoned Properties in Paterson</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-switch.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="#">Abandoned Property List</a>
        </div>
          
        <div class="navbar-collapse pull-right">
          <form class="navbar-form" role="form">
            
            <div class="button-group">
             
              <div class="dropdown-menu pull-right">
              
              </div>
            </div>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <br><br><br>
    


    <!-- Main  -->
    

    <div class="container-fluid">
      <div class="row">
        
        <br><br><br>
        <br>
        <a href="index.html">Go back... </a>  
      </div>  



      <div class="row">
          <form action="upload9.php" method="post" id='login' class="form-horizontal" enctype="multipart/form-data" role="form">

           <div class="col-xs-6 col-xs-offset-3">
            
              <div class="form-group">
                <label for="inputBlock" class="col-sm-3 control-label">Block</label>
                <div class="col-sm-9">
                  <input  class="form-control" id="inputBlock" inpt type="text" placeholder="Block">
                </div>
              </div>

              <div class="form-group">
                <label for="inputLot" class="col-sm-3 control-label">Lot</label>
                <div class="col-sm-9">
                    <input  class="form-control" id="inputLot" placeholder="Lot">
                  </div>
              </div>

              <div class="form-group">
                <label for="inputWard" class="col-sm-3 control-label">Ward</label>
                <div class="col-sm-9">
                  <input class="form-control" id="inputWard" placeholder="Ward">
                </div>
              </div>

               <div class="form-group">
                <label for="inputAddrnum" class="col-sm-3 control-label">Address Number</label>
                <div class="col-sm-9">
                  <input class="form-control" id="inputAddrnum" placeholder="Address number">
                </div>
              </div>

              <div class="form-group">
                <label for="inputStreet" class="col-sm-3 control-label">Street</label>
                <div class="col-sm-9">
                  <input class="form-control" id="inputStreet" placeholder="Street">
                </div>
              </div>

              <div class="form-group">
                <label for="inputZip" class="col-sm-3 control-label">Zip code</label>
                <div class="col-sm-9">
                  <input  class="form-control" id="inputZip" placeholder="Zip Code">
                </div>
              </div>

              <div class="form-group">
                <label for="inputBoarded" class="col-sm-3 control-label">Boarded</label>
                <div class="col-sm-9">
                    <div class="btn-group btn-toggle"> 
                      <button class="btn btn-default">YES</button>
                      <button class="btn btn-primary active">NO</button>
                    </div>
                </div>
              </div>
                     
              <div class="form-group">
                <label for="inputSign" class="col-sm-3 control-label">Sign Posted</label>
                <div class="col-sm-9">
                  <div class="btn-group btn-toggle"> 
                    <button class="btn btn-default">YES</button>
                    <button class="btn btn-primary active">NO</button>
                  </div>
                </div>
              </div>
                
              <div class="form-group">
                <label for="inputDescription" class="col-sm-3 control-label">Property Description</label>
                <div class="col-sm-9">
                  <input class="form-control" id="inputDescription" placeholder="Property Description">
                </div>
              </div>

              <div class="form-group">
                <label for="inputComments" class="col-sm-3 control-label">Comments</label>
                <div class="col-sm-9">
                  <input  class="form-control" id="inputComments" placeholder="Comments...">
                </div>
              </div>
             
               <p>File 
                <input type="file" name="image"> 
              <p>

              <div>
                <button  value="Send" class="btn btn-primary" type="submit" id="submit">Continue</button>
                <input type='hidden' name='addRecord' value='1'>
                <br><br>
              </div>

             

            </div>
          </form><!--form collapse-->
      </div>    
    </div>

      <a>
      <ul class="nav">
      <li class="contact "><a href="contact.php">Contact Us</a></li>
      </ul></a>     


      
      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-switch.js"></script>

    
  </body>
</html>
