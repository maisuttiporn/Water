<?php 
class sendmail_model extends CI_Model {
	function testmail($to) {
		$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'mail.thaionlyone.com',
				'smtp_port' => 587,
				'smtp_user' => 'info@thaionlyone.com',
				'smtp_pass' => 'th@1only1',
				'mailtype'  => 'html', 
				'charset'   => 'utf-8'
				);
				$this->load->library('email', $config);
				$this->email->set_newline("\r\n");
				$this->email->from('info@thaionlyone.com','info');
				$this->email->to($to);
				$this->email->subject('ทดสอบ อีเมล์');
       		    $this->email->message('Testing the email class.');  
				// Set to, from, message, etc.

				$result = $this->email->send();
			    return $this->email->print_debugger();
	}
}