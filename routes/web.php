<?php

Route::get('/android/{id}', 'AddonController@manualLogin');
Route::get('/show-service-details/{id}', 'HomeController@show_service_details')->name('show_service_details');

Route::get('/refresh-csrf', function(){
    return csrf_token();
});

Route::get('fullcalender', [HomeController::class, 'dashboard'])->name('full_calender');

Route::get('/sub_menu', 'HomeController@sub_menu')->name('sub_menu');

Route::resource('matter', 'MatterShareController');
Route::get('/product-details/{id}', 'HomeController@product_details')->name('product_details');
Route::get('/service-details/{id}', 'HomeController@service_details')->name('service_details');
Route::get('/filter-category/{id}/{service_id}', 'ServiceController@filter_category_with_service')->name('filter_category_with_service');
Route::get('/filter-category/{id}', 'ServiceController@filter_category_by_service')->name('filter_category');

Route::post('/save-image', 'CommonController@image_save')->name("image-upload");

Route::post('ckeditor/image_upload', [CommonController::class, 'upload'])->name('upload');

Route::post('/aiz-uploader', 'AizUploadController@show_uploader');
Route::post('/aiz-uploader/upload', 'AizUploadController@upload');
Route::get('/aiz-uploader/get_uploaded_files', 'AizUploadController@get_uploaded_files');
Route::delete('/aiz-uploader/destroy/{id}', 'AizUploadController@destroy');
Route::post('/aiz-uploader/get_file_by_ids', 'AizUploadController@get_preview_files');
Route::get('/aiz-uploader/download/{id}', 'AizUploadController@attachment_download')->name('download_attachment');

// Subscribe
Route::resource('subscribers', 'SubscriberController');

Route::get('invite', 'Auth\RegisterController@referral')->name('auth.invite');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::match(['get', 'post'], '/', 'HomeController@index')->name('home');

Route::post('aamarpay_payment_url', 'AamarPayController@aamarpay_payment_url')->name('aamarpay_payment_url');
Route::post('payment/success', 'AamarPayController@paymentSuccessOrFailed')->name('payment.success');
Route::post('payment/failed', 'AamarPayController@paymentSuccessOrFailed')->name('payment.failed');
Route::post('payment/cancel', 'AamarPayController@paymentSuccessOrFailed')->name('payment.cancel');

//Api Login form Phone

Auth::routes(['verify' => true]);
Route::get('/admin/login', 'HomeController@admin_login')->name('admin.login');
Route::get('/users/login', 'HomeController@login')->name('user.login');
//sociallite login
Route::get('/social-login/redirect/{provider}', 'Auth\LoginController@redirectToProvider')->name('social.login');
Route::get('/social-login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('social.callback');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/language/{locale}', 'LanguageController@changeLanguage')->name('language.change');
Route::match(['get', 'post'], '/package-select', 'PackageController@select_package')->name('select_package');
Route::get('/check', 'UserController@userOnlineStatus');

Route::post('/user-name-check', 'HomeController@user_name_check')->name('user_name_check');
Route::post('/cities/get_city_by_country', 'CityController@get_city_by_country')->name('cities.get_city_by_country');
Route::post('/get_category_by_subcategory', 'HomeController@get_category_by_subcategory')->name('get_category.subcategory');

Route::post('/user-account-type', 'UserController@set_account_type')->name('user.account.type');

//Blog Section
Route::get('/blog', 'BlogController@all_blog')->name('blog');
Route::get('/blog/{slug}', 'BlogController@blog_details')->name('blog.details');

Route::group(['middleware' => ['user']], function(){
    Route::post('/package/get-package-purchase-modal', 'PackageController@get_package_purchase_modal')->name('get_package_purchase_modal');
    Route::get('/packages/free-package-purchase/{id}', 'PackageController@package_purchase_free')->name('package_purchase_free');

    Route::post('/packages/get-package-purchase-modal', 'ProjectController@get_bid_modal')->name('get_bid_for_project_modal');

	//Purchase PackagePayment
	Route::post('purchase-package/payment', 'PackagePaymentController@purchase_package')->name('purchase_package');

    Route::get('send-verification-request', 'HomeController@send_email_verification_request')->name('email.verification');
    Route::get('verification-confirmation/{code}', 'HomeController@verification_confirmation')->name('email.verification.confirmation');
});

