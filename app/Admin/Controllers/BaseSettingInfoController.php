<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\BaseSettingInfo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\BaseSettingInfo as BaseSetting;

class BaseSettingInfoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new BaseSettingInfo(), function (Grid $grid) {
            $grid->disableFilterButton();
            $grid->showColumnSelector();
            // 显示快捷编辑按钮
            $grid->showQuickEditButton();
            $grid->column('id')->sortable();
            $grid->column('address');
            $grid->column('email');
            $grid->column('phone');
            $grid->column('fax');
            $grid->column('line');
            $grid->column('facebook');
            $grid->column('instagram');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });

            if (count(BaseSetting::all()) > 0) {
                $grid->disableCreateButton();
            }
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
        return Show::make($id, new BaseSettingInfo(), function (Show $show) {
            $show->field('id');
            $show->field('address');
            $show->field('email');
            $show->field('phone');
            $show->field('fax');
            $show->field('line');
            $show->field('facebook');
            $show->field('instagram');
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
        return Form::make(new BaseSettingInfo(), function (Form $form) {
            $form->display('id');
            $form->text('address');
            $form->email('email');
            $form->mobile('phone')->options(['mask' => '99 9999 9999']);;
            $form->mobile('fax')->options(['mask' => '99 9999 9999']);;
            $form->url('line');
            $form->url('facebook');
            $form->url('instagram');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
