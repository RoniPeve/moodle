<?php

class __Mustache_e24e1b19a53ed8208b73b49b3d25723c extends Mustache_Template
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
        $buffer .= $this->sectionE4c6febd956201eeab469618553f6856($context, $indent, $value);
        $buffer .= $indent . '</li>
';

        return $buffer;
    }

    private function section5ce4a9607efa0df2fd913558fe4a7bee(Mustache_Context $context, $indent, $value)
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

    private function sectionC26ff05bc792d7561900c4de4b39d059(Mustache_Context $context, $indent, $value)
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
                $buffer .= $this->section5ce4a9607efa0df2fd913558fe4a7bee($context, $indent, $value);
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

    private function section7864ea09eb1cd1c42c0275b0baff6cbc(Mustache_Context $context, $indent, $value)
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

    private function sectionD0e2295a7cf635df8ce7b5e4262d4a17(Mustache_Context $context, $indent, $value)
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
                $buffer .= $this->section7864ea09eb1cd1c42c0275b0baff6cbc($context, $indent, $value);
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

    private function sectionE307b047a6d059891a99fd690ed44656(Mustache_Context $context, $indent, $value)
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

    private function section29aca435a512031981ae7708a979c2cc(Mustache_Context $context, $indent, $value)
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

    private function section3a10d094717e2cc2fc82ee2f7bb67963(Mustache_Context $context, $indent, $value)
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

    private function section050cf050cc6d90c4377e9c22b713429b(Mustache_Context $context, $indent, $value)
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
                $buffer .= $this->section3a10d094717e2cc2fc82ee2f7bb67963($context, $indent, $value);
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

    private function sectionEaaf422d19cf0a015803f0bcdddb892e(Mustache_Context $context, $indent, $value)
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
                $buffer .= $this->sectionE307b047a6d059891a99fd690ed44656($context, $indent, $value);
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
                $buffer .= $this->section29aca435a512031981ae7708a979c2cc($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="p-0">
';
                $value = $context->find('hasopenduedata');
                $buffer .= $this->section050cf050cc6d90c4377e9c22b713429b($context, $indent, $value);
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

    private function section554d405195d0e95946914c78bcce0b66(Mustache_Context $context, $indent, $value)
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
                $buffer .= $this->sectionEaaf422d19cf0a015803f0bcdddb892e($context, $indent, $value);
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

    private function sectionE4c6febd956201eeab469618553f6856(Mustache_Context $context, $indent, $value)
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
                $buffer .= $this->sectionC26ff05bc792d7561900c4de4b39d059($context, $indent, $value);
                $value = $context->find('courseinformationdata');
                $buffer .= $this->sectionD0e2295a7cf635df8ce7b5e4262d4a17($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $value = $context->find('activityexists');
                $buffer .= $this->section554d405195d0e95946914c78bcce0b66($context, $indent, $value);
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
