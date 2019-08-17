<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table    = 'news';
    protected $primaryKey = 'new_id';
    protected $fillable = [
        'new_id', 'admin_id', 'cat_id', 'new_title', 'new_slug', 'new_description', 'new_content', 'new_image',
        'new_view', 'new_as_draff', 'new_total_rating', 'new_total_number_rating', 'new_publish', 'new_meta_description', 'new_meta_keywords'];
    protected $guarded  = [''];

    const STATUS_PUBLIC  = 1;
    const STATUS_PRIVATE = 0;
    protected $status = [
        1 => [
            'name'  => 'Hiển thị',
            'class' => 'label-success',
        ],
        0 => [
            'name'  => 'Không hiển thị',
            'class' => 'label-danger'
        ]
    ];

    /**
     * Hiển thị trạng thái
     **/
    public function getStatus()
    {
        return array_get($this->status, $this->new_publish, '[N\A]');
    }


    /**
     * category_id là khóa ngoại của product
     **/
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
