<?php

class __Mustache_c5298375fb1c2119ee8eee6744f99c72 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '.read-more-state ~ .read-more-trigger:before {
';
        $buffer .= $indent . '    content: \'';
        $value = $context->find('str');
        $buffer .= $this->sectionBf6c39c32b23af36bbbe9f12209ea1fc($context, $indent, $value);
        $buffer .= '\';
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.read-more-state:checked ~ .read-more-trigger:before {
';
        $buffer .= $indent . '    content: \'';
        $value = $context->find('str');
        $buffer .= $this->section11a97fa9580fa98c066ba6a8461d9f2f($context, $indent, $value);
        $buffer .= '\';
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '</style>
';
        $value = $context->find('editing');
        $buffer .= $this->section30b6e992e5e9e2605d89f6b83b9333a0($context, $indent, $value);
        $value = $context->find('editing');
        if (empty($value)) {
            
            $buffer .= $indent . '<div id="card-container" class="remui-format-card all-section-format theme-';
            $value = $this->resolveValue($context->find('theme'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '    <ul class="sections row generalsection-container">
';
            $value = $context->find('generalsection');
            $buffer .= $this->section8038be1ea31300bf100e67c03b520e33($context, $indent, $value);
            $buffer .= $indent . '    </ul>
';
            $buffer .= $indent . '  </div>
';
            $buffer .= $indent . '    <div id="card-container" class="remui-format-card all-section-format theme-';
            $value = $this->resolveValue($context->find('theme'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '        <ul class="sections row">
';
            $value = $context->find('sections');
            $buffer .= $this->section2bfe70649bb03cd784e84accc9ccd350($context, $indent, $value);
            $buffer .= $indent . '        </ul>
';
            $buffer .= $indent . '    </div>
';
        }

        return $buffer;
    }

    private function sectionBf6c39c32b23af36bbbe9f12209ea1fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showfullsummary, format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showfullsummary, format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11a97fa9580fa98c066ba6a8461d9f2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showless, format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showless, format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAf673224dabfa3a3ea1f83c5284fd3da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> format_remuiformat/card_general_section_edit }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/card_general_section_edit')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF9e5aaaeaf9d9d3859d2f5eed4acf665(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> format_remuiformat/card_section_summary_edit }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/card_section_summary_edit')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30b6e992e5e9e2605d89f6b83b9333a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="card-container" class="remui-format-card all-section-format theme-{{theme}}  ">
    <ul class="sections row generalsection-container">
        {{! Display General Section }}
        {{#generalsection}}
        {{> format_remuiformat/card_general_section_edit }}
        {{/generalsection}}
    </ul>
  </div>
    <div id="card-editing-container" class="remui-format-card all-section-format theme-{{theme}} ">
        {{! Display General Section }}
        <ul class="sections row">
            {{! Display Remaining Section }}
            {{#sections}}
                {{> format_remuiformat/card_section_summary_edit }}
            {{/sections}}
            {{{ addsection }}}
        </ul>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div id="card-container" class="remui-format-card all-section-format theme-';
                $value = $this->resolveValue($context->find('theme'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '  ">
';
                $buffer .= $indent . '    <ul class="sections row generalsection-container">
';
                $value = $context->find('generalsection');
                $buffer .= $this->sectionAf673224dabfa3a3ea1f83c5284fd3da($context, $indent, $value);
                $buffer .= $indent . '    </ul>
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '    <div id="card-editing-container" class="remui-format-card all-section-format theme-';
                $value = $this->resolveValue($context->find('theme'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ">
';
                $buffer .= $indent . '        <ul class="sections row">
';
                $value = $context->find('sections');
                $buffer .= $this->sectionF9e5aaaeaf9d9d3859d2f5eed4acf665($context, $indent, $value);
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('addsection'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8038be1ea31300bf100e67c03b520e33(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> format_remuiformat/card_general_section }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/card_general_section')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bfe70649bb03cd784e84accc9ccd350(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> format_remuiformat/card_section_summary }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('format_remuiformat/card_section_summary')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
