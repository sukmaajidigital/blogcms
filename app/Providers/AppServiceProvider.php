<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!$this->app->runningInConsole()) {
            $this->loadDynamicRoutes();
        }

        // Tambahkan view composer untuk 'guard.layouts.header'
        View::composer('guard.layouts.header', function ($view) {
            $menus = Menu::orderBy('order')->get();
            $view->with('menus', $menus);
        });
    }
    protected function loadDynamicRoutes()
    {
        // Dapatkan semua data menu yang ada
        $menus = Menu::all();

        foreach ($menus as $menu) {
            Route::match([$menu->method], $menu->route, function () use ($menu) {
                // Pastikan view ada atau buat jika tidak ada
                if (!view()->exists($menu->view_name)) {
                    $this->createViewFile($menu->view_name);
                }

                return view('guard/' . $menu->view_name);
            })->name($menu->route);
        }
    }
    protected function createViewFile($viewName)
    {
        $path = resource_path('views/guard/' . str_replace('.', '/', $viewName) . '.blade.php');

        // Pastikan direktori ada
        File::ensureDirectoryExists(dirname($path));

        // Cek jika template.blade.php ada, gunakan sebagai konten default
        $templatePath = resource_path('views/guard/template.blade.php');
        if (File::exists($templatePath)) {
            $content = File::get($templatePath);
            $content = str_replace('{{ $viewName ?? \'Unnamed View\' }}', $viewName, $content);
        } else {
            // Jika template tidak ditemukan, gunakan konten default minimal
            $content = "<!-- Auto-generated view for {$viewName} -->\n<h1>{$viewName} Page</h1>";
        }

        // Buat file view baru dengan konten dari template
        File::put($path, $content);
    }
}
