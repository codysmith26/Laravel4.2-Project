<?php

// Start routes for normal content pages GET PAGES //

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/brightoffice', function()
{
    return View::make('personal_brightoffice_form');
});

Route::get('/faqs', function()
{
	return View::make('faqs');
});

Route::get('/contact', function()
{
	return View::make('contact');
});

Route::get('/contact-jersey', function()
{
	return View::make('/contact-jersey');
});

Route::get('/contact-guernsey', function()
{
	return View::make('/contact-guernsey');
});

Route::get('/contact-iom', function()
{
	return View::make('/contact-iom');
});

Route::get('/business-loans', function()
{
	return View::make('business-loans');
});

Route::get('/business-test', function()
{
	return View::make('business-loans');
});

Route::get('/loan-cashback', function()
{
	return View::make('loan-cashback');
});

Route::get('/mortgages', function()
{
	return View::make('mortgages');
});

Route::get('/mortgage-test', function()
{
	return View::make('mortgages');
});

Route::get('/personal-test', function()
{
	return View::make('personal_application_form');
});

Route::get('/competitions', function()
{
	return View::make('competitions');
});

Route::get('/cash-dash', function()
{
	return View::make('cash-dash');
});

Route::get('/cash-dash-clue', function()
{
	return View::make('cash-dash-clue');
});

Route::get('/testimonials', function()
{
	return View::make('testimonials');
});

Route::get('/privacy', function()
{
	return View::make('privacy');
});

Route::get('/spread-the-cost', function()
{
	return View::make('spread-the-cost');
});

Route::get('/sandbox', function()
{
	return View::make('sandbox');
});

Route::get('/old-browser', function()
{
	return View::make('/old-browser');
});

Route::get('/altest', function()
{
	return View::make('competitions-test');
});


Route::get('/cashdash-press-release', function()
    {
	return View::make('cashdash-press-release');
    });

Route::get('/cash-dash-test', function()
    {
	return View::make('cash-dash-test');
    });

Route::get('/business-loan-offer', function()
{
	return View::make('business-loan-offer');
});

Route::get('/personal-loans', function()
    {
	return View::make('personal_application_form');
    });
	
Route::get('/october-competition', function()
    {
	return View::make('october-competition');
    });
	
Route::get('/november-competition', function()
    {
	return View::make('november-competition');
    });

// These are result pages, i.e. when you submit a form i.e. POST pages //

Route::post('/mortgage-success', function()
    {
	return View::make('mortgage-success');
    });

Route::post('personal-success-brightoffice', function()
	{
	    return View::make('personal-success-brightoffice');
	});

Route::post('/business-success', function()
    {
	return View::make('business-success');
    });

Route::post('/personal-success', function()
    {
	return View::make('personal-success');
    });
    
Route::post('/spread-success', function()
    {
	return View::make('spread-success');
    });

Route::post('/loan-cashback-success', function()
    {
	return View::make('loan-cashback-success');
    });

