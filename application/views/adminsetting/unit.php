<div class="row" ng-app>
	<div class="container">
		<div class="span16">
			<h4><strong><u>Unit</u></strong></h4>
		</div>
		<div class="span12">
			<form action="<?= adminsetting_url().'unit'?>" method="post">
			<div class="form-group">
				<label for=""><strong>ชื่อหน่วย(Unit Name)</strong></label>							
			</div>
			<div class="form-group form-inline">
			<input type="text" id="unit_NAME" name="unit_NAME" 
			class="form-control" placeholder="Input Unit Name Please.."> 	
			<input type="hidden" id="unit_ID" name="unit_ID">
			<button type="submit" id="submit" name="submit" class="btn btn-info">Save</button>
			</div>
			</form>
		</div>
		<div class="span16">
			<strong style="color:red;"></strong> 
		</div>
		<div class="span16">				
			<table  class="table table-hover">
				<thead>
					<tr>
						<th class="header">#</th>
						<th class="header" width="80%">Unit Desc.</th>
						<th class="td-actions header" >Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=0; foreach($unit as $row) { $i++;?>
					<tr>
						<td><?=$i?></td>
						<td><?=$row->unit_NAME?></td>
						<td>
							<a onclick="return editUNIT(this,'<?=$row->unit_ID?>')" href="javascript:;" class="btn btn-small btn-info">
									<i class="btn-icon-only icon-edit"></i> แก้ไข
							</a>
							<a onclick="javascript:if(!confirm('Click OK if you are sure you want to delete.'))return false;" href="<?php echo adminsetting_url().'unit/delete/'.$row->unit_ID.'/'.$row->unit_NAME;?>" class="btn btn-small btn-danger">
									<i class="btn-icon-only icon-minus-sign"></i> ลบ
							</a>
						</td>
					</tr>
					<?php }?>					                                        
					</tbody>
				</table>

                          
		</div>
</div>

<script type="text/javascript">
function editUNIT(o,id) {
	var unit_ID = id;
	var unit_NAME = $(o).parent().prev().html();
	$('#unit_ID').val(unit_ID);
	$('#unit_NAME').val(unit_NAME);
	$('#submit').attr('name','update');
	//alert(unit_ID+v);
return false;
}
</script>








