<div class="wd-modal__table-container" data-bind="style:modalStyle" style="width: 500px; left: 258px; opacity: 1; position: static;">
				<div class="wd-modal__cell-container" data-bind="click:$parent.hideModals.bind($parent),clickBubble:false">
					<div class="wd-modal">
						<div class="wd-modal__header">
							
							<h4 class="wd-modal__header-text">Авторизация</h4>
						</div>
						<div class="wd-modal__restrictor">
							<div class="wd-modal__content">
								<!-- ko widget: widgetOptions --><div class="alert alert-danger"style="display: none;">
	
	
</div>
<div class="alert alert-success"  style="display: none;">
	
	
</div>

		
			<?=$_SESSION['msg'];?>
			<? unset($_SESSION['msg'])?>
<form class="form-horizontal" method='POST'>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="inputEmail">Емейл/Телефон</label>
		<div class="col-sm-8">
			<input class="form-control" type='text' name='login' placeholder="Email или телефон">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="inputPassword">Пароль</label>
		<div class="col-sm-8">
			<input type='password' name='password' class="form-control"  placeholder="Пароль">
			
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<div class="checkbox">
				<label>
					 <input type="checkbox" name='member' value="1">Запомнить на 2 недели и входить автоматически
				</label>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<input style="float:left" type='submit' value='Вход'>
			<div class="pull-right rg-links">
				<a href="?action=registration.php">Регистрация</a> | <a href="?action=returnpass">Забыли пароль?</a>
			</div>
		</div>
    </div>
</form>
<!-- /ko -->
							</div>
						</div>
					</div>
				</div>
			</div>


			