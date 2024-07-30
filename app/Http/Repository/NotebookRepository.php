<?php

namespace App\Http\Repository;

use App\Models\Notebook;

class NotebookRepository extends BaseRepository
{

    public function __construct(protected $notebook = new Notebook())
    {
    }
    public function validateJournal($id, $journalType, $userId)
    {
        return $this->notebook->where('verse_id', $id)
            ->where('user_id', $userId)
            ->where('journal_type', $journalType)
            ->first();
    }
}