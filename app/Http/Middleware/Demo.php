<?php

namespace App\Http\Middleware;

use Closure;

class Demo
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

        /* This Demo middleware needs to be placed in Kernel.php under protected $middleware array "\App\Http\Middleware\Demo"
         *
         * If the request does not has the key "foo"
         * redirect to articles
         * IMPORTANT NOTE: this sometimes might cause a loop for example if this is attached to all routes
         * for example:
         * if we visit articles/create which doesn't have the foo key, site will be redirected to articles
         * BUT articles doesn't have the key YET either, so this will end up in a redirecting loop
         * We can add another condition such as $request->has('articles/create')
         * */

        if($request->has('foo')){
            return redirect('articles');
        }
//        var_dump($request);
        return $next($request);
    }
}
