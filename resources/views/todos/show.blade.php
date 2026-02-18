<x-layout>
    <x-slot:title>{{ $todo->content }}</x-slot:title>
    <h1>{{ $todo->content }}</h1>
    <p>Izpildīs: {{ $todo->completed ? "Jā" : "Nē" }}</p>
    <a href="/todos/{{ $todo->id }}/edit">Atjauno</a>
    <form action="/todos/{{ $todo->id }}" method="POST">
        @csrf
        @method("delete")
        <button>Dzēst</button>
    </form>
</x-layout>

