<?php
class testcon extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		
	}
	function mymailx() {
		//$mail = new $this->mymail();
		echo "xx";
        $this->load->library("phpmailer");
        $this->load->library("smtp");
        $this->phpmailer->IsSMTP(); // we are going to use SMTP

        $this->phpmailer->SMTPAuth   = true; // enabled SMTP authentication
        $this->phpmailer->SMTPSecure = "";  // prefix for secure protocol to connect to the server
        $this->phpmailer->Host       = "mail.thaionlyone.com";      // setting GMail as our SMTP server
        $this->phpmailer->Port       = 25;                   // SMTP port to connect to GMail
        $this->phpmailer->Username   = "system@thaionlyone.com";  // user email address
        $this->phpmailer->Password   = "1q2w3e4r1q2w3e4r";            // password in GMail
        $this->phpmailer->SetFrom('system@thaionlyone.com', 'Firstname Lastname');  //Who is sending the email
        $this->phpmailer->AddReplyTo("system@thaionlyone.com","Firstname Lastname");  //email address that receives the response
        $this->phpmailer->Subject    = "ทดสอบ subject";
        $this->phpmailer->CharSet = "UTF-8";


        $message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>';
				$message .= '<body>';
				$message .= "<p>สวัสดีเพื่อนๆชาวพันทิพค่ะ เราจะมาแชร์วิธีการแต่งหน้าง่ายๆ 5นาทีด้วยเครื่องสำอางแค่7ชิ้น เหมาะกับวัยเพิ่งเริ่มทำงาน(อย่างเรา) ในชั่วโมงที่รีบๆ เช่น วันที่ตื่นสาย 5555 เครื่องสำอางเราเป็นของฝาก</p>";
       		   		$message .= '</body></html>';



        $this->phpmailer->Body      =   $message;
        $this->phpmailer->AltBody    = "Plain text message";

            $destino = "env@thaionlyone.com"; // Who is addressed the email to
        $this->phpmailer->AddAddress($destino, "To Name");
    

        if(!$this->phpmailer->Send()) {
            $data["message"] = "Error: " . $this->phpmailer->ErrorInfo;
        } else {
            echo "Message sent correctly!";
        }

    }

	function getuser3tb() {
		$this->db->select("*");
		$this->db->from("adminsetting_user user");
		$this->db->join("adminsetting_department dep","dep.department_ID=user.department_ID","left");
		$this->db->join("adminsetting_usergroup grp","grp.usergroup_ID=user.usergroup_ID","left");
		$query = $this->db->get();
		foreach ($query->result() as $row) {
			echo $row->user_EMAIL . " " . $row->department_NAME.  " ". $row->usergroup_NAME ."<br>";
		}
	}
	function see_sees(){
		session_start();
	    echo "<h3> PHP List All Session Variables</h3>";
	    echo "<pre>";
	    print_r($this->session->all_userdata());
	    echo "</pre>";
	}
	function see_wastecomponent() {
		$sess_wastecomponent = $this->session->userdata("wastecomponent");
		//echo json_encode($sess_wastecomponent);
		foreach($sess_wastecomponent  as $row) :
			echo $row["wastecomponent"] . "<>";
		endforeach;
	}

	function testmail() {
		$this->load->model("sendmail_model");
		if(!$this->sendmail_model->testmail("system@thaionlyone.com")){
			echo $this->email->print_debugger();
		} else {
			echo "ok";
			echo $this->email->print_debugger();
		}
	}
function test_pdf(){
//this data will be passed on to the view
$data['the_content']='mPDF and CodeIgniter are cool!';

//load the view, pass the variable and do not show it but "save" the output into $html variable
$html=$this->load->view('pdf_report', $data, true); 
//$html="<h1>Test Html</h1><hr>";
//this the the PDF filename that user will get to download
//$pdfFilePath = "the_pdf_output.pdf";

//load mPDF library
$this->load->library('pdf');


//actually, you can pass mPDF parameter on this load() function
$pdf = $this->pdf->load();
$pdf->SetAutoFont();
//generate the PDF!
$pdf->WriteHTML($html);
//offer it to user via browser download! (The PDF won't be saved on your server HDD)
$pdf->Output($pdfFilePath, "I");
	}
}