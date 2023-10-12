<?php

class __Mustache_367e880db3e6a454bc3ae359b1b97fc5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="container-fluid">
';
        $buffer .= $indent . '    <hr />
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('compliant');
        $buffer .= $this->section4862d5e167b16fba21b6169e0d7e1177($context, $indent, $value);
        $value = $context->find('compliant');
        if (empty($value)) {
            
            $buffer .= $indent . '            <h4 class="d-inline pl-6 " id="';
            $value = $this->resolveValue($context->find('raw_component'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">';
            $value = $this->resolveValue($context->find('component'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '</h4>
';
            $buffer .= $indent . '            <span>';
            $value = $context->find('pix');
            $buffer .= $this->section915a4297e203b469a433e790b3eeee3f($context, $indent, $value);
            $buffer .= '</span>
';
        }
        $value = $context->find('external');
        $buffer .= $this->section8dca936490f5203b8ef3553588a74712($context, $indent, $value);
        $value = $context->find('deprecated');
        $buffer .= $this->section2109081fdc76be66f2256fd24647e654($context, $indent, $value);
        $value = $context->find('userlistnoncompliance');
        $buffer .= $this->section8461fc94586a9c5b5c6a46160ffcc120($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('compliant');
        $buffer .= $this->section3bbdab3a7fc46a08b80666dde4f20bc8($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section6262fcd7a9e880fec8f5149c97931226(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'expandplugin, tool_dataprivacy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'expandplugin, tool_dataprivacy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6c05a9dbbbbd04b013f52b125a461c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/collapsed, moodle, {{#str}}expandplugin, tool_dataprivacy{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/collapsed, moodle, ';
                $value = $context->find('str');
                $buffer .= $this->section6262fcd7a9e880fec8f5149c97931226($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4862d5e167b16fba21b6169e0d7e1177(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a class="component-expand pl-5" data-component="{{raw_component}}" href=\'#\'>
            <h4 class=" d-inline pl-5 " id="{{raw_component}}">{{#pix}}t/collapsed, moodle, {{#str}}expandplugin, tool_dataprivacy{{/str}}{{/pix}}{{component}}</h4>
            </a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a class="component-expand pl-5" data-component="';
                $value = $this->resolveValue($context->find('raw_component'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" href=\'#\'>
';
                $buffer .= $indent . '            <h4 class=" d-inline pl-5 " id="';
                $value = $this->resolveValue($context->find('raw_component'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('pix');
                $buffer .= $this->sectionF6c05a9dbbbbd04b013f52b125a461c6($context, $indent, $value);
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h4>
';
                $buffer .= $indent . '            </a>
';
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

    private function section8dca936490f5203b8ef3553588a74712(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="badge badge-pill badge-notice">{{#str}}external, tool_dataprivacy{{/str}}</span>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <span class="badge badge-pill badge-notice">';
                $value = $context->find('str');
                $buffer .= $this->section165c418cf9a529a6435494a3600006fc($context, $indent, $value);
                $buffer .= '</span>
';
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

    private function section2109081fdc76be66f2256fd24647e654(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="badge badge-pill badge-warning">{{#str}}deprecated, tool_dataprivacy{{/str}}</span>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <span class="badge badge-pill badge-warning">';
                $value = $context->find('str');
                $buffer .= $this->sectionF867795fbc021b513e460b78797920ee($context, $indent, $value);
                $buffer .= '</span>
';
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

    private function section8461fc94586a9c5b5c6a46160ffcc120(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="badge badge-pill badge-warning">{{#str}}userlistnoncompliant, tool_dataprivacy{{/str}}</span>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <span class="badge badge-pill badge-warning">';
                $value = $context->find('str');
                $buffer .= $this->sectionB3b093d3608344f305a13d515f929aa0($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEdd279b757978341a736496bfa8a96df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="#{{name}}"><strong style="word-wrap:break-word">{{name}}</strong></a>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <a href="#';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><strong style="word-wrap:break-word">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</strong></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa5f1247f045ff65232cd8d656166b7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="row">
                            <dt class="col-3 font-weight-normal" style="word-wrap:break-word">{{field_name}}</dt>
                            <dd class="col-9">{{field_summary}}</dd>
                        </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="row">
';
                $buffer .= $indent . '                            <dt class="col-3 font-weight-normal" style="word-wrap:break-word">';
                $value = $this->resolveValue($context->find('field_name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</dt>
';
                $buffer .= $indent . '                            <dd class="col-9">';
                $value = $this->resolveValue($context->find('field_summary'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</dd>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE0b7cae90a4de1949885352f70cf230d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <hr />
                <div class="pl-6">
                    <dl class="row">
                        <dt class="col-3">
                            {{#link}}
                                <a href="#{{name}}"><strong style="word-wrap:break-word">{{name}}</strong></a>
                            {{/link}}
                            {{^link}}
                                <strong style="word-wrap:break-word">{{name}}</strong>
                            {{/link}}
                            <div class="small text-muted" style="word-wrap:break-word">{{type}}</div>
                        </dt>
                        <dd class="col-9">{{summary}}</dd>
                    </dl>
                    <dl>
                        {{#fields}}
                        <div class="row">
                            <dt class="col-3 font-weight-normal" style="word-wrap:break-word">{{field_name}}</dt>
                            <dd class="col-9">{{field_summary}}</dd>
                        </div>
                        {{/fields}}
                    </dl>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <hr />
';
                $buffer .= $indent . '                <div class="pl-6">
';
                $buffer .= $indent . '                    <dl class="row">
';
                $buffer .= $indent . '                        <dt class="col-3">
';
                $value = $context->find('link');
                $buffer .= $this->sectionEdd279b757978341a736496bfa8a96df($context, $indent, $value);
                $value = $context->find('link');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <strong style="word-wrap:break-word">';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</strong>
';
                }
                $buffer .= $indent . '                            <div class="small text-muted" style="word-wrap:break-word">';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $buffer .= $indent . '                        </dt>
';
                $buffer .= $indent . '                        <dd class="col-9">';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</dd>
';
                $buffer .= $indent . '                    </dl>
';
                $buffer .= $indent . '                    <dl>
';
                $value = $context->find('fields');
                $buffer .= $this->sectionAa5f1247f045ff65232cd8d656166b7c($context, $indent, $value);
                $buffer .= $indent . '                    </dl>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEcd18159f99c5a657587d3c3fe73e013(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <hr />
                <div class="pl-6">
                    <div class="row">
                        <div class="col-12">
                            {{nullprovider}}
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
                
                $buffer .= $indent . '                <hr />
';
                $buffer .= $indent . '                <div class="pl-6">
';
                $buffer .= $indent . '                    <div class="row">
';
                $buffer .= $indent . '                        <div class="col-12">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('nullprovider'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3bbdab3a7fc46a08b80666dde4f20bc8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="hide" data-section="{{raw_component}}" aria-expanded="false" role="contentinfo">
            {{#metadata}}
                <hr />
                <div class="pl-6">
                    <dl class="row">
                        <dt class="col-3">
                            {{#link}}
                                <a href="#{{name}}"><strong style="word-wrap:break-word">{{name}}</strong></a>
                            {{/link}}
                            {{^link}}
                                <strong style="word-wrap:break-word">{{name}}</strong>
                            {{/link}}
                            <div class="small text-muted" style="word-wrap:break-word">{{type}}</div>
                        </dt>
                        <dd class="col-9">{{summary}}</dd>
                    </dl>
                    <dl>
                        {{#fields}}
                        <div class="row">
                            <dt class="col-3 font-weight-normal" style="word-wrap:break-word">{{field_name}}</dt>
                            <dd class="col-9">{{field_summary}}</dd>
                        </div>
                        {{/fields}}
                    </dl>
                </div>
            {{/metadata}}
            {{#nullprovider}}
                <hr />
                <div class="pl-6">
                    <div class="row">
                        <div class="col-12">
                            {{nullprovider}}
                        </div>
                    </div>
                </div>
            {{/nullprovider}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="hide" data-section="';
                $value = $this->resolveValue($context->find('raw_component'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-expanded="false" role="contentinfo">
';
                $value = $context->find('metadata');
                $buffer .= $this->sectionE0b7cae90a4de1949885352f70cf230d($context, $indent, $value);
                $value = $context->find('nullprovider');
                $buffer .= $this->sectionEcd18159f99c5a657587d3c3fe73e013($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
