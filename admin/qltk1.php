<?php
include('templates-admin/header.php');
?>
<?php
   $email=$_SESSION['user'];
$sql_1="SELECT * FROM users WHERE email='$email' ";
$query_1=mysqli_query($conn,$sql_1);
if(mysqli_num_rows($query_1)>0){
    $row=mysqli_fetch_assoc($query_1);

}
?>
<img width="200px" src="<?php echo $row['avatar'];?>" alt="" id="anh2">
<form action="" method="POST" enctype="multipart/form-data" id="form_ava">
    <input type="file" name="file_image" >
        <button type="submit" name = "submit">Chọn ảnh</button>
</form>
<div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-4 mt-3">Sửa</p>
                                    <div class="text-center text-danger">
                                        <?php
                                            if(isset($_SESSION['reg_fail'])){
                                                echo $_SESSION['reg_fail'];
                                                unset ($_SESSION['reg_fail']);
                                            }
                                        ?>    
                                    </div>
                                    <form action="process-register.php" METHOD = "POST" class="mx-1 ">
                                        <div class="d-flex flex-row align-items-center mb-3">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="name">Họ và Tên</label>
                                                <input type="text" id="" name="name_user" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-3">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="email" id="email" name="txtemail" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-3">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="pass1">Mật khẩu</label>
                                                <input type="password" id="pass1" name="pass1" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary" name="signup">Chỉnh sửa</button>
                                        </div>
                                    </form>

                                </div>


<?php
include_once('templates-admin/footer.php');
?>