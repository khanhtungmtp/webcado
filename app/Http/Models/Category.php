<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'cat_id';
    protected $fillable = ['cat_id', 'cat_name', 'cat_slug', 'cat_publish', 'cat_meta_description', 'cat_meta_keywords'];
//    protected $guarded  = [];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
    protected $status = [
        1 => [
            'name' => 'Hiển thị',
            'class' => 'label-success',
        ],
        0 => [
            'name' => 'Không hiển thị',
            'class' => 'label-danger'
        ]
    ];

    public function getStatus()
    {
        return array_get($this->status, $this->cat_publish, '[N\A]');
    }
    // public function news_in_mod($mod_id){
    //     $news = News::where('cat_id',$mod_id)->skip(0)->take(5)->get();
    //     return $news;
    // }
}
