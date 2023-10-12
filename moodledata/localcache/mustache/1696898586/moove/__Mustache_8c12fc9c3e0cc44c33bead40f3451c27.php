<?php

class __Mustache_8c12fc9c3e0cc44c33bead40f3451c27 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="d-flex flex-column h-100" data-collapse="content">
';
        $buffer .= $indent . '    <div class="d-flex">
';
        $buffer .= $indent . '        <div class="d-flex flex-grow-1">
';
        $value = $context->find('iseditable');
        $buffer .= $this->section5550d6254427428057fc2cc31271cb36($context, $indent, $value);
        $value = $context->find('iseditable');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('core_grades/grades/grader/text')) {
                $buffer .= $partial->renderInternal($context, $indent . '                ');
            }
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('actionmenu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="d-flex flex-grow-1 align-items-end">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('statusicons'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionAc5f2a6427ee759fd5ff0c5e9d62a45c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{>core_grades/grades/grader/scale}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_grades/grades/grader/scale')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5550d6254427428057fc2cc31271cb36(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#scale}}
                    {{>core_grades/grades/grader/scale}}
                {{/scale}}
                {{^scale}}
                    {{>core_grades/grades/grader/input}}
                {{/scale}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('scale');
                $buffer .= $this->sectionAc5f2a6427ee759fd5ff0c5e9d62a45c($context, $indent, $value);
                $value = $context->find('scale');
                if (empty($value)) {
                    
                    if ($partial = $this->mustache->loadPartial('core_grades/grades/grader/input')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                    ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
