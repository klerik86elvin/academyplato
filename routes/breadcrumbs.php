<?php


use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push(__('messages.homepage'), route('home'));
});
Breadcrumbs::for('service', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('messages.services'), route('service'));
    if (request()->segment(2)){
        $service = \App\Models\Service::findOrFail(request()->segment(2));
        $trail->push($service->title, route('service', request()->segment(2)));
    }
});
Breadcrumbs::for('article-category', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('messages.article'), route('article-category'));
    if (request()->segment(2)){
        $article = \App\Models\Article::findOrFail(request()->segment(2));
        $trail->push($article->name, route('article-category', request()->segment(2)));
    }
});
Breadcrumbs::for('event-category', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('messages.event'), route('event-category'));
    if (request()->segment(2)){
        $cat = \App\Models\EventCategory::findOrFail(request()->segment(2));
        $trail->push($cat->category_name, route('event-category', request()->segment(2)));
    }
});
Breadcrumbs::for('partners', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('messages.partners'), route('partners'));
});
Breadcrumbs::for('news', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('messages.news'), route('news'));
    if (request()->segment(2)){
        $news = \App\Models\News::findOrFail(request()->segment(2));
        $trail->push($news->name, route('news', request()->segment(2)));
    }
});
Breadcrumbs::for('month-workers', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('messages.month-workers'), route('month-workers'));
    if (request()->segment(2)){
        $trail->push(__('messages.month_'.request()->segment(2)), route('month-workers', request()->segment(2)));
    }
});
Breadcrumbs::for('etik-kodeks', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('messages.etik-kodeks'), route('etik-kodeks'));
});
Breadcrumbs::for('faq', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('FAQ'), route('faq'));
});
Breadcrumbs::for('ambassador', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('messages.ambassador'), route('etik-kodeks'));
});
Breadcrumbs::for('team', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('messages.team'), route('team'));
});
Breadcrumbs::for('corporate-responsibility', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('messages.corporate-responsibility'), route('corporate-responsibility'));
});
Breadcrumbs::for('career', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('messages.career'), route('career'));
});
