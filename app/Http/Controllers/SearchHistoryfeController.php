<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\searchHistoryfe;

class SearchHistoryfeController extends Controller
{
    //
    public function addSearchHistory(Request $request) {
        if ($request->input('query') != null) {
            $searchHistory = [
                'userId' => $request->user()->id,
                'query' => $request->input('query')
            ];

            searchHistoryfe::create($searchHistory);
            return response()->json([
                'status' => true,
                //'query' => $request->input('query')
            ], 201);
        } else {
            return response()->json([
                'status' => false
            ], 400);
        }
    }

    public function getSearchHistory(Request $request) {
        $searchHistoryList = searchHistoryfe::all()->pluck('query');

        $formattedSearchHistory = $searchHistoryList->map(function ($item) {
            return ['query' => $item];
        });

        return response()->json([
            'search_history' => $formattedSearchHistory,
        ], 200);
    }
    


    public function deleteSearchHistory(Request $request) {
        $searchHistoryList = searchHistoryfe::where('userId', $request->user()->id)->get();
        foreach ($searchHistoryList as $searchHistory) {
            $searchHistory->delete();
        }

        return response()->json([

        ], 204);
    }
}
