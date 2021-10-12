<?php
/**
 * Front page template file
 * 
 * @package ASM
 */
//template-parts/header/header","slider"
get_header();
?>
<style>
    .strip-bg {
        background-image: url('<?php echo ASM_ASSETS_URI ?>/images/soloman.jpg');
    }
</style>
<div class="height-30em strip-bg"></div>
<div class="height-30em text-center mt-5">
    <?php //get_template_part('template-parts/icons/social-media'); ?>
    <h1>Ways You Can Help</h1>
    <p>The Safe Australasia Foundation Provides a Variety of Programs and Services to Help Keep Us Safe!</p>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="96.000000pt" height="96.000000pt" viewBox="0 0 96.000000 96.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,96.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                        <path d="M196 756 c-46 -27 -75 -76 -76 -126 0 -36 31 -98 56 -113 22 -13 17
                        -22 -20 -35 -69 -25 -139 -117 -152 -201 -6 -41 -6 -41 25 -41 25 0 31 4 31
                        23 1 33 34 99 66 129 78 73 193 77 275 9 35 -30 36 -30 26 -78 -36 -176 111
                        -338 290 -320 127 13 227 113 240 241 10 95 -36 193 -116 246 l-41 28 32 20
                        c18 12 49 37 68 57 l35 37 -55 50 c-62 58 -139 98 -189 98 -48 0 -110 -38
                        -132 -82 -25 -48 -24 -89 2 -139 11 -23 19 -42 17 -43 -40 -24 -88 -61 -92
                        -72 -8 -20 -30 -17 -50 5 -10 11 -31 25 -47 31 -16 7 -29 15 -29 19 0 3 19 18
                        43 33 23 15 58 43 77 63 l35 37 -55 50 c-63 59 -139 98 -190 98 -19 0 -53 -11
                        -74 -24z m142 -60 c26 -13 56 -33 66 -45 19 -21 19 -21 0 -42 -26 -29 -107
                        -69 -139 -69 -38 0 -85 50 -85 90 0 40 47 90 85 90 14 0 47 -11 73 -24z m420
                        0 c26 -13 56 -33 66 -45 19 -21 19 -21 0 -42 -26 -29 -107 -69 -139 -69 -38 0
                        -85 50 -85 90 0 40 47 90 85 90 14 0 47 -11 73 -24z m10 -232 c110 -45 162
                        -174 113 -279 -76 -165 -306 -165 -382 0 -37 79 -19 165 46 231 63 62 146 81
                        223 48z"/>
                        <path d="M660 360 l0 -60 -60 0 -60 0 0 -30 0 -30 60 0 60 0 0 -60 0 -60 30 0
                        30 0 0 60 0 60 60 0 60 0 0 30 0 30 -60 0 -60 0 0 60 0 60 -30 0 -30 0 0 -60z"/>
                    </g>
                </svg>   
            </div>
            <div class="col-4 text-start">
                <h4>Join Safe Australasia</h4>
                <p>Be a ‘part’ of Safe America as a member and gain exclusive benefits. Whether for business, your family or just yourself, gain benefits that include product discounts and exclusive benefits such as e-learning,</p>
                <a href="#">Join Today</a>
            </div>
            <div class="col-2">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="96.000000pt" height="96.000000pt" viewBox="0 0 96.000000 96.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,96.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                        <path d="M590 881 c-8 -5 -77 -33 -154 -62 -130 -49 -140 -55 -172 -98 -18
                        -25 -46 -69 -61 -98 l-27 -51 18 -59 c10 -32 31 -84 47 -115 27 -54 28 -58 14
                        -92 -19 -45 -19 -87 0 -133 21 -50 42 -72 90 -94 150 -69 304 83 237 235 l-21
                        46 48 25 c99 49 128 87 171 220 12 39 31 84 41 101 17 28 17 32 3 53 l-16 22
                        -23 -21 c-14 -13 -39 -67 -61 -132 -44 -128 -67 -157 -160 -198 -33 -15 -82
                        -44 -107 -63 -63 -48 -85 -54 -110 -29 -19 20 -19 22 -3 47 17 25 68 66 122
                        96 22 12 34 32 53 86 13 39 20 76 17 82 -4 6 -38 11 -81 11 -67 0 -75 -2 -86
                        -22 -6 -13 -25 -37 -42 -55 l-30 -32 18 -46 c16 -45 16 -47 -1 -60 -24 -17
                        -27 -14 -53 58 l-21 59 21 44 c47 92 65 106 238 173 158 62 160 63 149 87 -12
                        25 -32 30 -58 15z m-130 -290 c0 -27 -23 -62 -49 -75 -28 -15 -30 -15 -36 4
                        -8 27 33 79 63 79 12 1 22 -3 22 -8z m68 -302 c19 -36 8 -96 -24 -130 -71 -74
                        -196 -28 -198 73 -1 34 2 42 14 39 45 -13 98 -5 136 21 45 31 54 30 72 -3z"/>
                    </g>
                </svg>              
            </div>
            <div class="col-4 text-start">
                <h4>About Us</h4>
                <p>Be a ‘part’ of Safe America as a member and gain exclusive benefits. Whether for business, your family or just yourself, gain benefits that include product discounts and exclusive benefits such as e-learning,</p>
                <a href="#">Join Today</a>      
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="96.000000pt" height="96.000000pt" viewBox="0 0 96.000000 96.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,96.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M590 881 c-8 -5 -77 -33 -154 -62 -130 -49 -140 -55 -172 -98 -18
                    -25 -46 -69 -61 -98 l-27 -51 18 -59 c10 -32 31 -84 47 -115 27 -54 28 -58 14
                    -92 -19 -45 -19 -87 0 -133 21 -50 42 -72 90 -94 150 -69 304 83 237 235 l-21
                    46 48 25 c99 49 128 87 171 220 12 39 31 84 41 101 17 28 17 32 3 53 l-16 22
                    -23 -21 c-14 -13 -39 -67 -61 -132 -44 -128 -67 -157 -160 -198 -33 -15 -82
                    -44 -107 -63 -63 -48 -85 -54 -110 -29 -19 20 -19 22 -3 47 17 25 68 66 122
                    96 22 12 34 32 53 86 13 39 20 76 17 82 -4 6 -38 11 -81 11 -67 0 -75 -2 -86
                    -22 -6 -13 -25 -37 -42 -55 l-30 -32 18 -46 c16 -45 16 -47 -1 -60 -24 -17
                    -27 -14 -53 58 l-21 59 21 44 c47 92 65 106 238 173 158 62 160 63 149 87 -12
                    25 -32 30 -58 15z m-130 -290 c0 -27 -23 -62 -49 -75 -28 -15 -30 -15 -36 4
                    -8 27 33 79 63 79 12 1 22 -3 22 -8z m68 -302 c19 -36 8 -96 -24 -130 -71 -74
                    -196 -28 -198 73 -1 34 2 42 14 39 45 -13 98 -5 136 21 45 31 54 30 72 -3z"/>
                    </g>
                </svg>      
            </div>
            <div class="col-4 text-start">
                <h4>Join Safe Australasia</h4>
                <p>Be a ‘part’ of Safe America as a member and gain exclusive benefits. Whether for business, your family or just yourself, gain benefits that include product discounts and exclusive benefits such as e-learning,</p>
                <a href="#">Join Today</a>
            </div>
            <div class="col-2">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="96.000000pt" height="96.000000pt" viewBox="0 0 96.000000 96.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,96.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M590 881 c-8 -5 -77 -33 -154 -62 -130 -49 -140 -55 -172 -98 -18
                    -25 -46 -69 -61 -98 l-27 -51 18 -59 c10 -32 31 -84 47 -115 27 -54 28 -58 14
                    -92 -19 -45 -19 -87 0 -133 21 -50 42 -72 90 -94 150 -69 304 83 237 235 l-21
                    46 48 25 c99 49 128 87 171 220 12 39 31 84 41 101 17 28 17 32 3 53 l-16 22
                    -23 -21 c-14 -13 -39 -67 -61 -132 -44 -128 -67 -157 -160 -198 -33 -15 -82
                    -44 -107 -63 -63 -48 -85 -54 -110 -29 -19 20 -19 22 -3 47 17 25 68 66 122
                    96 22 12 34 32 53 86 13 39 20 76 17 82 -4 6 -38 11 -81 11 -67 0 -75 -2 -86
                    -22 -6 -13 -25 -37 -42 -55 l-30 -32 18 -46 c16 -45 16 -47 -1 -60 -24 -17
                    -27 -14 -53 58 l-21 59 21 44 c47 92 65 106 238 173 158 62 160 63 149 87 -12
                    25 -32 30 -58 15z m-130 -290 c0 -27 -23 -62 -49 -75 -28 -15 -30 -15 -36 4
                    -8 27 33 79 63 79 12 1 22 -3 22 -8z m68 -302 c19 -36 8 -96 -24 -130 -71 -74
                    -196 -28 -198 73 -1 34 2 42 14 39 45 -13 98 -5 136 21 45 31 54 30 72 -3z"/>
                    </g>
                </svg>              
            </div>
            <div class="col-4 text-start">
                <h4>Donate</h4>
                <p>Be a ‘part’ of Safe America as a member and gain exclusive benefits. Whether for business, your family or just yourself, gain benefits that include product discounts and exclusive benefits such as e-learning,</p>
                <a href="#">Join Today</a>      
            </div>
        </div>
    </div>
</div>
<div>
    
</div>
<?php
// html pulled from assets/inc/classes/widget-html/text-blocks
//dynamic_sidebar("Home Text Blocks");
get_footer();