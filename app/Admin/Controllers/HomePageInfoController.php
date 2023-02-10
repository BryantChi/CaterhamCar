<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\HomePageInfo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\HomePageInfo as HomePage;

class HomePageInfoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new HomePageInfo(), function (Grid $grid) {
            $grid->disableFilterButton();
            $grid->showColumnSelector();
            // 显示快捷编辑按钮
            $grid->showQuickEditButton();
            $grid->column('id')->sortable();
            $grid->column('slide_setting')->hide();
            $grid->column('slide_setting_mob')->hide();
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });

            $info = HomePage::all();
            if (count($info) > 0) {
                $grid->disableCreateButton();
            }
            $grid->disableFilter();
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new HomePageInfo(), function (Show $show) {
            $show->panel()
                ->tools(function ($tools) {
                    // $tools->disableEdit();
                    // $tools->disableList();
                    // $tools->disableDelete();
                    // 显示快捷编辑按钮
                    $tools->showQuickEdit();

            });
            $show->field('id');
            $show->field('slide_setting');
            $show->field('slide_setting_mob');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new HomePageInfo(), function (Form $form) {
            $form->display('id');
            // $form->text('slide_setting');
            $form->array('slide_setting', function ($table) {
                $table->text('title', __('標題'));
                $table->text('sub_title', __('副標題'));
                $table->image('slide_img', __('圖片'))->move('images/slide/'.date('Ym'))->maxSize(1024);//->rules('mimes:jpg,jpeg,png,gif')
                $table->url('video_url', __('YouTube影片網址'));
            })->saving(function ($v) {
                // 转化为json格式存储
                return json_encode($v);
            });

            $form->array('slide_setting_mob', function ($table) {
                $table->text('title', __('標題'));
                $table->text('sub_title', __('副標題'));
                $table->image('slide_img', __('圖片'))->move('images/slide/'.date('Ym'))->maxSize(1024);//->rules('mimes:jpg,jpeg,png,gif')
                $table->url('video_url', __('YouTube影片網址'));
            })->saving(function ($v) {
                // 转化为json格式存储
                return json_encode($v);
            });

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
