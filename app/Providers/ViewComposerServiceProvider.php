<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Message;
class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->composeNavigation();
    }

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

    public function composeNavigation()
    {
        view()->composer('partial.nav', function ($view) {
            $view->with('latest', Message::latest()->first());
        });
    }

}
