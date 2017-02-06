<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<meta name="viewport" content="width=device-width"/>
<header id="navbar" role="banner" class="<?php //print $navbar_classes; ?>">

        <div class="header" role="banner">


    <!--
    <div class="navbar-header">
     <!--

                  <?php if (!empty($site_name)): ?>
                  <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
                   <?php endif; ?>

              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div> -->


            <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
              <div class="nav-top-wrapper">
                <div class="navbar-collapse collapse navbar-top navbar container navbar-default">
                  <nav role="navigation">
                    <?php if (!empty($primary_nav)): ?>
                      <?php print render($primary_nav); ?>
                    <?php endif; ?>

                    <?php if (!empty($page['navigation'])): ?>
                      <?php print render($page['navigation']); ?>
                    <?php endif; ?>
                  </nav>
                </div>
              </div>
            <?php endif; ?>




            <div class="navbar-bottom <?php print $navbar_classes; ?>">
                <?php if ($logo): ?>
                    <div class="logo navbar-btn pull-left ">
                    <a class="" href="http://www.une.edu.au/" title="<?php print t('Home'); ?>">
                        <img height="177" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                    </div>


                <ul  class="header-links headerLinksResponsive ">

                    <li><a class="link_937" href="http://www.une.edu.au/current-students">Current Students</a></li>
                    <li><a class="link_938" href="http://www.une.edu.au/staff-current/home">Staff</a></li>

                    <li><a class="link_939" href="http://www.une.edu.au/library">Library</a></li>
                    <li><a class="link_935" href="http://www.une.edu.au/info-for/media">Media</a></li>
                    <li><a class="link_940" href="http://www.une.edu.au/jobs-at-une">UNE Jobs</a></li>
                    <li><a class="link_936" href="http://www.une.edu.au/contact-us">Contact us</a></li>
                    <li><a class="link_96066"  href="http://my.une.edu.au">myUNE</a></li>


                </ul>
                <!--<form action="http://www.une.edu.au/search" method="GET" role="search" novalidate="novalidate" autocomplete="off">
                    <label form="site-search-field" class="visuallyhidden">Search the site: </label>
                    <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" name="query" id="site-search-field" placeholder="Search" data-autocomplete="off" class="ui-autocomplete-input" autocomplete="off" autocorrect="off" autocapitalize="off">
                    <input type="hidden" value="une-meta" name="collection">
                    <input type="submit" id="site-search-submit" value="Search">
                </form>-->
            </div>


                        <!-- /#site-search--></di>
                <?php endif; ?>
                <?php if (!empty($secondary_nav)): ?>
                    <?php print render($secondary_nav); ?>
                <?php endif; ?>

            </div>
  </div>
</header>






  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>
<div class="footer">

  <?php print render($page['footer']); ?>
    <div id="footer-wrapper">

        <ul class="footer-nav" style="position: relative;">

            <li class="main-nav-level-2-group dynamic-col-1">
                <a href="http://www.une.edu.au/study">Study</a>

                <ul class="level-2">
                    <li>
                        <a href="http://www.une.edu.au/study/why-study-at-une">Why Study at UNE?</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/study/study-options">Study options</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/study/scholarships">Scholarships</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/study/applying-to-une">How to apply</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/study/important-dates">Admission and Application Dates</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/study/study-online">Study online</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/study/study-on-campus">Study on campus</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/study/study-centres">Study Centres</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/study/international">International</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/study/research-degrees">Research Degrees</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/study/fees">Fees and costs</a>
                    </li>
                </ul>


            </li>
            <li class="main-nav-level-2-group dynamic-col-2">
                <a href="http://www.une.edu.au/campus-life">Campus Life</a>

                <ul class="level-2">
                    <li>
                        <a href="http://www.une.edu.au/campus-life/une-accommodation">UNE Accommodation</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/campus-life/campus-information">Campus Information</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/campus-life/armidale-life">Armidale Life</a>
                    </li>
                </ul>


            </li>
            <li class="main-nav-level-2-group dynamic-col-3">
                <a href="http://www.une.edu.au/connect">Connect</a>

                <ul class="level-2">
                    <li>
                        <a href="http://www.une.edu.au/connect/events">Events Calendar</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/connect/news">News</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/connect/social-media">Social Media</a>
                    </li>
                </ul>


            </li>
            <li class="main-nav-level-2-group dynamic-col-1" style="margin-top: 0px;">
                <a href="http://www.une.edu.au/research">Research</a>

                <ul class="level-2">
                    <li>
                        <a href="http://www.une.edu.au/research/une-research-priorities">Research Themes and Clusters</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/research/research-centres-institutes">Centres, Institutes, CRCs</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/research/hdr">Higher Degree Research (HDR)</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/research/ethics-and-grants">Ethics and Grants</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/research/research-excellence-impact-and-engagement">Research Excellence, Impact and Engagement</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/research/research-resources">Research Performance Data</a>
                    </li>
                </ul>


            </li>
            <li class="main-nav-level-2-group dynamic-col-2" style="margin-top: -144px;">
                <a href="http://www.une.edu.au/info-for">Info For</a>

                <ul class="level-2">
                    <li>
                        <a href="http://www.une.edu.au/info-for/visitors">Visitors</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/info-for/for-high-schools">High Schools</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/info-for/business-and-community">Business and Community</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/info-for/indigenous-matters">Aboriginal and Torres Strait Islander Community</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/info-for/alumni-and-giving">Alumni and Giving</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/info-for/honorary-adjunct-and-visiting-appointments">Honorary Appointments</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/info-for/media">Media</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/info-for/teachers-professional-experience-office">Teachers &amp; Education Students</a>
                    </li>
                </ul>


            </li>
            <li class="main-nav-level-2-group dynamic-col-3" style="margin-top: -144px;">
                <a href="http://www.une.edu.au/about-une">About UNE</a>

                <ul class="level-2">
                    <li>
                        <a href="http://www.une.edu.au/about-une/a-world-of-learning">A world of learning</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/about-une/governance">Governance</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/about-une/executive">Executive</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/about-une/academic-schools">Academic schools</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/about-une/areas">Administrative areas</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/about-une/principal-dates">Principal dates</a>
                    </li>
                    <li>
                        <a href="http://www.une.edu.au/about-une/annual-reports">Annual reports</a>
                    </li>
                </ul>


            </li>

        </ul>
    </div>
</div>


    </div>
    <div class="container-fluid footer-acknowledgment">
        <div class="footer-acknowledgment__content">
            <img src="http://www.une.edu.au/__data/assets/image/0006/95991/oorala.jpg" alt=" Oorala Aboriginal Centre banner" class="footer-acknowledgment__image">
            <p class="footer-acknowledgment__text">
                The University of New England respects and acknowledges that its people, programs and facilities are built on land, and surrounded by a sense of belonging, both ancient and contemporary, of the world's oldest living culture. In doing so, UNE values and respects Indigenous knowledge systems as a vital part of the knowledge capital of Australia.
            </p>

        </div>
    </div>
</footer>
