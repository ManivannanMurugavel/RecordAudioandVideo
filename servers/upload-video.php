<?php
 
if(isset($_FILES["audiovideo"])){
    // Define a name for the file
    $fileName = "myaudiovideo.webm";

    // In this case the current directory of the PHP script
    $uploadDirectory = './'. $fileName;
    
    // Move the file to your server
    if (!move_uploaded_file($_FILES["audiovideo"]["tmp_name"], $uploadDirectory)) {
        echo("Couldn't upload video !");
    }
    else{
    	echo("File Moved");
    }
}
elseif(isset($_FILES["audio"])){
    // Define a name for the file
    $fileName = "myaudio.webm";

    // In this case the current directory of the PHP script
    $uploadDirectory = './'. $fileName;
    
    // Move the file to your server
    if (!move_uploaded_file($_FILES["audio"]["tmp_name"], $uploadDirectory)) {
        echo("Couldn't upload video !");
    }
    else{
    	echo("File Moved");
    }
}
elseif(isset($_FILES["video"])){
    // Define a name for the file
    $fileName = "myvideo.webm";

    // In this case the current directory of the PHP script
    $uploadDirectory = './'. $fileName;
    
    // Move the file to your server
    if (!move_uploaded_file($_FILES["video"]["tmp_name"], $uploadDirectory)) {
        echo("Couldn't upload video !");
    }
    else{
    	echo("File Moved");
    }
}
elseif(isset($_FILES["stream"])){
    // Define a name for the file
    $fileName = $_POST["name"];

    // In this case the current directory of the PHP script
    $uploadDirectory = './'. $fileName;
    
    // Move the file to your server
    if (!move_uploaded_file($_FILES["stream"]["tmp_name"], $uploadDirectory)) {
        echo("Couldn't upload video !");
    }
    else{
    	echo("Success");
    }
}
else{
    echo "No file uploaded";
}
 
?>