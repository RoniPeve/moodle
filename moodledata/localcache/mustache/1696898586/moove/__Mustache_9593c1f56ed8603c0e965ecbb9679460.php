<?php

class __Mustache_9593c1f56ed8603c0e965ecbb9679460 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('mod_forum/discussion_list')) {
            $context->pushBlockContext(array(
                'discussion_create_text' => array($this, 'block658adeeb9467d235eeb0ca6e632fd29a'),
                'no_discussions_text' => array($this, 'block54a7f01a0de6093f8b116ce78579c3b0'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function sectionEcfce418daf3acedbc7f31951ebf57d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addanewtopic, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addanewtopic, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf409e3e923b15cb6b9837b5685db684(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nonews, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nonews, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block658adeeb9467d235eeb0ca6e632fd29a($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        ';
        $value = $context->find('str');
        $buffer .= $this->sectionEcfce418daf3acedbc7f31951ebf57d5($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block54a7f01a0de6093f8b116ce78579c3b0($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        (';
        $value = $context->find('str');
        $buffer .= $this->sectionDf409e3e923b15cb6b9837b5685db684($context, $indent, $value);
        $buffer .= ')
';
    
        return $buffer;
    }
}
