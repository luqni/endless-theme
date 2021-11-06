<?php

Route::view('/builder-menu', 'builder-menu.builder-menu')->name('builder-menu');
Route::post('/jsonpost', 'JsonController@ajaxRequestPost');
Route::get('download-menu','JsonController@json_download')->name('array'); 
Route::view('/blade-components', 'blade-components.blade-components')->name('blade-components');

Route::view('/', 'dashboards.dashboard-default')->name('/');

Route::prefix('dashboard')->group(function () {  
  Route::view('/default', 'dashboards.dashboard-default')->name('default');
  Route::view('/e-commerce', 'dashboards.dashboard-e-commerce')->name('e-commerce');
  Route::view('/university', 'dashboards.dashboard-university')->name('university');
  Route::view('/crypto', 'dashboards.dashboard-crypto')->name('crypto');
  Route::view('/server', 'dashboards.dashboard-server')->name('server');
  Route::view('/project', 'dashboards.dashboard-project')->name('project');
});

Route::prefix('widgets')->group(function () {  
  Route::view('/general-widget', 'widgets.general-widget')->name('general-widget');
  Route::view('/chart-widget', 'widgets.chart-widget')->name('chart-widget');
});

Route::prefix('base')->group(function () {  
  Route::view('/state-color', 'base.state-color')->name('state-color');
  Route::view('/typography', 'base.typography')->name('typography');
  Route::view('/avatars', 'base.avatars')->name('avatars');
  Route::view('/helper-classes', 'base.helper-classes')->name('helper-classes');
  Route::view('/grid', 'base.grid')->name('grid');
  Route::view('/tag-pills', 'base.tag-pills')->name('tag-pills');
  Route::view('/progress-bar', 'base.progress-bar')->name('progress-bar');
  Route::view('/modal', 'base.modal')->name('modal');
  Route::view('/alert', 'base.alert')->name('alert');
  Route::view('/popover', 'base.popover')->name('popover');
  Route::view('/tooltip', 'base.tooltip')->name('tooltip');
  Route::view('/loader', 'base.loader')->name('loader');
  Route::view('/dropdown', 'base.dropdown')->name('dropdown');
  Route::view('/tab-bootstrap', 'base.tab-bootstrap')->name('tab-bootstrap');
  Route::view('/tab-material', 'base.tab-material')->name('tab-material');
  Route::view('/popover', 'base.popover')->name('popover');
  Route::view('/tooltip', 'base.tooltip')->name('tooltip');
  Route::view('/loader', 'base.loader')->name('loader');
  Route::view('/dropdown', 'base.dropdown')->name('dropdown');
  Route::view('/tab-bootstrap', 'base.tab-bootstrap')->name('tab-bootstrap');
  Route::view('/tab-material', 'base.tab-material')->name('tab-material');
  Route::view('/according', 'base.according')->name('according');
  Route::view('/navs', 'base.navs')->name('navs');
  Route::view('/box-shadow', 'base.box-shadow')->name('box-shadow');
  Route::view('/list', 'base.list')->name('list');
});

Route::prefix('advance')->group(function () {
  Route::view('/scrollable', 'advance.scrollable')->name('scrollable');
  Route::view('/tree', 'advance.tree')->name('tree');
  Route::view('/bootstrap-notify', 'advance.bootstrap-notify')->name('bootstrap-notify');
  Route::view('/rating', 'advance.rating')->name('rating');
  Route::view('/dropzone', 'advance.dropzone')->name('dropzone');
  Route::view('/tour', 'advance.tour')->name('tour');
  Route::view('/sweet-alert2', 'advance.sweet-alert2')->name('sweet-alert2');
  Route::view('/modal-animated', 'advance.modal-animated')->name('modal-animated');
  Route::view('/owl-carousel', 'advance.owl-carousel')->name('owl-carousel');
  Route::view('/ribbons', 'advance.ribbons')->name('ribbons');
  Route::view('/pagination', 'advance.pagination')->name('pagination');
  Route::view('/steps', 'advance.steps')->name('steps');
  Route::view('/breadcrumb', 'advance.breadcrumb')->name('breadcrumb');
  Route::view('/range-slider', 'advance.range-slider')->name('range-slider');
  Route::view('/image-cropper', 'advance.image-cropper')->name('image-cropper');
  Route::view('/sticky', 'advance.sticky')->name('sticky');
});

