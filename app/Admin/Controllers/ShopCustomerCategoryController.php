<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ShopCustomerCategory;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ShopCustomerCategoryController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Chủ đề');
            // $content->description('description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('Chỉnh sửa chủ đề');
            // $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('Tạo chủ đề');
            // $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(ShopCustomerCategory::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            // $grid->image('Hình ảnh')->image();
            $grid->title('Tên')->sortable();
            // $grid->parent('Chủ đề cha')->display(function ($parent) {
            //     return (ShopCustomerCategory::find($parent)) ? ShopCustomerCategory::find($parent)->title : '';
            // });
            $grid->status('Status')->switch();
            $grid->sort('Sắp xếp')->editable();

            $grid->disableExport();
            $grid->disableRowSelector();

            $grid->actions(function ($actions) {
                $actions->disableView();
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(ShopCustomerCategory::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title', 'Tên')->rules('required', ['required' => 'Bạn chưa nhập tên']);
            // $form->text('title_en', 'Tên(Tiếng Anh)');
            // $arrCate = (new ShopCustomerCategory)->listCate();
            // $arrCate = ['0' => '== Chủ đề gốc =='] + $arrCate;
            // $form->select('parent', 'Chủ đề cha')->options($arrCate);
            // $form->image('image', 'Hình ảnh')->uniqueName()->move('cms_category')->removable();
            // $form->text('uniquekey', 'Unique Key')->rules(function ($form) {
            //     return 'required|unique:shop_category,uniquekey,' . $form->model()->id . ',id';
            // }, ['required' => 'Bạn chưa nhập mã danh mục', 'unique' => 'Mã danh mục này đã có rồi'])->placeholder('Ví dụ: thoi-trang, thoi-trang-cho-nam,...')->help('Viết liền, không dấu, không được trùng nhau.');
            $form->number('sort', 'Sắp xếp')->default(0);
            $form->switch('status', 'Trạng thái')->default(1);
            // $form->divide('Hỗ trợ SEO');
            // $form->html('<b>Hỗ trợ SEO</b>');
            // $form->tags('keyword', 'Từ khóa');
            $form->textarea('description', 'Mô tả')->rules('max:300', ['max' => 'Tối đa 300 kí tự']);
            // $form->display('created_at', 'Created At');
            // $form->display('updated_at', 'Updated At');
            $form->saved(function (Form $form) {
                // $file_path_admin = config('filesystems.disks.admin.root');
                try {
                    // if (!file_exists($file_path_admin . '/thumb/' . $form->model()->image)) {
                    //     \Image::make($file_path_admin . '/' . $form->model()->image)->insert(public_path('watermark.png'), 'bottom-right', 10, 10)->save($file_path_admin . '/' . $form->model()->image);
                    //     //thumbnail
                    //     $image_thumb = \Image::make($file_path_admin . '/' . $form->model()->image);
                    //     $image_thumb->resize(200, null, function ($constraint) {
                    //         $constraint->aspectRatio();
                    //     });
                    //     $image_thumb->save($file_path_admin . '/thumb/' . $form->model()->image);
                    //     //end thumb
                    // }
                } catch (\Exception $e) {
                    //
                }

            });
        });
    }

    public function show($id)
    {
        return Admin::content(function (Content $content) use ($id) {
            $content->header('');
            $content->description('');
            $content->body(Admin::show(ShopCustomerCategory::findOrFail($id), function (Show $show) {
                $show->id('ID');
            }));
        });
    }
}
