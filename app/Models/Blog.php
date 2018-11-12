<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Blog extends Model
{
    public const POSTS_PER_PAGE = 10;

    protected $guarded = [];

    public static function getPaginated(Request $request)
    {
        $paginate = self::POSTS_PER_PAGE;
        if ($request->has('posts_per_page') and is_numeric($request->get('posts_per_page'))):
            $paginate = $request->get('posts_per_page');
        endif;
        return self::paginate($paginate);
    }
}
