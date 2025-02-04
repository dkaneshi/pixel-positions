<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        // Because of route-model binding Laravel will look for the tag with the
        // name from given bou the route and will return the record of the tab
        // we can then use that tag to get the jobs associated with it.
        return view('results', ['jobs' => $tag->jobs]);

    }
}
