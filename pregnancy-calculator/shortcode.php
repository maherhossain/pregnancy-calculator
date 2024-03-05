<?php

add_shortcode('pregnancy-calculator', 'maher_pragnancy_calculator');

function maher_pragnancy_calculator(){
	ob_start();?>
<section>
    <div class="parent">
      <!-- 1 -->
      <div>
        <div>First Day of Last Menstrual Period (LMP)</div>
        <div><input type="text" id="maherhossainDatepicker" /></div>
      </div>
      <!-- 2 -->
      <div>
        <div>
          <span>
            Conception Occurred <br />
            <i>(about two weeks after last menstrual period)</i>
          </span>
        </div>
        <div>
          <b id="maherhossainCO"></b>
        </div>
      </div>
      <!-- 3 -->
      <div>
        <div>
          <span>Dating Scan <br /><i>(between weeks 7 and 12)</i> </span>
        </div>
        <div>
          <span>
            <b id="maherhossainDS-1"></b> to <b id="maherhossainDS-2"></b>
            <br />
            <i>
              This scan will help to confirm your baby’s expected delivery date
            </i>
          </span>
        </div>
      </div>
      <!-- 4 -->
      <div>
        <div>
          <span>NIPT Testing <br /><i>(from week 10)</i></span>
        </div>
        <div>
          <span>
            <b id="maherhossainNIPT"></b><br />
            <i> Screening for Down syndrome and other chromosomal anomalies </i>
          </span>
        </div>
      </div>
      <!-- 5 -->
      <div>
        <div>
          <span>
            Nuchal Translucency Scan <br />
            <i>(approx 12 weeks to 13.5 weeks)</i>
          </span>
        </div>
        <div>
          <span>
            <b id="maherhossainNT-1"></b> to <b id="maherhossainNT-2"></b>
            <br />
            <i>
              Screening for Down syndrome and a review of baby’s development</i
            >
          </span>
        </div>
      </div>
      <!-- 6 -->
      <div>
        <div>
          <span>
            Pre-eclampsia screening
            <br />
            <i>(approx 12 weeks to 13.5 weeks)</i>
          </span>
        </div>
        <div>
          <span>
            <b id="maherhossainPES-1"></b> to <b id="maherhossainPES-2"></b>
            <br />
            <i>Detects 90% of pregnant women who will develop pre-eclampsia</i>
          </span>
        </div>
      </div>
      <!-- 7 -->
      <div>
        <div>
          <span>
            Structural Scan
            <br />
            <i>(between week 12 and 16)</i></span
          >
        </div>
        <div>
          <span>
            <b id="maherhossainSS-1"></b> to <b id="maherhossainSS-2"></b>
            <br />
            <i>Scan to review baby’s development</i>
          </span>
        </div>
      </div>
      <!-- 8 -->
      <div>
        <div>
          <span>
            Morphology Scan
            <br />
            <i>(between 19 – 20 weeks)</i>
          </span>
        </div>
        <div>
          <span>
            <b id="maherhossainMS-1"></b> to <b id="maherhossainMS-2"></b>
            <br />
            <i>Detailed review of your baby’s complex organs</i>
          </span>
        </div>
      </div>
      <!-- 9 -->
      <div>
        <div>Estimated Due Date (EDD)</div>
        <div>
          <b id="maherhossainEDD"></b>
        </div>
      </div>
      <!-- 10 -->
      <div>
        <div>
          <span>Growth Scan <br /><i>(from 24 weeks)</i></span>
        </div>
        <div>
          <span>
            <b id="maherhossainGS"></b>
            <br />
            <i>Checks your baby’s health, position, size and growth</i>
          </span>
        </div>
      </div>
    </div>

    <!-- 11 -->
    <div id="final">
      <p class="mahaerhossain-text-center">
        On <b><span id="mh-current-date"></span></b>,
        <span id="mh-current-text-change">you are currently</span>
        <b><span id="mh-current-weeks"></span></b> weeks
        <b><span id="mh-current-days"></span></b> days pregnant.
      </p>
    </div>
</section>
<div class="clear"></div>


	<?php return ob_get_clean();
}
