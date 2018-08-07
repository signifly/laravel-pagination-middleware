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
        $defaultCount = config('pagination.defaultCount');
        $maximumCount = config('pagination.maximumCount');
        $paginationKey = config('pagination.key');
        $paginationValue = min(
            intval($request->query($paginationKey, $defaultCount)),
            $maximumCount
        );

        $request->offsetSet($paginationKey, $paginationValue);

        return $next($request);
    }
}
