 <div class="signin-row row" style="margin-top:80px;">
                    <div class="span4"></div>
                    <div class="span8">
                        <div class="container-signin">
                            <legend>Please Login...</legend>
                            <form action='<?=base_url()?>adm_user/login' data-toggle='validator' role='form' method='POST' id='loginForm' class='' autocomplete='off'>
                                <div class="form-inner">
                                    <div class="input-prepend">
                                        
                                        <span class="add-on" rel="tooltip" title="E-Mail Address" data-placement="top"><i class="icon-envelope"></i></span>
                                        <input data-error="กรุณาระบุอีเมล์ให้ถูกต้อง" type='email' class='form-control span4' id='username' required name="user_EMAIL" />
                                        
                                    </div>

                                    <div class="input-prepend">
                                        
                                        <span class="add-on"><i class="icon-key"></i></span>
                                        <input data-error="รหัสผ่านไม่ถูกต้อง" type='password' pattern="^([_A-z0-9]){6,}$" class='span4' id='password' name="user_PASSWORD" required/>
                                        
                                    </div>
                                    <label class="checkbox" for='remember_me'>Remember me
                                        <input type='checkbox' id='remember_me'
                                               />
                                    </label>
                                </div>
                                <footer class="signin-actions">
                                    <input class="btn btn-primary" type='submit' 
                                    id="submit" name="submit" value='Login'/>
                                </footer>
                            </form>
                        </div>
                    </div>
                    <div class="span3"></div>
                </div>