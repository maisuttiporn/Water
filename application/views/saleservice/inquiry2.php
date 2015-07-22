	<div class="row">
	<div class="span16">
	<!-- form -->
	<form action="" method="post" >
		<div class="span16" style="text-align:center;">
				<h4><strong><u>Waste Inquiry request form 2/4</u></strong></h4>
		</div>
		
		<div class="span16">
			<div class="blockoff-left">
			    <legend class="lead">
			    <h4><strong>
			    3.ส่วนของข้อมูลอุตสาหกรรม: Waste Data</strong></h4>
			    </legend>
			    <div class="row">
			    <div class="contaniner">
		    	<div class="span5">
					<div class="form-group">
						<label for="">
							<strong>4.ประเภทอุตสาหกรรม : Type of Industry</strong>
						</label>
						<input type="text" class="form-group" style="width:100%"
						name="INDUSTRYTYPE" value="<?= $inquiry2["INDUSTRYTYPE"];?>">
					</div>
		    	</div>
		    	<div class="span10">
					<div class="form-group">
						<label for="">
							<strong>ผลิตภัณฑ์หลัก : Main Product</strong>
						</label>
						<input type="text" class="form-group" style="width:100%"
						name="MAINPRODUCT" value="<?= $inquiry2["MAINPRODUCT"];?>">
					</div>
		    	</div>
		    	<div class="span15">
					<div class="form-group">
						<label for="">
							<strong>5.ชื่อของเสียอุตสาหกรรม : Industrial Waste Name </strong>
						</label>
						<input type="text" class="form-group" style="width:100%"
						name="INDUSTRYWNAME" value="<?= $inquiry2["INDUSTRYWNAME"];?>">
					</div>
		    	</div>
		    	<div class="span15">
					<div class="form-group">
						<label for="">
							<strong>6.ชื่อทางเคมี : Chemical/Technical Name </strong>
						</label>
						<input type="text" class="form-group" style="width:100%"
						name="CHEMNAME" value="<?= $inquiry2["CHEMNAME"];?>">
					</div>
		    	</div>

		    	<div class="span7">
					<div class="form-group">
						<h5>7.ปริมาณ : Quality</h5>
						<label for="">
							<strong>7.1.กองเก็บ ณ ปัจจุบัน : Present Stored </strong>
						</label>
						<input type="text" class="form-group" style="width:60%"
						name="PRESENTSTORE" value="<?= $inquiry2["PRESENTSTORE"];?>">
						ตัน/Tons
					</div>
		    	</div>
		    	<div class="span8">
					<div class="form-group">
						<h5>&nbsp;</h5>
						<label for="">
							<strong>เก็บได้มากสุด : Maximum Stored </strong>
						</label>
						<input type="text" class="form-group" style="width:60%"
						name="MAXSTORE" value="<?= $inquiry2["MAXSTORE"];?>">
						ตัน/Tons
					</div>
		    	</div>

		    	<div class="span7">
					<div class="form-group">					
						<label for="">
							<strong>7.2.อัตราการเกิด : Generated rate of Waste </strong>
						</label>
						<input type="text" class="form-group" style="width:60%"
						name="GENRATEWMONTH" value="<?= $inquiry2["GENRATEWMONTH"];?>">
						ตัน/เดือน : Tons/Month
					</div> 
		    	</div>
		    	<div class="span8">
					<div class="form-group">					
						<label for="">
							<strong> &nbsp; </strong>
						</label>
						<input type="text" class="form-group" style="width:60%"
						name="GENRATEWYEAR" value="<?= $inquiry2["GENRATEWYEAR"];?>">
						ตัน/ปี Tons/Year
					</div>
		    	</div>

		    	<div class="span7">
					<div class="form-group">					
						<label for="">
							<strong>7.3.ความถี่ในการเกิดประจำ : Period 
							<!-- Check Box-->
							<input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="GENRATEPDAYOPT" value="1"
							<?php if($inquiry2["GENRATEPDAYOPT"]=="1") : ?>
							checked
							<?php endif;?>
							/> <!-- Check Box-->
							 ทุก : Every
							</strong>						
						</label>					
						<input type="text" class="form-control" style="width:60%"
						name="GENRATEPDAYTXT" value="<?= $inquiry2["GENRATEPDAYTXT"];?>" >
						วัน/Day 
					</div> 
		    	</div>
		    	<div class="span8">
					<div class="form-group">					
						<label for="">
							<strong>ความถี่ในการเกิดประจำ : Period 
							<!-- Check Box-->
							<input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="GENRATEPMONTHOPT" value="1"
							<?php if($inquiry2["GENRATEPMONTHOPT"]=="1") : ?>
							checked
							<?php endif;?>
							/> <!-- Check Box-->
							 ทุก : Every
							 </strong>
						</label>					
						<input type="text" class="form-control" style="width:60%"
						name="GENRATEPMMONTHTXT" value="<?= $inquiry2["GENRATEPMMONTHTXT"];?>" >
						เดือน/Month 
					</div> 
		    	</div>
				
				<div class="span15">
					<div class="form-group">
						<h5>8.ลักษณะทางกายภาพ : Physical Characteristic</h5>	
					</div>
		    	</div>			
		    	<div class="span15">
					<div class="form-group">								
						<label for="">
						<strong>8.1</strong>
						 	<!-- Check Box-->
							<input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="PHYSOLIDOPT" value="1" 
							<?php if($inquiry2["PHYSOLIDOPT"]=="1") : ?>
							checked
							<?php endif;?>
							/> <!-- Check Box-->
							 <u>แข็ง : Solid </u>
							 ( 
							 <!-- Check Box-->
							 <input type="checkbox" class="form-control" style="margin-bottom:4px;"
							 name="PHYPOWDEROPT" value="1"
							 <?php if($inquiry2["PHYPOWDEROPT"]=="1") : ?>
							checked
							<?php endif;?>
							 /> <!-- Check Box-->
							  เป็นผง : Powder 
							  <!-- Check Box-->
							  <input type="checkbox" class="form-control" style="margin-bottom:4px;"
							 name="PHYLUMPOPT" value="1"
							 <?php if($inquiry2["PHYLUMPOPT"]=="1") : ?>
							checked
							<?php endif;?>
							  /> <!-- Check Box-->
							  เป็นก้อน : Lump 
							  - ขนาดปริมาณ : Approximate Size 
							  <input type="text" name="PHYSIZETXT" value="<?= $inquiry2["PHYSIZETXT"];?>" class="form-control">
							  )
						</label>	
					</div>
		    	</div>

		    	<div class="span15">
					<div class="form-group">								
						<label for="">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<!-- Check Box-->
							<input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="PHYSLUDGEOPT" value="1"
							<?php if($inquiry2["PHYSLUDGEOPT"]=="1") : ?>
							checked
							<?php endif;?>
							/><!-- Check Box-->
							 <u>โคลน : Sludge </u>
							 ( 
							 <input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="PHYPUMPOPT" value="1"
							<?php if($inquiry2["PHYPUMPOPT"]=="1") : ?>
							checked
							<?php endif;?>
							/><!-- Check Box-->						
							  สามารถปั๊มได้ : Pumpable 
							  <input type="checkbox" class="form-control" style="margin-bottom:4px;"
							  name="PHYUNPUMPOPT" value="1"
							<?php if($inquiry2["PHYUNPUMPOPT"]=="1") : ?>
							checked
							<?php endif;?>
							/><!-- Check Box-->					
							  ไม่สามารถปั๊มได้ : Unpumpable 						 
							  )
						</label>	
					</div>
		    	</div>

		    	<div class="span4" style="margin-top:7px;">
					<div class="form-group">								
						<label for="">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<!-- Check Box-->		
							<input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="PHYWETOPT" value="1"
							<?php if($inquiry2["PHYWETOPT"]=="1") : ?>
							checked
							<?php endif;?>
							/><!-- Check Box-->					
							 <u>กึ่งของเหลว : Wet Solid </u>						 
						</label>	
					</div>
		    	</div>

		    	<div class="span11" style="margin-top:7px;">
					<div class="form-group">								
						<label for="">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<!-- Check Box-->		
							<input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="PHYLIQUIDOPT" value="1"
							<?php if($inquiry2["PHYLIQUIDOPT"]=="1") : ?>
							checked
							<?php endif;?>
							/><!-- Check Box-->	
							 <u>ของเหลว : Liquid </u>						 
						</label>	
					</div>
		    	</div>

		    	<div class="span7">
					<div class="form-group">					
						<label for="">
							<strong>8.2 กลิ่น : Odor 				
							</strong>
							
						</label>					
						<input type="text" class="form-control" style="width:60%" 
						name="PHYODORTXT" value="<?= $inquiry2["PHYODORTXT"];?>">
					</div> 
		    	</div>
		    	<div class="span8">
					<div class="form-group">					
						<label for="">
							<strong>8.3 สี : Color 				
							 </strong>
						</label>					
						<input type="text" class="form-control" style="width:60%" 
						name="PHYCOLORTXT" value="<?= $inquiry2["PHYCOLORTXT"];?>">
					</div>
		    	</div>
				
				<div class="span15">
					<div class="form-group">
						<h5>9.ลักษณะทางเคมี : Chemical Characteristic </h5>	
					</div>
		    	</div>	

		    	<div class="span7">
					<div class="form-group">					
						<label for="">
							<strong>9.1 ปริมาณน้ำ : Water Content 				
							 </strong>
						</label>	
						<input type="text" class="form-control" style="width:60%"
						name="CHEMWATERTXT" value="<?= $inquiry2["CHEMWATERTXT"];?>">		
						%		
					</div>
		    	</div>
		    	<div class="span8">
					<div class="form-group">	
						<label for="">
							<strong>&nbsp;				 				
							 </strong>
							
						</label>
							<!-- Check Box-->	
							 <input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="CHEMWATEROPT" value="1"
							<?php if($inquiry2["CHEMWATEROPT"]=="1") : ?>
							checked
							<?php endif;?>
							/><!-- Check Box-->	
						  ละลายในน้ำได้ : Water Base 
						  <!-- Check Box-->	
						  <input type="checkbox" class="form-control" style="margin-bottom:4px;"
							name="CHEMOILOPT" value="1"
							<?php if($inquiry2["CHEMOILOPT"]=="1") : ?>
							checked
							<?php endif;?>
							/><!-- Check Box-->	
						   ละลายในน้ำมันได้ : Oil/Hydro carbon base 			
					 	
					</div>
		    	</div>

		    	<div class="span15">
					<div class="form-group">
						<h5>9.2 องค์ประกอบของ Waste : Waste Components แนบ (MSDS/LAB Analysis report) </h5>	
						<label for="">
					<input id="wastecomponent" type="text" class="form-control" placeholder="Waste Components">
					<input id="approx" type="text" class="form-control" placeholder=" Approx (%)">
					<button type="button" id="ADDWasteComponent" class="btn btn-info" style="margin-bottom:7px;">เพิ่ม</button> 		
						</label>
					
					</div>
		    	</div>
		    	<div class="span15" style="padding-right:20px;">	    
		    		<table class="table table-bordered" id="TBwastecomponent">
		    			<thead>	    				
		    				<th style="text-align:center;">องค์ประกอบ Waste : Waste Components</th>
		    				<th style="text-align:center;" >ประมาณ : Approx (%)</th>
		    				<th>Action</th>
		    			</thead>
		    			<?php if(!empty($wastecomponent)) : foreach ($wastecomponent as $row) : ?>
						<tr>
							<td><?=$row["wastecomponent"];?></td>
							<td><?=$row["approx"];?></td>
							<td><button onclick="return delTR(this)"  class="btn btn-danger btn-small">ลบ</button>
							</td>
						</tr>
		    			<?php endforeach; endif;?>
		    		</table>
		    		<br><br>
		    	</div>
		    	<div class="span15">
		    		<div class="form-group">
		    		<button name="submit" type="submit" class="btn btn-info btn-large">SAVE 2/4</button>
			    	<a href="<?=base_url()?>saleservice/unset_inquiry1/new" class="btn btn-info btn-large" >Clear Form</a>
			    	
				    </div>
		    	</div>

					
		    	</div>
		    	</div>
				</div>

		</div>
	</form> <!-- end form-->
	</div>
	</div>
	<script type="text/javascript">
		$('#ADDWasteComponent').click(function(event) {
			var wastecomponent = $('#wastecomponent').val();
			var approx = $('#approx').val();
			var numrow = $('#TBwastecomponent tr').length;
			if(wastecomponent!="" && numrow <12) {
				var tr = '<tr>';			
				tr+= '<td>'+wastecomponent +'</td>';
				tr+= '<td>'+approx+'</td>';
				tr+= '<td><button onclick="return delTR(this)"  class="btn btn-danger btn-small">ลบ</button></td>';
				tr+= '</tr>';
				$('#TBwastecomponent').append(tr);
				$('#wastecomponent').val('');
				$('#approx').val('');
			}
			sess_wastecomponent();
		});
	function delTR(e){
		 $(e).parent().parent().remove();
		 sess_wastecomponent();
	return false;
	}
	function sess_wastecomponent(){
		var objComp = [];
		 $('#TBwastecomponent tbody tr').each(function(i){
		 	var obj = {
		 		wastecomponent:$(this).children().html(),
		 		approx:$(this).children().next().html()
		 	};
		 	objComp.push(obj);
		 	//console.log($(this).children().html());
		 	//console.log($(this).children().next().html());
		 });
		 //console.log(objComp);
		 $.ajax({
		 	method:'GET',
		 	data:{
		 		wastecomponent:1,
		 		Objcomp: objComp
		 		},
		 	url:'../saleservice/sess_wastecomponent'
		 }).done(function(data) {
		 	//console.log(data);
		 });
	}
	</script>








