<?php

class __Mustache_e02879ad805c6d7bf63bfbcf435a346e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="list-group">
';
        $value = $context->find('blocks');
        $buffer .= $this->section0baa8ce1caa4c45dc341c47e4bf7d2fe($context, $indent, $value);
        $value = $context->find('blocks');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div class="alert alert-primary" role="alert">
';
            $buffer .= $indent . '        ';
            $value = $context->find('str');
            $buffer .= $this->section44db6c94ef832981ffc6c0018fb779a0($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '    </div>
';
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionBd13de9b51fcf37ab05d95f35313d25d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-action="showaddblockform" data-blockform="{{blockform}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-action="showaddblockform" data-blockform="';
                $value = $this->resolveValue($context->find('blockform'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section693b59bfa2de5fed977e7dc524f92e0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'textellipsis, moodle, {{title}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'textellipsis, moodle, ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b2e668c924e7b9f470d032a5c9f36a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}textellipsis, moodle, {{title}}{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->section693b59bfa2de5fed977e7dc524f92e0f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0baa8ce1caa4c45dc341c47e4bf7d2fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="{{url}}&amp;bui_addblock={{name}}" class="list-group-item list-group-item-action"
        data-blockname="{{name}}" data-blocktitle="{{title}}" data-blockregion="{{blockregion}}"
        {{#blockform}}data-action="showaddblockform" data-blockform="{{blockform}}"{{/blockform}}
    >{{#blockform}}{{#str}}textellipsis, moodle, {{title}}{{/str}}{{/blockform}}{{^blockform}}{{title}}{{/blockform}}</a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&amp;bui_addblock=';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="list-group-item list-group-item-action"
';
                $buffer .= $indent . '        data-blockname="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-blocktitle="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-blockregion="';
                $value = $this->resolveValue($context->find('blockregion'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '        ';
                $value = $context->find('blockform');
                $buffer .= $this->sectionBd13de9b51fcf37ab05d95f35313d25d($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    >';
                $value = $context->find('blockform');
                $buffer .= $this->section8b2e668c924e7b9f470d032a5c9f36a5($context, $indent, $value);
                $value = $context->find('blockform');
                if (empty($value)) {
                    
                    $value = $this->resolveValue($context->find('title'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                }
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44db6c94ef832981ffc6c0018fb779a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noblockstoaddhere ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' noblockstoaddhere ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
