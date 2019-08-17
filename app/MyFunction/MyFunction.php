<?php
// select option đa cấp, $data lấy bên controller getadd
/*
*  $parent là cấp mặc định cho là 0 cấp cha
* $str là chuỗi nối phân biệt cấp cha con
* $select để biết đang sửa ở danh mục nào
*/
function cate_parent($dataCat, $parent = 0, $str = "-", $select = 0)
{
    foreach ($dataCat as $value)
    {
        $id        = $value["cat_id"];
        $name      = $value["cat_name"];
        $parent_id = $value["cat_parent_id"];
        if ($parent_id == $parent)
        {
            if ($select != 0 && $id == $select)
            {
                echo "<option value='$id' selected='selected'>$str $name</option>";
            } else
            {
                echo "<option value='$id'>$str $name</option>";
            }

            cate_parent($dataCat, $id, $str . "--");
        }
    }
}

/*
* upload anh
*/
if (!function_exists('upload_image'))
{
    /**
     * @param       $file [tên file trùng tên input]
     * @param array $extend [ định dạng file có thể upload được]
     * @return array|int [ tham số trả về là 1 mảng - nếu lỗi trả về int ]
     */
    function upload_image($file, $folder = '', array $extend = array())
    {
        $code = 1;
        // lay duong dan anh
        $baseFilename = public_path() . '/img/' . '/uploads/' . $_FILES[$file]['name'];
        // thong tin file
        $info = new SplFileInfo($baseFilename);
        // duoi file
        $ext = strtolower($info->getExtension());
        // kiem tra dinh dang file
        if (!$extend)
        {
            $extend = ['png', 'jpg', 'jpeg', 'gif'];
        }
        if (!in_array($ext, $extend))
        {
            return $data['code'] = 0;
        }
        // Tên file mới
        $nameFile = trim(str_replace('.' . $ext, '', strtolower($info->getFilename())));
        $filename = date('Y-m-d__') . str_slug($nameFile) . '.' . $ext;
        // thu muc goc de upload
        $path = public_path() . '/img/' . '/uploads/' ;
        if ($folder)
        {
            $path = public_path() . '/img/' . '/uploads/' . $folder . '/' ;
        }
        if (!\File::exists($path))
        {
            mkdir($path, 0777, true);
        }
        // di chuyen file vao thu muc uploads
        move_uploaded_file($_FILES[$file]['tmp_name'], $path . $filename);
        $data = [
            'name'     => $filename,
            'code'     => $code,
            'path_img' => 'img/' . 'uploads/' . $filename
        ];
        return $data;
    }
}
if (!function_exists('pare_url_file'))
{
    function pare_url_file($image, $folder = '')
    {
        if (!$image)
        {
            return '/img/no-image.jpg';
        }
        $explode = explode('__', $image);
        if (isset($explode[0]))
        {
            $time = str_replace('_', '/', $explode[0]);
            return 'img' . '/uploads/' . $folder . '/'. $image;
        }
    }
}

/**
 * middleware lay thong tin nguoi dung dang nhap
 * $type là guard có thể là web, ...
 */
if (!function_exists('get_data_user'))
{
    function get_data_user($type, $field = 'user_id')
    {
        return Auth::guard($type)->user() ? Auth::guard($type)->user()->$field : '';
    }
}
