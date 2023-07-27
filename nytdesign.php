<?php
   /*
   Template Name Posts: Nytdesign
   */
   
get_header(); ?>
<style type="text/css">
   * {
   box-sizing: border-box;
   }
   @media only screen and (max-width: 768px){

  .page-title-section .page-title-breadcrumbs,.toc-odd.level-1,.post-custom-fields {
     width: 100% !important;
  }
  .post-custom-fields {
     margin:0px !important;
  }
   }

  
   .row:after {
   content: "";
   display: table;
   clear: both;
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
  
  
 
  
   .pics_in_a_row > div:not(:last-child) {
   margin-right: 2%;
   }
   .panel-body{
   text-align: center;
   }
   
 .contained-content.one-container .site-content {
    padding: 40px;
}

.boxm{
   padding-top:10px
}
.toc{ width:100%;}
.toc-odd.level-1{
   width:50%;
   float:left;
}
.ads-start{
margin-top:70px;  
}
ul.info{
   padding:12px !important;
   margin: auto !important;
}
ul.info .fa {
    padding-right: 10px;
   color:#306295;
}
.post-custom-fields{
    box-shadow: 0px 3px 6px rgb(0 0 0 / 15%);
    border-radius:5px;  
}


</style>
<div class="content-area" id="primary" style="height: auto !important;">
<main class="site-main" id="main" style="height: auto !important;">
   <div id="right">
      <div id="box0">
         <div class="box2">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
           
            <div class="ads-start" style="width: 100%; margin: 5px 15px 10px 0;">
               <?php include ('ad-1.php'); ?>
            </div>
            <div style="clear: both;"></div>
            <?php the_content(); ?>
			 <div class="post-custom-fields" style="text-align: left; float: right; width: 310px; margin: 5px -20px 10px 0; padding: 0 5px 5px 5px; border: 1px solid #f2f2f2; background: #fafafa;">
               <ul class="info">
                  <li><i class="fa fa-square"></i><?php the_field('aarsag'); ?></li>
                  <li><i class="fa fa-square"></i><?php the_field('symptomer'); ?></li>
                  <li><i class="fa fa-square"></i><?php the_field('behandling'); ?></li>
               </ul>
            </div>
            <div style="text-align: center;">
               <?php include ('ad-4.php'); ?>
            </div>
           
         </div>
     </div>
 </div>
</main>
  </div>

         <div id="right-sidebar" class="widget-area sidebar is-right-sidebar">
            <div class="inside-right-sidebar" style="height: auto !important;">
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
            <?php dynamic_sidebar( 'right-sidebar' ); ?>
            <?php else : ?>
            <!-- Time to add some widgets! -->
            <?php endif; ?>
         </div>
      </div>
    
      <?php endwhile; // end of the loop. ?>
  


<?php get_footer(); ?>
<script>
jQuery( document ).ready(function() {
	setTimeout(function(){
		jQuery('.post-custom-fields').insertAfter(".toc-odd.level-1");
    jQuery('<p>I denne artikel:</p>').insertAfter(".toc h2");
    jQuery("em:contains((Klik på billedet for større version))").css("display", "none");
    jQuery("em:contains((klik på billedet for større version))").css("display", "none");
    jQuery("em:contains((Klik på billederne for større versioner))").css("display", "none");
	},1000);
});
</script>