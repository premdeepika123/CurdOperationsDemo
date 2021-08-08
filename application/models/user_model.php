<?php




class User_model extends CI_Model
{

public function get_users($user_id,$username)
{

// $query=$this->db->query("SELECT * FROM  users");	


$this->db->where(['id'=>$user_id,
				  'username' =>$username	
				
					]);
$query = $this->db->get('users');

return $query->result();

// return $query->num_fields();// it displays the columns count

// return $query->num_rows();// it displays the rows count

}

public function create_users($data){



	$this->db->insert('users',$data);
}

public function update_users($data,$id){

	$this->db->where(['id'=>$id]);

	$this->db->update('users',$data);
}

public function delete_users($id)
{

	$this->db->where(['id'=>$id]);

	$this->db->delete('users');
}





}








?>
