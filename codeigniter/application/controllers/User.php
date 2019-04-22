<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller{

   
	public function __construct()
	{
		parent :: __construct();
		 $this->load->helper('url');
		$this->load->database();
		$this->load->model('User_model');
		//$this->load->helper(array('form','url'));
		
	}
	public function index()
	{
		$this->load->view('User_form');
	}
	public function User_form()
	{
	//echo "hello".$this->input->post('u_submit');
	//die;
	//if($this->input->post('u_submit'))
	//{
		/*$save=array(
					'username'=> $this->input->post('username'),
					'password'=> $this->input->post('password'),
					//'date'=> $this->input->post('date')
					);
		$this->User_model->saveUser($save);*/
		$username= $this->input->post('username');
		$password= $this->input->post('password');
		//echo "user name".$username;
		//echo "password".$password;
		//die;
		$flg = $this->User_model->saveUser($username,$password);
		if($flg){
				redirect('/User1/homee/');
		}else{
		///
		}

	}
	//}
}
?>
