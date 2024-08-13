<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/clear',function(){
    //\Artisan::call('key:generate');
    \Artisan::call('route:clear');
    \Artisan::call('cache:clear');
});

Route::get('/', function () {
return view('home');
})->name('home');

Route::get('/about-doctor', function () {
return view('about');
})->name('about');

Route::get('/contact', function () {
return view('contact');
})->name('contact');

Route::get('/stroke-neuro-intervention', function () {
return view('stroke-neuro-intervention');
})->name('stroke-neuro-intervention');

Route::get('/vagus-nerve-stimulation', function () {
return view('vagus-nerve-stimulation');
})->name('vagus-nerve-stimulation');

Route::get('/epilepsy', function () {
return view('epilepsy');
})->name('epilepsy');



Route::get('/headaches', function () {
return view('headaches');
})->name('headaches');

Route::get('/parkinsons-disease', function () {
return view('parkinsons-disease');
})->name('parkinsons-disease');

Route::get('/multiple-sclerosis', function () {
return view('multiple-sclerosis');
})->name('multiple-sclerosis');

Route::get('/neuropathy', function () {
return view('neuropathy');
})->name('neuropathy');

Route::get('/alzheimer-disease-dementia', function () {
return view('alzheimer-disease-dementia');
})->name('alzheimer-disease-dementia');

Route::get('/sleep-disorder', function () {
return view('sleep-disorder');
})->name('sleep-disorder');

Route::get('/movement-disorders', function () {
return view('movement-disorders');
})->name('movement-disorders');

Route::get('/neuromuscular-disorders', function () {
return view('neuromuscular-disorders');
})->name('neuromuscular-disorders');

Route::get('/dementia', function () {
return view('dementia');
})->name('dementia');

Route::get('/vertigo', function () {
return view('vertigo');
})->name('vertigo');

Route::get('/brain-infection', function () {
return view('brain-infection');
})->name('brain-infection');

Route::get('/eeg', function () {
return view('eeg');
})->name('eeg');

Route::get('/emg', function () {
return view('emg');
})->name('emg');

Route::get('/nerve-conduction-studies', function () {
return view('nerve-conduction-studies');
})->name('nerve-conduction-studies');

Route::get('/MRI', function () {
return view('MRI');
})->name('MRI');

Route::get('/CT-scan', function () {
return view('CT-scan');
})->name('CT-scan');

Route::get('/botox-injection', function () {
return view('botox-injection');
})->name('botox-injection');

Route::get('/deep-brain-stimulation', function () {
return view('deep-brain-stimulation');
})->name('deep-brain-stimulation');

Route::get('/lumbar-puncture', function () {
return view('lumbar-puncture');
})->name('lumbar-puncture');

Route::get('/IVIG-therapy', function () {
return view('IVIG-therapy');
})->name('IVIG-therapy');



Route::get('/services', function () {
return view('services');
})->name('services');

Route::get('/patient-education', function () {
return view('patient-education');
})->name('patient-education');

Route::get('/patient-testimonial', function () {
return view('patient-testimonial');
})->name('patient-testimonial');



Route::get('/migraine', function () {
return view('migraine');
})->name('migraine');

Route::get('/media', function () {
return view('media');
})->name('media');

Route::get('/case-study', function () {
return view('case-study');
})->name('case-study');

Route::get('/tremor', function () {
return view('tremor');
})->name('tremor');

Route::get('/myopathy', function () {
return view('myopathy');
})->name('myopathy');

Route::get('/demyelination', function () {
return view('demyelination');
})->name('demyelination');

Route::get('/spine-diseases', function () {
return view('spine-diseases');
})->name('spine-diseases');

Route::get('/back-neck', function () {
return view('back-neck');
})->name('back-neck');


Route::get('/electrophysiology', function () {
return view('electrophysiology');
})->name('electrophysiology');

Route::get('/blogs', function () {
return view('blogs');
})->name('blogs');




 Route::group(['prefix' => "blogs"], function () {


Route::get('/vertigo-giddiness', function () {
    return view('blogs.vertigo-giddiness'); 
})->name('vertigo-giddiness');

Route::get('/interventional-neurology', function () {
    return view('blogs.interventional-neurology'); 
})->name('interventional-neurology');

Route::get('/electroencephalography', function () {
    return view('blogs.electroencephalography'); 
})->name('electroencephalography');

Route::get('/visual-evoked-potential-testing', function () {
    return view('blogs.visual-evoked-potential-testing'); 
})->name('visual-evoked-potential-testing');

Route::get('/headache', function () {
    return view('blogs.headache'); 
})->name('headache');

Route::get('/epilepsy-treatment', function () {
    return view('blogs.epilepsy-treatment'); 
})->name('epilepsy-treatment');

Route::get('/parkinsonism', function () {
    return view('blogs.parkinsonism'); 
})->name('parkinsonism');

Route::get('/neuromuscular-disorders', function () {
    return view('blogs.neuromuscular-disorders'); 
})->name('neuromuscular-disorders');

Route::get('/nerve-conduction', function () {
    return view('blogs.nerve-conduction'); 
})->name('nerve-conduction');

Route::get('/stroke', function () {
    return view('blogs.stroke'); 
})->name('stroke');


});






Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');


