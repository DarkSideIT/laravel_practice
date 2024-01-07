@extends('layouts.app')

@section('content')
    <h2>Таблица данных</h2>

    <nav>
        <ul>
            <li><a href="{{ route('students.create') }}">Форма заполнения</a></li>
            <li><a href="{{ route('students.index') }}">Студенты</a></li>
        </ul>
    </nav>

    <div class="table-container">
        @if(count($data) > 0)
            <table>
            <thead>
    <tr>
        <th>Имя</th>
        <th>Email</th>
        <th>Возраст</th>
        <th>Университет</th>
        <th>Факультет</th>
        <th>Категория</th>
        <th>Действия</th>
    </tr>
</thead>
<tbody>
    @foreach($data as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->university }}</td>
            <td>{{ $student->faculty }}</td>
            <td>{{ $student->category->name }}</td>
            <td>
                <!-- Остальные действия (просмотр, редактирование, удаление) -->
            </td>
        </tr>
    @endforeach
</tbody>

            </table>
        @else
            <p>Нет данных для отображения</p>
        @endif
    </div>
@endsection


<style>
    ul{
            display: flex;
            flex-direction: row;
            justify-content: center;
            padding: 0;
        }
        li{
            list-style: none;
            margin-right: 10px;
            padding: 6px;

        }
    h2{
        text-align: center;
    }

    .table-container{
        margin: 20px;
        overflow-x: auto;
    }

    table{
        width: 100%;
        border-collapse: collapse;
        margin: 0;
        border: 1px solid #ddd;
    }

    th, td{
        padding: 8px;
        border: 1px solid #ddd;
        text-align: left;
    }
    </style>