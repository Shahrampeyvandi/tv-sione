<?php

Route::get('/admin/login', 'Panel\LoginController@Login')->name('Admin.Login');
Route::post('/admin/login', 'Panel\LoginController@Verify')->name('Admin.Login');
Route::get('/login', 'Front\LoginController@Login')->name('login');
Route::post('/login', 'Front\LoginController@Verify')->name('login');
Route::post('/register', 'Front\LoginController@Register')->name('S.Register');
Route::post('/forgetpass', 'Front\LoginController@ForgetPassword')->name('forgetpass');
Route::post('/forgetpasscode', 'Front\LoginController@ForgetPasswordSubmitCode')->name('forgetpass.submitCode');
Route::post('/forgetpassnewpass', 'Front\LoginController@ForgetPasswordSubmitnewPass')->name('forgetpass.submitNewPass');
Route::get('/testapi/{id}', 'Panel\ImdbController@testApi')->name('Test.Api');
// Route::post('/buy', 'Front\PlanController@Buy')->name('S.BuyPlan');
Route::post('/pay', 'Panel\PayController@pay')->name('S.BuyPlan');
Route::get('/pay/cb', 'Panel\PayController@callback')->name('Pay.CallBack');


Route::group(['middleware' => ['userauth']], function () {
    Route::post('ajax/checktakhfif', 'Front\AjaxController@checkTakhfif')->name('checkTakhfif');
    Route::get('/sitesharing', 'Front\PlanController@All')->name('S.SiteSharing');
});


Route::group(['middleware' => ['userauth', 'userplan']], function () {
    Route::get('/', 'Front\MainController@index')->name('MainUrl');
    Route::post('/getdownloadlinks', 'Front\MainController@getDownLoadLinks');
    Route::get('/movies', 'Front\MovieController@All')->name('AllMovies');
    Route::get('/series', 'Front\SerieController@All')->name('AllSeries');
    Route::get('/documentaries', 'Front\SerieController@All')->name('AllDocumentaries');
    Route::get('/childs', 'Front\ChildController@Show')->name('Childrens');
    Route::get('/categories', 'Front\CategoryController@All')->name('Categories');
    Route::get('/category/{name}', 'Front\CategoryController@Show')->name('Category.Show');
    Route::get('/movie/{slug}', 'Front\MovieController@Show')->name('ShowMovie');
    // Route::get('/serie/{slug}/{season?}', 'Front\SerieController@Show')->name('ShowSerie');
    Route::post('/addcomment/{post}', 'Front\CommentController@Save')->name('SaveComment');
    Route::post('/getcomment/{post}/ajax', 'Front\CommentController@getCommentAjax')->name('GetCommentAjax');
    Route::post('/ajax/getmoviedetail', 'Front\AjaxController@getMovieDetail')->name('GetMovieDetail');
    Route::get('/logout', 'Front\LoginController@logout')->name('logout-user');
    Route::get('/download/{id}', 'Front\MainController@DownLoad')->name('DownLoad');
    Route::get('/myfavorite', 'Front\MainController@MyFavorite')->name('S.MyFavorite');
    Route::get('/showall', 'Front\MainController@ShowMore')->name('S.ShowMore');
    Route::get('/play/{slug}', 'Front\MainController@Play')->name('S.Play');
    Route::get('/trailer/{slug}', 'Front\MainController@Trailer')->name('S.Trailer');
    Route::get('/play', 'Front\MainController@Play')->name('S.Series.Play');
    Route::post('/likepost', 'Front\AjaxController@Like')->name('S.Like');
    Route::get('/comming-soon', 'Front\MainController@CommingSoon')->name('CommingSoon');
    Route::get('/cast/{name}', 'Front\MainController@ShowCast')->name('ShowCast');
    Route::post('ajax/search', 'Front\AjaxController@Search')->name('S.Search');
    Route::post('ajax/favorite', 'Front\AjaxController@addToFavorite')->name('S.addToFavorite');
    Route::get('/account', 'Front\UserController@Account')->name('S.Account');
    Route::get('/orders', 'Front\UserController@Orders')->name('S.OrderLists');
    Route::get('blog/', 'Blog\BlogController@index')->name('Blog.index');
    Route::get('blog/{category}/{slug}', 'Blog\BlogController@show')->name('Blog.show');
    Route::get('blog/video/{id}', 'Blog\BlogController@showvideo')->name('Blog.show.video');
    Route::get('blog/{category}', 'Blog\BlogController@Category')->name('Blog.Category');
    Route::post('blog/comment/{blog}', 'Blog\BlogController@Comment')->name('Blog.SaveComment');
    Route::post('blog/search', 'Front\AjaxController@SearchBlog')->name('Blog.Ajax.Search');

    Route::get('collection/{id}', 'Front\MainController@ShowCollection')->name('Show-Collection');
    Route::get('movie-request', 'Front\UserController@MovieRequest')->name('MovieRequest');
    Route::post('movie-request', 'Front\UserController@SaveRequest')->name('MovieRequest');

    Route::post('send-bug', 'Front\UserController@send_bug');

    Route::post('showall/changestatus', 'Front\MainController@ShowMore');
});
