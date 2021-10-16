<?php
include('../config/constants.php')
?>

<?php
$email=$_SESSION['user'];
if(isset($_POST['submit'])){
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["file_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {

        $check = getimagesize($_FILES["file_image"]["tmp_name"]);
        if($check !== false) {

            $uploadOk = 1;
        } else {

            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file_image"]["tmp_name"], $target_file)) {
          
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $sql="UPDATE users SET avatar='$target_file' WHERE email='$email'";
    $query=mysqli_query($conn,$sql);
    if($query==true){
       echo $target_file;
    }
}
?>
<?php

if(isset($_POST['up-profile'])){
	$hoten=$_POST['txthoten'];
	$email=$_POST['txtemail'];
	$gioitinh=$_POST['txtgioitinh'];
	$diachi=$_POST['txtdiachi'];
	$sdt=$_POST['sdt'];
	$ngaysinh=$_POST['txtngaysinh'];

	//update
	$sql="UPDATE users SET
	name_user='$hoten',
	email='$email',
	gioitinh='$gioitinh',
	diachi='$diachi', 
	sdt='$sdt',
	ngaySinh ='$ngaysinh'
	WHERE email='$email'";

	$query=mysqli_query($conn,$sql);
	if($query==TRUE){
		$_SESSION['profile']="<div class='text-success'>Sửa tài khoản thành công</div>";
		header('location:http://localhost:88/dhtl3/admin/qltk1.php');
	}
	else{
		$_SESSION['profile']="<div class='text-danger'>Sửa tài khoản thất bại</div>";
		header('location:http://localhost:88/dhtl3/admin/qltk1.php');
	}
}
?>