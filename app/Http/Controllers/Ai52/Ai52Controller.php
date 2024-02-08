<?php

namespace App\Http\Controllers\Ai52;

use App\Http\Controllers\Controller;
use App\Models\Ai52\Piece;
use App\Models\Ai52\Theme;
use Illuminate\Http\Request;

class Ai52Controller extends Controller
{
    public function index(Request $request)
	{
        $themes = Theme::with(['pieces'])->orderBy('date', $request->query('order') == 'desc' ? 'DESC' : 'ASC')->paginate(8)->appends([
            'order' => $request->query('order'),
        ]);

        return view('projects.ai52.index')->with([
            'themes' => $themes,
            'dates' => $themes->groupBy(function($item) {
                return $item->date->format('F');
            })
        ]);
    }

    public function show(string $slug)
	{
        $piece = Piece::with(['theme.pieces'])->where('slug', $slug)->firstOrFail();
        
        $first = Piece::where('created_at', '<', $piece->created_at)->orderBy('created_at', 'ASC')->first();
        $next = Piece::where('created_at', '>', $piece->created_at)->orderBy('created_at', 'ASC')->first();
        $previous = Piece::where('created_at', '<', $piece->created_at)->orderBy('created_at', 'DESC')->first();
        $last = Piece::where('created_at', '>', $piece->created_at)->orderBy('created_at', 'DESC')->first();


        if(!$piece) {
            abort('404');
        }

        return view('projects.ai52.show')->with([
            'piece' => $piece, 
            'first' =>  $first, 
            'next' =>  $next, 
            'previous' => $previous,
            'last' => $last
        ]);
    }
}
