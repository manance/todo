<x-layout>
    <x-slot:title>Pievieno</x-slot:title>
    <h1>Pievieno izdarītu uzdevumu!</h1>
    <form method="POST" action="/diary">
        @csrf
        <input name="title" type="text" value="{{ old('title', '') }}">
        @error("title")
        <p>{{ $message }}</p>
        @enderror
        <input name="body" type="textarea" value="{{ old('body', '') }}">
        @error("body")
        <p>{{ $message }}</p>
        @enderror
        <input name="date" type="date" value="{{ old('date', '') }}">
        @error("date")
        <p>{{ $message }}</p>
        @enderror
        <button name="id" value="{{ Auth::user()->id }}">Saglabāt</button>
    </form>
</x-layout>