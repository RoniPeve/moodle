<?php

class __Mustache_b23b9736e2581021ce7e9c2ea07ec362 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="mod_coursecertificate_view">
';
        $value = $context->find('viewurl');
        $buffer .= $this->section79ef60ed5f19e6bf314d5a8a75e81260($context, $indent, $value);
        $value = $context->find('studentview');
        $buffer .= $this->section8cf36d228d94f065299f6ac5b8e0d59e($context, $indent, $value);
        $value = $context->find('studentview');
        if (empty($value)) {
            
            $value = $context->find('showautomaticsend');
            $buffer .= $this->section37eb8f597b7cbfbafc638ea120dbe947($context, $indent, $value);
            $value = $context->find('notemplateselected');
            $buffer .= $this->section8c283d23d1d3ae02f39a7102dfb0e02f($context, $indent, $value);
            $buffer .= $indent . '        <div class="alert alert-warning mt-3 hidden-warning ';
            $value = $context->find('showhiddenwarning');
            if (empty($value)) {
                
                $buffer .= 'd-none';
            }
            $buffer .= '">
';
            $buffer .= $indent . '            ';
            $value = $context->find('str');
            $buffer .= $this->section8bb701455a486d5ed9b4e49c3d432d1c($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '        <div class="alert alert-info mt-3 noautosend-info ';
            $value = $context->find('shownoautosendinfo');
            if (empty($value)) {
                
                $buffer .= 'd-none';
            }
            $buffer .= '">
';
            $buffer .= $indent . '            ';
            $value = $context->find('str');
            $buffer .= $this->sectionB7602dd40f853c7e26d3f801ce1d0529($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </div>
';
            $value = $context->find('showreport');
            $buffer .= $this->section414db18dd90323d4711807498997ddf4($context, $indent, $value);
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionD1cfb9038d853db9162734d80dab469b($context, $indent, $value);

        return $buffer;
    }

    private function section453a7a7774f5111cd0e0a2de0cd8761a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'viewcertificate, tool_certificate';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'viewcertificate, tool_certificate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section79ef60ed5f19e6bf314d5a8a75e81260(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="mdl-align mb-3">
            <a class="btn btn-primary" href="{{viewurl}}" target="_blank">{{#str}}viewcertificate, tool_certificate{{/str}}</a>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="mdl-align mb-3">
';
                $buffer .= $indent . '            <a class="btn btn-primary" href="';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank">';
                $value = $context->find('str');
                $buffer .= $this->section453a7a7774f5111cd0e0a2de0cd8761a($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section387f3770474db9baae93f6261177c824(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notemplateselecteduser, coursecertificate ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notemplateselecteduser, coursecertificate ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7776335461dada71ede27f95bd411e55(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="alert alert-danger mt-3">
                {{#str}} notemplateselecteduser, coursecertificate {{/str}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="alert alert-danger mt-3">
';
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->section387f3770474db9baae93f6261177c824($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8cf36d228d94f065299f6ac5b8e0d59e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#notemplateselected}}
            <div class="alert alert-danger mt-3">
                {{#str}} notemplateselecteduser, coursecertificate {{/str}}
            </div>
        {{/notemplateselected}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('notemplateselected');
                $buffer .= $this->section7776335461dada71ede27f95bd411e55($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section37eb8f597b7cbfbafc638ea120dbe947(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div data-region="automaticsend-alert" class="position-relative w-100">
                {{> coursecertificate/automaticsend_alert}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div data-region="automaticsend-alert" class="position-relative w-100">
';
                if ($partial = $this->mustache->loadPartial('coursecertificate/automaticsend_alert')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section45a261d194106d526d6c294ba1117c77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notemplateselected, coursecertificate ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notemplateselected, coursecertificate ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8c283d23d1d3ae02f39a7102dfb0e02f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="alert alert-danger mt-3">
                {{#str}} notemplateselected, coursecertificate {{/str}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="alert alert-danger mt-3">
';
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->section45a261d194106d526d6c294ba1117c77($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8bb701455a486d5ed9b4e49c3d432d1c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' activityhiddenwarning, coursecertificate ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' activityhiddenwarning, coursecertificate ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7602dd40f853c7e26d3f801ce1d0529(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' automaticsenddisabledalert, coursecertificate ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' automaticsenddisabledalert, coursecertificate ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c61ac181826eb5ff61b067188cc452c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' certifiedusers, coursecertificate ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' certifiedusers, coursecertificate ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section414db18dd90323d4711807498997ddf4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h3>{{#str}} certifiedusers, coursecertificate {{/str}}</h3>
            <div data-region="issues-report" class="position-relative w-100">
                {{> coursecertificate/issues_report}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <h3>';
                $value = $context->find('str');
                $buffer .= $this->section1c61ac181826eb5ff61b067188cc452c($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '            <div data-region="issues-report" class="position-relative w-100">
';
                if ($partial = $this->mustache->loadPartial('coursecertificate/issues_report')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1cfb9038d853db9162734d80dab469b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{^studentview}}
    require([\'tool_certificate/issues-list\', \'mod_coursecertificate/manager\'], function(issuesList, manager) {
        issuesList.init();
        manager.init();
    });
    {{/studentview}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('studentview');
                if (empty($value)) {
                    
                    $buffer .= $indent . '    require([\'tool_certificate/issues-list\', \'mod_coursecertificate/manager\'], function(issuesList, manager) {
';
                    $buffer .= $indent . '        issuesList.init();
';
                    $buffer .= $indent . '        manager.init();
';
                    $buffer .= $indent . '    });
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
