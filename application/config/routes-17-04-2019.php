<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Home';
$route['supercontrol'] = 'supercontrol/Login';
$route['contact'] = 'Page/contact';
$route['aboutus'] = 'Page/aboutus';
$route['album'] = 'Page/album';
$route['news'] = 'Page/articles';
$route['whatwetreat'] = 'Page/whatwetreat';

$route['appointmentonphone'] = 'Home/appointmentonphone';
$route['postphoneappointment'] = 'Home/postphoneappointment';
$route['thankyouphoneapp'] = 'Home/thankyouphoneapp';

//========================================
$route['askaboutinsurancecoverage'] = 'Home/askaboutinsurancecoverage';
$route['postinsurancecoverage'] = 'Home/postinsurancecoverage';
//$route['thankyouphoneapp'] = 'Home/thankyouphoneapp';
//=======================================

$route['freeminconsultation'] = 'Home/freeminconsultation';
$route['postfreeminconsultation'] = 'Home/postfreeminconsultation';
//$route['thankyouphoneapp'] = 'Home/thankyouphoneapp';





$route['doctorbooking'] = 'Home/doctorbooking';

$route['faq'] = 'Page/faq';
$route['tourconcert'] = 'Page/tourconcert';
$route['aboutus'] = 'page/aboutus';
$route['blog'] = 'page/blog';
$route['blogdetails/(:any)'] = 'page/blog_details';

//$route['blogdetails/(:any)'] = 'page/blog_details';
$route['dashboard'] = 'Profile/dashboard';
$route['aboutus'] = 'page/aboutus';
$route['gallery'] = 'page/gallery';
$route['get-involved'] = 'page/getinvolved';
$route['blog-details/(:any)'] = 'page/blog_details/$1';
$route['feature-details/(:any)'] = 'page/feature_details/$1';






$route['news-detail/(:any)'] = 'Page/article_detail/$1';
$route['blogbycategory/(:any)'] = 'Page/blogbycategory/$1';

//$route['profile'] = 'Page/profile';
$route['information/(:any)'] = 'page/information/$1';

$route['registration'] = 'home/registration';
$route['signin'] = 'home/login_validation';
$route['forgot_password'] = 'home/forgot_password';
$route['details/(:any)'] ='page/school_details/$1';
$route['teacher-details/(:any)'] ='page/teacher_single/$1';
$route['teacher-review/(:any)'] ='page/teacher_review/$1';

$route['login'] = 'home/login';
$route['register'] = 'home/register';
$route['howwetreat'] = 'page/howwetreat';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



$route['courses-comment/(:any)/(:any)'] = 'page/courses/$1/$1';