Route::group(['middleware' => ['user', 'packagePurchased']], function(){

	Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    Route::get('/referral', 'ReferralController@index')->name('referral');
	Route::get('/projects/running-project', 'ProjectController@my_running_project')->name('projects.my_running_project');
	Route::get('/projects/completed-project', 'ProjectController@my_completed_project')->name('projects.my_completed_project');
	Route::get('/projects/cancelled-project', 'ProjectController@my_cancelled_project')->name('projects.my_cancelled_project');
	Route::get('/projects/cancel-project-request/{id}', 'ProjectController@project_cancel')->name('projects.cancel');

	Route::post('cancel-project-request/store', 'CancelProjectController@store')->name('cancel-project-request.store');

	Route::get('/profile-settings', 'ProfileController@user_profile')->name('user.profile');
	Route::get('/profile-show', 'ProfileController@profile_show')->name('user.profile.show');
	Route::post('/profile-settings/basic-info-update', 'ProfileController@basic_info_update')->name('user_profile.basic_info_update');
	Route::post('/profile-settings/photo-update', 'ProfileController@photo_update')->name('user_profile.photo_update');
	Route::match(['get', 'post', 'put', 'PATCH'], '/profile-settings/user_update', 'ProfileController@user_update')->name('user_profile.user_update');
	Route::match(['get', 'post', 'put', 'PATCH'], '/profile-settings/profile_update', 'ProfileController@profile_update')->name('user_profile.profile_update');
	Route::match(['get', 'post', 'put', 'PATCH'], '/profile-settings/address_update', 'ProfileController@address_update')->name('user_profile.address_update');
	Route::match(['get', 'post', 'put', 'PATCH'], '/profile-settings/bio-update', 'ProfileController@bio_update')->name('user_profile.bio_update');
	Route::post('/profile-settings/verification-update', 'VerificationController@verification_store')->name('user_profile.verification_store');


	Route::post('/interview-chat', 'ChatController@index')->name('call_for_interview');
	Route::post('/chat-reply', 'ChatController@chat_reply')->name('chat.reply');

	Route::get('/chat', 'ChatController@chat_index')->name('all.messages');
	Route::get('/single-chat/{id}', 'ChatController@chat_view')->name('chat_view');
	Route::get('/chat/refresh/{id}', 'ChatController@chat_refresh')->name('chat_refresh');
    Route::post('/chat/old-messages', 'ChatController@get_old_messages')->name('get-old-message');

	//hire from interview
    Route::get('/hiring-invitation/reject{id}', 'HireController@reject')->name('hiring.reject');
	Route::post('/hiring-confirmation-store', 'HireController@hire')->name('hiring_confirmation_store');

	//milestone message showing exampleModalLabel
	Route::post('/milestone-requests-message', 'MilestonePaymentController@milestone_request_message')->name('milestone_request_message_show_modal');

	//walletController
	Route::get('wallet-history', 'WalletController@user_index')->name('wallet_user_index');
	Route::post('wallet-recharge', 'WalletController@rechage')->name('wallet_recharge');

	Route::get('/expert/packages/history', 'PackagePaymentController@expert_package_purchase_history_index')->name('expert.packages.history');
	Route::get('/client/packages/history', 'PackagePaymentController@expert_package_purchase_history_index')->name('client.packages.history');

	Route::get('/user-reviews/{type}', 'ReviewController@review_index')->name('user_review');

	//reviews
	Route::post('/reviews/store', 'ReviewController@store')->name('reviews.store');

	Route::get('/notifications','NotificationController@frontend_listing')->name('frontend.notifications');
});

