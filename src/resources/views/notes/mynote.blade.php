@extends('layouts.master')

@section('title','Your Note')
@section('main')

    @if($user)
    <p>ようこそ、{{$user->name}}さん。</p>
    @endif
    
    <hr>
    <p>好きなメモを記録してください。<br>
    このページでは、自分のメモのCRUD処理が可能です。</p>

    <div class="row my-3">
        <a class="btn btn-primary" href="/notes/mynote/add">自分のメモを追加する</a>

        <form action="/notes/mynote" method="post">
            @csrf
            <label for="">自分のメモを検索：</label>
            <input type="text" name="" value="">
            <input class="btn btn-secondary" type="submit" name="" value="検索">

        </form>

    </div>

    <div class="row">
        <table class="table">
            <tr>
                <th>ID:</th>
                <th>Title</th>
                <th>Content</th>
                <th>Updated</th>
                <th></th>
            </tr>
            @foreach($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->content}}</td>
                <td>{{$item->getUpdated()}}</td>
                <td><a class="btn btn-primary" href="/notes/mynote/edit?id={{$item->id}}">編集</a>
                <a class="btn btn-secondary" href="/notes/mynote/delete?id={{$item->id}}">削除</a></td>
            </tr>
            @endforeach


        </table>
    </div>

@endsection
