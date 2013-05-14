<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class api_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function api_call()
	{
		$.getJSON("http://www.reddit.com/r/japanpics/.json?jsonp=?",
        function(data) {
            $.each(data.children, function(i,item){
          $("<img/>").attr("src", url).appendTo("#images");
            if ( i == 3 ) return false;
        });
      });
	}
}

?>