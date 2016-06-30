/**
 * @file
 * Provides javascript used on 'Diagnostic tool' bean block.
 */

(function ($) {
  // Quickfix for jQuery and jQuery UI compatibility issue. See:
  // http://stackoverflow.com/questions/12048271/jquery-ui-1-8-13-sudden-error
  $.curCSS = function (element, attrib, val) {
    $(element).css(attrib, val);
  };

  Drupal.behaviors.psitDiagnosticTool = {
    attach: function (context, settings) {

      var currentDate = new Date();
      var $formPage = $('.psit-diagnostic-tool-form-section', context);
      var $resultsPage = $('.psit-diagnostic-tool-results-section', context);

      /**
       * Get formatted date string.
       *
       * @param object date
       *   Instance of Date object.
       *
       * @returns String
       *   Date in the format 'day month year'.
       */
      var formatDate = function (date) {
        var monthNames = [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July",
          "August",
          "September",
          "October",
          "November",
          "December"
        ];

        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();

        return day + ' ' + monthNames[monthIndex] + ' ' + year;
      };

      /**
       * Get summary text markup for given section.
       *
       * @param String rating
       *   Section rating.
       * @param String phase
       *   Phase name.
       *
       * @returns String
       *   Summary text markup.
       */
      var getResultsSummary = function (rating, phase) {
        var blurbs = {
          very_good: {
            generation: '<p>Your organisation is very good at the <strong>generation phase</strong> of the Innovation Cycle. You may want to share your experiences of innovation <strong>generation</strong> with the innovation community and contribute to the <a href="http://showcase.govspace.gov.au/">Innovation Showcase</a>.</p>',
            selection: '<p>Your organisation is very good at the <strong>selection phase</strong> of the Innovation Cycle. You may want to share your experiences of innovation <strong>selection</strong> with the innovation community and contribute to the <a href="http://showcase.govspace.gov.au/">Innovation Showcase</a>.</p>',
            implementation: '<p>Your organisation is very good at the <strong>implementation phase</strong> of the Innovation Cycle. You may want to share your experiences of innovation <strong>implementation</strong> with the innovation community and contribute to the <a href="http://showcase.govspace.gov.au/">Innovation Showcase</a>.</p>',
            sustaining: '<p>Your organisation is very good at the <strong>sustaining phase</strong> of the Innovation Cycle. You may want to share your experiences of <strong>sustaining</strong> innovation with the innovation community and contribute to the <a href="http://showcase.govspace.gov.au/">Innovation Showcase</a>.</p>',
            diffusion: '<p>Your organisation is very good at the <strong>diffusion phase</strong> of the Innovation Cycle. You may want to share your experiences of innovation <strong>diffusion</strong> with the innovation community and contribute to the <a href="http://showcase.govspace.gov.au/">Innovation Showcase</a>.</p>'
          },
          good: {
            generation: '<p>Your organisation is good at the <strong>generation phase</strong> of the Innovation Cycle. You may want to have a look at the following tools to improve innovation <strong>generation</strong> further:</p><p class="padleft"><a href="http://innovation.govspace.gov.au/tools/strategy/">Strategy</a>, <a href="http://innovation.govspace.gov.au/tools/horizon-scanning/">Environmental Scanning</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-roles/">Innovation Roles</a>, <a href="http://innovation.govspace.gov.au/tools/people-and-training/">People and Training</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-values/">Innovation Values</a>, <a href="http://innovation.govspace.gov.au/tools/competition-and-prizes/">Competitions and Prizes</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-markets/">Innovation Markets</a>, <a href="http://innovation.govspace.gov.au/tools/calling-for-ideas/">Calling for Ideas</a>, <a href="http://innovation.govspace.gov.au/tools/ideas-management-systems/">Ideas Management Systems</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-jams/">Innovation Jams</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-tournaments/">Innovation Tournaments</a>, <a href="http://innovation.govspace.gov.au/tools/engagement-and-collaboration/">Engagement and Collaboration</a>, <a href="http://innovation.govspace.gov.au/tools/experimental-spaces/">Experimental Spaces</a>, <a href="http://innovation.govspace.gov.au/tools/procurement-and-outsourced-services/">Procurement and Outsourced Services</a></p>',
            selection: '<p>Your organisation is good at the <strong>selection phase</strong> of the Innovation Cycle. You may want to have a look at the following tools to improve innovation <strong>selection</strong> further:</p><p class="padleft"><a href="http://innovation.govspace.gov.au/tools/strategy/">Strategy</a>, <a href="http://innovation.govspace.gov.au/tools/horizon-scanning/">Environmental Scanning</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-roles/">Innovation Roles</a>, <a href="http://innovation.govspace.gov.au/tools/people-and-training/">People and Training</a>, <a href="http://innovation.govspace.gov.au/tools/resources/">Resources</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-teams/">Innovation Teams</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-values/">Innovation Values</a>, <a href="http://innovation.govspace.gov.au/tools/competitions-and-prizes/">Competitions and Prizes</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-markets/">Innovation Markets</a>, <a href="http://innovation.govspace.gov.au/tools/calling-for-ideas/">Calling for Ideas</a>, <a href="http://innovation.govspace.gov.au/tools/ideas-management-systems/">Ideas Management Systems</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-jams/">Innovation Jams</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-tournaments/">Innovation Tournaments</a>, <a href="http://innovation.govspace.gov.au/tools/mechanism-of-challenge/">Mechanisms of Challenge</a>, <a href="http://innovation.govspace.gov.au/tools/engagement-and-collaboration/">Engagement and Collaboration</a>, <a href="http://innovation.govspace.gov.au/tools/experimental-spaces/">Experimental Spaces</a>, <a href="http://innovation.govspace.gov.au/tools/procurement-and-outsourced-services/">Procurement and Outsourced Services</a>, <a href="http://innovation.govspace.gov.au/tools/idea-selection/">Idea Selection</a>, <a href="http://innovation.govspace.gov.au/tools/emphasising-uncertainty/">Emphasising Uncertainty</a>, <a href="http://innovation.govspace.gov.au/tools/stage-gate-systems/">Stage-Gate Systems</a>, <a href="http://innovation.govspace.gov.au/tools/pilots-and-trials/">Pilots and Trials</a></p>',
            implementation: '<p>Your organisation is good at the <strong>implementation phase</strong> of the Innovation Cycle. You may want to have a look at the following tools to improve innovation <strong>implementation</strong> further:</p><p class="padleft"><a href="http://innovation.govspace.gov.au/tools/strategy/">Strategy</a>, <a href="http://innovation.govspace.gov.au/tools/horizon-scanning/">Environmental Scanning</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-roles/">Innovation Roles</a>, <a href="http://innovation.govspace.gov.au/tools/people-and-training/">People and Training</a>, <a href="http://innovation.govspace.gov.au/tools/resources/">Resources</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-teams/">Innovation Teams</a>, <a href="http://innovation.govspace.gov.au/tools/mechanism-of-challenge/">Mechanisms of Challenge</a>, <a href="http://innovation.govspace.gov.au/tools/engagement-and-collaboration/">Engagement and Collaboration</a>, <a href="http://innovation.govspace.gov.au/tools/emphasising-uncertainty/">Emphasising Uncertainty</a>, <a href="http://innovation.govspace.gov.au/tools/stage-gate-systems/">Stage-Gate Systems</a>, <a href="http://innovation.govspace.gov.au/tools/pilots-and-trials/">Pilots and Trials</a></p>',
            sustaining: '<p>Your organisation is good at the <strong>sustaining phase</strong> of the Innovation Cycle. You may want to have a look at the following tools to improve <strong>sustaining</strong> innovation further:</p><p class="padleft"><a href="http://innovation.govspace.gov.au/tools/strategy/">Strategy</a>, <a href="http://innovation.govspace.gov.au/tools/horizon-scanning/">Environmental Scanning</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-roles/">Innovation Roles</a>, <a href="http://innovation.govspace.gov.au/tools/people-and-training/">People and Training</a>, <a href="http://innovation.govspace.gov.au/tools/resources/">Resources</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-teams/">Innovation Teams</a>, <a href="http://innovation.govspace.gov.au/tools/engagement-and-collaboration/">Engagement and Collaboration</a>, <a href="http://innovation.govspace.gov.au/tools/early-wins/">Early Wins</a>, <a href="http://innovation.govspace.gov.au/tools/sustaining-innovations/">Sustaining Innovations</a>, <a href="http://innovation.govspace.gov.au/tools/mearsuring-and-reporting/">Measuring and Reporting</a>, <a href="http://innovation.govspace.gov.au/tools/evaluation/">Evaluation</a>, <a href="http://innovation.govspace.gov.au/tools/promotion/">Promotion</a></p>',
            diffusion: '<p>Your organisation is good at the <strong>diffusion phase</strong> of the Innovation Cycle. You may want to have a look at the following tools to improve innovation <strong>diffusion</strong> further:</p><p class="padleft"><a href="http://innovation.govspace.gov.au/tools/strategy/">Strategy</a>, <a href="http://innovation.govspace.gov.au/tools/horizon-scanning/">Environmental Scanning</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-roles/">Innovation Roles</a>, <a href="http://innovation.govspace.gov.au/tools/people-and-training/">People and Training</a>, <a href="http://innovation.govspace.gov.au/tools/resources/">Resources</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-teams/">Innovation Teams</a>, <a href="http://innovation.govspace.gov.au/tools/engagement-and-collaboration/">Engagement and Collaboration</a>, <a href="http://innovation.govspace.gov.au/tools/early-wins/">Early Wins</a>, <a href="http://innovation.govspace.gov.au/tools/sustaining-innovations/">Sustaining Innovations</a>, <a href="http://innovation.govspace.gov.au/tools/measuring-and-reporting/">Measuring and Reporting</a>, <a href="http://innovation.govspace.gov.au/tools/evaluation/">Evaluation</a>, <a href="http://innovation.govspace.gov.au/tools/promotion/">Promotion</a></p>'
          },
          try_harder: {
            generation: '<p>Your organisation may need to work on the <strong>generation phase</strong> of the Innovation Cycle. You may want to have a look at the following tools to improve innovation <strong>generation</strong>:</p><p class="padleft"><a href="http://innovation.govspace.gov.au/tools/strategy/">Strategy</a>, <a href="http://innovation.govspace.gov.au/tools/horizon-scanning/">Environmental Scanning</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-roles/">Innovation Roles</a>, <a href="http://innovation.govspace.gov.au/tools/people-and-training/">People and Training</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-values/">Innovation Values</a>, <a href="http://innovation.govspace.gov.au/tools/competition-and-prizes/">Competitions and Prizes</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-markets/">Innovation Markets</a>, <a href="http://innovation.govspace.gov.au/tools/calling-for-ideas/">Calling for Ideas</a>, <a href="http://innovation.govspace.gov.au/tools/ideas-management-systems/">Ideas Management Systems</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-jams/">Innovation Jams</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-tournaments/">Innovation Tournaments</a>, <a href="http://innovation.govspace.gov.au/tools/engagement-and-collaboration/">Engagement and Collaboration</a>, <a href="http://innovation.govspace.gov.au/tools/experimental-spaces/">Experimental Spaces</a>, <a href="http://innovation.govspace.gov.au/tools/procurement-and-outsourced-services/">Procurement and Outsourced Services</a></p>',
            selection: '<p>Your organisation may need to work on the <strong>selection phase</strong> of the Innovation Cycle. You may want to have a look at the following tools to improve innovation <strong>selection</strong>:</p><p class="padleft"><a href="http://innovation.govspace.gov.au/tools/strategy/">Strategy</a>, <a href="http://innovation.govspace.gov.au/tools/horizon-scanning/">Environmental Scanning</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-roles/">Innovation Roles</a>, <a href="http://innovation.govspace.gov.au/tools/people-and-training/">People and Training</a>, <a href="http://innovation.govspace.gov.au/tools/resources/">Resources</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-teams/">Innovation Teams</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-values/">Innovation Values</a>, <a href="http://innovation.govspace.gov.au/tools/competitions-and-prizes/">Competitions and Prizes</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-markets/">Innovation Markets</a>, <a href="http://innovation.govspace.gov.au/tools/calling-for-ideas/">Calling for Ideas</a>, <a href="http://innovation.govspace.gov.au/tools/ideas-management-systems/">Ideas Management Systems</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-jams/">Innovation Jams</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-tournaments/">Innovation Tournaments</a>, <a href="http://innovation.govspace.gov.au/tools/mechanism-of-challenge/">Mechanisms of Challenge</a>, <a href="http://innovation.govspace.gov.au/tools/engagement-and-collaboration/">Engagement and Collaboration</a>, <a href="http://innovation.govspace.gov.au/tools/experimental-spaces/">Experimental Spaces</a>, <a href="http://innovation.govspace.gov.au/tools/procurement-and-outsourced-services/">Procurement and Outsourced Services</a>, <a href="http://innovation.govspace.gov.au/tools/idea-selection/">Idea Selection</a>, <a href="http://innovation.govspace.gov.au/tools/emphasising-uncertainty/">Emphasising Uncertainty</a>, <a href="http://innovation.govspace.gov.au/tools/stage-gate-systems/">Stage-Gate Systems</a>, <a href="http://innovation.govspace.gov.au/tools/pilots-and-trials/">Pilots and Trials</a></p>',
            implementation: '<p>Your organisation may need to work on the <strong>implementation phase</strong> of the Innovation Cycle. You may want to have a look at the following tools to improve innovation <strong>implementation</strong>:</p><p class="padleft"><a href="http://innovation.govspace.gov.au/tools/strategy/">Strategy</a>, <a href="http://innovation.govspace.gov.au/tools/horizon-scanning/">Environmental Scanning</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-roles/">Innovation Roles</a>, <a href="http://innovation.govspace.gov.au/tools/people-and-training/">People and Training</a>, <a href="http://innovation.govspace.gov.au/tools/resources/">Resources</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-teams/">Innovation Teams</a>, <a href="http://innovation.govspace.gov.au/tools/mechanism-of-challenge/">Mechanisms of Challenge</a>, <a href="http://innovation.govspace.gov.au/tools/engagement-and-collaboration/">Engagement and Collaboration</a>, <a href="http://innovation.govspace.gov.au/tools/emphasising-uncertainty/">Emphasising Uncertainty</a>, <a href="http://innovation.govspace.gov.au/tools/stage-gate-systems/">Stage-Gate Systems</a>, <a href="http://innovation.govspace.gov.au/tools/pilots-and-trials/">Pilots and Trials</a></p>',
            sustaining: '<p>Your organisation may need to work on the <strong>sustaining phase</strong> of the Innovation Cycle. You may want to have a look at the following tools to improve <strong>sustaining</strong> innovation:</p><p class="padleft"><a href="http://innovation.govspace.gov.au/tools/strategy/">Strategy</a>, <a href="http://innovation.govspace.gov.au/tools/horizon-scanning/">Environmental Scanning</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-roles/">Innovation Roles</a>, <a href="http://innovation.govspace.gov.au/tools/people-and-training/">People and Training</a>, <a href="http://innovation.govspace.gov.au/tools/resources/">Resources</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-teams/">Innovation Teams</a>, <a href="http://innovation.govspace.gov.au/tools/engagement-and-collaboration/">Engagement and Collaboration</a>, <a href="http://innovation.govspace.gov.au/tools/early-wins/">Early Wins</a>, <a href="http://innovation.govspace.gov.au/tools/sustaining-innovations/">Sustaining Innovations</a>, <a href="http://innovation.govspace.gov.au/tools/mearsuring-and-reporting/">Measuring and Reporting</a>, <a href="http://innovation.govspace.gov.au/tools/evaluation/">Evaluation</a>, <a href="http://innovation.govspace.gov.au/tools/promotion/">Promotion</a></p>',
            diffusion: '<p>Your organisation may need to work on the <strong>diffusion phase</strong> of the Innovation Cycle. You may want to have a look at the following tools to improve innovation <strong>diffusion</strong>:</p><p class="padleft"><a href="http://innovation.govspace.gov.au/tools/strategy/">Strategy</a>, <a href="http://innovation.govspace.gov.au/tools/horizon-scanning/">Environmental Scanning</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-roles/">Innovation Roles</a>, <a href="http://innovation.govspace.gov.au/tools/people-and-training/">People and Training</a>, <a href="http://innovation.govspace.gov.au/tools/resources/">Resources</a>, <a href="http://innovation.govspace.gov.au/tools/innovation-teams/">Innovation Teams</a>, <a href="http://innovation.govspace.gov.au/tools/engagement-and-collaboration/">Engagement and Collaboration</a>, <a href="http://innovation.govspace.gov.au/tools/early-wins/">Early Wins</a>, <a href="http://innovation.govspace.gov.au/tools/sustaining-innovations/">Sustaining Innovations</a>, <a href="http://innovation.govspace.gov.au/tools/measuring-and-reporting/">Measuring and Reporting</a>, <a href="http://innovation.govspace.gov.au/tools/evaluation/">Evaluation</a>, <a href="http://innovation.govspace.gov.au/tools/promotion/">Promotion</a></p>'
          }
        };

        return blurbs[rating][phase];
      };

      /**
       * Calculates form section scores.
       *
       * @param Object formValues
       *   Values returned by jquery.form-field-values plugin.
       *
       * @returns Object
       *   Section score key/value pairs
       */
      var calculateScores = function (formValues) {
        var generationScore = 0;
        var selectionScore = 0;
        var implementationScore = 0;
        var sustainingScore = 0;
        var diffusionScore = 0;
        var fieldGroups = {
          generation: [1, 2, 3, 4, 5],
          selection: [6, 7, 8, 9, 10],
          implementation: [11, 12, 13, 14, 15],
          sustaining: [16, 17, 18, 19, 20],
          diffusion: [21, 22, 23, 24, 25]
        };

        // Calculate generation score.
        $.each(fieldGroups, function (key, val) {
          var score = 0;
          for (var i = 0; i < 5; i++) {
            var fieldName = 'q' + val[i];
            score = score + Number(formValues[fieldName][0]);
          }

          switch (key) {

            case 'generation':
              generationScore = score;
              break;

            case 'selection':
              selectionScore = score;
              break;

            case 'implementation':
              implementationScore = score;
              break;

            case 'sustaining':
              sustainingScore = score;
              break;

            case 'diffusion':
              diffusionScore = score;
              break;
          }
        });

        return {
          generation: generationScore,
          selection: selectionScore,
          implementation: implementationScore,
          sustaining: sustainingScore,
          diffusion: diffusionScore
        };
      };

      /**
       * Determines rank based on score.
       *
       * @param Int score
       *   cummulative score for a section/phase (e.g. generation, selection,
       *   etc.).
       *
       * @returns String
       *   The ranking (either 'good', 'very_good', 'try_harder'.
       */
      var getScoreRank = function (score) {
        var rank = 'good';

        if (score < 8) {
          rank = 'try_harder';
        }
        else if (score > 12) {
          rank = 'very_good';
        }

        return rank;
      };

      /*
       * Display data on results page.
       */
      var showResults = function () {
        var formValues = $('#diagnostic', context).formFieldValues();

        // Calculate scores.
        var scores = calculateScores(formValues);

        // Set results chart.
        var chartUrl = 'https://chart.googleapis.com/chart?cht=r&chs=560x480&chd=t:' + [scores['generation'], scores['selection'], scores['implementation'], scores['sustaining'], scores['diffusion']].join(',') + '&chm=B,e7efbfDD,0,1.0,5.0&chds=0,15&chxl=0:|Generation|Selection|Implementation|Sustaining|Diffusion|1:||5|10|15&chxt=x,y&chxr=1,0,3|0,0,3,0&chxs=10,000000,9&chco=9228d6';
        document.getElementById('psit-results-chart').src = chartUrl;

        // Set submitted date.
        $('#psit-diagnostic-tool-results-submitted-date').html(formatDate(currentDate));

        // Set result summary blurbs.
        $.each(scores, function (section, score) {
          $('#psit-diagnostic-tool-results-' + section + '-summary', context).html(getResultsSummary(getScoreRank(score), section));
        });

        // Hide form page and show results page.
        $formPage.hide();
        $resultsPage.show();

        // Scroll to top of page.
        $('html, body').scrollTop($('.page-header').offset().top);
      };

      var initFormFieldInterations = function () {
        // Display other text field if 'other' option is selected.
        var $other_text_input = $('#idOther', context);
        var $radios = $('input[type="radio"][name="origin"]', context);

        $radios.change(function (event) {
          var value = $(this).val();

          if (value === '6') {
            // Show 'other' text input field.
            $other_text_input.show();
          }
          else {
            // Hide 'other' text input field.
            $other_text_input.hide();
            // Clear input field.
            $other_text_input.find('input').val('');
          }
        });
      };

      jQuery(document).ready(function () {

        // Add select behaviour to table elements.
        $('#diagnostic td').click(function () {
          $('input[type="radio"]', this).attr('checked', true);
          $(this).parent().find('th span.required').remove();
          $(this).parent().removeClass('required-row');
        });

        // Add form submit behaviour.
        $('form#diagnostic').submit(function (event) {
          event.preventDefault();
          var incomplete = false;
          var errorMsg = null;
          firstfail = null;

          // Remove required text/highlighting
          $('span.required').remove();
          $('tr.required-row').removeClass('required-row');
          $('p.required').removeClass('required');

          if (typeof($('input[name="origin"]:checked').val()) == 'undefined') {
            $('input[name="origin"]').parent().siblings('p').append('<span class="required"> This is required.</span>');
            $('input[name="origin"]').parent().siblings('p').addClass('required');
            incomplete = true;
            firstfail = 'input[name="origin"]';
          }
          if ($('input[name="origin"]:checked').val() == 6) {
            if (jQuery.trim($('#idOriginText').val()) === '') {
              errorMsg = 'Missing text for "Other"';
              incomplete = true;
              if (firstfail === null) {
                firstfail = '#idOriginText';
              }
            }
          }

          if (typeof($('input[name="position"]:checked').val()) == 'undefined') {
            $('input[name="position"]').parent().siblings('p').append('<span class="required"> This is required.</span>');
            $('input[name="position"]').parent().siblings('p').addClass('required');
            incomplete = true;
            if (firstfail === null) {
              firstfail = 'input[name="position"]';
            }
          }

          for (i = 1; i <= 25; i++) {
            if (typeof($('input[name="q' + i + '"]:checked').val()) == 'undefined') {
              $('input[name="q' + i + '"]').parent().siblings('th').append('<span class="required"> This is required.</span>');
              $('input[name="q' + i + '"]').parent().parent().addClass('required-row');
              incomplete = true;
              if (firstfail === null) {
                firstfail = 'input[name="q' + i + '"]';
              }
            }
          }

          if (incomplete) {
            if (errorMsg === null) {
              output = 'You have missed some questions.';
            }
            else {
              output = errorMsg;
            }

            // Scroll to first validation error.
            $.smoothScroll({
              scrollTarget: firstfail,
              offset: -100
            });
            if (firstfail == '#idOriginText') {
              $('#idOriginText').focus();
            }

            // Validation failed.
            return false;
          }
          else {
            showResults();
          }
        });

        /*
         * Script init method.
         */
        (function () {
          initFormFieldInterations();

          $formPage.show();
          $resultsPage.hide();
        })();
      });
    }
  };

})(jQuery);
