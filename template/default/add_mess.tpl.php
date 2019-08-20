<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 rg-content2">
	
	<div class="col-sm-offset-3 col-sm-9">
		
		<h1 class="rg-form-header visible-lg visible-md visible-sm">Добавить объявление</h1>
		<form class="form-horizontal addLstng" method='POST' enctype="multipart/form-data">
			<div class="form-group form-bottom-border">
				<label class="col-sm-3 control-label ">Заголовок</label>
				<div class="col-sm-9">
					<input class="form-control" type='text'  name='title' value="<?=$_SESSION['p']['title'];?>">
				</div>
			</div>
			<div class="form-group form-bottom-border">
				
				<label class="col-sm-3 control-label">Текст</label>
				<div class="col-sm-9">
					
					<textarea class="form-control" placeholder="Текст объявления" style="min-height:200px" name="text"><?=$_SESSION['p']['text'];?></textarea>
					
				</div>
			</div>
			<div class="form-group form-bottom-border">
				<label class="col-sm-3 control-label " for="rootSectionId">
				Категория</label>
				<div class="col-sm-6">
					<div class="rg-form-selects-list">
						
						<div class="rg-form-select-list">
							
							
							<select class="form-control" name="id_categories">
								<? if($categories) :?>
								<? foreach($categories as $key => $item) :?>
								<optgroup label="<?=$item[0]?>">
									<? foreach($item['next'] as $k => $v) :?>
									<option value="<?=$k?>">--<?=$v;?></option>
									<? endforeach;?>
								</optgroup>
								<? endforeach;?>
								<? endif;?>
							</select>
						</div>
					</div>
				</div>
				<br />
			</div>
			<!--Выбеирте тип объявления:<br />
			<? if($razd) :?>
			<? foreach($razd as $item) :?>
			<input type="radio" name="id_razd" value="<?=$item['id'];?>"><?=$item['name'];?>
			<? endforeach;?>
			<? endif;?>-->
			
			<br />
			<div class="form-group form-bottom-border">
				<label class="col-sm-3 control-label">Город</label>
				<div class="col-sm-3">
					
					
					<input type='text' name='town' value="<?=$_SESSION['p']['town'];?>">
					<br>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="col-sm-3 control-label ">
				Телефон</label>
				<div class="col-sm-9">
					
					
					<input class="form-control" type="tel" name="phone" placeholder="+992" value="<?=$_SESSION['p']['phone'];?>">
				</div>
			</div>
			<div class="form-group form-bottom-border">
				<label class="col-sm-3 control-label" >Фото</label>
				<div class="col-sm-9">
					<div class="alert rg-upload">
						<div class="clearfix">
							<div class="pull-left control-label">Вы можете загрузить до 12 фотографий в формате JPG, GIF или PNG.</div>
							<br>
							<div>
								
								<input type="hidden" name="MAX_FILE_SIZE" value="2097152">
								<input type='file' name='img'><br />
								
							</div>
							
							Дополнительные изображения:<br>
							<input type='file' name='mini[]'><br />
							<input type='file' name='mini[]'>
							<br /><br />
						</div>
					</div>
				</div>
			</div>
			<div class="form-group form-bottom-border">
				<label class="col-sm-3 control-label">Срок актуальности</label>
				<div class="col-sm-9">
					<div class="row">
						<div class="col-sm-4">
							
							
							<select name="time">
								<option value="10">10 дней</option>
								<option value="15">15 дней</option>
								<option value="20">20 дней</option>
								<option value="30">30 дней</option>
							</select>
						</div>
						<div class="col-sm-8 help-block rulesNot">
							Срок актуальности считается от даты последнего редактирования объявления.
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="form-group form-bottom-border">
				<label class="col-sm-3 control-label">Цена</label>
				<input type='text' name='price' value="<?=$_SESSION['p']['price'];?>">
				
			</div>
			<br>
			<div class="form-group form-bottom-border">
				<label class="col-sm-3 control-label">Введите строку</label>
				<div class="col-sm-9">
					<img src="capcha.php"><br /><br /><input type='text' name='capcha'>
					
					
					<input type='submit' name='reg' value='Добавить'>
				</div>
			</div>
			<div class="alert viberHelp"><p>
				Если вы не смогли самостоятельно подать объявления на сайте RG.tj, просим текст и фото своего объявления отправить на номер: <br><span><b>+375255216355</b></span></p><br>
				<ul class="list-inline">
					<li>
						<a href="viber://add?number=%2B375255216355"><img src="<?=TEMPLATE;?>/images/viber.jpg"></a>
					</li>
					<li><a href="https://api.whatsapp.com/send?phone=375255216355">
					<img src="<?=TEMPLATE;?>/images/whatsapp.jpg"></a>
				</li>
				<li><img src="<?=TEMPLATE;?>/images/imo.jpg"></li>
				<li><img src="<?=TEMPLATE;?>/images/telegram.jpg"></li>
				<li><img src="<?=TEMPLATE;?>/images/wechat.jpg"></li>
			</ul>
		</div>
		
	</form>
	<? unset($_SESSION['p'])?>
</div>