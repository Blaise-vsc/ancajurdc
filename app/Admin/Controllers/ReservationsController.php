<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Reservations;

class ReservationsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Reservations';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Reservations());

        $grid->column('id', __('Id'));
        $grid->column('phone', __('Phone'));
        $grid->column('enregistrement', __('Enregistrement'));
        $grid->column('nuit', __('Nuit'));
        $grid->column('verifier', __('Verifier'));
        $grid->column('adultes', __('Adultes'));
        $grid->column('enfants', __('Enfants'));
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
        $show = new Show(Reservations::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('phone', __('Phone'));
        $show->field('enregistrement', __('Enregistrement'));
        $show->field('nuit', __('Nuit'));
        $show->field('verifier', __('Verifier'));
        $show->field('adultes', __('Adultes'));
        $show->field('enfants', __('Enfants'));
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
        $form = new Form(new Reservations());

        $form->phonenumber('phone', __('Phone'));
        $form->text('enregistrement', __('Enregistrement'));
        $form->text('nuit', __('Nuit'));
        $form->text('verifier', __('Verifier'));
        $form->text('adultes', __('Adultes'));
        $form->text('enfants', __('Enfants'));

        return $form;
    }
}
