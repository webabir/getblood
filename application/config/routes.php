<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login-page'] = 'login';
$route['login'] = 'admin/login';
$route['admin-page'] = 'admin/admin_login_page';
$route['admin-login'] = 'admin/admin_login';
$route['dashboard'] = 'dashboard';
$route['signup'] = 'admin/signup';
$route['insert'] = 'admin/insert';
$route['signup-page'] = 'admin/insert';
$route['search-ab-neg'] = 'search/ab_negetive';
$route['search-ab-pos'] = 'search/ab_positive';
$route['search-a-neg'] = 'search/a_negetive';
$route['search-a-pos'] = 'search/a_positive';
$route['search-b-neg'] = 'search/b_negetive';
$route['search-b-pos'] = 'search/b_positive';
$route['search-o-neg'] = 'search/o_negetive';
$route['search-o-pos'] = 'search/o_positive';
$route['search-khulna'] = 'search/user_khulna';
$route['search-dhaka'] = 'search/user_dhaka';
$route['search-barishal'] = 'search/user_barishal';
$route['search-chattogram'] = 'search/user_chattogram';
$route['search-mymensingh'] = 'search/user_mymensingh';
$route['search-rajshahi'] = 'search/user_rajshahi';
$route['search-sylhet'] = 'search/user_sylhet';
$route['search-rangpur'] = 'search/user_rangpur';
$route['user-list'] = 'dashboard/user_list';
$route['donor-list'] = 'dashboard/donor_list';
$route['volunteer-list'] = 'dashboard/volunteer_list';
$route['logout'] = 'admin/admin_logout';
$route['add-user'] = 'admin/add_user';
$route['user-add'] = 'admin/add_member';
$route['user-profile/(.+)'] = 'admin/user_profile/$1';
$route['donor-profile/(.+)'] = 'admin/donor_profile/$1';

$route['profile-update'] = 'admin/update_profile';
$route['about-donation'] = 'dashboard/about_donation';
$route['maintainer'] = 'dashboard/maintainer';
$route['edit-user'] = 'admin/edit_profile';
$route['profile-update/(.+)'] = 'admin/profile_update_page/$1';
$route['secure-number/(.+)'] = 'admin/secure_number/$1';

$route['opinion'] = 'post/opinion';
$route['post-insert'] = 'post/insert_post';

$route['request'] = 'post/request';
$route['request-insert'] = 'post/insert_request';

$route['auto-delete-request'] = 'post/request_auto_delete';