Route::prefix('animation')->group(function () {
  Route::view('/animate', 'animation.animate')->name('animate');
  Route::view('/scroll-reveal', 'animation.scroll-reveal')->name('scroll-reveal');
  Route::view('/aos', 'animation.aos')->name('aos');
  Route::view('/tilt', 'animation.tilt')->name('tilt');
  Route::view('/wow', 'animation.wow')->name('wow');
});

Route::prefix('icons')->group(function () {
  Route::view('/flag-icon', 'icons.flag-icon')->name('flag-icon');
  Route::view('/font-awesome', 'icons.font-awesome')->name('font-awesome');
  Route::view('/ico-icon', 'icons.ico-icon')->name('ico-icon');
  Route::view('/themify-icon', 'icons.themify-icon')->name('themify-icon');
  Route::view('/feather-icon', 'icons.feather-icon')->name('feather-icon');
  Route::view('/whether-icon', 'icons.whether-icon')->name('whether-icon');
  
});

Route::prefix('buttons')->group(function () {
  Route::view('/buttons', 'buttons.buttons')->name('buttons');
  Route::view('/buttons-flat', 'buttons.buttons-flat')->name('buttons-flat');
  Route::view('/buttons-edge', 'buttons.buttons-edge')->name('buttons-edge');
  Route::view('/raised-button', 'buttons.raised-button')->name('raised-button');
  Route::view('/button-group', 'buttons.button-group')->name('button-group');
});

Route::prefix('form-controls')->group(function () {    
  Route::view('/form-validation', 'forms.form-controls.form-validation')->name('form-validation');
  Route::view('/base-input', 'forms.form-controls.base-input')->name('base-input');
  Route::view('/radio-checkbox-control', 'forms.form-controls.radio-checkbox-control')->name('radio-checkbox-control');
  Route::view('/input-group', 'forms.form-controls.input-group')->name('input-group');
  Route::view('/megaoptions', 'forms.form-controls.megaoptions')->name('megaoptions');
});

Route::prefix('form-widgets')->group(function () {
  Route::view('/datepicker', 'forms.form-widgets.datepicker')->name('datepicker');
  Route::view('/time-picker', 'forms.form-widgets.time-picker')->name('time-picker');
  Route::view('/datetimepicker', 'forms.form-widgets.datetimepicker')->name('datetimepicker');
  Route::view('/daterangepicker', 'forms.form-widgets.daterangepicker')->name('daterangepicker');
  Route::view('/touchspin', 'forms.form-widgets.touchspin')->name('touchspin');
  Route::view('/select2', 'forms.form-widgets.select2')->name('select2');
  Route::view('/switch', 'forms.form-widgets.switch')->name('switch');
  Route::view('/typeahead', 'forms.form-widgets.typeahead')->name('typeahead');
  Route::view('/clipboard', 'forms.form-widgets.clipboard')->name('clipboard');
});

Route::prefix('form-layout')->group(function () {
  Route::view('/default-form', 'forms.form-layout.default-form')->name('default-form');
  Route::view('/form-wizard', 'forms.form-layout.form-wizard')->name('form-wizard');
  Route::view('/form-wizard-two', 'forms.form-layout.form-wizard-two')->name('form-wizard-two');
  Route::view('/form-wizard-three', 'forms.form-layout.form-wizard-three')->name('form-wizard-three');
  Route::view('/form-wizard-four', 'forms.form-layout.form-wizard-four')->name('form-wizard-four');
});

