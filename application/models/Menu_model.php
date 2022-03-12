<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

	public function getSubMenu(){

		$query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
				 	FROM `user_sub_menu` JOIN `user_menu`
				   	  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`				   	 
				ORDER BY menu_id
				";

		return $this->db->query($query)->result_array();

	}

	public function deleteSubMenuById($id){

		$query = "DELETE FROM user_sub_menu WHERE id = $id";

		$this->db->query($query);


		return $this->db->affected_rows();

	}

	public function getSubMenuById($id){

		$query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
				 	FROM `user_sub_menu` JOIN `user_menu`
				   	  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
				   	  WHERE `user_sub_menu`.`id` = $id 
				   	  ORDER BY menu_id
				";

		return $this->db->query($query)->row_array();

	}

}

/* End of file Menu_model.php */
/* Location: ./application/models/Menu_model.php */

