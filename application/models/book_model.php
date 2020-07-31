<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class book_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function addBookM($tensach,$mota,$anhbia,$price,$file,$danhmuc)
	{
		$dulieu= array(
			'title' => $tensach, 
			'des' => $mota, 
			'image' => $anhbia, 
			'price' => $price, 
			'file' => $file, 
			'catID' => $danhmuc 
		);
		$this->db->insert('books', $dulieu);
		return $this->db->insert_id();
	}
	public function getallBooks()
	{
		$this->db->select('*');
		$this->db->order_by('ID', 'asc');
		$dulieu = $this->db->get('books');
		$dulieu  = $dulieu->result_array();
		return $dulieu;
		
	}
	public function deleteUserByID($id)
	{
		$this->db->where('ID', $id);
		return $this->db->delete('books');
	}
	public function getBookbyID($key)
	{
		$this->db->select('*');
		//truy xuat du lieu theo ID nhan tu view
		$this->db->where('id', $key);
		$dulieu = $this->db->get('books');
		$dulieu = $dulieu->result_array(); 
		return $dulieu;
	}
	//id,$title,$des,$image,$price,$file,$catID
	public function updatebyID($id,$title,$des,$image,$price,$file,$catID)
	{
		//dong goi du lieu  
		$dulieu = array(
			'ID' => $id,
			'title' => $title, 
			'des' => $des, 
			'image' => $image, 
			'price' => $price, 
			'file' => $file, 
			'catID' => $catID,
		);
		$this->db->where('ID', $id);
		return $this->db->update('books',$dulieu);
	}

}

/* End of file book_model.php */
/* Location: ./application/models/book_model.php */