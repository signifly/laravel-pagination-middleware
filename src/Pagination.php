<?php

namespace Signifly\Pagination;

use Closure;

class Pagination
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $paginationKey = config('pagination.key');

        $request->offsetSet($paginationKey, $request->paginationCount());

        return $next($request);
    }
}
