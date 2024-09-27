@extends('themes.cuba.layouts.app')

@section('content')
    <h1>Главная</h1>
    <form method="POST" action="{{ route('switch-theme') }}">
        @csrf
        <select name="theme">
            <option value="classic" {{ session('theme') == 'classic' ? 'selected' : '' }}>Classic</option>
            <option value="cuba" {{ session('theme') == 'cuba' ? 'selected' : '' }}>Cuba</option>
        </select>
        <button type="submit" class="btn">Сохранить</button>
    </form>
@endsection
