<x-layout>
    <x-slot:title>Pievieno</x-slot:title>
    <h1>Pievieno izdarītu uzdevumu!</h1>
    <form method="POST" action="/diary">
        @csrf
        <input name="title" type="text">
        @error("title")
            <p>{{ $message }}</p>
        @enderror
        <input name="body" type="textarea">
        @error("body")
            <p>{{ $message }}</p>
        @enderror
        <input name="date" type="date">
        @error("date")
            <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</x-layout>