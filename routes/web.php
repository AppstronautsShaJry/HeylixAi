<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\UiElementsController;
use App\Http\Controllers\UtilitiesController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\AdvanceduiController;
use App\Http\Controllers\WidgetsController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\IconsController;


// use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('', [Controller::class, 'index']);

// DASHBOARDS //
Route::get('/', [DashboardsController::class, 'index'])->name('dashboard')->middleware('auth');

//Sign up. signin
Route::get('signup', [AuthenticationController::class, 'signupBasic'])->name('signup');
Route::post('signup', [AuthenticationController::class, 'register'])->name('signup.post');

Route::get('signin', [AuthenticationController::class, 'signinCover'])->name('login');
Route::post('/signin', [AuthenticationController::class, 'login'])->name('signin.login');
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::get('auth/google', [GoogleController::class, 'redirectGoogle'])->name('login.google');
Route::get('auth/google/callback', [GoogleController::class, 'callbackGoogle'])->name('callback.google');

// Platform
Route::get('/facebook', [PlatformController::class, 'facebook'])->middleware('auth');
Route::get('/instagram', [PlatformController::class, 'instagram'])->middleware('auth');
Route::get('/twitter', [PlatformController::class, 'twitter'])->middleware('auth');
Route::get('/linkedin', [PlatformController::class, 'linkedin'])->middleware('auth');
Route::get('authFacebook', [PlatformController::class, 'authFacebook'])->middleware('auth');
Route::get('authInstagram', [PlatformController::class, 'authInstagram'])->middleware('auth');
Route::get('authTwitter', [PlatformController::class, 'authTwitter'])->middleware('auth');
Route::get('authLinkedin', [PlatformController::class, 'authLinkedin'])->middleware('auth');

Route::resource('brand_categories', App\Http\Controllers\Brand\CategoryController::class)->middleware('auth');
Route::get('/create-brand', \App\Livewire\Brand\Create::class)->name('brand.create')->middleware('auth');
Route::get('/manage-brand', \App\Livewire\Brand\Manage::class)->name('brand.manage')->middleware('auth');
Route::get('/edit-brand/{id}', \App\Livewire\Brand\Edit::class)->name('brand.edit')->middleware('auth');

// Brand
Route::get('/social-accounts', [\App\Models\SocialAccount::class, 'showSocialAccounts'])->name('social.accounts');
//Route::get('/create-brand', [BrandController::class, 'create']);
//Route::get('/manage-brand', [BrandController::class, 'manage']);
//Route::get('/edit-brand', [BrandController::class, 'edit']);



Route::get('/login/facebook', [FacebookController::class, 'redirect'])->name('facebook.login');
Route::get('/login/facebook/callback', [FacebookController::class, 'callback']);
Route::get('/facebook/pages', [FacebookController::class, 'getPages'])->name('facebook.pages');
Route::post('/facebook/post', [FacebookController::class, 'createPost'])->name('facebook.post');
Route::delete('/facebook/post/{postId}/{pageId}', [FacebookController::class, 'deletePost'])->name('facebook.post.delete');
Route::get('/admin/facebook', function () {
    return view('admin.facebook', ['pages' => App\Models\FacebookPage::all()]);
})->name('facebook.admin');
//Social
//Route::get('/calender', [SocialController::class, 'calender']);
//Route::get('/posts', [SocialController::class, 'post']);
Route::get('/calender-social', \App\Livewire\Social\Index::class)->name('calender.social');
Route::get('/posts-social', \App\Livewire\Social\Post::class)->name('posts.social');

Route::get('/create-social', \App\Livewire\Social\Create::class)->name('create.social');
Route::get('/edit-social', \App\Livewire\Social\Edit::class)->name('edit.social');

//Heylix
Route::get('/create-heylix', \App\Livewire\Heylix\Create::class)->name('create.heylix');
Route::get('/jobstatus-heylix', \App\Livewire\Heylix\Jobstatus::class)->name('jobstatus.heylix');
Route::get('/brand-heylix', \App\Livewire\Heylix\Brand::class)->name('brand.heylix');
Route::get('/virtual-heylix', \App\Livewire\Heylix\Virtual::class)->name('virtual.heylix');


//Credits
Route::get('/aicredits', \App\Livewire\Credits\Aicredits::class)->name('aicredits');
Route::get('/adcredits', \App\Livewire\Credits\Adcredits::class)->name('adcredits');

