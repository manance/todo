<x-layout>
    <x-slot:title>Dienasgrāmata</x-slot:title>
    <h1>Visi pabeigtie uzdevumi:</h1>
    <ul>
        @foreach ($diaries as $diary)
            <li><a href="/diary/{{ $diary->id }}">{{ $diary->title }}</a></li>
        @endforeach
    </ul>    
</x-layout>