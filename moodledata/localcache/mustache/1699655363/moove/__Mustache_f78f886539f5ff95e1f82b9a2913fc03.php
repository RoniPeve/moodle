<?php

class __Mustache_f78f886539f5ff95e1f82b9a2913fc03 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<li id="section-';
        $value = $this->resolveValue($context->find('index'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="border-0 section main cards col-lg-12 col-sm-12 p-0">
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
        $buffer .= $indent . '        <div class="section-details">
';
        $buffer .= $indent . '            <div class="generaldetails content">
';
        $buffer .= $indent . '                <div class="left side">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('leftsection'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="right side">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('optionmenu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="generaldetails content d-flex flex-column"></div>
';
        $buffer .= $indent . '                <h2 class="section-title pt-0 p-t-0 m-0">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : $value);
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
        $buffer .= $indent . '                    <a class="text-muted" href="';
        $value = $this->resolveValue($context->find('editsetionurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"><span><i class="fa fa-cog font-size-20"
';
        $buffer .= $indent . '                                aria-hidden="true"></i></span></a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
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
        $buffer .= $indent . '        </div>
';
        $value = $context->find('activityexists');
        $buffer .= $this->section6c1752d4cb877f59f6bfe94bfcb18733($context, $indent, $value);
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
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('addnewactivity'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
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

    private function section2f2d0dd50f47ff116e731c3cedcc2d95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' moveresource, format_remuiformat ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' moveresource, format_remuiformat ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAcc250e296909543b31821a94c970212(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/move_2d,core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/move_2d,core ';
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

    private function section1de1066d37566667409d169f1195ae37(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="mt-2 d-flex align-items-center">
                                <span class="badge badge-pill badge-warning">{{#str}}hiddenoncoursepage{{/str}}</span>
                            </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="mt-2 d-flex align-items-center">
';
                $buffer .= $indent . '                                <span class="badge badge-pill badge-warning">';
                $value = $context->find('str');
                $buffer .= $this->section0a071135502ba3f510046b2eb89448a0($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section42b290374a1444a56d2eb1d528464d7b(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                                        <div>
';
                $buffer .= $indent . '                                            <strong>';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</strong> ';
                $value = $this->resolveValue($context->find('timestamp'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33912a32935229752c1db1654c33f2a9(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                            <div class="description text-left">
';
                $buffer .= $indent . '                                <div data-region="activity-dates" class="activity-dates small course-description-item">
';
                $buffer .= $indent . '                                    <div class="description-inner">
';
                $value = $context->find('opendue');
                $buffer .= $this->section42b290374a1444a56d2eb1d528464d7b($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF02718092c0026be235ddfe5d43783b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="activity {{{modulename}}} modtype_{{{modulename}}} d-flex flex-column justify-content-between  list-unstyled yui3-dd-drop"
                        id="module-{{id}}" data-draggroups="resource">

                        <div class="activityinstance p-0 m-0 d-flex h-100 flex-column justify-content-between">
                            <div class="title-activity-container text-break w-100 text-left ">
                                {{{title}}}
                            </div>
                            <span class=""><span class="editing_move moodle-core-dragdrop-draghandle"
                                    title="{{#str}} moveresource, format_remuiformat {{/str}}" tabindex="0"
                                    data-draggroups="resource" role="button" data-sectionreturn="0"
                                    style="cursor: move;">{{#pix}} i/move_2d,core {{/pix}}</span></span>
                            <div data-region="sectionbadges" class="sectionbadges d-flex align-items-center mt-2">
                                {{> core_courseformat/local/content/section/badges }}
                            </div>
                            {{#modstealth}}
                            <div class="mt-2 d-flex align-items-center">
                                <span class="badge badge-pill badge-warning">{{#str}}hiddenoncoursepage{{/str}}</span>
                            </div>
                            {{/modstealth}}
                            <div class="contentafterlink">
                                {{{summary}}}
                            </div>
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
                                {{{modicons}}}
                            </div>
                        </div>

                    </li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li class="activity ';
                $value = $this->resolveValue($context->find('modulename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' modtype_';
                $value = $this->resolveValue($context->find('modulename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' d-flex flex-column justify-content-between  list-unstyled yui3-dd-drop"
';
                $buffer .= $indent . '                        id="module-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-draggroups="resource">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                        <div class="activityinstance p-0 m-0 d-flex h-100 flex-column justify-content-between">
';
                $buffer .= $indent . '                            <div class="title-activity-container text-break w-100 text-left ">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <span class=""><span class="editing_move moodle-core-dragdrop-draghandle"
';
                $buffer .= $indent . '                                    title="';
                $value = $context->find('str');
                $buffer .= $this->section2f2d0dd50f47ff116e731c3cedcc2d95($context, $indent, $value);
                $buffer .= '" tabindex="0"
';
                $buffer .= $indent . '                                    data-draggroups="resource" role="button" data-sectionreturn="0"
';
                $buffer .= $indent . '                                    style="cursor: move;">';
                $value = $context->find('pix');
                $buffer .= $this->sectionAcc250e296909543b31821a94c970212($context, $indent, $value);
                $buffer .= '</span></span>
';
                $buffer .= $indent . '                            <div data-region="sectionbadges" class="sectionbadges d-flex align-items-center mt-2">
';
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/badges')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                ');
                }
                $buffer .= $indent . '                            </div>
';
                $value = $context->find('modstealth');
                $buffer .= $this->section1de1066d37566667409d169f1195ae37($context, $indent, $value);
                $buffer .= $indent . '                            <div class="contentafterlink">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="p-0">
';
                $value = $context->find('hasopenduedata');
                $buffer .= $this->section33912a32935229752c1db1654c33f2a9($context, $indent, $value);
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('availstatus'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            <div class="actions">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('completion'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('modicons'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c1752d4cb877f59f6bfe94bfcb18733(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="activities-wrapper d-flex flex-column">
            <h4 class="activitieshead m-0">{{#str}} generalactivities, format_remuiformat{{/str}}</h4>
            <div class="content">
                <div class="summary"></div>
                <ul class="img-text section general-section-activities  text-center yui3-dd-drop"
                    data-draggroups="resource">
                    {{#activities}}
                    <li class="activity {{{modulename}}} modtype_{{{modulename}}} d-flex flex-column justify-content-between  list-unstyled yui3-dd-drop"
                        id="module-{{id}}" data-draggroups="resource">

                        <div class="activityinstance p-0 m-0 d-flex h-100 flex-column justify-content-between">
                            <div class="title-activity-container text-break w-100 text-left ">
                                {{{title}}}
                            </div>
                            <span class=""><span class="editing_move moodle-core-dragdrop-draghandle"
                                    title="{{#str}} moveresource, format_remuiformat {{/str}}" tabindex="0"
                                    data-draggroups="resource" role="button" data-sectionreturn="0"
                                    style="cursor: move;">{{#pix}} i/move_2d,core {{/pix}}</span></span>
                            <div data-region="sectionbadges" class="sectionbadges d-flex align-items-center mt-2">
                                {{> core_courseformat/local/content/section/badges }}
                            </div>
                            {{#modstealth}}
                            <div class="mt-2 d-flex align-items-center">
                                <span class="badge badge-pill badge-warning">{{#str}}hiddenoncoursepage{{/str}}</span>
                            </div>
                            {{/modstealth}}
                            <div class="contentafterlink">
                                {{{summary}}}
                            </div>
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
                                {{{modicons}}}
                            </div>
                        </div>

                    </li>
                    {{/activities}}
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
                
                $buffer .= $indent . '        <div class="activities-wrapper d-flex flex-column">
';
                $buffer .= $indent . '            <h4 class="activitieshead m-0">';
                $value = $context->find('str');
                $buffer .= $this->section064f86973ee67644bf308ef4ba88d88b($context, $indent, $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '            <div class="content">
';
                $buffer .= $indent . '                <div class="summary"></div>
';
                $buffer .= $indent . '                <ul class="img-text section general-section-activities  text-center yui3-dd-drop"
';
                $buffer .= $indent . '                    data-draggroups="resource">
';
                $value = $context->find('activities');
                $buffer .= $this->sectionF02718092c0026be235ddfe5d43783b3($context, $indent, $value);
                $buffer .= $indent . '                </ul>
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

}
