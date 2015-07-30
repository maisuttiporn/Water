<link rel="stylesheet" href="<?=theme_url() ?>css/inquiry.css" type="text/css">
<div class="row">
<div class="span16">
	<div class="span16" style="text-align:center;">
			<h4><strong><u>Quotation form.</u></strong></h4>
	</div>
	
	<div class="span16">
		<div class="blockoff-left">
		    <legend class="lead">
		    <h4><strong>
		    ข้อมูลทั่วไป</strong></h4> 
		    </legend>		    
		    <div class="row">
		    <div class="contaniner">
		
				<div class="span15">
					<label for="">
						<strong> DOC ID</strong>
						:
						<strong id="DOC_ID"><?php if (!empty($inquiry1->DOC_ID)) : ?><?=$inquiry1->DOC_ID?><?php endif;?></strong>
	
						<!--
						<input type="text" class="form-control span3" placeholder="วันที่ออกใบเสนอราคา">						
						-->
					</label>
				</div>				
				<div class="span15">
					<label for="">					
						<input type="text" class="form-control span15" placeholder="เรื่อง" 
						value="เสนอราคาอัตราการให้บริการบำบัดน้ำเสีย" id="qt_title">						
					</label>
				</div>
				<div class="clearfix"></div>
				<div class="span8">
					<label for="">						
						<input type="text" class="form-control span8" placeholder="ชื่อบริษัท" id="qt_compname"
						<?php if (!empty($inquiry1->inquiry_FACTNAME)) : ?>
							value="<?=$inquiry1->inquiry_FACTNAME?>" 
						<?php else : ?>
							value=""
						<?php endif;?>			
					</label>
				</div>
				<div class="span7">
					<label for="">						
						<input type="text" class="form-control span7" placeholder="ผู้ติดต่อ" id="qt_compcontact"
						<?php if (!empty($inquiry1->inquiry_FACTCONTACT)) : ?>
							value="<?=$inquiry1->inquiry_FACTCONTACT?>" 
						<?php else : ?>
							value=""
						<?php endif;?>											
					</label>
				</div>
				<div class="span15">
					<label for="">						
						<input type="text" class="form-control span15" placeholder="ที่อยู่" id="qt_compaddr"
						<?php if (!empty($inquiry1->inquiry_FACTADDR)) : ?>
							value="<?=$inquiry1->inquiry_FACTADDR?>" 
						<?php else : ?>
							value=""
						<?php endif;?>						
					</label>
				</div>
				<div class="span8">
					<label for="">						
						<input type="text" class="form-control span8" placeholder="โทรศัพท์" id="qt_comptel"
						<?php if (!empty($inquiry1->inquiry_FACTTEL)) : ?>
							value="<?=$inquiry1->inquiry_FACTTEL?>" 
						<?php else : ?>
							value=""
						<?php endif;?>						
					</label>
				</div>
				<div class="span7">
					<label for="">						
						<input type="text" class="form-control span7" placeholder="โทรสาร" id="qt_compfax"
						<?php if (!empty($inquiry1->inquiry_FACTNAME)) : ?>
							value="<?=$inquiry1->inquiry_FACTNAME?>" 
						<?php else : ?>
							value=""
						<?php endif;?>						
					</label>
				</div>


		    </div>
		    </div>
		</div>
	</div>

	<div class="span16">

		<div class="blockoff-left">
		    <legend class="lead">
		    <h4><strong>
		    ข้อมูลบริการ : ค่าบริการบำบัดและกำจัดกากอุตสาหกรรม</strong></h4> 
		    </legend>		    
		    <div class="row">
		    <div class="contaniner">
		    	<div class="span15">
		    		<div class="form-group">
		    		<label for="">						
						<input id="qt_desc" type="text" class="form-control span15" placeholder="รายการสินค้าและบริการ">						
					</label>
		    		</div>
		    	</div>
		    	<div class="span3">
		    		<div class="form-group">
		    		<label for="">						
						<input id="qt_qty" type="text" class="form-control span3" placeholder="จำนวณ">						
					</label>
		    		</div>
		    	</div>
		    	<div class="span2">
		    		<div class="form-group">
		    		<label for="">	
		    			<input id="qt_price" type="text" class="form-control span2" placeholder="ราคา/บาท">											
					</label>
		    		</div>
		    	</div>
		    	<div class="span10">
		    		<div class="form-group">
		    		<label for="">						
						<input id="qt_unit" type="text" value="ตัน" class="form-control span2" placeholder="หน่วย">	
						<button id="qt_btn" class="btn btn-primary" style="margin-left:8px;margin-bottom:6px;" >เพิ่ม</button>					
					</label>
		    		</div>
		    	</div>


				<div class="span15">				
					<table class="table table-bordered" id="TBqt">
						<thead>
							<th>#</th>
							<th width="60%">รายการสินค้าและบริการ</th>
							<th>จำนวณ</th>
							<th>หน่วย</th>
							<th>ราคา</th>
							<th>รวม</th>
							<th></th>
						</thead>
					</table>					
				</div>
				<div class="span15">
							
					<table class="table table-bordered" >
						<thead>							
							<th style="text-align:right;" colspan="5" width="80%"><h5>รวมทั้งสิ้น</h5></th>
							
							<th style=";"><h5><span id="qt_total" >00.00 </span> บาท</h5></th>
						</thead>
					</table>					
				</div>
				<div class="span15">
					<div class="form-group" style="text-align:center;">
						<button id="qt_save" type="button" style="width:30%" class="btn btn-danger btn-large">บันทึก</button>
					</div>
				</div>
		    </div>
		    </div>
		</div>
	</div>