//Credits
Route::get('/meta-ads', \App\Livewire\Advertising\Meta::class)->name('meta.ads');
Route::get('/google-ads', \App\Livewire\Advertising\Google::class)->name('google.ads');
Route::get('/active-ads', \App\Livewire\Advertising\Active::class)->name('active.ads');

//Filemanager
Route::get('/filemanager-index', \App\Livewire\Filemanager\Index::class)->name('filemanager.index');
Route::get('/filemanager-generate', \App\Livewire\Filemanager\Generate::class)->name('filemanager.generate');
Route::get('/filemanager-upload', \App\Livewire\Filemanager\Upload::class)->name('filemanager.upload');
Route::get('/filemanager-heylix', \App\Livewire\Filemanager\Heylix::class)->name('filemanager.heylix');
Route::get('/filemanager-gallery', \App\Livewire\Filemanager\Gallery::class)->name('filemanager.gallery');

Route::get('/ai-tools', [DashboardsController::class, 'aiTools']);
Route::get('/advertising', [DashboardsController::class, 'advertising']);
Route::get('/seo', [DashboardsController::class, 'seo']);
Route::get('/assets', [DashboardsController::class, 'assets']);

Route::get('/website', [DashboardsController::class, 'website']);
Route::get('/analytics', [DashboardsController::class, 'analytics']);
Route::get('/credits', [DashboardsController::class, 'credits']);
Route::get('/heylix', [DashboardsController::class, 'heylix']);
Route::get('/upgrade', [DashboardsController::class, 'upgrade']);
Route::get('/support', [DashboardsController::class, 'support']);
Route::get('alerts', [UiElementsController::class, 'alerts']);

