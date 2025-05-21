<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;


class NoteController extends Controller
{

    public function index()
    {
        $notes = Note::latest()->get();
        return view('notes', compact('notes'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'note' => 'required|string|max:80',
        ]);

        if ($validator->fails()) {
            Flasher::addError(Arr::random([
                "Hmm... looks like you forgot to write something.",
                "Empty notes don’t echo — try adding a thought.",
                "Nothing to post yet! Your note needs a voice.",
                "Oops! You need to write before you publish.",
                "A blank space isn't quite a note. Say something!",
            ]));
            return redirect('/create')->withErrors($validator)->withInput();
        }

        Note::create([
            'note' => $request->note,
        ]);

        Flasher::addSuccess(Arr::random([
            'Nice drop — your note just echoed out.',
            'One more thought out in the world. Well done!',
            'Awesome! Your note is live.',
            'Done! Your thoughts are now out there.',
            'Great! You just dropped a note.',
        ]));
        return redirect('/create');
    }
}
