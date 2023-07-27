<?php get_header(); ?>
<style type="text/css">
   * {
   box-sizing: border-box;
   }
   @media only screen and (max-width: 768px){

  .catbox.spalte.masonry-brick a {
    float: left;
    width: 100% !important;
   }
  
   }

   .fot{
   font-size: 20px;
   font-weight: 400;
   }
   .row:after {
   content: "";
   display: table;
   clear: both;
   }
   .region-name{
   color:#f8931c;
   text-transform: uppercase;
   text-align: center;
   }
   .board-name{
   font-size: 25px;
   color:#333;
   text-align: center;
   font-weight: 900;
   }
   .content {
   background-color: white;
   padding: 10px;
   border: 1px solid gray;
   }
   .show {
   display: block;
   }
   /* Style the filter buttons */
   .bttn {
   border: none;
   padding: 8px 14px;
   background-color: gray;
   }
   .bttn:hover {
   background-color: #007EE5;
   opacity: 0.8;
   }
   .bttn.active {
   background-color: #007EE5;
   color: white;
   }
   img {
   width: 100%;
   height: auto;
   vertical-align: middle;
   }
   .pics_in_a_row {
   display: flex;
   }
  
   .img1 { flex: 1.3344; }
   .pics_in_a_row {
   margin: 25px 0;
   }
   .pics_in_a_row > div:not(:last-child) {
   margin-right: 2%;
   }
   .panel-body{
   text-align: center;
   }
   
 
.catbox.spalte.masonry-brick a {
    float: left;
    width: 45%;
}
.boxm{
   padding-top:10px;
}
.catbox.spalte.masonry-brick a {
    border: 1px solid #306295;
    margin-right: 30px;
    margin-bottom: 10px;
    padding: 10px 10px 10px 30px;
    display: block;
    border-radius: 5px;
}
.catbox.spalte.masonry-brick a:hover {
   background-color: #306295;
   color:#FFF;
}
.catbox.spalte.masonry-brick a:hover .fa {
   color:#FFF;
}
.catbox.spalte.masonry-brick a .fa, .column-left .sidebar li .fa {
    padding-right: 10px;
}
.catbox.spalte.masonry-brick .fa {
    font-size: 15px;
    font-weight: 600;
    color: #2f6092;
}
.catbox.spalte.masonry-brick{
   position:unset !important;
}
.sidebar{
   clear:both;
   padding-left:0px !important;
 
}
li {
    list-style-type: none;

}

.sidebar li .fa {
    font-size: 15px;
    font-weight: 600;
    color: #2f6092;
    padding-right: 15px;
}
.contained-content.one-container .site-content {
    padding: 40px;
}
</style>
<div class="content-area" id="primary" style="height: auto !important;">
<main class="site-main" id="main" style="height: auto !important;">

   <div class="boxm">
      <div class="indhold">
         <div style="padding-bottom: 10px;">
            <!--noptimize-->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8545770775365053"
     crossorigin="anonymous"></script>
<!-- SLX -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8545770775365053"
     data-ad-slot="9034469722"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
            <!--/noptimize-->
         </div>
		 <h3 style="font-size:20px"><?php
   $catname = "";
   $currentCategoryId = get_query_var("cat");
   $catname = single_cat_title("", false);
   $category_ID = get_term_by("name", $catname, "category")->term_id;

