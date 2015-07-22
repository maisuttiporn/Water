<?php
class saleservice extends CI_Controller{
	function index() {
		$data=array();
		$this->load->view("main/header.php");
		$this->load->view("saleservice/saleservice.php");
		$this->load->view("main/footer.php");
	}
//Inquiry ####################################################################################################################
	function inquiry1() {
		$data=array();
		$this->load->model("saleservice_model");
		$data["DOC_ID"] =  $this->saleservice_model->getDOC_ID("mm@mm");
		if(isset($_POST["submit"])){
			$WASTECODE = $this->input->post("WASTECODE");
			$WASTEOWNER = $this->input->post("WASTEOWNER");
			$DATE = $this->input->post("DATE");
			$WASTENAME = $this->input->post("WASTENAME");
			$FACTNAME = $this->input->post("FACTNAME");
			$FACTADDR = $this->input->post("FACTADDR");
			$FACTCONTACT = $this->input->post("FACTCONTACT");
			$FACTPOSITION = $this->input->post("FACTPOSITION");
			$FACTTEL = $this->input->post("FACTTEL");
			$FACTFAX = $this->input->post("FACTFAX");
			$FACTEMAIL = $this->input->post("FACTEMAIL");

			$sess_inquiry1 = array(
				'WASTECODE' => $WASTECODE,
				'WASTEOWNER' => $WASTEOWNER,
				'DATE' => $DATE,
				'WASTENAME' => $WASTENAME,
				'FACTNAME' => $FACTNAME,
				'FACTADDR' => $FACTADDR,
				'FACTCONTACT' => $FACTCONTACT,
				'FACTPOSITION' => $FACTPOSITION,
				'FACTTEL' => $FACTTEL,
				'FACTFAX' => $FACTFAX,
				'FACTEMAIL' => $FACTEMAIL
			);
			$this->session->set_userdata("new_inquiry1",$sess_inquiry1);
		}			
		$data["inquiry1"] = $this->session->userdata("new_inquiry1");
		//if($this->session->userdata("new_inquiry1")) :
		//	echo "new_inquiry1"; 
		//endif;
		$this->load->view("main/header.php");
		$this->load->view("saleservice/saleservice.php");
		$this->load->view("saleservice/inquiry1.php",$data);
		$this->load->view("saleservice/menubottom.php");
		$this->load->view("main/footer.php");
	}
	function unset_inquiry1($kind) {
		if($kind=="new"):
			$this->session->unset_userdata("new_inquiry1");
		endif;
		redirect(base_url()."saleservice/inquiry1","refresh");
	}
	function inquiry2() {
		/* รับค่าจาก Form Post */
		$data=array();
		if(isset($_POST["submit"])) {
			$INDUSTRYTYPE = $this->input->post("INDUSTRYTYPE");
			$MAINPRODUCT = $this->input->post("MAINPRODUCT");
			$INDUSTRYWNAME = $this->input->post("INDUSTRYWNAME");
			$CHEMNAME = $this->input->post("CHEMNAME");
			$PRESENTSTORE = $this->input->post("PRESENTSTORE");
			$MAXSTORE = $this->input->post("MAXSTORE");
			$GENRATEWMONTH = $this->input->post("GENRATEWMONTH");
			$GENRATEWYEAR = $this->input->post("GENRATEWYEAR");
			$GENRATEPDAYOPT = $this->input->post("GENRATEPDAYOPT");
			$GENRATEPDAYTXT = $this->input->post("GENRATEPDAYTXT");
			$GENRATEPMONTHOPT = $this->input->post("GENRATEPMONTHOPT");
			$GENRATEPMMONTHTXT = $this->input->post("GENRATEPMMONTHTXT");
			$PHYSOLIDOPT = $this->input->post("PHYSOLIDOPT");
			$PHYPOWDEROPT = $this->input->post("PHYPOWDEROPT");
			$PHYLUMPOPT = $this->input->post("PHYLUMPOPT");
			$PHYSIZETXT = $this->input->post("PHYSIZETXT");
			$PHYSLUDGEOPT = $this->input->post("PHYSLUDGEOPT");
			$PHYPUMPOPT = $this->input->post("PHYPUMPOPT");
			$PHYUNPUMPOPT = $this->input->post("PHYUNPUMPOPT");
			$PHYWETOPT = $this->input->post("PHYWETOPT");
			$PHYLIQUIDOPT = $this->input->post("PHYLIQUIDOPT");
			$PHYODORTXT = $this->input->post("PHYODORTXT");
			$PHYCOLORTXT = $this->input->post("PHYCOLORTXT");
			$CHEMWATERTXT = $this->input->post("CHEMWATERTXT");
			$CHEMWATEROPT = $this->input->post("CHEMWATEROPT");
			$CHEMOILOPT = $this->input->post("CHEMOILOPT");
		/* Array for Inquiry2 Session  */
		$sess_inquiry2 = array(
			"INDUSTRYTYPE" => $INDUSTRYTYPE,
			"MAINPRODUCT" => $MAINPRODUCT,
			"INDUSTRYWNAME" => $INDUSTRYWNAME,
			"CHEMNAME" => $CHEMNAME,
			"PRESENTSTORE" => $PRESENTSTORE,
			"MAXSTORE" => $MAXSTORE,
			"GENRATEWMONTH" => $GENRATEWMONTH,
			"GENRATEWYEAR" => $GENRATEWYEAR,
			"GENRATEPDAYOPT" => $GENRATEPDAYOPT,
			"GENRATEPDAYTXT" => $GENRATEPDAYTXT,
			"GENRATEPMONTHOPT" => $GENRATEPMONTHOPT,
			"GENRATEPMMONTHTXT" => $GENRATEPMMONTHTXT,
			"PHYSOLIDOPT" => $PHYSOLIDOPT,
			"PHYPOWDEROPT" => $PHYPOWDEROPT,
			"PHYLUMPOPT" => $PHYLUMPOPT,
			"PHYSIZETXT" => $PHYSIZETXT,
			"PHYSLUDGEOPT" => $PHYSLUDGEOPT,
			"PHYPUMPOPT" => $PHYPUMPOPT,
			"PHYUNPUMPOPT" => $PHYUNPUMPOPT,
			"PHYWETOPT" => $PHYWETOPT,
			"PHYLIQUIDOPT" => $PHYLIQUIDOPT,
			"PHYODORTXT" => $PHYODORTXT,
			"PHYCOLORTXT" => $PHYCOLORTXT,
			"CHEMWATERTXT" => $CHEMWATERTXT,
			"CHEMWATEROPT" => $CHEMWATEROPT,
			"CHEMOILOPT" => $CHEMOILOPT,
		); 
		$this->session->set_userdata("new_inquiry2",$sess_inquiry2);
		} // end if submit

		$data["inquiry2"] = $this->session->userdata("new_inquiry2");
		$data["wastecomponent"] = $this->session->userdata("wastecomponent");

		$this->load->view("main/header.php");
		$this->load->view("saleservice/saleservice.php");
		$this->load->view("saleservice/inquiry2.php",$data);
		$this->load->view("saleservice/menubottom.php");
		$this->load->view("main/footer.php");
	}
	function sess_wastecomponent() {
		if(isset($_GET["wastecomponent"])) :
			//echo json_encode($_GET["Objcomp"]);
			$sess_wastecomponent = $_GET["Objcomp"];
			$this->session->set_userdata("wastecomponent",$sess_wastecomponent);
		endif;
	}
	function inquiry3() {
		$data=array();
		//if check post
		if(isset($_POST["submit"])) { 
			$HAZEXPLOSIVEOPT = $this->input->post("HAZEXPLOSIVEOPT");
			$HAZFLAMOPT = $this->input->post("HAZFLAMOPT");
			$HAZFLAMTXT = $this->input->post("HAZFLAMTXT");
			$HAZCORRASOPT = $this->input->post("HAZCORRASOPT");
			$HAZCORRASTXT = $this->input->post("HAZCORRASTXT");
			$HAZREACTIONOPT = $this->input->post("HAZREACTIONOPT");
			$HAZREACTIONTXT = $this->input->post("HAZREACTIONTXT");
			$HAZCARINOPT = $this->input->post("HAZCARINOPT");
			$HAZCARINTXT = $this->input->post("HAZCARINTXT");
			$HAZTOXICOPT = $this->input->post("HAZTOXICOPT");
			$HAZACUTEOPT = $this->input->post("HAZACUTEOPT");
			$HAZCHRONOPT = $this->input->post("HAZCHRONOPT");
			$HAZCHRONTXT = $this->input->post("HAZCHRONTXT");
			$HAZRADIOOPT = $this->input->post("HAZRADIOOPT");
			$HAZRADIOTXT = $this->input->post("HAZRADIOTXT");
			$HAZPESTICIDEOPT = $this->input->post("HAZPESTICIDEOPT");
			$HAZPESTICIDETXT = $this->input->post("HAZPESTICIDETXT");
			$HAZOTHEROPT = $this->input->post("HAZOTHEROPT");
			$HAZOTHERTXT = $this->input->post("HAZOTHERTXT");
			$GENPROCESSOPT = $this->input->post("GENPROCESSOPT");
			$GENDISCAREOPT = $this->input->post("GENDISCAREOPT");
			$GENOTHEROPT = $this->input->post("GENOTHEROPT");
			$GENCLEANOPT = $this->input->post("GENCLEANOPT");
			$GENSPILLOPT = $this->input->post("GENSPILLOPT");	
			$STOCLASSOTP = $this->input->post("STOCLASSOTP");	
			$STOMIXOPT = $this->input->post("STOMIXOPT");	
			$STOOUTDOOROPT = $this->input->post("STOOUTDOOROPT");	
			$STOBAGOTP = $this->input->post("STOBAGOTP");	
			$STOBAGTXT = $this->input->post("STOBAGTXT");	
			$STODRUMOTP = $this->input->post("STODRUMOTP");	
			$STODRUMTXT = $this->input->post("STODRUMTXT");	
			$STOTANKOTP = $this->input->post("STOTANKOTP");	
			$STOINDOOROTP = $this->input->post("STOINDOOROTP");	
			$STOYARDOTP = $this->input->post("STOYARDOTP");	
			$STOOTHEROTP = $this->input->post("STOOTHEROTP");
			$REGNONHARARDOTP = $this->input->post("REGNONHARARDOTP");
			$REGHAZARDOTP = $this->input->post("REGHAZARDOTP");
			$PERNECOTP = $this->input->post("PERNECOTP");
			$PERUNNECOTP = $this->input->post("PERUNNECOTP");
			$DISMETTXT = $this->input->post("DISMETTXT");
			$CLIMTXT = $this->input->post("CLIMTXT");
			$DISCOSTTXT = $this->input->post("DISCOSTTXT");
			$PRECAUTXT = $this->input->post("PRECAUTXT");
			$EMPPROTECTTXT = $this->input->post("EMPPROTECTTXT");
			$SYMPTXT = $this->input->post("SYMPTXT");
 		$sess_inquiry3 = array(
 			"HAZEXPLOSIVEOPT"		=> $HAZEXPLOSIVEOPT,
 			"HAZFLAMOPT"			=> $HAZFLAMOPT,
 			"HAZFLAMTXT"			=> $HAZFLAMTXT,
 			"HAZCORRASOPT"			=> $HAZCORRASOPT,
 			"HAZCORRASTXT"			=> $HAZCORRASTXT,
 			"HAZREACTIONOPT"		=> $HAZREACTIONOPT,
 			"HAZREACTIONTXT"		=> $HAZREACTIONTXT,
 			"HAZCARINOPT"			=> $HAZCARINOPT,
 			"HAZCARINTXT"			=> $HAZCARINTXT,
 			"HAZTOXICOPT"			=> $HAZTOXICOPT,
 			"HAZACUTEOPT"			=> $HAZACUTEOPT,
 			"HAZCHRONOPT"			=> $HAZCHRONOPT,
 			"HAZCHRONTXT"			=> $HAZCHRONTXT,
 			"HAZRADIOOPT"			=> $HAZRADIOOPT,
 			"HAZRADIOTXT"			=> $HAZRADIOTXT,
 			"HAZPESTICIDEOPT"		=> $HAZPESTICIDEOPT,
 			"HAZPESTICIDETXT"		=> $HAZPESTICIDETXT,
 			"HAZOTHEROPT"			=> $HAZOTHEROPT,
 			"HAZOTHERTXT"			=> $HAZOTHERTXT, 
 			"GENPROCESSOPT"			=> $GENPROCESSOPT,
 			"GENDISCAREOPT"			=> $GENDISCAREOPT,
 			"GENOTHEROPT"			=> $GENOTHEROPT,		
 			"GENCLEANOPT"			=> $GENCLEANOPT,
 			"GENSPILLOPT"			=> $GENSPILLOPT,
 			"STOCLASSOTP"			=> $STOCLASSOTP,
 			"STOMIXOPT"				=> $STOMIXOPT,
 			"STOOUTDOOROPT"			=> $STOOUTDOOROPT,
 			"STOBAGOTP"				=> $STOBAGOTP,
 			"STOBAGTXT"				=> $STOBAGTXT,
 			"STODRUMOTP"			=> $STODRUMOTP,
 			"STODRUMTXT"			=> $STODRUMTXT,
 			"STOTANKOTP"			=> $STOTANKOTP,
 			"STOINDOOROTP"			=> $STOINDOOROTP,
 			"STOYARDOTP"			=> $STOYARDOTP,
 			"STOOTHEROTP"			=> $STOOTHEROTP,
 			"REGNONHARARDOTP"		=> $REGNONHARARDOTP,
 			"REGHAZARDOTP"			=> $REGHAZARDOTP,
 			"PERNECOTP"				=> $PERNECOTP,
 			"PERUNNECOTP"			=> $PERUNNECOTP,
 			"DISMETTXT"				=> $DISMETTXT,
 			"CLIMTXT"				=> $CLIMTXT,
 			"DISCOSTTXT"			=> $DISCOSTTXT,
 			"PRECAUTXT"				=> $PRECAUTXT,
 			"EMPPROTECTTXT"			=> $EMPPROTECTTXT,
 			"SYMPTXT"				=> $SYMPTXT,
 		);
 		$this->session->set_userdata("new_inquiry3",$sess_inquiry3);
		} //end if check post		
		$data["inquiry3"] = $this->session->userdata("new_inquiry3");
		$this->load->view("main/header.php");
		$this->load->view("saleservice/saleservice.php");
		$this->load->view("saleservice/inquiry3.php",$data);
		$this->load->view("saleservice/menubottom.php");
		$this->load->view("main/footer.php");
	}
	function inquiry4() {
		$data=array();
		//if check post
		if(isset($_POST["submit"])) { 
			$FAPTXT = $this->input->post("FAPTXT");
			$ENVTXT = $this->input->post("ENVTXT");
			$EMERTXT = $this->input->post("EMERTXT");
			$OTHERTXT = $this->input->post("OTHERTXT");
			$DETAILTXT = $this->input->post("DETAILTXT");
			$INFOMANTXT = $this->input->post("INFOMANTXT");
			$INFOPOSTXT = $this->input->post("INFOPOSTXT");
			$WMCNAMETXT = $this->input->post("WMCNAMETXT");
			$CONCACTMANTXT = $this->input->post("CONCACTMANTXT");
			$COMTELTXT = $this->input->post("COMTELTXT");
			$COMFAXTXT = $this->input->post("COMFAXTXT");
			$TRANTXT = $this->input->post("TRANTXT");
			$PRICETXT = $this->input->post("PRICETXT");
			$COMPINFONAMETXT = $this->input->post("COMPINFONAMETXT");
			$COMPPOSTXT = $this->input->post("COMPPOSTXT");

			$sess_inquiry4 = array(
				"FAPTXT"		=> $FAPTXT,
				"ENVTXT"		=> $ENVTXT,
				"EMERTXT"		=> $EMERTXT,
				"OTHERTXT"		=> $OTHERTXT,
				"DETAILTXT"		=> $DETAILTXT,
				"INFOMANTXT"		=> $INFOMANTXT,
				"INFOPOSTXT"		=> $INFOPOSTXT,
				"WMCNAMETXT"		=> $WMCNAMETXT,
				"CONCACTMANTXT"		=> $CONCACTMANTXT,
				"COMTELTXT"		=> $COMTELTXT,
				"COMFAXTXT"		=> $COMFAXTXT,
				"TRANTXT"		=> $TRANTXT,
				"PRICETXT"		=> $PRICETXT,
				"COMPINFONAMETXT"		=> $COMPINFONAMETXT,
				"COMPPOSTXT"		=> $COMPPOSTXT,
			);
			$this->session->set_userdata("new_inquiry4",$sess_inquiry4);
		}
		//end if check post
		$data["inquiry4"] = $this->session->userdata("new_inquiry4");	
		$this->load->view("main/header.php");
		$this->load->view("saleservice/saleservice.php");
		$this->load->view("saleservice/inquiry4.php",$data);
		$this->load->view("saleservice/menubottom.php");
		$this->load->view("main/footer.php");
	}
	
