<?php

namespace Modules\ACP\Logical;

use Illuminate\Support\Facades\Blade;

class Forms
{
        private $formContent;

        public function add(string $view):void
        {
            $this->setFormContent($view);
        }

        public function render(): string
        {
            $render = '<x-acp::forms.divider />';

            foreach ( $this->getFormContent() as $content)
            {
                $render .=  view($content);
                $render .=  '<x-acp::forms.divider />';
            }

            return Blade::render($render);
        }

    /**
     * @param mixed $formContent
     */
    public function setFormContent($formContent): void
    {
        $this->formContent[] = $formContent;
    }

    /**
     * @return mixed
     */
    private function getFormContent()
    {

        return $this->formContent;
    }

    public function supTest () {
        echo 'This new Test.';
    }

}
