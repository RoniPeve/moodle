<?php

class __Mustache_bd94ee7086099404849fc3dad07ab0c0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="fp-filename-icon">
';
        $buffer .= $indent . '    <span class="fp-icon">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('icon'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </span>
';
        $buffer .= $indent . '    <span class="fp-filename">
';
        $value = $context->find('url');
        $buffer .= $this->sectionC788b135cf73737dc13e67a2ad990a43($context, $indent, $value);
        $value = $context->find('url');
        if (empty($value)) {
            
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->find('name'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '    </span>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('hassubdirs');
        $buffer .= $this->section4fdf09bba53f2bf68a9d96f9f123b0f2($context, $indent, $value);

        return $buffer;
    }

    private function sectionC788b135cf73737dc13e67a2ad990a43(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{url}}">{{{name}}}</a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05cffa5e35ff03f6d5f3c4fe1ab19737(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li>
                {{>mod_folder/tree}}
            </li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li>
';
                if ($partial = $this->mustache->loadPartial('mod_folder/tree')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4fdf09bba53f2bf68a9d96f9f123b0f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <ul>
        {{#subdirs}}
            <li>
                {{>mod_folder/tree}}
            </li>
        {{/subdirs}}
    </ul>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <ul>
';
                $value = $context->find('subdirs');
                $buffer .= $this->section05cffa5e35ff03f6d5f3c4fe1ab19737($context, $indent, $value);
                $buffer .= $indent . '    </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
