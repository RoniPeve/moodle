<?php

class __Mustache_c24e2888598364557a005afef1be95d5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="coursecompetenciespage">
';
        $buffer .= $indent . '    <div data-region="actions" class="clearfix">
';
        $buffer .= $indent . '        <div class="float-sm-left">
';
        $value = $context->find('canmanagecoursecompetencies');
        $buffer .= $this->section84c9003b32f4afd77ce99de084d37a2c($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div data-region="configurecoursecompetencies">
';
        $value = $context->find('cangradecompetencies');
        $buffer .= $this->section0574bf43fcbc15c00f3459af47bc5f50($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $value = $context->find('statistics');
        $buffer .= $this->section03300580e671a760d4537357ce201d5d($context, $indent, $value);
        $buffer .= $indent . '<div data-region="coursecompetencies">
';
        $buffer .= $indent . '<table class="generaltable fullwidth managecompetencies">
';
        $buffer .= $indent . '<tbody class="drag-parentnode">
';
        $value = $context->find('competencies');
        $buffer .= $this->section2aa24a0db278b05115b482763d4847c9($context, $indent, $value);
        $buffer .= $indent . '</tbody>
';
        $buffer .= $indent . '</table>
';
        $value = $context->find('competencies');
        if (empty($value)) {
            
            $buffer .= $indent . '<p class="alert alert-info">
';
            $value = $context->find('moduleid');
            $buffer .= $this->sectionA5c5b3604da57461215aa0ce10b7b48a($context, $indent, $value);
            $value = $context->find('moduleid');
            if (empty($value)) {
                
                $buffer .= $indent . '        ';
                $value = $context->find('str');
                $buffer .= $this->section03e850bca9d66bc415422912b5bd6e07($context, $indent, $value);
                $buffer .= '
';
            }
            $buffer .= $indent . '</p>
';
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div data-region="actions">
';
        $value = $context->find('canmanagecompetencyframeworks');
        $buffer .= $this->section0f41fa28f0d2e17e8f4aa187e4a7a7bf($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section02d7b611a81bb109313c3e1f8a20a4d0($context, $indent, $value);
        $value = $context->find('canconfigurecoursecompetencies');
        $buffer .= $this->section5d73df88b40aba583a3268a6f15358b7($context, $indent, $value);

        return $buffer;
    }

    private function section8e1a2521a451eb6a7b8b5f0ae4b72269(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addcoursecompetencies, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addcoursecompetencies, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84c9003b32f4afd77ce99de084d37a2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <button class="btn btn-secondary" disabled>{{#str}}addcoursecompetencies, tool_lp{{/str}}</button>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <button class="btn btn-secondary" disabled>';
                $value = $context->find('str');
                $buffer .= $this->section8e1a2521a451eb6a7b8b5f0ae4b72269($context, $indent, $value);
                $buffer .= '</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0ed9b535ed171b00353f97e30f4d0eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'coursecompetencyratingsarepushedtouserplans, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'coursecompetencyratingsarepushedtouserplans, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA69c55e0068f89e47921d2ecc0d76732(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#str}}coursecompetencyratingsarepushedtouserplans, tool_lp{{/str}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->sectionA0ed9b535ed171b00353f97e30f4d0eb($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7728dc32f135d1e2924b0746299af745(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'coursecompetencyratingsarenotpushedtouserplans, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'coursecompetencyratingsarenotpushedtouserplans, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd3b4bf865abc6ce6b96cc2301a00c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc1d4f1bf432cd9124ae3a835133dcf6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/edit, core, {{#str}}edit{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/edit, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section589ceedee626f1165c6c2a9a36c905a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="#"
               data-action="configure-course-competency-settings"
               data-courseid="{{courseid}}"
               data-pushratingstouserplans="{{settings.pushratingstouserplans}}">
                {{#pix}}t/edit, core, {{#str}}edit{{/str}}{{/pix}}
            </a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="#"
';
                $buffer .= $indent . '               data-action="configure-course-competency-settings"
';
                $buffer .= $indent . '               data-courseid="';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '               data-pushratingstouserplans="';
                $value = $this->resolveValue($context->findDot('settings.pushratingstouserplans'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $context->find('pix');
                $buffer .= $this->sectionFc1d4f1bf432cd9124ae3a835133dcf6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0574bf43fcbc15c00f3459af47bc5f50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <p class="alert {{^settings.pushratingstouserplans}}alert-info{{/settings.pushratingstouserplans}}">
        {{#settings.pushratingstouserplans}}
            {{#str}}coursecompetencyratingsarepushedtouserplans, tool_lp{{/str}}
        {{/settings.pushratingstouserplans}}
        {{^settings.pushratingstouserplans}}
            {{#str}}coursecompetencyratingsarenotpushedtouserplans, tool_lp{{/str}}
        {{/settings.pushratingstouserplans}}
        {{#canconfigurecoursecompetencies}}
            <a href="#"
               data-action="configure-course-competency-settings"
               data-courseid="{{courseid}}"
               data-pushratingstouserplans="{{settings.pushratingstouserplans}}">
                {{#pix}}t/edit, core, {{#str}}edit{{/str}}{{/pix}}
            </a>
        {{/canconfigurecoursecompetencies}}
        </p>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <p class="alert ';
                $value = $context->findDot('settings.pushratingstouserplans');
                if (empty($value)) {
                    
                    $buffer .= 'alert-info';
                }
                $buffer .= '">
';
                $value = $context->findDot('settings.pushratingstouserplans');
                $buffer .= $this->sectionA69c55e0068f89e47921d2ecc0d76732($context, $indent, $value);
                $value = $context->findDot('settings.pushratingstouserplans');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            ';
                    $value = $context->find('str');
                    $buffer .= $this->section7728dc32f135d1e2924b0746299af745($context, $indent, $value);
                    $buffer .= '
';
                }
                $value = $context->find('canconfigurecoursecompetencies');
                $buffer .= $this->section589ceedee626f1165c6c2a9a36c905a1($context, $indent, $value);
                $buffer .= $indent . '        </p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03300580e671a760d4537357ce201d5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{> tool_lp/course_competency_statistics }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('tool_lp/course_competency_statistics')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f92e409dad2d31675245b12b8825d4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'delete';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'delete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1245898a9c4802f609e8da4fe72227c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/delete, core, {{#str}}delete{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/delete, core, ';
                $value = $context->find('str');
                $buffer .= $this->section8f92e409dad2d31675245b12b8825d4e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50650bf975cfcce069f167741e253576(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="drag-handlecontainer float-sm-left"></span>
        <div class="float-sm-right">
            <a href="#" data-action="delete-competency-link" data-id="{{competency.id}}">
                {{#pix}}t/delete, core, {{#str}}delete{{/str}}{{/pix}}
            </a>
        </div>
        <div class="clearfix"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span class="drag-handlecontainer float-sm-left"></span>
';
                $buffer .= $indent . '        <div class="float-sm-right">
';
                $buffer .= $indent . '            <a href="#" data-action="delete-competency-link" data-id="';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $context->find('pix');
                $buffer .= $this->section1245898a9c4802f609e8da4fe72227c2($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="clearfix"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6d7bcd5d66932580fec7960232c9fc4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'viewdetails, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'viewdetails, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section891bd9a9208f3ae9d6a7ff107413ac26(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{pluginbaseurl}}/user_competency_in_course.php?courseid={{courseid}}&competencyid={{competency.id}}&userid={{gradableuserid}}"
                   id="competency-info-link-{{competency.id}}"
                   title="{{#str}}viewdetails, tool_lp{{/str}}">
                <p><strong>{{{competency.shortname}}} <em>{{competency.idnumber}}</em></strong></p>
            </a>
            <p>{{{competency.description}}}</p>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/user_competency_in_course.php?courseid=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&competencyid=';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&userid=';
                $value = $this->resolveValue($context->find('gradableuserid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                   id="competency-info-link-';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                   title="';
                $value = $context->find('str');
                $buffer .= $this->sectionD6d7bcd5d66932580fec7960232c9fc4($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <p><strong>';
                $value = $this->resolveValue($context->findDot('competency.shortname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' <em>';
                $value = $this->resolveValue($context->findDot('competency.idnumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</em></strong></p>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '            <p>';
                $value = $this->resolveValue($context->findDot('competency.description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5db15ba4d8fa7764751fbbe00561fbe0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'path, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'path, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21de041fccc0ef168228caaef8bda76c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="float-sm-left">{{#str}}path, tool_lp{{/str}}&nbsp;</span>{{> tool_lp/competency_path }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <span class="float-sm-left">';
                $value = $context->find('str');
                $buffer .= $this->section5db15ba4d8fa7764751fbbe00561fbe0($context, $indent, $value);
                $buffer .= '&nbsp;</span>';
                if ($partial = $this->mustache->loadPartial('tool_lp/competency_path')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBcd8df39475c954582aec8b93a5f17d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'badge-success';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'badge-success';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a83864a0cea3eee2aeb62895084768c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="badge {{#proficiency}}badge-success{{/proficiency}}{{^proficiency}}badge-danger{{/proficiency}}">{{gradename}}</span>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <span class="badge ';
                $value = $context->find('proficiency');
                $buffer .= $this->sectionBcd8df39475c954582aec8b93a5f17d5($context, $indent, $value);
                $value = $context->find('proficiency');
                if (empty($value)) {
                    
                    $buffer .= 'badge-danger';
                }
                $buffer .= '">';
                $value = $this->resolveValue($context->find('gradename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24c544b7c11a5d88afd58e2035fdd4d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#grade}}
            <span class="badge {{#proficiency}}badge-success{{/proficiency}}{{^proficiency}}badge-danger{{/proficiency}}">{{gradename}}</span>
            {{/grade}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('grade');
                $buffer .= $this->section7a83864a0cea3eee2aeb62895084768c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c0c437015e88b1da78736264f954838(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'uponcoursecompletion, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'uponcoursecompletion, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e2875c627d2dbad7c957250bbb623f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section494e5c88d5487daa9e455eab6cda5374(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                     <option value="{{value}}" {{#selected}}selected{{/selected}}>{{text}}</option>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                     <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('selected');
                $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section155a8d15f97225bc8c150f6a828935c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div data-region="coursecompetency-ruleoutcome">
            <label>
                {{#str}}uponcoursecompletion, tool_lp{{/str}}
                <select data-field="ruleoutcome" data-id="{{coursecompetency.id}}" class="custom-select">
                  {{#ruleoutcomeoptions}}
                     <option value="{{value}}" {{#selected}}selected{{/selected}}>{{text}}</option>
                  {{/ruleoutcomeoptions}}
                </select>
            </label>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div data-region="coursecompetency-ruleoutcome">
';
                $buffer .= $indent . '            <label>
';
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->section5c0c437015e88b1da78736264f954838($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                <select data-field="ruleoutcome" data-id="';
                $value = $this->resolveValue($context->findDot('coursecompetency.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="custom-select">
';
                $value = $context->find('ruleoutcomeoptions');
                $buffer .= $this->section494e5c88d5487daa9e455eab6cda5374($context, $indent, $value);
                $buffer .= $indent . '                </select>
';
                $buffer .= $indent . '            </label>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24a67fa020473241f6bf9a69b69d7be2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'activities';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'activities';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90cc319b84645771eda44a9b1e28733d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="list-inline-item"><a href="{{url}}"><img src="{{iconurl}}"> {{name}} </a></li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li class="list-inline-item"><a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"> ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' </a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa4a803c089c26a0a2019bf1954e8a7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'noactivities, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'noactivities, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a1322c6565f41374b0000292a58679d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'userplans, core_competency';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'userplans, core_competency';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section020d056b5502dbee951846d43cb15d8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="list-inline-item"><a href="{{pluginbaseurl}}/plan.php?id={{id}}">{{{name}}}</a></li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li class="list-inline-item"><a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/plan.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE284c88c7c4e1ebb61be5d7e54215ba3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nouserplanswithcompetency, core_competency';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nouserplanswithcompetency, core_competency';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2aa24a0db278b05115b482763d4847c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <tr class="drag-samenode" data-id="{{competency.id}}">
    <td>
        {{#canmanagecoursecompetencies}}
        <span class="drag-handlecontainer float-sm-left"></span>
        <div class="float-sm-right">
            <a href="#" data-action="delete-competency-link" data-id="{{competency.id}}">
                {{#pix}}t/delete, core, {{#str}}delete{{/str}}{{/pix}}
            </a>
        </div>
        <div class="clearfix"></div>
        {{/canmanagecoursecompetencies}}
        {{#competency}}
            <a href="{{pluginbaseurl}}/user_competency_in_course.php?courseid={{courseid}}&competencyid={{competency.id}}&userid={{gradableuserid}}"
                   id="competency-info-link-{{competency.id}}"
                   title="{{#str}}viewdetails, tool_lp{{/str}}">
                <p><strong>{{{competency.shortname}}} <em>{{competency.idnumber}}</em></strong></p>
            </a>
            <p>{{{competency.description}}}</p>
        {{/competency}}
        {{#comppath}}
            <span class="float-sm-left">{{#str}}path, tool_lp{{/str}}&nbsp;</span>{{> tool_lp/competency_path }}
        {{/comppath}}
        {{#usercompetencycourse}}
            {{#grade}}
            <span class="badge {{#proficiency}}badge-success{{/proficiency}}{{^proficiency}}badge-danger{{/proficiency}}">{{gradename}}</span>
            {{/grade}}
        {{/usercompetencycourse}}
        {{#canmanagecoursecompetencies}}
        <div data-region="coursecompetency-ruleoutcome">
            <label>
                {{#str}}uponcoursecompletion, tool_lp{{/str}}
                <select data-field="ruleoutcome" data-id="{{coursecompetency.id}}" class="custom-select">
                  {{#ruleoutcomeoptions}}
                     <option value="{{value}}" {{#selected}}selected{{/selected}}>{{text}}</option>
                  {{/ruleoutcomeoptions}}
                </select>
            </label>
        </div>
        {{/canmanagecoursecompetencies}}
        <div data-region="coursecompetencyactivities">
        <p>
        <strong>{{#str}}activities{{/str}}</strong>
        <ul class="inline list-inline p-2">
        {{#coursemodules}}
            <li class="list-inline-item"><a href="{{url}}"><img src="{{iconurl}}"> {{name}} </a></li>
        {{/coursemodules}}
        {{^coursemodules}}
            <li class="list-inline-item">{{#str}}noactivities, tool_lp{{/str}}</li>
        {{/coursemodules}}
        </ul>
        </p>
        </div>
        <div data-region="learningplans">
        <p>
        <strong>{{#str}}userplans, core_competency{{/str}}</strong>
        <ul class="inline list-inline p-2">
        {{#plans}}
            <li class="list-inline-item"><a href="{{pluginbaseurl}}/plan.php?id={{id}}">{{{name}}}</a></li>
        {{/plans}}
        {{^plans}}
            <li class="list-inline-item">{{#str}}nouserplanswithcompetency, core_competency{{/str}}</li>
        {{/plans}}
        </ul>
        </p>
        </div>
    </td>
    </tr>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <tr class="drag-samenode" data-id="';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '    <td>
';
                $value = $context->find('canmanagecoursecompetencies');
                $buffer .= $this->section50650bf975cfcce069f167741e253576($context, $indent, $value);
                $value = $context->find('competency');
                $buffer .= $this->section891bd9a9208f3ae9d6a7ff107413ac26($context, $indent, $value);
                $value = $context->find('comppath');
                $buffer .= $this->section21de041fccc0ef168228caaef8bda76c($context, $indent, $value);
                $value = $context->find('usercompetencycourse');
                $buffer .= $this->section24c544b7c11a5d88afd58e2035fdd4d8($context, $indent, $value);
                $value = $context->find('canmanagecoursecompetencies');
                $buffer .= $this->section155a8d15f97225bc8c150f6a828935c7($context, $indent, $value);
                $buffer .= $indent . '        <div data-region="coursecompetencyactivities">
';
                $buffer .= $indent . '        <p>
';
                $buffer .= $indent . '        <strong>';
                $value = $context->find('str');
                $buffer .= $this->section24a67fa020473241f6bf9a69b69d7be2($context, $indent, $value);
                $buffer .= '</strong>
';
                $buffer .= $indent . '        <ul class="inline list-inline p-2">
';
                $value = $context->find('coursemodules');
                $buffer .= $this->section90cc319b84645771eda44a9b1e28733d($context, $indent, $value);
                $value = $context->find('coursemodules');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <li class="list-inline-item">';
                    $value = $context->find('str');
                    $buffer .= $this->sectionFa4a803c089c26a0a2019bf1954e8a7d($context, $indent, $value);
                    $buffer .= '</li>
';
                }
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '        </p>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div data-region="learningplans">
';
                $buffer .= $indent . '        <p>
';
                $buffer .= $indent . '        <strong>';
                $value = $context->find('str');
                $buffer .= $this->section6a1322c6565f41374b0000292a58679d($context, $indent, $value);
                $buffer .= '</strong>
';
                $buffer .= $indent . '        <ul class="inline list-inline p-2">
';
                $value = $context->find('plans');
                $buffer .= $this->section020d056b5502dbee951846d43cb15d8b($context, $indent, $value);
                $value = $context->find('plans');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <li class="list-inline-item">';
                    $value = $context->find('str');
                    $buffer .= $this->sectionE284c88c7c4e1ebb61be5d7e54215ba3($context, $indent, $value);
                    $buffer .= '</li>
';
                }
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '        </p>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </td>
';
                $buffer .= $indent . '    </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82d921192368247c8321959f9fbbe9c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nocompetenciesinactivity, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nocompetenciesinactivity, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA5c5b3604da57461215aa0ce10b7b48a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#str}}nocompetenciesinactivity, tool_lp{{/str}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                $value = $context->find('str');
                $buffer .= $this->section82d921192368247c8321959f9fbbe9c4($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03e850bca9d66bc415422912b5bd6e07(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nocompetenciesincourse, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nocompetenciesincourse, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section162358c28b46626a5b0ef954763a36a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'managecompetenciesandframeworks, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'managecompetenciesandframeworks, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f41fa28f0d2e17e8f4aa187e4a7a7bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <p><a href="{{manageurl}}">{{#str}}managecompetenciesandframeworks, tool_lp{{/str}}</a></p>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <p><a href="';
                $value = $this->resolveValue($context->find('manageurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section162358c28b46626a5b0ef954763a36a3($context, $indent, $value);
                $buffer .= '</a></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02d7b611a81bb109313c3e1f8a20a4d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'tool_lp/competencies\'], function(mod) {
    (new mod({{courseid}}, \'course\', {{pagecontextid}}));
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'tool_lp/competencies\'], function(mod) {
';
                $buffer .= $indent . '    (new mod(';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', \'course\', ';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '));
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f790e195879377b2a7eed60c67ce81c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'tool_lp/course_competency_settings\'], function(Mod) {
    (new Mod(\'[data-action=configure-course-competency-settings]\'));
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'tool_lp/course_competency_settings\'], function(Mod) {
';
                $buffer .= $indent . '    (new Mod(\'[data-action=configure-course-competency-settings]\'));
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d73df88b40aba583a3268a6f15358b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#js}}
require([\'tool_lp/course_competency_settings\'], function(Mod) {
    (new Mod(\'[data-action=configure-course-competency-settings]\'));
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
                $buffer .= $this->section3f790e195879377b2a7eed60c67ce81c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
