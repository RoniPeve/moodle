<?php

class __Mustache_bc74fde7b407b7f7d1e883d94af1633f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="dataprivacy-main">
';
        $buffer .= $indent . '    <h2>';
        $value = $context->find('str');
        $buffer .= $this->section5e732af34e3aa42e02468763671615dc($context, $indent, $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '    <hr />
';
        $buffer .= $indent . '    <p><strong>';
        $value = $context->find('str');
        $buffer .= $this->sectionF108f25aa9a24392589d2634859d08cc($context, $indent, $value);
        $buffer .= '</strong></p>
';
        $buffer .= $indent . '    <dl>
';
        $buffer .= $indent . '        <dt>';
        $value = $context->find('pix');
        $buffer .= $this->section915a4297e203b469a433e790b3eeee3f($context, $indent, $value);
        $buffer .= '</dt>
';
        $buffer .= $indent . '        <dd>';
        $value = $context->find('str');
        $buffer .= $this->sectionD2869d4f57df9c57f62129e0f3a5b29a($context, $indent, $value);
        $buffer .= '</dd>
';
        $buffer .= $indent . '        <dt><span class="badge badge-pill badge-notice">';
        $value = $context->find('str');
        $buffer .= $this->section165c418cf9a529a6435494a3600006fc($context, $indent, $value);
        $buffer .= '</span></dt>
';
        $buffer .= $indent . '        <dd>';
        $value = $context->find('str');
        $buffer .= $this->section3d64c1f8f9f7ccade8e1da984443234f($context, $indent, $value);
        $buffer .= '</dd>
';
        $buffer .= $indent . '        <dt><span class="badge badge-pill badge-warning">';
        $value = $context->find('str');
        $buffer .= $this->sectionF867795fbc021b513e460b78797920ee($context, $indent, $value);
        $buffer .= '</span></dt>
';
        $buffer .= $indent . '        <dd>';
        $value = $context->find('str');
        $buffer .= $this->sectionD53c21f22c287729f20ea0932fb37ad8($context, $indent, $value);
        $buffer .= '</dd>
';
        $buffer .= $indent . '        <dt><span class="badge badge-pill badge-warning">';
        $value = $context->find('str');
        $buffer .= $this->sectionB3b093d3608344f305a13d515f929aa0($context, $indent, $value);
        $buffer .= '</span></dt>
';
        $buffer .= $indent . '        <dd>';
        $value = $context->find('str');
        $buffer .= $this->section4f35aecd8f89ec6a6f155e7deae9e2a8($context, $indent, $value);
        $buffer .= '</dd>
';
        $buffer .= $indent . '    </dl>
';
        $buffer .= $indent . '    <hr />
';
        $buffer .= $indent . '    <div class="clearfix"><a class="tool_dataprivacy-expand-all float-right" href="#" data-visibility-state=\'visible\'>';
        $value = $context->find('str');
        $buffer .= $this->section19033f47119be820bf9c0637d7879655($context, $indent, $value);
        $buffer .= '</a></div>
';
        $value = $context->find('types');
        $buffer .= $this->sectionB1b4bd7e83344570c7ae937409f9f4ba($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->sectionBc5a75d83a443948d68323fa74591aac($context, $indent, $value);

        return $buffer;
    }

    private function section5e732af34e3aa42e02468763671615dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pluginregistrytitle, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'pluginregistrytitle, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF108f25aa9a24392589d2634859d08cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'explanationtitle, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'explanationtitle, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10255f5631017427b286ebb7aaa6edd6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'requiresattention, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'requiresattention, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section915a4297e203b469a433e790b3eeee3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/risk_xss, moodle, {{#str}}requiresattention, tool_dataprivacy{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/risk_xss, moodle, ';
                $value = $context->find('str');
                $buffer .= $this->section10255f5631017427b286ebb7aaa6edd6($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD2869d4f57df9c57f62129e0f3a5b29a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'requiresattentionexplanation, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'requiresattentionexplanation, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section165c418cf9a529a6435494a3600006fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'external, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'external, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d64c1f8f9f7ccade8e1da984443234f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'externalexplanation, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'externalexplanation, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF867795fbc021b513e460b78797920ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'deprecated, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'deprecated, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD53c21f22c287729f20ea0932fb37ad8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'deprecatedexplanation, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'deprecatedexplanation, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3b093d3608344f305a13d515f929aa0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'userlistnoncompliant, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'userlistnoncompliant, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4f35aecd8f89ec6a6f155e7deae9e2a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'userlistexplanation, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'userlistexplanation, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19033f47119be820bf9c0637d7879655(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'visible, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'visible, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAac2b1b885c5db72f55b095ec21d087d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'expandplugintype, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'expandplugintype, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e5008f7578b238b68e16861d5e23e5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/collapsed, moodle, {{#str}}expandplugintype, tool_dataprivacy{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/collapsed, moodle, ';
                $value = $context->find('str');
                $buffer .= $this->sectionAac2b1b885c5db72f55b095ec21d087d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30a15a612ecb96762b9d6c5b88e01bae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> tool_dataprivacy/component_status}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('tool_dataprivacy/component_status')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1b4bd7e83344570c7ae937409f9f4ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div>
        <div>
            <a class="type-expand" href=\'#\' data-plugin="{{plugin_type_raw}}">
            <h3 id="{{plugin_type_raw}}">{{#pix}}t/collapsed, moodle, {{#str}}expandplugintype, tool_dataprivacy{{/str}}{{/pix}}{{plugin_type}}</h3>
            </a>
        </div>
        <div class="hide pb-3" data-plugintarget="{{plugin_type_raw}}" aria-expanded="false" role="contentinfo">
            {{#plugins}}
                {{> tool_dataprivacy/component_status}}
            {{/plugins}}
        </div>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div>
';
                $buffer .= $indent . '        <div>
';
                $buffer .= $indent . '            <a class="type-expand" href=\'#\' data-plugin="';
                $value = $this->resolveValue($context->find('plugin_type_raw'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            <h3 id="';
                $value = $this->resolveValue($context->find('plugin_type_raw'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('pix');
                $buffer .= $this->section8e5008f7578b238b68e16861d5e23e5c($context, $indent, $value);
                $value = $this->resolveValue($context->find('plugin_type'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h3>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="hide pb-3" data-plugintarget="';
                $value = $this->resolveValue($context->find('plugin_type_raw'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-expanded="false" role="contentinfo">
';
                $value = $context->find('plugins');
                $buffer .= $this->section30a15a612ecb96762b9d6c5b88e01bae($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc5a75d83a443948d68323fa74591aac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'tool_dataprivacy/expand_contract\'], function($, ec) {

    $(\'.type-expand\').click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        var thisnode = $(this);
        var plugin = thisnode.data(\'plugin\');
        var metadata = $(\'[data-plugintarget=\\\'\' + plugin + \'\\\']\');
        ec.expandCollapse(metadata, thisnode);
    });

    $(\'.component-expand\').click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        var thisnode = $(this);
        var plugin = thisnode.data(\'component\');
        var metadata = $(\'[data-section=\\\'\' + plugin + \'\\\']\');
        ec.expandCollapse(metadata, thisnode);
    });

    $(\'.tool_dataprivacy-expand-all\').click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        var nextstate = $(this).data(\'visibilityState\');
        ec.expandCollapseAll(nextstate);
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\', \'tool_dataprivacy/expand_contract\'], function($, ec) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'.type-expand\').click(function(e) {
';
                $buffer .= $indent . '        e.preventDefault();
';
                $buffer .= $indent . '        e.stopPropagation();
';
                $buffer .= $indent . '        var thisnode = $(this);
';
                $buffer .= $indent . '        var plugin = thisnode.data(\'plugin\');
';
                $buffer .= $indent . '        var metadata = $(\'[data-plugintarget=\\\'\' + plugin + \'\\\']\');
';
                $buffer .= $indent . '        ec.expandCollapse(metadata, thisnode);
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'.component-expand\').click(function(e) {
';
                $buffer .= $indent . '        e.preventDefault();
';
                $buffer .= $indent . '        e.stopPropagation();
';
                $buffer .= $indent . '        var thisnode = $(this);
';
                $buffer .= $indent . '        var plugin = thisnode.data(\'component\');
';
                $buffer .= $indent . '        var metadata = $(\'[data-section=\\\'\' + plugin + \'\\\']\');
';
                $buffer .= $indent . '        ec.expandCollapse(metadata, thisnode);
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'.tool_dataprivacy-expand-all\').click(function(e) {
';
                $buffer .= $indent . '        e.preventDefault();
';
                $buffer .= $indent . '        e.stopPropagation();
';
                $buffer .= $indent . '        var nextstate = $(this).data(\'visibilityState\');
';
                $buffer .= $indent . '        ec.expandCollapseAll(nextstate);
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
