<?php
// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
    die("Don't try to access directly :-( ");
}

/**
* @Author: Maher Hossain
* @author_uri: https://maherhossain.com 
* @param $tag
* @param $callback
*/

add_shortcode('pregnancy-calculator', 'mhpcnew_calculator');

function mhpcnew_calculator(){
	ob_start();
?>

<section>
    <div id="mhpcnew-container">
  		<div class="mhpcnew-col-1"><h2><?php echo get_option('name_of_the_calculator'); ?></h2></div>

  		<div class="mhpcnew-col-2 mhpc-title mhpc-r-odd">
  			<p class="mhpc-field-title"><?php echo get_option('first_day_of_last_period'); ?></p>
  		</div>
			<div class="mhpc-r-odd mhpc-none">:</div>
  		<div class="mhpcnew-col-3 mhpc-data mhpc-r-odd">
  			<input type="text" id="maherhossainDatepicker" />
  		</div>

  		<div class="mhpcnew-col-4 mhpc-title mhpc-r-even">
  			<div>
	  			<p class="mhpc-field-title"><?php echo get_option('date_of_conception'); ?></p> 
	            <p class="mhpc-field-sub-title">(<?php echo get_option('date_of_conception_sub_text'); ?>)</p>
          	</div>
  		</div>
			<div class="mhpc-none mhpc-r-even">:</div>
  		<div class="mhpcnew-col-5 mhpc-data mhpc-r-even">
  			<p class="mhpc-cal-data"><b id="maherhossainCO"></b></p>
  		</div>

  		<div class="mhpcnew-col-6 mhpc-title mhpc-r-odd">
  			<div>
	  			<p class="mhpc-field-title"><?php echo get_option('dating_scan'); ?></p>
	  			<p class="mhpc-field-sub-title">(<?php echo get_option('dating_scan_sub_text'); ?>)</p>
  			</div>
  		</div>
			<div class="mhpc-r-odd mhpc-none">:</div>
  		<div class="mhpcnew-col-7 mhpc-data mhpc-r-odd">
  			<div>
	            <p class="mhpc-cal-data">
	            	<b id="maherhossainDS-1"></b> to <b id="maherhossainDS-2"></b>
	            </p>
	            <p class="mhpc-field-sub-title">
	              This scan will help to confirm your baby’s expected delivery date
	          	</p>
          	</div>
  		</div>

  		<div class="mhpcnew-col-8 mhpc-title">
  			<div>
	  			<p class="mhpc-field-title"><?php echo get_option('nipt_ttesting'); ?></p> 
	  			<p class="mhpc-field-sub-title">(<?php echo get_option('nipt_ttesting_sub_text'); ?>)</p>
  			</div>
  		</div>
			<div class="mhpc-none">:</div>
  		<div class="mhpcnew-col-9 mhpc-data">
  			<div>
	            <p><b id="maherhossainNIPT"></b></p>
	            <p class="mhpc-field-sub-title"> Screening for Down syndrome and other chromosomal anomalies.</p>
            </div>
  		</div>

  		<div class="mhpcnew-col-10 mhpc-title mhpc-r-odd">
  			<div>
  				<p class="mhpc-field-title"><?php echo get_option('nt_scan'); ?></p>
            	<p class="mhpc-field-sub-title">(<?php echo get_option('nt_scan_sub_text'); ?>)</p>
  			</div>
  		</div>
			<div class="mhpc-r-odd mhpc-none">:</div>
  		<div class="mhpcnew-col-11 mhpc-data mhpc-r-odd">
  			<div>
	            <p><b id="maherhossainNT-1"></b> to <b id="maherhossainNT-2"></b></p>
	            <p class="mhpc-field-sub-title">Screening for Down syndrome and a review of baby’s development</p>
            </div>
  		</div>

  		<div class="mhpcnew-col-12 mhpc-title">
  			<div>
	  			<p class="mhpc-field-title">
		            <?php echo get_option('pre_eclampsia_screening'); ?>
		        </p>
		        <p class="mhpc-field-sub-title">(<?php echo get_option('pre_eclampsia_screening_sub_text'); ?>)</p>
            </div>
  		</div>
			<div class="mhpc-none">:</div>
  		<div class="mhpcnew-col-13 mhpc-data">
  			<div>
	            <p><b id="maherhossainPES-1"></b> to <b id="maherhossainPES-2"></b></p>
	            <p class="mhpc-field-sub-title">Detects 90% of pregnant women who will develop pre-eclampsia</p>
            </div>
	        
  		</div>

  		<div class="mhpcnew-col-14 mhpc-title mhpc-r-odd">
  			<div>
	  			<p class="mhpc-field-title"><?php echo get_option('structural_scan'); ?></p>
	            <p class="mhpc-field-sub-title">(<?php echo get_option('structural_scan_sub_text'); ?>)</p>
            </div>
  		</div>
			<div class="mhpc-r-odd mhpc-none">:</div>
  		<div class="mhpcnew-col-15 mhpc-data mhpc-r-odd">
  			<div>
	  			<p><b id="maherhossainSS-1"></b> to <b id="maherhossainSS-2"></b></p>
	            <p class="mhpc-field-sub-title">Scan to review baby’s development</p>
				</div>
  		</div>

  		<div class="mhpcnew-col-16 mhpc-title">
  			<div>
	  			<p class="mhpc-field-title"><?php echo get_option('morphology_scan'); ?></p>
	            <p class="mhpc-field-sub-title">(<?php echo get_option('morphology_scan_sub_text'); ?>)</p>
            </div>
  		</div>
			<div class="mhpc-none">:</div>
  		<div class="mhpcnew-col-17 mhpc-data">
  			<div>
	            <p><b id="maherhossainMS-1"></b> to <b id="maherhossainMS-2"></b></p>
	            <p class="mhpc-field-sub-title">Detailed review of your baby’s complex organs</p>
        	</div>
  		</div>

  		<div class="mhpcnew-col-18 mhpc-title mhpc-r-odd">
  			<p class="mhpc-field-title"><?php echo get_option('estimated_due_date'); ?></p>
  		</div>
			<div class="mhpc-r-odd mhpc-none">:</div>
  		<div class="mhpcnew-col-19 mhpc-data mhpc-r-odd">
  			<p><b id="maherhossainEDD"></b></p>
  		</div>

  		<div class="mhpcnew-col-20 mhpc-title">
  			<div>
	  			<p class="mhpc-field-title"><?php echo get_option('growth_scan'); ?></p>
					<p class="mhpc-field-sub-title">(<?php echo get_option('growth_scan_sub_text'); ?>)</p>
				</div>
  		</div>
			<div class="mhpc-none">:</div>
  		<div class="mhpcnew-col-21 mhpc-data">
  			<div>
	            <p><b id="maherhossainGS"></b></p>
	            <p class="mhpc-field-sub-title">Checks your baby’s health, position, size and growth</p>
            </div>
          </span>
  		</div>

  		<div class="mhpcnew-col-22">
  			<p class="mhpc-text-center">
		        On <b><span id="mh-current-date"></span></b>,<span id="mhpc-final-text"> you are currently <b><span id="mh-current-weeks"></span></b> weeks <b><span id="mh-current-days"></span></b> days pregnant.</span>
	      	</p>
  		</div>
  	</div>
</section>
<div class="clear"></div>


<?php 
  return ob_get_clean();
  
}
