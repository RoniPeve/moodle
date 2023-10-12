<?php

class __Mustache_f6bd128bba02b198d88340ec22fb0ed1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="hd choosertitle">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="chooserdialoguebody">
';
        $buffer .= $indent . '    <div class="choosercontainer">
';
        $buffer .= $indent . '        <div id="chooseform">
';
        $buffer .= $indent . '            <form action="';
        $value = $this->resolveValue($context->find('actionurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" id="chooserform" method="';
        $value = $this->resolveValue($context->find('method'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                <div id="typeformdiv">
';
        $value = $context->find('params');
        $buffer .= $this->sectionC0fc43e97e137fb6963ac3d12c0c2e73($context, $indent, $value);
        $buffer .= $indent . '                    <input type="hidden" name="sesskey" value="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="options">
';
        $buffer .= $indent . '                    <div class="instruction">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('instructions'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="alloptions">
';
        $value = $context->find('sections');
        $buffer .= $this->section0b704c7d8993bf57be8e7d039ccd427d($context, $indent, $value);
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="submitbuttons">
';
        $buffer .= $indent . '                    <input type="submit" name="submitbutton" class="submitbutton btn btn-primary" value="';
        $value = $context->find('cleanstr');
        $buffer .= $this->section1246808e12b08a69942964594521f1d4($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    <input type="submit" name="addcancel" class="addcancel btn btn-secondary" value="';
        $value = $context->find('cleanstr');
        $buffer .= $this->section96a04e644c61b56b5f76ae597e76c7fb($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            </form>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionC0fc43e97e137fb6963ac3d12c0c2e73(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <input type="hidden" id="{{id}}" name="{{name}}" value="{{value}}">
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <input type="hidden" id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f9a66da0dcaee145ffe08e262019010(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{>core/chooser_item}}
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/chooser_item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b704c7d8993bf57be8e7d039ccd427d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <fieldset>
                                <legend class="moduletypetitle">{{label}}</legend>
                                {{#items}}
                                    {{>core/chooser_item}}
                                {{/items}}
                            </fieldset>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <fieldset>
';
                $buffer .= $indent . '                                <legend class="moduletypetitle">';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</legend>
';
                $value = $context->find('items');
                $buffer .= $this->section7f9a66da0dcaee145ffe08e262019010($context, $indent, $value);
                $buffer .= $indent . '                            </fieldset>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1246808e12b08a69942964594521f1d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'add';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'add';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96a04e644c61b56b5f76ae597e76c7fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cancel';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'cancel';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
