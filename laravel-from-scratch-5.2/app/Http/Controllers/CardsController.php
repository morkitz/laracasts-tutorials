<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Card;
use App\Http\Requests;

class CardsController extends Controller
{
   public function index()
   {
      //$cards = DB::table('cards')->get();
      $cards = Card::all();
      return view('cards.index', compact('cards'));
   }

   public function show(Card $card)
   {
      //$card = Card::find($id);
      //return $card;

      // Eager load the card - notes - user relationship
      $card->load('notes.user');
      return view('cards.show', compact('card'));
   }
}
