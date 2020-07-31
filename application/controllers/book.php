<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class book extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('book_model');
		$ketqua = $this->book_model->getallBooks();
		$ketqua = array('mangketqua' =>$ketqua);
		//truyen du lieu sang cho view
		$this->load->view('book_view', $ketqua);
	}
	public function editBook($idnhan)
	{
		$this->load->model('book_model');
		$ketqua=$this->book_model->getBookbyID($idnhan);
		//bien du lieu thanh mang 
		$ketqua= array('dulieukq' => $ketqua );
		$this->load->view('editbook_view',$ketqua);
	}
	public function deleteBook($idnhan)
	{
		$this->load->model('book_model');
		//var_dump($this->book_model->deleteUserByID($idnhan));
		if($this->book_model->deleteUserByID($idnhan)){
			$this->load->view('del_thanhcong');
		}
		else 
		{
			echo "Xoá không thành công !";
		}

	}
	public function getfile($dir,$tentruong)
	{
		    // xu ly file va anh 
			$target_dir = $dir;
			$target_file = $target_dir . basename($_FILES[$tentruong]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			  $check = getimagesize($_FILES[$tentruong]["tmp_name"]);
			  if($check !== false) {
			    //echo "File is an image - " . $check["mime"] . ".";
			    $uploadOk = 1;
			  } else {
			    //echo "File is not an image.";
			    $uploadOk = 0;
			  }
			}

			// Check if file already exists
			if (file_exists($target_file)) {
			  //echo "Xin lỗi file bạn thêm đã bị trùng.";
			  $uploadOk = 0;
			}

			// Check file size
			if ($_FILES[$tentruong]["size"] > 50000000) {
			  //echo "File có dung lượng quá lớn !.";
			  $uploadOk = 0;
			}

			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			  //echo "Chỉ up file JPG, JPEG, PNG & GIF .";
			  $uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			  //echo "Chưa được upload.";
			// if everything is ok, try to upload file
			} else {
			  if (move_uploaded_file($_FILES[$tentruong]["tmp_name"], $target_file)) {
			    //echo "The file ". basename( $_FILES["anhbia"]["name"]). " has been uploaded.";
			  } else {
			    //echo "Sorry, there was an error uploading your file.";
			  }
			}
			$link  = "http://[::1]/ebook/".$target_dir.$_FILES[$tentruong]["name"]; 
			return $link;
	}
	public function updateBook()
	{
		//lay du lieu tu view editbook_view du lieu lad gi 
		$uid= $this->input->post('umasach');
		$uten = $this->input->post('uten');
		$udes = $this->input->post('umota');
		$uprice =$this->input->post('ugia');
		$udanhmuc=$this->input->post('udanhmuc');
		//lay lai link anh de gan vao csdl 
		$uanhbiatemp = $this->getfile("uploads/","uanhbia");
		if($uanhbiatemp){
			$uanhbia = $this->input->post('anhbiacu');

			//$uanhbia= $uanhbiatemp;
		}
		else {
			//$uanhbia = $this->input->post('anhbiacu');
			$uanhbia= $uanhbiatemp;
		}
		//$uanhbia = $this->input->post('uanhbia');
		$ugia = $this->input->post('ugia');
		$udanhmuc  = $this->input->post('udanhmuc');
		//xu ly update lai file sach
		$ufileebooktemp = $this->getfile("uploadsebook/","ufileebook");
		if($ufileebooktemp){
				$ufileebook = $this->input->post('fileebookcu');
		}
		else {
		
			$ufileebook= $ufileebooktemp;

		}
		$this->load->model('book_model');
		//id,$title,$des,$image,$price,$file,$catID
		if( $this->book_model->updatebyID($uid,$uten,$udes,$uanhbia,$uprice,$ufileebook,$udanhmuc))
		{	

		    $this->index();
			// echo "<pre>" ;
			// echo $uid ; 
			// echo "<pre>" ;
			// echo $uten ;
			// echo "<pre>" ;
			// echo $udes ;
			// echo "<pre>" ;
			// echo $uanhbia;
			// echo "<pre>" ;
			// echo $uprice;
			// echo "<pre>" ;
			// echo $ufileebook;
			// echo "<pre>" ;
			// echo $udanhmuc;
		
			

		}else {
			echo "Không Thành Công !!!";
		}

	}
	
	
	public function addbook()
	{
		//lay du lieu tu view  
		$tensach = $this->input->post('ten'); 
		$mota = $this->input->post('mota');
		$gia = $this->input->post('gia');
		$danhmucsach = $this->input->post('danhmuc');	
		//lay anh bia sách
		$tentruong="anhbia";
		$dir="uploads/";
		$anhbiasach = $this->getfile($dir,$tentruong);
		//lay anh bia sách truyền thẳng
		$fileebook = $this->getfile("uploadsebook/","fileebook");
		$this->load->model('book_model');	
			//public function addBookM($tensach,$mota,$anhbia,$price,$file,$danhmuc)
			if($this->book_model->addBookM($tensach,$mota,$anhbiasach,$gia,$fileebook,$danhmucsach)){
				$this->load->view('insert_viewthanhcong');

			}else 
			{
				echo "Không Thành Công!";

			}	
	}
	

}

/* End of file book.php */
/* Location: ./application/controllers/book.php */