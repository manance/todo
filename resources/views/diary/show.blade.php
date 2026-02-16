<x-layout>
    <x-slot:title>{{ $last_todo->title }}</x-slot:title>
    <h1>{{ $last_todo->title }}</h1>
    <p>{{ $last_todo->body }}</p>
    <p>{{ $last_todo->date }}</p>
</x-layout>