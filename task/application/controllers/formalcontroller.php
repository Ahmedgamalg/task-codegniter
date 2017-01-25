<?php
class formalcontroller extends CI_controller
{
  function __construct(){

     parent:: __construct();
     $this->load->model('prodect_model','prodect');
     $this->load->library('pagination');
  }
  public function index(){
  	if ($this->session->userdata('is_logged_in')&& $this->session->userdata('admin')==0) {
  		

       $total_data = $this->prodect->get_all_count();
        $content_per_page = 6; 
        $this->data['total_data'] = ceil($total_data->tol_records/$content_per_page);
        $this->load-> view('formal', $this->data, FALSE);

        
  	}
  	else {
    	redirect ('usercontroller/index');
    }
  }

  
public function load_more()
    {
        $group_no = $this->input->post('group_no');
        $content_per_page = 6;
        $start = ceil($group_no * $content_per_page);
        $all_content = $this->prodect->get_all_content($start,$content_per_page);
        if(isset($all_content) && is_array($all_content) && count($all_content)) : 
            foreach ($all_content as $key => $content) :
                 echo '<li>'.$content->prodect_name.'</li>';
                 echo '<p>'.$content->prodect_disc.'</p>';  ?>
                <img style='width: 318px; height: 249px;' src="http://localhost:80/task/img/<?php echo $content->image_prodect;?>" alt="">
                <?php
            endforeach;                                
        endif; 
    }

}

?>