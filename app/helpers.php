<?php


if (! function_exists('tview')) {
    /**
     * Get the evaluated view contents for the given view (with theme).
     *
     * @param  string|null  $view
     * @param  \Illuminate\Contracts\Support\Arrayable|array  $data
     * @param  array  $mergeData
     * @return ($view is null ? \Illuminate\Contracts\View\Factory : \Illuminate\Contracts\View\View)
     */
    function tview(string $view) {
        return view(sprintf("themes.%s.%s", session('theme', 'classic'), $view));
    }
}