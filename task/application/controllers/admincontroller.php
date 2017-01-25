<?php 

class admincontroller extends CI_controller
{
  function __construct(){

     parent:: __construct();
   $this->load->model('prodect_model','prodect');


  }
public function index(){

	if ($this->session->userdata('is_logged_in')&& $this->session->userdata('admin')==1) {
			$data['row']=$this->prodect->getprodect();
             $this->load->view('prodectlist',$data);
		}
    else {
    	redirect ('usercontroller/index');
    }
}

public function addform(){
  if ($this->session->userdata('is_logged_in')&& $this->session->userdata('admin')==1) {
	$this->load->view('addform');}
  else {
      redirect ('usercontroller/index');
    }
}
public function add_prodect(){
	$config['upload_path'] = 'img/'; // path where image will be saved
       $config['allowed_types'] = 'gif|jpg|png|jpeg';
       $this->load->library('upload', $config);
       $this->upload->do_upload('image');
       $data_upload_files=$this->upload->data() ;
       $image = $data_upload_files['file_name']; 

 $data=array('prodect_name'=>$this->input->post('prodect'),
 	          'prodect_disc'=>$this->input->post('disc'),
 	          'image_prodect'=>$image);
 $this->prodect->addprodect($data);
          echo json_encode($data);

 
}
function edit(){
  $id=$this->input->post('id');
	$data=array( 
		         'prodect_name'=>$this->input->post('prodect_name'),
		         'prodect_disc'=>$this->input->post('prodect_disc'));
	$this->prodect->edit_prodect($id,$data);
	redirect('admincontroller/index');

}
public function delete($id){

    $this->db->where('id',$id);
    $this ->db->delete('prodect');
    redirect('admincontroller/index');
  }

}


?>