<x-layout>
    <x-slot:title>Pievieno</x-slot:title>
    <h1>Izveido uzdevumu!</h1>
    <form method="POST" action="/todos">
        @csrf
        <input name="content" value="{{ old('content', $todo->content) }}">
        @error("content")
            <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</x-layout>