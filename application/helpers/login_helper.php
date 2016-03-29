<?php

	function is_logged_in() {
		$CI =& get_instance();
		$user = $CI->session->all_userdata();
		if ( isset($user['session_data']) && $user['session_data']['set_value'] != NULL )
			return true;
		else
			return false;
	}

?>