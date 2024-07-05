<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Chambre;

class ChambreController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Chambre';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Chambre());

        $grid->column('id', __('Id'));
        $grid->column('attribution', __('Attribution'));
        $grid->column('taille', __('Taille'));
        $grid->column('typeDeLit', __('TypeDeLit'));
        $grid->column('equipements', __('Equipements'));
        $grid->column('installations', __('Installations'));
        $grid->column('politiques', __('Politiques'));
        $grid->column('accessibilité', __('Accessibilité'));
        $grid->column('prix', __('Prix'));
        $grid->column('details', __('Details'));
        $grid->column('imgSupplémentaireUn', __('ImgSupplémentaireUn'));
        $grid->column('imgSupplémentaireDeux', __('ImgSupplémentaireDeux'));
        $grid->column('image')->image();
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
        $show = new Show(Chambre::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('attribution', __('Attribution'));
        $show->field('taille', __('Taille'));
        $show->field('typeDeLit', __('TypeDeLit'));
        $show->field('equipements', __('Equipements'));
        $show->field('installations', __('Installations'));
        $show->field('politiques', __('Politiques'));
        $show->field('accessibilité', __('Accessibilité'));
        $show->field('prix', __('Prix'));
        $show->field('details', __('Details'));
        $show->field('imgSupplémentaireUn', __('ImgSupplémentaireUn'));
        $show->field('imgSupplémentaireDeux', __('ImgSupplémentaireDeux'));
        $show->field('image')->image();
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
        $form = new Form(new Chambre());

        $form->text('attribution', __('Attribution'));
        $form->text('taille', __('Taille'));
        $form->text('typeDeLit', __('TypeDeLit'));
        $form->text('equipements', __('Equipements'));
        $form->text('installations', __('Installations'));
        $form->text('politiques', __('Politiques'));
        $form->text('accessibilité', __('Accessibilité'));
        $form->text('prix', __('Prix'));
        $form->text('details', __('Details'));
        $form->text('imgSupplémentaireUn', __('ImgSupplémentaireUn'));
        $form->text('imgSupplémentaireDeux', __('ImgSupplémentaireDeux'));
        $form->image('image', __('Image'));

        return $form;
    }
}
