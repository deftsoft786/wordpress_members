<?php
   /**
    * Template Name Posts: Skizofrenitest
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
            <div style="margin: 5px 0 30px 0;">
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
            </div>
            <img class="aligncenter" title="skizofrenitest" src="http://www.sundhedslex.dk/images/skizofrenitest.jpg" alt="skizofrenitest" />
            <h2>Test dig selv for skizofreni</h2>
             
            <p>Her kan du tage vores skizofreni-test, som er udarbejdet med udgangspunkt i ICD-10 kriterierne (læs mere herom længere nede på siden). For at tage testen skal du:</p>
             
            <ul>
               <li>Besvare <strong>alle spørgsmål</strong> ærligt (ellers giver testen et misvisende resultat)</li>
               <li>Besvare spørgsmålene ud fra din <strong>tilstand den seneste måneds tid eller længere tid</strong>.</li>
            </ul>
             
            <!-- Fra her -->
            <style>.depression_table{	border-collapse: collapse;}.depression_table td{border:1px solid #000000;}</style>
            <script>			function beregn_depression(){				document.getElementById('depression_ingen').style.display="none";				document.getElementById('depression_let').style.display="none";				document.getElementById('depression_moderat').style.display="none";				document.getElementById('depression_svaer').style.display="none";								var form=document.getElementById('depression_form');								var q1=getNumber("q1");				var q2=getNumber("q2");				var q3=getNumber("q3");				var q4=getNumber("q4");				var q5=getNumber("q5");				var q6=getNumber("q6");				var q7=getNumber("q7");				var q8=getNumber("q8");													var score=q1+q2+q3+q4+q5+q6+q7+q8;												document.getElementById('depression_resultat').style.display="block";				document.getElementById('depression_resultat_score').innerHTML=""+score;								if(score<20) document.getElementById('depression_ingen').style.display="block";				if(score>=20 && score<=24) document.getElementById('depression_let').style.display="block";				if(score>=25 && score<=29) document.getElementById('depression_moderat').style.display="block";				if(score>=30) document.getElementById('depression_svaer').style.display="block";																}						function getNumber(name)			{				var form=document.getElementById('depression_form');				var radioValue=getCheckedRadioValue(form.elements[name]);				if(radioValue==undefined) return 0;								return parseInt(radioValue);							}						function getCheckedRadioValue(radioObj) {				if(!radioObj) return "";				var radioLength = radioObj.length;				if(radioLength == undefined)					if(radioObj.checked)						return radioObj.value;					else						return "";				for(var i = 0; i < radioLength; i++) {					if(radioObj[i].checked) {						return radioObj[i].value;					}				}			}</script>		
            <form id="depression_form">
               <table cellspacing="0" class="depression_table">
                  <tr>
                     <td></td>
                     <td style="width:80px;">Hele tiden</td>
                     <td style="width:80px;">Det meste af tiden</td>
                     <td style="width:80px;">Lidt over halvdelen af tiden</td>
                     <td style="width:80px;">Lidt under halvdelen af tiden</td>
                     <td style="width:80px;">Lidt af tiden</td>
                     <td style="width:80px;">På intet tidspunkt</td>
                  </tr>
                  <tr>
                     <td>Jeg kan høre mine egne tanker som om de bliver talt. Det føles som om mine tanker ikke er mine egne eller at de bliver fjernet. Jeg kan styre andre menneskers tanker.</td>
                     <td><input type="radio" name="q1" value="5" /></td>
                     <td><input type="radio" name="q1" value="4" /></td>
                     <td><input type="radio" name="q1" value="3" /></td>
                     <td><input type="radio" name="q1" value="2" /></td>
                     <td><input type="radio" name="q1" value="1" /></td>
                     <td><input type="radio" name="q1" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Jeg kan ikke kontrollere min egen bevidsthed, tanker, handlinger, følelser eller kropsbevægelser af flere årsager, deriblandt hjemsøgelse/sjælelig besættelse, tankekontrol og manglende viljestyrke.</td>
                     <td><input type="radio" name="q2" value="5" /></td>
                     <td><input type="radio" name="q2" value="4" /></td>
                     <td><input type="radio" name="q2" value="3" /></td>
                     <td><input type="radio" name="q2" value="2" /></td>
                     <td><input type="radio" name="q2" value="1" /></td>
                     <td><input type="radio" name="q2" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Én eller flere stemmer inde i mit hoved diskuterer eller kommenterer på mine tanker og handlinger.</td>
                     <td><input type="radio" name="q3" value="5" /></td>
                     <td><input type="radio" name="q3" value="4" /></td>
                     <td><input type="radio" name="q3" value="3" /></td>
                     <td><input type="radio" name="q3" value="2" /></td>
                     <td><input type="radio" name="q3" value="1" /></td>
                     <td><input type="radio" name="q3" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Jeg har magiske, synske eller åndelige kræfter, som andre ikke har. Enten tror de mig ikke, eller også vil de stoppe mig. De tror jeg er skør!</td>
                     <td><input type="radio" name="q4" value="5" /></td>
                     <td><input type="radio" name="q4" value="4" /></td>
                     <td><input type="radio" name="q4" value="3" /></td>
                     <td><input type="radio" name="q4" value="2" /></td>
                     <td><input type="radio" name="q4" value="1" /></td>
                     <td><input type="radio" name="q4" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Jeg kommunikerer med mennesker, ånder og væsener hinsides denne verden, som andre ikke kan se eller høre. De giver mig hemmelige informationer, piner mig eller giver mig besvær.</td>
                     <td><input type="radio" name="q5" value="5" /></td>
                     <td><input type="radio" name="q5" value="4" /></td>
                     <td><input type="radio" name="q5" value="3" /></td>
                     <td><input type="radio" name="q5" value="2" /></td>
                     <td><input type="radio" name="q5" value="1" /></td>
                     <td><input type="radio" name="q5" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Mine evner til at kommunikere forværres. Jeg taber mit ordforråd, grammatik, syntaks, tale og selv min håndskrift. Jeg blander ord, bogstaver og sprog sammen.</td>
                     <td><input type="radio" name="q6" value="5" /></td>
                     <td><input type="radio" name="q6" value="4" /></td>
                     <td><input type="radio" name="q6" value="3" /></td>
                     <td><input type="radio" name="q6" value="2" /></td>
                     <td><input type="radio" name="q6" value="1" /></td>
                     <td><input type="radio" name="q6" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Falder du ind i en nogen mental vegetativ tilstand, som du forbliver i, uanset hvilken position folk sætter dig i, når de bevæger dig rundt?</td>
                     <td><input type="radio" name="q7" value="5" /></td>
                     <td><input type="radio" name="q7" value="4" /></td>
                     <td><input type="radio" name="q7" value="3" /></td>
                     <td><input type="radio" name="q7" value="2" /></td>
                     <td><input type="radio" name="q7" value="1" /></td>
                     <td><input type="radio" name="q7" value="0" /></td>
                  </tr>
                  <tr>
                     <td>Passer én eller flere af følgende udsagn?
                        <br />a) Jeg mangler energi, er apatisk og har ingen interesse i, hvad der ellers var rutinemæssige aktiviteter i hverdagen.                                                  
                        <br />b) Min tale er meget reduceret, svag og gentagende. F. eks. svarer jeg langsomt på spørgsmål, eller også svarer jeg slet ikke.                                         
                        <br />c) Mine følelser er upassende. F.eks. græder jeg af ingen årsag eller griner af vold.
                     </td>
                     <td><input type="radio" name="q8" value="5" /></td>
                     <td><input type="radio" name="q8" value="4" /></td>
                     <td><input type="radio" name="q8" value="3" /></td>
                     <td><input type="radio" name="q8" value="2" /></td>
                     <td><input type="radio" name="q8" value="1" /></td>
                     <td><input type="radio" name="q8" value="0" /></td>
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
            <div id="depression_ingen" style="display:none;">Det tyder ikke på at du lider af skizofreni.</div>
            <div id="depression_let" style="display:none;">Du har muligvis symptomer på skizofreni.</div>
            <div id="depression_moderat" style="display:none;">Du har symptomer på skizofreni.</div>
            <div id="depression_svaer" style="display:none;">Du har akutte symptomer på skizofreni.</div>
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
<?php get_footer();