Route::prefix('bootstrap-tables')->group(function () {
  Route::view('/bootstrap-basic-table', 'tables.bootstrap-tables.bootstrap-basic-table')->name('bootstrap-basic-table');
  Route::view('/bootstrap-sizing-table', 'tables.bootstrap-tables.bootstrap-sizing-table')->name('bootstrap-sizing-table');
  Route::view('/bootstrap-border-table', 'tables.bootstrap-tables.bootstrap-border-table')->name('bootstrap-border-table');
  Route::view('/bootstrap-styling-table', 'tables.bootstrap-tables.bootstrap-styling-table')->name('bootstrap-styling-table');
  Route::view('/table-components', 'tables.bootstrap-tables.table-components')->name('table-components');
});

Route::prefix('data-tables')->group(function () {
  Route::view('/datatable-basic-init', 'tables.data-tables.datatable-basic-init')->name('datatable-basic-init');
  Route::view('/datatable-advance', 'tables.data-tables.datatable-advance')->name('datatable-advance');
  Route::view('/datatable-styling', 'tables.data-tables.datatable-styling')->name('datatable-styling');
  Route::view('/datatable-ajax', 'tables.data-tables.datatable-ajax')->name('datatable-ajax');
  Route::view('/datatable-server-side', 'tables.data-tables.datatable-server-side')->name('datatable-server-side');
  Route::view('/datatable-plugin', 'tables.data-tables.datatable-plugin')->name('datatable-plugin');
  Route::view('/datatable-api', 'tables.data-tables.datatable-api')->name('datatable-api');
  Route::view('/datatable-data-source', 'tables.data-tables.datatable-data-source')->name('datatable-data-source');
});   

Route::prefix('extension-data-tables')->group(function () {
  Route::view('/datatable-ext-autofill', 'tables.extension-data-tables.datatable-ext-autofill')->name('datatable-ext-autofill');
  Route::view('/datatable-ext-basic-button', 'tables.extension-data-tables.datatable-ext-basic-button')->name('datatable-ext-basic-button');
  Route::view('/datatable-ext-col-reorder', 'tables.extension-data-tables.datatable-ext-col-reorder')->name('datatable-ext-col-reorder');
  Route::view('/datatable-ext-fixed-header', 'tables.extension-data-tables.datatable-ext-fixed-header')->name('datatable-ext-fixed-header');
  Route::view('/datatable-ext-html-5-data-export', 'tables.extension-data-tables.datatable-ext-html-5-data-export')->name('datatable-ext-html-5-data-export');
  Route::view('/datatable-ext-key-table', 'tables.extension-data-tables.datatable-ext-key-table')->name('datatable-ext-key-table');
  Route::view('/datatable-ext-responsive', 'tables.extension-data-tables.datatable-ext-responsive')->name('datatable-ext-responsive');
  Route::view('/datatable-ext-row-reorder', 'tables.extension-data-tables.datatable-ext-row-reorder')->name('datatable-ext-row-reorder');
  Route::view('/datatable-ext-scroller', 'tables.extension-data-tables.datatable-ext-scroller')->name('datatable-ext-scroller');
  
});

Route::prefix('tables')->group(function () {
  Route::view('/jsgrid-table', 'tables.jsgrid-table')->name('jsgrid-table');
});
Route::prefix('cards')->group(function () {
  Route::view('/basic-card', 'cards.basic-card')->name('basic-card');
  Route::view('/creative-card', 'cards.creative-card')->name('creative-card');
  Route::view('/tabbed-card', 'cards.tabbed-card')->name('tabbed-card');
  Route::view('/dragable-card', 'cards.dragable-card')->name('dragable-card');
});

Route::prefix('timeline')->group(function () {
  Route::view('/timeline-v-1', 'timeline.timeline-v-1')->name('timeline-v-1');
  Route::view('/timeline-v-2', 'timeline.timeline-v-2')->name('timeline-v-2');
  Route::view('/timeline-small', 'timeline.timeline-small')->name('timeline-small');
});

