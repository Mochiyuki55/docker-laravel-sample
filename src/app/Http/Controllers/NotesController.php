<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index(Request $request){
        return view('notes.index');
    }

    // 個人ノートの表示画面
    public function mynote(Request $request){
        return view('notes.mynote');
    }

    // 個人ノートのメモ追加画面
    public function add(Request $request){
        return view('notes.add');
    }
    // 個人ノートのメモ追加処理
    public function create(Request $request){

    }

    // 個人ノートのメモ編集画面
    public function edit(Request $request){
        return view('notes.edit');
    }
    // 個人ノートのメモ編集処理
    public function update(Request $request){

    }

    // 個人ノートのメモ削除確認画面
    public function delete(Request $request){
        return view('notes.delete');
    }
    // 個人ノートのメモ削除処理
    public function remove(Request $request){

    }
}
