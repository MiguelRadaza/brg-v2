<?php

namespace App\Http\Service;

use App\Events\JournalCreateEvent;
use App\Http\Repository\NotebookRepository;
use App\Http\Repository\VerseRepository;
use App\Models\Notebook;
use Illuminate\Support\Facades\DB;

class NotebookService extends BaseService
{
    public function __construct(protected $verseRepository = new VerseRepository(), protected $notebookRepository = new NotebookRepository())
    {
    }

    public function createNote($data)
    {
        try {
            DB::beginTransaction();
            Notebook::create($data);
            // fetch verse details
            $verse = $this->verseRepository->getVerseByVerseId($data['verse_id']);
            $currentVerse = $data['journal_type'] == "morning" ? $verse->morning : $verse->evening;

            event(new JournalCreateEvent([
                'message' => 'awdawdawdawd',
                'name' => auth()->user()->name,
                'verse' => $currentVerse,
                'user_id' => auth()->user()->id,
                'journal_type' => $data['journal_type']
            ]));

            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            return false;
        }
    }

    public function validateJournal($id, $journalType): array | bool
    {
        // try {
        $validate = $this->notebookRepository->validateJournal($id, $journalType, $this->authUserId());
        if (!$validate) {
            return false;
        }

        return [
            'data' => $validate,
            'exists' => true
        ];
        // } catch (\Throwable $th) {
        //     return false;
        // }
    }
}