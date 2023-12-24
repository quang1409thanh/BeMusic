<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song; // Đảm bảo rằng bạn đã import model Song

class SearchController extends Controller
{
    //


    public function search(Request $request)
    {
        $keyword = $request->input('keyword'); // Lấy từ khóa tìm kiếm từ request

        // Sử dụng Eloquent để truy vấn bảng songs
        $songs = Song::where('title', 'like', "%$keyword%")
        ->orWhereHas('artist', function ($query) use ($keyword) {
            $query->where('name', 'like', "%$keyword%");
        })
        ->orWhereHas('album', function ($query) use ($keyword) {
            $query->where('title', 'like', "%$keyword%");
        })
        ->with(['artist', 'album'])
        ->get();
        $songs = $songs->map(function ($song) {
            unset($song->artist_id);
            unset($song->album_id);
            return $song;
        });
        
            // Trả về thông tin bài hát dưới dạng JSON hoặc view tùy thuộc vào yêu cầu của bạn
        return response()->json(['songs' => $songs]);
    }
}