// Client middleware
Route::group(['middleware' => ['auth', 'packagePurchased']], function(){
	Route::resource('/projects', 'ProjectController');
	Route::get('/my-open-projects', 'ProjectController@my_open_project')->name('projects.my_open_project');
	Route::get('/project-bids/{slug}', 'ProjectController@project_bids')->name('project.bids');
	Route::get('/invition-for-hire-expert/{username}', 'HireController@expert_invition')->name('invition_for_hire_expert');
	Route::post('/invition-for-hire-expert/store', 'HireController@store')->name('invition_for_hire_expert_sent');

	//Milestone payment
	Route::get('/recieved-milestone-requests', 'MilestonePaymentController@recieved_milestone_request_index')->name('milestone-requests.all');
	Route::post('/milestone-payment-select-modal', 'MilestonePaymentController@show_payment_select_modal')->name('show_payment_select_modal');
	Route::post('/milestone-payment', 'MilestonePaymentController@index')->name('milestone.pay_to_admin');

	//project completed
	Route::get('/project-done/{id}', 'ProjectController@project_done')->name('projects.complete');

    Route::resource('bookmarked-experts', 'BookmarkedexpertController');
    Route::get('/bookmarked-experts/store/{id}', 'BookmarkedexpertController@store')->name('bookmarked-experts.store');
	Route::get('/bookmarked-experts/destroy/{id}', 'BookmarkedexpertController@destroy')->name('bookmarked-experts.destroy');
	Route::get('/client/purchased-services', 'ServiceController@client_purchased_services')->name('client.purchased.services');


    Route::get('/service/{id}/cancel', 'ServiceController@cancel_service')->name('services.cancel');
	Route::post('/service/cancel/store', 'ServiceController@cancel_service_store')->name('services.cancel.store');

	Route::get('/client/cancel-requests-services', 'ServiceController@client_cancel_requested_services')->name('client.services.cancel.requests');
	Route::get('/client/cancelled-services', 'ServiceController@client_cancelled_services')->name('client.services.cancelled');

});

Route::get('service/show/{slug}', 'ServiceController@show')->name('service.show');
Route::post('/service/package', 'ServiceController@get_service_package_purchase_modal')->name('get_package_service_modal');
Route::post('/service/package-purchase','ServiceController@purchase_service_package')->name('purchase_service_package');


// expert middleware
Route::group(['middleware' => ['auth', 'packagePurchased']], function(){
    Route::post('/bids/store', 'BiddingController@store')->name('bids.store');


	Route::get('/account-settings', 'ProfileController@user_account')->name('user.account');
	Route::post('/passupdate', 'ProfileController@passupdate')->name('passupdate');

	Route::post('/profile-settings/portfolio-add', 'PortfolioController@store')->name('user_profile.portfolio_add');
	Route::get('/profile-settings/portfolio-edit/{id}', 'PortfolioController@edit')->name('user_profile.portfolio_edit');
	Route::post('/profile-settings/portfolio-update/{id}', 'PortfolioController@update')->name('user_profile.portfolio_update');
    Route::get('/profile-settings/portfolio-delete/{id}', 'PortfolioController@destroy')->name('user_profile.portfolio_destroy');

	Route::post('/profile-settings/work-experience-add', 'WorkExperienceController@store')->name('user_profile.work_experience_add');
	Route::get('/profile-settings/work-experience-edit/{id}', 'WorkExperienceController@edit')->name('user_profile.work_experience_edit');
	Route::post('/profile-settings/work-experience-update/{id}', 'WorkExperienceController@update')->name('user_profile.work_experience_update');
    Route::get('/profile-settings/work-experience-delete/{id}', 'WorkExperienceController@destroy')->name('user_profile.work_experience_destroy');

	Route::post('/profile-settings/education-info-add', 'ExpertEducationController@store')->name('user_profile.education_info_add');
	Route::get('/profile-settings/education-info-edit/{id}', 'ExpertEducationController@edit')->name('user_profile.education_info_edit');
	Route::post('/profile-settings/education-info-update/{id}', 'ExpertEducationController@update')->name('user_profile.education_info_update');
    Route::get('/profile-settings/education-info-delete/{id}', 'ExpertEducationController@destroy')->name('user_profile.education_info_destroy');

	Route::post('/expert-account-info/store', 'ExpertAccountController@store')->name('expert_account.store');

	Route::get('/bidded-projects', 'ProjectController@bidded_projects')->name('bidded_projects');

	//Route::get('/services', 'ServiceController@index')->name('service.index');
	Route::get('/service/create', 'ServiceController@create')->name('service.create');
	Route::post('/service/store', 'ServiceController@store')->name('service.store');

	Route::get('/service/edit/{slug}', 'ServiceController@edit')->name('service.edit');
	Route::post('/service/update/{slug}', 'ServiceController@update')->name('service.update');
	Route::get('/service/destroy/{slug}', 'ServiceController@destroy')->name('service.destroy');


	Route::get('/private-projects', 'HireController@private_projects')->name('private_projects');

	//Milestone payment request sending cancel_modal
	Route::post('/partial-payment-modal', 'MilestonePaymentController@request_modal')->name('milestone_payment_request.modal');
	Route::post('/partial-payment-request-store', 'MilestonePaymentController@request_store')->name('partial_payment_request');
	Route::get('/sent-milestone-requests', 'MilestonePaymentController@sent_milestone_request_index')->name('sent-milestone-requests.all');
	Route::get('/recieved-milestone-payment', 'MilestonePaymentController@recieved_milestone_payment_index')->name('recieved_milestone_payment_index');


	//payment history
	Route::get('/send-withdrawal-request', 'PaytoExpertController@send_withdrawal_request_index')->name('send_withdrawal_request_to_admin');
	Route::get('/withdrawal-history', 'PaytoExpertController@withdrawal_history_index')->name('withdrawal_history_index');
	Route::post('/send-withdrawal-request/store', 'PaytoExpertController@send_withdrawal_request_store')->name('store_withdrawal_request_to_admin');

    Route::resource('bookmarked-projects', 'BookmarkedProjectController');
    Route::get('/bookmarked-projects/store/{id}', 'BookmarkedProjectController@store')->name('bookmarked-projects.store');
    Route::get('/bookmarked-projects/destroy/{id}', 'BookmarkedProjectController@destroy')->name('bookmarked-projects.destroy');

    Route::get('/following-clients', 'BookmarkedClientController@index')->name('bookmarked-clients.index');
    Route::get('/following-clients/store/{id}', 'BookmarkedClientController@store')->name('bookmarked-clients.store');
	Route::get('/following-clients/destroy/{id}', 'BookmarkedClientController@destroy')->name('bookmarked-clients.destroy');

	Route::get('/services', 'ServiceController@expert_index')->name('service.expert_index');
    Route::get('services/purchased', 'ServiceController@sold_services')->name('service.sold');

});

