<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class ResetController extends Controller
{
    public function reset() {
        Artisan::call('migrate:fresh --seed');

        foreach (['products', 'categories'] as $folder) {
            Storage::deleteDirectory($folder);
            Storage::makeDirectory($folder);
        }

        session()->flash('success', 'The Project was Dropped');
        return redirect()->route('home');
    }
}
