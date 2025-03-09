@extends('layouts.app')
@section('content')
    <div class="dashboard-container">
        <div class="dashboard">
            @foreach ($buttons as $button)
                <div class="button-cell" style="background-color: {{ htmlspecialchars($button->color ?? 'white') }};">
                    @if (!empty($button->link))
                        <div class="button-content">
                            <a href="{{ htmlspecialchars($button->link) }}" class="button-title" target="_blank">
                                {{ htmlspecialchars($button->title) }}
                            </a>
                            <button class="edit-button" onclick="window.location='{{ route('button.edit', $button->id) }}'">✏️</button>
                            <form action="{{ route('button.delete', $button->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button">🗑️</button>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('button.edit', $button->id) }}" class="empty-button">
                            <img src="{{ asset('images/button.png') }}" alt="Add Button" class="empty-button-icon">
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection
