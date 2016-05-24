<?php
$target_dir = "/home/sbadmin/LIBRARY/JINGLES/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$jingleFileType = pathinfo($target_file,PATHINFO_EXTENSION);

echo '
<div style="margin-top: 100px; color: white; width: 100%; text-align: center; font-size: 18px;">';
// Allow certain file formats
if($jingleFileType != "mp3" && $jingleFileType != "aac" && $jingleFileType != "wav") {
    echo "<p> Sorry, only MP3, AAC & WAV files permitted.</p>";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<p>Your Jingle was <strong>not</strong> uploaded.</p>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo  basename( $_FILES["fileToUpload"]["name"]). " UPLOADED! <br /><br />You can now schedule it.";
        shell_exec("sudo /home/sbadmin/jingleUpload.sh");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
echo "</div>";
echo '
<script>
  setTimeout(function() {
    window.location = "./jingles.php";
  }, 3000);
</script>';
//header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
