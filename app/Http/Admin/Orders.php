<?php

namespace App\Http\Admin;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Initializable;

/**
 * Class Orders
 *
 * @property \App\Order $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Orders extends Section
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
    protected $title;

    /**
     * @var string
     */
    protected $alias;

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::datatables()
        ->setHtmlAttribute('class', 'table-primary')
        ->setColumns(
            AdminColumn::text('id', '#')->setWidth('30px'),
            AdminColumn::link('fio', 'ФИО')->setWidth('300px'),
            AdminColumn::text('auto_year', 'год авто')
        )->paginate(20);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        // todo: remove if unused
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
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
