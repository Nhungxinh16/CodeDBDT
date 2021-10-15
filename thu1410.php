<! doctype html>
<html>
<đầu lang ="en">
<meta charset = "utf-8" >
<title> Tải lên tệp Ajax bằng jQuery và PHP </title>
<link rel = "stylesheet" href = "style.css" type = "text / css" />

<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" toàn vẹn = "sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va + PmSTsz / K68vbdEjh4u" crossorigin = "vô danh" >
</head>
<body>
<div class = "container" >
<div class = "row" >
<div class="col-md-8">
<h1> <a href= "#" target= "_blank"> <img src = "logo.png" width = "80px" /> Tải lên tệp Ajax bằng Cơ sở dữ liệu MySql </a> </h1>
<hr> 
<form id = "form" action = "ajaxupload.php" method = "post" enctype = "Multiart / form-data" >
<div class = "form-group" >
<label for = "name" > NAME </label>
<input type = "text" class = "form-control" id = "name" name="name" placeholder="Enter name" required />
</div>
<div class = "form-group" >
<label for = "email" > EMAIL </label>
<input type = "email" class = "form-control" id = "email" name = "email" placeholder = "Nhập email" bắt buộc />
</div>
<input id = "uploadImage" type = "file" accept = "image / *" name = "image" />
<div id = "preview" > <img src = "đệ.png" /> </div> <br>
<input class = "btn btn-success" type = "submit" value = "Tải lên" >
</form>
<div id = "err" > </div>
<hr>
<p> <a href= "https://www.cloudways.com" target= "_blank"> www.Cloudways.com </a> </p>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script>
<script type = "text / javascript" src = "myupload.js" > </script>
</body> </html>