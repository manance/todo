<x-layout>
    <x-slot:title>Profils</x-slot:title>
    <form method="POST" action="/logout">
        @csrf
        @method("delete")
        <button>Atteikties</button>
    </form>
</x-layout>
