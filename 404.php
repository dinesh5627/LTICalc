<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mettl
 */


get_header();
// $current_language= pll_current_language();
?>

<section class="pageNotFoundSection">
	<div class="container">
		<div class="pageNotFoundHolder">
			<div class="pageNotFoundDataHolder">
				<div class="pageNotFoundDataInnerText">	
					<h2>Oops!</h2>
					<h3 class="title">No Result <br>Found</h3>
				</div>
				<img src="<?php bloginfo('template_directory');?>/images/icons/pageNotFound.svg">
			</div>
			<div class="pageNotFoundFormHolder">
				<div class="pageNotFoundFormInner">
					<h2 class="title">Have a question ?</h2>
					<h3>Just drop in your details here<br> and we'll get back to you!</h3>
					<form class="pageNotFoundForm" id="form-drop-query">
						<div class="inputElement col_100">
							<span class="svgImgAnim">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
								<style type="text/css">
									.st0{fill:none;stroke:#868D95;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;}
								</style> 
								<g>
									<path class="st0" d="M4.1,4.1h21.8c1.5,0,2.7,1.2,2.7,2.7v16.4c0,1.5-1.2,2.7-2.7,2.7H4.1c-1.5,0-2.7-1.2-2.7-2.7V6.8
										C1.4,5.3,2.6,4.1,4.1,4.1z"></path>
									<polyline class="st0" points="28.6,6.8 15,16.4 1.4,6.8 	"></polyline>
								</g>
								</svg>

							</span>
							<input name="email" autocomplete="off" class="required" type="text" value="" size="30" placeholder="Email Address *">
						</div>
						<div class="inputElement col_50">
							<span class="svgImgAnim">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
									<g>
										<path class="st0" d="M27.5,29.1v-3.1c0-3.5-2.8-6.2-6.2-6.2H8.8c-3.5,0-6.2,2.8-6.2,6.2v3.1"></path>
										<circle class="st0" cx="15" cy="7.2" r="6.2"></circle>
									</g>
								</svg>
							</span>
							<input name="firstname" autocomplete="off" class="required alphabetsOnly" type="text" value="" size="30" placeholder="Name *">
						</div><div class="inputElement col_50">
							<span class="svgImgAnim">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 								viewBox="0 0 52.3 52.3" style="enable-background:new 0 0 52.3 52.3;" xml:space="preserve">
								<style type="text/css">
								</style>
								<g>
									<g>
										<path class="st0" d="M31.9,10.9c4.7,0.9,8.4,4.6,9.3,9.3 M31.9,1.6c9.8,1.1,17.6,8.8,18.7,18.6 M48.2,38.9
											c3.4,26.4-34.1,1.8-39.5-9.6C3.3,20.2-5.9,0.3,13.2,3.9c5.7,0.1,4.5,6.9,6.3,10.6c1.5,3.2-2.1,5.9-4,7.9
											c3.3,5.9,8.2,10.7,14.1,14.1c2-2,4.7-5.5,7.9-4C41.3,34.3,48.2,33.2,48.2,38.9z"/>
									</g>
								</g>
								</svg>
							</span>
							<input name="phone" autocomplete="off" class="required phoneNumberOnly" type="text" value="" size="30" placeholder="Phone No *">
						</div>
						<div class="inputElement col_50">
									<span class="svgImgAnim">
									<svg xmlns="http://www.w3.org/2000/svg" id="Layer_2" height="512px" viewBox="0 0 128 128" width="512px" data-name="Layer 2" class=""><g><path d="m86.394 105.941-2.565-15.095-1.341-7.9-1.975-11.62-1.343-7.898-5.664-33.335 9.583-13.365a1.751 1.751 0 0 0 .328-1.02v-13.958a1.751 1.751 0 0 0 -1.75-1.75h-35.334a1.751 1.751 0 0 0 -1.75 1.75v13.958a1.751 1.751 0 0 0 .328 1.02l9.583 13.365-3.132 18.432-.773 4.547-2.8 16.487-.944 5.552-2.63 15.482-1.447 8.507-1.162 6.839a1.748 1.748 0 0 0 .508 1.55l20.669 20.016a1.749 1.749 0 0 0 2.434 0l20.669-20.016a1.748 1.748 0 0 0 .508-1.548zm-6.294-16.154-33.447 7.342.813-4.785 31.879-7 .664 3.909zm-30.5-9.97 27.774-6.1 1.389 8.172-30.663 6.733zm3.574-21.035 20.878-4.582 1.389 8.172-23.768 5.215zm4.65-27.365h12.357l1.943 11.431-16.877 3.7zm15.641 19.327-19.665 4.316.813-4.785 18.097-3.975zm3.317 19.521-26.554 5.835.813-4.785 24.987-5.485zm-28.699-66.765h31.834v11.646l-9.157 12.771h-13.52l-9.157-12.771zm15.917 120.314-18.789-18.2.81-4.767 34.665-7.609 2.1 12.376z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#888888"/><path d="m59.138 16.875 1.791-2a4.121 4.121 0 0 1 6.142 0l1.791 2a1.75 1.75 0 1 0 2.609-2.333l-1.791-2a7.622 7.622 0 0 0 -11.36 0l-1.791 2a1.75 1.75 0 0 0 2.609 2.333z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#888888"/></g> </svg>

									</span>
									<select name="job_role" class="poupSelectMenu valid" aria-invalid="false">
										<option value="Job Role">Job Role</option>
										<option value="CXOs/VP/Director">CXOs/VP/Director</option>
										<option value="HR Professional">HR Professional</option>
										<option value="Manager">Manager</option>
										<option value="Individual Contributor">Individual Contributor</option>
										<option value="Student">Student</option>
										<option value="Others">Others</option>
									</select>
									<!-- <select name="job_role" class="poupSelectMenu">
										<?php $job_role=get_field('job_role','option'); ?>
										<?php if($job_role['job_role_'.$current_language]){
											foreach ($job_role['job_role_'.$current_language] as $key => $value) {
												?>
													<option value="<?php echo $value['job_title']; ?>"><?php echo $value['job_title']; ?></option>
												<?php
												}
											}
										?>
                                    </select> -->
								</div>
								<div class="inputElement col_50">
									<span class="svgImgAnim">
									<svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512 512" height="512px" viewBox="0 0 512 512" width="512px" class=""><g><g><g><g><path d="m487 444.811h-6.347v-123.851c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v123.852h-159.104v-203.88h152.975c3.38 0 6.13 2.75 6.13 6.129v38.565c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-38.565c0-11.651-9.479-21.129-21.13-21.129h-152.975v-136.294c0-10.913-8.491-20.13-19.352-21.049v-15.045c0-10.956-8.556-20.209-19.479-21.065l-194.24-15.224c-12.265-.969-22.78 8.758-22.78 21.065v12.011c-11.123.95-19.351 10.254-19.351 21.05v373.429h-6.347c-13.785 0-25 11.215-25 25s11.215 25 25 25h462c13.785 0 25-11.215 25-25s-11.215-24.999-25-24.999zm-421.302-406.49c0-3.592 3.057-6.392 6.609-6.111l194.24 15.223c3.168.249 5.65 2.933 5.65 6.111v13.863l-206.5-16.184v-12.902zm-19.351 33.061c0-3.621 3.097-6.399 6.608-6.111l232.942 18.256c3.169.249 5.651 2.933 5.651 6.111v355.173h-20.957v-107.38c0-6.826-5.553-12.379-12.379-12.379h-69.68c-6.826 0-12.379 5.553-12.379 12.379v48.653c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-46.032h64.438v104.759h-64.438v-23.664c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v23.664h-129.806zm440.653 408.429h-462c-5.514 0-10-4.486-10-10s4.486-10 10-10h462c5.514 0 10 4.486 10 10s-4.486 10-10 10z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#888888"/><path d="m75.905 162.943h30.358c7.137 0 12.943-5.806 12.943-12.942v-23.357c0-7.136-5.806-12.942-12.943-12.942h-30.358c-7.136 0-12.942 5.806-12.942 12.942v23.357c0 7.136 5.806 12.942 12.942 12.942zm2.058-34.242h26.244v19.242h-26.244z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#888888"/><path d="m151.599 162.943h30.358c7.136 0 12.942-5.806 12.942-12.942v-23.357c0-7.136-5.806-12.942-12.942-12.942h-30.358c-7.136 0-12.942 5.806-12.942 12.942v23.357c-.001 7.136 5.805 12.942 12.942 12.942zm2.057-34.242h26.243v19.242h-26.243z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#888888"/><path d="m227.292 162.943h30.358c7.137 0 12.942-5.806 12.942-12.942v-23.357c0-7.136-5.806-12.942-12.942-12.942h-30.358c-7.136 0-12.942 5.806-12.942 12.942v23.357c-.001 7.136 5.805 12.942 12.942 12.942zm2.057-34.242h26.243v19.242h-26.243z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#888888"/><path d="m75.905 230.38h30.358c7.137 0 12.943-5.806 12.943-12.942v-23.358c0-7.136-5.806-12.942-12.943-12.942h-30.358c-7.136 0-12.942 5.806-12.942 12.942v23.357c0 7.137 5.806 12.943 12.942 12.943zm2.058-34.242h26.244v19.242h-26.244z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#888888"/><path d="m151.599 230.38h30.358c7.136 0 12.942-5.806 12.942-12.942v-23.358c0-7.136-5.806-12.942-12.942-12.942h-30.358c-7.136 0-12.942 5.806-12.942 12.942v23.357c-.001 7.137 5.805 12.943 12.942 12.943zm2.057-34.242h26.243v19.242h-26.243z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#888888"/><path d="m227.292 230.38h30.358c7.137 0 12.942-5.806 12.942-12.942v-23.358c0-7.136-5.806-12.942-12.942-12.942h-30.358c-7.136 0-12.942 5.806-12.942 12.942v23.357c-.001 7.137 5.805 12.943 12.942 12.943zm2.057-34.242h26.243v19.242h-26.243z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#888888"/><path d="m75.905 297.816h30.358c7.137 0 12.943-5.806 12.943-12.942v-23.357c0-7.136-5.806-12.942-12.943-12.942h-30.358c-7.136 0-12.942 5.806-12.942 12.942v23.357c0 7.136 5.806 12.942 12.942 12.942zm2.058-34.242h26.244v19.242h-26.244z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#888888"/><path d="m144.551 325.052h-67.188c-7.94 0-14.4 6.46-14.4 14.4v20.442c0 7.94 6.46 14.4 14.4 14.4h67.188c7.94 0 14.4-6.46 14.4-14.4v-20.442c0-7.94-6.46-14.4-14.4-14.4zm-.6 34.242h-65.988v-19.242h65.988z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#888888"/><path d="m151.599 297.816h30.358c7.136 0 12.942-5.806 12.942-12.942v-23.357c0-7.136-5.806-12.942-12.942-12.942h-30.358c-7.136 0-12.942 5.806-12.942 12.942v23.357c-.001 7.136 5.805 12.942 12.942 12.942zm2.057-34.242h26.243v19.242h-26.243z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#888888"/><path d="m227.292 297.816h30.358c7.137 0 12.942-5.806 12.942-12.942v-23.357c0-7.136-5.806-12.942-12.942-12.942h-30.358c-7.136 0-12.942 5.806-12.942 12.942v23.357c-.001 7.136 5.805 12.942 12.942 12.942zm2.057-34.242h26.243v19.242h-26.243z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#888888"/><path d="m380.573 291.297c0-7.607-6.189-13.797-13.797-13.797h-30.628c-7.607 0-13.797 6.189-13.797 13.797v24.293c0 7.607 6.189 13.797 13.797 13.797h30.628c7.607 0 13.797-6.189 13.797-13.797zm-15 23.09h-28.222v-21.887h28.222z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#888888"/><path d="m366.776 346.717h-30.628c-7.607 0-13.797 6.189-13.797 13.797v24.293c0 7.607 6.189 13.797 13.797 13.797h30.628c7.607 0 13.797-6.189 13.797-13.797v-24.293c0-7.608-6.189-13.797-13.797-13.797zm-1.203 36.887h-28.222v-21.887h28.222z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#888888"/><path d="m450.333 291.297c0-7.607-6.189-13.797-13.797-13.797h-30.627c-7.607 0-13.797 6.189-13.797 13.797v24.293c0 7.607 6.189 13.797 13.797 13.797h30.627c7.607 0 13.797-6.189 13.797-13.797zm-15 23.09h-28.221v-21.887h28.221z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#888888"/><path d="m436.536 346.717h-30.627c-7.607 0-13.797 6.189-13.797 13.797v24.293c0 7.607 6.189 13.797 13.797 13.797h30.627c7.607 0 13.797-6.189 13.797-13.797v-24.293c0-7.608-6.189-13.797-13.797-13.797zm-1.203 36.887h-28.221v-21.887h28.221z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#888888"/></g></g></g></g> </svg>

									</span>
									<input name="company" autocomplete="off" type="text" class="alphNumericOnly" value="" size="30" placeholder="Company">
								</div>
						<div class="inputElement col_100">
							<textarea name="message" class="" placeholder="Tell Us Your requirement " cols="45" rows="8" aria-required="true"></textarea>
						</div>
						<div class="inputElement col_100 checkboxHolder">
						
							<div for="LEGAL_CONSENT.subscription_type_3267097-d565501c-a726-45b9-8213-ffda2700eff6" ><input type="checkbox" name="LEGAL_CONSENT.subscription_type_3267097" value="true" ><span>I underestand how Mettl will use my data.</span></div>

						</div>
						<input type="hidden" name="ads_cmpid" value="<?php echo (isset($_GET['ads_cmpid'])?addslashes($_GET['ads_cmpid']):'null'); ?>">
						<input type="hidden" name="ads_adid" value="<?php echo (isset($_GET['ads_adid'])?addslashes($_GET['ads_adid']):'null'); ?>">
						<input type="hidden" name="ads_targetid" value="<?php echo (isset($_GET['ads_targetid'])?addslashes($_GET['ads_targetid']):'null'); ?>">
						<input type="hidden" name="ads_network" value="<?php echo (isset($_GET['ads_network'])?addslashes($_GET['ads_network']):'null'); ?>">
						<input type="hidden" name="ads_creative" value="<?php echo (isset($_GET['ads_creative'])?addslashes($_GET['ads_creative']):'null'); ?>">
						<input type="hidden" name="ads_kw_term" value="<?php echo (isset($_GET['ads_kw_term'])?addslashes($_GET['ads_kw_term']):'null'); ?>">
						<input type="hidden" name="ads_adposition" value="<?php echo (isset($_GET['ads_adposition'])?addslashes($_GET['ads_adposition']):'null'); ?>">
						<input type="hidden" name="gclid" value="<?php echo (isset($_GET['gclid'])?addslashes($_GET['gclid']):'null'); ?>">
						<input type="hidden" name="opt_click" value="<?php echo (isset($_GET['opt_click'])?addslashes($_GET['opt_click']):'null'); ?>">
						<input type="hidden" name="utm_source" value="<?php echo (isset($_GET['utm_source'])?addslashes($_GET['utm_source']):'null'); ?>">
						<input type="hidden" name="utm_medium" value="<?php echo (isset($_GET['utm_medium'])?addslashes($_GET['utm_medium']):'null'); ?>">
						<input type="hidden" name="utm_campaign" value="<?php echo (isset($_GET['utm_campaign'])?addslashes($_GET['utm_campaign']):'null'); ?>">
						<input type="hidden" name="utm_content" value="<?php echo (isset($_GET['utm_content'])?addslashes($_GET['utm_content']):'null'); ?>"> 

						<div class="inputElement col_100 bottomBtnHolder">
							<input type="submit" class="submitCta btn-submit" value="Drop Query">
						</div>
						<div class="errorMsg"></div>
						<div class="thankYouMsg" style="display: none;">Thank you. We will get back to you shortly.</div>
					</form>

			    	<p>By using our offerings and services, you are agreeing to the Terms of Services and License Agreement and understand that your use and access will be subject to the terms and conditions and Privacy Notice </p>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
get_footer();
?>
<script src="<?php bloginfo('template_directory');?>/js/validate.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#form-drop-query").validate({
		<?php $please_enter_your_name=get_field('please_enter_your_name','option');
        ?>
        <?php $please_enter_email_address=get_field('please_enter_email_address','option');
        ?>
        <?php $please_enter_valid_email_address=get_field('please_enter_valid_email_address','option');
        ?>
        <?php $this_field_is_required=get_field('this_field_is_required','option');
        ?>
            rules: {
                firstname: {
                    required: true,
                    minlength: 2,
                    maxlength: 150,
                },
                email: {
                    required: true,
                    emailfull: true,
                },
                phone:{
                    required: true,
                }
            },
            messages: {
	            firstname: {
	                required: "Please Enter your name",
	            },
	            email: {
	                required: "Please Enter Your Email Address",
	                emailfull: "Please Enter Your Valid Email Address",
	            },
	            phone: {
	                required: "This field is required",
	            },
	        },
        submitHandler: function(form) {
            
            var $this=$(form);
            var data= $(form).serializeArray();
            $this.find(".btn-submit").attr("disabled", "disabled");

            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                url: "https://api.hsforms.com/submissions/v3/integration/submit/3030863/b604c52d-1ba6-456d-b669-990ccac77681",
                data: JSON.stringify({
                    "submittedAt": new Date().getTime(),
                    "fields": data,
                    "legalConsentOptions": {
                        "consent": {
                            "consentToProcess": true,
                            "text": "I agree to allow Example Company to store and process my personal data.",
                            "communications": [{
                                "value": true,
                                "subscriptionTypeId": 999,
                                "text": "I agree to receive marketing communications from Example Company."
                            }]
                        }
                    }
                }),
                success: function(result) {
         			$this.find(".error").html("");
                	$this.find(".btn-submit").removeAttr("disabled");
                    $this.parent().find(".thankYouMsg").show();


                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                     var err = JSON.parse(XMLHttpRequest.responseText);
                    // console.log(err); 
                    var msg=err.message;

                    if(err.errors){
                      if(err.errors.length>0){
                        if(err.errors[0].errorType=="INVALID_EMAIL"){
                        msg="This is not valid email address.";
                        }
                      }

                    }

                    $this.find(".errorMsg").html(msg);
                    $this.find(".btn-submit").removeAttr("disabled");

                }
            })
        }

        });
    });
</script>