	function inquirylist() {
		$data=array();

		$this->load->model("saleservice_model");
		$data["inquiry1"] = $this->saleservice_model->get_inquiry1();
		$this->load->view("main/header");
		$this->load->view("saleservice/saleservice");
		$this->load->view("saleservice/inquirylist",$data);
		$this->load->view("main/footer");
	}
	function issue_newinquiry(){		
		$this->load->model("saleservice_model");		
		$DOC_ID = $this->saleservice_model->gennewID();

		//Inquiry 1
		$sess_inquiry1 = $this->session->userdata("new_inquiry1");		
		$data = array(
			"DOC_ID" => $DOC_ID,
			'inquiry_WASTECODE' => $sess_inquiry1["WASTECODE"],
			'inquiry_WASTEOWNER' => $sess_inquiry1["WASTEOWNER"],
			'inquiry_DATE' => $sess_inquiry1["DATE"],
			'inquiry_WASTENAME' => $sess_inquiry1["WASTENAME"],
			'inquiry_FACTNAME' => $sess_inquiry1["FACTNAME"],
			'inquiry_FACTADDR' => $sess_inquiry1["FACTADDR"],
			'inquiry_FACTCONTACT' => $sess_inquiry1["FACTCONTACT"],
			'inquiry_FACTPOSITION' => $sess_inquiry1["FACTPOSITION"],
			'inquiry_FACTTEL' => $sess_inquiry1["FACTTEL"],
			'inquiry_FACTFAX' => $sess_inquiry1["FACTFAX"],
			'inquiry_FACTEMAIL' => $sess_inquiry1["FACTEMAIL"],
			'inquiry_CREATEBY' => "xx"
		);
		$this->saleservice_model->issue_newinquiry1($data);
		//Inquiry 1

		//Inquiry 2
		$sess_inquiry2 = $this->session->userdata("new_inquiry2");		
		$data =array(
			"DOC_ID" 						=> $DOC_ID,
			"inquiry_INDUSTRYTYPE" 			=> $sess_inquiry2["INDUSTRYTYPE"],
			"inquiry_MAINPRODUCT" 			=> $sess_inquiry2["MAINPRODUCT"],
			"inquiry_INDUSTRYWNAME" 		=> $sess_inquiry2["INDUSTRYWNAME"],
			"inquiry_CHEMNAME" 				=> $sess_inquiry2["CHEMNAME"],
			"inquiry_PRESENTSTORE" 			=> $sess_inquiry2["PRESENTSTORE"],
			"inquiry_MAXSTORE" 				=> $sess_inquiry2["MAXSTORE"],
			"inquiry_GENRATEWMONTH"		    => $sess_inquiry2["GENRATEWMONTH"],
			"inquiry_GENRATEWYEAR" 			=> $sess_inquiry2["GENRATEWYEAR"],
			"inquiry_GENRATEPDAYOPT" 		=> $sess_inquiry2["GENRATEPDAYOPT"],
			"inquiry_GENRATEPDAYTXT" 		=> $sess_inquiry2["GENRATEPDAYTXT"],
			"inquiry_GENRATEPMONTHOPT" 		=> $sess_inquiry2["GENRATEPMONTHOPT"],
			"inquiry_GENRATEPMMONTHTXT" 	=> $sess_inquiry2["GENRATEPMMONTHTXT"],
			"inquiry_PHYSOLIDOPT" 			=> $sess_inquiry2["PHYSOLIDOPT"],
			"inquiry_PHYPOWDEROPT" 			=> $sess_inquiry2["PHYPOWDEROPT"],
			"inquiry_PHYLUMPOPT" 			=> $sess_inquiry2["PHYLUMPOPT"],
			"inquiry_PHYSIZETXT" 			=> $sess_inquiry2["PHYSIZETXT"],
			"inquiry_PHYSLUDGEOPT" 			=> $sess_inquiry2["PHYSLUDGEOPT"],
			"inquiry_PHYPUMPOPT" 			=> $sess_inquiry2["PHYPUMPOPT"],
			"inquiry_PHYUNPUMPOPT" 			=> $sess_inquiry2["PHYUNPUMPOPT"],
			"inquiry_PHYWETOPT" 			=> $sess_inquiry2["PHYWETOPT"],
			"inquiry_PHYLIQUIDOPT" 			=> $sess_inquiry2["PHYLIQUIDOPT"],
			"inquiry_PHYODORTXT" 			=> $sess_inquiry2["PHYODORTXT"],
			"inquiry_PHYCOLORTXT" 			=> $sess_inquiry2["PHYCOLORTXT"],
			"inquiry_CHEMWATERTXT"		    => $sess_inquiry2["CHEMWATERTXT"],
			"inquiry_CHEMWATEROPT" 			=> $sess_inquiry2["CHEMWATEROPT"],
			"inquiry_CHEMOILOPT" 			=> $sess_inquiry2["CHEMOILOPT"],
		); 
		$this->saleservice_model->issue_newinquiry2($data);
		//Inquiry 2

		//Inquiry 2 wastecomponent		
		$sess_wastecomponent = $this->session->userdata("wastecomponent");
		if(!empty($sess_wastecomponent)) :		
		foreach($sess_wastecomponent as $row) :
		$data = array(
			"DOC_ID" 						=> $DOC_ID,
			"inquiry_WASTECOMPONENT"	=> $row["wastecomponent"],
			"inquiry_APPROX"			=> $row["approx"]
		); 
		$this->saleservice_model->issue_newinquiry2_watercomponent($data);
		endforeach;		
		endif;
		//Inquiry 2 wastecomponent

		// Inquiry 3
		$sess_inquiry3 = $this->session->userdata("new_inquiry3");		
		$data =array(
			"DOC_ID"						=> $DOC_ID,
			"inquiry_HAZEXPLOSIVEOPT"		=> $sess_inquiry3["HAZEXPLOSIVEOPT"],
 			"inquiry_HAZFLAMOPT"			=> $sess_inquiry3["HAZFLAMOPT"],
 			"inquiry_HAZFLAMTXT"			=> $sess_inquiry3["HAZFLAMTXT"],
 			"inquiry_HAZCORRASOPT"			=> $sess_inquiry3["HAZCORRASOPT"],
 			"inquiry_HAZCORRASTXT"			=> $sess_inquiry3["HAZCORRASTXT"],
 			"inquiry_HAZREACTIONOPT"		=> $sess_inquiry3["HAZREACTIONOPT"],
 			"inquiry_HAZREACTIONTXT"		=> $sess_inquiry3["HAZREACTIONTXT"],
 			"inquiry_HAZCARINOPT"			=> $sess_inquiry3["HAZCARINOPT"],
 			"inquiry_HAZCARINTXT"			=> $sess_inquiry3["HAZCARINTXT"],
 			"inquiry_HAZTOXICOPT"			=> $sess_inquiry3["HAZTOXICOPT"],
 			"inquiry_HAZACUTEOPT"			=> $sess_inquiry3["HAZACUTEOPT"],
 			"inquiry_HAZCHRONOPT"			=> $sess_inquiry3["HAZCHRONOPT"],
 			"inquiry_HAZCHRONTXT"			=> $sess_inquiry3["HAZCHRONTXT"],
 			"inquiry_HAZRADIOOPT"			=> $sess_inquiry3["HAZRADIOOPT"],
 			"inquiry_HAZRADIOTXT"			=> $sess_inquiry3["HAZRADIOTXT"],
 			"inquiry_HAZPESTICIDEOPT"		=> $sess_inquiry3["HAZPESTICIDEOPT"],
 			"inquiry_HAZPESTICIDETXT"		=> $sess_inquiry3["HAZPESTICIDETXT"],
 			"inquiry_HAZOTHEROPT"			=> $sess_inquiry3["HAZOTHEROPT"],
 			"inquiry_HAZOTHERTXT"			=> $sess_inquiry3["HAZOTHERTXT"], 
 			"inquiry_GENPROCESSOPT"			=> $sess_inquiry3["GENPROCESSOPT"],
 			"inquiry_GENDISCAREOPT"			=> $sess_inquiry3["GENDISCAREOPT"],
 			"inquiry_GENOTHEROPT"			=> $sess_inquiry3["GENOTHEROPT"],		
 			"inquiry_GENCLEANOPT"			=> $sess_inquiry3["GENCLEANOPT"],
 			"inquiry_GENSPILLOPT"			=> $sess_inquiry3["GENSPILLOPT"],
 			"inquiry_STOCLASSOTP"			=> $sess_inquiry3["STOCLASSOTP"],
 			"inquiry_STOMIXOPT"				=> $sess_inquiry3["STOMIXOPT"],
 			"inquiry_STOOUTDOOROPT"			=> $sess_inquiry3["STOOUTDOOROPT"],
 			"inquiry_STOBAGOTP"				=> $sess_inquiry3["STOBAGOTP"],
 			"inquiry_STOBAGTXT"				=> $sess_inquiry3["STOBAGTXT"],
 			"inquiry_STODRUMOTP"			=> $sess_inquiry3["STODRUMOTP"],
 			"inquiry_STODRUMTXT"			=> $sess_inquiry3["STODRUMTXT"],
 			"inquiry_STOTANKOTP"			=> $sess_inquiry3["STOTANKOTP"],
 			"inquiry_STOINDOOROTP"			=> $sess_inquiry3["STOINDOOROTP"],
 			"inquiry_STOYARDOTP"			=> $sess_inquiry3["STOYARDOTP"],
 			"inquiry_STOOTHEROTP"			=> $sess_inquiry3["STOOTHEROTP"],
 			"inquiry_REGNONHARARDOTP"		=> $sess_inquiry3["REGNONHARARDOTP"],
 			"inquiry_REGHAZARDOTP"			=> $sess_inquiry3["REGHAZARDOTP"],
 			"inquiry_PERNECOTP"				=> $sess_inquiry3["PERNECOTP"],
 			"inquiry_PERUNNECOTP"			=> $sess_inquiry3["PERUNNECOTP"],
 			"inquiry_DISMETTXT"				=> $sess_inquiry3["DISMETTXT"],
 			"inquiry_CLIMTXT"				=> $sess_inquiry3["CLIMTXT"],
 			"inquiry_DISCOSTTXT"			=> $sess_inquiry3["DISCOSTTXT"],
 			"inquiry_PRECAUTXT"				=> $sess_inquiry3["PRECAUTXT"],
 			"inquiry_EMPPROTECTTXT"			=> $sess_inquiry3["EMPPROTECTTXT"],
 			"inquiry_SYMPTXT"				=> $sess_inquiry3["SYMPTXT"],
		);
		$this->saleservice_model->issue_newinquiry3($data);
		// Inquiry 3
		
		// Inquiry 4
		$sess_inquiry4 = $this->session->userdata("new_inquiry4");		
		$data =array(
		"DOC_ID"			=>  $DOC_ID,
		"FAPTXT"     		=>  $sess_inquiry4["FAPTXT"],
		"ENVTXT"     		=>  $sess_inquiry4["ENVTXT"],
		"EMERTXT"     		=>  $sess_inquiry4["EMERTXT"],
		"OTHERTXT"     		=>  $sess_inquiry4["OTHERTXT"],
		"DETAILTXT"     	=>  $sess_inquiry4["DETAILTXT"],
		"INFOMANTXT"     	=>  $sess_inquiry4["INFOMANTXT"],
		"INFOPOSTXT"     	=>  $sess_inquiry4["INFOPOSTXT"],
		"WMCNAMETXT"     	=>  $sess_inquiry4["WMCNAMETXT"],
		"CONCACTMANTXT"     =>  $sess_inquiry4["CONCACTMANTXT"],
		"COMTELTXT"     	=>  $sess_inquiry4["COMTELTXT"],
		"COMFAXTXT"     	=>  $sess_inquiry4["COMFAXTXT"],
		"TRANTXT"     		=>  $sess_inquiry4["TRANTXT"],
		"PRICETXT"     		=>  $sess_inquiry4["PRICETXT"],
		"COMPINFONAMETXT"   =>  $sess_inquiry4["COMPINFONAMETXT"],
		"COMPPOSTXT"     	=>  $sess_inquiry4["COMPPOSTXT"],
		);
		$this->saleservice_model->issue_newinquiry4($data);
		// Inquiry 4

		// Issue DOCFLOW 
		$data = array(
			"DOC_ID" 	=>		$DOC_ID,
			"DOC_TYPE" 	=>		"IQR",
			"CREATEBY"	=>		"xx"
		);
		$this->saleservice_model->issue_docflow($data);

		// Unset Inquiry Session 
		$this->session->unset_userdata("new_inquiry1");
		$this->session->unset_userdata("new_inquiry2");
		$this->session->unset_userdata("new_inquiry3");
		$this->session->unset_userdata("new_inquiry4");
		$this->session->unset_userdata("wastecomponent");
		// Redirect to Sale Service Page
		redirect(saleservice_url(),"refresh");
	}
//Inquiry ######################################################################################################################

//Quotation ####################################################################################################################
function quotation() {
		$data=array();
		if(!empty($_GET["DOC_ID"])) {
			$DOC_ID = $_GET["DOC_ID"];
			$this->load->model("saleservice_model");
			$data["inquiry1"] = $this->saleservice_model->getitem_inquiry1($DOC_ID);
		} 

		$this->load->view("main/header.php");
		$this->load->view("saleservice/saleservice.php");
		$this->load->view("saleservice/quotation.php",$data);
		$this->load->view("main/footer.php");
}
function quotationlist(){
		$this->load->model("saleservice_model");
		$data["quotation"] = $this->saleservice_model->get_quotation();
		$this->load->view("main/header.php");
		$this->load->view("saleservice/saleservice.php");
		$this->load->view("saleservice/quotationlist.php",$data);
		$this->load->view("main/footer.php");
}

