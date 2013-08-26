<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ApplicationController extends CI_Controller {


	public function index()
	{
		$data = array();

		$data['nav1'] = 1;
		$data['nav2'] = 0;
		$data['nav3'] = 0;
		$data['nav4'] = 0;
		$data['nav5'] = 0;
		$data['nav6'] = 0;

		$data['title'] = "TEDxCEG";
		$this->load->view('template/html-start');
		$this->load->view('template/head-start');
		$this->load->view('template/meta');
		$this->load->view('template/title',$data);
		$this->load->view('template/style');
		$this->load->view('template/script');
		$this->load->view('template/head-end');
		$this->load->view('template/body-start');
		$this->load->view('header',$data);
		$this->load->view('main');
		$this->load->view('footer');
		$this->load->view('template/body-end');
		$this->load->view('template/html-end');
	}

	public function about()
	{
		$data = array();

		$data['nav1'] = 0;
		$data['nav2'] = 1;
		$data['nav3'] = 0;
		$data['nav4'] = 0;
		$data['nav5'] = 0;
		$data['nav6'] = 0;

		$data['title'] = "About - TEDxCEG";
		$this->load->view('template/html-start');
		$this->load->view('template/head-start');
		$this->load->view('template/meta');
		$this->load->view('template/title',$data);
		$this->load->view('template/style');
		$this->load->view('template/script');
		$this->load->view('template/head-end');
		$this->load->view('template/body-start');
		$this->load->view('header',$data);
		$this->load->view('about');
		$this->load->view('footer');
		$this->load->view('template/body-end');
		$this->load->view('template/html-end');
	}

	public function events()
	{
		$data = array();

		$data['nav1'] = 0;
		$data['nav2'] = 0;
		$data['nav3'] = 1;
		$data['nav4'] = 0;
		$data['nav5'] = 0;
		$data['nav6'] = 0;

		$data['title'] = "Events - TEDxCEG";
		$this->load->view('template/html-start');
		$this->load->view('template/head-start');
		$this->load->view('template/meta');
		$this->load->view('template/title',$data);
		$this->load->view('template/style');
		$this->load->view('template/script');
		$this->load->view('template/head-end');
		$this->load->view('template/body-start');
		$this->load->view('header',$data);
		$this->load->view('events');
		$this->load->view('footer');
		$this->load->view('template/body-end');
		$this->load->view('template/html-end');
	}

	public function speakers()
	{
		$data = array();

		$data['nav1'] = 0;
		$data['nav2'] = 0;
		$data['nav3'] = 0;
		$data['nav4'] = 1;
		$data['nav5'] = 0;
		$data['nav6'] = 0;

		$data['title'] = "Speakers - TEDxCEG";
		$this->load->view('template/html-start');
		$this->load->view('template/head-start');
		$this->load->view('template/meta');
		$this->load->view('template/title',$data);
		$this->load->view('template/style');
		$this->load->view('template/script');
		$this->load->view('template/head-end');
		$this->load->view('template/body-start');
		$this->load->view('header',$data);
		$this->load->view('speakers');
		$this->load->view('footer');
		$this->load->view('template/body-end');
		$this->load->view('template/html-end');
	}

	public function tickets()
	{
		$data = array();

		$data['nav1'] = 0;
		$data['nav2'] = 0;
		$data['nav3'] = 0;
		$data['nav4'] = 0;
		$data['nav5'] = 1;
		$data['nav6'] = 0;

		$data['title'] = "Tickets - TEDxCEG";
		$this->load->view('template/html-start');
		$this->load->view('template/head-start');
		$this->load->view('template/meta');
		$this->load->view('template/title',$data);
		$this->load->view('template/style');
		$this->load->view('template/script');
		$this->load->view('template/head-end');
		$this->load->view('template/body-start');
		$this->load->view('header',$data);
		$this->load->view('sponsors');
		$this->load->view('footer');
		$this->load->view('template/body-end');
		$this->load->view('template/html-end');
	}

	public function contact()
	{
		$data = array();

		$data['nav1'] = 0;
		$data['nav2'] = 0;
		$data['nav3'] = 0;
		$data['nav4'] = 0;
		$data['nav5'] = 0;
		$data['nav6'] = 1;

		$data['title'] = "Contact - TEDxCEG";
		$this->load->view('template/html-start');
		$this->load->view('template/head-start');
		$this->load->view('template/meta');
		$this->load->view('template/title',$data);
		$this->load->view('template/style');
		$this->load->view('template/script');
		$this->load->view('template/head-end');
		$this->load->view('template/body-start');
		$this->load->view('header',$data);
		$this->load->view('contact');
		$this->load->view('footer');
		$this->load->view('template/body-end');
		$this->load->view('template/html-end');
	}


}
