<?php
   /**
    * Template Name Posts: Depressionstest
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
  .contained-content.one-container .site-content {
    padding: 40px;
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
 
             <div class="box5">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
            <img class="aligncenter" title="depression test" src="http://www.sundhedslex.dk/images/depression-test.jpg" alt="depression test" />
            &nbsp;
            <h2>Kriterierne for at tage depressionstesten</h2>
            &nbsp;
            <ul>
               <li>Spørgsmålene i depressionstesten skal besvares med udgangspunkt i de seneste <strong>2 uger af dit liv</strong></li>
               <li>Du bedes <strong>besvare alle spørgsmål</strong> (ellers giver testen et misvisende resultat)</li>
            </ul>
            &nbsp;
            <form id="depression_form">
               <table cellspacing="0" class="depression_table">
                  <tr>
                     <td></td>
                     <td style="width:80px;">Hele tiden</td>
                     <td style="width:80px;">Det meste af tiden</td>
                     <td style="width:80px;">Lidt over halvdelen af tiden</td>
                     <td style="width:80px;">Lidt under halvdelen af tiden</td>
                     <td style="width:80px;">Lidt af tiden</td>
                     <td style="width:80px;">P&aring; intet tidspunkt</td>
                  </tr>
                  <tr>
                     <td>Har du f&oslash;lt dig trist til mode, ked af det?</td>
                     <td><input type="radio" name="q1" value="5" /></td>
                     <td><input type="radio" name="q1" value="4" /></td>
                     <td><input type="radio" name="q1" value="3" /></td>
                     <td><input type="radio" name="q1" value="2" /></td>
                     <td><input type="radio" name="q1" value="1" /></td>
                     <td><input type="radio" name="q1" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Har du manglet interesse for dine daglige g&oslash;rem&aring;l?</td>
                     <td><input type="radio" name="q2" value="5" /></td>
                     <td><input type="radio" name="q2" value="4" /></td>
                     <td><input type="radio" name="q2" value="3" /></td>
                     <td><input type="radio" name="q2" value="2" /></td>
                     <td><input type="radio" name="q2" value="1" /></td>
                     <td><input type="radio" name="q2" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Har du f&oslash;lt at du manglede energi og kr&aelig;fter?</td>
                     <td><input type="radio" name="q3" value="5" /></td>
                     <td><input type="radio" name="q3" value="4" /></td>
                     <td><input type="radio" name="q3" value="3" /></td>
                     <td><input type="radio" name="q3" value="2" /></td>
                     <td><input type="radio" name="q3" value="1" /></td>
                     <td><input type="radio" name="q3" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Har du haft mindre selvtillid?</td>
                     <td><input type="radio" name="q4" value="5" /></td>
                     <td><input type="radio" name="q4" value="4" /></td>
                     <td><input type="radio" name="q4" value="3" /></td>
                     <td><input type="radio" name="q4" value="2" /></td>
                     <td><input type="radio" name="q4" value="1" /></td>
                     <td><input type="radio" name="q4" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Har du haft d&aring;rlig samvittighed eller skyldf&oslash;lelse?</td>
                     <td><input type="radio" name="q5" value="5" /></td>
                     <td><input type="radio" name="q5" value="4" /></td>
                     <td><input type="radio" name="q5" value="3" /></td>
                     <td><input type="radio" name="q5" value="2" /></td>
                     <td><input type="radio" name="q5" value="1" /></td>
                     <td><input type="radio" name="q5" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Har du f&oslash;lt, at livet ikke var v&aelig;rd at leve?</td>
                     <td><input type="radio" name="q6" value="5" /></td>
                     <td><input type="radio" name="q6" value="4" /></td>
                     <td><input type="radio" name="q6" value="3" /></td>
                     <td><input type="radio" name="q6" value="2" /></td>
                     <td><input type="radio" name="q6" value="1" /></td>
                     <td><input type="radio" name="q6" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Har du haft besv&aelig;r med at koncentrere dig, f.eks. at l&aelig;se avis eller f&oslash;lge med i fjernsyn?</td>
                     <td><input type="radio" name="q7" value="5" /></td>
                     <td><input type="radio" name="q7" value="4" /></td>
                     <td><input type="radio" name="q7" value="3" /></td>
                     <td><input type="radio" name="q7" value="2" /></td>
                     <td><input type="radio" name="q7" value="1" /></td>
                     <td><input type="radio" name="q7" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Har du f&oslash;lt dig rastl&oslash;s?</td>
                     <td><input type="radio" name="q8a" value="5" /></td>
                     <td><input type="radio" name="q8a" value="4" /></td>
                     <td><input type="radio" name="q8a" value="3" /></td>
                     <td><input type="radio" name="q8a" value="2" /></td>
                     <td><input type="radio" name="q8a" value="1" /></td>
                     <td><input type="radio" name="q8a" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Har du f&oslash;lt dig mere stille?</td>
                     <td><input type="radio" name="q8b" value="5" /></td>
                     <td><input type="radio" name="q8b" value="4" /></td>
                     <td><input type="radio" name="q8b" value="3" /></td>
                     <td><input type="radio" name="q8b" value="2" /></td>
                     <td><input type="radio" name="q8b" value="1" /></td>
                     <td><input type="radio" name="q8b" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Har du haft besv&aelig;r med at sove om natten?</td>
                     <td><input type="radio" name="q9" value="5" /></td>
                     <td><input type="radio" name="q9" value="4" /></td>
                     <td><input type="radio" name="q9" value="3" /></td>
                     <td><input type="radio" name="q9" value="2" /></td>
                     <td><input type="radio" name="q9" value="1" /></td>
                     <td><input type="radio" name="q9" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Har du haft nedsat appetit?</td>
                     <td><input type="radio" name="q10a" value="5" /></td>
                     <td><input type="radio" name="q10a" value="4" /></td>
                     <td><input type="radio" name="q10a" value="3" /></td>
                     <td><input type="radio" name="q10a" value="2" /></td>
                     <td><input type="radio" name="q10a" value="1" /></td>
                     <td><input type="radio" name="q10a" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Har du haft &oslash;get appetit?</td>
                     <td><input type="radio" name="q10b" value="5" /></td>
                     <td><input type="radio" name="q10b" value="4" /></td>
                     <td><input type="radio" name="q10b" value="3" /></td>
                     <td><input type="radio" name="q10b" value="2" /></td>
                     <td><input type="radio" name="q10b" value="1" /></td>
                     <td><input type="radio" name="q10b" value="0" /></td>
                  </tr>
               </table>
            </form>
            <br/>	
            <div class="testknap">	
               <input style="font-weight: bold; font-size: 1.25em; padding: 5px;" type="button" onclick="beregn_depression();" value="Beregn" />
            </div>
            <div id="depression_resultat" style="display:none;">
               <h2>Score: <b id="depression_resultat_score"></b></h2>
            </div>
            <div id="depression_ingen" style="display:none;">Det tyder ikke p&aring; at du lider af en depression.</div>
            <div id="depression_let" style="display:none;">Du har tegn p&aring; en let depression.</div>
            <div id="depression_moderat" style="display:none;">Du har tegn p&aring; en moderat depression.</div>
            <div id="depression_svaer" style="display:none;">Du har tegn p&aring; en sv&aelig;r depression.</div>
            <!-- Til her -->
            <div style="clear: both; margin-bottom: 30px;"></div>
            <?php the_content(); ?>
            <div style="text-align: center;">
               <?php include ('ad-4.php'); ?>
            </div>
          
         </div>
   </main>
</div>
      <?php endwhile; // end of the loop. ?>
      <div id="right-sidebar" class="widget-area sidebar is-right-sidebar">
            <div class="inside-right-sidebar" style="height: auto !important;">
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
            <?php dynamic_sidebar( 'right-sidebar' ); ?>
            <?php else : ?>
            <!-- Time to add some widgets! -->
            <?php endif; ?>
         </div>
      </div>
  

<?php get_footer(); ?>
 <script>
      function beregn_depression(){
            document.getElementById('depression_ingen').style.display="none";
            document.getElementById('depression_let').style.display="none";
            document.getElementById('depression_moderat').style.display="none";
            document.getElementById('depression_svaer').style.display="none";
            
            var form=document.getElementById('depression_form');
            
            var q1=getNumber("q1");
            var q2=getNumber("q2");
            var q3=getNumber("q3");
            var q4=getNumber("q4");
            var q5=getNumber("q5");
            var q6=getNumber("q6");
            var q7=getNumber("q7");
            var q8=Math.max(getNumber("q8a"),getNumber("q8b"));
            var q9=getNumber("q9");
            var q10=Math.max(getNumber("q10a"),getNumber("q10b"));
            //alert(getNumber("q1"));
               
            var score=q1+q2+q3+q4+q5+q6+q7+q8+q9+q10;
            //alert(score);
            
            document.getElementById('depression_resultat').style.display="block";
            document.getElementById('depression_resultat_score').innerHTML=""+score;
            
            if(score<20) document.getElementById('depression_ingen').style.display="block";
            if(score>=20 && score<=24) document.getElementById('depression_let').style.display="block";
            if(score>=25 && score<=29) document.getElementById('depression_moderat').style.display="block";
            if(score>=30) document.getElementById('depression_svaer').style.display="block";
            
            
               
         }
         
         function getNumber(name)
         {
            var form=document.getElementById('depression_form');
            var radioValue=getCheckedRadioValue(form.elements[name]);
            if(radioValue==undefined) return 0;
            
            return parseInt(radioValue);
            
         }
         
         function getCheckedRadioValue(radioObj) {
            if(!radioObj) return "";
            var radioLength = radioObj.length;
            if(radioLength == undefined)
               if(radioObj.checked)
                  return radioObj.value;
               else
                  return "";
            for(var i = 0; i < radioLength; i++) {
               if(radioObj[i].checked) {
                  return radioObj[i].value;
               }
            }
         }
  </script>