	function save_quotation() {
		$mysess = $this->session->userdata('loggin_success');
		$user_FULLNAME = $mysess["user_FULLNAME"];
		
		$qt = $_GET["qt_obj"];
		$comp = $_GET["comp_obj"];
		$this->load->model("saleservice_model");
		$qt_id =  $this->saleservice_model->genqt_id();

		//$arr_comp = array_values($comp)[0];
		//echo $comp[0];
		foreach($comp as $row) :
			if($row["DOC_ID"]=="") :
				$this->load->model("saleservice_model");		
				$DOC_ID = $this->saleservice_model->gennewID();
			else :

				$DOC_ID = $row["DOC_ID"];
			endif; 
			
			$arr_comp = array(
				"DOC_ID"		=> $DOC_ID,
				"qt_id"			=> $qt_id,
				"qt_compname"	=> $row["qt_compname"],
				"qt_compaddr"	=> $row["qt_compaddr"],
				"qt_comptel"	=> $row["qt_comptel"],
				"qt_compfax"	=> $row["qt_compfax"],
				"qt_title"		=> $row["qt_title"],
				"qt_compcontact"	=> $row["qt_compcontact"],
				"qt_createby"	=> $user_FULLNAME,
			);
		endforeach;		
		$this->saleservice_model->save_quotation($arr_comp);

		$data = array(
			"DOC_ID" 	=>		$DOC_ID,
			"DOC_TYPE" 	=>		"QT",
			"CREATEBY"	=>		$user_FULLNAME
		);
		$this->saleservice_model->issue_docflow($data);

		foreach ($qt as $row) {
			$data = array(
				"DOC_ID"		=> $DOC_ID,
				"qt_id"			=>	$qt_id,
				"qt_desc"			=>	$row["qt_desc"],
				"qt_qty"			=>	$row["qt_qty"],
				"qt_price"			=>	$row["qt_price"],
				"qt_total"			=>	$row["qt_total"],
				"qt_unit"			=>	$row["qt_unit"],
			);
		$this->saleservice_model->save_quotationdesc($data);
		}
	//redirect('../saleservice/quotationlist','refresh');
	}
//Quotation ####################################################################################################################
function testmail() {
    	$this->load->model("sendmail_model");
    	$this->sendmail_model->testmail("saleoffice@thaionlyone.com");
    }

//Technical Review ####################################################################################################################
function techreview(){
		$data = array();
		$qt_id = $this->input->get("qt_id");
		$this->load->model("saleservice_model");

		$data["quotation"] = $this->saleservice_model->getitem_quotation($qt_id);
		$data["quotationdesc"] = $this->saleservice_model->getitem_quotationdesc($qt_id);
		//echo $this->saleservice_model->getitem_quotation($qt_id)->qt_id;
		$this->load->view("main/header.php");
		$this->load->view("saleservice/saleservice.php");
		$this->load->view("saleservice/techreview.php",$data);
		$this->load->view("main/footer.php");
}

function techreview_submit() {
	if(!empty($_POST["submit"])) {
		$this->load->model("sendmail_model");
		$this->load->model("saleservice_model");
		// user from 
		$mysess = $this->session->userdata('loggin_success');
		$user_FULLNAME = $mysess["user_FULLNAME"];	
		$user_EMAIL = $mysess["user_EMAIL"];		
		$user_ID = $mysess["user_ID"];
		$usergroup_ID = $mysess["usergroup_ID"];
		

		// user to
		$msg_body = $this->input->post("msg_body");
		$qt_id = $this->input->post("qt_id");
		$DOC_ID = $this->input->post("DOC_ID");
		$qt_compname = $this->input->post("qt_compname");
		$env = $this->saleservice_model->get_env();		

		foreach($env as $row) {
			$data = array(
				"msg_body"		=>	$msg_body,
				"msg_type"		=>	"techreview",

				"userfrom_id"		=>	$user_ID,
				"userfrom_email"	=>	$user_EMAIL,
				"userfrom_name"	=>	$user_FULLNAME,
				"userfrom_usergroup_ID"	=>	$usergroup_ID,

				"userto_id"		=>	$row->userID,
				"userto_email"		=>	$row->user_EMAIL,
				"userto_name"		=>	$row->user_FULLNAME,
				"userto_usergroup_ID"	=>	$row->usergroup_ID,
				"REF1"			=> 	$qt_id,
				"REF2"			=>	$qt_compname,
			);

			$this->saleservice_model->techreview_submit($data);				
		            $this->sendmail_model->techreview_mail($row->user_EMAIL,$qt_id,$DOC_ID,$qt_compname,$user_FULLNAME);			
		}	
		$opt = $this->saleservice_model->get_opt();	
		foreach($opt as $row) {
			$data = array(
				"msg_body"		=>	$msg_body,
				"msg_type"		=>	"techreview",

				"userfrom_id"		=>	$user_ID,
				"userfrom_email"	=>	$user_EMAIL,
				"userfrom_name"	=>	$user_FULLNAME,
				"userfrom_usergroup_ID"	=>	$usergroup_ID,

				"userto_id"		=>	$row->userID,
				"userto_email"		=>	$row->user_EMAIL,
				"userto_name"		=>	$row->user_FULLNAME,
				"userto_usergroup_ID"	=>	$row->usergroup_ID,
				"REF1"			=> 	$qt_id,
				"REF2"			=>	$qt_compname,
			);
			$this->saleservice_model->techreview_submit($data);
			$this->saleservice_model->techreview_updateqt($qt_id) ;
			$this->sendmail_model->techreview_mail($row->user_EMAIL,$qt_id,$DOC_ID,$qt_compname,$user_FULLNAME);			
		}
		redirect('../saleservice/quotationlist','refresh');
			
	}
}
//Technical Review ####################################################################################################################
}











