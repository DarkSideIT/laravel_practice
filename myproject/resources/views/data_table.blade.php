@extends('layouts.app')

@section('content')
    <h2>Таблица данных</h2>
    <nav>
            <ul>
                <li><a href="/form">Форма заполнения</a></li>
                <li><a href="/data-table">Студенты</a></li>
            </ul>
        </nav>
    @if(count($data) > 0)
        <table>
            <thead>
                <tr>
                    <th>Имя</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Univercity</th>
                    <th>Faculty</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['age'] }}</td>
                        <td>{{ $item['univercity'] }}</td>
                        <td>{{ $item['faculty'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Нет данных для отображения</p>
    @endif
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