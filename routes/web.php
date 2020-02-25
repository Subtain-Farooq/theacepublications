<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['domain' => 'theacepublications.bb', 'namespace' => 'Frontend', 'guard' => 'web'], function(){

    Auth::routes(['verify' => true]);

    Route::get('mail', function () {

        $manuscript = \App\Models\Manuscript::find(Auth::id());

        return (new App\Notifications\FilesUploaded($manuscript))->toMail($manuscript->user);
    });


    //Contact Us Form
    Route::get('contact-us', 'ContactController@contact')->name('contact');
    Route::post('contact-us', 'ContactController@sendEmail')->name('contact.sendEmail');

    // Static Pages
    Route::get('/', 'PagesController@home')->name('home');
    Route::get('about', 'PagesController@about')->name('about');
    Route::get('publishing-ethics', 'PagesController@ethics')->name('ethics');
    Route::get('guidelines-to-authors', 'PagesController@authors')->name('authors');
    Route::get('subscribers', 'PagesController@subscribers')->name('subscribers');
    Route::get('open-access', 'PagesController@OpenAccess')->name('open-access');
    Route::get('privacy-policy', 'PagesController@privacyPolicy')->name('privacy-policy');
    Route::get('site-map', 'PagesController@siteMap')->name('site-map');
    Route::get('terms-conditions', 'PagesController@termsAndConditions')->name('terms-conditions');
    Route::get('for-editors', 'PagesController@forEditors')->name('for-editors');
    Route::get('for-reviewers', 'PagesController@forReviewers')->name('for-reviewers');
    Route::get('publication-ethics', 'PagesController@publicationEthics')->name('publication-ethics');
    Route::get('editorial-process', 'PagesController@editorialProcess')->name('editorial-process');
    Route::get('authorship', 'PagesController@authorship')->name('authorship');
    Route::get('correction', 'PagesController@correction')->name('correction');
    Route::get('licensing-copyrights', 'PagesController@copyrights')->name('licensing-copyrights');
    Route::get('transparency-policy', 'PagesController@transparency')->name('transparency-policy');
    Route::get('article-processing-charges', 'PagesController@articleProcessing')->name('article-processing');

    //Journals
    Route::group(['prefix' => 'journals'], function () {
        Route::get('/', 'JournalController@index')->name('journals');
        Route::get('subject/{id}', 'JournalController@bySubject')->name('journals.bySubject');
        Route::get('{id}', 'JournalController@singleJournal')->name('journals.single');
        Route::get('{id}/guide-to-authors', 'JournalController@singleJournalGuide')->name('journals.single.guide');
        Route::get('{id}/editors', 'JournalController@singleJournalEditors')->name('journals.single.editors');
        Route::get('{id}/current-issues', 'JournalController@singleJournalCurrentIssues')->name('journals.single.current-issues');
        Route::get('{id}/archives', 'JournalController@singleJournalArchive')->name('journals.single.archive');
    });

    //Reviewers
    Route::get('register/reviewer', 'ReviewerController@create')->name('reviewer.create');
    Route::post('register/reviewer', 'ReviewerController@store')->name('reviewer.store');

    //Manuscript
    Route::get('manuscript/{doi}', 'ManuscriptController@index')->name('manuscript');
    Route::get('manuscript/archived/{doi}', 'ManuscriptController@archived')->name('manuscript.archived');




    //////////////////////////Dashboard//////////////////////////////
    Route::group(['namespace' => 'Dashboard', 'prefix' => 'dashboard', 'middleware' => 'auth'], function(){

        Route::get('/', 'HomeController@index')->name('dashboard');

        //Profile
        Route::get('profile', 'ProfileController@index')->name('dashboard.profile');
        Route::get('profile/edit', 'ProfileController@edit')->name('dashboard.profile.edit');
        Route::post('profile/edit', 'ProfileController@update')->name('dashboard.profile.update');

        //Verified
        Route::group(['middleware' => 'verified'], function(){

            //Manuscript
            Route::get('manuscript', 'ManuscriptController@create')->name('manuscript.create');
            Route::post('manuscript', 'ManuscriptController@store')->name('manuscript.store');
            Route::get('manuscript-management', 'ManuscriptController@index')->name('manuscript.manage');
            Route::get('manuscript-management/{id}', 'ManuscriptController@show')->name('manuscript.manage.show');

            //Payment
            Route::get('invoices', 'PaymentController@index')->name('invoice');
            Route::get('invoice/{id}', 'PaymentController@show')->name('invoice.show');
            Route::post('invoice/update/{id}', 'PaymentController@update')->name('invoice.update');
            Route::get('invoice/{id}/download', 'PaymentController@invoice')->name('invoice.download');

        });

        //Change Password
        Route::get('change-password', 'ChangePasswordController@index')->name('change-password')->middleware('password.confirm');
        Route::post('change-password', 'ChangePasswordController@update')->name('change-password.update');

    });

});

