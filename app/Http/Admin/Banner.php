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
 * Class Banner
 *
 * @property \App\Banner $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Banner extends Section
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
        return AdminDisplay::table()
            ->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::link('offer_end', 'дата окончания акции')
            );
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('offer_end', 'Время окончания акции на баннере справа')->required(),
            AdminFormElement::text('offer_text', 'Текст акции на банере справа')->required(),
            AdminFormElement::image('mobile_image', 'мобильная версия банера')->required()
                ->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
                    return 'images/offers'; // путь сохранения файла относительно public. public -> appServiceProvider
                })
                ->setUploadSettings([
                    'orientate' => [],
                    'resize' => [300, null, function ($constraint) {
                        $constraint->upsize();
                        $constraint->aspectRatio();
                    }]
                ]),
            AdminFormElement::image('image', 'первый слайд баннера')->required()
                ->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
                    return 'images/offers'; // путь сохранения файла относительно public. public -> appServiceProvider
                })
                ->setUploadSettings([
                    'orientate' => [],
                    'resize' => [1054, null, function ($constraint) {
                        $constraint->upsize();
                        $constraint->aspectRatio();
                    }]
                ]),

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
