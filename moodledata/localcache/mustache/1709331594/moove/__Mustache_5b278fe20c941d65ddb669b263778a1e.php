<?php

class __Mustache_5b278fe20c941d65ddb669b263778a1e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid tertiary-navigation" id="action_bar">
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('categoryselect');
        $buffer .= $this->section80ac08544d22549fd4cc80d66fdcdb29($context, $indent, $value);
        $value = $context->find('search');
        $buffer .= $this->sectionDfefeb119f5f31c78110b50bcf44c9d0($context, $indent, $value);
        $value = $context->find('additionaloptions');
        $buffer .= $this->sectionE733c30e7d882f710effedd43ce8f236($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section80ac08544d22549fd4cc80d66fdcdb29(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{> core/url_select }}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDfefeb119f5f31c78110b50bcf44c9d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{> core/search_input }}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/search_input')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11352dffef15d7c7875602ba40556abd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'moreactions';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'moreactions';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section74abb3cc60ffe12f30c02419e1664972(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'moremenu';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'moremenu';
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

    private function section919c5bd7da379c193145034d08666586(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a role="menuitem" class="dropdown-item" {{#attributes}}{{name}}="{{value}}"{{/attributes}} href="{{url}}" tabindex="-1">{{string}}</a>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <a role="menuitem" class="dropdown-item" ';
                $value = $context->find('attributes');
                $buffer .= $this->section801bcd19aebdc5786ad20c4358b88203($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" tabindex="-1">';
                $value = $this->resolveValue($context->find('string'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE733c30e7d882f710effedd43ce8f236(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="ml-auto d-flex">
                <div class="navitem dropdown">
                    <button aria-label="{{#str}}moreactions{{/str}}" class="btn btn-secondary dropdown-toggle" id="dropdown-actions" data-toggle="dropdown" aria-haspopup="true" aria-controls="moreactionsmenu">
                        {{#str}}moremenu{{/str}}
                    </button>

                    <div id="moreactionsmenu" class="dropdown-menu" aria-labelledby="dropdown-actions" role="menu">
                        {{#options}}
                            <a role="menuitem" class="dropdown-item" {{#attributes}}{{name}}="{{value}}"{{/attributes}} href="{{url}}" tabindex="-1">{{string}}</a>
                        {{/options}}
                    </div>
                </div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="ml-auto d-flex">
';
                $buffer .= $indent . '                <div class="navitem dropdown">
';
                $buffer .= $indent . '                    <button aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section11352dffef15d7c7875602ba40556abd($context, $indent, $value);
                $buffer .= '" class="btn btn-secondary dropdown-toggle" id="dropdown-actions" data-toggle="dropdown" aria-haspopup="true" aria-controls="moreactionsmenu">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->section74abb3cc60ffe12f30c02419e1664972($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </button>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div id="moreactionsmenu" class="dropdown-menu" aria-labelledby="dropdown-actions" role="menu">
';
                $value = $context->find('options');
                $buffer .= $this->section919c5bd7da379c193145034d08666586($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
