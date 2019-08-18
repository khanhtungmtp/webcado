<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminNewRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminNewController extends Controller
{

    /**
     * (get) Hiển thị danh sách bài viết
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $news = News::with('category:cat_id,cat_name');
        if ($request->name_search)
            $news->where('new_title', 'like', '%' . $request->name_search . '%');
        if ($request->cat_search)
            $news->where('cat_id', $request->cat_search);
        if ($request->name_search && $request->cat_search)
            $news->where('new_title', 'like', '%' . $request->name_search . '%')->orWhere('cat_id', $request->cat_search);

        $news       = $news->orderByDesc('new_id')->paginate(10);
        $categories = $this->getAllCategories();
        return view('admin.new.index', compact('news', 'categories'));
    }

    /**
     * (get) Hiện trang tạo mới bài viết
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $categories = Category::where('cat_parent_id', '>', 0)->get();
        $categories= $this->getAllCategories();
        return view('admin.new.create', compact('categories'));
    }

    /**
     * (get) Hiển thị chi tiết bài viết
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new = News::find($id);
        return view('admin.new.index', compact('new'));
    }

    /**
     * (post) Them moi bai viet
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminNewRequest $request)
    {
        $this->insertOrUpdate($request);
        return back()->with(['message' => 'Thêm mới bài viết thành công']);
    }

    /**
     * tạo mới hoặc update bản ghi
     * @param int $id
     * @return Response
     */
    public function insertOrUpdate($request, $id = '')
    {
        $update = 0;
        $data   = new News();
        if ($id)
        {
            $update = 1;
            $new    = News::find($id);
        }
        $data                             = $request->all();
        $data['new_slug']                 = str_slug($request->new_title);
        $data['new_publish']              = $request->new_publish == 'on' ? 1 : 0;
        $data['admin_id']                 = 1;
        $data['new_meta_keywords']        = $request->new_meta_keywords ? $request->new_meta_keywords : $request->new_title;
        $data['	new_meta_description']    = $request->new_meta_description ? $request->new_meta_description : '';
        if ($request->hasFile('new_image'))
        {
            $file = upload_image('new_image', 'news');

            if (isset($file['name']))
            {
                $data['new_image'] = $file['name'];
            }
        } else {
             $data['new_image'] = $new->new_image;
        }
        if ($update == 0)
        {
            News::create($data);
        } else {
            $new->update($data);
        }
    }

    /**
     * lấy tất cả category
     * @param int $id
     * @return Response
     */
    public function getAllCategories()
    {
        return Category::all();
    }

    /**
     * (get) Hiện trang sửa bài viết
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = $this->getAllCategories();
        $new        = News::find($id);
        $parent   = DB::table('categories')->where('cat_id', $new->cat_id)->first();
        return view('admin.new.edit', compact('new', 'categories', 'parent'));
    }


    /**
     * (post) Cập nhập bài viết
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminNewRequest $request, $id)
    {
        $this->insertOrUpdate($request, $id);
        return redirect()->route('admin.get.list.news')->with(['message' => 'Cập nhập bài viết thành công']);
    }

    /**
     * get action: delete,...
     * @param int $id
     * @return Response
     */
    public function action($action, $id)
    {
        if ($action)
        {
            $new = News::find($id);
            switch ($action)
            {
                case 'delete':
                    $new->delete();
                    return redirect()->route('admin.get.list.news')->with(['message' => 'Xóa bài viết thành công']);
                    break;
                case 'new_publish':
                    $new->new_publish = $new->new_publish ? 0 : 1;
                    $new->save();
                    return redirect()->route('admin.get.list.news')->with(['message' => 'Cập nhập trạng thái bài viết thành công']);
                    break;
            }

        }

    }
}
