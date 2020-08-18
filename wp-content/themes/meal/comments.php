<div class="section" data-aos="fade-up" id="">
        <div class="container">
            <div class="row section-heading justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="heading mb-3">
                        Leave your comments
                    </h2>
                    <ul>
                        <?php
                        wp_list_comments( );

                        ?>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 p-5 form-wrap">

                <?php
                $meal_comment_fields = array();
                $meal_comment_fields['author']= <<<EOD
                <div class="row mb-4">
    <div class="form-group col-md-6">
        <label for="author" class="label">Name</label>
        <label class="label" for="author">Name <span class="required">*</span></label> 
        <div class="form-field-icon-wrap">
        <span class="icon ion-android-person"></span>
        <input class="form-control" id="author" name="author" type="text" value="" size="30" maxlength="245" required='required' />


        </div>
    </div>
EOD;

                $meal_comment_fields['email'] = <<<EOD
                <div class="form-group col-md-6">
                                <label for="email" name="email" class="label">Email</label>
                                <div class="form-field-icon-wrap">
                                    <span class="icon ion-android-person"></span>
                                    <input type="text" class="form-control" id="email">
                                </div>
                            </div>
EOD;

                $meal_comment_field = <<<EOD
                <div class="form-group col-md-12">
                                <label for="comment" class="label">Comment</label>
                                <textarea name="comment" id="comment" cols="30" rows="10"
                                          class="form-control"></textarea>
                            </div>
                        </div>
EOD;

                $meal_comment_form_arguments = array(
                    'fields'=>$meal_comment_fields,
                    'comment_field'=>$meal_comment_field,
                    'label_submit'=>__('Comment','meal'),
                    'class_submit'=>'btn btn-primary btn-outline-primary btn-block',
                    'title_reply'=>'',
                    'comment_notes_before'=>'<p></p>',
					'comment_notes_after'=>'<p>Your email address will not be published. Required fields are marked *</p>',
					
                );
                comment_form($meal_comment_form_arguments );
                ?>
                    
                </div>
            </div>
        </div>
    </div> <!-- .section -->