// PAGES //
//Route::get('blog', [PagesController::class, 'blog']);
//Route::get('blog-details', [PagesController::class, 'blog_details']);
//Route::get('blog-create', [PagesController::class, 'blog_create']);
//Route::get('chat', [PagesController::class, 'chat']);
//Route::get('empty', [PagesController::class, 'empty']);
//Route::get('faqs', [PagesController::class, 'faqs']);
//Route::get('filemanager', [PagesController::class, 'filemanager']);
//Route::get('invoice-create', [PagesController::class, 'invoice_create']);
//Route::get('invoice-details', [PagesController::class, 'invoice_details']);
//Route::get('invoice-list', [PagesController::class, 'invoice_list']);
//Route::get('landing', [PagesController::class, 'landing']);
//Route::get('mail-settings', [PagesController::class, 'mail_settings']);
//Route::get('mail', [PagesController::class, 'mail']);
//Route::get('pricing', [PagesController::class, 'pricing']);
//Route::get('profile', [PagesController::class, 'profile']);
//Route::get('profile-settings', [PagesController::class, 'profile_settings']);
//Route::get('reviews', [PagesController::class, 'reviews']);
//Route::get('search-results', [PagesController::class, 'search_results']);
//Route::get('team', [PagesController::class, 'team']);
//Route::get('terms-conditions', [PagesController::class, 'terms_conditions']);
//Route::get('timeline', [PagesController::class, 'timeline']);
//Route::get('todo-list', [PagesController::class, 'todo_list']);
//
//// ERROR //
//Route::get('error401', [ErrorController::class, 'error401']);
//Route::get('error404', [ErrorController::class, 'error404']);
//Route::get('error500', [ErrorController::class, 'error500']);
//
//// UI ELEMENTS //
//Route::get('alerts', [UielementsController::class, 'alerts']);
//Route::get('badges', [UielementsController::class, 'badges']);
//Route::get('breadcrumbs', [UielementsController::class, 'breadcrumbs']);
//Route::get('buttons', [UielementsController::class, 'buttons']);
//Route::get('buttongroups', [UielementsController::class, 'buttongroups']);
//Route::get('cards', [UielementsController::class, 'cards']);
//Route::get('dropdowns', [UielementsController::class, 'dropdowns']);
//Route::get('images-figures', [UielementsController::class, 'images_figures']);
//Route::get('indicators', [UielementsController::class, 'indicators']);
//Route::get('listgroups', [UielementsController::class, 'listgroups']);
//Route::get('navs-tabs', [UielementsController::class, 'navs_tabs']);
//Route::get('object-fit', [UielementsController::class, 'object_fit']);
//Route::get('paginations', [UielementsController::class, 'paginations']);
//Route::get('popovers', [UielementsController::class, 'popovers']);
//Route::get('progress', [UielementsController::class, 'progress']);
//Route::get('spinners', [UielementsController::class, 'spinners']);
//Route::get('toasts', [UielementsController::class, 'toasts']);
//Route::get('tooltips', [UielementsController::class, 'tooltips']);
//
//// UTILITIES //
//Route::get('avatars', [UtilitiesController::class, 'avatars']);
//Route::get('borders', [UtilitiesController::class, 'borders']);
//Route::get('colors', [UtilitiesController::class, 'colors']);
//Route::get('columns', [UtilitiesController::class, 'columns']);
//Route::get('css-grid', [UtilitiesController::class, 'css_grid']);
//Route::get('flex', [UtilitiesController::class, 'flex']);
//
//// FORMS //
//Route::get('form-advanced-select', [FormsController::class, 'form_advanced_select']);
//Route::get('form-check-radios', [FormsController::class, 'form_check_radios']);
//Route::get('form-color-pickers', [FormsController::class, 'form_color_pickers']);
//Route::get('form-counters-markup', [FormsController::class, 'form_counters_markup']);
//Route::get('form-datetime-pickers', [FormsController::class, 'form_datetime_pickers']);
//Route::get('form-file-uploads', [FormsController::class, 'form_file_uploads']);
//Route::get('form-input-groups', [FormsController::class, 'form_input_groups']);
//Route::get('form-input-masks', [FormsController::class, 'form_input_masks']);
//Route::get('form-input-numbers', [FormsController::class, 'form_input_numbers']);
//Route::get('form-inputs', [FormsController::class, 'form_inputs']);
//Route::get('form-passwords', [FormsController::class, 'form_passwords']);
//Route::get('form-range', [FormsController::class, 'form_range']);
//Route::get('form-select', [FormsController::class, 'form_select']);
//Route::get('form-switch', [FormsController::class, 'form_switch']);
//Route::get('form-wizards', [FormsController::class, 'form_wizards']);
//Route::get('form-advanced', [FormsController::class, 'form_advanced']);
//Route::get('form-layouts', [FormsController::class, 'form_layouts']);
//Route::get('form-select2', [FormsController::class, 'form_select2']);
//Route::get('form-validations', [FormsController::class, 'form_validations']);
//Route::get('quill-editor', [FormsController::class, 'quill_editor']);
//
//// ADVANCED UI //
//Route::get('accordions-collapse', [AdvanceduiController::class, 'accordions_collapse']);
//Route::get('draggable-cards', [AdvanceduiController::class, 'draggable_cards']);
//Route::get('media-player', [AdvanceduiController::class, 'media_player']);
//Route::get('modals-closes', [AdvanceduiController::class, 'modals_closes']);
//Route::get('navbars', [AdvanceduiController::class, 'navbars']);
//Route::get('offcanvas', [AdvanceduiController::class, 'offcanvas']);
//Route::get('ratings', [AdvanceduiController::class, 'ratings']);
//Route::get('ribbons', [AdvanceduiController::class, 'ribbons']);
//Route::get('scrollspy', [AdvanceduiController::class, 'scrollspy']);
//Route::get('skeleton', [AdvanceduiController::class, 'skeleton']);
//Route::get('sortable-list', [AdvanceduiController::class, 'sortable_list']);
//Route::get('swiperjs', [AdvanceduiController::class, 'swiperjs']);
//Route::get('tour', [AdvanceduiController::class, 'tour']);
//
//// WIDGETS //
//Route::get('widgets', [WidgetsController::class, 'widgets']);
//
//// APPS //
//Route::get('crm-companies', [AppsController::class, 'crm_companies']);
//Route::get('crm-contacts', [AppsController::class, 'crm_contacts']);
//Route::get('crm-deals', [AppsController::class, 'crm_deals']);
//Route::get('crm-leads', [AppsController::class, 'crm_leads']);
//Route::get('crypto-buy-sell', [AppsController::class, 'crypto_buy_sell']);
//Route::get('crypto-currency-exchange', [AppsController::class, 'crypto_currency_exchange']);
//Route::get('crypto-marketcap', [AppsController::class, 'crypto_marketcap']);
//Route::get('crypto-transactions', [AppsController::class, 'crypto_transactions']);
//Route::get('crypto-wallet', [AppsController::class, 'crypto_wallet']);
//Route::get('add-products', [AppsController::class, 'add_products']);
//Route::get('cart', [AppsController::class, 'cart']);
//Route::get('checkout', [AppsController::class, 'checkout']);
//Route::get('edit-products', [AppsController::class, 'edit_products']);
//Route::get('order-details', [AppsController::class, 'order_details']);
//Route::get('orders', [AppsController::class, 'orders']);
//Route::get('product-details', [AppsController::class, 'product_details']);
//Route::get('products-list', [AppsController::class, 'products_list']);
//Route::get('products', [AppsController::class, 'products']);
//Route::get('wishlist', [AppsController::class, 'wishlist']);
//Route::get('job-candidate-details', [AppsController::class, 'job_candidate_details']);
//Route::get('job-candidate-search', [AppsController::class, 'job_candidate_search']);
//Route::get('job-company-search', [AppsController::class, 'job_company_search']);
//Route::get('job-details', [AppsController::class, 'job_details']);
//Route::get('job-post', [AppsController::class, 'job_post']);
//Route::get('job-search', [AppsController::class, 'job_search']);
//Route::get('job-list', [AppsController::class, 'job_list']);
//Route::get('nft-create', [AppsController::class, 'nft_create']);
//Route::get('nft-details', [AppsController::class, 'nft_details']);
//Route::get('nft-live-auction', [AppsController::class, 'nft_live_auction']);
//Route::get('nft-marketplace', [AppsController::class, 'nft_marketplace']);
//Route::get('nft-wallet-integration', [AppsController::class, 'nft_wallet_integration']);
//Route::get('projects-create', [AppsController::class, 'projects_create']);
//Route::get('projects-list', [AppsController::class, 'projects_list']);
//Route::get('projects-overview', [AppsController::class, 'projects_overview']);
//Route::get('task-details', [AppsController::class, 'task_details']);
//Route::get('task-kanban-board', [AppsController::class, 'task_kanban_board']);
//Route::get('task-list-view', [AppsController::class, 'task_list_view']);
//Route::get('full-calendar', [AppsController::class, 'full_calendar']);
//Route::get('gallery', [AppsController::class, 'gallery']);
//Route::get('sweet-alerts', [AppsController::class, 'sweet_alerts']);
//
//// TSBLES //
//Route::get('tables', [TablesController::class, 'tables']);
//Route::get('grid-tables', [TablesController::class, 'grid_tables']);
//Route::get('data-tables', [TablesController::class, 'data_tables']);
//
//// CHARTS //
//Route::get('apex-area-charts', [ChartsController::class, 'apex_area_charts']);
//Route::get('apex-bar-charts', [ChartsController::class, 'apex_bar_charts']);
//Route::get('apex-boxplot-charts', [ChartsController::class, 'apex_boxplot_charts']);
//Route::get('apex-bubble-charts', [ChartsController::class, 'apex_bubble_charts']);
//Route::get('apex-candlestick-charts', [ChartsController::class, 'apex_candlestick_charts']);
//Route::get('apex-column-charts', [ChartsController::class, 'apex_column_charts']);
//Route::get('apex-funnel-charts', [ChartsController::class, 'apex_funnel_charts']);
//Route::get('apex-heatmap-charts', [ChartsController::class, 'apex_heatmap_charts']);
//Route::get('apex-line-charts', [ChartsController::class, 'apex_line_charts']);
//Route::get('apex-mixed-charts', [ChartsController::class, 'apex_mixed_charts']);
//Route::get('apex-pie-charts', [ChartsController::class, 'apex_pie_charts']);
//Route::get('apex-polararea-charts', [ChartsController::class, 'apex_polararea_charts']);
//Route::get('apex-radar-charts', [ChartsController::class, 'apex_radar_charts']);
//Route::get('apex-radialbar-charts', [ChartsController::class, 'apex_radialbar_charts']);
//Route::get('apex-rangearea-charts', [ChartsController::class, 'apex_rangearea_charts']);
//Route::get('apex-scatter-charts', [ChartsController::class, 'apex_scatter_charts']);
//Route::get('apex-slope-charts', [ChartsController::class, 'apex_slope_charts']);
//Route::get('apex-timeline-charts', [ChartsController::class, 'apex_timeline_charts']);
//Route::get('apex-treemap-charts', [ChartsController::class, 'apex_treemap_charts']);
//Route::get('chartjs-charts', [ChartsController::class, 'chartjs_charts']);
//Route::get('echarts', [ChartsController::class, 'echarts']);
//
//// MAPS //
//Route::get('google-maps', [MapsController::class, 'google_maps']);
//Route::get('leaflet-maps', [MapsController::class, 'leaflet_maps']);
//Route::get('vector-maps', [MapsController::class, 'vector_maps']);
//
//// ICONS //
//Route::get('icons', [IconsController::class, 'icons']);
