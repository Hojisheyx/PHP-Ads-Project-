<h3>Поиск</h3>
<form class="form" method="GET" >
	<label for="type">Категория</label>
	<div class="form-group">
		<div class="rg-form-selects-list">
			<div class="rg-form-select-list">
				<select class="form-control input-sm" name="id_categories">
					<option selected="selected" value="0">Выберите категорию</option>
					<optgroup label="Транспорт">
						<option value="1">--Автомобили</option>
						<option value="6">--Мото</option>
					</optgroup>
					<optgroup label="Интернет">
						<option value="7">--Компьютеры</option>
						<option value="8">--Игры</option>
					</optgroup>
					<optgroup label="Недвижимость">
						<option value="9">--Мебель</option>
						<option value="10">--Сантехника</option>
						<<option value="11">--Недвижимость</option>}
						option
					</optgroup>
					<optgroup label="Сад, огород">
						<option value="12">--Интсрумент</option>
						<option value="13">--Строй материалы</option>
					</optgroup>
				</select>
			</div>
		</div>
	</div>
	<div style  data-bind="visible:isReady">
		<div class="form-group">
			<label for="srch" data-bind="dict:'textSearch'">Поиск по тексту объявления</label>
			<input id="srch" value="search"  type="hidden" class="form-control input-sm" name="action" data-bind="value:srch,valueUpdate:'afterkeydown'">
		</div>
		<div class="form-group">
			<label for="money_from" data-bind="text:moneyTextLabel">Цена</label>
			<div class="rg-row-sep"></div>
			<div class="row">
				<div class="col-xs-6">
<select class="form-control input-sm" name="formData[money_from]" data-bind="value:money_from,options:moneyOptions,optionsValue:'id',optionsText:'name',optionsCaption:'---'"><option value="">---</option><option value="5000">5.000 у.е.</option><option value="10000">10.000 у.е.</option><option value="15000">15.000 у.е.</option><option value="20000">20.000 у.е.</option><option value="25000">25.000 у.е.</option><option value="30000">30.000 у.е.</option><option value="35000">35.000 у.е.</option><option value="40000">40.000 у.е.</option><option value="45000">45.000 у.е.</option><option value="50000">50.000 у.е.</option><option value="60000">60.000 у.е.</option><option value="70000">70.000 у.е.</option><option value="80000">80.000 у.е.</option><option value="90000">90.000 у.е.</option><option value="100000">100.000 у.е.</option><option value="150000">150.000 у.е.</option><option value="200000">200.000 у.е.</option><option value="250000">250.000 у.е.</option><option value="300000">300.000 у.е.</option><option value="500000">500.000 у.е.</option><option value="900000">900.000 у.е.</option></select>
</div>
          <div class="col-xs-6">
          	<select class="form-control input-sm" name="formData[money_to]" data-bind="value:money_to,options:moneyOptions,optionsValue:'id',optionsText:'name',optionsCaption:'---'"><option value="">---</option><option value="5000">5.000 у.е.</option><option value="10000">10.000 у.е.</option><option value="15000">15.000 у.е.</option><option value="20000">20.000 у.е.</option><option value="25000">25.000 у.е.</option><option value="30000">30.000 у.е.</option><option value="35000">35.000 у.е.</option><option value="40000">40.000 у.е.</option><option value="45000">45.000 у.е.</option><option value="50000">50.000 у.е.</option><option value="60000">60.000 у.е.</option><option value="70000">70.000 у.е.</option><option value="80000">80.000 у.е.</option><option value="90000">90.000 у.е.</option><option value="100000">100.000 у.е.</option><option value="150000">150.000 у.е.</option><option value="200000">200.000 у.е.</option><option value="250000">250.000 у.е.</option><option value="300000">300.000 у.е.</option><option value="500000">500.000 у.е.</option><option value="900000">900.000 у.е.</option></select>
          </div>
					
				</div>
			</div>
			<div class="clearfix">
				<div>
				<button type="submit" class="btn btn-default rg-btn-gray btn-sm" id="filter_form_submit">
					<span data-bind="dict:'search'">Поиск</span></button>
                   </div>
               </div>
				Тип объявления:<br>
				<input name="id_razd" value="1" type="radio">Предложение
				<input name="id_razd" value="2" type="radio">Спрос
			</form>
		</div>
			<h3>Категории</h3>
			<ul class="categories">
				<? if(is_array($categories)):?>
				<? foreach($categories as $key=>$value):?>
				<? if($value['next']) :?>
				<strong><li><?=$value[0];?></li></strong>
				<ul>
					<? foreach($value['next'] as $k=>$v):?>
					<li>- <a href="?action=categories&id_cat=<?=$k?>"><?=$v;?></a></li>
					
					<? endforeach;?>
				</ul>
				<? endif;?>
				<? endforeach;?>
				<? endif;?>
				
			</ul>
		</div>