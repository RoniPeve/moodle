<?php

class __Mustache_e614376432d737eea94968841dc211c0 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_form/element-group')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
