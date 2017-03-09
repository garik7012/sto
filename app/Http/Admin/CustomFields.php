<?php

namespace App\Http\Admin;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;


use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;

/**
 * Class CustomFields
 *
 * @property \App\CustomField $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class CustomFields extends Section
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = "Настройки полей";

    /**
     * @var string
     */
    protected $alias;

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::table()/*->with('users')*/
        ->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::link('name', 'Поле')->setWidth('100px'),
                AdminColumn::text('description', 'Описание'),
                AdminColumn::text('value', 'Значение')
            )->paginate(20);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('value', 'Значение')->required(),
            AdminFormElement::textarea('description', 'Описание'),
        ]);
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return false;
//            AdminForm::panel()->addBody([
//            AdminFormElement::text('name', 'Поле')->required(),
//            AdminFormElement::text('value', 'Значение')->required(),
//            AdminFormElement::textarea('description', 'Описание'),
//        ]);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // todo: remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // todo: remove if unused
    }
}
