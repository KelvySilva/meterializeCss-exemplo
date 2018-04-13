<?php 
    // URL Amigavel
    $atual     = (isset($_GET['pg'])) ? $_GET['pg'] : 'home'; 

    $permissao = array('home', 'clinica', 'noticias', 'casos-clinicos','tabs',
                       'produtos','contato', 'noticia-detalhe', 'tratamentos','detalhe-tratamento', 'casos-clinicos-detalhe', 'depoimentos','fale-conosco', 'form-contato',
                       'form-orcamento', 'form-enviado');  
    
    $pasta = 'nav';
    if ( substr_count($atual, '/') > 0){ 
        $atual  = explode('/', $atual);
        $pagina = (file_exists("{$pasta}/"
                               .$atual[0]
                               .'.php') 
                   && in_array($atual[0], $permissao) 
                   && in_array($atual[0], $permissao)) ? $atual[0] : 'erro';   
        $id = intval($atual[1]);    $id3 = intval($atual[3]);   
        $nomeUrl = $atual[2];
    } else {   
    $pagina = (file_exists("{$pasta}/".$atual.'.php') && in_array($atual, $permissao)) ? $atual : 'erro';    $id = 0;    $nomeUrl = '';
    }
    $url = "/sites/testematerialize/";  
	$nomeTitle = str_replace('-',' ',$nomeUrl);
    //include 'inc/config.php';
    //include 'inc/classAcentos.php';
    //include_once "siteadm/ai.php";
    
    /* Limitar Texto */ 
    function resume( $var, $limite ) {
        $strip  = strip_tags($var); 
        $contar = strlen($strip);   
        $corte  = substr($strip,0,$limite); 
        $pos    = strrpos($corte,' ');  
        $final  = substr($strip,0,$pos);
        return $final;  
    }
?>  
<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=7">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Cacique</title>
       <!-- Compiled and minified CSS -->
    
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="<?=$url?>css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/css/materialize.min.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    
	 

<!--    <link rel="shortcut icon" href="<?=$url?>img/favicon.ico"> -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700" rel="stylesheet">
    
<!--
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=$url?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$url?>css/tether.min.css">  
	
    <script src="<?=$url?>js/fontawesome-free-5.0.4/svg-with-js/js/fontawesome-all.js"></script>
	-->
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <div class="container">
		<a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?=$url?>tabs">Tabs</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
		 <a class="dropdown-trigger btn tooltipped" data-position="bottom" data-tooltip="I am a tooltip" href="#" data-target="dropdown1">Drop Me!</a>

  <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="#!">three</a></li>
    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
  </ul>
      </ul>
		
	  </div>
    </div>
  </nav>

 
  <ul id="mobile-demo" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="http://materializecss.com/images/office.jpg">
      </div>
      <a href="#user"><img class="circle" src="https://viverdeblog.com/wp-content/uploads/2017/03/persona-topo.png"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
	<li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
	
	
	
	
    <li><a href="mobile.html">Mobile</a></li>
	<ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>
  </ul>
    
  
  

