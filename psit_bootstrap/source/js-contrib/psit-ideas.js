/**
 * @file
 * Provides jQuery behaviors.
 */

(function ($) {

  Drupal.behaviors.psitIdeas = {
    attach: function (context, settings) {

      jQuery(document).ready(function () {

        /*
         * Multiform
         */
        var $assesmentResultsPage = $('.psit-assessment-results', context);
        var $stages = $('.form-stage', context);
        var $nextButton = $('.ideas-button.next', context);
        var $previousButton = $('.ideas-button.back', context);
        var $restartButton = $('.ideas-button.restart', context);
        var $resultsButton = $('.ideas-button.done', context);
        var $progressBarItems = $('#progress li', context);
        var numberStages = 7;
        var currentStage = 1;

        var displayStage = function () {
          $stages.each(function (index, ele) {
            var $ele = $(ele);
            // Display stage content.
            if (index === currentStage - 1) {
              $ele.show();
            }
            else {
              $ele.hide();
            }
          });
        };

        var nextStage = function () {
          currentStage = currentStage + 1;
          // Display Back button.
          $previousButton.show();

          if (currentStage >= numberStages) {
            // Is the results page.
            $nextButton.hide();
            $previousButton.show();
          }
          else if (currentStage === numberStages - 1) {
            // Is the stage prior to results page.
            $resultsButton.show();
            $nextButton.hide();
          }
          // Show next stage.
          displayStage(currentStage, $stages);
        };

        var previousStage = function () {
          currentStage = currentStage - 1;

          $nextButton.show();
          $resultsButton.hide();
          if (currentStage === 1) {
            $previousButton.hide();
          }
          else {
            $previousButton.show();
          }
          // Result button.
          if (currentStage === numberStages - 1) {
            $resultsButton.show();
            $nextButton.hide();
          }
          else {
            $resultsButton.hide();
          }

          // Show next stage.
          displayStage(currentStage, $stages);
        };

        var setProgress = function () {
          $progressBarItems.each(function (index, ele) {
            var $ele = $(ele);
            var currentIndex = currentStage - 1;
            // Remove any existing styling.
            $ele.removeClass('current done');
            // Add current or done styling.
            if (index === currentIndex) {
              $ele.addClass('current');
            }
            else if (index < currentIndex) {
              $ele.addClass('done');
            }
          });
        };

        var showResults = function () {
          // Generate google charts link.
          var formValues = $('#psit-assess-your-idea-form', context).formFieldValues();
          var results = [];
          var score = 0;
          var color = 'FF0000';
          var blurb = '';

          var numValues = formValues.length;
          var index = 0;
          $.each(formValues, function (key, value) {
            // Exclude first five form values as is not used for scoring.
            if (index > 4) {
              results.push(value[0]);
              score = score + Number(value[0]);
            }
            index++;
          });

          // Show results content.
          $stages.each(function (index, ele) {
            $(ele).hide();
          });
          $previousButton.hide();
          $resultsButton.hide();
          $assesmentResultsPage.show();

          // Process score.
          if (score > 79) {
            color = '3ED715';
            blurb = '<p>If your idea scored an innovation feasibility rating of 80 or more, then its potential for acceptance is good and further investment of time, energy and money in developing a business case is likely to be rewarded. An innovation feasibility rating in this range usually represents a balance of good ratings for shared perception, stakeholder support, manageable risks and resource requirements.</p><p>This does not mean that an idea with an innovation feasibility rating of 80 or more is automatically ready to go. On the contrary, every idea has some drawbacks and managing them is part of the key to long-term success. Ignoring even relatively minor drawbacks can be serious, so pay careful attention in your business case to any responses that you rated ‘d’ or ‘e’ even if the overall innovation feasibility rating is high.</p>';
          }
          else if (score > 60 && score < 80) {
            color = 'FF7E00';
            blurb = '<p>If your idea scored an innovation feasibility rating between 60 and 79, then its potential for acceptance in its current form is uncertain. It may nevertheless warrant some degree of cautious consideration. Innovation feasibility ratings in this range mean you should not invest heavily in a business case at this stage. Rather, development should be limited to those activities that are not costly and you should focus on resolving some of the concerns that brought the rating down.</p><p>An innovation feasibility rating in the upper half of this range (70-79) generally represents enough potential to warrant further limited and cautious development. An innovation feasibility rating in the lower half of this range (60-69) generally means it is unlikely that it will have enough potential to warrant further development.</p>';
          }
          else {
            color = 'FF0000';
            blurb = '<p>If your idea scored an innovation feasibility rating under 60, then its potential for acceptance in this form is not promising. A commercial feasibility rating below 60 generally represents poor ratings in at least two of the four themes. In this situation, abandonment may be the best course of action. Sometimes it is the idea itself that is flawed and sometimes the flaw is in the organisational or political environment. Either way, it is better to reach this conclusion now rather than after you have invested your time and effort for no result. You have also gained valuable experience in evaluating new ideas that will sharpen your judgement about the next one that crosses your path.</p>';
          }

          $('.psit-feasibility-rating-score', context)
            .html(score)
            .css('color', '#' + color);

          // Process chart.
          var chartUrl = 'https://chart.googleapis.com/chart?cht=r&chs=560x480&chd=t:' + results.join(',') + '&chm=B,' + color + 'DD,0,1.0,5.0&chds=0,5&chxl=0:|Problem|Importance|Recognition|Compatibility|Value|End-user support|Staff support|Management support|Political support|External support|Regulatory risk|Implementation risk|Dependence risk|Timing risk|Reputational risk|Technical resources|Administrative resources|Operational resources|Human resources|Financial resources|1:||e|d|c|b|a&chxt=x,y&chxr=0,0,5|1,0,5,1&chxs=0,666666,9&chco=' + color;
          document.getElementById('psit-results-chart').src = chartUrl;

          // Process result summary blurb.
          $('.psit-assessment-result-blurb').html(blurb);
        };

        // Add next button behaviour.
        $nextButton.click(function (event) {
          event.preventDefault();
          // Confirm fields in current stage are not empty.
          if (validate(currentStage) === true) {
            nextStage();
            // Set progress bar.
            setProgress();
          }
        });

        // Add previous button behaviour.
        $previousButton.click(function (event) {
          event.preventDefault();
          previousStage();
          // Set progress bar.
          setProgress();
        });

        // Add results button behaviour.
        $resultsButton.click(function (event) {
          event.preventDefault();
          // Confirm fields in current stage are not empty.
          if (validate(currentStage) === true) {
            currentStage++;
            showResults();
            // Set progress bar.
            setProgress();
          }
        });

        // Add restart button behaviour.
        $restartButton.click(function (event) {
          event.preventDefault();
          location.reload();
        });

        /**
         * Validation function.
         *
         * @param int stage
         *   Current stage in multistage form.
         *
         * @returns object
         *   Contains pass and message key/pair values.
         */
        var validate = function (stage) {
          var pass = true;
          var message = 'You must answer all questions on this page.';
          var $errorMessageWrapper = $('#psit-assess-your-idea-error-messages');

          switch (stage) {

            case 1:
              // No validation required.
              break;

            case 2:
              $('.stage-2 textarea', context).each(function (index, ele) {
                var $ele = $(ele);
                if (!$ele.val()) {
                  $ele.css('background-color', '#f2dede');
                  pass = false;
                }
                else {
                  $ele.css('background-color', 'transparent');
                }
              });
              break;

            case 3:
            case 4:
            case 5:
            case 6:
              // Confirm that each of five radio button groups have checked
              // radio button.
              var radioButtonGroups = [];
              for (var i = 0; i < 5; i++) {
                var $radioButtonGroup = $('input[name="stages[' + (stage - 1) + '][' + i + ']"]', context);
                var checked = false;

                if ($radioButtonGroup.filter(':checked').length === 0) {
                  pass = false;
                  $radioButtonGroup.first().parents('.survey-section').first().addClass('validation-failed').css('border', '3px solid red');
                }
                else {
                  $radioButtonGroup.first().parents('.survey-section').first().removeClass('validation-failed').css('border-style', 'none');
                }
              }
              break;
          }

          if (pass === false) {
            // Show error message.
            $errorMessageWrapper
              .html(message)
              .show();
            // Scroll to error message.
            $('html, body').scrollTop($('#psit-assess-your-idea-error-messages').offset().top);
          }
          else {
            $errorMessageWrapper.hide();
          }

          return pass;
        };

        // Initialize form.
        (function () {
          // Display first stage.
          setProgress();
          displayStage(1, $stages);
          $resultsButton.hide();
          $previousButton.hide();
          $assesmentResultsPage.hide();
        })();

        /*
         * Multichoice selection.
         */
        jQuery('.multichoice li').each(function () {
          var el = jQuery(this);
          if (el.find('input').attr('checked') === true) {
            el.addClass('selected');
          }
          el.find('input').hide();
        }).click(function () {
          jQuery(this).siblings().removeClass('selected');
          jQuery(this).addClass('selected').find('input').attr('checked', true);
        });

//        jQuery(".section-content textarea").elastic().css('overflow','hidden');
      });
    }
  };

})(jQuery);
