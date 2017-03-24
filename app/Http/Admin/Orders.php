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
        return AdminForm::panel()->addBody([

        AdminFormElement::text('fio', 'ФИО')->setReadonly(1),
        AdminFormElement::text('auto_year', 'год авто')->setReadonly(1),
        AdminFormElement::text('auto_brand', 'марка')->setReadonly(1),
        AdminFormElement::text('auto_type', 'тип авто')->setReadonly(1),
        AdminFormElement::text('auto_mod', 'модификация(объем двигателя)')->setReadonly(1),
        AdminFormElement::text('auto_vin', 'VIN ')->setReadonly(1),
        AdminFormElement::text('order_date', 'на когда дата')->setReadonly(1),
        AdminFormElement::text('order_time', 'время')->setReadonly(1),
        AdminFormElement::text('avto_nomer', 'номер авто')->setReadonly(1),

        AdminFormElement::text('fio', 'ФИО')->setReadonly(1),
            AdminFormElement::text('phone', 'телефон')->setReadonly(1),
            AdminFormElement::text('email', 'телефон')->setReadonly(1),
            AdminFormElement::text('comments', 'сообщение')->setReadonly(1),
            AdminFormElement::text('created_at', 'когда создана')->setReadonly(1),
        ]);
    }

    /**
     * @return FormInterface
     */


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
