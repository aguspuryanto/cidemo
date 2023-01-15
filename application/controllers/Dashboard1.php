<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard1 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Data1_model');
	}

    public function index()
    {
        // $this->load->view('dashboard1');
		$data['chart1'] = array();
		$loadData = $this->Data1_model->getDataSatu();
		if ($loadData) {
			$cart_labels = [];
			$cart_data = [];
			foreach($loadData as $key => $item) {
				$cart_labels[] = $item['nama']; 
				$cart_data[] = $item['jml']; 
			}

			$data['chart1'] = array(
				'labels' => ($cart_labels),
				'data' => $cart_data,
			);
			// echo json_encode($loadData);
		}

		$data['chart2'] = array(
			// 'labels' => array('JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'),
			// 'data' => [700, 1700, 2700, 2000, 1800, 1500, 2000]
		);
		$loadData2 = $this->Data1_model->getDataDua();
		if ($loadData2) {
			$cart_labels = [];
			$cart_data = [];
			foreach($loadData2 as $key => $item) {
				$cart_labels[] = $item['nama']; 
				$cart_data[] = $item['jml']; 
			}

			$data['chart2'] = array(
				'labels' => ($cart_labels),
				'data' => $cart_data,
			);
			// echo json_encode($loadData);
		}

		$data['chart3'] = array(
			'labels' => array('JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'),
			'data' => [700, 1700, 2700, 2000, 1800, 1500, 2000]
		);
		// echo json_encode($data);

        $this->load->view('layouts/header');
        $this->load->view('dashboard_chart', $data);
        $this->load->view('layouts/footer');
    }

	public function postdata1() {
		$form_data = $this->input->post();
		if($form_data){
			// echo json_encode($form_data);
			$data = array(
				'nama' => $form_data['nama'],
				'jml' => $form_data['jml']
			);

			$this->Data1_model->insert($data);
			redirect('dashboard1');

		}
	}

	public function postdata2() {
		$form_data = $this->input->post();
		if($form_data){
			// echo json_encode($form_data);
			$data = array(
				'nama' => $form_data['nama'],
				'jml' => $form_data['jml']
			);

			$this->Data1_model->insert($data, 'data2');
			redirect('dashboard1');

		}
	}
}
