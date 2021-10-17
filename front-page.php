<?php
/**
 * Front page template file
 * 
 * @package ASM
 */
//template-parts/header/header","slider"
get_header();
?>
<div class="height-30em strip-bg"></div> 
<div class="container about-us-container">
    <div class="row">
        <div class="col-12">
            <!-- wp:heading -->
            <h2 class="text-center">About Us</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>The SafeAustralasia Foundation is a not-for-profit registered charity based in Australia seeking to support a number of initiatives as per <a>our goals.</a><a href="#_msocom_1">[HW1]</a>&nbsp;</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>We have established in our region to provide a similar framework and efforts based on the outstanding work being carried out by the SafeAmerica Foundation, our sister organisation, who have been operating for over 25 years in the USA in a similar capacity. <em>The SafeAmerica Foundation </em><em>organisation was founded in 1994 and partners with corporate, government, public and private sector organizations and non-profit organization to improve the awareness of safety and preparedness in the United States.&nbsp;</em></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>The SafeAustralasia Foundation see as ourselves as a sister organisation carrying out equivalent programs relevant and appropriate to the Australasian region.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>For more information about the SafeAmerica Foundation see <a target="blank" href="https://safeamerica.org/"><em>www.safeamerica.org</em></a></p>
            <!-- /wp:paragraph -->
        </div>
    </div>
</div>
<div class="grey-img-bg goals-container">
    <div class="col">
        <img src="<?php echo ASM_BUILD_IMG_URI ?>/goal-arrow-800.jpg" alt="Goal Arrow">
    </div>
    <div class="col col-text">
        <div>
            <h2>Our Goals</h2>
            <p>Our goal is to build an ‘Alliance’ of organisations and other non-profits that can:</p>
            <ul>
                <li>Community Safety</li>
                <li>Cyber Security</li>
                <li>Disaster Preparedness</li>
                <li>Community and Business Resilience to Disaster</li>
                <li>Emergency Management within Industry</li>
            </ul> 
            <p>Educational activities include approaches in</p>       
            <ul>
                <li>Promoting and enabling evidence-based practice</li>
                <li>Certifying training courses in Emergency Management</li>
                <li>Undertake fund raising activities to build up the financial resources to support our initiatives</li>
                <li>Provide bursaries, gifts and other donations, other financial assistance and services in-kind to members of the public being Australian citizens or permanent residents to advance their education in the core subject areas of the Foundation.</li>
                <li>Assisting Emergency Responders skill development</li>
            </ul>
            <!-- <p>All courses sponsored are to be Australian educational institution in approved Australian courses, and/or at educational institutions overseas to study as a component of an approved Australian course</p>  -->
        </div>
    </div>
</div>
<?php
// html pulled from assets/inc/classes/widget-html/text-blocks
//dynamic_sidebar("Home Text Blocks");
get_footer();