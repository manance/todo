<x-layout>
    <x-slot:title>Profils</x-slot:title>
    <h1>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h1>
    <form method="POST" action="/logout">
        @csrf
        @method("delete")
        <button>Atteikties</button>
    </form>
</x-layout>
