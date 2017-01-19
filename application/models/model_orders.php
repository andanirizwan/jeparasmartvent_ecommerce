<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_orders extends CI_Model {
	
	public function get_user_id_by_session()
	{ 
		$usr_name = $this->session->userdata('username');
		$gry = $this->db->where('usr_name',$usr_name)
						->select('usr_id')
						->limit(1)
						->get('users');
				if($gry->num_rows() > 0 )
					{
							return $gry->row()->usr_id;
					}else{
						
							return 0;
						 }	
	}
	
	
	public function process()
	{
		//send email 	
		// $from_email = 'jeparasmartevent.info@gmail.com';
		// $subject = 'Verify Your Email Address';
		// $message =

		// '
		// <html>
		// <head>
		// 	<meta name="viewport" content="width=device-width, initial-scale=1">
		// 	<style type="text/css">
		//         .tombol{
		//                   background:#2C97DF;
		//                   color:white;
		//                   padding:10px 75px;
		//                   text-decoration:none;
		//                   border-radius: 5px;
		//                   font-family:sans-serif;
		//                   font-size:15pt;
		//                   height: 200px;
		//                 }
		//     </style>
		// </head>
		// <body>
		// 	<p>Dear User,</p>
  //     		<hr/>
		//   	<p>Terima kasih anda telah bergabung dengan <b>JeparaSmartEvent</b> | Solution For your Event</p>
		//   	<p>Tinggal satu langkah lagi untuk berbelaja. silahkan klik link dibawah ini untuk mengkonfirmasi pendaftaran anda</p>
		//   	<br/>
		//   	<p>Demikian kami sampaikan Selamat Menjelajah</p>
		//   	<hr/>
		//   	<p>Thanks</p>
		//   	<p><strong>JeparaSmartEvent Team</strong></p>
		// </body>
		// </html> 
		// ';

		// //configure email settings
		// $config['protocol'] = 'smtp';
		// $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name
		// $config['smtp_port'] = '465'; //smtp port number
		// $config['smtp_timeout']= '400';
		// $config['smtp_user'] = $from_email;
		// $config['smtp_pass'] = 'jseadmin'; //$from_email password
		// $config['mailtype'] = 'html';
		// $config['charset'] = 'utf-8';
		// $config['wordwrap'] = TRUE;
		// $config['newline'] = "\r\n"; //use double quotes
		// $this->email->initialize($config);
		
		// //send mail
		// $this->email->from($config['smtp_user'], 'Admin JeparaSmartEvent');
		// $this->email->to($to_email);
		// $this->email->subject($subject);
		// $this->email->message($message);
		// return $this->email->send();
	
		
		//here for create new invoice
		$invoice = array(
						'data'		=>	date('Y-m-d H:i:s'),
						'due_date'	=>	date('Y-m-d H:i:s',mktime(date('H'),date('i'),date('s'),date('m'),date('d') + 7,date('Y'))),
						'user_id'	=> $this->get_user_id_by_session(),
						'status'	=>	'unpaid'
						);
		$this->db->insert('invoices',$invoice);
		$invoice_id = $this->db->insert_id();
		//here for put ordered items in orders table
		foreach ($this->cart->contents() as $item)
		{
			$data = array(
						'invoice_id'		=> $invoice_id,
						'product_id'		=> $item['id'],
						'product_type'		=> $item['name'],
						'product_title'		=> $item['title'],
						'qty'				=> $item['qty'],
						'price'				=> $item['price']
						
						 );
			$this->db->insert('orders',$data);
		}
		
		return TRUE;
	}
	
	public function all_invoices()
	{ // get all orders from orders tble
		$get_orders = $this->db->get('invoices');
			if($get_orders->num_rows() > 0 ) {
					return $get_orders->result();
			} else {
					 return array();
			}
	}
	public function get_invoice_by_id($invoice_id)
	{
		$get_invoice_by = $this->db->where('id',$invoice_id)->limit(1)->get('invoices');
		if($get_invoice_by->num_rows() > 0 ) {
					return $get_invoice_by->result();
			} else {
					 return FALSE;
					}
	}
	
	public function get_orders_by_invoice($invoice_id)
	{
		$get_orders_by = $this->db->where('invoice_id',$invoice_id)->get('orders');
		if($get_orders_by->num_rows() > 0 ) {
					return $get_orders_by->result();
			} else {
					 return FALSE;
					}
	}
	
	
}//end class