//Console

Route::group(['domain' => 'console.theacepublications.bb', 'guard' => 'console', 'namespace' => 'Backend'], function () {

    Route::group(['namespace' => 'Auth', 'middleware' => 'guest:console'], function(){

        Route::get('login', 'LoginController@showLoginForm')->name('console.login');
        Route::post('login', 'LoginController@login')->name('console.login');

    });

    Route::group(['guard' => 'console', 'middleware' => 'auth:console'], function () {

        Route::get('/', 'HomeController@index')->name('console.home');

        //Admin Logout
        Route::post('logout', 'Auth\LoginController@logout')->name('console.logout');

        //User Management
        Route::get('users', 'UserController@index')->name('console.users');
        Route::get('users/show/{id}', 'UserController@show')->name('console.users.show');
        Route::get('users/edit/{id}', 'UserController@edit')->name('console.users.edit');
        Route::post('users/update/{id}', 'UserController@update')->name('console.users.update');
        Route::post('users/destroy/{id}', 'UserController@destroy')->name('console.users.destroy');

        //Categories
        Route::get('categories', 'CategoryController@index')->name('console.categories');
        Route::get('categories/create', 'CategoryController@create')->name('console.categories.create');
        Route::post('categories/create', 'CategoryController@store')->name('console.categories.store');
        Route::get('categories/edit/{id}', 'CategoryController@edit')->name('console.categories.edit');;
        Route::post('categories/update/{id}', 'CategoryController@update')->name('console.categories.update');;
        Route::post('categories/destroy/{id}', 'CategoryController@destroy')->name('console.categories.destroy');;
        Route::get('categories/deleted', 'CategoryController@deleted')->name('console.categories.deleted');
        Route::post('categories/restore/{id}', 'CategoryController@restore')->name('console.categories.restore');
        Route::post('categories/delete/{id}', 'CategoryController@permanentDelete')->name('console.categories.delete');

        //Manuscript Types
        Route::get('types', 'TypeController@index')->name('console.types');
        Route::get('types/create', 'TypeController@create')->name('console.types.create');
        Route::post('types/create', 'TypeController@store')->name('console.types.store');
        Route::get('types/edit/{id}', 'TypeController@edit')->name('console.types.edit');
        Route::post('types/update/{id}', 'TypeController@update')->name('console.types.update');
        Route::post('types/destroy/{id}', 'TypeController@destroy')->name('console.types.destroy');
        Route::get('types/deleted', 'TypeController@deleted')->name('console.types.deleted');
        Route::post('types/restore/{id}', 'TypeController@restore')->name('console.types.restore');
        Route::post('types/delete/{id}', 'TypeController@permanentDelete')->name('console.types.delete');

        //Journals
        Route::get('journals', 'JournalController@index')->name('console.journals');
        Route::get('journals/create', 'JournalController@create')->name('console.journals.create');
        Route::post('journals/create', 'JournalController@store')->name('console.journals.store');
        Route::get('journals/edit/{id}', 'JournalController@edit')->name('console.journals.edit');
        Route::get('journals/show/{id}', 'JournalController@show')->name('console.journals.show');
        Route::post('journals/update/{id}', 'JournalController@update')->name('console.journals.update');
        Route::post('journals/destroy/{id}', 'JournalController@destroy')->name('console.journals.destroy');
        Route::get('journals/deleted', 'JournalController@deleted')->name('console.journals.deleted');
        Route::post('journals/restore/{id}', 'JournalController@restore')->name('console.journals.restore');
        Route::get('journals/current-issue/{id}', 'JournalController@currentIssue')->name('console.journal.current-issue');
        Route::post('journals/current-issue/{id}/change', 'JournalController@changeCurrentIssue')->name('console.journal.current-issue.change');

        //Category Journal Relation
        Route::get('journals/journal-category/{id}', 'JournalController@editJournalCategory')->name('console.journal.category.relation.edit');
        Route::post('journals/journal-category/{id}', 'JournalController@journalCategory')->name('console.journal.category.relation');


        //Editors
        Route::get('editors', 'EditorController@index')->name('console.editors');
        Route::get('editors/create', 'EditorController@create')->name('console.editors.create');
        Route::post('editors/create', 'EditorController@store')->name('console.editors.store');
        Route::get('editors/edit/{id}', 'EditorController@edit')->name('console.editors.edit');
        Route::post('editors/update/{id}', 'EditorController@update')->name('console.editors.update');
        Route::post('editors/destroy/{id}', 'EditorController@destroy')->name('console.editors.destroy');
        Route::get('editors/deleted', 'EditorController@deleted')->name('console.editors.deleted');
        Route::post('editors/restore/{id}', 'EditorController@restore')->name('console.editors.restore');
        Route::post('editors/delete/{id}', 'EditorController@permanentDelete')->name('console.editors.delete');
        Route::get('editors/show/{id}', 'EditorController@show')->name('console.editors.show');


        //Editors Journal relation
        Route::get('editors/journal-editor/{id}', 'EditorController@editEditorJournal')->name('console.editors.relation.edit');
        Route::post('editors/journal-editors/{id}', 'EditorController@editorJournal')->name('console.editors.relation');


        //Manuscript
        Route::get('manuscripts/{status?}', 'ManuscriptController@index')->name('console.manuscripts');
        Route::get('manuscripts/{id}/show', 'ManuscriptController@show')->name('console.manuscripts.show');
        Route::post('manuscripts/status-update/{id}', 'ManuscriptController@update')->name('console.manuscripts.update');

        //Articles
        Route::get('articles', 'ArticleController@index')->name('console.articles');
        Route::get('articles/create', 'ArticleController@create')->name('console.articles.create');
        Route::post('articles/create', 'ArticleController@store')->name('console.articles.store');
        Route::get('articles/show/{id}', 'ArticleController@show')->name('console.articles.show');
        Route::get('articles/edit/{id}', 'ArticleController@edit')->name('console.articles.edit');
        Route::post('articles/update/{id}', 'ArticleController@update')->name('console.articles.update');

        //Reviewers
        Route::get('reviewers', 'ReviewerController@index')->name('console.reviewer');
        Route::get('reviewers/{id}', 'ReviewerController@show')->name('console.reviewer.show');
        Route::get('reviewers/{id}/edit', 'ReviewerController@edit')->name('console.reviewer.edit');
        Route::post('reviewers/{id}/update', 'ReviewerController@update')->name('console.reviewer.update');
        Route::post('reviewers/{id}/destroy', 'ReviewerController@destroy')->name('console.reviewer.destroy');

        //Invoices
        Route::get('invoices', 'InvoiceController@index')->name('console.invoices');
        Route::get('invoices/{id}/show', 'InvoiceController@show')->name('console.invoice.show');

    });
});



