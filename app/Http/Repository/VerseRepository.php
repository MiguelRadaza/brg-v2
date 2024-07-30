<?php

namespace App\Http\Repository;

use App\Models\Verse;
use Illuminate\Database\Eloquent\Collection;

class VerseRepository extends BaseRepository
{
    public function __construct(protected $verses = new Verse)
    {
    }

    public function getFormattedVerses(): array
    {
        $verses = $this->verses->all();
        $data = [];
        foreach ($verses as $verse) {
            $content = [
                'day' => $verse->day,
                'morning' => $verse->morning,
                'evening' => $verse->evening,
            ];
            $data[$verse->month][$verse->id] = $content;
        }

        return $data;
    }

    public function getCurrentDayVerses(): Verse | null | bool
    {
        $month = strtolower(date('F'));
        $currentDay = date('j');
        return Verse::where('month', ucfirst($month))->where('day', $currentDay)->orderBy('day')->first();
    }

    public function getVerseByMonthAndDay($month, $day): Verse
    {
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
        return $this->verses->where('month', ucfirst($availableMonths[$month]))->where('day', $day)->first();
    }

    public function getVerseByVerseId($id)
    {
        return $this->verses->find($id);
    }
}