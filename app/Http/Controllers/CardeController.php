<?php

namespace Textil\Http\Controllers;

use Illuminate\Http\Request;
use Textil\Carde;
use Textil\Events\ScoreUpdated;
use Textil\User;

class CardeController extends Controller
{
    /**
     * @param Carde $card
     * @return mixed
     */
    public function show(Carde $card)
    {
//        $user = auth()->user();
        $user = auth()->user();
        $user->score = $user->score + $card->value;
        $user->save();

        event(new ScoreUpdated($user));

        return redirect()->back()->withValue($card->value);
    }

    public function leaderboard () {
        return User::all(['id', 'name', 'score']);
    }
}
