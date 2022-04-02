<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note; // notesテーブルをモデル化した、Noteモデルを使う
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    public function index(Request $request){
        return view('notes.index');
    }

    // 個人ノートの表示画面
    public function mynote(Request $request){
        // ユーザー情報を取得
        $user = Auth::user();
        // ユーザーのIDと一致するメモを取得する
        $items = Note::where('user_id', $user->id)->get();
        return view('notes.mynote', ['items' => $items, 'user' => $user]);
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
