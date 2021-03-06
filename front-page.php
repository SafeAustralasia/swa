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
        <div class="col-md-6 col-sm-12">
            <div class="about-us-card about-us-text">
                <!-- wp:heading -->
                <h2 class="sub-heading">About Us</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>The SafeAustralasia Foundation is a not-for-profit registered charity based in Australia seeking to support a number of initiatives as per our goals.</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p>We have established in our region to provide a similar framework and efforts based on the outstanding work being carried out by the SafeAmerica Foundation, our sister organisation, who have been operating for over 25 years in the USA in a similar capacity. <em>The SafeAmerica Foundation </em><em>organisation was founded in 1994 and partners with corporate, government, public and private sector organizations and non-profit organization to improve the awareness of safety and preparedness in the United States.&nbsp;</em></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p>The SafeAustralasia Foundation see ourselves as a sister organisation carrying out equivalent programs relevant and appropriate to the Australasian region.</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p>For more information about the SafeAmerica Foundation see <a target="blank" href="https://safeamerica.org/"><em>www.safeamerica.org</em></a></p>
                <!-- /wp:paragraph -->
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="about-us-card">
                <img src="<?php echo ASM_BUILD_IMG_URI ?>/Harold Len and Sec Norm Manetta.jpg"/>
            </div>
        </div>
    </div>
</div>
<div class="grey-img-bg goals-container">
    <div class="col col-image">
        
    </div>
    <div class="col col-text">
        <div>
            <h2>Our Goals</h2>
            <p>Our goal is to build an ???Alliance??? of organisations and other non-profits that can:</p>
            <ul>
                <li>Advance education and increase awareness in safety, with a focus on the people of Australia and the Australasian region, through a series of initiatives in (but not limited to) the following areas:</li>
                <ul>
                    <li>Community Safety</li>
                    <li>Cyber Security</li>
                    <li>Disaster Preparedness</li>
                    <li>Community and Business Resilience to Disaster</li>
                    <li>Emergency Management within Industry</li>
                </ul>
            </ul> 
            <p>Educational activities include approaches in</p>       
            <ul>
                <li>Promoting and enabling evidence-based practice</li>
                <li>Certifying training courses in Emergency Management</li>
                <li>Undertake fund raising activities to build up the financial resources to support our initiatives</li>
                <li>Provide bursaries, gifts and other donations, other financial assistance and services in-kind to members of the public being Australian citizens or permanent residents to advance their education in the core subject areas of the Foundation.</li>
                <li>Assisting Emergency Responders skill development</li>
            </ul>
            <p>All courses sponsored are to be Australian educational institution in approved Australian courses, and/or at educational institutions overseas to study as a component of an approved Australian course</p>
            <ul>
                <li>
                    Build our membership and engage with organisations in the corporate, government, public and private sector through the:
                </li>
                <ul>
                    <li>Safety News Network</li>
                    <li>WorldSafe CEO Network</li>
                    <li>And other initiatives to communicate to a wide audience</li>
                </ul>
                <li>Involve the ???next generation??? as proactive leaders, and</li>
                <li>Develop sustainable Australasian programs in other related safety subject across our region</li>
            </ul>
        </div>
    </div>
</div>
<?php
get_footer();