<?php

class __Mustache_7815f2254c602790f1a67e903a130a7a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<span class="d-none" data-region="courseid" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-hidden="true"></span>
';
        $value = $context->find('currentvalue');
        $buffer .= $this->sectionE256c886432be199fab07383ec418426($context, $indent, $value);
        $value = $context->find('currentvalue');
        if (empty($value)) {
            
            $buffer .= $indent . '    ';
            if ($parent = $this->mustache->loadPartial('core/search_input_auto')) {
                $context->pushBlockContext(array(
                    'label' => array($this, 'block7d99254b2dfd714a76f331e63e03753f'),
                    'placeholder' => array($this, 'block7d99254b2dfd714a76f331e63e03753f'),
                ));
                $buffer .= $parent->renderInternal($context, $indent);
                $context->popBlockContext();
            }
        }

        return $buffer;
    }

    private function sectionD4e284e0a3241df6adbe182777a0642a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            searchusers, core_grades
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '            searchusers, core_grades
';
                $buffer .= $indent . '        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section53ad53ae17e6211e0a4f2f2b7ff2093f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clearsearch, gradereport_grader';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clearsearch, gradereport_grader';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1334c11b5ab82eacb99d00f171e354a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clear';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clear';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE256c886432be199fab07383ec418426(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{< core/search_input_auto }}
        {{$label}}{{#str}}
            searchusers, core_grades
        {{/str}}{{/label}}
        {{$value}}{{{currentvalue}}}{{/value}}
    {{/ core/search_input_auto }}
    <a class="ml-2 btn btn-link border-0" href="{{resetlink}}" data-action="resetpage" role="link" aria-label="{{#str}}clearsearch, gradereport_grader{{/str}}">
        {{#str}}clear{{/str}}
    </a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                if ($parent = $this->mustache->loadPartial('core/search_input_auto')) {
                    $context->pushBlockContext(array(
                        'label' => array($this, 'block7d99254b2dfd714a76f331e63e03753f'),
                        'value' => array($this, 'block73337af4cb0690e9cbd7cb3ef1d6de4c'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $buffer .= '    <a class="ml-2 btn btn-link border-0" href="';
                $value = $this->resolveValue($context->find('resetlink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-action="resetpage" role="link" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section53ad53ae17e6211e0a4f2f2b7ff2093f($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '        ';
                $value = $context->find('str');
                $buffer .= $this->section1334c11b5ab82eacb99d00f171e354a6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block7d99254b2dfd714a76f331e63e03753f($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->sectionD4e284e0a3241df6adbe182777a0642a($context, $indent, $value);
    
        return $buffer;
    }

    public function block73337af4cb0690e9cbd7cb3ef1d6de4c($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('currentvalue'), $context);
        $buffer .= ($value === null ? '' : $value);
    
        return $buffer;
    }
}
