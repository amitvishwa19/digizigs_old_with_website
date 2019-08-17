<?php

//use Analytics;
use App\Events\TaskEvent;
use App\Jobs\testmailjob;
use App\Jobs\verifyEmail;
use App\Jobs\verifyEmailJob;
use App\Mail\ActivationEmail;
use App\Mail\SubscriptionMail;
use App\Mail\testMail;
use App\Models\Page;
use App\Models\Test;
use App\Notifications\InvoiceCreated;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;
use Spatie\Analytics\Period;
use GuzzleHttp\Client;


//Subscriptions and Inquiries
Route::post('/subscribe', 'App\AppController@subscribe')->name('app.subscribe');
Route::get('/unsubscribe', 'App\AppController@unsubscribe')->name('app.unsubscribe');
Route::post('/inquiry', 'App\AppController@inquiry')->name('app.inquiry');


Route::post('/send', 'App\ChatController@chatSend');
Route::post('/guestsend', 'App\ChatController@guestChatSend');



//============================================App Routes===========================================//
Route::get('/', 'App\AppController@index')->name('apphome');

Route::get('/contact', 'App\AppController@contact')->name('contact');

Route::get('/blog', 'App\PostController@allPosts')->name('app.blog');
Route::get('/blog/{slug}', 'App\PostController@detailPosts')->name('app.blog.detail');
Route::get('/blog/author/{author}', 'App\PostController@postByAuthor')->name('app.blog.author');
Route::get('/blog/category/{category}', 'App\PostController@postByCategory')->name('app.blog.category');


Route::get('/about', 'App\AppController@about')->name('app.about');

Route::get('/portfolio', 'App\AppController@portfolio')->name('app.portfolio');
//============================================App Routes===========================================//


Route::get('/taskeventlisten',function(){

    //Event Listner
    return view('test.test');
});


//=========================================Test Routes=============================================//
Route::get('/inbox',function(){

   $test = new Test;
   $test->type = 'Mailgun';
   $test->value = 'Incoming mailgun mail test';
   $test->save();

   return 'inbox';
    
});

Route::get('send_test_email', function(){

    $user = User::where('email','amitvishwa19@gmail.com')->first();
    $data = [
       'name' => $user->name,
       'password' => 'asdasdasdasd'
    ];

    //Mail::send('email.activation', ['name' => 'Jaysvishwa'], function($message){
        //$message->to('amitvishwa19@gmail.com', 'digizigs') ->subject('thisIsMySucject');
    //});

    $user = User::where('email','amitvishwa19@gmail.com')->first();
    //Mail::to('amitvishwa19@gmail.com')->send(new ActivationEmail);
    dispatch(new verifyEmailJob($user));

});

Route::get('send_mail', function(){
    /*Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
    {
        $message->subject('Mailgun and Laravel are awesome!');
        $message->from('info@digizigs.com', 'DigiZigs Mailer');
        $message->to('amitvishwa19@gmail.com');
    });*/
    dispatch(new verifyEmail());
});


/*
    User registration email verification
    User will redirect to verify email page
*/

Route::get('verifyEmail','Auth\RegisterController@verifyEmail')->name('verifyEmail');
Route::get('activationLink','Auth\RegisterController@activationLink')->name('activationLink');    
Route::post('verifyemail','Auth\RegisterController@resendEmailVerification')->name('resendEmailVerification');
Route::get('activateaccount/{email}/{token}','Auth\RegisterController@activateAccount')->name('activateAccount');     
Route::get('resetpassword','Auth\RegisterController@resetPassword')->name('resetPassword');
Route::post('resetpasswordlink','Auth\RegisterController@resetPasswordLink')->name('resetPasswordLink');
Route::get('reset/{id}','Auth\RegisterController@reset')->name('reset');


