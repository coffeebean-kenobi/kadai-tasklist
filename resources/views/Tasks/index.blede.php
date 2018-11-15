@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>タスク一覧</h1>
    @if (count($tasks) > 0)
       <ul>
           @foreach ($tasks as $task)
           <li>{{ $task->content }}</li>
           @endforeach
       </ul>
    @endif

@endsection