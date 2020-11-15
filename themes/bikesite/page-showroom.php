<?php 
/*
  Template Name: Showroom
*/
get_header(); 
if( isset($_GET['brand']) && !empty($_GET['brand']) ){
  get_template_part('templates/showroom', 'detail');
}else{
  get_template_part('templates/show', 'room');
}
get_footer(); 
?>