Route::get('all/services', 'ServiceController@service_index')->name('service');

Route::get('/search', 'SearchController@index')->name('search');
Route::get('/search?category={category_slug}', 'SearchController@index')->name('projects.category');
Route::get('/skills/{skill}/{type}', 'SearchController@searchBySkill')->name('search.skill');

Route::get('/project/{slug}', 'HomeController@project_details')->name('project.details');
Route::get('/private-project-details/{slug}', 'HomeController@private_project_details')->name('private_project.details');

Route::get('/project-lists', 'HomeController@all_projects')->name('projects.list');

Route::get('/client/{user_name}', 'HomeController@client_details')->name('client.details');
Route::get('/client-lists', 'HomeController@client_list')->name('client.lists');

Route::get('/expert-lists', 'HomeController@expert_list')->name('expert.lists');
Route::get('/expert/{user_name}', 'HomeController@expert_details')->name('expert.details');

Route::get('/get_expert_skills','SkillController@expert_skills')->name('get_expert_skills');

//Payments

//Paypal
Route::get('/paypal/payment/done', 'PayPalController@getDone')->name('payment.done');
Route::get('/paypal/payment/cancel', 'PayPalController@getCancel')->name('payment.cancel');

//STRIPE
Route::get('/stripe', 'StripePaymentController@index');
Route::post('/stripe/create-checkout-session', 'StripePaymentController@create_checkout_session')->name('stripe.get_token');
Route::any('/stripe/payment/callback', 'StripePaymentController@callback')->name('stripe.callback');
Route::get('/stripe/success', 'StripePaymentController@success')->name('stripe.success');
Route::get('/stripe/cancel', 'StripePaymentController@cancel')->name('stripe.cancel');

//Paystack
Route::get('/paystack/payment/callback', 'PaystackController@handleGatewayCallback');

// SSLCOMMERZ Start
Route::get('/sslcommerz/pay', 'PublicSslCommerzPaymentController@index');
Route::POST('/sslcommerz/success', 'PublicSslCommerzPaymentController@success');
Route::POST('/sslcommerz/fail', 'PublicSslCommerzPaymentController@fail');
Route::POST('/sslcommerz/cancel', 'PublicSslCommerzPaymentController@cancel');
Route::POST('/sslcommerz/ipn', 'PublicSslCommerzPaymentController@ipn');

//Instamojo
Route::get('/instamojo/payment/pay-success', 'InstamojoController@success')->name('instamojo.success');

//Paytm
Route::get('/paytm/index', 'PaytmController@index');
Route::post('/paytm/callback', 'PaytmController@callback')->name('paytm.callback');



Route::get('/{slug}', 'PageController@show_custom_page')->name('custom-pages.show_custom_page');
