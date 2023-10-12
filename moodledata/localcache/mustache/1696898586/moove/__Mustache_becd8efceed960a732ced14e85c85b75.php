<?php

class __Mustache_becd8efceed960a732ced14e85c85b75 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="container-fluid tertiary-navigation">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="navitem">
';
        if ($partial = $this->mustache->loadPartial('mod_forum/quick_search_form')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="navitem">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('newdiscussionbtn'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="ml-sm-auto navitem">
';
        $value = $context->find('subscribetoforum');
        $buffer .= $this->sectionE78727fbe427c07f8f0f4d60bf7f7f1e($context, $indent, $value);
        $value = $context->find('unsubscribefromforum');
        $buffer .= $this->section80db7c5a886457653a03ff5ca8edad14($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF259a1eb12e681fae1aae3a7a3b7c528(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'subscribe, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'subscribe, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE78727fbe427c07f8f0f4d60bf7f7f1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a class="btn btn-secondary" href="{{ subscribetoforum }}">{{#str}}subscribe, mod_forum {{/str}}</a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a class="btn btn-secondary" href="';
                $value = $this->resolveValue($context->find('subscribetoforum'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionF259a1eb12e681fae1aae3a7a3b7c528($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC0fbbf241ef35993bc3b3a4ff1d905bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unsubscribe, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'unsubscribe, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section80db7c5a886457653a03ff5ca8edad14(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a class="btn btn-secondary" href="{{ unsubscribefromforum }}">{{#str}}unsubscribe, mod_forum {{/str}}</a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a class="btn btn-secondary" href="';
                $value = $this->resolveValue($context->find('unsubscribefromforum'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionC0fbbf241ef35993bc3b3a4ff1d905bd($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
