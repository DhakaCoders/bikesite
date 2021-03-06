<?php 
/**
* Get the image tag with alt/title tag
*/
function cbv_get_image_tag( $id, $size = 'full', $title = false ){
	if( isset( $id ) ){
		$output = '';
		$image_title = get_the_title($id);
		$image_alt = get_post_meta( $id, '_wp_attachment_image_alt', true);
    if( empty( $image_alt ) ){
      $image_alt = $image_title;
    }
		$image_src = wp_get_attachment_image_src( $id, $size, false );

		if( $title ){
			$output = '<img class="style-svg" src="'.$image_src[0].'" alt="'.$image_alt.'" title="'.$image_title.'">';
		}else{
			$output = '<img class="style-svg" src="'.$image_src[0].'" alt="'.$image_alt.'">';
		}

		return $output;
	}
	return false;
}

/**
* Get the image src url by attachement it
*/
function cbv_get_image_src( $id, $size = 'full' ){
  if( isset( $id ) ){
    $afbeelding = wp_get_attachment_image_src($id, $size, false );
    if( is_array( $afbeelding ) && isset( $afbeelding[0] ) ){
      return $afbeelding[0];
    }
  }
  return false;
}
/**
* Get the image tag with alt/title tag
*/
function cbv_get_image_alt( $url ){
  if( isset( $url ) ){
    $output = '';
    $id = attachment_url_to_postid($url);
    $image_title = get_the_title($id);
    $image_alt = get_post_meta( $id, '_wp_attachment_image_alt', true);
    if( empty( $image_alt ) ){
      $image_alt = $image_title;
    }
    $image_alt = str_replace('-', ' ', $image_alt);
    $output = $image_alt;

    return $output;
  }
  return false;
}

/*Allow Span tags in editor*/
function myextensionTinyMCE($init) {
    // Command separated string of extended elements
    $ext = 'span[id|name|class|style]';

    // Add to extended_valid_elements if it alreay exists
    if ( isset( $init['extended_valid_elements'] ) ) {
        $init['extended_valid_elements'] .= ',' . $ext;
    } else {
        $init['extended_valid_elements'] = $ext;
    }

    // Super important: return $init!
    return $init;
}

add_filter('tiny_mce_before_init', 'myextensionTinyMCE' );

// Changing excerpt more
 function new_excerpt_more($more) {
   global $post;
   return '… <a href="'. get_permalink($post->ID) . '">' . '....more >>' . '</a>';
 }
 add_filter('excerpt_more', 'new_excerpt_more');

// tn custom excerpt length
function tn_custom_excerpt_length( $length ) {
return 50;
}
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

function cbv_get_excerpt( $limit = 20 ){
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt);
  } else {
    $excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace("/<.*?>/", " ", $excerpt);
  return $excerpt;
}

function cbv_limit_excerpt( $limit = 52 ){
   global $post;
  $link = ' <a href="'. get_permalink($post->ID) . '">Continue Reading...</a>';

  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt);
  } else {
    $excerpt = implode(" ",$excerpt);
  } 
  $excerpt .= $link;
  return $excerpt;
}

function cbv_table( $table){
  if ( ! empty ( $table ) ) {
    echo '<div class="dfp-tbl-wrap">
    <div class="table-dsc" data-aos="fade-up" data-aos-delay="200">
    <table>';
    if ( ! empty( $table['caption'] ) ) {
      echo '<caption>' . $table['caption'] . '</caption>';
    }
    if ( ! empty( $table['header'] ) ) {
      echo "<thead class='dfp-thead'>";
      echo '<tr>';
      echo '<th><span class="mHc">#</span></th>';
      foreach ( $table['header'] as $th ) {
        echo '<th><span class="mHc">';
        echo $th['c'];
        echo '</span></th>';
      }
      echo '</tr>';
      echo '</thead>';
    }
    echo '<tbody>';
    $i = 1;
    foreach ( $table['body'] as $tr ) {
      echo '<tr>';
      echo '<td><span class="mHc">'.$i.'.</span></td>';
      foreach ( $tr as $td ) {
        echo '<td><span class="mHc">';
        echo $td['c'];
        echo '</span></td>';
      }
      echo '</tr>';
      $i++;
    }
    echo '</tbody>';
    echo '</table></div>';
    echo '</div>';
  }  
}


function hex_to_rgb( $hex ){
  if( !empty($hex) ){
    $hex = str_replace('#', '', $hex);
    if(strlen($hex) > 3) $color = str_split($hex, 2);
    else $color = str_split($hex);
    return [hexdec($color[0]), hexdec($color[1]), hexdec($color[2])];
  }else{
    return false;
  }
}

function redirect_after_add_to_cart( $url ) {
    return esc_url( get_permalink( get_page_by_title( 'cart' ) ) );
}
add_filter( 'woocommerce_add_to_cart_redirect', 'redirect_after_add_to_cart', 99 );


/**
 * Add ACF thumbnail columns to Linen Category custom taxonomy
 */
function add_thumbnail_columns($columns) {
    $columns['brand_thumbnail'] = __('Thumbnail');
    // Enable the single line of code below if you want the Thumbnail at the end.
    //return $columns;

    // Code below will make the Thumbnail in the front.
    // Code start
    $new = array();
    foreach($columns as $key => $value) {
        if ($key=='name') // Put the Thumbnail column before the Name column
            $new['brand_thumbnail'] = 'Thumbnail';
        $new[$key] = $value;
    }
    return $new;
    // Code end
}
add_filter('manage_edit-brand_category_columns', 'add_thumbnail_columns');

/**
 * Output ACF thumbnail content in Linen Category custom taxonomy columns
 */
function thumbnail_columns_content($content, $column_name, $term_id) {
    if ('brand_thumbnail' == $column_name) {
        $term = get_term($term_id);
        $linen_thumbnail_var = get_field('blogo', $term);
        $content = '<img src="'.$linen_thumbnail_var['url'].'" width="60" />';
        }
    return $content;
}
add_filter('manage_brand_category_custom_column' , 'thumbnail_columns_content' , 10 , 3);

function phone_preg( $show_telefoon ){
  $replaceArray = '';
  $spacialArry = array(".", "/", "+", " ", "-");
  $show_telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  return $show_telefoon;
}