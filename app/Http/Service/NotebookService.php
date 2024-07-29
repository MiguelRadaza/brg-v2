<?php

namespace App\Http\Service;
use App\Http\Repository\NotebookRepository;
use App\Http\Repository\VerseRepository;
use App\Models\Notebook;
use Illuminate\Support\Facades\DB;

class NotebookService extends BaseService  {
    public function __construct(protected $verseRepository = new VerseRepository(), protected $notebookRepository = new NotebookRepository()) {}

    public function createNote($data) : bool
    {
        // try {
        //     DB::beginTransaction();
            Notebook::create($data);
        //     DB::commit();
        //     return true;
        // } catch (\Exception $e) {
        //     DB::rollBack();
        //     return false;
        // }
    }

    public function validateJournal($year, $month, $day, $title, $journalType) : array | bool
    {
        try {
            $validate = $this->notebookRepository->validateJournal($year, $month, $day, $this->authUserId(), $title, $journalType);
            if (!$validate) {
                return false;
            }

            return [
                'data' => $validate,
                'exists' => true
            ];
        } catch (\Throwable $th) {
            return false;
        }
    }
}