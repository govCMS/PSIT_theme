<?php
/**
 * @file
 * Default theme implementation for beans.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) entity label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-{ENTITY_TYPE}
 *   - {ENTITY_TYPE}-{BUNDLE}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <div class="content"<?php print $content_attributes; ?>>
    <div class="psit-diagnostic-tool-form-section">
      <div class="entry-content">
        <h2>Pre-Diagnostic</h2>
        <p>Please take a moment to let us know how to improve the toolkit by answering some quick questions so we can tailor more content on the Toolkit to help you in your innovation efforts. This will help us monitor which areas are (and are not) using the tool, so that we can improve the toolkit. No individual information is retained and all information is amalgamated.</p>
        <form id="diagnostic" action="" method="post">

        <fieldset class="rounded-corner">
        <legend>Demographics</legend>
        <div>
          <p>Where are you from?</p>
          <div class="pad-left">
            <input type="radio" name="origin" id="idOrigin1" value="1"> <label for="idOrigin1">Australian Public Service</label><br>
            <input type="radio" name="origin" id="idOrigin2" value="2"> <label for="idOrigin2">Public Sector</label><br>
            <input type="radio" name="origin" id="idOrigin3" value="3"> <label for="idOrigin3">Industry</label><br>
            <input type="radio" name="origin" id="idOrigin4" value="4"> <label for="idOrigin4">Academic</label><br>
            <input type="radio" name="origin" id="idOrigin5" value="5"> <label for="idOrigin5">Interested Individual</label><br>
            <input type="radio" name="origin" id="idOrigin6" value="6"> <label for="idOrigin6">Other</label><br>
            <div id="idOther">
              <label for="idOriginText">Please specify: </label><input type="text" id="idOriginText" name="origin_text" value="" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">
            </div>
            <input type="radio" name="origin" id="idOrigin7" value="7"> <label for="idOrigin7">Do not want to specify</label>
          </div>
        </div>
        <div id="position">
          <p>What is your position title?</p>
          <div class="pad-left">
            <input type="radio" name="position" id="idPosition1" value="1"> <label for="idPosition1"></label><input type="text" name="position_title" value="Please specify..." title="Please specify your title" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';"><br>
            <input type="radio" name="position" id="idPosition2" value="2"> <label for="idPosition2">Do not want to specify</label>
          </div>
        </div>
        </fieldset>

        <fieldset class="matrix rounded-corner">
        <legend>Generation Phase</legend>
        <table>
        <thead>
        <tr>
          <td> </td>
          <th scope="col" class="textcenter opt-heading">Do not agree</th>
          <th scope="col" class="textcenter opt-heading">Partially agree</th>
          <th scope="col" class="textcenter opt-heading">Agree</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <th scope="row">Our organisation makes it easy for people to put new ideas up the line.</th>
          <td><input type="radio" name="q1" value="1" title="q1 do not agree"></td>
          <td><input type="radio" name="q1" value="2" title="q1 partially agree"></td>
          <td><input type="radio" name="q1" value="3" title="q1 agree"></td>
        </tr>
        <tr>
          <th scope="row">My job allows me to come up with new ideas.</th>
          <td><input type="radio" name="q2" value="1" title="q2 do not agree"></td>
          <td><input type="radio" name="q2" value="2" title="q2 partially agree"></td>
          <td><input type="radio" name="q2" value="3" title="q2 agree"></td>
        </tr>
        <tr>
          <th scope="row">I am encouraged to look for and listen to ideas outside my team (including outside the organisation).</th>
          <td><input type="radio" name="q3" value="1" title="q3 do not agree"></td>
          <td><input type="radio" name="q3" value="2" title="q3 partially agree"></td>
          <td><input type="radio" name="q3" value="3" title="q3 agree"></td>
        </tr>
        <tr>
          <th scope="row">I know how innovation fits within my organisation's strategy and vision.</th>
          <td><input type="radio" name="q4" value="1" title="q4 do not agree"></td>
          <td><input type="radio" name="q4" value="2" title="q4 partially agree"></td>
          <td><input type="radio" name="q4" value="3" title="q4 agree"></td>
        </tr>
        <tr>
          <th scope="row">I know who can help me develop an idea and take it forward.</th>
          <td><input type="radio" name="q5" value="1" title="q5 do not agree"></td>
          <td><input type="radio" name="q5" value="2" title="q5 partially agree"></td>
          <td><input type="radio" name="q5" value="3" title="q5 agree"></td>
        </tr>
        </tbody>
        </table>
        </fieldset>

        <fieldset class="matrix rounded-corner">
        <legend>Selection Phase</legend>
        <table>
        <thead>
        <tr>
          <td> </td>
          <th scope="col" class="textcenter opt-heading">Do not agree</th>
          <th scope="col" class="textcenter opt-heading">Partially agree</th>
          <th scope="col" class="textcenter opt-heading">Agree</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <th scope="row">Our organisation communicates clearly why some ideas are implemented and others are not.</th>
          <td><input type="radio" name="q6" value="1" title="q6 do not agree"></td>
          <td><input type="radio" name="q6" value="2" title="q6 partially agree"></td>
          <td><input type="radio" name="q6" value="3" title="q6 agree"></td>
        </tr>
        <tr>
          <th scope="row">I receive timely and constructive feedback on my ideas.</th>
          <td><input type="radio" name="q7" value="1" title="q7 do not agree"></td>
          <td><input type="radio" name="q7" value="2" title="q7 partially agree"></td>
          <td><input type="radio" name="q7" value="3" title="q7 agree"></td>
        </tr>
        <tr>
          <th scope="row">We consider the views of stakeholders and citizens in choosing ideas for further investigation.</th>
          <td><input type="radio" name="q8" value="1" title="q8 do not agree"></td>
          <td><input type="radio" name="q8" value="2" title="q8 partially agree"></td>
          <td><input type="radio" name="q8" value="3" title="q8 agree"></td>
        </tr>
        <tr>
          <th scope="row">Our processes for getting new ideas approved are supportive.</th>
          <td><input type="radio" name="q9" value="1" title="q9 do not agree"></td>
          <td><input type="radio" name="q9" value="2" title="q9 partially agree"></td>
          <td><input type="radio" name="q9" value="3" title="q9 agree"></td>
        </tr>
        <tr>
          <th scope="row">We are not averse to risk when considering new ideas that we could invest in.</th>
          <td><input type="radio" name="q10" value="1" title="q10 do not agree"></td>
          <td><input type="radio" name="q10" value="2" title="q10 partially agree"></td>
          <td><input type="radio" name="q10" value="3" title="q10 agree"></td>
        </tr>
        </tbody>
        </table>
        </fieldset>

        <fieldset class="matrix rounded-corner">
        <legend>Implementation Phase</legend>
        <table>
        <thead>
        <tr>
          <td> </td>
          <th scope="col" class="textcenter opt-heading">Do not agree</th>
          <th scope="col" class="textcenter opt-heading">Partially agree</th>
          <th scope="col" class="textcenter opt-heading">Agree</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <th scope="row">My organisation is prepared to pilot and trial new ideas.</th>
          <td><input type="radio" name="q11" value="1" title="q11 do not agree"></td>
          <td><input type="radio" name="q11" value="2" title="q11 partially agree"></td>
          <td><input type="radio" name="q11" value="3" title="q11 agree"></td>
        </tr>
        <tr>
          <th scope="row">I get the help I need to manage new projects or ideas.</th>
          <td><input type="radio" name="q12" value="1" title="q12 do not agree"></td>
          <td><input type="radio" name="q12" value="2" title="q12 partially agree"></td>
          <td><input type="radio" name="q12" value="3" title="q12 agree"></td>
        </tr>
        <tr>
          <th scope="row">My organisation is good at developing and managing risky innovative ideas.</th>
          <td><input type="radio" name="q13" value="1" title="q13 do not agree"></td>
          <td><input type="radio" name="q13" value="2" title="q13 partially agree"></td>
          <td><input type="radio" name="q13" value="3" title="q13 agree"></td>
        </tr>
        <tr>
          <th scope="row">We collaborate with others in implementing new ideas and projects.</th>
          <td><input type="radio" name="q14" value="1" title="q14 do not agree"></td>
          <td><input type="radio" name="q14" value="2" title="q14 partially agree"></td>
          <td><input type="radio" name="q14" value="3" title="q14 agree"></td>
        </tr>
        <tr>
          <th scope="row">We clearly communicate the potential risks and benefits of innovative projects.</th>
          <td><input type="radio" name="q15" value="1" title="q15 do not agree"></td>
          <td><input type="radio" name="q15" value="2" title="q15 partially agree"></td>
          <td><input type="radio" name="q15" value="3" title="q15 agree"></td>
        </tr>
        </tbody>
        </table>
        </fieldset>

        <fieldset class="matrix rounded-corner">
        <legend>Sustaining Phase</legend>
        <table>
        <thead>
        <tr>
          <td> </td>
          <th scope="col" class="textcenter opt-heading">Do not agree</th>
          <th scope="col" class="textcenter opt-heading">Partially agree</th>
          <th scope="col" class="textcenter opt-heading">Agree</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <th scope="row">My organisation regularly embeds good ideas into its core business.</th>
          <td><input type="radio" name="q16" value="1" title="q16 do not agree"></td>
          <td><input type="radio" name="q16" value="2" title="q16 partially agree"></td>
          <td><input type="radio" name="q16" value="3" title="q16 agree"></td>
        </tr>
        <tr>
          <th scope="row">I receive the training needed to incorporate innovations into my job.</th>
          <td><input type="radio" name="q17" value="1" title="q17 do not agree"></td>
          <td><input type="radio" name="q17" value="2" title="q17 partially agree"></td>
          <td><input type="radio" name="q17" value="3" title="q17 agree"></td>
        </tr>
        <tr>
          <th scope="row">My organisation does not dismiss people and factors that threaten our innovative ideas, but openly engages with them.</th>
          <td><input type="radio" name="q18" value="1" title="q18 do not agree"></td>
          <td><input type="radio" name="q18" value="2" title="q18 partially agree"></td>
          <td><input type="radio" name="q18" value="3" title="q18 agree"></td>
        </tr>
        <tr>
          <th scope="row">We have a culture of evaluation.</th>
          <td><input type="radio" name="q19" value="1" title="q19 do not agree"></td>
          <td><input type="radio" name="q19" value="2" title="q19 partially agree"></td>
          <td><input type="radio" name="q19" value="3" title="q19 agree"></td>
        </tr>
        <tr>
          <th scope="row">We celebrate our successes in innovation and learn from everything we do.</th>
          <td><input type="radio" name="q20" value="1" title="q20 do not agree"></td>
          <td><input type="radio" name="q20" value="2" title="q20 partially agree"></td>
          <td><input type="radio" name="q20" value="3" title="q20 agree"></td>
        </tr>
        </tbody>
        </table>
        </fieldset>

        <fieldset class="matrix rounded-corner">
        <legend>Diffusion Phase</legend>
        <table>
        <thead>
        <tr>
          <td> </td>
          <th scope="col" class="textcenter opt-heading">Do not agree</th>
          <th scope="col" class="textcenter opt-heading">Partially agree</th>
          <th scope="col" class="textcenter opt-heading">Agree</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <th scope="row">We recognise people for their good ideas.</th>
          <td><input type="radio" name="q21" value="1" title="q21 do not agree"></td>
          <td><input type="radio" name="q21" value="2" title="q21 partially agree"></td>
          <td><input type="radio" name="q21" value="3" title="q21 agree"></td>
        </tr>
        <tr>
          <th scope="row">We share our ideas and encourage their reuse.</th>
          <td><input type="radio" name="q22" value="1" title="q22 do not agree"></td>
          <td><input type="radio" name="q22" value="2" title="q22 partially agree"></td>
          <td><input type="radio" name="q22" value="3" title="q22 agree"></td>
        </tr>
        <tr>
          <th scope="row">I am supported in sharing lessons from unsuccessful innovations.</th>
          <td><input type="radio" name="q23" value="1" title="q23 do not agree"></td>
          <td><input type="radio" name="q23" value="2" title="q23 partially agree"></td>
          <td><input type="radio" name="q23" value="3" title="q23 agree"></td>
        </tr>
        <tr>
          <th scope="row">Innovations from our organisation are often adopted by other organisations.</th>
          <td><input type="radio" name="q24" value="1" title="q24 do not agree"></td>
          <td><input type="radio" name="q24" value="2" title="q24 partially agree"></td>
          <td><input type="radio" name="q24" value="3" title="q24 agree"></td>
        </tr>
        <tr>
          <th scope="row">My organisation encourages staff mobility to help spread knowledge.</th>
          <td><input type="radio" name="q25" value="1" title="q25 do not agree"></td>
          <td><input type="radio" name="q25" value="2" title="q25 partially agree"></td>
          <td><input type="radio" name="q25" value="3" title="q25 agree"></td>
        </tr>
        </tbody>
        </table>
        </fieldset>

        <div>
        <input type="hidden" name="f1" value="f3">
        </div>
        <p class="form-submit">
          <input class="submit" type="submit" value="Submit and show me my score!">
        </p>
        </form>
        <div id="dialog" style="display: none;"></div>

        <div class="page-link">Pages: <a href="/tools/diagnostic-tool/">1</a> 2</div></div>
    </div>
    <div class="psit-diagnostic-tool-results-section">
      <div class="entry-content">
          <div id="diagresult"><img id="psit-results-chart" src="https://chart.googleapis.com/chart?cht=r&chs=560x480&chd=t:11,14,12,12,9,11&chm=B,e7efbfDD,0,1.0,5.0&chds=0,15&chxl=0:|Generation|Selection|Implementation|Sustaining|Diffusion|1:||5|10|15&chxt=x,y&chxr=1,0,3|0,0,3,0&chxs=10,000000,9&chco=9228d6" alt="" align="center">
            <p>Submitted on <span id="psit-diagnostic-tool-results-submitted-date">20 June 2016</span></p>
            <h2>Generation Phase</h2>
            <div id="psit-diagnostic-tool-results-generation-summary"></div>
            <h2>Selection Phase</h2>
            <div id="psit-diagnostic-tool-results-selection-summary"></div>
            <h2>Implementation Phase</h2>
            <div id="psit-diagnostic-tool-results-implementation-summary"></div>
            <h2>Sustaining Phase</h2>
            <div id="psit-diagnostic-tool-results-sustaining-summary"></div>
            <h2>Diffusion Phase</h2>
            <div id="psit-diagnostic-tool-results-diffusion-summary"></div>
            <h2>Notes</h2>
            <ul>
            <li>Note that all tools may not be available at the time</li>
            <li>These are suggestions only and we invite everyone to look at all the tools available</li>
            <li>The Diagnostic is not a comprehensive study or analysis of innovation in your organisation and is provided to give guidance to what sort of tools you may assist you to improve innovation in your organisation.</li>
            </ul>
            <!--<p><a href="?pdf=2ro3yv">Save your results in PDF format</a>.</p>-->
            <!--<p>View online at <a href="http://innovation.govspace.gov.au/?h=2ro3yv">http://innovation.govspace.gov.au/?h=2ro3yv</a></p>-->
            </div>
            <div class="page-link">Pages: <a href="/tools/diagnostic-tool/">1</a> 2</div>
      </div>
    </div>
  </div>
</div>
