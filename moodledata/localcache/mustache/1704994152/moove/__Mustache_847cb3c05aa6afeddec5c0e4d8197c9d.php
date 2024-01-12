<?php

class __Mustache_847cb3c05aa6afeddec5c0e4d8197c9d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('success');
        $buffer .= $this->section27fcf99947fa598e8637ff80b505a62e($context, $indent, $value);
        $value = $context->find('success');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('core/notification_error')) {
                $buffer .= $partial->renderInternal($context, $indent . '    ');
            }
        }

        return $buffer;
    }

    private function section3e26dcc20ceeb3768ca75865e8de711e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> tool_certificate/verify_certificate_result }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('tool_certificate/verify_certificate_result')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27fcf99947fa598e8637ff80b505a62e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#issue}}
        {{> tool_certificate/verify_certificate_result }}
    {{/issue}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('issue');
                $buffer .= $this->section3e26dcc20ceeb3768ca75865e8de711e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
