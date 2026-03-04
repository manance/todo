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
        <label>Vārds: <input type="text" name="first_name"></label>
        <label>Uzvārds: <input type="text" name="last_name"></label>
        <lable>E-pasts: <input type="email" name="email"></lable>
        <label>Parole: <input type="password" name="password"></label>
        <label>Apstiprini paroli: <input type="password" name="password_confirmation"></label>
    </form>
</x-layout>