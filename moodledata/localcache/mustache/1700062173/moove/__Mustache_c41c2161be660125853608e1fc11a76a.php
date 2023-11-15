<?php

class __Mustache_c41c2161be660125853608e1fc11a76a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<ul data-region="elementlist" data-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="unlist">
';
        $value = $context->find('elements');
        $buffer .= $this->sectionBb595a6e7a5cf70c186bfac2f9252378($context, $indent, $value);
        $buffer .= $indent . '</ul>';

        return $buffer;
    }

    private function section92807471859bbd901b7f5e7b139a9406(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core/inplace_editable}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/inplace_editable')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4507e3effb6e6dfc27fa757ff1452df0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editelement, tool_certificate, {{displayname}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'editelement, tool_certificate, ';
                $value = $this->resolveValue($context->find('displayname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7680c9ab48e1615ec8d80b97eeaa59cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/settings, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/settings, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e4af4ed1c4f04fc1b23275a2ed41cb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'deleteelement, tool_certificate';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'deleteelement, tool_certificate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0601b851dc2d09e2cc0679821ca5710a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/trash, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/trash, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBb595a6e7a5cf70c186bfac2f9252378(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li data-region="pageelement" data-id="{{id}}" class="mb-2 mt-2 d-flex">
            {{> core/drag_handle}}
            <span>{{{icon}}}</span>
            {{#editablename}}{{> core/inplace_editable}}{{/editablename}}

            <span class="ml-auto d-flex">
                <a class="btn btn-link p-0" data-action="editelement" href="#" data-id="{{id}}" data-name="{{displayname}}" title="{{#str}}editelement, tool_certificate, {{displayname}}{{/str}}">
                    {{#pix}} i/settings, core {{/pix}}
                </a>
                <a class="btn btn-link p-0" data-action="deleteelement" href="#" data-id="{{id}}" data-name="{{displayname}}" title="{{#str}}deleteelement, tool_certificate{{/str}}">
                    {{#pix}} i/trash, core {{/pix}}
                </a>
            </span>
        </li>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <li data-region="pageelement" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="mb-2 mt-2 d-flex">
';
                if ($partial = $this->mustache->loadPartial('core/drag_handle')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '            <span>';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            ';
                $value = $context->find('editablename');
                $buffer .= $this->section92807471859bbd901b7f5e7b139a9406($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <span class="ml-auto d-flex">
';
                $buffer .= $indent . '                <a class="btn btn-link p-0" data-action="editelement" href="#" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-name="';
                $value = $this->resolveValue($context->find('displayname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section4507e3effb6e6dfc27fa757ff1452df0($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('pix');
                $buffer .= $this->section7680c9ab48e1615ec8d80b97eeaa59cd($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '                <a class="btn btn-link p-0" data-action="deleteelement" href="#" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-name="';
                $value = $this->resolveValue($context->find('displayname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section4e4af4ed1c4f04fc1b23275a2ed41cb6($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('pix');
                $buffer .= $this->section0601b851dc2d09e2cc0679821ca5710a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
