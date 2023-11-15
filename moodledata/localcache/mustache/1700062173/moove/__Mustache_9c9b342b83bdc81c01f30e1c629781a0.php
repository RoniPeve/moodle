<?php

class __Mustache_9c9b342b83bdc81c01f30e1c629781a0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div>
';
        $value = $context->find('addbutton');
        $buffer .= $this->section3710d9df65bd27be6fe5af5adc4154e2($context, $indent, $value);
        $value = $context->find('heading');
        $buffer .= $this->section28ad1a7e35898ba6e015d835bfb1fbb3($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="clearfix"></div>
';

        return $buffer;
    }

    private function sectionCd3a96713a28e0e5c13c278ac3f01198(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{addbuttonurl}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('addbuttonurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE89f12d27ca9e1be7a95b3e925ef31c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{.}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section801bcd19aebdc5786ad20c4358b88203(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}="{{value}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB01533e09a3219a59f196ff215d70e5f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/add, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/add, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section988db1148dde03d00b03958b50997423(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#pix}}t/add, core{{/pix}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('pix');
                $buffer .= $this->sectionB01533e09a3219a59f196ff215d70e5f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2192c47d13a0de9d15c97d8b19c05303(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{addbuttontitle}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('addbuttontitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3710d9df65bd27be6fe5af5adc4154e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="{{#addbuttonurl}}{{addbuttonurl}}{{/addbuttonurl}}{{^addbuttonurl}}#{{/addbuttonurl}}" role="button"
           class="btn btn-primary float-right mb-3 iconlarge nomargin{{#addbuttonclasses}} {{.}}{{/addbuttonclasses}}"
           data-element="addbutton" {{#addbuttonattrs}}{{name}}="{{value}}"{{/addbuttonattrs}}>
        {{#addbuttonicon}}{{#pix}}t/add, core{{/pix}}{{/addbuttonicon}}{{#addbuttontitle}}{{addbuttontitle}}{{/addbuttontitle}}
        </a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a href="';
                $value = $context->find('addbuttonurl');
                $buffer .= $this->sectionCd3a96713a28e0e5c13c278ac3f01198($context, $indent, $value);
                $value = $context->find('addbuttonurl');
                if (empty($value)) {
                    
                    $buffer .= '#';
                }
                $buffer .= '" role="button"
';
                $buffer .= $indent . '           class="btn btn-primary float-right mb-3 iconlarge nomargin';
                $value = $context->find('addbuttonclasses');
                $buffer .= $this->sectionE89f12d27ca9e1be7a95b3e925ef31c0($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '           data-element="addbutton" ';
                $value = $context->find('addbuttonattrs');
                $buffer .= $this->section801bcd19aebdc5786ad20c4358b88203($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '        ';
                $value = $context->find('addbuttonicon');
                $buffer .= $this->section988db1148dde03d00b03958b50997423($context, $indent, $value);
                $value = $context->find('addbuttontitle');
                $buffer .= $this->section2192c47d13a0de9d15c97d8b19c05303($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section28ad1a7e35898ba6e015d835bfb1fbb3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h2>{{{heading}}}</h2>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <h2>';
                $value = $this->resolveValue($context->find('heading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
