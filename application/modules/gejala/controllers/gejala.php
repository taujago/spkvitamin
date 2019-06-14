<?php
class gejala extends master_controller {
	function __construct(){
		parent::__construct();
		$this->load->model("coremodel","cm");
		 
		$this->controller = get_class($this);

	}

	function index(){
		// echo "fuckkk.."; exit;
		$data_array = array();


		$this->db->select('*')->from('gejala');
		$res = $this->db->get();
		$data_array['record'] = $res; 
		 
		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_title("DATA GEJALA");
		$this->set_content($content);
		$this->render();
	}

	function save(){


		$post = $this->input->post();
		// show_array($post); exit;

		$this->load->library('form_validation');
 		$this->form_validation->set_rules('kode','Kode','required');
 		$this->form_validation->set_rules('gejala','Gejala','required');
 		
		 
		$this->form_validation->set_message('required', ' %s Harus diisi ');
		
 		$this->form_validation->set_error_delimiters('', '<br>');

 		if($this->form_validation->run() == TRUE ) { 
 			unset($post['id']);

 			$arr_vitamin = isset($post['id_vitamin'])?$post['id_vitamin']:array();

 			unset($post['id_vitamin']);

 			$res = $this->db->insert("gejala",$post);
 			$id_gejala = $this->db->insert_id();

 			if($res){

 				$this->db->where("id_gejala",$id_gejala);
 				$this->db->delete("pengetahuan");

 				foreach($arr_vitamin as $id_vitamin):
 					$arr_pengetahuan = array(

 						"id_vitamin" => $id_vitamin,
 						"id_gejala" => $id_gejala
 					);
 					$this->db->insert("pengetahuan",$arr_pengetahuan);
 				endforeach;


 				$ret = array("error"=>false,"message"=>"Data gejala berhasil disimpan");
 			}
 			else {
 				$ret = array("error"=>true,"message"=>"Data gagal disimpan".mysql_error());
 			}
 		}
 		else {
 			$ret = array("error"=>true,"message"=>validation_errors());
 		}

 		echo json_encode($ret);
	}
 


 function update(){


		$post = $this->input->post();

		$this->load->library('form_validation');
 		$this->form_validation->set_rules('kode','Kode','required');
 		$this->form_validation->set_rules('gejala','Gejala','required');
 		
		 
		$this->form_validation->set_message('required', ' %s Harus diisi ');
		
 		$this->form_validation->set_error_delimiters('', '<br>');

 		if($this->form_validation->run() == TRUE ) { 
 			// unset($post['id']);


 			$arr_vitamin = isset($post['id_vitamin'])?$post['id_vitamin']:array();
 			unset($post['id_vitamin']);


 			$this->db->where("id",$post['id']);
 			$res = $this->db->update("gejala",$post);

 			if($res){

 				$this->db->where("id_gejala",$post['id']);
 				$this->db->delete("pengetahuan");

 				foreach($arr_vitamin as $id_vitamin):
 					$arr_pengetahuan = array(

 						"id_vitamin" => $id_vitamin,
 						"id_gejala" => $post['id']
 					);
 					$this->db->insert("pengetahuan",$arr_pengetahuan);
 				endforeach;



 				$ret = array("error"=>false,"message"=>"Data gejala berhasil diupdate");
 			}
 			else {
 				$ret = array("error"=>true,"message"=>"Data gagal diupdate".mysql_error());
 			}
 		}
 		else {
 			$ret = array("error"=>true,"message"=>validation_errors());
 		}

 		echo json_encode($ret);
	}




function hapus($id) {

	$this->db->where("id",$id);
	$res = $this->db->delete("gejala");
	if($res){

		$this->db->where("id_gejala",$id);
		$this->db->delete("pengetahuan");


		$ret = array("error"=>false,"message"=>"Data harga berhasil dihapus");
	}
	else {
		$ret = array("error"=>true,"message"=>"Data gagal dihapus".mysql_error());

	}
	echo json_encode($ret);
}


function get_vitamin($id_gejala){

	$this->db->where("id_gejala",$id_gejala);
	$res = $this->db->get("pengetahuan");
	$arr_pengetahuan = array();
	foreach($res->result() as $row) : 
		$arr_pengetahuan[] = $row->id_vitamin;
	endforeach;

	// show_array($arr_pengetahuan);exit;

	$this->db->order_by("kode");
	$res  = $this->db->get("vitamin");

	foreach($res->result() as $row_vitamin): 
		$selected = ( in_array($row_vitamin->id, $arr_pengetahuan) )?"selected":"";
		echo "<option value=$row_vitamin->id $selected>$row_vitamin->kode $row_vitamin->vitamin</option>";

		// $arr[] = array("id"=>$row_vitamin->id,"text"=>"$row_vitamin->kode $row_vitamin->vitamin");
	endforeach;

	// $ret = array("result"=>$arr);

	// echo json_encode($arr);



}


function get_vitamin_all(){

	 

	// show_array($arr_pengetahuan);exit;

	$this->db->order_by("kode");
	$res  = $this->db->get("vitamin");

	foreach($res->result() as $row_vitamin): 
		 
		echo "<option value=$row_vitamin->id >$row_vitamin->kode $row_vitamin->vitamin</option>";

		// $arr[] = array("id"=>$row_vitamin->id,"text"=>"$row_vitamin->kode $row_vitamin->vitamin");
	endforeach;

	// $ret = array("result"=>$arr);

	// echo json_encode($arr);



}


}

?>