</div>

</div>
</div>
<script type="text/javascript">
	$('#qt_btn').click(function(event) {
		var desc = $('#qt_desc').val();
		var unit = $('#qt_unit').val();
		var price = $('#qt_price').val();
		var qty = $('#qt_qty').val();

		var TBqt = $('#TBqt');
		tr='<tr>';
		tr+='<td>'+$('#TBqt tr').length+'</td>';
		tr+='<td>'+ desc +'</td>';
		tr+='<td>'+qty+'</td>';
		tr+='<td>'+unit+'</td>';
		tr+='<td>'+price+'</td>';
		tr+='<td>'+(qty*price)+'</td>';
		tr+='<td><button type="button" onclick="return delTR(this)" class="btn btn-danger btn-small">x</button></td>';
		tr+='</tr>';
		TBqt.append(tr);
		clearqt();
		show_total();
	});
	$('#qt_qty').keypress(function(e) {
		 if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57)){
	    	return false;
	     }
	});
	$('#qt_price').keypress(function(e) {
		//alert(e.which);
		 if( e.which!=8 && e.which!=46 && e.which!=0 && (e.which<48 || e.which>57)){
	    	return false;
	     }
	});
	function delTR(e){
		 $(e).parent().parent().remove();
		 show_total();
	return false;
	}
	function show_total() {
		var total=0;
		$('#TBqt tbody tr').each(function(i){

			$(this).find('td:eq(0)').html(i+1);// Rearange nrownumber
			//console.log($(this+':first').html());
			total+=parseFloat($(this).children().next().next().next().next().next().html());
		 	//console.log($(this).children().next().next().next().next().next().html());		 	
		 	//console.log($(this).children().html());
		 	//console.log($(this).children().next().html());
		 	});
		$('#qt_total').html(total);
	}
	function clearqt() {
	 $('#qt_desc').val('');
	 $('#qt_unit').val('ตัน');
	 $('#qt_price').val('');
	 $('#qt_qty').val('');
	}
	$('#qt_save').click(function(event) {
		var obj  ;
		var qt_obj =[];
		var comp_obj =[];

			var obj = {
				DOC_ID:$('#DOC_ID').html(),
				qt_title:$('#qt_title').val(),
				qt_compname:$('#qt_compname').val(),
				qt_compcontact:$('#qt_compcontact').val(),
				qt_compaddr:$('#qt_compaddr').val(),
				qt_comptel:$('#qt_comptel').val(),
				qt_compfax:$('#qt_compfax').val()
			};
			comp_obj.push(obj);

			$('#TBqt tbody tr').each(function(i){
				 obj = {
					qt_desc:$(this).find('td:eq(1)').html(),
					qt_qty:$(this).find('td:eq(2)').html(),
					qt_unit:$(this).find('td:eq(3)').html(),
					qt_price:$(this).find('td:eq(4)').html(),
					qt_total:(parseFloat($(this).find('td:eq(2)').html())*parseFloat($(this).find('td:eq(4)').html()))
				};
				qt_obj.push(obj);
			});	
			$.ajax({
				url: '../saleservice/save_quotation',
				type: 'GET',				
				data: {qt_obj: qt_obj,comp_obj:comp_obj},
			})
			.done(function(data) {
				console.log("success",data);
			});
			
			
			window.location = '../saleservice/quotationlist';

	});
</script>











