<?php

class __Mustache_3fca4ec31b368f96eeda164413712008 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="d-grid gap-2 d-md-flex justify-content-start mb-2">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('controls'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
