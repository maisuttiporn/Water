<link rel="stylesheet" href="<?=theme_url() ?>css/inquiry.css" type="text/css">
<div class="row">
<div class="span16">
<form action="" method="post">
	<div class="span16" style="text-align:center;">
			<h4><strong><u>Waste Inquiry request form 4/4</u></strong></h4>
	</div>

	<div class="span16">
		<div class="blockoff-left">
		    <legend class="lead">
		    <h4><strong>
		    3.ส่วนของข้อมูลอุตสาหกรรม: Waste Data</strong></h4>
		    </legend>
		    <div class="row">
		    <div class="contaniner">

				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<strong>19.การปฐมพยาบาล : First Aid Procedutre</strong>
						</label>
					</div>
				</div>
				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<textarea class="form-control span15" 
							name="FAPTXT" ><?=$inquiry4["FAPTXT"] ?></textarea>
						</label>
					</div>
				</div>

				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<strong>20.ผลต่อสิ่งแวดล้อม : Environmental Impact</strong>
						</label>
					</div>
				</div>
				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<textarea class="form-control span15" 
							name="ENVTXT" ><?=$inquiry4["ENVTXT"] ?></textarea>
						</label>
					</div>
				</div>

				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<strong>21.การปฏิบัติเมื่อดกิดเหตุฉุกเฉิน : Emergency Response Procedure</strong>
						</label>
					</div>
				</div>
				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<textarea class="form-control span15" 
							name="EMERTXT" ><?=$inquiry4["EMERTXT"] ?></textarea>
						</label>
					</div>
				</div>

				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<strong>22.ข้อมูลอื่นๆที่เป็นประโยชน์ : Others/Remarks</strong>
						</label>
					</div>
				</div>
				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<textarea class="form-control span15" 
							name="OTHERTXT" ><?=$inquiry4["OTHERTXT"] ?></textarea>
						</label>
					</div>
				</div>
				
				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<strong>23.กระบวนการที่ก่อให้เกิดของเสียโดยละเอียด : Detail of process of waste generating</strong>
						</label>
					</div>
				</div>
				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<textarea class="form-control span15" 
							name="DETAILTXT" ><?=$inquiry4["DETAILTXT"] ?></textarea>
						</label>
					</div>
				</div>
				
				
				<div class="span15">
					<div class="form-group" id="inqform">
					<br>
						<label for="">
							<strong>ผู้ให้ข้อมูล : </strong> <input type="text" class="form-control span6"
							name="INFOMANTXT" value="<?=$inquiry4["INFOMANTXT"] ?>">
							<strong> ตำแหน่ง : </strong> <input type="text" class="form-control span6"
							name="INFOPOSTXT" value="<?=$inquiry4["INFOPOSTXT"] ?>">
						</label>
					</div>
				</div>

				
				
		    </div>

			</div>



		</div>


	</div>

	<div class="span16">
		<div class="blockoff-left">
		    <legend class="lead">
		    <h4><strong>
		    4.ส่วนของ Waste Management: Waste Management Section</strong></h4>
		    </legend>
		    <div class="row">
		    <div class="contaniner">
				<div class="span15">
					<div class="form-group">
						<label for="">
							บริษัท : Waste Management Company
							<input type="text" class="form-control span11"
							name="WMCNAMETXT" value="<?=$inquiry4["WMCNAMETXT"] ?>">						
						</label>
					</div>
				</div>
				<div class="span15">
					<div class="form-group">
						<label for="">
							ชื่อผู้ติดต่อ : Contact Person 
							<input type="text" class="form-control"
							name="CONCACTMANTXT" value="<?=$inquiry4["CONCACTMANTXT"] ?>">	
						</label>
					</div>
				</div>
				<div class="span15">
					<div class="form-group">
						<label for="">
							 โทรศัพท์ : Tel
							<input type="text" class="form-control"
							name="COMTELTXT" value="<?=$inquiry4["COMTELTXT"] ?>">
							 โทรสาร : Fax
							<input type="text" class="form-control"
							name="COMFAXTXT" value="<?=$inquiry4["COMFAXTXT"] ?>">
						</label>
					</div>
				</div>
				<div class="span15">
					<div class="form-group">
						<label for="">
							วิธีการขนส่ง : Transportation
							<input type="text" class="form-control span12"
							name="TRANTXT" value="<?=$inquiry4["TRANTXT"] ?>">						
						</label>
					</div>
				</div>
				<div class="span15">
					<div class="form-group">
						<label for="">
							ราคาที่เสนอ : Disposal fee propose 
							<input type="text" class="form-control"
							name="PRICETXT" value="<?=$inquiry4["PRICETXT"] ?>">	
							บาท/ตัน : Bath/Ton
						</label>
					</div>
				</div>
				
				<div class="span15">
					<div class="form-group" id="inqform">
					<br>
						<label for="">
							<strong>ผู้ให้ข้อมูล : </strong> <input type="text" class="form-control span6"
							name="COMPINFONAMETXT" value="<?=$inquiry4["COMPINFONAMETXT"] ?>">
							<strong> ตำแหน่ง : </strong> <input type="text" class="form-control span6"
							name="COMPPOSTXT" value="<?=$inquiry4["COMPPOSTXT"] ?>">
						</label>
					</div>
				</div>
				<div class="span15">
		    		<div class="form-group">
		    		<button name="submit" type="submit" class="btn btn-info btn-large">SAVE 3/4</button>
			    	<a href="<?=base_url()?>saleservice/unset_inquiry1/new" class="btn btn-info btn-large" >Clear Form</a>
				    </div>
		    	</div>



		    </div>
		    </div>
		</div>
	</div>
</form>
</div>
</div>