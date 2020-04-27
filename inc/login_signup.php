<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>giriş</h3>
        <form method="post" action="#">
        	<div class="row">
        		 <label for="username">
                    Kullanıcı Adı:
                    <input type="text" name="username" id="username" placeholder="Hugh Jackman"  required="required" />
                </label>
        	</div>
           
            <div class="row">
            	<label for="password">
                    Şifre:
                    <input type="password" name="password" id="password" placeholder="******"  required="required" />
                </label>
            </div>
           <div class="row">
		   		<button id="girisButton">giriş</button>
           </div>
        </form>
    </div>
</div>
<!--end of login form popup-->
<!--signup form popup-->
<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>kayit ol</h3>
        <form>
            <div class="row">
                 <label for="username-2">
                    kullanıcı adı:
                    <input type="text" name="username" id="username-2" placeholder="Hugh Jackman"  required="required" />
                </label>
            </div>
           
            <div class="row">
                <label for="email-2">
                    mail:
                    <input type="email" name="email" id="email-2" placeholder="Mail giriniz" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    şifre:
						<!-- pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" -->
                    <input type="password" name="password" id="password-2" placeholder=""  required="required" />
                </label>
            </div>
             <div class="row">
                <label for="repassword-2">
                    şifre onayla:
						<!-- pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" -->
                    <input type="password" name="password2" id="repassword-2" placeholder=""  required="required" />
                </label>
            </div>
           <div class="row">
             <button id="kayitButton">kayit ol</button>
           </div>
        </form>
    </div>
</div>
<!--end of signup form popup-->