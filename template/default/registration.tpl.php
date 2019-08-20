
	<h1>Регистрация нового пользователя</h1>
	<?=$_SESSION['msg'];?>
	<? unset($_SESSION['msg']);?>
		<form class="form-horizontal" method='POST'>
			<div class="form-group">
				<label class="col-sm-4 control-label" for="inputEmail">Логин</label>
          <div class="col-sm-8">
          	<input class="form-control" type='text' name='reg_login' value="<?=$_SESSION['reg']['login'];?>">
          </div>
			
		<br></div>
		<div class="form-group">
				<label class="col-sm-4 control-label" for="inputEmail">Пароль</label>
				 <div class="col-sm-8">
			<input class="form-control" type='password' name='reg_password'>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="inputEmail">Подтвердите пароль</label>
		<div class="col-sm-8">
			<input class="form-control" type='password' name='reg_password_confirm'>
		</div>
	</div>
	<div class="form-group">
	 <label class="col-sm-4 control-label" for="inputEmail">Почта</label>
	 <div class="col-sm-8">
			<input class="form-control"  type='text' name='reg_email' value="<?=$_SESSION['reg']['email'];?>">
		</div>
	</div>
		<div class="form-group">
			 <label class="col-sm-4 control-label" for="inputEmail">Имя</label>
			 <div class="col-sm-8">
			 <input class="form-control" type='text' name='reg_name' value="<?=$_SESSION['reg']['name'];?>">
		</div>
		</div>
			<div class="form-group">
				
			
	    <div class="col-sm-offset-3 col-sm-9">
	    	<button style="float:left" type='submit' class="btn btn-primary rg-btn-add" name='reg' >Зарегистрироваться</button>
	    	
	    </div>
	</div>
		
	</form>
