<?php

namespace App\Providers;

use Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Returns image tag
        Blade::directive('image', function ($expression) {
            $explode = explode(', ', $expression, 2);
            $path = $explode[0];
            $properties = '[]';
            $alt = '';
            if(isset($explode[1])) {
                $alt = substr($explode[1], 1, -1);
                $explode2 = explode(', ', $explode[1], 2);
                if(isset($explode2[1])) {
                    $alt = substr($explode2[0], 1, -1);
                    $properties = $explode2[1];
                }
            }
            return <<<EOT
<?php echo('<img src="' . app('image')->get($path, $properties) . '" alt="$alt"/>'); ?>
EOT;
        });

        // Is the given route active?
        Blade::if('active', function ($route, $slug = null) {
            if(Route::currentRouteName() == $route && Route::input('slug') == $slug) {
                return true;
            } else {
                return false;
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