Route::prefix('charts')->group(function () {
  Route::view('/chart-google', 'charts.chart-google')->name('chart-google');
  Route::view('/chart-sparkline', 'charts.chart-sparkline')->name('chart-sparkline');
  Route::view('/chart-flot', 'charts.chart-flot')->name('chart-flot');
  Route::view('/chart-knob', 'charts.chart-knob')->name('chart-knob');
  Route::view('/chart-morris', 'charts.chart-morris')->name('chart-morris');
  Route::view('/chartjs', 'charts.chartjs')->name('chartjs');
  Route::view('/chartist', 'charts.chartist')->name('chartist');
  Route::view('/chart-peity', 'charts.chart-peity')->name('chart-peity');
});   

Route::prefix('maps')->group(function () {
  Route::view('/map-js', 'maps.map-js')->name('map-js');
  Route::view('/vector-map', 'maps.vector-map')->name('vector-map');
});

Route::prefix('email-template/basic')->group(function () {
  Route::view('/basic-template', 'email-template.basic.basic-template')->name('basic-template');
  Route::view('/email-header', 'email-template.basic.email-header')->name('email-header');
});

Route::prefix('email-template/ecommerce')->group(function () {
  Route::view('/template-email', 'email-template.ecommerce.template-email')->name('template-email');
  Route::view('/template-email-2', 'email-template.ecommerce.template-email-2')->name('template-email-2');
  Route::view('/ecommerce-templates', 'email-template.ecommerce.ecommerce-templates')->name('ecommerce-templates');
  Route::view('/email-order-success', 'email-template.ecommerce.email-order-success')->name('email-order-success');
});

Route::prefix('editors')->group(function () {
  Route::view('/summernote', 'editors.summernote')->name('summernote');
  Route::view('/ckeditor', 'editors.ckeditor')->name('ckeditor');
  Route::view('/simple-mde', 'editors.simple-mde')->name('simple-mde');
  Route::view('/ace-code-editor', 'editors.ace-code-editor')->name('ace-code-editor');
});

Route::prefix('users')->group(function () {
  Route::view('/user-profile', 'users.user-profile')->name('user-profile');
  Route::view('/edit-profile', 'users.edit-profile')->name('edit-profile');
  Route::view('/user-cards', 'users.user-cards')->name('user-cards');
});

Route::prefix('calender')->group(function () {
  Route::view('/calendar', 'calender.calendar')->name('calendar');
  Route::view('/calendar-event', 'calender.calendar-event')->name('calendar-event');
  Route::view('/calendar-advanced', 'calender.calendar-advanced')->name('calendar-advanced');
});

Route::view('/internationalization', 'internationalization.internationalization')->name('internationalization');

Route::prefix('gallery')->group(function () {
  Route::view('/gallery', 'gallery.gallery')->name('gallery');
  Route::view('/gallery-with-description', 'gallery.gallery-with-description')->name('gallery-with-description');
  Route::view('/masonry-gallery', 'gallery.masonry-gallery')->name('masonry-gallery');
  Route::view('/masonry-gallery-with-disc', 'gallery.masonry-gallery-with-disc')->name('masonry-gallery-with-disc');
  Route::view('/gallery-hover', 'gallery.gallery-hover')->name('gallery-hover');
});

Route::prefix('email')->group(function () {
  Route::view('/email-application', 'email.email-application')->name('email-application');
  Route::view('/email-compose', 'email.email-compose')->name('email-compose');
});

Route::prefix('blog')->group(function () {
  Route::view('/blog', 'blog.blog')->name('blog');
  Route::view('/blog-single', 'blog.blog-single')->name('blog-single');
  Route::view('/add-post', 'blog.add-post')->name('add-post');

});

Route::prefix('chat')->group(function () {
  Route::view('/chat', 'chat.chat')->name('chat');
  Route::view('/call-chat', 'chat.call-chat')->name('call-chat');
});

