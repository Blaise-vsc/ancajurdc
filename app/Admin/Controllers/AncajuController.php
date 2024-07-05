<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Ancaju;

class AncajuController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Ancaju';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Ancaju());

        $grid->column('id', __('Id'));
        $grid->column('nomination', __('Nomination'));
        $grid->column('pays', __('Pays'));
        $grid->column('province', __('Province'));
        $grid->column('quartier', __('Quartier'));
        $grid->column('commune', __('Commune'));
        $grid->column('numero', __('Numero'));
        $grid->column('referance', __('Referance'));
        $grid->column('phone', __('Phone'));
        $grid->column('mail', __('Mail'));
        $grid->column('gerant', __('Gerant'));
        $grid->column('site', __('Site'));
        $grid->column('map', __('Map'));
        $grid->column('facebook', __('Facebook'));
        $grid->column('linkdin', __('Linkdin'));
        $grid->column('instagram', __('Instagram'));
        $grid->column('tweeter', __('Tweeter'));
        $grid->column('tiktok', __('Tiktok'));
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
        $show = new Show(Ancaju::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nomination', __('Nomination'));
        $show->field('pays', __('Pays'));
        $show->field('province', __('Province'));
        $show->field('quartier', __('Quartier'));
        $show->field('commune', __('Commune'));
        $show->field('numero', __('Numero'));
        $show->field('referance', __('Referance'));
        $show->field('phone', __('Phone'));
        $show->field('mail', __('Mail'));
        $show->field('gerant', __('Gerant'));
        $show->field('site', __('Site'));
        $show->field('map', __('Map'));
        $show->field('facebook', __('Facebook'));
        $show->field('linkdin', __('Linkdin'));
        $show->field('instagram', __('Instagram'));
        $show->field('tweeter', __('Tweeter'));
        $show->field('tiktok', __('Tiktok'));
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
        $form = new Form(new Ancaju());

        $form->text('nomination', __('Nomination'));
        $form->text('pays', __('Pays'));
        $form->text('province', __('Province'));
        $form->text('quartier', __('Quartier'));
        $form->text('commune', __('Commune'));
        $form->text('numero', __('Numero'));
        $form->text('referance', __('Referance'));
        $form->phonenumber('phone', __('Phone'));
        $form->email('mail', __('Mail'));
        $form->text('gerant', __('Gerant'));
        $form->text('site', __('Site'));
        $form->text('map', __('Map'));
        $form->text('facebook', __('Facebook'));
        $form->text('linkdin', __('Linkdin'));
        $form->text('instagram', __('Instagram'));
        $form->text('tweeter', __('Tweeter'));
        $form->text('tiktok', __('Tiktok'));

        return $form;
    }
}
