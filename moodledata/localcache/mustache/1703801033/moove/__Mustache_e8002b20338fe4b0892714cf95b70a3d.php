<?php

class __Mustache_e8002b20338fe4b0892714cf95b70a3d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('hasvalue');
        $buffer .= $this->section9ff57dec8e27d3b7d5e3d7ce37f4ba69($context, $indent, $value);

        return $buffer;
    }

    private function section9ff57dec8e27d3b7d5e3d7ce37f4ba69(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="customfield customfield_{{type}} customfield_{{shortname}}">
        <span class="customfieldname">{{{name}}}</span><span class="customfieldseparator">: </span><span class="customfieldvalue">{{{value}}}</span>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="customfield customfield_';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' customfield_';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '        <span class="customfieldname">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span><span class="customfieldseparator">: </span><span class="customfieldvalue">';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
