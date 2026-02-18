<x-layout>
    <x-slot:title>Rediģē</x-slot:title>
    <h1>Rediģē ierakstu!</h1>
    <form action="/diary/{{ $diary->id }}" method="POST">
        @csrf
        @method("PUT")
        <input name="title" type="text" value="{{ old('title', $diary->title) }}">
        @error("title")
        <p>{{ $message }}</p>
        @enderror
        <input name="body" type="textarea" value="{{ old('body', $diary->body) }}">
        @error("body")
        <p>{{ $message }}</p>
        @enderror
        <input name="date" type="date" value="{{ old('date', $diary->date) }}">
        @error("date")
        <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</x-layout>