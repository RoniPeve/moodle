<?php

class __Mustache_d7f79ade69eb0d4c3079f69a85e4b0af extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="loading-overlay d-flex position-absolute text-center w-100 h-100 justify-content-center align-items-center invisible"
';
        $buffer .= $indent . '        style="z-index: 9999; background-color: rgba(255,255,255,0.5);">
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
