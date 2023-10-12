<?php

class __Mustache_1708fe8918d4bef29d1d9328b656b407 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template-inline')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'block5a5419fd319e0f1810b12cf32958f0c0'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section0762f0e0d927d6a8487ffbc9078580b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    autofocus aria-describedby="{{element.iderror}}"
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    autofocus aria-describedby="';
                $value = $this->resolveValue($context->findDot('element.iderror'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block5a5419fd319e0f1810b12cf32958f0c0($context)
    {
        $indent = $buffer = '';
        $value = $context->findDot('element.frozen');
        if (empty($value)) {
            
            $buffer .= $indent . '            <button
';
            $buffer .= $indent . '                class="btn btn-secondary"
';
            $buffer .= $indent . '                name="';
            $value = $this->resolveValue($context->findDot('element.name'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '                id="';
            $value = $this->resolveValue($context->findDot('element.id'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '                type="button"
';
            $value = $context->find('error');
            $buffer .= $this->section0762f0e0d927d6a8487ffbc9078580b3($context, $indent, $value);
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->findDot('element.attributes'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                >
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->findDot('element.value'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '            </button>
';
        }
    
        return $buffer;
    }
}
