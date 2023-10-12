<?php

class __Mustache_d276a82c46ceac74ca4a0e33b1f38431 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="action-menu moodle-actionmenu grader" data-collapse="menu">
';
        $buffer .= $indent . '    <div class="dropdown">
';
        $buffer .= $indent . '        <button class="btn btn-link btn-icon icon-size-3 cellmenubtn"
';
        $buffer .= $indent . '            type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
';
        $buffer .= $indent . '                ';
        $value = $context->find('databoundary');
        $buffer .= $this->section44c341382fe18c98835bf913466dd3da($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $context->find('datatype');
        $buffer .= $this->section615f18789cc71c7fd7877bc8db31dd15($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $context->find('dataid');
        $buffer .= $this->sectionD5482e91d7f357f19059e62f17058488($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '            <i class="icon fa fa-ellipsis-h fa-fw m-0" title="';
        $value = $context->find('str');
        $buffer .= $this->sectionCe088126c3019e8ebc5101a0df6a8464($context, $indent, $value);
        $buffer .= '" aria-hidden="true"></i>
';
        $buffer .= $indent . '            <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionCe088126c3019e8ebc5101a0df6a8464($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div role="menu" class="dropdown-menu">
';
        $buffer .= $indent . '            ';
        $value = $context->find('editurl');
        $buffer .= $this->section544e94469c68846113a04f12534c2efb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('editcalculationurl');
        $buffer .= $this->section1f18a1ed9e9f4d486635157e24f3837c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('reporturl0');
        $buffer .= $this->section0786a507535f667a9cf18d7bf014d569($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('reporturl1');
        $buffer .= $this->sectionB4b505f8b5d40402ef730d8bafe453a0($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('advancedgradingurl');
        $buffer .= $this->section1204f4a1ef214912e1efa7db99093081($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('gradesonlyurl');
        $buffer .= $this->section42bc80e6ab2d630f3a84a4157b33eaa8($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('aggregatesonlyurl');
        $buffer .= $this->sectionD19a549dd2ccd5ea8c3ea914625df976($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('fullmodeurl');
        $buffer .= $this->sectionAe8d099817b0f599e6c5737df4c756c2($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('deleteurl');
        $buffer .= $this->section05ec65ad2cae47cec34f2079422abff7($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('duplicateurl');
        $buffer .= $this->section9ed35798485616c7ed0634673698bfa5($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('gradeanalysisurl');
        $buffer .= $this->section623cdd682c2279696d671275090a63db($context, $indent, $value);
        $buffer .= '
';
        $value = $context->find('divider1');
        $buffer .= $this->section846b058bdc44165960ee9449f3c9f31d($context, $indent, $value);
        $value = $context->find('ascendingfirstnameurl');
        $buffer .= $this->section10a576038d0e112c68161da35fbba2c3($context, $indent, $value);
        $value = $context->find('ascendingurl');
        $buffer .= $this->sectionF1cce50c49b1a7733dff7e8273ddae4c($context, $indent, $value);
        $value = $context->find('divider2');
        $buffer .= $this->section846b058bdc44165960ee9449f3c9f31d($context, $indent, $value);
        $buffer .= $indent . '            ';
        $value = $context->find('hideurl');
        $buffer .= $this->sectionB03bfbd361cfec12550c55e4007af47a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('lockurl');
        $buffer .= $this->section0f8029b2561aa617e9003ebde4f044bf($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('columncollapse');
        $buffer .= $this->section21cb8a4e14cc349ce53e9d4490533a87($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('resetweightsurl');
        $buffer .= $this->section573d49c87420f18ca083047fc23eacdf($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('viewfeedbackurl');
        $buffer .= $this->section5b0a5b42a31929914963889a44a12b11($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section44c341382fe18c98835bf913466dd3da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-boundary="{{databoundary}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-boundary="';
                $value = $this->resolveValue($context->find('databoundary'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section615f18789cc71c7fd7877bc8db31dd15(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-type="{{datatype}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-type="';
                $value = $this->resolveValue($context->find('datatype'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5482e91d7f357f19059e62f17058488(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-id="{{dataid}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-id="';
                $value = $this->resolveValue($context->find('dataid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe088126c3019e8ebc5101a0df6a8464(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cellactions, gradereport_grader ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' cellactions, gradereport_grader ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section544e94469c68846113a04f12534c2efb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{editurl}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('editurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1f18a1ed9e9f4d486635157e24f3837c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{editcalculationurl}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('editcalculationurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0786a507535f667a9cf18d7bf014d569(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{reporturl0}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('reporturl0'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4b505f8b5d40402ef730d8bafe453a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{reporturl1}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('reporturl1'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1204f4a1ef214912e1efa7db99093081(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{advancedgradingurl}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('advancedgradingurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section42bc80e6ab2d630f3a84a4157b33eaa8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{gradesonlyurl}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('gradesonlyurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD19a549dd2ccd5ea8c3ea914625df976(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{aggregatesonlyurl}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('aggregatesonlyurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe8d099817b0f599e6c5737df4c756c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{fullmodeurl}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('fullmodeurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05ec65ad2cae47cec34f2079422abff7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{deleteurl}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('deleteurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9ed35798485616c7ed0634673698bfa5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{duplicateurl}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('duplicateurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section623cdd682c2279696d671275090a63db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{gradeanalysisurl}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('gradeanalysisurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section846b058bdc44165960ee9449f3c9f31d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="dropdown-divider" role="separator"></div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="dropdown-divider" role="separator"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8005bcfe70be10e0ad7075f725cad663(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' firstname, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' firstname, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB890a08e5b392e9993e2e7be3cb925ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastname, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' lastname, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10a576038d0e112c68161da35fbba2c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <h6 class="dropdown-header">{{#str}} firstname, moodle {{/str}}</h6>
                {{{ascendingfirstnameurl}}}
                {{{descendingfirstnameurl}}}
                <h6 class="dropdown-header">{{#str}} lastname, moodle {{/str}}</h6>
                {{{ascendinglastnameurl}}}
                {{{descendinglastnameurl}}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <h6 class="dropdown-header">';
                $value = $context->find('str');
                $buffer .= $this->section8005bcfe70be10e0ad7075f725cad663($context, $indent, $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('ascendingfirstnameurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('descendingfirstnameurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                <h6 class="dropdown-header">';
                $value = $context->find('str');
                $buffer .= $this->sectionB890a08e5b392e9993e2e7be3cb925ed($context, $indent, $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('ascendinglastnameurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('descendinglastnameurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1cce50c49b1a7733dff7e8273ddae4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{ascendingurl}}}
                {{{descendingurl}}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('ascendingurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('descendingurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB03bfbd361cfec12550c55e4007af47a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{hideurl}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('hideurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f8029b2561aa617e9003ebde4f044bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{lockurl}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('lockurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21cb8a4e14cc349ce53e9d4490533a87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{columncollapse}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('columncollapse'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section573d49c87420f18ca083047fc23eacdf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{resetweightsurl}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('resetweightsurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b0a5b42a31929914963889a44a12b11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{viewfeedbackurl}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('viewfeedbackurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
