<div class="row">
	<div class="container">
		<div class="span16">
			<h4><strong><u>Department</u></strong></h4>
		</div>
		<div class="span5">
			<form action="<?=adminsetting_url()?>department" method="post">
			<div class="form-group">
				<label for="">รหัสแผนกผู้ใช้งาน (Department ID)</label>
				<input id="department_ID" name="department_ID" type="text" class="form-control">
				<input type="hidden" name="ID" id="ID">
			</div>
			<div class="form-group">
				<label for="">ชื่อแผนกผู้ใช้งาน (Department Name)</label>
				<input id="department_NAME" name="department_NAME" type="text" class="form-control">
			</div>
			<div class="form-group">
				<button id="submit" name="submit" type="submit"class="btn btn-info">Save</button>
			</div>
			</form>
		</div>
		<div class="span10">
			<table  class="table table-hover">
				<thead>
					<tr>
						<th class="header">#</th>
						<th class="header" width="20%">Department ID</th>
						<th class="header" width="50%">Department Name</th>
						<th class="td-actions header" >Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=0; foreach($department as $row) { $i++;?>
					<tr>
						<td><?=$i?></td>
						<td><?=$row->department_ID?></td>
						<td><?=$row->department_NAME?></td>
						<td>
							<a onclick="return editDEPARTMENT(this,'<?=$row->ID?>')" href="javascript:;" class="btn btn-small btn-info">
									<i class="btn-icon-only icon-edit"></i> แก้ไข
							</a>
							<a onclick="javascript:if(!confirm('Click OK if you are sure you want to delete.'))return false; " href="<?php echo adminsetting_url().'department/delete/'.$row->ID;?>" class="btn btn-small btn-danger">
									<i class="btn-icon-only icon-minus-sign"></i> ลบ
							</a>
						</td>
					</tr>
					<?php }?>					                                        
					</tbody>
				</table>
		</div>
	</div>
</div>
<script type="text/javascript">
function editDEPARTMENT(o,id) {
	var ID = id;
	var department_ID = $(o).parent().prev().prev().html();
	var department_NAME = $(o).parent().prev().html();

	$('#ID').val(ID);
	$('#department_ID').val(department_ID);
	$('#department_ID').attr('readonly',true);
	$('#department_NAME').val(department_NAME);
	$('#submit').attr('name','update');
	//alert(unit_ID+v);
return false;
}
</script>
