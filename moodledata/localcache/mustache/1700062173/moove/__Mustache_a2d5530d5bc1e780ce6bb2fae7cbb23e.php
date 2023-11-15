<?php

class __Mustache_a2d5530d5bc1e780ce6bb2fae7cbb23e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('tool_certificate/content_heading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<div class="mt-4" data-region="template" data-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('pages');
        $buffer .= $this->sectionAc7cef43ea9e01652863fae17fccdda4($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->sectionB90d35d5df91db956527cdfe169775e0($context, $indent, $value);

        return $buffer;
    }

    private function sectionAc7cef43ea9e01652863fae17fccdda4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> tool_certificate/edit_layout_page}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('tool_certificate/edit_layout_page')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB90d35d5df91db956527cdfe169775e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'tool_certificate/template-edit\'],
        function(T) {
            T.init();
        }
    );
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'tool_certificate/template-edit\'],
';
                $buffer .= $indent . '        function(T) {
';
                $buffer .= $indent . '            T.init();
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    );
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
