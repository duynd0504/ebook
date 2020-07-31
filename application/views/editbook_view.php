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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body >
 	<div class="container">
 		<div class="text-xs-center">
 		</div>
 	</div>
 	<div class="container">
 		<div class="row">	
 	    </div> <!-- end card colum  -->
 	    <div class="container">
 		<div class="text-xs-center">
 			<h3 class="display-4" align="center"><strong>Update Book</strong></h3>
 			<hr>
 		</div>
 	</div>
 	    
  		<form method="post" enctype="multipart/form-data" action="http://localhost/ebook/index.php/book/updateBook" >
		<?php foreach ($dulieukq as $value): ?>
		<div class="form-group row">
			<label class="col-sm-4 form-control-label text-xs-right">ID:</label>
			<div class="col-sm-6">
				<input type="text" name="umasach" style="color: red ; border: 0px" value="<?php echo $value['ID']?>" readonly >
			</div>
		 </div>
		<div class="form-group row">
			<label for="uanh" class="col-sm-4 form-control-label text-xs-right">Ảnh bìa cũ:</label>
			<div class="col-sm-6">
				<img height="100" width="100" class="img-fluid" src="<?php echo $value['image'] ?>" ></img>
				<input type="hidden" name="anhbiacu" value="<?php echo $value['image'] ?>">
			</div>
		 </div>
  		<div class="form-group row">
			<label for="uten" class="col-sm-4 form-control-label text-xs-right">Tên Sách:</label>
			<div class="col-sm-6">
				<input type="text" name="uten" class="form-control"  value="<?php echo $value['title']?>">
			</div>
		 </div>
		 <div class="form-group row">
			<label for="mota" class="col-sm-4 form-control-label text-xs-right">Mô tả:</label>
			<div class="col-sm-6">
				<input type="textarea" name="umota" class="form-control"  value="<?php echo $value['des']?>" >
			</div>
		 </div>

  		 <div class="form-group row">
			<label for="anh" class="col-sm-4 form-control-label text-xs-right">Update lại ảnh bìa sách</label>
			<div class="col-sm-6">
				<input type="file" name="uanhbia" class="form-control" placeholder="Upload Ảnh Bìa" >
			</div>
		 </div>
		 <div class="form-group row">
			<label for="gia" class="col-sm-4 form-control-label text-xs-right">Giá sách:</label>
			<div class="col-sm-6">
				<input type="text" name="ugia" class="form-control" id="gia" placeholder="Nhập giá sách" value="<?php echo $value['price']?>" >
			</div>
		 </div>
		 <div class="form-group row">
			<label for="gia" class="col-sm-4 form-control-label text-xs-right">Danh mục cũ:</label>
			<div class="col-sm-6">
				<?php 
				    if( $value['catID'] = 1 ) {
						$tam ="Văn Học";
				    }
				    else if ( $value['catID'] =2 ){
				    	$tam ="Toán Học";  
				    }
				    else if($value['catID'] =3){
				    	$tam="Tin Học";
				    }
				    else if ($value['catID'] =4) {
						$tam="Kỹ Năng Sống";
				    }

				?>
				<lable> <strong><?php echo $value['catID'].".".$tam ?></strong> </lable>
			</div>
		 </div>
		 <div class="form-group row">
   	 	 <label for="dm" class="col-sm-4">Cập nhật danh mục:</label>
    	  <div class="col-sm-6" >
    	  	<select class="col-sm-5" name="udanhmuc" id="udanhmuc" >
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
				<input type="file" name="ufileebook" class="form-control" id="anhbia" placeholder="Tải file ebook" >
					<input type="hidden" name="fileebookcu" value="<?php echo $value['file'] ?>">
			</div>
		 </div>
		 <?php endforeach ?>
		 <div class="form-group row text-xs-center" align="">
			<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-success">LƯU</button>
					<button type="reset" class="btn btn-danger">NHẬP LẠI</button>	
			</div>
		 </div>
  		</form>
		

		
 	   
 	</div>
</body>
</html>