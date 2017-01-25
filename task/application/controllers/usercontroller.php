 <?php
class usercontroller extends CI_controller
{
  function __construct(){

     parent:: __construct();


  }

  public function index(){

    $this->login();
  }
  public function login(){

    $this->load->view('loginform');
  }
  
  public function login_validation()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('email','Email','required|trim|callback_validate_credentuals');
    $this ->form_validation->set_rules('password','password','required|md5|trim');
    if ($this->form_validation->run()) {
      $email=$this->input->post('email');
      $this->load->model('user_model');
      $resulte=$this->user_model->get_user_data($email);
      $data = array('email' =>$this->input->post('email') , 'is_logged_in'=>1,
                    'username'=>$resulte->user_name,
                    'admin'=>$resulte->admin);
      $this->session->set_userdata($data);
      if($resulte->admin == 1)
               redirect('admincontroller/index');
            else
               redirect('formalcontroller/index');
    
    }
    else {
      $this->load->view('loginform');
    }


  }

  public function validate_credentuals()
  {
    $this->load->library('form_validation');
      $this->load->model('user_model');
      if ($this->user_model->user_can_login())
       {
        return true;
      }
      else{
        $this->form_validation->set_message('validate_credentuals','incorrect email/password try again');
        return false;
      }
  }
  public function logout(){
  $this->session->sess_destroy();
  redirect ('usercontroller/login');
}

}
?>