Route::view('social-app', 'social.social-app')->name('social-app');

Route::prefix('job-search')->group(function () {
  Route::view('/job-cards-view', 'job-search.job-cards-view')->name('job-cards-view');
  Route::view('/job-list-view', 'job-search.job-list-view')->name('job-list-view');
  Route::view('/job-details', 'job-search.job-details')->name('job-details');
  Route::view('/job-apply', 'job-search.job-apply')->name('job-apply');
});

Route::prefix('learning')->group(function () {
  Route::view('/learning-list-view', 'learning.learning-list-view')->name('learning-list-view');
  Route::view('/learning-detailed', 'learning.learning-detailed')->name('learning-detailed');
});

Route::view('/faq', 'faq.faq')->name('faq');
Route::view('/knowledgebase', 'knowledgebase.knowledgebase')->name('knowledgebase');
Route::view('/support-ticket', 'support-ticket.support-ticket')->name('support-ticket');
Route::view('/to-do', 'to-do.to-do')->name('to-do');

Route::prefix('ecommerce')->group(function () {
  Route::view('/product', 'ecommerce.product')->name('product');
  Route::view('/product-page', 'ecommerce.product-page')->name('product-page');
  Route::view('/product-list', 'ecommerce.product-list')->name('product-list');
  Route::view('/payment-details', 'ecommerce.payment-details')->name('payment-details');
  Route::view('/order-history', 'ecommerce.order-history')->name('order-history');
  Route::view('/invoice-template', 'ecommerce.invoice-template')->name('invoice-template');
  Route::view('/cart', 'ecommerce.cart')->name('cart');
  Route::view('/list-wish', 'ecommerce.list-wish')->name('list-wish');
  Route::view('/checkout', 'ecommerce.checkout')->name('checkout');
  
});

Route::view('/pricing', 'pricing.pricing')->name('pricing');
Route::view('/sample-page', 'sample-page.sample-page')->name('sample-page');

Route::prefix('search-pages')->group(function () {
  Route::view('/search', 'search-pages.search')->name('search');
  Route::view('/search-images', 'search-pages.search-images')->name('search-images');
  Route::view('/search-video', 'search-pages.search-video')->name('search-video');
});

Route::prefix('errors')->group(function () {
  Route::view('/400', 'errors.400')->name('400');
  Route::view('/401', 'errors.401')->name('401');
  Route::view('/403', 'errors.403')->name('403');
  Route::view('/404', 'errors.404')->name('404');
  Route::view('/500', 'errors.500')->name('500');
  Route::view('/503', 'errors.503')->name('503');
});

Route::prefix('authentication')->group(function () {
  Route::view('/login', 'authentication.login')->name('login');
  Route::view('/login-image', 'authentication.login-image')->name('login-image');
  Route::view('/login-video', 'authentication.login-video')->name('login-video');
  Route::view('/signup', 'authentication.signup')->name('signup');
  Route::view('/signup-image', 'authentication.signup-image')->name('signup-image');
  Route::view('/signup-video', 'authentication.signup-video')->name('signup-video');
  Route::view('/unlock', 'authentication.unlock')->name('unlock');
  Route::view('/forget-password', 'authentication.forget-password')->name('forget-password');
  Route::view('/reset-password', 'authentication.reset-password')->name('reset-password');

});

Route::prefix('coming-soon')->group(function () {
  Route::view('/comingsoon', 'coming-soon.comingsoon')->name('comingsoon');
  Route::view('/comingsoon-bg-img', 'coming-soon.comingsoon-bg-img')->name('comingsoon-bg-img');
  Route::view('/comingsoon-bg-video', 'coming-soon.comingsoon-bg-video')->name('comingsoon-bg-video');
});

Route::view('/maintenance', 'maintenance.maintenance')->name('maintenance');


Route::get('/clear-cache', function() {
  $exitCode = Artisan::call('config:clear');
  $exitCode = Artisan::call('cache:clear');
  $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});