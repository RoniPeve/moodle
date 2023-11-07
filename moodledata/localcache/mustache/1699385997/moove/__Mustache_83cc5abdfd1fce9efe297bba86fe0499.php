<?php

class __Mustache_83cc5abdfd1fce9efe297bba86fe0499 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="card dashboard-card ';
        $value = $context->find('visible');
        if (empty($value)) {
            
            $buffer .= 'dimmed';
        }
        $buffer .= '" role="listitem" data-region="course-content" data-course-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <a href="';
        $value = $this->resolveValue($context->find('courseurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" tabindex="-1">
';
        $buffer .= $indent . '        <div class="card-img dashboard-card-img" style="background-image: url(';
        $value = $this->resolveValue($context->find('image'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ');">
';
        $buffer .= $indent . '            <span class="sr-only">';
        $value = $this->resolveValue($context->find('fullname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '            <div class="course-category">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('category'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $value = $context->find('hasenrolmenticons');
        $buffer .= $this->section317cd23b35e09f58d1ad5be807658f86($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '    <div class="card-body course-info-container">
';
        $buffer .= $indent . '        <div class="d-flex align-items-start">
';
        $buffer .= $indent . '            <div class="w-100">
';
        $buffer .= $indent . '                <a href="';
        $value = $this->resolveValue($context->find('courseurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="aalink coursename mr-2 mb-1 ';
        $value = $context->find('visible');
        if (empty($value)) {
            
            $buffer .= 'dimmed';
        }
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('fullname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '            
';
        $buffer .= $indent . '        <!--<div class="customfields">
';
        $buffer .= $indent . '            <strong>';
        $value = $this->resolveValue($context->find('customfields'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</strong>
';
        $buffer .= $indent . '        </div>-->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="course-summary">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('summary'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="customfields campos">
';
        $buffer .= $indent . '            <strong>';
        $value = $this->resolveValue($context->find('customfields'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</strong>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $value = $context->find('hasprogress');
        $buffer .= $this->section637b2046657309a0c28ec9b97ca776e8($context, $indent, $value);
        $buffer .= $indent . '        
';
        $value = $context->find('hascontacts');
        $buffer .= $this->section3d15cb0a6e17dc5135716fc79a0c4244($context, $indent, $value);
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section1d26d3b97f75e6012e479c7629f2f89f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="enrolmenticon">
                            {{{.}}}
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="enrolmenticon">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section317cd23b35e09f58d1ad5be807658f86(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="enrolmenticons d-flex">
                    {{#enrolmenticons}}
                        <div class="enrolmenticon">
                            {{{.}}}
                        </div>
                    {{/enrolmenticons}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="enrolmenticons d-flex">
';
                $value = $context->find('enrolmenticons');
                $buffer .= $this->section1d26d3b97f75e6012e479c7629f2f89f($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf1f03f16c0b47b19c688aea478bf253(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completepercent, block_myoverview, {{progress}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completepercent, block_myoverview, ';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section637b2046657309a0c28ec9b97ca776e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="d-flex align-items-start">
            <div class="card-footer dashboard-card-footer border-0 bg-white w-100">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{{progress}}}" style="width: {{{progress}}}%" aria-valuemin="0" aria-valuemax="{{{progress}}}"></div>
                </div>
                <p class="mb-0">{{#str}}completepercent, block_myoverview, {{progress}}{{/str}}</p>
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="d-flex align-items-start">
';
                $buffer .= $indent . '            <div class="card-footer dashboard-card-footer border-0 bg-white w-100">
';
                $buffer .= $indent . '                <div class="progress">
';
                $buffer .= $indent . '                    <div class="progress-bar" role="progressbar" aria-valuenow="';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" style="width: ';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '%" aria-valuemin="0" aria-valuemax="';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"></div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <p class="mb-0">';
                $value = $context->find('str');
                $buffer .= $this->sectionDf1f03f16c0b47b19c688aea478bf253($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02690338b614737bd06b3e0bfab5d40b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{config.wwwroot}}/user/profile.php?id={{{id}}}" class="contact" data-toggle="tooltip" title="{{{fullname}}}">
                    <img src="{{{userpicture}}}" class="rounded-circle" alt="{{{fullname}}}">
                    <div class="info">
                        <p class="name">{{{fullname}}}</p>
                        <p class="role">{{{role}}}</p>
                    </div>
                </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/user/profile.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="contact" data-toggle="tooltip" title="';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->find('userpicture'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="rounded-circle" alt="';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="info">
';
                $buffer .= $indent . '                        <p class="name">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                        <p class="role">';
                $value = $this->resolveValue($context->find('role'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d15cb0a6e17dc5135716fc79a0c4244(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="course-contacts row gx-3 pie_curso">
            {{#contacts}}
                <a href="{{config.wwwroot}}/user/profile.php?id={{{id}}}" class="contact" data-toggle="tooltip" title="{{{fullname}}}">
                    <img src="{{{userpicture}}}" class="rounded-circle" alt="{{{fullname}}}">
                    <div class="info">
                        <p class="name">{{{fullname}}}</p>
                        <p class="role">{{{role}}}</p>
                    </div>
                </a>
            {{/contacts}}
        </div>
        
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="course-contacts row gx-3 pie_curso">
';
                $value = $context->find('contacts');
                $buffer .= $this->section02690338b614737bd06b3e0bfab5d40b($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
