<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?> ng-app="wpAngularTheme">
<head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
  	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  	<meta name="author" content="Ciplex">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<link rel="shortcut icon" href="/favicon.ico">
  	<link rel="apple-touch-icon" href="/favicon.png">
	
    <base href="/">
   	<?php wp_head();?>
    <!--[if lt IE 9]>
	    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<!-- integration style rangle -->
		   <!-- inject:css -->
    <link rel="stylesheet" href="http://store-blackcrows.herokuapp.com/app/app.css">
    <!-- endinject -->	

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

</head>
<body <?php body_class('app'); ?>>
<header class="container header">

        
		
		
		<!--  test intégration nav externe	 -->

     <div class="app__header header">
      <div class="row"> 
    <div class="logo">
      <a ui-sref="mainSection">
        <img ng-src="http://store-blackcrows.herokuapp.com/assets/images/blackcrows_logo.png" alt="Black Crows Logo">
      </a>
    </div>
    <nav class="main-nav">
      <ul class="unordered-list--main">
        <li class="list-item--dropdown">shop
          <div class="dark-container--dropdown">
            <div class="container">
              <p>view all shop items ></p>
            </div>
            <div class="container--horizontal">
              <div class="container--vertical--full-width">
                <h1>men</h1>
                <div class="container--horizontal">
                  <div class="container--vertical--full-width">
                    <ul class="unordered-list">
                      <li class="list-item--header">apparel</li>
                      <li class="list-item--sub">jackets</li>
                      <li class="list-item--sub">pants</li>
                      <li class="list-item--sub">gloves</li>
                    </ul>
                  </div>
                  <div class="container--vertical--full-width">
                    <ul class="unordered-list">
                      <li class="list-item--header">
                        <a ui-sref="categorySection({ parentCategorySlug: 'men-skis' })">skis</a>
                      </li>
                      <li class="list-item--sub">
                        <a ui-sref="categorySection({ parentCategorySlug: 'men-big-mountain' })">big mountain</a>
                      </li>
                      <li class="list-item--sub">
                        <a ui-sref="categorySection({ parentCategorySlug: 'men-all-terrain' })">all terrain</a>
                      </li>
                      <li class="list-item--sub">
                        <a ui-sref="categorySection({ parentCategorySlug: 'men-mountain-touring' })">touring</a>
                      </li>
                    </ul>
                  </div>
                  <div class="container--vertical--full-width">
                    <ul class="unordered-list">
                      <li class="list-item--header">
                        <a ui-sref="categorySection({ parentCategorySlug: 'men-poles' })">poles</a>
                      </li>
                      <li class="list-item--sub">
                        <a ui-sref="categorySection({ parentCategorySlug: 'men-poles' })">all poles</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="container--spacer">
              </div>
              <div class="container--vertical--full-width">
                <h1>women</h1>
                <div class="container--horizontal">
                  <div class="container--vertical--full-width">
                    <ul class="unordered-list">
                      <li class="list-item--header">apparel</li>
                      <li class="list-item--sub">jackets</li>
                      <li class="list-item--sub">pants</li>
                      <li class="list-item--sub">gloves</li>
                    </ul>
                  </div>
                  <div class="container--vertical--full-width">
                    <ul class="unordered-list">
                      <li class="list-item--header">
                        <a ui-sref="categorySection({ parentCategorySlug: 'women-skis' })">skis</a>
                      </li>
                      <li class="list-item--sub">
                        <a ui-sref="categorySection({ parentCategorySlug: 'women-big-mountain' })">big mountain</a>
                      </li>
                      <li class="list-item--sub">
                        <a ui-sref="categorySection({ parentCategorySlug: 'women-all-terrain' })">all terrain</a>
                      </li>
                      <li class="list-item--sub">
                        <a ui-sref="categorySection({ parentCategorySlug: 'women-mountain-touring' })">touring</a>
                      </li>
                    </ul>
                  </div>
                  <div class="container--vertical--full-width">
                    <ul class="unordered-list">
                      <li class="list-item--header">
                        <a ui-sref="categorySection({ parentCategorySlug: 'women-poles' })">poles</a>
                      </li>
                      <li class="list-item--sub">
                        <a ui-sref="categorySection({ parentCategorySlug: 'women-poles' })">all poles</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="list-item">journal</li>
        <li class="list-item--dropdown">about us</li>
        <li class="list-item">shop finder</li>
      </ul>
    </nav>
    <div class="tools">
      <blcr-cart-icon>
      </blcr-cart-icon>
    </div>
</div>

<!--fin test integration nav site -->
		</div>
		<nav class="row" ng-controller="NavCtrl">
			<ul class="col-sm-12">
				<!--<li ng-repeat="nav in navs" ui-route="/{{nav.id>0 && 'view/'+nav.id || ''}}" ng-class="{active:$uiRoute}"><a href="#/{{nav.id>0 && 'view/'+nav.id || ''}}">{{nav.title}}</a> - {{nav.type}}</li> -->
				<li ng-repeat="nav in navs track by $index" ng-class="{active:$uiRoute}">
					<div ng-switch on="nav.type">
						<a ng-switch-when="Custom" href="{{nav.url}}">{{nav.title}}</a>
						<a ng-switch-when="Page" href="#/page/{{nav.id}}">{{nav.title}}</a>
						<a ng-switch-default href="#/view/{{nav.id}}">{{nav.title}}</a>
					</div>
				</li>
			</ul>
		</nav>
</header>


<div class="container-fluid content-wrapper">
	<div class="container">