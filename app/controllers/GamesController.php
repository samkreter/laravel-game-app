<?php

// app/controllers/GamesController.php

class GamesController extends BaseController
{
    public function index()
    {
         // Show a listing of games.
	    $games = Game::all();
	    return View::make('index', compact('games'));
    }

    public function create()
    {
        // Show the create game form.
        return View::make('create');
    }

    public function handleCreate()
    {
         // Handle create form submission.
        $game = new Game;
        $game->title = Input::get('title');
        $game->publisher = Input::get('publisher');
        $game->complete = Input::has('complete');
        $game->save();
    }

    public function edit(Game $game)
    {
        // Show the edit game form.
        return View::make('edit');
    }

    public function handleEdit()
    {
        // Handle edit form submission.
    }

    public function delete()
    {
        // Show delete confirmation page.
        return View::make('delete');
    }

    public function handleDelete()
    {
        // Handle the delete confirmation.
    }
}
