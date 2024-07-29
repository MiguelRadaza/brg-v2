<?php

namespace App\Http\Repository;
use App\Models\Notebook;

class NotebookRepository extends BaseRepository
{

    public function __construct(protected $notebook = new Notebook()) {
    }
    public function validateJournal($year, $month, $day, $userId, $title, $journalType)
    {
        return $this->notebook->where(function ($query) use ($year, $month, $day, $userId,  $journalType) {
            $query->where('year', $year)
                  ->where('month', $month)
                  ->where('day', $day)
                  ->where("journal_type", $journalType)
                  ->where('user_id', $userId);
        })
        ->orWhere(function ($query) use  ($year, $month, $day, $userId, $title, $journalType) {
            $query->where('title', $title)
                ->where('year', $year)
                  ->where("journal_type", $journalType)
                  ->where('month', $month)
                ->where('day', $day)
                ->where('user_id', $userId);

        })
        ->first();
    }
}