<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group([], function () {
    Route::get('/',function () {
        return view('home',['js_name'=> 'home']);
    });
    
});

Route::prefix('meeting')->name('meeting.')->group(function() {
    Route::get('/create', function () {
        return view('create_meeting', ['js_name' => 'createMeeting']);
    })->name('createBlade');
    
    // Route for modifying a meeting
    Route::get('/modify', function () {
        return view('modify_meeting', ['js_name' => 'modifyMeeting']);
    })->name('modifyBlade');
});

Route::prefix('voting')->name('voting.')->group(function() {
    Route::get('/vote', function () {
        return view('vote_voting', ['js_name'=> 'voteVoting']);
    })->name('voteBlade');
    Route::get('/control', function () {
        return view('control_voting', ['js_name'=> 'controlVoting']);
    })->name('controlBlade');
});

/*
Route::middleware(['',''])->group(function () {
    Route::get('/',function () {
        return view('',[''=> '']);
    });
});*/