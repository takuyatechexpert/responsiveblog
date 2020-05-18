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

}
