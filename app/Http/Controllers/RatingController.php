<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function adminRating()
    {
        $ratings = Rating::all();
        return view('admin.rating.index', compact('ratings'));
    }
}
