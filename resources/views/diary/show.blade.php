<x-layout>
    <x-slot:title>{{ $diary->title }}</x-slot:title>
    <h1>{{ $diary->title }}</h1>
    <p>{{ $diary->body }}</p>
    <p>{{ $diary->date }}</p>
    <a href="/diary/{{ $diary->id }}/edit">Rediģēt</a>
    <form action="/diary/{{ $diary->id }}" method="POST">
        @csrf
        @method("delete")
        <button>Dzēst</button>
    </form>
</x-layout>