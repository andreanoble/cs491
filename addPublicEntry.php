<?php
//variables for mysql

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $block = $_POST["block"];
      $lot = $_POST["lot"];
      $ward = $_POST["ward"];
      $street = $_POST["street"];
      $zipcode = $_POST["zipcode"];
      $boarded = $_POST["boarded"];
      $sign = $_POST["sign"];
      $description = $_POST["description"];
      $comments = $_POST["comments"];

      // TODO: Mysql entry

      //goes to edit page and keeps the back button from resubmitting
      header("Location: editEntry.php");
      exit;
}

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
          <form action="addPublicEntry.php" method="post" class="form-horizontal" role="form">

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
                  <input type="password" class="form-control" id="inputDescription" placeholder="Property Description">
                </div>
              </div>

              <div class="form-group">
                <label for="inputComments" class="col-sm-3 control-label">Comments</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="inputComments" placeholder="Comments...">
                </div>
              </div>
             

              <div>
                <button  value="Send" class="btn btn-primary" type="submit" id="submit">Continue</button>
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
