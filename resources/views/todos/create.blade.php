<x-layout>
    <x-slot:title>Pievieno</x-slot:title>
    <h1>Izveido uzdevumu!</h1>
    <form method="POST" action="/todos">
        @csrf
        <input name="content" value="{{ old('content', '') }}">
        @error("content")
            <p>{{ $message }}</p>
        @enderror
        <label>Prioritāte: <select name="priority">
            <option value="low">Zema</option>
            <option value="medium">Vidēja</option>
            <option value="high">Augsta</option>
        </select></label>
        <button name="id" value="{{ Auth::user()->id }}">Saglabāt</button>
    </form>
</x-layout>