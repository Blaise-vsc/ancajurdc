<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Message;

class MessageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Message';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Message());

        $grid->column('id', __('Id'));
        $grid->column('heading1', __('Heading1'));
        $grid->column('heading2', __('Heading2'));
        $grid->column('sub_h1', __('Sub h1'));
        $grid->column('sub_h2', __('Sub h2'));
        $grid->column('sub_h3', __('Sub h3'));
        $grid->column('download_message', __('Download message'));
        $grid->column('phone', __('Phone'));
        $grid->column('mail', __('Mail'));
        $grid->column('address', __('Address'));
        $grid->column('facebook', __('Facebook'));
        $grid->column('linkdin', __('Linkdin'));
        $grid->column('web', __('Web'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Message::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('heading1', __('Heading1'));
        $show->field('heading2', __('Heading2'));
        $show->field('sub_h1', __('Sub h1'));
        $show->field('sub_h2', __('Sub h2'));
        $show->field('sub_h3', __('Sub h3'));
        $show->field('download_message', __('Download message'));
        $show->field('phone', __('Phone'));
        $show->field('mail', __('Mail'));
        $show->field('address', __('Address'));
        $show->field('facebook', __('Facebook'));
        $show->field('linkdin', __('Linkdin'));
        $show->field('web', __('Web'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Message());

        $form->text('heading1', __('Heading1'));
        $form->text('heading2', __('Heading2'));
        $form->text('sub_h1', __('Sub h1'));
        $form->text('sub_h2', __('Sub h2'));
        $form->text('sub_h3', __('Sub h3'));
        $form->textarea('download_message', __('Download message'));
        $form->phonenumber('phone', __('Phone'));
        $form->email('mail', __('Mail'));
        $form->textarea('address', __('Address'));
        $form->text('facebook', __('Facebook'));
        $form->text('linkdin', __('Linkdin'));
        $form->text('web', __('Web'));

        return $form;
    }
}
