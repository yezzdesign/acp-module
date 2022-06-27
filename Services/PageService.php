<?php

namespace Modules\ACP\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;


class PageService
{

    // There are all information are saved.
    private $formContent;

    /**
     * Add the view as string to Class.
     * @param string $view String of the View
     * @param int|null $position You can change the position it will be shown
     * @return void
     */
    public function add(string $view, int $position = null):void
    {
        $this->setFormContent($view, $position);
    }

    public function render(Model $model = null, $modelName = null ): string
    {

        //$value   =   $modelName;
        //$$value  =   $model;

        $render =  view('acp::components.forms.divider');

        foreach ( $this->getFormContent() as $content )
        {
            $render .=  view($content, [$modelName => $model]);
            $render .=  view('acp::components.forms.divider'); //<x-acp::forms.divider />';
        }

        return Blade::render($render);
    }

    /**
     * @param mixed $formContent
     */
    public function setFormContent($formContent , int $position = null): void
    {
        if ($position === null) {
            $this->formContent[] = $formContent;
        }

        if (is_integer($position)) {
            //$content    =   $this->getFormContent();
            array_splice($this->formContent, $position, 0, $formContent);
        }
    }

    /**
     * @return mixed
     */
    public function getFormContent()
    {
        return $this->formContent;
    }

}
