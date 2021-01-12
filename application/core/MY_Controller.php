<?php
class MY_Controller extends CI_Controller
{
	public $data;
	public $CI;
	public $db;
	public $dpm_online;
	
	function __construct()
	{
		parent::__construct();
		//echo $this->input->ip_address();exit;
		// if(!in_array($_SERVER['HTTP_INCAP_CLIENT_IP'], $this->config->item('allowed_ip')))
		// {
			// header("Location:https://rewards.sahabatnestle.co.id/");
			// exit;
		// }
		$this->CI =& get_instance();
		$this->db = $this->load->database('default', true);
		$this->dpm_online = $this->load->database('dpm_online', true);
    }
	
	function head_params($title='', $meta_keyword='', $meta_desc='', $custom_css='', $custom_js='')
    {
	
		$this->params['title'] 		= empty($title)? $this->config->item('title_default') : $title.' - '.$this->config->item('title_tail');
		$this->params['meta_keyword'] 	= empty($meta_keyword)? $this->config->item('meta_keyword_default') : $meta_keyword;
		$this->params['meta_desc'] 	= empty($meta_desc)? $this->config->item('meta_desc_default') : $meta_desc;
		$this->params['custom_css'] 	= $custom_css;
		$this->params['custom_js'] 	= $custom_js;
		return $this->params;
    }
}
?>