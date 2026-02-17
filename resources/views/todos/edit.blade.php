<x-layout>
    <x-slot:title>Rediģē</x-slot:title>
    <h1>Rediģē savu uzdevumu!</h1>
    <form action="/todos/{{ $todo->id }}" method="POST">
        @csrf
        @method('PUT')
        
        // Nesaprotu, kādu sintaksi ievērot, lai lietotāja ievadītā informācija nepazustu, izmantojot funkciju die() un trīskāršo operatoru.

        <label>Uzdevums: <input name="content" type="text" value="{{ old('content', $todo->content) ? $todo->content : '' }}"></label>
        @error("content")
            <p>{{ $message }}</p>
        @enderror
        <input type="hidden" name="completed" value="0">
        <label>Izpildīts: <input name="completed" type="checkbox" value="1" {{ old ("completed", $todo->completed) ? 'checked' : ''}}></label>
        @error("completed")
            <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</x-layout>