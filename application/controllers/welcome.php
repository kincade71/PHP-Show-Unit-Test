<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://intranet.forrent.com/index.php/welcome
	 *	- or -  
	 * 		http://intranet.forrent.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 * exec('phpunit -c /home/'.$user.'/src/tests/unit-tests/phpunit.xml '.$_GET['t'].' ',$result,$exitcode);
		$data['results'] = $result;
		$data['exit'] = $exitcode;
	 */
	public function index()
	{
		$data['title'] = 'Unit Test Suite';
		$data['projectname'] = 'Unit Test Suite';
		$data['main_content'] = 'welcome_message';
		$data['results'] = NULL;
		$data['common'] = get_filenames('../../../tests/unit-tests/common/',TRUE);
		$data['forrent'] = get_filenames('../../../tests/unit-tests/forrent/',TRUE);
		$data['command'] = NULL;
		$this->load->view('main/main_template',$data);
	}
	
	public function runtestsuite(){
		$data['title'] = 'Unit Test Suite';
		$data['projectname'] = 'Unit Test Suite';
		$data['main_content'] = 'welcome_message';
		if(!empty($_GET['t'])){
			$flag = '--'.$_GET['t'];
		}else{
			$flag = NULL;
		}
		$user = trim(str_replace('/src/forrent/site/test', '',substr(shell_exec('pwd'),6)));
		$data['results'] = shell_exec('sh /home/'.$user.'/src/run-tests.sh '.$flag.'');
		$data['command'] = 'sh /home/'.$user.'/src/run-tests.sh '.$flag.'';
		$data['common'] = get_filenames('../../../tests/unit-tests/common/',TRUE);
		$data['forrent'] = get_filenames('../../../tests/unit-tests/forrent/',TRUE);
		$this->load->view('main/main_template',$data);		
	}
	public function singletest(){
		$data['title'] = 'Unit Test Suite';
		$data['projectname'] = 'Unit Test Suite';
		$data['main_content'] = 'welcome_message';
		$user = trim(str_replace('/src/forrent/site/test', '',substr(shell_exec('pwd'),6)));
		$data['results'] = shell_exec('phpunit -c /home/'.$user.'/src/tests/unit-tests/phpunit.xml '.$_GET['t'].' ');
		$data['command'] = 'phpunit -c /home/'.$user.'/src/tests/unit-tests/phpunit.xml '.$_GET['t'].' ';
		$data['common'] = get_filenames('../../../tests/unit-tests/common/',TRUE);
		$data['forrent'] = get_filenames('../../../tests/unit-tests/forrent/',TRUE);
		$this->load->view('main/main_template',$data);
	}
	public function seeerror(){
		$data['title'] = 'Unit Test Suite';
		$data['projectname'] = 'Unit Test Suite';
		$data['main_content'] = 'view_error';
		$data['file'] = read_file($_GET['t']);
		$data['filepath'] = $_GET['t'];
		$data['line'] = explode(':',$_GET['l']);
		$data['unable'] = NULL;
		$this->load->view('main/main_template',$data);
	}
	public function save(){
		$info = $this->input->post('file');
		
		if ( ! write_file($this->input->post('filepath'), $info))
		{
			$data['title'] = 'Unit Test Suite';
			$data['projectname'] = 'Unit Test Suite';
			$data['main_content'] = 'view_error';
			$data['file'] = read_file($this->input->post('filepath'));
			$data['filepath'] = $this->input->post('filepath');
			$data['line'] = explode(':',$this->input->post('errors'));
			$data['unable'] = 'error';
			$this->load->view('main/main_template',$data);
			
		}
		else
		{
			$data['title'] = 'Unit Test Suite';
			$data['projectname'] = 'Unit Test Suite';
			$data['main_content'] = 'view_error';
			$data['file'] = read_file($this->input->post('filepath'));
			$data['filepath'] = $this->input->post('filepath');
			$data['line'] = explode(':',$this->input->post('errors'));
			$data['unable'] = 'success';
			$this->load->view('main/main_template',$data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */