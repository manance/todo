<x-layout>
    <x-slot:title>Dienasgrāmata</x-slot:title>
    <h1>Dienasgrāmata</h1>
    <ul>
        @foreach (Auth::user()->diaries as $diary)
            <li><a href="/diary/{{ $diary->id }}">{{ $diary->title }}</a></li>
        @endforeach
    </ul>    
</x-layout>