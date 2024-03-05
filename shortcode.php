<?php

add_shortcode('pregnancy-calculator', 'maher_pragnancy_calculator');

function maher_pragnancy_calculator(){
	ob_start();?>
<section>
    <table
      id="maherhossain-pc"
      class="dcf-table dcf-table-responsive dcf-table-bordered dcf-table-striped dcf-w-100%"
    >
      <caption>
        Pregnancy Calculator
      </caption>

      <tr>
        <th scope="row">First Day of Last Menstrual Period (LMP)</th>
        <td>
          <input type="text" id="maherhossainDatepicker" />
        </td>
      </tr>

      <tbody>
        <tr>
          <th scope="row">
            <span
              >Conception Occurred <br />
              <i>(about two weeks after last menstrual period)</i></span
            >
          </th>
          <td>
            <b id="maherhossainCO"></b>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <span>Dating Scan <br /><i>(between weeks 7 and 12)</i> </span>
          </th>
          <td>
            <span
              ><b id="maherhossainDS-1"></b> to <b id="maherhossainDS-2"></b
              ><br />
              <i
                >This scan will help to confirm your baby’s expected delivery
                date</i
              ></span
            >
          </td>
        </tr>
        <tr>
          <th scope="row">
            <span>NIPT Testing <br /><i>(from week 10)</i></span>
          </th>
          <td>
            <span
              ><b id="maherhossainNIPT"></b><br />
              <i
                >Screening for Down syndrome and other chromosomal anomalies</i
              ></span
            >
          </td>
        </tr>
        <tr>
          <th scope="row">
            <span
              >Nuchal Translucency Scan <br /><i
                >(approx 12 weeks to 13.5 weeks)</i
              ></span
            >
          </th>
          <td>
            <span
              ><b id="maherhossainNT-1"></b> to <b id="maherhossainNT-2"></b
              ><br />
              <i
                >Screening for Down syndrome and a review of baby’s
                development</i
              ></span
            >
          </td>
        </tr>
        <tr>
          <th scope="row">
            <span
              >Pre-eclampsia screening <br />
              <i>(approx 12 weeks to 13.5 weeks)</i></span
            >
          </th>
          <td>
            <span
              ><b id="maherhossainPES-1"></b> to <b id="maherhossainPES-2"></b
              ><br />
              <i
                >Detects 90% of pregnant women who will develop pre-eclampsia</i
              ></span
            >
          </td>
        </tr>
        <tr>
          <th scope="row">
            <span>Structural Scan <br /><i>(between week 12 and 16)</i></span>
          </th>
          <td>
            <span
              ><b id="maherhossainSS-1"></b> to <b id="maherhossainSS-2"></b
              ><br />
              <i>Scan to review baby’s development</i></span
            >
          </td>
        </tr>

        <tr>
          <th scope="row">
            <span>Morphology Scan <br /><i>(between 19 – 20 weeks)</i></span>
          </th>
          <td>
            <span
              ><b id="maherhossainMS-1"></b> to <b id="maherhossainMS-2"></b
              ><br />
              <i>Detailed review of your baby’s complex organs</i></span
            >
          </td>
        </tr>
        <tr>
          <th scope="row">Estimated Due Date (EDD)</th>
          <td>
            <b id="maherhossainEDD"></b>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <span>Growth Scan <br /><i>(from 24 weeks)</i></span>
          </th>
          <td>
            <span
              ><b id="maherhossainGS"></b><br />
              <i>Checks your baby’s health, position, size and growth</i></span
            >
          </td>
        </tr>
      </tbody>
      <tfoot>
        <tr scope="row">
          <td colspan="2">
            <p class="mahaerhossain-text-center">
              On <b><span id="mh-current-date"></span></b>,
              <span id="mh-current-text-change">you are currently</span>
              <b><span id="mh-current-weeks"></span></b> weeks
              <b><span id="mh-current-days"></span></b> days pregnant.
            </p>
          </td>
        </tr>
      </tfoot>
    </table>
</section>
<div class="clear"></div>


	<?php return ob_get_clean();
}
