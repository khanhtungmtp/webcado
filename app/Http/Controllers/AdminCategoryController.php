<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AdminCategoryController extends AdminController
{
    /**
     * share toàn bộ danh mục cho toàn bộ controller
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Danh sách danh mục
     *
     */
    public function index()
    {
        return view('admin.category.index');
    }

    /**
     * Form mới danh mục
     *
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Tạo mới danh mục
     *
     */
    public function store(AdminCategoryRequest $request)
    {
        $this->createOrUpdate($request);
        return back()->with(['message' => 'Thêm mới danh mục thành công']);
    }

    /**
     * (get) Hiện trang chi tiết danh mục
     */
    public function show($cat_id)
    {
        return view('admin.category.show');
    }

    /**
     * (get) Hiện trang sửa danh mục
     *
     */
    public function edit($cat_id)
    {
        $category = Category::find($cat_id);
        $parent   = DB::table('categories')->where('cat_parent_id', $category->cat_parent_id)->first();
        return view('admin.category.edit', compact('category', 'parent'));
    }

    /**
     * (Post) cập nhập danh mục
     *
     */
    public function update(AdminCategoryRequest $request, $cat_id)
    {
        $this->createOrUpdate($request, $cat_id);
        return redirect()->route('admin.get.list.category')->with(['message' => 'Cập nhập danh mục thành công']);
    }

    /**
     * Xóa danh muc
     *
     */
    public function destroy($cat_id)
    {
        $category = Category::find($cat_id);
        $category->delete();
        return redirect()->route('admin.get.list.category')->with(['message' => 'Xóa danh mục thành công']);
    }

    /**
     * Tạo mới hoặc update danh mục
     * @param int $cat_id = null
     * @return Response
     */
    public function createOrUpdate($request, $cat_id = '')
    {
        $data = new  Category();
        if ($cat_id)
        {
            $data = Category::find($cat_id);
        }
        $data->cat_name             = $request->cat_name;
        $data->cat_slug             = str_slug($request->cat_name);
        $data->cat_parent_id        = $request->cat_parent_id;
        $data->cat_meta_description = $request->cat_meta_description ? $request->cat_meta_description : "";
        $data->cat_meta_keywords    = $request->cat_meta_keywords ? $request->cat_meta_keywords : $request->cat_name;
        $data->cat_publish          = $request->cat_publish == 'on' ? 1 : 0;
        $data->save();
    }

    /**
     * get action: delete, publish_status...
     * @param int $cat_id
     * @return Response
     */
    public function action($action, $cat_id)
    {
        if ($action)
        {
            $category = Category::find($cat_id);
            switch ($action)
            {
                case 'delete':
                    $category->delete();
                    break;
                case 'cat_publish':
                    $category->cat_publish = $category->cat_publish ? 0 : 1;
                    $category->save();
                    return redirect()->route('admin.get.list.category')->with(['message' => 'Cập nhập trạng thái danh mục thành công']);
                    break;
            }
        }
        return redirect()->route('admin.get.list.category')->with(['message' => 'Xóa danh mục thành công']);
    }
}
