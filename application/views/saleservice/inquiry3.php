<link rel="stylesheet" href="<?=theme_url() ?>css/inquiry.css" type="text/css">
<div class="row">
<div class="span16">
<form action="" method="post">
	<div class="span16" style="text-align:center;">
			<h4><strong><u>Waste Inquiry request form 3/4</u></strong></h4>
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
							<strong>10.คุณสมบัติของเสียอันตราย : Hazardus Waste Characteristic</strong>
						</label>
					<label for="">
					  <!-- Check Box-->	
					  <input type="checkbox" class="form-control" style="margin-bottom:4px;"
					  name="HAZEXPLOSIVEOPT" value="1"
						<?php if($inquiry3["HAZEXPLOSIVEOPT"]=="1") : ?>
						checked
						<?php endif;?>
						/><!-- Check Box-->	
					  ระเบิดได้ : Explosiveness 		
					</label>
					<label for="">
						<!-- Check Box-->	
					  <input type="checkbox" class="form-control" style="margin-bottom:4px;"
						name="HAZFLAMOPT" value="1"
						<?php if($inquiry3["HAZFLAMOPT"]=="1") : ?>
						checked
						<?php endif;?>
						/><!-- Check Box-->						 
					  ติดไฟ : Flammability :
					  (จุดวาปไฟ : Flash Point 
					  <input class="form-control" type="text"
					  name="HAZFLAMTXT" value="<?=$inquiry3["HAZFLAMTXT"]?>"> C&deg;)	
					</label>

					<label for="">
					   <!-- Check Box-->	
					  <input type="checkbox" class="form-control" style="margin-bottom:4px;"
					  name="HAZCORRASOPT" value="1"
						<?php if($inquiry3["HAZCORRASOPT"]=="1") : ?>
						checked
						<?php endif;?>
						/><!-- Check Box-->	
					  กัดกร่อน : Corrosivity : 
					  (PH <input class="form-control" type="text" 
					  name="HAZCORRASTXT" value="<?=$inquiry3["HAZCORRASTXT"]?>"> )		
					</label>

					<label for="">
					  <!-- Check Box-->	
					  <input type="checkbox" class="form-control" style="margin-bottom:4px;"
					  name="HAZREACTIONOPT" value="1"
						<?php if($inquiry3["HAZREACTIONOPT"]=="1") : ?>
						checked
						<?php endif;?>
						/><!-- Check Box-->	
					  ทำปฏิกิริยากัน : Reaction with : 
					  <input class="form-control" type="text"
					  name="HAZREACTIONTXT" value="<?=$inquiry3["HAZREACTIONTXT"]?>" >		
					</label>
					
					<label for="">
					  <!-- Check Box-->	
					  <input type="checkbox" class="form-control" style="margin-bottom:4px;"
					  name="HAZCARINOPT" value="1"
						<?php if($inquiry3["HAZCARINOPT"]=="1") : ?>
						checked
						<?php endif;?>
						/><!-- Check Box-->
					  สารก่อมะเร็ง :  Carinogenicty : 
					  (ระบุ : Specity 
					  <input class="form-control" type="text"
					  name="HAZCARINTXT" value="<?=$inquiry3["HAZCARINTXT"]?>" >	 
					  )	
					</label>
					
					<label for="">
					  <!-- Check Box-->	
					  <input type="checkbox" class="form-control" style="margin-bottom:4px;"
					  name="HAZTOXICOPT" value="1"
						<?php if($inquiry3["HAZTOXICOPT"]=="1") : ?>
						checked
						<?php endif;?>
						/><!-- Check Box-->
					  มีสารพิษต่อร่างกายเจือปน  
					  ( <!-- Check Box-->	
					  <input type="checkbox" class="form-control" style="margin-bottom:4px;"
					  name="HAZACUTEOPT" value="1"
						<?php if($inquiry3["HAZACUTEOPT"]=="1") : ?>
						checked
						<?php endif;?>
						/><!-- Check Box-->
					   ออกฤทธิ์เฉียบพลัน:Acute Toxicity, 
					 <!-- Check Box-->	
					  <input type="checkbox" class="form-control" style="margin-bottom:4px;"
					  name="HAZCHRONOPT" value="1"
						<?php if($inquiry3["HAZCHRONOPT"]=="1") : ?>
						checked
						<?php endif;?>
						/><!-- Check Box-->
					   ออกฤทธิ์ไม่เฉียบพลัน:Chronic Toxicity	
					   ระบุ : Specity 
					   <input class="form-control" type="text"
					  name="HAZCHRONTXT" value="<?=$inquiry3["HAZCHRONTXT"]?>" >)	
					</label>
					
					<label for="">
					 <!-- Check Box-->	
					  <input type="checkbox" class="form-control" style="margin-bottom:4px;"
					  name="HAZRADIOOPT" value="1"
						<?php if($inquiry3["HAZRADIOOPT"]=="1") : ?>
						checked
						<?php endif;?>
						/><!-- Check Box-->
					  กัมมันตรังสี :  Radioactive : 
					  (ระบุ : Specity <input class="form-control" type="text"
					  name="HAZRADIOTXT" value="<?=$inquiry3["HAZRADIOTXT"]?>" > )	
					</label>
					
					<label for="">
					  <!-- Check Box-->	
					  <input type="checkbox" class="form-control" style="margin-bottom:4px;"
					  name="HAZPESTICIDEOPT" value="1"
						<?php if($inquiry3["HAZPESTICIDEOPT"]=="1") : ?>
						checked
						<?php endif;?>
						/><!-- Check Box-->
					  สารกำจัดศัตรูพืช / วัชพืช :  Pesticide/Herbicides : 
					  (ระบุ : Specity <input class="form-control" type="text"
					  name="HAZPESTICIDETXT" value="<?=$inquiry3["HAZPESTICIDETXT"]?>" > )	
					</label>

					<label for="">
						<!-- Check Box-->	
						<input type="checkbox" class="form-control" style="margin-bottom:4px;"
						name="HAZOTHEROPT" value="1"
						<?php if($inquiry3["HAZOTHEROPT"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->					 
					  อื่นๆ : Other <input class="form-control" type="text"
					  name="HAZOTHERTXT" value="<?=$inquiry3["HAZOTHERTXT"]?>" >	
					</label>


					</div>
				</div>

				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<strong>11.การเกิดของเสีย : Waste Generation</strong>
						</label>
					</div>
				</div>
				<div class="span8">
					<div class="form-group" id="inqform">
						<label for="">
						<!-- Check Box-->	
						<input type="checkbox" class="form-control" style="margin-bottom:4px;"
						name="GENPROCESSOPT" value="1"
						<?php if($inquiry3["GENPROCESSOPT"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->	
							จากกระบวนการผลิต : From process	
						</label>

						<label for="">
						<!-- Check Box-->	
						<input type="checkbox" class="form-control" style="margin-bottom:4px;"
						name="GENDISCAREOPT" value="1"
						<?php if($inquiry3["GENDISCAREOPT"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->	
							วัตถุที่ใช้แล้วเสื่อมคุณภาพ : Discareled
						</label>

						<label for="">
						<!-- Check Box-->	
						<input type="checkbox" class="form-control" style="margin-bottom:4px;"
						name="GENOTHEROPT" value="1"
						<?php if($inquiry3["GENOTHEROPT"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->	
							อื่นๆ : Other
						</label>
					</div>
				</div>
				<div class="span7">
					<div class="form-group" id="inqform">
						<label for="">
						<!-- Check Box-->	
						<input type="checkbox" class="form-control" style="margin-bottom:4px;"
						name="GENCLEANOPT" value="1"
						<?php if($inquiry3["GENCLEANOPT"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->	
							การล้าง : Cleaning	
						</label>

						<label for="">
							<!-- Check Box-->	
						<input type="checkbox" class="form-control" style="margin-bottom:4px;"
						name="GENSPILLOPT" value="1"
						<?php if($inquiry3["GENSPILLOPT"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->	
							หกรั่วไหล : Spillage residue
						</label>
					</div>
				</div>

				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<strong>12.วิธีการจัดเก็บ : Storage Method</strong>
						</label>
					</div>
				</div>
				
				<div class="span8">
					<div class="form-group" id="inqform">
						<label for="" >
							12.1
						<!-- Check Box-->	
						<input type="checkbox" class="form-control" style="margin-bottom:4px;"
						name="STOCLASSOTP" value="1"
						<?php if($inquiry3["STOCLASSOTP"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->	
							แยกตามประเภทของเสีย : Classifield	
						</label>
					</div>
				</div>
				<div class="span7">
					<div class="form-group" id="inqform">
						<label for="">
						<!-- Check Box-->	
						<input type="checkbox" class="form-control" style="margin-bottom:4px;"
						name="STOMIXOPT" value="1"
						<?php if($inquiry3["STOMIXOPT"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->
							รวมกับของเสียอื่นๆ : MIxed Waste	
						</label>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="span8">
					<div class="form-group" id="inqform">						
						<label for="" >
							12.2
							<input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="STOOUTDOOROPT" value="1"
						<?php if($inquiry3["STOOUTDOOROPT"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->
							กลางแจ้ง : Outdoor
						</label>

						<label for="">
							12.3
							<input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="STOBAGOTP" value="1"
						<?php if($inquiry3["STOBAGOTP"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->
							ใส่ถุงขนาด  : Bag's size 
							<input type="text" class="form-control" 
							name="STOBAGTXT" value="<?=$inquiry3["STOBAGTXT"]?>">
						</label>

						<label for="">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="STODRUMOTP" value="1"
						<?php if($inquiry3["STODRUMOTP"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->
							ถังขนาด  : Drum's size 
							<input type="text" class="form-control"
							name="STODRUMTXT" value="<?=$inquiry3["STODRUMTXT"]?>">
						</label>

						<label for="">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="STOTANKOTP" value="1"
						<?php if($inquiry3["STOTANKOTP"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->
							บ่อรวบรวม  : Collecting Tank							
						</label>
					</div>
				</div>
				<div class="span7">
					<div class="form-group" id="inqform">
						

						<label for="">
							<input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="STOINDOOROTP" value="1"
						<?php if($inquiry3["STOINDOOROTP"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->
							ในร่ม : Indoor
						</label>

						<label for="">
							<input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="STOYARDOTP" value="1"
						<?php if($inquiry3["STOYARDOTP"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->
							ลานกอง : Stock Yard
						</label>

						<label for="">
							<input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="STOOTHEROTP" value="1"
						<?php if($inquiry3["STOOTHEROTP"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->
							อื่นๆ : Other
						</label>
					</div>
				</div>

				<div class="clearfix"></div>

				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<strong>13.ประเภทของเสียทางกฎหมาย : Type of Waste according to regulation</strong>
						</label>
					</div>
				</div>

				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="REGNONHARARDOTP" value="1"
						<?php if($inquiry3["REGNONHARARDOTP"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->
							Non-Hazardous Waste
						</label>
						<label for="">
							<input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="REGHAZARDOTP" value="1"
						<?php if($inquiry3["REGHAZARDOTP"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->
							Hazardous Waste
						</label>
					</div>
				</div>

				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<strong>14.ใบอนุญาตินำออกนอกโรงงาน</strong>
						</label>
					</div>
				</div>

				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="PERNECOTP" value="1"
						<?php if($inquiry3["PERNECOTP"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->
							จำเป็นต้องมี : Necessary
						</label>
						<label for="">
							<input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="PERUNNECOTP" value="1"
						<?php if($inquiry3["PERUNNECOTP"]=="1") : ?>
							checked
						<?php endif;?>
						/><!-- Check Box-->
							ไม่จำเป็นต้องมี : Un-necessary
						</label>
					</div>
				</div>

				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<strong>15.วิธีกำจัดเดิม : Prior disposal method </strong>
							<input type="text" class="form-control span10"
							name="DISMETTXT" value="<?=$inquiry3["DISMETTXT"] ?>">
						</label>
						<label for="">
							&nbsp;&nbsp;&nbsp;สถานที่กำจัดเดิม : Prior waste climinator 
							<input type="text" class="form-control span10"
							name="CLIMTXT" value="<?=$inquiry3["CLIMTXT"] ?>">
						</label>
						<label for="">
							&nbsp;&nbsp;&nbsp;ราคาค่ากำจัดเดิม : Disposal Cost 
							<input type="text" class="form-control "
							name="DISCOSTTXT" value="<?=$inquiry3["DISCOSTTXT"] ?>"> บาท/ตัน Bath/Ton
						</label>
					</div>
				</div>

				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<strong>16.ข้อควรระวัง : Precaution</strong>
						</label>
					</div>
				</div>
				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<textarea class="form-control span15" id="" cols="30" rows="5"
							name="PRECAUTXT" ><?=$inquiry3["PRECAUTXT"] ?></textarea>
						</label>
					</div>
				</div>
				
				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<strong>17.อุปกรณ์ป้องกัน : Employee Protection</strong>
						</label>
					</div>
				</div>
				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<textarea class="form-control span15" id="" cols="30" rows="5"
							name="EMPPROTECTTXT" ><?=$inquiry3["EMPPROTECTTXT"] ?></textarea>
						</label>
					</div>
				</div>

				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<strong>18.การแสดงอาการเมื่อสัมผัส : Symptoms</strong>
						</label>
					</div>
				</div>
				<div class="span15">
					<div class="form-group" id="inqform">
						<label for="">
							<textarea class="form-control span15"  id="" cols="30" rows="5"
							name="SYMPTXT" ><?=$inquiry3["SYMPTXT"] ?></textarea>
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