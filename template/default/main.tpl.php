
				<? if($name_razd) :?>
					<strong>Раздел: <?=$name_razd;?></strong>
				<? endif;?>
				<? if($_SESSION['msg']) : ?>
					<?=$_SESSION['msg'];?>
					<? unset($_SESSION['msg']);?>
				<? endif;?>	
				<? if($text) :?>
					<? foreach($text as $item) :?>
						<div class="col-md-12-from-usual"> 
	                     <div class="media rg-sitem">
                          <a class="pull-left"  target="_blank" href="#" target="_blank">        
                          	<img  class="media-object rg-sitem-pic" src="<?=SITE_NAME."/".MINI.$item['img'];?>"></a>

						  <div class="media-body">
						  	<div class="clearfix rg-sitem-title">

                             <div class="rg-sitem-money hidden-xs"> <?=$item['price'];?></div>
                             
							<h4 class="media-heading rg-sitem-heading"><a href="?action=view_mess&id=<?=$item['id']?>"><?=$item['title']?></a></h4></div>

							<div class="rg-sitem-descr rg-sitem-vars">
								<span class="hidden-sm hidden-md hidden-lg rg-sitem-price"><?=$item['price'];?></span>
							</div>
							<div class="rg-sitem-descr rg-sitem-vars"></div>
					     <div class="rg-sitem-sub rg-sitem-vars">
					     	<span class="rg-block"><?=date("d.m.Y",$item['date'])?></span>
					     	<span class="rg-block"><?=$item['town']?></span>
					     </div>
					 </div>
					</div>
				</div>

						<!--<strong>Категория:</strong><?=$item['cat']?> 			|
						<strong>Тип объявления:</strong> <?=$item['razd']?>				|
						<strong>Город:</strong> <?=$item['town']?>	
						<strong>Телфон:</strong><?=$item['phone']?>
								
						<strong>Дата добавления объявления:</strong> <?=date("d.m.Y",$item['date'])?>				|
									|
						<strong>Автор</strong> <a href="mailto:<?=$item['email']?>"><?=$item['uname']?></a>
						
					</p>-->
					
					<!--<?=nl2br($item['text']);?>-->
						
			
					<? endforeach;?>
<? if($navigation) :?>
	<ul class="pager">
		<? if($navigation['first']) :?>
			<li class="first">
				<a href="?action=main&page=1<?=$id_r;?>">Первая</a>
			</li>
		<? endif; ?>
								
		<? if($navigation['last_page']) :?>
			<li>
				<a href="?action=main&page=<?=$navigation['last_page']?><?=$id_r;?>">&lt;</a>
			</li>
		<? endif; ?>
								
		<? if($navigation['previous']) :?>
			<? foreach($navigation['previous'] as $val) :?>
				<li>
					<a href="?action=main&page=<?=$val;?><?=$id_r;?>"><?=$val;?></a>
					</li>
			<? endforeach; ?>
		<? endif; ?>
							
		<? if($navigation['current']) :?>
			<li>
				<span><?=$navigation['current'];?></span>
			</li>
		<? endif; ?>
								
		<? if($navigation['next']) :?>
			<? foreach($navigation['next'] as $v) :?>
				<li>
					<a href="?action=main&page=<?=$v;?><?=$id_r;?>"><?=$v;?></a>
				</li>
			<? endforeach; ?>
		<? endif; ?>
		<? if($navigation['next_pages']) :?>
			<li>
				<a href="?action=main&page=<?=$navigation['next_pages']?><?=$id_r;?>">&gt;</a>
			</li>
		<? endif; ?>	
								
		<? if($navigation['end']) :?>
			<li class="last">
				<a href="?action=main&page=<?=$navigation['end']?><?=$id_r;?>">Последняя</a>
			</li>
		<? endif; ?>		
									
</ul>
							<? endif;?>					
				<? else :?>
					<p>Объявлений нет</p>	
				<? endif; ?>
					