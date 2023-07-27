<?php
   /**
    * Template name: Søgning
    *
    * @package WordPress
    * @subpackage Sundhedslex
    * @since Sundhedslex 1.0
    */
   
   get_header(); ?>
<style type="text/css">
   * {
   box-sizing: border-box;
   }
   @media only screen and (max-width: 768px){
   .column-left {
   width: 100% !important }
   .column-right {
   width: 100% !important;
   }  
   }
   .column-left {
   float: left;
   width: 65%;
   }
   .column-right {
   float: right;
   width: 30%;
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
   .sidebar{
   padding-right: 20px;
   padding-left: 20px;
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
</style>
<div class="content-area" id="primary" style="height: auto !important;">
<main class="site-main" id="main" style="height: auto !important;">

   <div id="content" role="main" style="">
      <div id="menu">
         <div class="soegning ">
            <!--noptimize-->
            <script async src="https://cse.google.com/cse.js?cx=f27240f65bbce0ecc"></script>
            <div class="gcse-search"></div>
            <!--/noptimize-->
         </div>
      </div>
      <div class="indhold">
         <h1 class="search">Resultatet af din søgning på Sundhedslex.dk</h1>
         <br/>
         <div class="adsensesearch">
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
         <br/>  
         <!--noptimize-->
         <div id="cse-search-results"></div>
         <script type="text/javascript">
            var googleSearchIframeName = "cse-search-results";
            var googleSearchFormName = "cse-search-box";
            var googleSearchFrameWidth = 800;
            var googleSearchDomain = "www.google.dk";
            var googleSearchPath = "/cse";
         </script>
         <script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
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
  
<?php get_footer();