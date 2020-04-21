<?php
// set folder to upload files
$output_dir = "uploads/";

if(isset($_FILES["myfile"]))
{
    $ret = array();

    $error = $_FILES["myfile"]["error"];

    // upload single file
    if(!is_array($_FILES["myfile"]["name"])) //single file
    {
        $fileName = $_FILES["myfile"]["name"];
        move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
        $ret[]= $fileName;
    }
    else
    {
        // Handle Multiple files
        $fileCount = count($_FILES["myfile"]["name"]);
        for($i=0; $i      $fileCount; $i++)
        {
            $fileName = $_FILES["myfile"]["name"][$i];
            move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName);
            $ret[]= $fileName;
        }
    }
    // output file names as comma seperated strings to display status
    echo json_encode($ret);
}
?>
