<?php

class __Mustache_f5ba98d8a413bac602c4baee2f07de28 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="rmuiformate-header-wrapper d-none ">
';
        $buffer .= $indent . '    <header id="page-header" class=" d-print-none hasbackground design-1"
';
        $buffer .= $indent . '        style="background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, #000000 110%), url(\'';
        $value = $this->resolveValue($context->find('headercourseimage'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\');background-position: ';
        $value = $this->resolveValue($context->find('remuiheaderimagebgposition'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '; background-size:';
        $value = $this->resolveValue($context->find('remuiheaderimagebgsize'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';background-repeat: no-repeat;">
';
        $buffer .= $indent . '       <div class="align-self-end">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('turneditingonswitch'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '       </div>
';
        $buffer .= $indent . '        <div class="w-100 header-wrapper">
';
        $buffer .= $indent . '            <div class="d-flex flex-wrap w-100">
';
        $buffer .= $indent . '                <div class="d-flex align-items-center w-100">
';
        $buffer .= $indent . '                    <div class="dashboard-bar-wrapper w-100">
';
        $buffer .= $indent . '                        <div class="header-main-section">
';
        $buffer .= $indent . '                            <div class="category">
';
        $buffer .= $indent . '                                <span class="badge ">
';
        $buffer .= $indent . '                                    ';
        $value = $this->resolveValue($context->find('coursecategoryname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                                </span>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="page-context-header p-0 m-0">
';
        $buffer .= $indent . '                                <div class="page-header-headings p-0">
';
        $buffer .= $indent . '                                    <h1 class="h2 header-heading coursepage design-1 m-0">';
        $value = $this->resolveValue($context->find('coursefullname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h1>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="header-sub-section">
';
        $buffer .= $indent . '                            <div class="rating-instructor-wrapper">
';
        $value = $context->find('rnrdesign');
        $buffer .= $this->section8b200b93242e94bca6e655bcff399978($context, $indent, $value);
        $value = $context->find('teachers');
        $buffer .= $this->sectionD54c19bdd878169d40824ce85a8b295e($context, $indent, $value);
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="progress-resume-wrapper">
';
        $buffer .= $indent . '                                <div class="progressbar-text-wrapper">
';
        $buffer .= $indent . '                                    <div class="progress progress-rounded">
';
        $buffer .= $indent . '                                        <div class="progress-bar bg-green-600"
';
        $buffer .= $indent . '                                            style="width: ';
        $value = $this->resolveValue($context->find('percentage'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '%; height: 100%;" role="progressbar">
';
        $buffer .= $indent . '                                            <span class="sr-only">';
        $value = $this->resolveValue($context->find('percentage'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '% ';
        $value = $context->find('str');
        $buffer .= $this->section5b27c426f945a08deaa273fd578a4a7e($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <span>';
        $value = $this->resolveValue($context->find('percentage'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '% ';
        $value = $context->find('str');
        $buffer .= $this->section5b27c426f945a08deaa273fd578a4a7e($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                                </div>
';
        $value = $context->find('resumeactivityurl');
        $buffer .= $this->sectionA4fdf734ca12d14a0934cbbbcb8d276a($context, $indent, $value);
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '    </header>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('courseheaderdesign');
        $buffer .= $this->section9f8b7fcb8a311dba0c202cf60f383796($context, $indent, $value);

        return $buffer;
    }

    private function section8b200b93242e94bca6e655bcff399978(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="edw-ratings-wrapper">
                                    {{{rnrdesign}}}
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="edw-ratings-wrapper">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('rnrdesign'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f3680dc038cca5ab5e8f5c40901276a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ',&nbsp;';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ',&nbsp;';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section742f675d64dbd1d6051ff6fafafe5587(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!
                                        }}{{#hasanother}},&nbsp;{{/hasanother}}{{name}}{{!
                                        }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('hasanother');
                $buffer .= $this->section3f3680dc038cca5ab5e8f5c40901276a($context, $indent, $value);
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8dd1e66733f459c14e330ceb27d38aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <span class="stat">
                                        <b class="count"> +{{teachercount}}</b>
                                    </span>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <span class="stat">
';
                $buffer .= $indent . '                                        <b class="count"> +';
                $value = $this->resolveValue($context->find('teachercount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</b>
';
                $buffer .= $indent . '                                    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD54c19bdd878169d40824ce85a8b295e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="instructor-info stat-container">
                                    <span class="titles h-semibold-6">
                                        {{#instructors}}{{!
                                        }}{{#hasanother}},&nbsp;{{/hasanother}}{{name}}{{!
                                        }}{{/instructors}}
                                    </span>
                                    {{#teachercount}}
                                    <span class="stat">
                                        <b class="count"> +{{teachercount}}</b>
                                    </span>
                                    {{/teachercount}}
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="instructor-info stat-container">
';
                $buffer .= $indent . '                                    <span class="titles h-semibold-6">
';
                $buffer .= $indent . '                                        ';
                $value = $context->find('instructors');
                $buffer .= $this->section742f675d64dbd1d6051ff6fafafe5587($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    </span>
';
                $value = $context->find('teachercount');
                $buffer .= $this->sectionE8dd1e66733f459c14e330ceb27d38aa($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b27c426f945a08deaa273fd578a4a7e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' Complete, format_remuiformat ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' Complete, format_remuiformat ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b07f35cef02e4b80c9624f699e8b31f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' resumetoactivity, format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' resumetoactivity, format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4fdf734ca12d14a0934cbbbcb8d276a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a class="btn btn-primary btn-block bold" href="{{{ resumeactivityurl }}}"
                                    role="button">{{#str}} resumetoactivity, format_remuiformat{{/str}}</a>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <a class="btn btn-primary btn-block bold" href="';
                $value = $this->resolveValue($context->find('resumeactivityurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                    role="button">';
                $value = $context->find('str');
                $buffer .= $this->section8b07f35cef02e4b80c9624f699e8b31f($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section300e869cdaa98c178f7dad3372fcdef7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'format_remuiformat/headerreplaces\'], function(HEADERREPLACE) {
HEADERREPLACE.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'format_remuiformat/headerreplaces\'], function(HEADERREPLACE) {
';
                $buffer .= $indent . 'HEADERREPLACE.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f8b7fcb8a311dba0c202cf60f383796(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#js}}
require([\'format_remuiformat/headerreplaces\'], function(HEADERREPLACE) {
HEADERREPLACE.init();
});
{{/js}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('js');
                $buffer .= $this->section300e869cdaa98c178f7dad3372fcdef7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
