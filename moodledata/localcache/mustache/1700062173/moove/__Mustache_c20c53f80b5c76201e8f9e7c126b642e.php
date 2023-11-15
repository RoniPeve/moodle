<?php

class __Mustache_c20c53f80b5c76201e8f9e7c126b642e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('showgeneralsectionintrodata');
        if (empty($value)) {
            
            $value = $context->find('activityexists');
            if (empty($value)) {
                
                $buffer .= $indent . '<style>
';
                $buffer .= $indent . '    #page-course-view-remuiformat .courseindex-section:first-child {
';
                $buffer .= $indent . '        display: none !important;
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '</style>
';
            }
        }
        $buffer .= $indent . '
';
        $value = $context->find('activityexists');
        if (empty($value)) {
            
            $buffer .= $indent . '<style>
';
            $buffer .= $indent . '    #page-course-view-remuiformat .sections.generalsection-container{
';
            $buffer .= $indent . '        margin-bottom: 0px !important;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    #page-course-view-remuiformat  .section-details{
';
            $buffer .= $indent . '        margin-bottom: 24px;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '</style>
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<li id="section-';
        $value = $this->resolveValue($context->find('index'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="section border-0 col-12 p-0">
';
        $buffer .= $indent . '    <div class="general-section d-flex flex-column">
';
        if ($partial = $this->mustache->loadPartial('format_remuiformat/optional_secheader')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        <div class="d-none hidden course-prgress-container" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></div>
';
        $value = $context->find('showgeneralsection');
        $buffer .= $this->section4c7fe5f56d1297f68d07f9ea4996a64d($context, $indent, $value);
        $buffer .= $indent . '</li>
';

        return $buffer;
    }

    private function sectionD105b9fa0d0abb6cb1d761f4a31c0292(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{! <input type="checkbox" class="read-more-state" id="read-more-summary" /> }}
                    <div class="read-more-target coursesummary" style="-webkit-box-orient: vertical;">{{{fullsummary}}}
                    </div>
                    <a id="readmorebtn" class="d-none readbtn">Read More</a>
                    <a id="readlessbtn" class="d-none readbtn">Read Less</a>
                    {{! <label for="read-more-summary" class=" text-primary small read-more-trigger"></label> }}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="read-more-target coursesummary" style="-webkit-box-orient: vertical;">';
                $value = $this->resolveValue($context->find('fullsummary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <a id="readmorebtn" class="d-none readbtn">Read More</a>
';
                $buffer .= $indent . '                    <a id="readlessbtn" class="d-none readbtn">Read Less</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section68d7dcbe583899bd9f6be8ab30340e2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="generaldetails content d-flex flex-column">
                <h2 class="section-title pt-0 p-t-0 m-0">{{ title }}</h2>
                <div class=\'generalsectioninfo\'>
                    {{{availability}}}
                    {{#fullsummary}}
                    {{! <input type="checkbox" class="read-more-state" id="read-more-summary" /> }}
                    <div class="read-more-target coursesummary" style="-webkit-box-orient: vertical;">{{{fullsummary}}}
                    </div>
                    <a id="readmorebtn" class="d-none readbtn">Read More</a>
                    <a id="readlessbtn" class="d-none readbtn">Read Less</a>
                    {{! <label for="read-more-summary" class=" text-primary small read-more-trigger"></label> }}
                    {{/fullsummary}}
                </div>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="generaldetails content d-flex flex-column">
';
                $buffer .= $indent . '                <h2 class="section-title pt-0 p-t-0 m-0">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>
';
                $buffer .= $indent . '                <div class=\'generalsectioninfo\'>
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('availability'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $value = $context->find('fullsummary');
                $buffer .= $this->sectionD105b9fa0d0abb6cb1d761f4a31c0292($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa6992af583183afbd0aa5b83a63294f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'courseinformation,format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'courseinformation,format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section15f243357a9d4f8a01eb0b9d5d436420(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="item">{{ . }}</li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li class="item">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section313e7f44f8cef4efb1c3cecd2bff6384(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="coursedetails">
                <div class="details d-flex flex-column">
                    {{!> format_remuiformat/course_progress }}
                    <h3 class="m-0 activities-title">{{#str}}courseinformation,format_remuiformat{{/str}}</h3>
                    <ul class="section-activities-summary">
                        {{#activitylist}}
                        <li class="item">{{ . }}</li>
                        {{/activitylist}}
                    </ul>
                </div>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="coursedetails">
';
                $buffer .= $indent . '                <div class="details d-flex flex-column">
';
                $buffer .= $indent . '                    <h3 class="m-0 activities-title">';
                $value = $context->find('str');
                $buffer .= $this->sectionCa6992af583183afbd0aa5b83a63294f($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '                    <ul class="section-activities-summary">
';
                $value = $context->find('activitylist');
                $buffer .= $this->section15f243357a9d4f8a01eb0b9d5d436420($context, $indent, $value);
                $buffer .= $indent . '                    </ul>
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

    private function section064f86973ee67644bf308ef4ba88d88b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' generalactivities, format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' generalactivities, format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section628b559d56b1c907ba95534414ecdd27(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{{leftside}}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('leftside'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a071135502ba3f510046b2eb89448a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hiddenoncoursepage';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hiddenoncoursepage';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF46f5f409a94964bf4a1240db074ad63(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class=" d-flex align-items-center mt-2">
                                    <span
                                        class="badge badge-pill badge-warning">{{#str}}hiddenoncoursepage{{/str}}</span>
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class=" d-flex align-items-center mt-2">
';
                $buffer .= $indent . '                                    <span
';
                $buffer .= $indent . '                                        class="badge badge-pill badge-warning">';
                $value = $context->find('str');
                $buffer .= $this->section0a071135502ba3f510046b2eb89448a0($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section124a18d2ec853d6f7d09206031374b82(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div>
                                                <strong>{{label}}</strong> {{timestamp}}
                                            </div>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <div>
';
                $buffer .= $indent . '                                                <strong>';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</strong> ';
                $value = $this->resolveValue($context->find('timestamp'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section386f28e1c87591ef0cfe3e25294d014d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="description text-left">
                                    <div data-region="activity-dates" class="activity-dates small course-description-item">
                                        <div class="description-inner">
                                            {{#opendue}}
                                            <div>
                                                <strong>{{label}}</strong> {{timestamp}}
                                            </div>
                                            {{/opendue}}
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
                
                $buffer .= $indent . '                                <div class="description text-left">
';
                $buffer .= $indent . '                                    <div data-region="activity-dates" class="activity-dates small course-description-item">
';
                $buffer .= $indent . '                                        <div class="description-inner">
';
                $value = $context->find('opendue');
                $buffer .= $this->section124a18d2ec853d6f7d09206031374b82($context, $indent, $value);
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1db0a0b779d1b827dd65b9ab89650eb2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="activity d-flex flex-column justify-content-between  list-unstyled {{{modulename}}} modtype_{{{modulename}}}"
                    id="module-{{id}}">
                    <div class="generalsecactivitiescontent d-flex flex-column justify-content-between w-100 p-0 h-100">
                        {{#editing}}
                        {{{leftside}}}
                        {{/editing}}
                        {{! <div> }}
                            <div class="activityinstance p-0 m-0 d-flex h-100 flex-column justify-content-between">
                                <div class="title-activity-container text-break w-100 text-left ">
                                    {{{title}}}
                                </div>
                                <div class="contentafterlink">
                                    {{{summary}}}
                                </div>
                                <div data-region="sectionbadges" class="sectionbadges d-flex align-items-center mt-2">
                                    {{> core_courseformat/local/content/section/badges }}
                                </div>
                                {{#modstealth}}
                                <div class=" d-flex align-items-center mt-2">
                                    <span
                                        class="badge badge-pill badge-warning">{{#str}}hiddenoncoursepage{{/str}}</span>
                                </div>
                                {{/modstealth}}
                            </div>
                            <div class="p-0">
                                {{#hasopenduedata}}
                                <div class="description text-left">
                                    <div data-region="activity-dates" class="activity-dates small course-description-item">
                                        <div class="description-inner">
                                            {{#opendue}}
                                            <div>
                                                <strong>{{label}}</strong> {{timestamp}}
                                            </div>
                                            {{/opendue}}
                                        </div>
                                    </div>
                                </div>
                                {{/hasopenduedata}}
                                {{{availstatus}}}
                                <div class="actions">
                                    {{{completion}}}
                                </div>
                            </div>
                            {{!
                        </div> }}
                    </div>
                </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="activity d-flex flex-column justify-content-between  list-unstyled ';
                $value = $this->resolveValue($context->find('modulename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' modtype_';
                $value = $this->resolveValue($context->find('modulename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                    id="module-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="generalsecactivitiescontent d-flex flex-column justify-content-between w-100 p-0 h-100">
';
                $value = $context->find('editing');
                $buffer .= $this->section628b559d56b1c907ba95534414ecdd27($context, $indent, $value);
                $buffer .= $indent . '                            <div class="activityinstance p-0 m-0 d-flex h-100 flex-column justify-content-between">
';
                $buffer .= $indent . '                                <div class="title-activity-container text-break w-100 text-left ">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="contentafterlink">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div data-region="sectionbadges" class="sectionbadges d-flex align-items-center mt-2">
';
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/badges')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                    ');
                }
                $buffer .= $indent . '                                </div>
';
                $value = $context->find('modstealth');
                $buffer .= $this->sectionF46f5f409a94964bf4a1240db074ad63($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="p-0">
';
                $value = $context->find('hasopenduedata');
                $buffer .= $this->section386f28e1c87591ef0cfe3e25294d014d($context, $indent, $value);
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('availstatus'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                <div class="actions">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('completion'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section508b50485124c7478f7383e4f9620572(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="activities-wrapper d-flex flex-column">
            <h4 class="activitieshead m-0">{{#str}} generalactivities, format_remuiformat{{/str}}</h4>
            <ul class="general-section-activities justify-content-start text-center">
                {{#activities}}
                <li class="activity d-flex flex-column justify-content-between  list-unstyled {{{modulename}}} modtype_{{{modulename}}}"
                    id="module-{{id}}">
                    <div class="generalsecactivitiescontent d-flex flex-column justify-content-between w-100 p-0 h-100">
                        {{#editing}}
                        {{{leftside}}}
                        {{/editing}}
                        {{! <div> }}
                            <div class="activityinstance p-0 m-0 d-flex h-100 flex-column justify-content-between">
                                <div class="title-activity-container text-break w-100 text-left ">
                                    {{{title}}}
                                </div>
                                <div class="contentafterlink">
                                    {{{summary}}}
                                </div>
                                <div data-region="sectionbadges" class="sectionbadges d-flex align-items-center mt-2">
                                    {{> core_courseformat/local/content/section/badges }}
                                </div>
                                {{#modstealth}}
                                <div class=" d-flex align-items-center mt-2">
                                    <span
                                        class="badge badge-pill badge-warning">{{#str}}hiddenoncoursepage{{/str}}</span>
                                </div>
                                {{/modstealth}}
                            </div>
                            <div class="p-0">
                                {{#hasopenduedata}}
                                <div class="description text-left">
                                    <div data-region="activity-dates" class="activity-dates small course-description-item">
                                        <div class="description-inner">
                                            {{#opendue}}
                                            <div>
                                                <strong>{{label}}</strong> {{timestamp}}
                                            </div>
                                            {{/opendue}}
                                        </div>
                                    </div>
                                </div>
                                {{/hasopenduedata}}
                                {{{availstatus}}}
                                <div class="actions">
                                    {{{completion}}}
                                </div>
                            </div>
                            {{!
                        </div> }}
                    </div>
                </li>
                {{/activities}}
            </ul>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="activities-wrapper d-flex flex-column">
';
                $buffer .= $indent . '            <h4 class="activitieshead m-0">';
                $value = $context->find('str');
                $buffer .= $this->section064f86973ee67644bf308ef4ba88d88b($context, $indent, $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '            <ul class="general-section-activities justify-content-start text-center">
';
                $value = $context->find('activities');
                $buffer .= $this->section1db0a0b779d1b827dd65b9ab89650eb2($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e24cb5c6419d434fc1da250ad013681(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showmore, format_remuiformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showmore, format_remuiformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c7fe5f56d1297f68d07f9ea4996a64d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="section-details">
            {{#showgeneralsectionintrodata}}
            <div class="generaldetails content d-flex flex-column">
                <h2 class="section-title pt-0 p-t-0 m-0">{{ title }}</h2>
                <div class=\'generalsectioninfo\'>
                    {{{availability}}}
                    {{#fullsummary}}
                    {{! <input type="checkbox" class="read-more-state" id="read-more-summary" /> }}
                    <div class="read-more-target coursesummary" style="-webkit-box-orient: vertical;">{{{fullsummary}}}
                    </div>
                    <a id="readmorebtn" class="d-none readbtn">Read More</a>
                    <a id="readlessbtn" class="d-none readbtn">Read Less</a>
                    {{! <label for="read-more-summary" class=" text-primary small read-more-trigger"></label> }}
                    {{/fullsummary}}
                </div>
            </div>
            {{/showgeneralsectionintrodata}}
            {{#courseinformationdata}}
            <div class="coursedetails">
                <div class="details d-flex flex-column">
                    {{!> format_remuiformat/course_progress }}
                    <h3 class="m-0 activities-title">{{#str}}courseinformation,format_remuiformat{{/str}}</h3>
                    <ul class="section-activities-summary">
                        {{#activitylist}}
                        <li class="item">{{ . }}</li>
                        {{/activitylist}}
                    </ul>
                </div>
            </div>
            {{/courseinformationdata}}
        </div>
        {{#activityexists}}
        <div class="activities-wrapper d-flex flex-column">
            <h4 class="activitieshead m-0">{{#str}} generalactivities, format_remuiformat{{/str}}</h4>
            <ul class="general-section-activities justify-content-start text-center">
                {{#activities}}
                <li class="activity d-flex flex-column justify-content-between  list-unstyled {{{modulename}}} modtype_{{{modulename}}}"
                    id="module-{{id}}">
                    <div class="generalsecactivitiescontent d-flex flex-column justify-content-between w-100 p-0 h-100">
                        {{#editing}}
                        {{{leftside}}}
                        {{/editing}}
                        {{! <div> }}
                            <div class="activityinstance p-0 m-0 d-flex h-100 flex-column justify-content-between">
                                <div class="title-activity-container text-break w-100 text-left ">
                                    {{{title}}}
                                </div>
                                <div class="contentafterlink">
                                    {{{summary}}}
                                </div>
                                <div data-region="sectionbadges" class="sectionbadges d-flex align-items-center mt-2">
                                    {{> core_courseformat/local/content/section/badges }}
                                </div>
                                {{#modstealth}}
                                <div class=" d-flex align-items-center mt-2">
                                    <span
                                        class="badge badge-pill badge-warning">{{#str}}hiddenoncoursepage{{/str}}</span>
                                </div>
                                {{/modstealth}}
                            </div>
                            <div class="p-0">
                                {{#hasopenduedata}}
                                <div class="description text-left">
                                    <div data-region="activity-dates" class="activity-dates small course-description-item">
                                        <div class="description-inner">
                                            {{#opendue}}
                                            <div>
                                                <strong>{{label}}</strong> {{timestamp}}
                                            </div>
                                            {{/opendue}}
                                        </div>
                                    </div>
                                </div>
                                {{/hasopenduedata}}
                                {{{availstatus}}}
                                <div class="actions">
                                    {{{completion}}}
                                </div>
                            </div>
                            {{!
                        </div> }}
                    </div>
                </li>
                {{/activities}}
            </ul>
        </div>
        {{/activityexists}}
        <div class="text-center showactivitywrapper">
            <span class="showactivity text-primary show">
                {{#str}}showmore, format_remuiformat{{/str}}
            </span>
        </div>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="section-details">
';
                $value = $context->find('showgeneralsectionintrodata');
                $buffer .= $this->section68d7dcbe583899bd9f6be8ab30340e2f($context, $indent, $value);
                $value = $context->find('courseinformationdata');
                $buffer .= $this->section313e7f44f8cef4efb1c3cecd2bff6384($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $value = $context->find('activityexists');
                $buffer .= $this->section508b50485124c7478f7383e4f9620572($context, $indent, $value);
                $buffer .= $indent . '        <div class="text-center showactivitywrapper">
';
                $buffer .= $indent . '            <span class="showactivity text-primary show">
';
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->section4e24cb5c6419d434fc1da250ad013681($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
