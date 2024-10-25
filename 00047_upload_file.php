<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data" >
    Upload My File:    <input type="file" name="myfile" id="myfile">
    <input type="submit" name="upload" id="UPLOAD">
    <?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_FILES["myfile"]) && $_FILES["myfile"]["error"]==0){

            $file_name = $_FILES["myfile"]["name"];
            $file_type = $_FILES["myfile"]["type"];

            $file_size = $_FILES["myfile"]["size"];
            $file_tmp = $_FILES["myfile"]["tmp_name"];

            echo $file_name."<br>";
            echo $file_type."<br>";
            echo $file_size."<br>";
            echo $file_tmp."<br>";

            if(!is_dir("B.tech-AB")){
                mkdir("B.tech-AB",0755);
                echo "directory is created";
            }


            $allowed_file = ["jpg","png","jpeg"];
            $myfile_type = pathinfo("$file_name",PATHINFO_EXTENSION);
            if(in_array($myfile_type,$allowed_file)){
                echo "file type is supported";
            }else{
                echo "file type is not supported";
            }

            if($file_size<100){
            if(move_uploaded_file($file_tmpname."B.tech-AB/".$file_name)){
                echo "my file is moved successfully";
            }else{
                echo "my file is not moved";
            }
            
        }
    }
    }
    ?>
    </form>
</body>
</html>