<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');

	if(!function_exists('is_logged_in'))
	{
		function is_logged_in()
		{
			// Get current CodeIgniter instance
			$CI =& get_instance();
			// We need to use $CI->session instead of $this->session
			$user = $CI->session->userdata('ad_logged');
			if ($CI->session->userdata('ad_logged')) 
			{ 
				return true;
			} 
			else 
			{ 
				redirect('/');
			}
		}
	}

	if(!function_exists('is_adlogged_in'))
	{
		function is_adlogged_in()
		{
			// Get current CodeIgniter instance
			$CI =& get_instance();
			// We need to use $CI->session instead of $this->session
			$user = $CI->session->userdata('adkon_logged');
			if ($CI->session->userdata('adkon_logged')) 
			{ 
				return true;
			} 
			else 
			{ 
				redirect('/admin');
			}
		}
	}


	if(!function_exists('is_userlogged_in'))
	{
		function is_userlogged_in()
		{
			// Get current CodeIgniter instance
			$CI =& get_instance();
			// We need to use $CI->session instead of $this->session
			$user = $CI->session->userdata('user_logged');
			if ($CI->session->userdata('user_logged')) 
			{ 
				return true;
			} 
			else 
			{ 
				redirect('/user');
			}
		}
	}
?>