<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\AdminUser;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class AdminUserController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new AdminUser(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->username;
            $grid->password;
            $grid->name;
            $grid->avatar;
            $grid->created_at;
            $grid->updated_at->sortable();
        
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
        return Show::make($id, new AdminUser(), function (Show $show) {
            $show->id;
            $show->username;
            $show->password;
            $show->name;
            $show->avatar;
            $show->created_at;
            $show->updated_at;
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new AdminUser(), function (Form $form) {
            $form->display('id');
            $form->text('username');
            $form->text('password');
            $form->text('name');
            $form->text('avatar');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
