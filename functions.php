<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

function Alphabeticposts() {
	       global $wpdb;
           $url     = basename($_SERVER['REQUEST_URI']);
            $request = $url; 
           $res     = strtoupper($request); 
          if($request == 'a-z'){ 
            
            $results = $wpdb->get_results("SELECT * FROM $wpdb->posts
                WHERE post_type = 'post' AND post_status = 'publish' ORDER BY post_title ASC;"); 
          }else{
             
           $results = $wpdb->get_results("SELECT * FROM $wpdb->posts
                WHERE post_title LIKE '$request%' AND post_title LIKE '$res%'
                AND post_type = 'post'
                AND post_status = 'publish';"); 
          }
           if ($results){ 
             $uris = array();
         	// $a = '<article class="post-40814 post type-post status-publish format-standard hentry category-angst-og-angstlidelser category-fysiske-sygdomme-og-tilstande category-lavt-selvvaerd-og-livslede category-manden category-ovrige-fysiske-sygdomme-hele-kroppen category-psykiske-sygdomme-og-lidelser category-samliv-og-personlig-udvikling infinite-scroll-item" itemtype="https://schema.org/CreativeWork" itemscope="">';
            foreach ( $results as $post ){
                setup_postdata ( $post ); 
                         
         echo  $a =  '<article class="a-zpost post-40814 post type-post status-publish format-standard hentry category-angst-og-angstlidelser category-fysiske-sygdomme-og-tilstande category-lavt-selvvaerd-og-livslede category-manden category-ovrige-fysiske-sygdomme-hele-kroppen category-psykiske-sygdomme-og-lidelser category-samliv-og-personlig-udvikling infinite-scroll-item" itemtype="https://schema.org/CreativeWork" itemscope=""><div class="inside-article"><div class="entry-header" aria-label="Content"><h2 class="entry-title" itemprop="headline"><a href="'.get_permalink( $post->ID).'" rel="bookmark" data-wpel-link="internal">'.$post->post_title.'</a></h2></div><div class="entry-summary" itemprop="text">
				<p>'.$post->post_excerpt.'</p><p class="read-more-container"><a title="'.$post->post_title.'" class="read-more button a-zpostsbutton" href="'.get_permalink( $post->ID).'" aria-label="More on For tidlig sædafgang" data-wpel-link="internal">Læs mere</a></p></div><div class="entry-meta" aria-label="Entry meta"></div></div></article>';
                
            }
           //$a .='';
           // echo $a;  
             }else{          
            return '<h4>Ikke fundet med alfabetisk</h4>';
             }
	
}
add_shortcode('alphabeticpost', 'Alphabeticposts');

add_action( 'wp_enqueue_scripts', 'tu_load_font_awesome' );
/**
 * Enqueue Font Awesome.
 */
function tu_load_font_awesome() {
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.3.1/css/all.css', array(), '5.3.1' );
}

function Breadcrump() {

if (is_singular('post')) { 
                $author_id=$post->post_author;
                $fname = get_the_author_meta('first_name', $author_id );
                $lname = get_the_author_meta('last_name', $author_id);
                $nicname = get_the_author_meta('nickname', $author_id );
                $full_name = '';

                if( empty($fname)){
                    $full_name = $lname;
                } elseif( empty( $lname )){
                    $full_name = $fname;
                } else {
                    //both first name and last name are present
                    $full_name = "{$fname} {$lname}";
                }
                 $author_link = get_author_posts_url(get_the_author_meta('ID'));
        return '<div class="bread-size">Sidst redigeret af <a href="https://www.sundhedslex.dk/hvem-er-vi">redaktionen</a> den '.get_the_modified_date("d.m.Y").'</div><div class="bread-size">Fagligt godkendt af <a href="'.$author_link.'">'.$nicname.'</a></div>';
}
}
add_shortcode('breadcr', 'Breadcrump');