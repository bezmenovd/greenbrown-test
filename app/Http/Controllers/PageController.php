<?php

namespace App\Http\Controllers;

use App\Http\Requests\Page\SwitchThemeRequest;

class PageController
{
    public function index()
    {
        return tview("index");
    }

    public function contacts()
    {
        return tview("contacts");
    }

    public function switchTheme(SwitchThemeRequest $request)
    {
        session(['theme' => $request->theme]);

        return redirect()->back();
    }
}
