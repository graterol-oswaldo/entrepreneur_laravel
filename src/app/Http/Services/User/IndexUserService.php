<?php

namespace App\Http\Services\User;

use Illuminate\Http\Request;
use App\Models\User;

class IndexUserService
{

    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    static public function execute(Request $request) 
    {
    
    
             
        // Initialize query 
        $query = User::query();

        // search 
        $search = $request->input("search");
        if ($search) {
            $query->where(function ($query) use ($search) {
                $query
                    ->where("name", "like", "%$search%")
                    ->orWhere("email", "like", "%$search%");
            });
        }

        // sort 
        $sort = $request->input("sort");
        $direction = $request->input("direction") == "desc" ? "desc" : "asc";
        
        //if ($sort) { $query->orderBy($sort, $direction); } 
        if ($sort) {
            $query->orderBy($sort, $direction);
        }

        // get paginated results 
        $users = $query
            ->paginate(5)
            ->appends(request()->query());
        return response()->json($users);
        
        //return response(User::paginate(5));
        
        //return Inertia::render("Users/Index", [
        //    "rows" => $users,
        //    "sort" => $request->query("sort"),
        //    "direction" => $request->query("direction"),
        //    "search" => $request->query("search"),
        //]);
    }

}
