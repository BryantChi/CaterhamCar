<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\CarModelsInfo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class CarModelsInfoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new CarModelsInfo(), function (Grid $grid) {
            $grid->disableFilterButton();
            $grid->showColumnSelector();
            // 显示快捷编辑按钮
            $grid->showQuickEditButton();
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('models_front_cover')->image();
            $grid->column('models_img')->image();
            $grid->column('features');
            $grid->column('specification');
            $grid->column('s_pack');
            $grid->column('r_pack');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
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
        return Show::make($id, new CarModelsInfo(), function (Show $show) {
            $show->panel()
                ->tools(function ($tools) {
                    // $tools->disableEdit();
                    // $tools->disableList();
                    // $tools->disableDelete();
                    // 显示快捷编辑按钮
                    $tools->showQuickEdit();

            });
            $show->field('id');
            $show->field('name');
            $show->field('models_front_cover')->image();
            $show->field('models_img')->image();
            $show->field('features');
            $show->field('specification');
            $show->field('s_pack');
            $show->field('r_pack');
            $show->field('models_discription')->unescape();
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
        return Form::make(new CarModelsInfo(), function (Form $form) {
            $form->display('id');
            $form->text('name')->required();
            $form->image('models_front_cover')->move('images/models/'.date('Ym').'/frontCover')->uniqueName()->rules('mimes:jpg,jpeg,png,gif');
            $form->multipleImage('models_img')->move('images/models/'.date('Ym'))->maxSize(3072)->uniqueName()->rules('mimes:jpg,jpeg,png,gif|nullable')->sortable();
            $form->list('features')->max(15)->saveAsJson();
            $form->keyValue('specification')->setKeyLabel('主題')->setValueLabel('內容');
            $form->list('s_pack')->max(15)->saveAsJson();
            $form->list('r_pack')->max(15)->saveAsJson();

            $form->editor('models_discription')->options(['menubar' => false, 'toolbar' => ['code undo redo restoredraft | cut copy paste pastetext | forecolor backcolor bold italic underline strikethrough link anchor | alignleft aligncenter alignright alignjustify outdent indent | \
            styleselect formatselect fontselect fontsizeselect | bullist numlist | blockquote subscript superscript removeformat | \
            table image media charmap emoticons hr pagebreak insertdatetime print preview | fullscreen | bdmap indent2em lineheight formatpainter axupimgs']])->imageDirectory('editor/images');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
