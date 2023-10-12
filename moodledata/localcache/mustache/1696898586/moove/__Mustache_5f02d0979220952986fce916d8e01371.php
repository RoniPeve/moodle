<?php

class __Mustache_5f02d0979220952986fce916d8e01371 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('helpicon');
        $buffer .= $this->section3c62650706ab6ca742a43b00e7eabe59($context, $indent, $value);
        if ($partial = $this->mustache->loadPartial('core/search_input')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }

    private function section3c62650706ab6ca742a43b00e7eabe59(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{>core/help_icon}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
