<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Commande;

class CommandeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Commande';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Commande());

        $grid->column('id', __('Id'));
        $grid->column('nom', __('Nom'));
        $grid->column('post_nom', __('Post nom'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
        $grid->column('pays_ou_region', __('Pays ou region'));
        $grid->column('adesse', __('Adesse'));
        $grid->column('ville', __('Ville'));
        $grid->column('code', __('Code'));
        $grid->column('conf_code', __('Conf code'));
        $grid->column('date_d_arrivée', __('Date d arrivée'));
        $grid->column('heure_d_arrivée', __('Heure d arrivée'));
        $grid->column('date_de_départ', __('Date de départ'));
        $grid->column('heure_de_départ', __('Heure de départ'));
        $grid->column('nombre_d_adulte', __('Nombre d adulte'));
        $grid->column('nombre_d_enfant', __('Nombre d enfant'));
        $grid->column('demande', __('Demande'));
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
        $show = new Show(Commande::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nom', __('Nom'));
        $show->field('post_nom', __('Post nom'));
        $show->field('email', __('Email'));
        $show->field('phone', __('Phone'));
        $show->field('pays_ou_region', __('Pays ou region'));
        $show->field('adesse', __('Adesse'));
        $show->field('ville', __('Ville'));
        $show->field('code', __('Code'));
        $show->field('conf_code', __('Conf code'));
        $show->field('date_d_arrivée', __('Date d arrivée'));
        $show->field('heure_d_arrivée', __('Heure d arrivée'));
        $show->field('date_de_départ', __('Date de départ'));
        $show->field('heure_de_départ', __('Heure de départ'));
        $show->field('nombre_d_adulte', __('Nombre d adulte'));
        $show->field('nombre_d_enfant', __('Nombre d enfant'));
        $show->field('demande', __('Demande'));
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
        $form = new Form(new Commande());

        $form->text('nom', __('Nom'));
        $form->text('post_nom', __('Post nom'));
        $form->email('email', __('Email'));
        $form->phonenumber('phone', __('Phone'));
        $form->text('pays_ou_region', __('Pays ou region'));
        $form->textarea('adesse', __('Adesse'));
        $form->text('ville', __('Ville'));
        $form->text('code', __('Code'));
        $form->text('conf_code', __('Conf code'))->byDefault('hello');
        $form->date('date_d_arrivée', __('Date d arrivée'));
        $form->time('heure_d_arrivée', __('Heure d arrivée'));
        $form->date('date_de_départ', __('Date de départ'));
        $form->time('heure_de_départ', __('Heure de départ'));
        $form->text('nombre_d_adulte', __('Nombre d adulte'));
        $form->text('nombre_d_enfant', __('Nombre d enfant'));
        $form->text('demande', __('Demande'));

        return $form;
    }
}




// 
// 
