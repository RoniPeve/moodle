<?php

class __Mustache_1ad5b4cabf59291573828c0ac5908855 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_form/element-text')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