Route::get('/getmails',function(){

    $client = new Client();
    //GET http://localhost:8080/digizigs/api/mail/getmails;
    $res = $client->request('GET', 'http://localhost:8080/digizigs/api/mailbox/info@digizigs.com/inbox',
            [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImNhNGZkN2I2Y2Q1ODQ4M2E0NGViZmRkZTg1ZDZmZjdjMmQ4NGEzOTkwZTkzMGQ0ZTc0ZGRlZmRiNmQzZGRmYTFmYmI2MWE1ZGYwMTU5OWI0In0.eyJhdWQiOiIyIiwianRpIjoiY2E0ZmQ3YjZjZDU4NDgzYTQ0ZWJmZGRlODVkNmZmN2MyZDg0YTM5OTBlOTMwZDRlNzRkZGVmZGI2ZDNkZGZhMWZiYjYxYTVkZjAxNTk5YjQiLCJpYXQiOjE1NjU5NDg0NTYsIm5iZiI6MTU2NTk0ODQ1NiwiZXhwIjoxNTk3NTcwODU1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.qPkzAM-83b1kL7QGLtATAX0yGofx_oYiANsx0UPyBwWfhjrWpcP4FfTfua_SXDMnMmR1kkZUlFHJYungymU8EHj4EEQvBMr_dWqohfGgV9APZqWYu2ICub7pYuKYqRhoGiMz7t7G1jDxXCMF85RCH7upHXJwDdVnvKiKxZtUtAnxodIzU_O7l5F4IzsJURjM8FXG4jS0Ry10-uFAt86ngyqAv1WZBDxWNoKSZTFx5N8pl6Y1msTYhiREjbhl6mutvrWHvv812tfpMbO8FuKyxA5pbG5NJHMHFVu1kiYqqd7638Q5se6gVE3EcC1UYEDEdANtlJkqdTmwVqFRJQl3GNilSfjQHm1T4LsAQf4vrH1LxqA8MOPZ3q_ZuOXeAflp-7JKdGZ8fGWJOPZuAivzYBGVTU8TJIyPFOLvcCMRvbnt5mhz0QijImObENOTX7sMiHmReWRupY08n-FsCPVAPfoZHqiePM39swqG82AkVHHLkHa-39TdqUPbttJgw5vXCZ-IuBCE50J5YHT2x9iMZaQQIa0YydJCfpLMiF4QsXpPQ8F0Yv8h1h4jUqDVp4EwAI-Dzt9_DIp28bgaGys4WVzKYCZsEveMVozPs6DjW57BU369fu0_QTvZkILuPqOOcGnxzoWki9owfee1roejhQbF6Z1aFi8FCIga7cp3inc'
                ]
            ]
        );
    return $result= $res->getBody();
    dd($result->data);

});

Auth::routes();

Route::get('/notify',function(){
   
    //Notification 
    $users = User::all();
    $newinvoice = collect(['title'=>'New invoice Created','body'=>'New invoice created for client']);
    Notification::send($users, new InvoiceCreated($newinvoice));
    echo 'Notify Success';
   
}); 

Route::get('/taskevent',function(){

    //Event Fire
    event(new TaskEvent('Hello How are you bro'));
    echo 'TaskEvent Fiered';

});

/*Route::get('/taskeventlisten',function(){

    //Event Listner
    return view('test.test');

});*/
//=========================================Test Routes=============================================//

