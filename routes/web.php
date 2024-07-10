<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\TopicController::class, 'frontEndTopic'])->name('frontend.topic');
Route::get('/{topic_id}', [\App\Http\Controllers\TopicController::class, 'frontEndTopicData'])->name('frontend.topic.data');
Route::get('admin/topic-data', [\App\Http\Controllers\TopicController::class, 'adminTopicData'])->name('admin.topic.data');
Route::get('admin', [\App\Http\Controllers\TopicController::class, 'adminTopic'])->name('admin.topic');
Route::post('admin/topic-store', [\App\Http\Controllers\TopicController::class, 'adminTopicStore'])->name('admin.topic.store');
Route::post('admin/topic-data-store', [\App\Http\Controllers\TopicController::class, 'adminTopicDataStore'])->name('admin.topic.data.store');

