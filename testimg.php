<?php
// Start a session for error reporting
//connection to my DB
$host = "localhost";
$user = "root";
$host_password = "" ;
$db = "test" ;


    // Call our connection file
$sql=mysqli_connect($host,$user, $host_password, $db);



$insert="INSERT INTO PROPERTY (BLOCK, LOT, WARD, ADDRNUM, STREET, ZIP, BOARDED, SPOST, PDESC, LCOMMENT) VALUES ('$_POST[inputBlock]', '$_POST[inputLot]', '$_POST[inputWard]', '$_POST[inputAddrNum]' , '$_POST[inputStreet]','$_POST[inputZip]','$_POST[inputBoarded]','$_POST[inputSign]','$_POST[inputDescription]','$_POST[inputComments]')";

if (!mysqli_query($sql,$insert))
  {
  die('Error: ' . mysqli_error($sql));
  }


 //---------------image handling--------------------------------------------
  // Get our POSTed variables
 $image = $_FILES['image'];


    //check if there is a image
if ($image['size'] != "0" ){
    echo "in image handling";
    // Check to see if the type of file uploaded is a valid image type
    function is_valid_type($file)
    {
        // This is an array that holds all the valid image MIME types
        $valid_types = array("image/jpg", "image/jpeg", "image/bmp", "image/gif" , "image/png" );

        if (in_array($file['type'], $valid_types))
            return 1;
        return 0;
    }

    // Just a short function that prints out the contents of an array in a manner that's easy to read
    // I used this function during debugging but it serves no purpose at run time for this example
    function showContents($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    // This variable is the path to the image folder where all the images are going to be stored
    // Note that there is a trailing forward slash
    $TARGET_PATH = "images/";

    // Sanitize our inputs

    $image['name'] = mysql_real_escape_string($image['name']);

    // Build our target path full string.  This is where the file will be moved do
    // i.e.  images/picture.jpg
    $TARGET_PATH .= $image['name'];

    showContents($image);

    // Check to make sure that our file is actually an image
    // You check the file type instead of the extension because the extension can easily be faked
    if (!is_valid_type($image))
    {
        $_SESSION['error'] = "You must upload a jpeg, gif, png or bmp";
     //   header("Location: index.html");
        exit;
    }

    // Check to see if a file with that name already exists
    // You could get past filename problems by appending a timestamp to the filename and then continuing
    if (file_exists($TARGET_PATH))
    {
        $_SESSION['error'] = "A file with that name already exists";
      //  header("Location: index.html");
        exit;
    }

    // Lets attempt to move the file from its temporary directory to its new home
    if (move_uploaded_file($image['tmp_name'], $TARGET_PATH))
    {
        // NOTE: This is where a lot of people make mistakes.
        // We are *not* putting the image into the database; we are putting a reference to the file's location on the server
        $insertImage = "INSERT INTO PROPERTY (PHOTOLOC) VALUES ( '" . $image['name'] . "')";
        
    if (!mysqli_query($sql,$insertImage))
      {
      die('Error: ' . mysqli_error($sql));
      }

       // header("Location: testimg.php");
        exit;
    }
    else
    {
        // A common cause of file moving failures is because of bad permissions on the directory attempting to be written to
        // Make sure you chmod the directory to be writeable
        $_SESSION['error'] = "Could not upload file.  Check read/write persmissions on the directory";
       // header("Location: index.html");
        exit;
    }
}
else
{
    echo "no image file";

    

}
//-----------------end image handling----------------------------------

/* close connection */
mysqli_close($sql);
?>
