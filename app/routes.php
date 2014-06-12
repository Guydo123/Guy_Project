<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/about', function()
{
    return View::make('about');
});

Route::get('/products', function()
{
    return View::make('products');
});

Route::get('/contact', function()
{
    return View::make('contact');
});

Route::get('/', function()
{
    $news = News::all();
    return View::make('home')->with('news',$news);


});
Route::get('/newsletter',function()
{
    $fromEmail = Input::get('email');
    $fromName = 'Bugz &amp; Beastiez';

    $subject = 'Newsletter';

    $data = [ 'email' => Input::get('email')];
    $toEmail = 'gjfc50@yahoo.co.uk';
    $toName = 'Guy Campbell';
    Mail::send('emails.newsletter', $data, function($message) use ($toEmail, $toName, $fromEmail, $fromName, $subject)
    {
        $message->to($toEmail, $toName);
        $message->from($fromEmail, $fromName);
        $message->subject($subject);

    });
    $feedback = 'You have now subscribed to our newsletter!';
    return View::make('newsletter')->with('feedback',$feedback);
});

Route::get('/family', function()
{
    return View::make('family');
});
Route::get('/charities', function()
{
    return View::make('charities');
});
Route::get('/designs', function()
{
    return View::make('designs');
});
Route::get('/faq', function()
{
    return View::make('faq');
});
Route::get('/cart', function()
{
    return View::make('cart');
});
Route::get('/faq', function()
{
    return View::make('faq');
});

Route::get('/designsTwo', function()
{
    return View::make('designsTwo');
});

Route::get('/designsThree', function()
{
    return View::make('designsThree');
});
Route::get('/designsFour', function()
{
    return View::make('designsFour');
});

Route::get('/designsFive', function()
{
    return View::make('designsFive');
});


Route::get('/terms', function()
{
    return View::make('terms');
});



Route::get('/comingSoon', function()
{
    return View::make('comingSoon');
});

Route::post('contact',function(){
    $fromEmail = Input::get('email');
    $fromName = 'Bugz &amp; Beastiez';
    $subject = 'Web Site Feedback';

    $data = [ 'msg' => Input::get('comment'), 'name' => Input::get('name')];
    $toEmail = 'gjfc50@yahoo.co.uk';
    $toName = 'Guy Campbell';

    Mail::send('emails.contact', $data, function($message) use ($toEmail, $toName, $fromEmail, $fromName, $subject)
    {
        $message->to($toEmail, $toName);
        $message->from($fromEmail, $fromName);
        $message->subject($subject);

    });
    $feedback = 'Thank you for your email';
    return View::make('contact')->with('feedback',$feedback);
});






Route::get('/productsHome', function()
{
    // Select all the lists from dataabse ready to display in drop-down menu
    $categories = DB::table('categories_table')->get();
    $styles = DB::table('styles_table')->get();
    $types = DB::table('types_table')->get();
    // If drop-down menus set make a selection from products
    if(isset($_GET['id_category']) && isset($_GET['style_id']) && isset($_GET['type_id'])){
        $cat = Input::get('id_category');
        $style = Input::get('style_id');
        $type = Input::get('type_id');
        $products = DB::table('products_table')->where('id_category',$cat )->where('style_id',$style)->where('type_id',$type)->get();
    }else{
        // Select all products
        $products = DB::table('products_table')->get();
    }
    return View::make('productsHome')->with('categories',$categories)->with('styles',$styles)->with('types',$types)->with('products',$products);
});
Route::get('/products',function()
{
    // See if product selected and display its details
    $prod = Input::get('product_id');
    $product = DB::table('products_table')->where('product_id',$prod )->get();

    return View::make('products')->with('product',$product);
});


?>

