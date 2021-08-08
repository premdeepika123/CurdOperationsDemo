<?php



class Users extends CI_Controller{


public function show($user_id)
{

// $this->load->model('user_model');

$data['results']= $this->user_model->get_users($user_id,'deepika');

// $data['welcome']="Welcome to my page";

$this->load->view('user_view',$data);

}

public function insert()
{
	$username='mony';
	$password='123';


$this->user_model->create_users(
['username'=>$username,
'password'=>$password]);

}

public function update()
{
	$id=3;
	$username='mony';
	$password='1234';

$this->user_model->update_users(
['username'=>$username,
'password'=>$password],$id);
}

public function delete()
{
	$id=3;
	$this->user_model->delete_users($id);

}
}




?>