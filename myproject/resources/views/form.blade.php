@extends('layouts.app')

@section('content')
    <h2>Форма ввода данных</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="/form" method="post">
        @csrf

        <label for="name">Имя:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')<span class="text-danger">{{ $message }}</span>@enderror

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')<span class="text-danger">{{ $message }}</span>@enderror

        <label for="age">Age:</label>
        <input type="text" name="age" value="{{ old('age') }}">
        @error('age')<span class="text-danger">{{ $message }}</span>@enderror

        <label for="univercity">Univercity:</label>
        <input type="text" name="univercity" value="{{ old('univercity') }}">
        @error('univercity')<span class="text-danger">{{ $message }}</span>@enderror

        <label for="faculty">Faculty:</label>
        <input type="text" name="faculty" value="{{ old('faculty') }}">
        @error('faculty')<span class="text-danger">{{ $message }}</span>@enderror

        <button type="submit">Отправить</button>
    </form>


    @if(isset($successMessage))
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endif
@endsection


<style>
        h2 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            max-width: 300px;
            margin: 0 auto;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            padding: 8px; /* Добавим отступы вокруг текста в поле ввода */
            margin-bottom: 10px; /* Отступ между полями ввода */
        }
        </style>