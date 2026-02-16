<x-layout>
    <x-slot:title>Dienasgrāmata</x-slot:title>
    <h1>Visi pabeigtie uzdevumi:</h1>
    <ul>
        @foreach ($last_todos as $last_todo)
            <li><a href="/diary/{{ $last_todo->id }}">{{ $last_todo->title }}</a></li>
        @endforeach
    </ul>    
</x-layout>