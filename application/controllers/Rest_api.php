<?php 

// import library dari REST_Controller
require APPPATH . 'libraries/REST_Controller.php';


class Rest_api extends REST_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function index_get(){

		$response['status'] = 200;
		$response['error']  = false;
		$response['message'] = 'Hai from response';

		$this->response($response);
	}

	public function user_get()
	{
		$response['error']=false;
	    $response['user']['username']='erthru';
	    $response['user']['email']='ersaka96@gmail.com';
	    $response['user']['detail']['full_name']='Suprianto D';
	    $response['user']['detail']['position']='Developer';
	    $response['user']['detail']['specialize']='Android,IOS,WEB,Desktop';

	    $this->response($response);
	}
}

?>