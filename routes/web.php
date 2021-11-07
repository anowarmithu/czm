<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// forntend
Route::get('/about/czm', function () {return view('front.about.about_czm');});
Route::get('/about/accountability', function () {return view('front.about.accountability');});
Route::get('/about/governence', function () {return view('front.about.governence');});
Route::get('/programs/insaniat', function () {return view('front.programs.insaniat');});
Route::get('/programs/jeebika', function () {return view('front.programs.jeebika');});
Route::get('/programs/mudareeb', function () {return view('front.programs.mudareeb');});
Route::get('/programs/naipunnabikash', function () {return view('front.programs.naipunnabikash');});
Route::get('/programs/gulbagicha', function () {return view('front.programs.gulbagicha');});
Route::get('/programs/genius', function () {return view('front.programs.genius');});
Route::get('/programs/dawah', function () {return view('front.programs.dawah');});
Route::get('/zakat/faq', function () {return view('front.zakat.faq');});
Route::get('/zakat/hadiths', function () {return view('front.zakat.zakat_in_hadiths');});
Route::get('/zakat/quran', function () {return view('front.zakat.zakat_in_quran');});

Route::get('/successStories', function () {return view('front.successStories.index');});
Route::get('/successStories/story', function () {return view('front.successStories.story');});

Route::get('/zakat/blogs', function () {return view('front.zakat.zakat_blogs');});
Route::get('/career/jobs', function () {return view('front.career.jobs');});
Route::get('/career/job_details', function () {return view('front.career.job_details');});
Route::get('/career/apply', function () {return view('front.career.apply');});
Route::get('/contact', function () {return view('front.contact.index');});

Route::get('/donation', function () {return view('front.donate.index');});

Route::get('/gallery/image', function () {return view('front.gallery.image');});

Route::get('/gallery/video', function () {return view('front.gallery.video');});

Route::get('/news', function () {return view('front.news.news');});
Route::get('/news/details', function () {return view('front.news.news_details');});

Route::get('/publications/books', function () {return view('front.publications.books');});
Route::get('/publications/reports/audit', function () {return view('front.publications.reports.audit_reports');});
Route::get('/publications/reports/annual', function () {return view('front.publications.reports.annual_reports');});
Route::get('/publications/reports/special', function () {return view('front.publications.reports.special_reports');});
Route::get('/publications/reports/newsletters', function () {return view('front.publications.reports.newsletters');});

// backend
Route::get('/back/index', function () {return view('backend.index');});
