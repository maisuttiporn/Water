<div class="row">
	<div class="container">
		<div class="span16">
		<h4><strong><u>User Group</u></strong></h4>
		</div>
		<div class="span5">
			<form action="<?=adminsetting_url()?>usergroup" method="post">
			<div class="form-group">
				<label for="">รหัสกลุ่มผู้ใช้งาน (User Group ID)</label>
				<input id="usergroup_ID" name="usergroup_ID" type="text" class="form-control">
				<input type="hidden" name="ID" id="ID">
			</div>
			<div class="form-group">
				<label for="">ชื่อกลุ่มผู้ใช้งาน (User Group Name)</label>
				<input id="usergroup_NAME" name="usergroup_NAME" type="text" class="form-control">
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
						<th class="header" width="20%">User Group ID</th>
						<th class="header" width="50%">User Group Name</th>
						<th class="td-actions header" >Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=0; foreach($usergroup as $row) { $i++;?>
					<tr>
						<td><?=$i?></td>
						<td><?=$row->usergroup_ID?></td>
						<td><?=$row->usergroup_NAME?></td>
						<td>
							<a onclick="return editUSERGROUP(this,'<?=$row->ID?>')" href="javascript:;" class="btn btn-small btn-info">
									<i class="btn-icon-only icon-edit"></i> แก้ไข
							</a>
							<a onclick="javascript:if(!confirm('Click OK if you are sure you want to delete.'))return false; " href="<?php echo adminsetting_url().'usergroup/delete/'.$row->ID;?>" class="btn btn-small btn-danger">
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
function editUSERGROUP(o,id) {
	var ID = id;
	var usergroup_ID = $(o).parent().prev().prev().html();
	var usergroup_NAME = $(o).parent().prev().html();

	$('#ID').val(ID);
	$('#usergroup_ID').val(usergroup_ID);
	$('#usergroup_ID').attr('readonly',true);
	$('#usergroup_NAME').val(usergroup_NAME);
	$('#submit').attr('name','update');
	//alert(unit_ID+v);
return false;
}
</script>
