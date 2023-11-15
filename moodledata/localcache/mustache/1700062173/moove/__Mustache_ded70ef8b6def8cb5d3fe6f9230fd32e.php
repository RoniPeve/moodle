<?php

class __Mustache_ded70ef8b6def8cb5d3fe6f9230fd32e extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('tool_certificate/content_heading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $value = $this->resolveValue($context->find('content'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);

        return $buffer;
    }
}
