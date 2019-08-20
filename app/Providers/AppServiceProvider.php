<?php

namespace App\Providers;

use App\Models\Chat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Advert;

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
        Schema::defaultStringLength(191);
        view()->composer('layout.header', function ($views)
        {
            $adverts_top = Advert::where('hide', 2)->where('area', 1)->orderBy('sort', 'asc')->get();
            $categories  = Category::where('cat_parent_id', 0)->get();
            $menu        = array();
            foreach ($categories as $key => $cat)
            {
                $childCates             = Category::where('cat_parent_id', $cat['cat_id'])->get();
                $menu[$cat['cat_name']] = array();
                //               $menu[$cat['cat_id']] = array();
                foreach ($childCates as $child)
                {
                    array_push($menu[$cat['cat_name']], $child['cat_name']);
                    //                   array_push($menu[$cat['cat_id']], $child['cat_id']);
                }
            }


            $data = [
                'menus'       => $menu,
                'categories'  => $categories,
                'adverts_top' => $adverts_top
            ];
            //           dd($menu);

            $views->with($data);
        });
    }
}
