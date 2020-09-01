<?php

namespace App\Providers;

use App\Company;
use Illuminate\Support\ServiceProvider;
use App\Product;
use App\Category;
use App\SparePart;
use App\Resource;
use App\Http\Cart\ProductInCart;
use App\User;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $products = Product::all();
        $categories = Category::all();
        $spareParts = SparePart::all();
        $resources = Resource::all();
        $productsCart = ProductInCart::addCartProduct();
        $companies = Company::all();

        $users = User::all();
        $newUsers = User::where('user_status_id', null)->get();
        $count = count($newUsers);


        view()->share([
            'products' => $products,
            'categories' => $categories,
            'spareParts' => $spareParts,
            'resources' => $resources,
            'productsCart' => $productsCart,
            'users' => $users,
            'count' => $count,
            'companies' => $companies,
        ]);

    }
}
