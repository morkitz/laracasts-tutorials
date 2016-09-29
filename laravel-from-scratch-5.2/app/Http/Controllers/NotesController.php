<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Card;
use App\Note;

class NotesController extends Controller
{
   public function store(Request $request, Card $card)
   {
      // $note = new Note;
      // $note->body = $request->body;
      // $card->notes()->save($note);

      // $card->notes()->create([
      //    'body' => $request->body
      // ]);

      // $card->notes()->save(
      //    new Note(['body' => $request->body])
      // );

      // $card->notes()->save(
      //    new Note($request->all())
      // );

      $this->validate($request, [
            'body' => 'required|min:5'
         ]);
      $card->addNote(
         new Note(['body' => $request->body]),
         1
      );

      return back();
   }

   public function edit(Note $note)
   {
      return view('notes.edit', compact('note'));
   }

   public function update(Request $request, Note $note)
   {
      $note->update($request->all());

      return back();
   }
}
