<?php

namespace App\Http\Controllers;

use App\Models\Verse;
use Illuminate\Http\Request;

class VerseController extends Controller
{
    public function versePage($pageType, $month = null)
    {
        if (empty($pageType)) {
            return abort(404);
        }

        $availableMonths = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
        ];
        // If no month is specified, use the current month
        if (!$month) {
            $month = strtolower(date('F'));
        }

        // Fetch the verses for the specified or current month
        $verses = Verse::where('month', ucfirst($month))->orderBy('day')->get()->groupBy('day');

        $currentDay = date('j');

        return view($pageType == "grid" ? 'verse-grid-view' : 'verse-list-view', compact('verses', 'availableMonths', 'month', 'currentDay'));
    }
}