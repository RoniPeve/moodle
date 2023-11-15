<?php

class __Mustache_3289b0f3902567468bb4f53e47d0c2a8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="pdf';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-region="pdf" data-pagewidth="';
        $value = $this->resolveValue($context->find('width'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-pageheight="';
        $value = $this->resolveValue($context->find('height'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-pagecentre="';
        $value = $this->resolveValue($context->find('pagecentreoffset'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="snapdraggable">
';
        $buffer .= $indent . '    <div data-posx="';
        $value = $this->resolveValue($context->find('leftmargin'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-height="';
        $value = $this->resolveValue($context->find('height'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-width="';
        $value = $this->resolveValue($context->find('widthbetweenmargins'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="snapdraggable"></div>
';
        $buffer .= $indent . '    <div data-region=\'pagecenter\' data-height="';
        $value = $this->resolveValue($context->find('height'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="snapdraggable"></div>
';
        $value = $context->find('elements');
        $buffer .= $this->section8a600e7acc6f1b6da03ebb12f0e2e14c($context, $indent, $value);
        $value = $context->find('leftmargin');
        $buffer .= $this->sectionE2a4abfbcf8c1a435f727421b113edc0($context, $indent, $value);
        $value = $context->find('rightmargin');
        $buffer .= $this->section645b94f54a25c3d7408be157dcbec990($context, $indent, $value);
        $buffer .= $indent . '    <div data-height="';
        $value = $this->resolveValue($context->find('height'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-posx="0" class="verticalline solidline"></div>
';
        $buffer .= $indent . '    <div data-height="';
        $value = $this->resolveValue($context->find('height'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-posx="';
        $value = $this->resolveValue($context->find('width'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="verticalline solidline"></div>
';
        $buffer .= $indent . '    <div data-width="';
        $value = $this->resolveValue($context->find('width'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-posy="0" class="horizontalline solidline"></div>
';
        $buffer .= $indent . '    <div data-width="';
        $value = $this->resolveValue($context->find('width'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-posy="';
        $value = $this->resolveValue($context->find('height'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="horizontalline solidline"></div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section635e7f8ab86815eba796fec2707d3d95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-width="{{width}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-width="';
                $value = $this->resolveValue($context->find('width'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section00549a58c9aafbe36af7a1e7de1a0519(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-refpoint="{{refpoint}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-refpoint="';
                $value = $this->resolveValue($context->find('refpoint'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section37cb3b72a8bfbcf6daa899c447a71be3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-drag-type="move" {{#showrefpoint}}data-refpoint="{{refpoint}}"{{/showrefpoint}} data-posx="{{posx}}" data-posy="{{posy}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-drag-type="move" ';
                $value = $context->find('showrefpoint');
                $buffer .= $this->section00549a58c9aafbe36af7a1e7de1a0519($context, $indent, $value);
                $buffer .= ' data-posx="';
                $value = $this->resolveValue($context->find('posx'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-posy="';
                $value = $this->resolveValue($context->find('posy'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a600e7acc6f1b6da03ebb12f0e2e14c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span data-region="pdfelement" id="element-{{id}}" data-action="editelement" data-id="{{id}}" data-name="{{name}}"
            data-fontsize="{{fontsize}}" {{#width}}data-width="{{width}}"{{/width}}
            {{#draggable}}data-drag-type="move" {{#showrefpoint}}data-refpoint="{{refpoint}}"{{/showrefpoint}} data-posx="{{posx}}" data-posy="{{posy}}"{{/draggable}}>
        {{{html}}}
        </span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span data-region="pdfelement" id="element-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-action="editelement" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '            data-fontsize="';
                $value = $this->resolveValue($context->find('fontsize'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('width');
                $buffer .= $this->section635e7f8ab86815eba796fec2707d3d95($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                $value = $context->find('draggable');
                $buffer .= $this->section37cb3b72a8bfbcf6daa899c447a71be3($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2a4abfbcf8c1a435f727421b113edc0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div data-posx="{{leftmargin}}" data-height="{{height}}" class="verticalline dottedline"></div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div data-posx="';
                $value = $this->resolveValue($context->find('leftmargin'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-height="';
                $value = $this->resolveValue($context->find('height'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="verticalline dottedline"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section645b94f54a25c3d7408be157dcbec990(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div data-posx="{{rightmarginoffset}}" data-height="{{height}}" class="verticalline dottedline"></div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div data-posx="';
                $value = $this->resolveValue($context->find('rightmarginoffset'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-height="';
                $value = $this->resolveValue($context->find('height'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="verticalline dottedline"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
