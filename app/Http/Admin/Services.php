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
 * Class Services
 *
 * @property \App\Service $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Services extends Section
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
                AdminColumn::link('link', 'Ссылка')->setWidth('250px'),
                AdminColumn::text('title', 'Название услуги')
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
            AdminFormElement::text('link', 'Cсылка'),
            AdminFormElement::text('title', 'заголовок')->required(),
            AdminFormElement::wysiwyg('text', 'контент'),
            AdminFormElement::image('photo', 'превью')->required()
                ->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
                    return 'images/service/preview'; // путь сохранения файла относительно public. public -> appServiceProvider
                })
                ->setUploadSettings([
                    'orientate' => [],
                    'resize' => [300, null, function ($constraint) {
                        $constraint->upsize();
                        $constraint->aspectRatio();
                    }]
                ]),
            AdminFormElement::image('photo1', 'фото 1')->required()
                ->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
                    return 'images/service/photo1';
                })
                ->setUploadSettings([
                    'orientate' => [],
                    'resize' => [400, null, function ($constraint) {
                        $constraint->upsize();
                        $constraint->aspectRatio();
                    }]
                ]),
            AdminFormElement::image('photo2', 'фото 2')->required()
                ->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
                    return 'images/service/photo2';
                })
                ->setUploadSettings([
                    'orientate' => [],
                    'resize' => [400, null, function ($constraint) {
                        $constraint->upsize();
                        $constraint->aspectRatio();
                    }]
                ]),
            AdminFormElement::image('photo3', 'фото 3')->required()
                ->setUploadPath(function(\Illuminate\Http\UploadedFile $file) {
                    return 'images/service/photo3';
                })
                ->setUploadSettings([
                    'orientate' => [],
                    'resize' => [400, null, function ($constraint) {
                        $constraint->upsize();
                        $constraint->aspectRatio();
                    }]
                ]),
            AdminFormElement::textarea('keywords', 'keywords'),
            AdminFormElement::textarea('description', 'description'),
            AdminFormElement::checkbox('is_left', 'левое меню'),
            AdminFormElement::number('position', 'позиция. чем меньше, тем выше')
        ]);
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
