<?php
    /**
    *Template Name: Mailchimp
    */
    get_header();
    $meal_section_id= 30;
    get_template_part( 'section-templates/banar' );
    the_post( );
    ?>


    <div id="mc_embed_signup">
        <form
            action="https://freelancer-mizan.us17.list-manage.com/subscribe/post?u=21f8fc1a4d373e83571741b8a&amp;id=05c8305b34"
            method="post" id="mc-embedded-subscribe-form"
            name="mc-embedded-subscribe-form" class="validate" target="_blank"
            novalidate>
            <div id="mc_embed_signup_scroll">
                <h2><?php the_title(  ); ?></h2>
                <div class="indicates-required"><span class="asterisk">*</span>
                    indicates required</div>
                <div class="mc-field-group">
                    <label for="mce-EMAIL"><?php _e('Email Address','meal') ?> <span class="asterisk">*</span>
                    </label>
                    <input type="email" value="" name="EMAIL" class="required
                        email"
                        id="mce-EMAIL">
                </div>
                <div class="mc-field-group">
                    <label for="mce-FNAME"><?php _e('First Name','meal') ?> </label>
                    <input type="text" value="" name="FNAME" class=""
                        id="mce-FNAME">
                </div>
                <div class="mc-field-group">
                    <label for="mce-LNAME"><?php _e('Last Name','meal') ?></label>
                    <input type="text" value="" name="LNAME" class=""
                        id="mce-LNAME">
                </div>
                <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response"
                        style="display:none"></div>
                    <div class="response" id="mce-success-response"
                        style="display:none"></div>
                </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"
                    aria-hidden="true"><input
                        type="text"
                        name="b_21f8fc1a4d373e83571741b8a_05c8305b34"
                        tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe"
                        name="subscribe" id="mc-embedded-subscribe"
                        class="button"></div>
            </div>
        </form>
    </div>

    <?php get_footer( );?>