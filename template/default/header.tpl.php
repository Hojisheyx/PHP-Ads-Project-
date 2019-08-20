<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport"content="width=device-width, initial-scale=1, shrink-to-fit=no">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <link rel="stylesheet" type="text/css" href="<?=TEMPLATE;?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?=TEMPLATE;?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?=TEMPLATE;?>/css/font-awesome.css">
    
    <title>
        <?=SITE_NAME_HEADER;?>
    </title>
</head>

<body>
    <div class="ads-container">
        <div class="hidden-xs">
            <div class="rg-topline wd-affected-by-fixed-body-scroll-offset">
                
           
        <div class="container">
            <div class="pull-left">
            <a href="#">магазины</a>
            </div> 
            <div class="pull-right">
                <? if(!$user) : ?>
                <a href="?action=login">Вход</a>
                |
                <a href="?action=registration">Регистрация</a>
                <? else :?>
                Добро пожаловать[
                <?=$user['name'];?>]
                |
                <a href="?action=login&logout=1">Выход</a>
                <? endif; ?>
            </div>
       
          </div>
           </div>
            </div>
            <div class="rg-header rg-topsearch wd-affected-by-fixed-body-scroll-offset">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 rg-column rg-column-left rg-header-column rg-header-column-left">
                        <div class="rg-logo hidden-xs">
                            <a href="<?=SITE_NAME;?>" title=""><img src="<?=TEMPLATE;?>/images/facebook.jpg" alt=""></a>
                        </div> 
                        <div class="rg-logo rg-logo2 hidden-sm hidden-lg hidden-md">
                             <a href="<?=SITE_NAME;?>" title=""><img src="<?=TEMPLATE;?>/images/facebook.jpg" alt=""></a>
                         </div> 
                         <div class="col-lg-6 col-md-8 rg-content3 rg-header-content3 hidden-xs">
                            <div class="input-group input-group-lg rg-header-search">
                                
                            
                    <form class="form" method="GET">

                        <input  name="action" value="search" type="hidden"><i class="fa fa-search" aria-hidden="true"></i>
                        <input  class="input" name="search" type="text" placeholder="Поиск по объявлениям...">
                        <input value="Поиск" type="submit">
                    </form>
                         </div>
                        </div>  
                        </div>
                    </div>
                    
                </div>
            </div>
       
       
