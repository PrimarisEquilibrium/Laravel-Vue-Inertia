<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        // Set shared props that can be accessed with $page.props.<entry>
        // Useful when you have the authenticated user
        return array_merge(parent::share($request), [
            // Synchronously
            "auth.user" => "Jon" ?? null,

            // Alternative syntax
            // Inertia::share("auth.user", "Jon")

            // Lazily
            // 'auth.user' => fn () => $request->user()
            //     ? $request->user()->only('id', 'name', 'email')
            //     : null,
        ]);
    }
}
