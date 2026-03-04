<x-layout>
    <x-slot:title>Pierakstīšanās</x-slot:title>
    <h1>Pieraksties!</h1>
    <form method="POST" action="/register">
        @csrf
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <label>Vārds: <input type="text" name="first_name" required value="{{ old('first_name', '') }}"></label>
        <label>Uzvārds: <input type="text" name="last_name" required value="{{ old('last_name', '') }}"></label>
        <label>E-pasts: <input type="email" name="email"  required value="{{ old('email', '') }}"></label>
        <label>Parole: <input type="password" name="password"></label>
        <label>Apstiprini paroli: <input type="password" name="password_confirmation"></label>
        <button>Pierakstīties</button>
    </form>
</x-layout>