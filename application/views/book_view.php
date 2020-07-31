<!DOCTYPE html>
<html lang="en"><head>
	<title>Giao dien hien thi danh sách đầu sách </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<!-- <script type="text/javascript" src="vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="1.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
 	<link rel="stylesheet" href="1.css"> -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	
	
</head>
<body >
 	<div class="container">
 		<div class="text-xs-center">
 			<hr>
 			<h3 class="display-4" align="center"><strong>Danh Sách Các Đầu Sách</strong></h3>
 			<hr>
 		</div>
 	</div>
 	<div class="container">
 		<div class="card-columns">
 			<div class= "card-deck-wrapper">
		    <div class="card-desk">
			<?php foreach ($mangketqua as $value): ?>
				
			
 			  <div class="card">
 			    <img src="<?php echo $value['image'] ?>"  alt="Anh BIA" width="250" height="250"> 
 			    <div class="card-body">
 			      <h5 class="card-title" name="title" align="center"><strong style="color:#0000cc"><?php echo $value['title'] ?></strong></h5>
 			      <p  class="card-text" name="des" align="center">Mô tả: <?php echo $value['des'] ?></p>
 			      <p  class="card-text" name="price" align="center" >Giá sách: <strong><?php echo $value['price'] ?></strong></p>
 			     
 			      <p  class="card-text" name="danhmuc" align="center" >Mã Danh Mục: <strong><?php echo $value['catID']?></strong></p>
	      	      <table align="center">
	      	      		<td>
	      	      		     <p  class="card-text tai" name="file" align="center" ><a href="<?php echo $value['file'] ?>" class="btn btn-info"> <i class="fa fa-arrow-down" style="color:white"></i></a></p>
	      	      		     
	      	      		</td>
	      	      		<td>
	      	      			
	      	      		</td>
	      	      		<td>
	      	      			 <p  class="card-text sua" align="text-xs-right"><a href="http://localhost/ebook/index.php/book/editBook/<?php echo $value['ID'] ?>" class="btn btn-warning"> <i class="glyphicon glyphicon-pencil" style="color: white"></i></a></p>
	      	      		</td>

	      	      		<td>
	      	      			 <p  class="card-text xoa"><a href="http://localhost/ebook/index.php/book/deleteBook/<?php echo $value['ID'] ?>" class="btn btn-danger"> <i class="fa fa-times"></i></a></p>
	      	      		</td>
	      	      </table>
 			    </div>
			  </div> <!-- end card -->
			
			<?php endforeach ?>
			</div> 
 			</div>
 	    </div> <!-- end card colum  -->
 	    <div class="container">
 		<div class="text-xs-center">
 			<br>
 			<h3 class="display-4" align="center"><strong>Thêm mới đầu sách</strong></h3>
 			<hr>
 		</div>
 	</div>
 	    
  		<form method="post" enctype="multipart/form-data" action="http://localhost/ebook/index.php/book/addbook" >
  		<div class="form-group row">
			<label for="ten" class="col-sm-4 form-control-label text-xs-right">Tên Sách:</label>
			<div class="col-sm-6">
				<input type="text" name="ten" class="form-control" id="ten" placeholder="Nhập tên sách" >
			</div>
		 </div>
		 <div class="form-group row">
			<label for="mota" class="col-sm-4 form-control-label text-xs-right">Mô tả:</label>
			<div class="col-sm-6">
				<input type="textarea" name="mota" class="form-control" id="ten" placeholder="Nhập mô tả" >
			</div>
		 </div>

  		 <div class="form-group row">
			<label for="anh" class="col-sm-4 form-control-label text-xs-right">Ảnh bìa sách</label>
			<div class="col-sm-6">
				<input type="file" name="anhbia" class="form-control" id="anhbia" placeholder="Upload Ảnh Bìa" >
			</div>
		 </div>
		 <div class="form-group row">
			<label for="gia" class="col-sm-4 form-control-label text-xs-right">Giá sách:</label>
			<div class="col-sm-6">
				<input type="text" name="gia" class="form-control" id="gia" placeholder="Nhập giá sách" >
			</div>
		 </div>
		 <div class="form-group row">
   	 	 <label for="dm" class="col-sm-4">Danh Mục:</label>
    	  <div class="col-sm-6" >
    	  	<select class="col-sm-5" name="danhmuc" id="danhmuc" >
      		<option value="1"><strong>1.VĂN HỌC</strong></option>
      		<option value="2"><strong>2.TOÁN HỌC</strong></option>
      		<option value="3"><strong>3.TIN HỌC</strong></option>
      		<option value="4"><strong>3.KỸ NĂNG SỐNG</strong></option>
    	  </select>
    	  </div>
    	 </div>
    	 <div class="form-group row">
			<label for="fileebook" class="col-sm-4 form-control-label text-xs-right">Tải lên file ebook:</label>
			<div class="col-sm-6">
				<input type="file" name="fileebook" class="form-control" id="anhbia" placeholder="Tải file ebook" >
			</div>
		 </div>
    	 <div class="form-group row text-xs-center" align="">
			<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-success">Thêm Mới</button>
					<button type="reset" class="btn btn-danger">Nhập lại</button>	
			</div>
		 </div>
  		</form>
		

		
 	   
 	</div>
</body>
</html>