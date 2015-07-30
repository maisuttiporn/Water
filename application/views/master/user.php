<div class="row">       
    <div class="span16">
        <legend><i class="icon-user icon-large"></i> เพิ่มผู้ใช้งานใหม่</legend>
    </div>
                    <div id="acct-password-row" class="span6">
                                <fieldset>                               
                                    <div class="control-group ">
                                        <label class="control-label">ชื่อ-นามสกุล <span class="required">*</span></label>
                                        <div class="controls">
                                            <input id="current-pass-control" name="password"  type="text" value="" autocomplete="false">

                                        </div>
                                    </div>
                                    <div class="control-group">
                                    <label for="challengeQuestion" class="control-label">สังกัดแผนก <span class="required">*</span></label>
                                    <div class="controls">
                                        <select id="challenge_question_control" >
                                            <option value="">-- กรุณาเลือกสังกัดแผนก --</option>
                                            <option value="In which city were you born?">
                                                In which city were you born?
                                            </option>
                                            <option value="What is your birth date?">
                                                What is your birth date?
                                            </option>
                                            <option value="What are the last four digits of your driver's license number?">
                                                What are the last four digits of your drivers license number?
                                            </option>
                                            <option value="What is your zip or postal code?">
                                                What is your zip or postal code?
                                            </option>
                                            <option value="What high school did you attend?">
                                                What high school did you attend?
                                            </option>
                                            <option value="What was the name of your first pet?">
                                                What was the name of your first pet?
                                            </option>
                                            <option value="What is your father's middle name?">
                                                What is your father's middle name?
                                            </option>
                                            <option value="What is your mother's middle name?">
                                                What is your mother's middle name?
                                            </option>
                                            <option value="What is your mother's maiden name?">
                                                What is your mother's maiden name?
                                            </option>
                                            <option value="What is your spouse's middle name?">
                                                What is your spouse's middle name?
                                            </option>
                                        </select>

                                    </div>
                                </div>
                                    <div class="control-group ">
                                        <label class="control-label">อีเมล์ <span class="required">*</span></label>
                                        <div class="controls">
                                            <input id="new-pass-control" name="newPassword"  type="password" value="" autocomplete="false">
                                        </div>
                                    </div>
                                    <div class="control-group ">
                                        <label class="control-label">รหัสผ่าน <span class="required">*</span></label>
                                        <div class="controls">
                                            <input id="new-pass-verify-control" name="newPasswordVerification"  type="password" value="" autocomplete="false">

                                        </div>
                                    </div>
                                    <div class="control-group ">
                                        <label class="control-label">ยินยันรหัสผ่าน <span class="required">*</span></label>
                                        <div class="controls">
                                            <input id="new-pass-verify-control" name="newPasswordVerification"  type="password" value="" autocomplete="false">

                                        </div>
                                    </div>
                                </fieldset>
                        </div>
                        <div id="acct-verify-row" class="span10">
                            <fieldset>
                                <div>
                                    <img src="<?=theme_url()?>myimg/login.jpg" alt="">
                                </div>
                              
                            </fieldset>
                        </div>
           <div class="span16">
               <footer id="submit-actions" class="form-actions">
                        <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">บันทึก</button>
                        <button type="submit" class="btn" name="action" value="CANCEL">ยกเลิก</button>
                    </footer>
           </div>             
</div>                    