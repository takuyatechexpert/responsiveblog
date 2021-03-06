<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function store(Request $request) {

        // $post->image = $request->input('image');
        
        // $post->save();
        // return redirect() -> route('admin.home');
        
        // 注意事項

        // viewのformに
        // enctype="multipart/form-data"
        // の記述がないと画像がアップロードできない

        $this->validate($request, [
            
            // input のnameが重要

            'file' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MIMEタイプを指定
                'mimes:jpeg,png',
                // 最小縦横120px 最大縦横400px
                // 'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',
                ]
                ]);
                
                if ($request->file('file')->isValid([])) {
                    $post = new Post;
                    $filename = $request->file->store('public');
                    
                    // $user = User::find(auth()->id());
                    // $post->image = $request->file->store('public');
                    $post->image = basename($filename);
                    $post->title = $request->input('title');
                    $post->description = $request->input('description');
                    $post->save();

                    return redirect()->route('admin.home')->with('success', '保存しました。');
                } else {
                    return redirect()
                        ->back()
                        ->withInput()
                        ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
                }
    }

    public function show($id)
    {
        //
        $post = Post::findOrFail($id);

        return view('admin.post.show', compact('post'));
    }

    public function index()
    {
        $posts = Post::orderBy('updated_at', 'desc')->get();

        return view('admin.post.index', compact('posts'));
    }

    // 管理画面用投稿編集用
    public function edit($id)
    {
        //
        $post = Post::find($id);

        return view('admin.post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        //
        $post = Post::find($id);
        // if($request->file('file')->isEmpty()){
        //     // $default = $request->query("image");
        //     $post->title = $request->input('title');
        //     $post->description = $request->input('description');
        //     $post->save();

        //         return redirect()->route('post.index')->with('success', '更新しました。');
        // } else {

            $this->validate($request, [
                'file' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MIMEタイプを指定
                'mimes:jpeg,png',
                // 最小縦横120px 最大縦横400px
                // 'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',
                ]
                ]);
                
                if ($request->file('file')->isValid([])) {
                    $filename = $request->file->store('public');
                    
                    // $user = User::find(auth()->id());
                    // $post->image = $request->file->store('public');
                    $post->image = basename($filename);
                    $post->title = $request->input('title');
                    $post->description = $request->input('description');
                    $post->save();
                    
                    return redirect()->route('post.index')->with('success', '更新しました。');
                } else {
                    return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
                }
            // }
    }
}
