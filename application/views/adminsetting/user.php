<div class="row" ng-app>
	<div class="container">
		<div class="span16">
			<h4><strong><u>User</u></strong></h4>
		</div>
		<div class="span5">	
			<form id="userform" autocomplete='off' action="<?=base_url()?>adm_user/adduser" method="post" data-toggle="validator" role="form">		
			<div class="form-group">	
				<input  type="email" name="user_EMAIL" data-error="กรุณาระบุอีเมล์ให้ถูกต้อง" class="form-control" placeholder="e-mail" required>					
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group">	
				<input  type="email" name="user_EMAILRE" data-error="กรุณาระบุอีเมล์ให้ถูกต้อง" class="form-control" placeholder="ยืนยัน e-mail" required>						
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group">	
				<input type="text" name="user_PASSWORD" data-error="ตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น หกตัวอักษรขึ้นไป" pattern="^([_A-z0-9]){6,}$" class="form-control" placeholder="รหัสผ่าน" required>						
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group">	
				<input type="text" name="user_PASSWORDRE" data-error="ตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น หกตัวอักษรขึ้นไป" pattern="^([_A-z0-9]){6,}$" class="form-control" placeholder="ยืนยัน รหัสผ่าน" required>						
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group">	
				<input type="text" name="user_FULLNAME" class="form-control" placeholder="ชื่อ-นามสกุล" required>						
			</div>
			
			<div class="form-group">	
				<select   class="form-control" name="department_ID" >
					<option value="-1">สังกัดแผนก:Department</option>
					<?php foreach($department as $row) {?>		
					<option value="<?=$row->department_ID ?>"><?=$row->department_ID ?>:<?=$row->department_NAME ?></option> 
					<?php }?>
				</select>	
						
			</div>
			<div class="form-group">	
				<select   class="form-control" name="usergroup_ID">
					<option value="-1">กลุ่มผู้ใช้งาน:User Group</option>
					<?php foreach($usergroup as $row) {?>		
					<option value="<?=$row->usergroup_ID ?>"><?=$row->usergroup_ID ?>:<?=$row->usergroup_NAME ?></option> 
					<?php }?>
				</select>	
						
			</div>
			<div class="form-group">
				<button id="submit" name="submit" type="submit"class="btn btn-info">Save</button>
			</div>
		</form>
		</div>
		<div class="span10">
			<table class="table">
				<thead>
					<th>#</th>
					<th width="30%">ชื่อ-สกุล</th>				
					<th>E-mail</th>	
					<th>Dept.</th>
					<th>UserGroup</th>	
					<th>Status</th>	
					<th>Action</th>				
				</thead>
				<?php $i=0; foreach ($user as $row) : $i++; ?>
				<tr>
					<td><?=$i?></td>
					<td><?=$row->user_FULLNAME?></td>				
					<td><?=$row->user_EMAIL?></td>
					<td><?=$row->department_ID?></td>
					<td><?=$row->usergroup_ID?></td>
					<td><?=$row->user_STATUS?></td>
					<td>
							<a onclick="return editUNIT(this,'<?=$row->user_EMAIL?>')" href="javascript:;" class="btn btn-small btn-info">
									<i class="btn-icon-only icon-edit"></i> แก้ไข
							</a>
							<!--
							<a onclick="javascript:if(!confirm('Click OK if you are sure you want to delete.'))return false;" 
							href="<?php echo base_url().'adm_user/delete/'.$row->user_EMAIL.'/'.$row->user_FULLNAME;?>" 
							class="btn btn-small btn-danger">
									<i class="btn-icon-only icon-minus-sign"></i> ลบ
							</a> -->
						</td>
				</tr>
				<?php  endforeach;?>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function($) {

		$('#userform').submit(function(event) {
			var user_EMAIL = $("input[name='user_EMAIL']").val();
			var user_EMAILRE = $("input[name='user_EMAILRE']").val();

			var user_PASSWORD = $("input[name='user_PASSWORD']").val();
			var user_PASSWORDRE= $("input[name='user_PASSWORDRE']").val();

			var department_ID = $("select[name='department_ID']").val();
			var usergroup_ID= $("select[name='usergroup_ID']").val();
			
			if(user_EMAIL!=user_EMAILRE) {
				alert("ผิดพลาด! กรอกอีเมล์ไม่ตรงกัน");
				return false;
			} else if(user_PASSWORD!=user_PASSWORDRE) {
				alert("ผิดพลาด! กรอกรหัสผ่านไม่ตรงกัน");
				return false;
			} else if (department_ID==="-1") {
				alert("ผิดพลาด! กรุณาเลือกแผนก");
				return false;
			} else if (usergroup_ID==="-1") {
				alert("ผิดพลาด! กรุณาเลือกกลุ่มผู้ใช้งาน");
				return false;
			} else {
				return true;			
			}
			
		});
		
	});		
</script>

<style>
.help-block {
  display: block;
  margin-bottom: 0px;

}

.help-block ul {
	list-style-type: none;
margin-left: 4px;
	margin-top: -8px;
}
.help-block li {
	color: red;
	font-size: 11px;
}
</style>






