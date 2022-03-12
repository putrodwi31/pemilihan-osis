<?php

function logged_in()
{
	$CI = get_instance();

	if (!$CI->session->userdata('nis')) {
		redirect('auth');
	} else if ($CI->uri->segment(1) != 'coblos' && $CI->uri->segment(1) != 'profile') {
		$role_id = $CI->session->userdata('role_id');
		$menu = $CI->uri->segment(1);
		$queryMenu = $CI->db->get_where('user_menu', ['menu' => $menu])->row_array();
		$menu_id = $queryMenu['id'];
		$userAccess = $CI->db->get_where('user_access_menu', [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		]);
		if ($userAccess->num_rows() < 1) {

			redirect('auth/blocked');
		}
	}
}
function check_access($role_id, $menu_id)
{
	$ci = get_instance();

	$result = $ci->db->get_where('user_access_menu', ['role_id' => $role_id, 'menu_id' => $menu_id]);

	if ($result->num_rows() > 0) {
		return "checked='checked'";
	}
}
function return_back()
{
	$CI = get_instance();
	$bot = $CI->uri->segment(1);
	if ($bot != 'admin' && $bot != 'auth' && $bot != 'user') {
		return base_url();
	} else {
		return base_url($CI->uri->segment(1));
	}
}