//echo $catname;
?>
</h3>
         <div class="category-content"><?php echo category_description(); ?></div>
         <?php
         $subcats = wp_list_categories(
             "echo=0&title_li=&show_option_none=&hide_empty=0&parent=" .
                 get_query_var("cat")
         );
         if ($subcats) { ?>
         <div id="category_list" style="margin-top:30px;">
		
            <?php
            $cat_array = get_option("post_numbers_skipkat");
            $args = [
                "orderby" => "name",
                "order" => "ASC",
                "parent" => get_query_var("cat"),
                "exclude" => $cat_array,
                "hide_empty" => 0,
            ];
            $categories = get_categories($args);
            $count = 1;
            ?>
			   <div class="catbox spalte">
             <ul> 
              <?php foreach ($categories as $category) { ?>
          
                  <?php $midsub = wp_list_categories(
                      "echo=0&title_li=&show_option_none=&hide_empty=0&parent=" .
                          $category->term_id
                  ); ?>
                 <li><a <?php if (
                     $midsub
                 ) { ?>style="font-size: 1.2em; font-weight: bold; color: #565656; text-decoration:none;"<?php } ?> href="<?php echo get_category_link(
     $category->term_id
 ); ?>" title="<?php echo sprintf(
    __("View all posts in %s"),
    $category->name
); ?>"><i class="vc_btn3-icon fa fa-angle-right"></i><?php echo $category->name; ?></a></li>
                  <?php if ($midsub) { ?>
                  
                     <?php
                     $args = [
                         "orderby" => "name",
                         "order" => "ASC",
                         "parent" => $category->term_id,
                         "exclude" => $cat_array,
                         "hide_empty" => 0,
                     ];
                     $mid_sub_catgs = get_categories($args);
                     foreach ($mid_sub_catgs as $catg) { ?>
                     <li><a href="<?php echo get_category_link(
                         $catg->term_id
                     ); ?>" title="<?php echo sprintf(
    __("View all posts in %s"),
    $catg->name
); ?>"><i class="vc_btn3-icon fa fa-angle-right"></i><?php echo $catg->name; ?></a></li>
                     <?php }
                     } ?>
                 
             
            
            <?php $count++;} ?>
		  </ul>
          </div>	   
         </div>
        
         <script type="text/javascript" src="<?php bloginfo(
             "template_url"
         ); ?>/jquery.masonry.min.js"></script>
         <script type="text/javascript">
            jQuery('#category_list').masonry({
             itemSelector: '.catbox'
            });
         </script>
         <?php } else { ?>
         
            
               
                  <?php
                  if (get_query_var("paged")) {
                      $paged = get_query_var("paged");
                  } elseif (get_query_var("page")) {
                      $paged = get_query_var("page");
                  } else {
                      $paged = 1;
                  }
                  global $query_string;
                  //query_posts($query_string . "&posts_per_page=-1,&orderby=title,order=ASC");
           query_posts($query_string . "&posts_per_page=-1&orderby=title&order=ASC");
                  if (have_posts()) {
                      while (have_posts()):
                          the_post(); ?><article class="a-zpost post-40814 post type-post status-publish format-standard hentry category-angst-og-angstlidelser category-fysiske-sygdomme-og-tilstande category-lavt-selvvaerd-og-livslede category-manden category-ovrige-fysiske-sygdomme-hele-kroppen category-psykiske-sygdomme-og-lidelser category-samliv-og-personlig-udvikling infinite-scroll-item" itemtype="https://schema.org/CreativeWork" itemscope=""><div class="inside-article"><header class="entry-header" aria-label="Content"><h2 class="entry-title" itemprop="headline"><a href="<?php the_permalink();?>" rel="bookmark" data-wpel-link="internal"><?php the_title();?></a></h2></header><div class="entry-summary" itemprop="text"><p><?php the_excerpt();?></p><p class="read-more-container"><a title="<?php the_title();?>" class="read-more button a-zpostsbutton" href="<?php the_permalink();?>" aria-label="More on For tidlig sædafgang" data-wpel-link="internal">Læs mere</a></p></div><footer class="entry-meta" aria-label="Entry meta"></footer></div></article>

                  <?php
                      endwhile;;
                  }
                  ?>
                  <div class="navigation"><?php posts_nav_link(); ?></div>
                  <?php wp_reset_query(); ?>
               
            
         
         <?php }
         ?>
      </div>
      <div class="sidebar" style="padding-top:50px;">
         <?php
         $thisCat = get_category(get_query_var("cat"), false);
         $parent_cat = $thisCat->parent;
         if ($parent_cat) {

             $parentCatList = get_category_parents(
                 get_query_var("cat"),
                 false,
                 ","
             );

             // get first category slug of that list...
             $topParentSlug = substr(
                 $parentCatList,
                 0,
                 strpos($parentCatList, ",")
             );

             // get the object of that slug
             $topParent = get_term_by("slug", $topParentSlug, "category");

             // get the id of that object
             $ancestor = $topParent->term_id;
             ?>
          <h3 style="font-size:20px;">Andre hovedkategorier</h3>   
         <ul>
            <?php
            $parentCatList = get_category_parents(
                get_query_var("cat"),
                false,
                ","
            );

            // get first category slug of that list...
            $topParentSlug = substr(
                $parentCatList,
                0,
                strpos($parentCatList, ",")
            );

            // get the object of that slug
            $topParent = get_term_by("slug", $topParentSlug, "category");

            // get the id of that object
            $ancestor = $topParent->term_id;

            $args = [
                "orderby" => "name",
                "order" => "ASC",
                "parent" => $ancestor,
            ];
            $categories = get_categories($args);
            foreach ($categories as $category) { ?>
            <li><a href="<?php echo get_category_link(
                $category->term_id
            ); ?>" title="<?php echo sprintf(
    __("View all posts in %s"),
    $category->name
); ?>"><i class="vc_btn3-icon fa fa-angle-right"></i><?php echo $category->name; ?></a></li>
            <?php }
            ?>
         </ul>
         <?php
         } else {
              ?>
         <h3 style="font-size:20px;">Andre hovedkategorier</h3>
         <ul>
            <?php
            $args = [
                "orderby" => "name",
                "order" => "ASC",
                "parent" => 0,
            ];
            $categories = get_categories($args);
            foreach ($categories as $category) { ?>
            <li><a href="<?php echo get_category_link(
                $category->term_id
            ); ?>" title="<?php echo sprintf(
    __("View all posts in %s"),
    $category->name
); ?>"><i class="vc_btn3-icon fa fa-angle-right"></i><?php echo $category->name; ?></a></li>
            <?php }
            ?>
         </ul>
         <?php
         }
         ?>
      </div>
      <!--noptimize-->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8545770775365053"
     crossorigin="anonymous"></script>
<!-- SLX -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8545770775365053"
     data-ad-slot="9034469722"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
      <!--/noptimize-->
   </div>
</main>
</div>
   

  <div id="right-sidebar" class="widget-area sidebar is-right-sidebar">
            <div class="inside-right-sidebar" style="height: auto !important;">
             <?php if (is_active_sidebar("sidebar-2")): ?>
            <?php dynamic_sidebar("right-sidebar"); ?>
            <?php else: ?>
            <!-- Time to add some widgets! -->
            <?php endif; ?>
         </div>
      </div>
  
</div>
<?php get_footer();
