<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        if(Schema::hasTable('categories')){
             View::share('categories', Category::all());
        }
        Validator::extend('max_lines', function ($attribute, $value, $parameters, $validator) {
            $maxLines = $parameters[0];
            $lines = preg_split('/\r\n|\r|\n/', $value);
            return count($lines) <= $maxLines;
        });

        Validator::replacer('max_lines', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':max_lines', $parameters[0], $message);
        });
        Validator::extend('max_files', function ($attribute, $value, $parameters, $validator) {
            $maxFiles = $parameters[0];
            return count($value) <= $maxFiles;
        });

        Validator::replacer('max_files', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':max_files', $parameters[0], $message);
        });
    }
}
