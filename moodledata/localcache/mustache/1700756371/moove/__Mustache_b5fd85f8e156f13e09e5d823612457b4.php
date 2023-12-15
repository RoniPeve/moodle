<?php

class __Mustache_b5fd85f8e156f13e09e5d823612457b4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core/sticky_footer')) {
            $context->pushBlockContext(array(
                'stickyclasses' => array($this, 'block30808c3f21c8800b85787ae4d1fd8196'),
                'disable' => array($this, 'blockEdea0cfa82b00b518813d597676a3d97'),
                'extradata' => array($this, 'blockEfbb5f80f524cdd65ddc95b1cf2b8d7b'),
                'stickycontent' => array($this, 'blockBbb52ac6a261b088619d08e0c5a23cc0'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $value = $context->find('js');
        $buffer .= $this->section467659a890731aa5ee2749f044dd2634($context, $indent, $value);

        return $buffer;
    }

    private function section43655405fc6a05d2320c48d4d567876a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' selectall ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' selectall ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section461f357454786f0b7bcdd38cb4b57d73(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nobulkaction, core_courseformat ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nobulkaction, core_courseformat ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46814aca73bdfea7e41e493c326750ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' title="{{title}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBb255b553790721d985b5c11c39036e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{icon}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56953fdac944adf35b29d4f6179c39c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="nav-item">
                <button
                    class="btn py-0 d-flex flex-column"
                    data-action="{{action}}"
                    data-bulk="{{bulk}}"
                    data-for="bulkaction"
                    {{#title}} title="{{title}}" {{/title}}
                >
                    <span class="w-100 pl-2">{{#pix}}{{icon}}{{/pix}}</span>
                    <span>{{name}}</span>
                </button>
            </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li class="nav-item">
';
                $buffer .= $indent . '                <button
';
                $buffer .= $indent . '                    class="btn py-0 d-flex flex-column"
';
                $buffer .= $indent . '                    data-action="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                    data-bulk="';
                $value = $this->resolveValue($context->find('bulk'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                    data-for="bulkaction"
';
                $buffer .= $indent . '                    ';
                $value = $context->find('title');
                $buffer .= $this->section46814aca73bdfea7e41e493c326750ce($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                >
';
                $buffer .= $indent . '                    <span class="w-100 pl-2">';
                $value = $context->find('pix');
                $buffer .= $this->sectionBb255b553790721d985b5c11c39036e3($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    <span>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA6532b8847621ff49d57f7818805d1fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <ul class="actions nav" data-for="bulkactions">
            {{#actions}}
            <li class="nav-item">
                <button
                    class="btn py-0 d-flex flex-column"
                    data-action="{{action}}"
                    data-bulk="{{bulk}}"
                    data-for="bulkaction"
                    {{#title}} title="{{title}}" {{/title}}
                >
                    <span class="w-100 pl-2">{{#pix}}{{icon}}{{/pix}}</span>
                    <span>{{name}}</span>
                </button>
            </li>
            {{/actions}}
        </ul>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <ul class="actions nav" data-for="bulkactions">
';
                $value = $context->find('actions');
                $buffer .= $this->section56953fdac944adf35b29d4f6179c39c7($context, $indent, $value);
                $buffer .= $indent . '        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section368c53da7c69ac752b619b87ab01b959(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' bulkcancel, core_courseformat ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' bulkcancel, core_courseformat ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01a1cb688132d57fc41f0070a1ef998d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' e/cancel, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' e/cancel, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f0fe77e7f05665e2ef5a85b9b10fa54(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' bulkselection, core_courseformat, 0 ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' bulkselection, core_courseformat, 0 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section467659a890731aa5ee2749f044dd2634(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core_courseformat/local/content/bulkedittools\'], function(component) {
    component.init(\'[data-for="bulkedittools"]\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'core_courseformat/local/content/bulkedittools\'], function(component) {
';
                $buffer .= $indent . '    component.init(\'[data-for="bulkedittools"]\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block30808c3f21c8800b85787ae4d1fd8196($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . ' justify-content-between ';
    
        return $buffer;
    }

    public function blockEdea0cfa82b00b518813d597676a3d97($context)
    {
        $indent = $buffer = '';
        $buffer .= ' data-disable="true" ';
    
        return $buffer;
    }

    public function blockEfbb5f80f524cdd65ddc95b1cf2b8d7b($context)
    {
        $indent = $buffer = '';
        $buffer .= ' data-for="bulkedittools" ';
    
        return $buffer;
    }

    public function blockBbb52ac6a261b088619d08e0c5a23cc0($context)
    {
        $indent = $buffer = '';
        $buffer .= '    <div class="form-check">
';
        $buffer .= $indent . '        <input type="checkbox" class="form-check-input" id="selectall" data-for="selectall" disabled>
';
        $buffer .= $indent . '        <label class="form-check-label" for="selectall">
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->section43655405fc6a05d2320c48d4d567876a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </label>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div data-for="bulktools">
';
        $value = $context->find('hasactions');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            $value = $context->find('str');
            $buffer .= $this->section461f357454786f0b7bcdd38cb4b57d73($context, $indent, $value);
            $buffer .= '
';
        }
        $value = $context->find('hasactions');
        $buffer .= $this->sectionA6532b8847621ff49d57f7818805d1fc($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="d-flex flex-column">
';
        $buffer .= $indent . '        <div class="ml-auto">
';
        $buffer .= $indent . '            <button
';
        $buffer .= $indent . '                class="btn pr-0 pb-0"
';
        $buffer .= $indent . '                data-action="bulkcancel"
';
        $buffer .= $indent . '                data-for="bulkcancel"
';
        $buffer .= $indent . '                title="';
        $value = $context->find('str');
        $buffer .= $this->section368c53da7c69ac752b619b87ab01b959($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '            >
';
        $buffer .= $indent . '                ';
        $value = $context->find('pix');
        $buffer .= $this->section01a1cb688132d57fc41f0070a1ef998d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div data-for="bulkcount">
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->section2f0fe77e7f05665e2ef5a85b9b10fa54($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
    
        return $buffer;
    }
}