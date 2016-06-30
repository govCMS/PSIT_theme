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
    <div class="entry-content">
      <ul id="progress">
        <li title="Welcome" style="z-index: 7">Intro</li>
        <li title="Open questions" style="z-index: 6">Questions</li>
        <li title="How the problem is understood, the embedded culture of the organisation and the reaction your idea is likely to provoke when it is first proposed" style="z-index: 5">Perceptions</li>
        <li title="Identifying the individuals and groups that have a stake in your idea and where each stands in relation to it" style="z-index: 4">Stakeholders</li>
        <li title="Anticipating the risks that are relevant to your idea and the consequences if they occur" style="z-index: 3">Risks</li>
        <li title="The demands your idea will make on the resources of the organisation" style="z-index: 2">Resources</li>
        <li title="Recommendation based on your responses" style="z-index: 1" class="last">Results</li>
      </ul>
      <hr>
      <form id="psit-assess-your-idea-form" method="post" action="?stage=0">
        <div id="psit-assess-your-idea-error-messages" class="alert alert-danger" role="alert"></div>
        <!-- Stage 1 START -->
        <div class="form-stage stage-1">
          <h2>Intro</h2>
          <p>The purpose of the IDEAS framework is to help you identify, evaluate and promote innovative ideas in the public sector.</p>
          <p>Everything, from the smallest incremental improvement to the most transformational innovation, starts with an idea. Many public servants know of many opportunities to apply innovative solutions in their workplace. However the process of getting an idea, to implementing it, keeping it going and diffusing it throughout an agency and to other agencies can be complex, costly and time consuming.</p>
          <p>Being able to evaluate the merit of new ideas very early in the innovation process is very important as it is the least costly stage in which to identify and eliminate likely failures, and focus attention on the more promising ideas. Innovation is not a democracy in which all ideas are created equal – it is a meritocracy where those ideas with demonstrated merit should be the ones to receive encouragement.</p>
          <p>An IDEAS assessment is used to make an early assessment of a new idea. It should take place long before there is enough information to do a business case, and its purpose is to decide if further work on the idea is warranted.</p>
          <p>IDEAS consists of a standardised analysis drawn from innovation research on the public sector. It provides a uniform, easily communicated and easily understood basis for assessment coupled with comprehensive feedback.</p>
          <hr>
          <p><em><strong>Instructions: </strong> To use the IDEAS framework, first click on <strong>Get Started!</strong> below. Fill out each page of the questionnaire according to the instructions at the top of the page, then click <strong>Next</strong>. Once you've completed the final page, click <strong>Get Results</strong>.</em></p>
          <hr>
        </div>
        <!-- Stage 1 END -->
        <!-- Stage 2 START -->
        <div class="form-stage stage-2">
          <h2>Questions</h2>
          <hr><p><em><strong>Instructions:</strong> Please fill out your responses to the following questions:</em></p>
          <div class="survey-section">
            <div class="section-content">
              <span class="q">What will you call your idea?</span>
              <textarea name="stages[1][0]" style="overflow: hidden;"></textarea>
              <div style="position: absolute; display: none; word-wrap: break-word; white-space: pre-wrap; border: 1px solid rgb(238, 238, 238); font-weight: 400; width: 560px; font-family: helvetica, arial, sans-serif; line-height: 14.4px; font-size: 12px; padding: 5px;">&nbsp;</div></div>
          </div>
          <div class="survey-section">
            <div class="section-content">
              <span class="q">What is the problem your idea will solve?</span>
              <textarea name="stages[1][1]" style="overflow: hidden;"></textarea>
              <div style="position: absolute; display: none; word-wrap: break-word; white-space: pre-wrap; border: 1px solid rgb(238, 238, 238); font-weight: 400; width: 560px; font-family: helvetica, arial, sans-serif; line-height: 14.4px; font-size: 12px; padding: 5px;">&nbsp;</div></div>
          </div>
          <div class="survey-section">
            <div class="section-content">
              <span class="q">Why is the problem important?</span>
              <textarea name="stages[1][2]" style="overflow: hidden;"></textarea>
              <div style="position: absolute; display: none; word-wrap: break-word; white-space: pre-wrap; border: 1px solid rgb(238, 238, 238); font-weight: 400; width: 560px; font-family: helvetica, arial, sans-serif; line-height: 14.4px; font-size: 12px; padding: 5px;">&nbsp;</div></div>
          </div>
          <div class="survey-section">
            <div class="section-content">
              <span class="q">How does your idea manifest itself in terms of something tangible - such as a new service, new process or new policy?</span>
              <textarea name="stages[1][3]" style="overflow: hidden;"></textarea>
              <div style="position: absolute; display: none; word-wrap: break-word; white-space: pre-wrap; border: 1px solid rgb(238, 238, 238); font-weight: 400; width: 560px; font-family: helvetica, arial, sans-serif; line-height: 14.4px; font-size: 12px; padding: 5px;">&nbsp;</div></div>
          </div>
          <div class="survey-section">
            <div class="section-content">
              <span class="q">Who are the intended end-users or beneficiaries of your idea?</span>
              <textarea name="stages[1][4]" style="overflow: hidden;"></textarea>
              <div style="position: absolute; display: none; word-wrap: break-word; white-space: pre-wrap; border: 1px solid rgb(238, 238, 238); font-weight: 400; width: 560px; font-family: helvetica, arial, sans-serif; line-height: 14.4px; font-size: 12px; padding: 5px;">&nbsp;</div>
            </div>
          </div>
        </div>
        <!-- Stage 2 END -->
        <!-- Stage 3 START -->
        <div class="form-stage stage-3">
          <h2>Perceptions</h2>
          <p>Public sector organisations face a more difficult context in which to innovate than most organisations in the private sector. They have multiple objectives, some of which are ambiguous and may even at times be conflicting. Public sector organisations are often part of multifaceted organisational arrangements that involve wide-ranging consultation and coordination. Most public sector organisations are also large and responsible for a diverse range of activities. Within such a complex environment, we want to anticipate how the problem is perceived by the organisation and how your idea might be viewed as a solution.</p>
          <p>This first theme is focused on the knowledge base, the entrenched culture of the organisation and the reaction your idea is likely to provoke when it is proposed. In a sense, we are ‘taking the temperature’ of the organisation to see what sort of predisposition it may have to embrace your idea. In order to reach a judgement about how your idea will be perceived, let’s consider the following questions.</p>
          <ul>
            <li><strong>Problem:</strong> is there consensus within your organisation about how the problem is characterised and understood?</li>
            <li><strong>Importance: </strong>is it important to solve the problem and will finding a solution be a priority in your organisation?</li>
            <li><strong>Recognition:</strong> will the advantages, features and benefits of your idea be recognised within your organisation?</li>
            <li><strong>Compatibility:</strong> is your idea consistent with the attitudes, beliefs and habits within your organisation?</li>
            <li><strong>Value: </strong>will your idea be perceived as representing genuine value within your organisation?</li>
          </ul>
          <p>This theme is also an introduction to the concept of ‘internal strategic alignment’. The goal is to decide if there is going to be enough support from among key internal stakeholders to galvanise your organisation around a shared vision, goal and actions.</p><hr><p><em><strong>Instructions:</strong> Please click on the appropriate response for each of the multiple-choice questions below:</em></p>
          <div class="survey-section">
            <span class="section-number">1:</span>
            <div class="section-content">
              <h5>Problem</h5>
              <p>Public sector organisations face a more difficult context in which to innovate than most organisations in the private sector. They have multiple objectives, some of which are ambiguous and may even at times be conflicting. Public sector organisations are often part of multifaceted organisational arrangements that involve wide-ranging consultation and coordination. Most public sector organisations are also large and responsible for a diverse range of activities. Within such a complex environment, we want to anticipate how the problem is perceived by the organisation and how your idea might be viewed as a solution.</p>
              <p>This firs t theme is focused on the knowledge base, the entrenched culture of the organisation and the reaction your idea is likely to provoke when it is proposed. In a sense, we are ‘taking the temperature’ of the organisation to see what sort of predisposition it may have to embrace your idea. In order to reach a judgement about how your idea will be perceived, let’s consider the following questions.</p>
              <span class="q">The nature of the need, problem or opportunity addressed by my idea is:</span>
              <ol class="multichoice">
                <li class=""><label><input name="stages[2][0]" value="5" type="radio" style="display: none;"> completely clear to me and those in my organisation</label></li>
                <li class=""><label><input name="stages[2][0]" value="4" type="radio" style="display: none;"> moderately clear to me and those in my organisation</label></li>
                <li class=""><label><input name="stages[2][0]" value="3" type="radio" style="display: none;"> not yet clear – but will be with a little more explanation</label></li>
                <li class=""><label><input name="stages[2][0]" value="2" type="radio" style="display: none;"> moderately misunderstood – needs research and explanation</label></li>
                <li class=""><label><input name="stages[2][0]" value="1" type="radio" style="display: none;"> completely misunderstood – needs substantial research and explanation</label></li>
              </ol>
            </div>
          </div>
          <div class="survey-section">
            <span class="section-number">2:</span>
            <div class="section-content">
              <h5>Importance</h5>
              <p>How important do you think your idea will be regarded in your organisation? Is there a sense of urgency about solving a particular problem? Does it address some essential legal or moral obligation? Is there a political imperative? Does it align with the objectives in your organisation? Priority also depends on the extent to which your idea offers features, benefits or performance that satisfies a need or solves a problem better than the status quo, such as:</p>
              <ul>
                <li>Will your idea deliver a better outcome?</li>
                <li>Is your idea easier and quicker to implement than the alternatives?</li>
                <li>Will your idea deliver immediate benefits without having to wait?</li>
                <li>Will your idea promote prestige or professional standing for your organisation?</li>
              </ul>
              <p>The significance and urgency of an issue will drive the timing of the response. For example, the urgency around an immediate, localised natural disaster will be quite different from developing a policy for a medium term issue such as improving child care facilities, or a long term issue such as planning for an ageing population. Nevertheless, there needs to be something about your idea that makes it distinctive, different and superior to the status quo. Focus on features and benefits that are closest to the adoption decision. Base your response on issues you know are important in your organisation including alignment with its core competencies, contribution to its strategic goals and improvement in its performance.</p>
              <span class="q">This idea addresses a problem in my organisation that is:</span>
              <ol class="multichoice">
                <li><label><input name="stages[2][1]" value="5" type="radio" style="display: none;"> very high priority – a core need that is critically important</label></li>
                <li><label><input name="stages[2][1]" value="4" type="radio" style="display: none;"> high priority – an essential need that is very important</label></li>
                <li><label><input name="stages[2][1]" value="3" type="radio" style="display: none;"> moderate priority – an accepted need that is relatively important</label></li>
                <li><label><input name="stages[2][1]" value="2" type="radio" style="display: none;"> low priority – a possible need of unspecified importance</label></li>
                <li><label><input name="stages[2][1]" value="1" type="radio" style="display: none;"> very low priority – a superficial need of doubtful importance</label></li>
              </ol>
            </div>
          </div>
          <div class="survey-section">
            <span class="section-number">3:</span>
            <div class="section-content">
              <h5>Recognition</h5>
              <p>The advantages, features and benefits of a new idea need to be recognised and understood in order to get a fair hearing.</p>
              <ul>
                <li>Will people in your organisation find your idea easy to understand?</li>
                <li>Can they observe its performance before they adopt it?</li>
                <li>Can it be compared with something similar in which they may have previously had a good or bad experience?</li>
                <li>Has it has been successfully adopted elsewhere?</li>
              </ul>
              <p>Are the advantages, features, and benefits of your idea obvious and easily recognised? The implications are fairly clear. Ideas that consist of vague or ambiguous features and benefits have difficulty gaining recognition. This becomes a greater barrier to innovation if the process of making the adoption decision is also complicated. When the adoption decision is important and people in the organisation have little or no experience in making this decision, they are likely to engage in prolonged information gathering with numerous opportunities to defer or abandon a decision because it is too difficult.</p>
              <p>Recognition is also affected by how you position an idea in the minds of those in your organisation. They are bombarded with information about all sorts of things and they cope with this by shutting out the things that are inconsistent with their prior knowledge or experience. That is why recognition also depends on how well your idea aligns with their existing attitudes and beliefs.</p>
              <span class="q">The features and benefits of my idea will be:</span>
              <ol class="multichoice">
                <li><label><input name="stages[2][2]" value="5" type="radio" style="display: none;"> very obvious – completely self-evident</label></li>
                <li><label><input name="stages[2][2]" value="4" type="radio" style="display: none;"> obvious – easy to understand</label></li>
                <li><label><input name="stages[2][2]" value="3" type="radio" style="display: none;"> evident – with a little explanation</label></li>
                <li><label><input name="stages[2][2]" value="2" type="radio" style="display: none;"> obscure – needing moderate explanation and persuasion</label></li>
                <li><label><input name="stages[2][2]" value="1" type="radio" style="display: none;"> very obscure – needing substantial explanation and persuasion</label></li>
              </ol>
            </div>
          </div>
          <div class="survey-section">
            <span class="section-number">4:</span>
            <div class="section-content">
              <h5>Compatibility</h5>
              <p>A dangerous assumption about any new idea is that it is so compelling that it will sell itself. Compatibility is about the ease with which you can sell your idea. While creative thinking often means that we escape the organisation’s culture, getting support for an idea usually means that at some point we must engage with it. Some people may reject your idea for any number of irrational reasons such as ‘I can’t be bothered’ or ‘I’m fine the way I am.’ Maybe the idea is simply different from their existing attitudes, perceptions, beliefs or habits and they do not want to change. Try these questions to test your idea for its compatibility with the existing culture.</p>
              <ul>
                <li>What is the old way of doing things?</li>
                <li>What will they think is the relative advantage of the idea?</li>
                <li>Is it consistent with their values and experiences?</li>
                <li>Are they locked into existing ways of doing things procedurally, financially, contractually or by their training?</li>
                <li>Does the idea require a change in their behaviour?</li>
                <li>Does the idea go against their social or cultural norms or practices?</li>
              </ul>
              <p>Every new idea is a substitute for an older one. Many individuals are comfortable with the status quo because it is part of what they already know and understand. Once formed, these attitudes and beliefs are difficult to change. In other words, people’s perception of new ideas is usually based on their understanding of the familiar.</p>
              <span class="q">Compatibility of this idea with existing attitudes, beliefs or methods of use in my organisation will be:</span>
              <ol class="multichoice">
                <li><label><input name="stages[2][3]" value="5" type="radio" style="display: none;"> very high – completely consistent with established behaviour</label></li>
                <li><label><input name="stages[2][3]" value="4" type="radio" style="display: none;"> high – reasonably consistent with established behaviour</label></li>
                <li><label><input name="stages[2][3]" value="3" type="radio" style="display: none;"> moderate – might be a slight conflict with established behaviour</label></li>
                <li><label><input name="stages[2][3]" value="2" type="radio" style="display: none;"> low – considerable conflict with established behaviour</label></li>
                <li><label><input name="stages[2][3]" value="1" type="radio" style="display: none;"> very low – extreme conflict with established behaviour</label></li>
              </ol>
            </div>
          </div>
          <div class="survey-section">
            <span class="section-number">5:</span>
            <div class="section-content">
              <h5>Value</h5>
              <p>At this stage in an <em>IDEAS</em> evaluation, it is too early to expect a detailed cost/benefit analysis of your idea. The purpose of this question is to anticipate how the value of your idea will be initially perceived within your organisation.</p>
              <p>In the private sector the ultimate driver of innovation is shareholder value. That is an easy objective to measure compared with the ultimate driver of public sector innovation which is to satisfy the public interest. Whereas private sector innovation is measurable in dollars, value in the public sector is often intangible and measurement becomes a matter of judgement. How do you think your idea will be valued in your organisation?</p>
              <ul>
                <li>In very simple terms, good value means the same benefits at a lower cost, or greater benefits at the same cost</li>
                <li>Benefits are solutions to problems such as saving money, ease of access or improved performance</li>
                <li>Cost is not just the financial cost but also non-financial costs such as wasted time, confusion, inconvenience or the uncertainty of making a mistake.</li>
              </ul>
              <p>At this early stage you probably do not have a handle on the costs and benefits that would otherwise be expected in a business case, so don’t get hung up trying to come up with an exact answer.  Typically, you won’t find the perfect answer anyway, especially if you are breaking new ground.  Simply use the information that you do know at this stage to anticipate how your organisation is likely to perceive the value of your idea.</p>
              <span class="q">In my organisation, the intrinsic value of this idea is likely to be looked upon as:</span>
              <ol class="multichoice">
                <li><label><input name="stages[2][4]" value="5" type="radio" style="display: none;"> very high – benefits will massively exceed costs</label></li>
                <li><label><input name="stages[2][4]" value="4" type="radio" style="display: none;"> high – benefits will definitely exceed costs</label></li>
                <li><label><input name="stages[2][4]" value="3" type="radio" style="display: none;"> moderate – benefits will probably exceed costs</label></li>
                <li><label><input name="stages[2][4]" value="2" type="radio" style="display: none;"> low – benefits may not exceed costs</label></li>
                <li><label><input name="stages[2][4]" value="1" type="radio" style="display: none;"> very low – benefits will not exceed costs</label></li>
              </ol>
            </div>
          </div>
        </div>
        <!-- stage 3 END -->
        <!-- Stage 4 START -->
        <div class="form-stage stage-4">
          <h2>Stakeholders</h2>
          <p>Public sector innovators need a coalition of supporters who are powerful enough to ask for constructive participation by others and to allocate the necessary resources. Stakeholders are interested in, concerned about, affected by, have a vested interest in, or are involved in some way with your idea. You need to identify the ‘key players’ and find out where each one stands in relation to your idea. You can also make stakeholders into supporters by entering into partnership with them or at least setting up a process that will ensure they are informed and given the opportunity to express their views.</p>
          <p>Stakeholders include end-users or beneficiaries of an idea, staff that may be affected by an idea, senior and middle managers in your organisation, and politicians and their advisers. There are also external stakeholder interests such as community groups, industry or business associations, environmental groups, local councils, other government departments, citizens’ groups and local residents. Your task is to anticipate stakeholder support by asking:</p>
          <ul>
            <li>Who has a stake (positive or negative) in the problem or idea?</li>
            <li>Who is most affected by the problem or idea?</li>
            <li>Who are the key supporters for the idea?</li>
            <li>Who may have different views or object to the idea?</li>
            <li>What do stakeholders know, feel, want, believe and value in relation to the problem or idea?</li>
          </ul>
          <p>Stakeholder groups might be looking for different outcomes, so be sensitive to the diversity of stakeholder views and try to understand the limitations some stakeholders may have in terms of their role or expertise. Look for mutual advantages that you can use to create stakeholder interest. The key to gaining stakeholder support is to manage their expectations and help them make the transition from awareness to appreciation, from appreciation to acceptance and from acceptance to adoption.</p><hr><p><em><strong>Instructions:</strong> Please click on the appropriate response for each of the multiple-choice questions below:</em></p>
          <div class="survey-section">
            <span class="section-number">6:</span>
            <div class="section-content">
              <h5>End-user support</h5>
              <p>The views of the end-users or beneficiaries of your idea are critically important if you want their support. End-user involvement in design, development and validation generates enthusiasm, acceptance and adoption. Find out about your end-users and where they stand in relation to your idea.</p>
              <ul>
                <li>Who are you trying to reach and influence through your idea?</li>
                <li>Is there more than one end-user group?</li>
                <li>What incentives are there for the end-users to embrace your idea?</li>
                <li>What do they know, feel, want, believe and value about your idea?</li>
                <li>What are the threats, risks, costs and benefits for the end-users?</li>
                <li>What is the best way of reaching end-users?</li>
                <li>If they are not already involved with your idea, what will motivate them to become involved?</li>
                <li>If they do not already support your idea, what will encourage them to support it?</li>
              </ul>
              <p>If you proceed to develop a business case, researching end-user groups may involve setting up focus groups or discussions with people who are representative of end-users. As well as providing important information about your idea, they may also open up new channels of communication and access points for approaching other end-users. End-user support is a powerful tool in gaining the support of other stakeholders.</p>
              <span class="q">Support from the end-users of my idea is likely to be:</span>
              <ol class="multichoice">
                <li><label><input name="stages[3][0]" value="5" type="radio" style="display: none;"> very positive</label></li>
                <li><label><input name="stages[3][0]" value="4" type="radio" style="display: none;"> reasonably positive</label></li>
                <li><label><input name="stages[3][0]" value="3" type="radio" style="display: none;"> mixed</label></li>
                <li><label><input name="stages[3][0]" value="2" type="radio" style="display: none;"> somewhat negative</label></li>
                <li><label><input name="stages[3][0]" value="1" type="radio" style="display: none;"> very negative</label></li>
              </ol>
            </div>
          </div>
          <div class="survey-section">
            <span class="section-number">7:</span>
            <div class="section-content">
              <h5>Staff support</h5>
              <p>Will the staff in your organisation see the idea as a welcome change to their jobs and their work? There are good reasons why some staff may want to support your idea.</p>
              <ul>
                <li>It may represent a way to make their job easier or more enjoyable</li>
                <li>They may be ideologically disposed to innovate and believe that a change is necessary</li>
                <li>They may be idealists who have pursued a career in the public sector because they ‘want to make a difference’</li>
                <li>It may enhance their career prospects to ‘get on board’ with an idea that will get their organisation out of a crisis</li>
                <li>They may be intellectually curious or they may find the need for a change to be an interesting challenge.</li>
              </ul>
              <p>Alternatively, will the staff in your organisation see the idea as threatening because it might lead to unwelcome changes? The tendency for new ideas to change existing procedures, power structures or work patterns highlights the sensitive nature of innovations that alter existing working practices. Staff concerns about accountability, standards and continuity can also result in resistance to new ideas. Negative reactions might emerge as hostile or sceptical attitudes, turf fights, lack of enthusiasm, slow uptake or union opposition.</p>
              <span class="q">Support from staff affected by my idea is likely to be</span>
              <ol class="multichoice">
                <li><label><input name="stages[3][1]" value="5" type="radio" style="display: none;"> very positive</label></li>
                <li><label><input name="stages[3][1]" value="4" type="radio" style="display: none;"> reasonably positive</label></li>
                <li><label><input name="stages[3][1]" value="3" type="radio" style="display: none;"> mixed</label></li>
                <li><label><input name="stages[3][1]" value="2" type="radio" style="display: none;"> somewhat negative</label></li>
                <li><label><input name="stages[3][1]" value="1" type="radio" style="display: none;"> very negative</label></li>
              </ol>
            </div>
          </div>
          <div class="survey-section">
            <span class="section-number">8:</span>
            <div class="section-content">
              <h5>Management support</h5>
              <p>Senior management has traditionally determined which ideas get adopted in the public sector. Unfortunately, new ideas typically face multiple hurdles because they must go through layers of middle management sign-off before senior management ever sees them. Public sector organisations also tend to be divided between policy development and program delivery. This further impedes the innovation process by removing people who develop policy from the first-hand experience of actually delivering a program.</p>
              <p>A big challenge is winning senior management support for your idea. Many people in the public sector feel that their ideas are often ignored because the boss simply does not understand or is not interested. Too many good ideas are lost because individuals are trying to anticipate what the boss might reject rather than what is good for stakeholders. One approach is to get management on board long before a decision is required. Let your idea grow out of the problem, give it time to incubate, and try to avoid situations in which you have to ‘sell’ your idea to senior management.</p>
              <p>Do you think senior and middle management in your organisation will support your idea? Management have always had a big influence on the culture and attitudes within public sector organisations. Through their words and actions, you should be able to judge what degree of support your idea is likely to have from management. Tangible examples of support include acknowledging that an idea is consistent with the organisation’s priorities, personal recognition for putting the idea forward, encouragement to develop the idea further, or a request to research and present a business case.</p>
              <span class="q">Support for my idea from senior and middle management is likely to be</span>
              <ol class="multichoice">
                <li><label><input name="stages[3][2]" value="5" type="radio" style="display: none;"> very positive</label></li>
                <li><label><input name="stages[3][2]" value="4" type="radio" style="display: none;"> reasonably positive</label></li>
                <li><label><input name="stages[3][2]" value="3" type="radio" style="display: none;"> mixed</label></li>
                <li><label><input name="stages[3][2]" value="2" type="radio" style="display: none;"> somewhat negative</label></li>
                <li><label><input name="stages[3][2]" value="1" type="radio" style="display: none;"> very negative</label></li>
              </ol>
            </div>
          </div>
          <div class="survey-section">
            <span class="section-number">9:</span>
            <div class="section-content">
              <h5>Political support</h5>
              <p>The public sector’s job is to support the government of the day by implementing its policies. While this does not prevent public sector organisations from putting forward ideas that move away from existing government policy, it will be more difficult to sell the merits of those ideas. Even when politicians recognise the value of an idea, if it is inconsistent with an established government policy position it is unlikely to get support.</p>
              <p>Most of the big transformational public sector innovations are politically driven, with election promises and new policies providing a broad framework that encourages the flow of ideas. They may be ideologically based or in response to critical events and pressures. They may need strong, top-down, political determination coupled with the allocation of resources. Public sector organisations that propose transformational ideas generally require political support and in many cases formal authorisation.</p>
              <p>A change of government or a minister can herald new ideas or approaches that are very different from existing policies involving quite radical innovations. Ideas that are consistent with government priorities, particularly those that address current problems facing the government, will have a good prospect of gaining political support. Good ideas sometimes occur at the wrong time in the political cycle and get caught up in a change of priorities. These ideas may need to wait for the right time and climate to attract the support they deserve.</p>
              <span class="q">Political support for my idea is likely to be:</span>
              <ol class="multichoice">
                <li><label><input name="stages[3][3]" value="5" type="radio" style="display: none;"> very positive</label></li>
                <li><label><input name="stages[3][3]" value="4" type="radio" style="display: none;"> reasonably positive</label></li>
                <li><label><input name="stages[3][3]" value="3" type="radio" style="display: none;"> mixed</label></li>
                <li><label><input name="stages[3][3]" value="2" type="radio" style="display: none;"> somewhat negative</label></li>
                <li><label><input name="stages[3][3]" value="1" type="radio" style="display: none;"> very negative</label></li>
              </ol>
            </div>
          </div>
          <div class="survey-section">
            <span class="section-number">10:</span>
            <div class="section-content">
              <h5>External support</h5>
              <p>Strong support from external stakeholders is a powerful motivator for introducing new ideas in the public sector. Ideas that are endorsed by influential community or industry leaders provide a persuasive incentive for public sector managers and politicians to get on board. Who are the external stakeholders for your idea?</p>
              <ul>
                <li>Community groups</li>
                <li>Industry or business associations</li>
                <li>Environmental groups</li>
                <li>Local councils</li>
                <li>Other government departments</li>
                <li>Citizens’ groups</li>
                <li>Local residents and individuals</li>
                <li>Opinion leaders</li>
                <li>Others</li>
              </ul>
              <p>Outside service providers such as voluntary organisations or businesses can also be important external stakeholders. They sometimes use innovative techniques to deliver services on behalf of the public sector and they have a unique perspective on working with the public sector and acting as an intermediary between the public sector and other stakeholders. They are an important source of ideas, suggestions and support for new ways in which the public sector can fulfil its role.</p>
              <p>Just as external stakeholders can be a source and driver of innovation, they can also constitute a barrier. An idea may face opposition from external interests who feel committed to the current system and resist change despite its inherent benefits. Look for ways to foster external stakeholder participation in planning and decision-making. Encouraging them to play a role in the development of your idea is one way to minimise conflict and gain support because it enables contrasting views to be heard and reconciled.</p>
              <span class="q">Support from external stakeholders for my idea is likely to be:</span>
              <ol class="multichoice">
                <li><label><input name="stages[3][4]" value="5" type="radio" style="display: none;"> very positive</label></li>
                <li><label><input name="stages[3][4]" value="4" type="radio" style="display: none;"> reasonably positive</label></li>
                <li><label><input name="stages[3][4]" value="3" type="radio" style="display: none;"> not relevant or important</label></li>
                <li><label><input name="stages[3][4]" value="2" type="radio" style="display: none;"> somewhat negative</label></li>
                <li><label><input name="stages[3][4]" value="1" type="radio" style="display: none;"> very negative</label></li>
              </ol>
            </div>
          </div>
        </div>
        <!-- Stage 4 END -->
        <!-- Stage 5 START -->
        <div class="form-stage stage-5">
          <h2>Risks</h2>
          <p>The public sector is traditionally risk averse in keeping with its role as the custodian of public funds. However, innovation is not risk-free. Consequently, the emphasis in this third theme is to anticipate which risks are relevant to your idea, consider the possible consequences if they occur and decide how important each risk is to the feasibility of your idea. In this section, we shall focus on five common risks.</p>
          <ul>
            <li><strong>Regulatory risk:</strong> includes legislation from all levels of government and regulation imposed by government agencies and non-government agencies</li>
            <li><strong>Implementation risk: </strong>the possibility that you may not be able to bring together the right people, equipment, processes and controls to deliver the goods</li>
            <li><strong>Dependence risk: </strong>when an idea must rely upon some other public sector organisation, business, process, service, system, person or organisation for implementation</li>
            <li><strong>Timing risk: </strong>when an idea does not fit within an organisation’s planning timeframe or the political/budgetary cycles</li>
            <li><strong>Reputational risk: </strong>the potential for unintentional consequences that may damage political, organisational or personal reputations.</li>
          </ul>
          <p>These are not the only possible risks and you need to think carefully about what other risks might apply to your idea. What about the risk of doing nothing, the possibility that your idea will make staff redundant, the chance your idea will not achieve enough take-up to be financially viable or what if your organisation will not be able to cope with an increased level of activity? If risk exposure is high, then you may want to consider your options. You can accept the risk and work to mitigate it. Serious risks in which countermeasures are unreliable or unavailable may be a reason to consider abandoning an idea.</p><hr><p><em><strong>Instructions:</strong> Please click on the appropriate response for each of the multiple-choice questions below:</em></p>
          <div class="survey-section">
            <span class="section-number">11:</span>
            <div class="section-content">
              <h5>Regulatory risk</h5>
              <p>Whereas private enterprise has an obligation to operate in accordance with the law, the legal constraints on public sector organisations, such as freedom of information and natural justice, impose greater limits on the ways in which they can innovate. Regulatory risk covers nearly every aspect of the public sector. Broadly defined, it not only includes legislation from every level of government, but also regulations and standards imposed by government agencies and non-government agencies.</p>
              <p>Regulation risk is the danger that laws and other regulatory requirements will have a material impact on your idea. These risks are increasing, particularly with the trend towards a more complex, more comprehensive and sometimes more prescriptive approach by legislators and regulators. Can you comply with the laws, standards, and other regulations that apply to your idea? If your idea does not meet these requirements, then how can this be resolved?</p>
              <p>Anticipating legislative and regulatory conditions, how they are interpreted and how they are implemented is a challenge. They are difficult to monitor because the number and variety of laws and regulations can be overwhelming and the complexity inherent in understanding these laws and regulations often makes it impossible to interpret them without costly advice. Also, legislation is written in the context of the present day and the knowable future, so it is not possible for laws to be drafted in a way that effectively accounts for every possible future circumstance. Thus, legislation may unintentionally become a barrier to innovation by preventing an approach or policy that was never contemplated when it was drafted. One mitigating advantage, however, is the role of the public sector in recommending changes to laws and regulations.</p>
              <span class="q">In terms of the relevant laws, regulations and standards, my idea will:</span>
              <ol class="multichoice">
                <li><label><input name="stages[4][0]" value="5" type="radio" style="display: none;"> meet them without any changes</label></li>
                <li><label><input name="stages[4][0]" value="4" type="radio" style="display: none;"> require only minor changes</label></li>
                <li><label><input name="stages[4][0]" value="3" type="radio" style="display: none;"> require moderate changes</label></li>
                <li><label><input name="stages[4][0]" value="2" type="radio" style="display: none;"> require substantial changes</label></li>
                <li><label><input name="stages[4][0]" value="1" type="radio" style="display: none;"> probably not meet them at all</label></li>
              </ol>
            </div>
          </div>
          <div class="survey-section">
            <span class="section-number">12:</span>
            <div class="section-content">
              <h5>Implementation risk</h5>
              <p>This question relates to whether your idea will be fit for the purpose you intend. Can you organise the skilled people, the right equipment, the right processes and the right controls to deliver a consistent level of performance?</p>
              <ul>
                <li>What are the key tasks?</li>
                <li>What is the timeframe for delivery?</li>
                <li>What are the milestones along the way?</li>
                <li>Would a phased implementation be a good option?</li>
                <li>Would it be better to implement quickly to avoid losing focus and momentum?</li>
                <li>Are the practical aspects of the roll-out fully understood?</li>
                <li>Will there be a loss of service continuity during the transition?</li>
                <li>Can you learn from mistakes and correct unforeseen problems promptly?</li>
              </ul>
              <p>If the expertise and resources are available and reliable, then implementation risk is probably low. If it looks like the expertise and resources will be difficult to develop or acquire, then the risk is much greater and it should be carefully investigated. If the expertise and resources are not available now or in the foreseeable future, then perhaps the idea should be abandoned.</p>
              <p>If there is a great deal of unfinished development work to do, then there is a greater risk that unforeseen problems may occur. An idea that faces a prolonged development effort needs a substantial commitment of time, energy and resources. It represents a greater risk that costs will blow out or the final result may not perform as it was originally envisaged. Implementation risk also increases with the technical complexity of an idea.</p>
              <span class="q">The chance that my idea may fail to get implemented is:</span>
              <ol class="multichoice">
                <li><label><input name="stages[4][1]" value="5" type="radio" style="display: none;"> very low</label></li>
                <li><label><input name="stages[4][1]" value="4" type="radio" style="display: none;"> low</label></li>
                <li><label><input name="stages[4][1]" value="3" type="radio" style="display: none;"> moderate</label></li>
                <li><label><input name="stages[4][1]" value="2" type="radio" style="display: none;"> high</label></li>
                <li><label><input name="stages[4][1]" value="1" type="radio" style="display: none;"> very high</label></li>
              </ol>
            </div>
          </div>
          <div class="survey-section">
            <span class="section-number">13:</span>
            <div class="section-content">
              <h5>Dependence risk</h5>
              <p>Dependence risk occurs when your idea must rely upon some other public sector organisation, business organisation, voluntary organisation, process, service, system or individual for its implementation. High dependence risk means loss of authority over your idea because you have to rely on something or someone you cannot control.</p>
              <p>Public sector organisations, and individual units within them, are often characterised as <em>silos. </em>They tend to operate with different cultures, different procedures and different standards. Dependence risk in the public sector starts with coordination inside your own organisation, increases with coordination amongst other public sector organisations, and is especially high for initiatives requiring whole-of-government coordination.</p>
              <p>Gatekeepers are a special category of dependence risk in the public sector. Traditionally, gatekeepers have stood guard over us in order to provide guidance and protection. Their job is usually to say ‘no’ and they say ‘no’ a lot. We are sometimes faced with gatekeepers who try to decide things like what stakeholders should or should not have and sometimes who has the right to be a stakeholder. For example, treasury is usually the gatekeeper for procedures and policies in budgeting, and Crown law is usually the gatekeeper for the oversight of contracts.</p>
              <p>Technology is the basis for many public sector innovations, but it also represents a significant source of dependence risk. The hype surrounding the benefits of new technology is not always matched by the reality. Sometimes the technology is not mature, the infrastructure is not in place or it is simply too complicated to be easily installed and used.</p>
              <span class="q">The extent to which my idea will depend on another public sector agency, process, system, or outside organisation is</span>
              <ol class="multichoice">
                <li><label><input name="stages[4][2]" value="5" type="radio" style="display: none;"> very low</label></li>
                <li><label><input name="stages[4][2]" value="4" type="radio" style="display: none;"> low</label></li>
                <li><label><input name="stages[4][2]" value="3" type="radio" style="display: none;"> moderate</label></li>
                <li><label><input name="stages[4][2]" value="2" type="radio" style="display: none;"> high</label></li>
                <li><label><input name="stages[4][2]" value="1" type="radio" style="display: none;"> very high</label></li>
              </ol>
            </div>
          </div>
          <div class="survey-section">
            <span class="section-number">14:</span>
            <div class="section-content">
              <h5>Timing risk</h5>
              <p>First, most public sector organisations have a budget cycle. If your idea misses the window of opportunity for inclusion in the next budget bid, then it may lapse altogether or at least until the next round. Second, the election cycle defines another window of opportunity in which politicians may latch onto an idea they believe will appeal to voters. If your idea is not ‘shovel ready’ when an election is called, then it may lapse altogether or at least until the next election. Third, there may be a mismatch between the timeframe for an idea and the organisation’s planning horizon.</p>
              <ul>
                <li><strong>Short-term</strong> planning horizons are focused on immediate problems, such as the daily pressures of media and politics, and crises like a computer system crash, which require short-term innovative tactics.</li>
                <li><strong>Medium-term</strong> planning horizons are usually focused on core programs in which incremental innovation is the main concern.</li>
                <li><strong>Longer-term</strong> planning horizons are usually focused on more radical innovations that reflect emerging issues for the organisation.<strong> </strong></li>
                <li><strong>Generational</strong> planning horizons are focused on big issues in the very long term that reflect transformational innovations.</li>
              </ul>
              <p>Public sector organisations with short time-horizons typically resist innovation. A government with a small majority, ministers facing re-election, senior bureaucrats coming up to their contract renewal or a culture focused on tomorrow’s media coverage usually means a short term perspective and resistance to longer-term ideas.</p>
              <span class="q">The  possibility that my idea will fall outside the budget cycle, planning cycle, election cycle or other timing constraint is</span>
              <ol class="multichoice">
                <li><label><input name="stages[4][3]" value="5" type="radio" style="display: none;"> very low</label></li>
                <li><label><input name="stages[4][3]" value="4" type="radio" style="display: none;"> low</label></li>
                <li><label><input name="stages[4][3]" value="3" type="radio" style="display: none;"> unclear</label></li>
                <li><label><input name="stages[4][3]" value="2" type="radio" style="display: none;"> high</label></li>
                <li><label><input name="stages[4][3]" value="1" type="radio" style="display: none;"> very high</label></li>
              </ol>
            </div>
          </div>
          <div class="survey-section">
            <span class="section-number">15:</span>
            <div class="section-content">
              <h5>Reputational risk</h5>
              <p>Reputation in the public sector consists of perceptions about individuals, organisations and institutions. Reputation is very important because it creates trust. Trust is a powerful force because it reduces the formality, and hence the cost and difficulty, of gaining support both inside and outside an organisation. Your personal reputation impacts on your own career prospects. The organisation’s reputation impacts on its ability to secure budgetary and political support. A politician’s reputation impacts on their chances for re-election. A government’s reputation impacts on its media, community and ultimately electoral support to carry out its policies and programs.</p>
              <p>A significant characteristic of the public sector is scrutiny by parliaments, the public and the media. When a public sector innovation fails, there is always the prospect of reputational consequences. Our political system is based on an opposition trying to convince the public that it can do a better job, so highlighting failure is a favourite political sport. No one wants to embarrass their agency or their minister or be held responsible for damaging media attention. Some of the drivers of public sector reputational risk include doubts about:</p>
              <ul>
                <li>Personal/bureaucratic/political integrity</li>
                <li>Openness and transparency</li>
                <li>Use of public assets</li>
                <li>Financial soundness</li>
                <li>Quality of processes and services</li>
                <li>Ability to attract, develop and retain top staff</li>
                <li>Community and environmental responsibility</li>
              </ul>
              <span class="q">The potential for unintended consequences that could result in reputational damage from my idea is</span>
              <ol class="multichoice">
                <li><label><input name="stages[4][4]" value="5" type="radio" style="display: none;"> very low</label></li>
                <li><label><input name="stages[4][4]" value="4" type="radio" style="display: none;"> low</label></li>
                <li><label><input name="stages[4][4]" value="3" type="radio" style="display: none;"> unlikely</label></li>
                <li><label><input name="stages[4][4]" value="2" type="radio" style="display: none;"> possible</label></li>
                <li><label><input name="stages[4][4]" value="1" type="radio" style="display: none;"> very possible</label></li>
              </ol>
            </div>
          </div>
        </div>
        <!-- Stage 5 END -->

        <!-- Stage 6 START -->
        <div class="form-stage stage-6">
          <h2>Resources</h2>
          <p>The resources needed to develop and implement a new idea are key variables in establishing a business case and gaining approval. Lack of resources can be a significant barrier to innovation when it means trying to justify extra expenditure in the face of expectations about efficiency. However, there are often existing resources that can be applied to a good idea, so this fourth theme is focused on the <em>gap</em> between the resources that are needed and the resources that already exist.</p>
          <ul>
            <li><strong>Technical resources</strong> consist of functional expertise, system expertise, and domain expertise</li>
            <li><strong>Administrative resources</strong> consist of the know-how to manage planning, organisational issues, staff relations and leadership, negotiating, project management and communications</li>
            <li><strong>Operational resources</strong> are investments in space, equipment and systems</li>
            <li><strong>Human resources</strong> consist of the number and types of staff required</li>
            <li><strong>Financial resources </strong>are the budget allocations to develop and implement your idea.</li>
          </ul>
          <p>The amount and types of resources depend on the sophistication of your idea and the nature of the problem it faces. Having a balance of skills and experience is just as important as depth of expertise in particular areas. Exactly which skills and experience are important can only be determined on a case-by-case basis. The overriding premise is that the circumstances of your idea dictate the resources you need to implement it. You should also make a serious and frank assessment of your own personal skills and experience compared with what your idea may require.</p>
          <p>If you have control over the right mix of resources, then you are in a position to implement your idea. Resources represent the fundamental building blocks of your business case. Not all resources, however, are strategically important. While <em>common</em> resources, such as office space, are necessary to carry out most normal day-to-day activities, it is <em>critical</em> resources, such as key technical expertise, that matter most in evaluating the feasibility of your idea.</p><hr><p><em><strong>Instructions:</strong> Please click on the appropriate response for each of the multiple-choice questions below:</em></p>
          <div class="survey-section">
            <span class="section-number">16:</span>
            <div class="section-content">
              <h5>Technical resources</h5>
              <p>Do you have the technical resources needed to implement your idea or will you need to acquire them? There are three dimensions of technical expertise and you need to be clear about which ones you need.</p>
              <ul>
                <li><strong>Functional expertise</strong> consists of the skills and experience needed to carry out a job. These are learned job skills such as how to test for water quality or how to interrogate a data base</li>
                <li><strong>System expertise</strong> consists of a thorough understanding of the idea itself and the skills and experience needed to create and maintain technical performance</li>
                <li><strong>Domain expertise</strong> is knowledge about the technical expectations of stakeholders and the technological environment in which a new idea will operate.</li>
              </ul>
              <p>Some ideas are straightforward and require little technical input.  However, even low technology ideas require some technical expertise. It is easy to underestimate the degree of technical sophistication involved in a project, especially if you lack technical expertise or you haven’t been through the implementation process before.</p>
              <p>Despite the technical requirements inherent in embracing changes in information and communications technology, there is a big risk in not embracing it. Public sector organisations that are slow to implement the new technology will be under increasing pressure to do so. Information and communications technology is an essential ingredient for many new ideas and it is going to be a critical technical resource in most aspects of public sector innovation.</p>
              <span class="q">The gap between what is available and what is needed for my idea calls for:</span>
              <ol class="multichoice">
                <li><label><input name="stages[5][0]" value="5" type="radio" style="display: none;"> no additional technical expertise</label></li>
                <li><label><input name="stages[5][0]" value="4" type="radio" style="display: none;"> modest additional technical expertise</label></li>
                <li><label><input name="stages[5][0]" value="3" type="radio" style="display: none;"> moderate additional technical expertise</label></li>
                <li><label><input name="stages[5][0]" value="2" type="radio" style="display: none;"> significant additional technical expertise</label></li>
                <li><label><input name="stages[5][0]" value="1" type="radio" style="display: none;"> a high level of additional technical expertise</label></li>
              </ol>
            </div>
          </div>
          <div class="survey-section">
            <span class="section-number">17:</span>
            <div class="section-content">
              <h5>Administrative resources</h5>
              <p>One of the lessons that public sector innovators learn is that the administrative skills and knowledge needed to manage an on-going project are usually different from those needed to develop the initial idea. Perhaps the greatest skill of all is to know one’s own personal limitations. The focus in this question is on the various administrative resources needed to manage the development, implementation and ongoing operation of your idea, including:</p>
              <ul>
                <li>Planning</li>
                <li>Organisational issues</li>
                <li>Staff relations and leadership</li>
                <li>Negotiating</li>
                <li>Project management</li>
                <li>Communications</li>
              </ul>
              <p>Administrative expertise underpins the way in which a public sector organisation goes about managing its tasks. Some operations consist of repeating relatively straightforward tasks that only require basic administrative resources. Other operations are more complex, and some are so highly complicated and completely different each time they occur that they require a very high level of administrative expertise. Administrative expertise is more likely to be a critical factor for a new, inexperienced, or under-financed public sector organisation and you need to assess which administrative functions are going to be critical to the development, implementation and ongoing operation of your idea.</p>
              <span class="q">The gap between what is available and what is needed for my idea calls for</span>
              <ol class="multichoice">
                <li><label><input name="stages[5][1]" value="5" type="radio" style="display: none;"> no additional administrative expertise</label></li>
                <li><label><input name="stages[5][1]" value="4" type="radio" style="display: none;"> modest additional administrative expertise</label></li>
                <li><label><input name="stages[5][1]" value="3" type="radio" style="display: none;"> moderate additional administrative expertise</label></li>
                <li><label><input name="stages[5][1]" value="2" type="radio" style="display: none;"> significant additional administrative expertise</label></li>
                <li><label><input name="stages[5][1]" value="1" type="radio" style="display: none;"> a high level of additional administrative expertise</label></li>
              </ol>
            </div>
          </div>
          <div class="survey-section">
            <span class="section-number">18:</span>
            <div class="section-content">
              <h5>Operational resources</h5>
              <p>Operational resources are the space, equipment and systems required to develop and implement your idea. Most new initiatives are short on operational resources. Before you start thinking about plush new premises or expensive new furniture, give some thought to <em>all</em> of the operational resources you will need.</p>
              <ul>
                <li>Location - especially when location constitutes an important element in your idea.</li>
                <li>Premises - including offices and facilities in which services are provided.</li>
                <li>Equipment - required for delivering a service or setting up an office.</li>
                <li>Transport - including cars, trucks or specialised vehicles.</li>
                <li>Storage facilities - for supplies and materials.</li>
                <li>Computer systems - including the integration of operating and financial information systems.</li>
                <li>Other operational resources.</li>
              </ul>
              <p>Many of these are <em>common</em> operational resources that are required for most functions. <em>Critical</em> operational resources, however, are not common and include things like a particular location or state-of-the-art equipment. The need for operational resources can be substantial for some ideas and modest for others, with obvious implications for developing a business case.</p>
              <span class="q">The gap between what is available and what is needed for my idea calls for</span>
              <ol class="multichoice">
                <li><label><input name="stages[5][2]" value="5" type="radio" style="display: none;"> no additional operational resources</label></li>
                <li><label><input name="stages[5][2]" value="4" type="radio" style="display: none;"> modest additional operational resources</label></li>
                <li><label><input name="stages[5][2]" value="3" type="radio" style="display: none;"> moderate additional operational resources</label></li>
                <li><label><input name="stages[5][2]" value="2" type="radio" style="display: none;"> significant additional operational resources</label></li>
                <li><label><input name="stages[5][2]" value="1" type="radio" style="display: none;"> very significant additional operational resources</label></li>
              </ol>
            </div>
          </div>
          <div class="survey-section">
            <span class="section-number">19:</span>
            <div class="section-content">
              <h5>Human resources</h5>
              <p>Can you make use of existing staff to implement your idea? An untrained person in a position requiring specific knowledge is a liability and a source of future expense when you have to replace them. Filling a job with an over-qualified person can also be a waste of talent and money as well as a likely source of frustration for the staff concerned.</p>
              <p>Will the people who are currently available have the right combination of skills and experience? Do you need to provide training? Problems like these may not be apparent until operations are well underway. Will you need to make new appointments?<strong> </strong></p>
              <ul>
                <li>How many new staff positions will be needed?</li>
                <li>What duties and functions must they be able to perform?</li>
                <li>What knowledge, skills, experience and qualifications are required?</li>
                <li>Must new staff be fully qualified before being appointed or can they learn on the job?</li>
              </ul>
              <p>You can leverage your existing staff by contracting for some tasks to be performed by an outside organisation. This enables you to focus on your core competencies while gaining access to resources in other areas. Outsourcing may be less expensive than trying to undertake some tasks yourself because the supplier has economies of scale giving you cost-effective access to their expertise. Outsourcing is also a way to gain temporary access to people with the right skills without having to appoint them and it can make the implementation of your idea more flexible by giving you quick access to specialised staff.</p>
              <span class="q">The gap between what is available and what is needed for my idea calls for</span>
              <ol class="multichoice">
                <li><label><input name="stages[5][3]" value="5" type="radio" style="display: none;"> no additional human resources</label></li>
                <li><label><input name="stages[5][3]" value="4" type="radio" style="display: none;"> modest additional human resources</label></li>
                <li><label><input name="stages[5][3]" value="3" type="radio" style="display: none;"> moderate additional human resources</label></li>
                <li><label><input name="stages[5][3]" value="2" type="radio" style="display: none;"> significant additional human resources</label></li>
                <li><label><input name="stages[5][3]" value="1" type="radio" style="display: none;"> very significant additional human resources</label></li>
              </ol>
            </div>
          </div>
          <div class="survey-section">
            <span class="section-number">20:</span>
            <div class="section-content">
              <h5>Financial resources</h5>
              <p>Nearly all projects, even small ones, need some funding to make them happen. Make a rough estimate of what you think your idea is going to cost, and then identify the ways in which you could get it funded.</p>
              <ul>
                <li>What do you think it will cost to develop and implement your idea?</li>
                <li>What funds do you have available?</li>
                <li>What further funding will you need?</li>
                <li>What are the funding opportunities including your own organisation, other government organisations, private sponsorship or grants?</li>
                <li>What are the benefits and value of your idea for each potential sponsor or funding organisation?</li>
                <li>What sort of in-kind support might be available from interested parties?</li>
                <li>What alternatives or modifications could you make to your idea if you are unable to attract enough funding?</li>
                <li>How will you will manage the funds and report on expenditure?</li>
              </ul>
              <p>Many public sector innovators underestimate the financial commitment that is required to make the transition between the initial idea and successful implementation. This is understandable because the level of financial commitment is relatively modest during the early stages of the innovation process, but it increases dramatically during the latter stages. Most of the expenditure required to develop, refine and implement an idea will not be known until after the business case is completed.</p>
              <span class="q">The gap between what is available and what is needed for my idea calls for</span>
              <ol class="multichoice">
                <li><label><input name="stages[5][4]" value="5" type="radio" style="display: none;"> no additional financial resources</label></li>
                <li><label><input name="stages[5][4]" value="4" type="radio" style="display: none;"> modest additional financial resources</label></li>
                <li><label><input name="stages[5][4]" value="3" type="radio" style="display: none;"> moderate additional financial resources</label></li>
                <li><label><input name="stages[5][4]" value="2" type="radio" style="display: none;"> significant additional financial resources</label></li>
                <li><label><input name="stages[5][4]" value="1" type="radio" style="display: none;"> very significant additional financial resources</label></li>
              </ol>
            </div>
          </div>
        </div>
        <!-- Stage 6 END -->
        <!-- Results  START -->
        <div class="form-stage stage-6 psit-assessment-results">
          <h2>Results</h2>
          <h3>Idea Assessment Report</h3>
          <img id="psit-results-chart" src="https://chart.googleapis.com/chart?cht=r&amp;chs=560x480&amp;chd=t%3A3%2C2%2C3%2C4%2C2%2C3%2C4%2C3%2C3%2C4%2C5%2C4%2C4%2C1%2C3%2C4%2C4%2C4%2C3%2C3%2C3&amp;chm=B%2CFF7E00DD%2C0%2C1.0%2C5.0&amp;chds=0%2C5&amp;chxl=0%3A%7CProblem%7CImportance%7CRecognition%7CCompatibility%7CValue%7CEnd-user+support%7CStaff+support%7CManagement+support%7CPolitical+support%7CExternal+support%7CRegulatory+risk%7CImplementation+risk%7CDependence+risk%7CTiming+risk%7CReputational+risk%7CTechnical+resources%7CAdministrative+resources%7COperational+resources%7CHuman+resources%7CFinancial+resources%7C1%3A%7C%7Ce%7Cd%7Cc%7Cb%7Ca&amp;chxt=x%2Cy&amp;chxr=0%2C0%2C5%7C1%2C0%2C5%2C1&amp;chxs=0%2C666666%2C9&amp;chco=FF7E00">
          <hr>
          <h3>Innovation feasibility rating: <span style="font-weight: bold; color: #FF7E00" class="psit-feasibility-rating-score">0</span></h3>
          <div class="psit-assessment-result-blurb"></div>
          <h3>Where to now?</h3>
          <p>Now that you have assessed your idea's feasibility, there are four possible actions you can take:</p>
          <ul>
            <li>Proceed with the idea</li>
            <li><a href="http://innovation.govspace.gov.au/ideas/ideas-for-the-public-sector/assessing-your-idea/ideas-panel-beating/">Refine the idea</a></li>
            <li>Wait until circumstances change</li>
            <li>Abandon the idea</li>
          </ul>
          <hr>
        </div>
        <!-- Results  END -->

        <!-- form buttons START -->
        <hr>
        <div class="ideas-buttons">
          <p class="left"><a href="?reset" class="ideas-button restart">Start again</a></p>
          <p class="right">
            <a href="http://innovation.govspace.gov.au/ideas/ideas-for-the-public-sector/assessing-your-idea/?stage=0" class="ideas-button back">Back</a>
            <input type="submit" value="Next" class="ideas-button next">
            <input type="submit" value="Get results" class="ideas-button done">
            <!--
            <a target="_blank" class="ideas-button print" href="http://innovation.govspace.gov.au/ideas/ideas-for-the-public-sector/assessing-your-idea/?view=pdf&amp;stage=6">Save or Print PDF</a>
            -->
          </p>
        </div>
        <!-- form buttons END -->
      </form>
    </div>
  </div>
</div>
