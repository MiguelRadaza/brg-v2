<?php

namespace App\Http\Controllers;

use App\Http\Repository\VerseRepository;
use App\Http\Service\NotebookService;
use Illuminate\Http\Request;
use App\Models\Notebook;
use App\Models\Verse;

class NotebookController extends Controller
{


    public function __construct(protected $verseRepository = new VerseRepository(), protected $notebookService = new NotebookService())
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notebook = Notebook::paginate(20);
        return view('notebook.index', compact('notebook'));
    }

    public function getVerseByDayAndMonth(Request $request)
    {
        $verses = $this->verseRepository->getVerseByMonthAndDay($request->month,  $request->day);
        $currentVerse = $request->journalType == "morning" ? $verses->morning : $verses->evening;
        $validateJournal = $this->notebookService->validateJournal($verses->id, $request->journalType);

        return response()->json([
            'success' => true,
            'verse_id' => $verses->id,
            'validate' => !$validateJournal ? false : true,
            'validate_data' => !$validateJournal ? [] : $validateJournal['data'],
            'verse' => $currentVerse
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $currentVerseDay = $this->verseRepository->getCurrentDayVerses();
        $verses = $this->verseRepository->getFormattedVerses();

        return view('notebook.create', compact(
            'currentVerseDay',
            'verses'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'currentVerseInput' => 'required',
            'journalDateInput' => 'required',
            'journalTypeInput' => 'required',
            'verse_id' => 'required',
            'inputRhema' => 'required'
        ]);
        $validateJournal = $this->notebookService->validateJournal($validated['verse_id'], $request->journalType);
        if ($validateJournal) {
            return redirect()->back()->with('message', "Can't have two journal at the same time, Please try again..");
        }

        $date = explode("/", $validated['journalDateInput']);
        $createNote = $this->notebookService->createNote([
            'title' => $validated['currentVerseInput'],
            'description' => $validated['inputRhema'],
            'verse_id' => $validated['verse_id'],
            'day' => $date[1],
            'month' => $date[0],
            'year' => $date[2],
            'user_id' => auth()->user()->id,
            'journal_type' => $validated['journalTypeInput'],
        ]);
        if (!$createNote) {
            return redirect()->back()->with('message', "An error occurred, we already notified the developer, Please try again..");
        }

        return redirect()->back()->with('success', "✅ Note Created Successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // public function validateNotebook(Request $request)
    // {
    //     $validated = $request->validate([
    //         'year' => 'required',
    //         'month' => 'required',
    //         'day' => 'required',
    //         'journalType' => 'required',
    //         'title' => 'required',
    //     ]);

    //     $validate = $this->notebookService->validateJournal($request->year, $request->month, $request->day, $request->title);
    //     if (!$validate) {
    //         return response()->json([
    //             'success' => true,
    //             'message' => "You don't have journal yet on this day",
    //         ]);
    //     } else {
    //         return response()->json([
    //             'success' => false,
    //             'message' => "You already have a journal on " . $request->month . "/" . $request->day . "/" . $request->year,
    //         ]);
    //     }
    // }
}