<?php get_header();

$pages = get_pages( array( 'sort_column' => 'menu_order', 'sort_order' => 'asc', 'parent'=> '0') ); 


foreach ($pages as $page_data) {
    $content = apply_filters('the_content', $page_data->post_content);
    $title = $page_data->post_title;
	$slug = $page_data->post_name;
   	echo "<section class='$slug'>";
	echo "<h2>$title</h2>";
	echo $content;
	echo "</section> <!--End $slug-->";
}
?>

<?php get_footer(); ?>