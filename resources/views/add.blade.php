@extends('layouts.app')
@section('content')
    <div class="config-container">
        <form action="{{ route('button.save') }}" method="POST">
            @csrf

            <input type="hidden" name="id" value="{{ $button->id ?? '' }}">

            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title', $button->title ?? '') }}" required>

            <label for="link">Link:</label>
            <input type="url" id="link" name="link" value="{{ old('link', $button->link ?? '') }}" required>

            <label for="color">Color:</label>
            <select id="color" name="color">
                <option value="" disabled selected>Choose a color</option>
                <option value="red" {{ (isset($button->color) && $button->color === 'red') ? 'selected' : '' }}>Red</option>
                <option value="blue" {{ (isset($button->color) && $button->color === 'blue') ? 'selected' : '' }}>Blue</option>
                <option value="green" {{ (isset($button->color) && $button->color === 'green') ? 'selected' : '' }}>Green</option>
                <option value="yellow" {{ (isset($button->color) && $button->color === 'yellow') ? 'selected' : '' }}>Yellow</option>
            </select>

            <button type="submit" class="form-button">Save</button>
        </form>

        <button type="button" class="form-button back-button" onclick="goBackToDashboard()">Back</button>
    </div>
@endsection
