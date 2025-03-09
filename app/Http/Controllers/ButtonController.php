<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Button;
use Illuminate\Support\Facades\Redirect;

class ButtonController extends Controller
{
    public function index()
    {
        $buttons = Button::all();
        return view('index', compact('buttons'));
    }

    public function edit($id)
    {
        $button = Button::findOrFail($id);
        return view('add', compact('button'));
    }

    public function saves(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|min:3|max:255',
            'link' => 'required|url',
            'color' => 'required|in:red,blue,green,yellow'
        ]);

        $button = Button::updateOrCreate(
            ['id' => $request->id],
            [
                'title' => htmlspecialchars($request->title),
                'link' => htmlspecialchars($request->link),
                'color' => $request->color
            ]
        );

        return Redirect::route('index')->with('success', 'Button updated successfully!');
    }

    public function delete($id): RedirectResponse
    {
        Button::where('id', $id)->update([
            'title' => '',
            'link' => '',
            'color' => 'white'
        ]);

        return Redirect::route('index')->with('success', 'Button updated successfully!');
    }
}
