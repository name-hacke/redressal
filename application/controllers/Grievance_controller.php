<?php
/**
 *
 */
class Grievance_controller extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');

  }
  public function index()
  {

    if($_SERVER["REQUEST_METHOD"]=='POST')
    {
      $this->form_validation->set_rules('aff','aff','trim|xss_clean|required',array('required'=>'Please Choose Your Affilation'));
       $this->form_validation->set_rules('name','Name','trim|xss_clean|min_length[6]',array('min_length'=>'Valid RollNo is required'));
      $this->form_validation->set_rules('name','Name','trim|required|xss_clean|regex_match[/^[a-zA-Z ]+$/]',array('required'=>'Please Enter Your Name','regex_match'=>'Invalid Name'));
        $this->form_validation->set_rules('fname','fname','trim|required|xss_clean|regex_match[/^[a-zA-Z ]+$/]',array('required'=>'Please Enter Your Fathers name','regex_match'=>'Invalid Name'));
        $this->form_validation->set_rules('dob','fname','trim|required|xss_clean',array('required'=>'Your Dob is required'));



    if($this->form_validation->run()==True)
      {
      redirect('grievance/gform','refresh');
      }
    }

    $this->load->view('Grievance_view');
  }
  public function view1()
  {


    $this->load->view('Grievance_view1');
  }
}
/**
 *
 */






 ?>
