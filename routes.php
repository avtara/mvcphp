<?php 

route::set('landing', function(){
	landing::CreateView('landing');
});

route::set('about', function(){
	about::CreateView();
});
?>