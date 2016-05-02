<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<meta name="author" content="pdeddy78" />
<meta name="description" content="Penilaian Sidang Skripsi dan Tugas Akhir Plus" />
<meta name="robots" content="noindex, nofollow, noarchive">
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/materialized/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div class="navbar-fixed">
<nav class="green lighten-1" role="navigation">
<div class="nav-wrapper container"><a id="logo-container" href="<?=Yii::app()->createUrl('site/index')?>" class="brand-logo waves-effect default"><?php echo CHtml::encode(Yii::app()->name); ?></a>
<ul class="right hide-on-med-and-down">
<li>
<form>
<div class="input-field">
<input id="search" type="search" placeholder="Search..." required>
<label for="search"><i class="material-icons">search</i></label>
<i class="material-icons">close</i>
</div>
</form>
</li>
<li><a href="<?=Yii::app()->createUrl('site/index')?>" class="waves-effect waves-light">Navbar Link</a></li>
<?php if(!Yii::app()->user->isGuest) { ?>
<li><a href="<?=Yii::app()->createUrl('user/logout')?>" class="waves-effect waves-light">Logout</a></li>
<?php } else { ?>
<li><a href="<?=Yii::app()->createUrl('user/login')?>" class="waves-effect waves-light">Login</a></li>
<?php } ?>
</ul>
<a href="#" data-activates="nav-mobile" class="button-collapse waves-effect waves-light"><i class="material-icons">menu</i></a>
<ul id="nav-mobile" class="side-nav">
<br/>
<li>
<form>
<div class="input-field">
<input id="search" type="search" placeholder="Search..." required>
<label for="search"><i class="material-icons">search</i></label>
<i class="material-icons">close</i>
</div>
</form>
</li>
<li class="bold"><a href="<?=Yii::app()->createUrl('site/index')?>" class="waves-effect waves-teal">Navbar Link</a></li>
<?php if(!Yii::app()->user->isGuest) { ?>
<li class="bold"><a href="<?=Yii::app()->createUrl('user/logout')?>" class="waves-effect waves-teal">Logout</a></li>
<?php } else { ?>
<li class="bold"><a href="<?=Yii::app()->createUrl('user/login')?>" class="waves-effect waves-teal">Login</a></li>
<?php } ?>
</ul>
</div>
</nav>
</div>
<?php /* if(isset($this->breadcrumbs)):?>
<?php $this->widget('zii.widgets.CBreadcrumbs', array(
'links'=>$this->breadcrumbs,
)); ?>
<?php endif */?>

<main>
<?php echo $content; ?>
</main>
<div class="fixed-action-btn vertical click-to-toggle" style="bottom: 45px; right: 24px;">
<a class="btn-floating btn-large green darken-3">
<i class="large material-icons">view_list</i>
</a>
<ul>
<li><a class="btn-floating red" href="<?=Yii::app()->createUrl('jurnal/jurnalUpload/submit');?>"><i class="material-icons">file_upload</i></a></li>
<li><a class="btn-floating yellow darken-1"><i class="material-icons">attachment</i></a></li>
<li><a class="btn-floating green"><i class="material-icons">school</i></a></li>
<li><a class="btn-floating blue"><i class="material-icons">notifications</i></a></li>
</ul>
</div>
<footer class="page-footer green">
<div class="container">
<div class="row">
<div class="col l6 s12">
<h5 class="white-text">Tentang PESSTA+</h5>
<p class="grey-text text-lighten-4" align="justify"><strong>PESSTA+</strong> adalah sebuah sistem validasi jurnal dan hibah yang dilakukan oleh mahasiswa secara online dan mandiri. Guna membuktikan bahwa mahasiswa atau Pribadi Raharja telah membuat sebuah artikel ilmiah yang lolos atau telah terbit di jurnal yang diakui dalam SK No 351 tentang ketentuan jurnal ilmiah yang diakui untuk penilaian objektif  maka perlu dilakukan validasi jurnal di <strong>PESSTA+</strong>, begitu juga untuk membuktikan nilai hibah mahasiswa.</p>
</div>
<div class="col l3 s12">
<h5 class="white-text">Settings</h5>
<ul>
<li><a class="white-text" href="#!">Link 1</a></li>
<li><a class="white-text" href="#!">Link 2</a></li>
<li><a class="white-text" href="#!">Link 3</a></li>
<li><a class="white-text" href="#!">Link 4</a></li>
</ul>
</div>
<div class="col l3 s12">
<h5 class="white-text">Connect</h5>
<ul>
<li><a class="white-text" href="#!">Link 1</a></li>
<li><a class="white-text" href="#!">Link 2</a></li>
<li><a class="white-text" href="#!">Link 3</a></li>
<li><a class="white-text" href="#!">Link 4</a></li>
</ul>
</div>
</div>
</div>
<div class="footer-copyright">
<div class="container">
Made with <i class="tiny material-icons red-text">favorite</i> by <a class="green-text text-lighten-4" href="https://about.me/pdeddy78" target="_blank">OlympusKnight</a>. All Right Reserved.
<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
</div>
</div>
</footer>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/materialized/js/init.js"></script>
</body>
</html>