<x-layout>
    <x-slot:title>Pieteikšanās</x-slot:title>
    <h1>Piesakies savam profilam!</h1>
    <form method="POST" action="/login">
        @csrf
        <label>E-pasts: <input type="email" name="email" required value="{{ old('email', '') }}"></label>
        <label>Parole: <input type="password" name="password"></label>
        <button>Pieteikties</button>
    </form>
</x-layout>