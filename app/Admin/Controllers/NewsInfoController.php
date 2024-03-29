<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\NewsInfo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class NewsInfoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new NewsInfo(), function (Grid $grid) {
            $grid->disableFilterButton();
            $grid->showColumnSelector();
            // 显示快捷编辑按钮
            $grid->showQuickEditButton();
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('news_front_cover')->image();
            $grid->column('category');
            $grid->column('content')->display(function ($content) {
                return "<p style=\"width:300px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;\">".str_replace("</p>", "",str_replace("<p>", "", $content))."</p>";
            })->hide();
            $grid->column('show_status')->switch();
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
        return Show::make($id, new NewsInfo(), function (Show $show) {
            $show->panel()
                ->tools(function ($tools) {
                    // $tools->disableEdit();
                    // $tools->disableList();
                    // $tools->disableDelete();
                    // 显示快捷编辑按钮
                    $tools->showQuickEdit();

            });
            $show->field('id');
            $show->field('title');
            $show->field('news_front_cover')->image();
            $show->field('category');
            $show->field('content')->unescape();
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
        return Form::make(new NewsInfo(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->image('news_front_cover')->move('images/news/'.date('Ym').'/frontCover')->maxSize(1024)->rules('mimes:jpg,jpeg,png,gif');
            $form->text('category')->default('未分類');
            $form->editor('content')->options(['menubar' => false, 'toolbar' => ['code undo redo restoredraft | cut copy paste pastetext | forecolor backcolor bold italic underline strikethrough link anchor | alignleft aligncenter alignright alignjustify outdent indent | \
            styleselect formatselect fontselect fontsizeselect | bullist numlist | blockquote subscript superscript removeformat | \
            table image media charmap emoticons hr pagebreak insertdatetime print preview | fullscreen | bdmap indent2em lineheight formatpainter axupimgs']]);
            $form->switch('show_status');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