//=========================================Admin Routes=============================================//
//Route::group(['prefix' => setting('app_admin_url','dz-admin'),'middleware'=>['auth']],function(){
Route::group(['prefix' => setting('app_admin_url','appadmin'),'middleware'=>['auth']],function(){

    
	Route::get('/', 'Admin\AdminController@index')->name('admin.home');
    Route::get('/theme/tables', 'Admin\AdminController@tables')->name('theme.tables');

    //Profile
    Route::resource('/profile', 'Admin\Profile\ProfileController');


	//Contacts
    Route::resource('/contacts', 'Admin\Contact\ContactController');

 
    //Settings
    Route::resource('/settings', 'Admin\SettingController');

    //Articleblock
    //Route::resource('/webblock', 'Admin\WebBlock\WebBlockController');
    Route::resource('/article', 'Admin\Article\ArticleController');

    //Posts
    Route::resource('/post', 'Admin\Post\PostController');

    //PAge
    Route::resource('/page', 'Admin\Page\PageController');

    //Product
    Route::resource('/product', 'Admin\Product\ProductController');

    //Catogery
    Route::resource('/category', 'Admin\Category\CategoryController');
  

    //Menu
    Route::get('/menu', 'Admin\Menu\MenuController@index')->name('menu-index');
    Route::get('/menu/all', 'Admin\Menu\MenuController@allmenu')->name('menu-all');
    Route::post('/menu/add', 'Admin\Menu\MenuController@createnewmenu')->name('create-menu');

    //Gallery
    Route::resource('/gallery','Admin\Gallery\GalleryController');

    //resource
    Route::get('/tags', 'Admin\TagController@index')->name('tags');


    //Chat
    Route::get('/chat', 'Admin\Chat\ChatController@index')->name('chat');
    Route::get('/chatusers', 'Admin\Chat\ChatController@chatUsers');
    Route::get('/conversation/{id}', 'Admin\Chat\ChatController@getMessagesFor');
    Route::post('/conversation/send', 'Admin\Chat\ChatController@send');

    //Mailbox
    Route::get('/emails/markmail/{id}/edit','Admin\Mail\MailController@markMail');
    ///////Route::get('/mails/markstar/{id}/edit','Admin\Mail\MailController@markstar');
    ///////Route::get('/mails/markread/{id}/edit','Admin\Mail\MailController@markread');
    Route::get('/emails/movemail','Admin\Mail\MailController@moveMail');
    Route::resource('/emails', 'Admin\Mail\MailController'); //Contact


    //Connects
    Route::resource('/connect', 'Admin\Connects\ConnectController'); //Contact
    Route::resource('/subscription', 'Admin\Contact\SubscriptionController'); //Contact
    Route::resource('/inquiry', 'Admin\Contact\InquiryController'); //Contact

    
    //Access MAnagement
    Route::resource('/accesss', 'Admin\AccessControl\AccessController');
    Route::resource('/users', 'Admin\AccessControl\UserController');
    Route::resource('/roles', 'Admin\AccessControl\RoleController'); //Role
    Route::resource('/permissions', 'Admin\AccessControl\PermissionController'); //Permission

    Route::group(['prefix' => 'access'], function(){
        Route::resource('/roles', 'Admin\AccessControl\RoleController'); //Role
        Route::resource('/permissions', 'Admin\AccessControl\PermissionController'); //Permission
        Route::resource('/users', 'Admin\AccessControl\UserController'); //User
    });

    //Client MAnagement
    Route::group(['prefix' => 'client'], function(){
        Route::resource('/service', 'Admin\Client\ServiceController'); //User
        Route::resource('/project', 'Admin\Client\ProjectController'); //User
        Route::resource('/client', 'Admin\Client\ClientController'); //User
        Route::resource('/billing', 'Admin\Client\BillingController'); //User
        
        Route::get('/invoice/allclient', 'Admin\Client\InvoiceController@clients')->name('invoice.clients'); //Invoice
        Route::get('/invoice/allservice', 'Admin\Client\InvoiceController@services')->name('invoice.services'); //Invoice
        Route::resource('/invoice', 'Admin\Client\InvoiceController'); //Invoice

        Route::get('/quotation/pdf', 'Admin\Client\QuotationController@pdf')->name('quotation.pdf'); //Invoice
        Route::resource('/quotation', 'Admin\Client\QuotationController'); //User

    });

    

    //account-profile
    Route::resource('/profile', 'Admin\Profile\ProfileController'); //User



    //Google Analytics
    Route::get('/analytics', 'Admin\Analytics\AnalyticController@index')->name('google.analytics');
    Route::get('/analytics/analyticsdata', 'Admin\Analytics\AnalyticController@alldata')->name('google.topCountries');



    //Logs
    //Route::get('/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name('app.logs');
    Route::get('/logs', 'Admin\LogViewer\LogViewerController@index')->name('app.logs');


    Route::get('/marknotificationread', 'Admin\AdminController@markAllNotificationRead')->name('marknotificationread');

    

});
//=========================================Admin Routes=============================================//

Route::get('{page}',function($slug){
   
    $page = \App\Models\Page::findBySlug($slug);

    $view = "app/pages/{$page->slug}";
   
    if(view()->exists($view)){
        return view("app/pages/{$page->slug}",compact($page));
    }else{
        return abort(404);
    }
   
});    