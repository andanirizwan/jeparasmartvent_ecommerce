<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
		
	public function __construct ()
	{
		parent::__construct();
		$this->load->model('model_customer');
		$this->load->model('model_settings');
		$this->load->model('model_users');
	}

	public function index()
	{	
			
	}
	public function payment_confirmation($invoice_id = 0 )
	{
		
		$data['get_sitename'] = $this->model_settings->sitename_settings();
		$data['get_footer'] = $this->model_settings->footer_settings();
			
		$this->form_validation->set_rules('invoice_id_input','Invoice id','required|integer');
		$this->form_validation->set_rules('no_rek_input','no_rek_input','required|integer');
		$this->form_validation->set_rules('jenis_bank_input','jenis_bank_input','required');
		$this->form_validation->set_rules('tgl_transfer_input','tgl_transfer_input','required');
		$this->form_validation->set_rules('amount_input','Amount Transfered','required|integer');

		$input = array('id' =>  $this->input->post('invoice_id_input'),
					   'no_rek' =>  $this->input->post('no_rek_input'),
					   'jenis_bank' =>  $this->input->post('jenis_bank_input'),
					   'tgl_transfer' =>  $this->input->post('tgl_transfer_input'),
					   'status' =>  'Menuggu_konfirmasi'
					    );

		if($this->form_validation->run()	==	FALSE)
		{
			if($this->input->post('invoice_id_input'))
			{
				$data['invoice_id'] =set_value('invoice_id_input');
			}else{	
					$data['invoice_id'] = $invoice_id;
				}
			$this->load->view('customer/form_payment_confirmation',$data);
		}else{
				$is_valid = $this->model_customer->mark_invoice_paid_confirmed($input);
				if ($is_valid)
				{
						$this->session->set_flashdata('message','Thank you ..... we will check on your payment confirmation');
						redirect('customer/shopping_history');
				}else{
						$this->session->set_flashdata('error','Worng amount or invoice id.... ! please try again ');
						redirect('customer/payment_confirmation/'.set_value('invoice_id_input'));
					}
					
			 }
	}
	public function shopping_history()
	{
		$data['get_sitename'] = $this->model_settings->sitename_settings();
		$data['get_footer'] = $this->model_settings->footer_settings();	
		
		$user=$this->session->userdata('username');
		$data['history'] = $this->model_customer->get_shopping_history($user);
		$this->load->view('customer/shopping_history_list',$data);
	}
	
	
	
}//end class
