@extends('layouts.master')

@section('title','Our Notes　|　削除確認')
@section('main')
    <p>こちらのメモを削除しますか？</p>

    <div class="row">
        <form class="form" action="/notes/mynote/delete" method="post">
            @csrf
            <table class="table">
                <tr>
                    <th>Title</th>
                    <td>phpのバージョンを確認する</td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td>php --version</td>
                </tr>
                <tr>
                    <th>Updated</th>
                    <td><?php echo date('Y/m/d h:m:s'); ?></td>
                </tr>
            </table>
            <input class="btn btn-danger" type="submit" name="" value="削除">
            <a class="btn btn-secondary" href="/notes/mynote">戻る</a>
        </form>

    </div>

@endsection
