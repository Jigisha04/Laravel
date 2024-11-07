<?php

namespace App\Providers;

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
        function reverseString($str) {
            $reversed = '';
            $length = strlen($str);
        
            // Loop through the string in reverse order
            for ($i = $length - 1; $i >= 0; $i--) {
                $reversed .= $str[$i];
            }
        
            return $reversed;
        }
        
        $string = "MADAM";
        $reversedString = reverseString($string);

        function factorial($n) {
            if ($n == 0) {
                return 1;
            } else {
                return $n * factorial($n - 1);
            }
        }
        $factorialValue = factorial(6);
        view()->share('name','Jigisha Sharma');
        view()->share('factorial',$factorialValue);
        view()->share('reverse',$reversedString);
        //
    }
}
