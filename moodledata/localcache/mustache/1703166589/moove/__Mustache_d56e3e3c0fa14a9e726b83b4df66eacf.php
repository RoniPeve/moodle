<?php

class __Mustache_d56e3e3c0fa14a9e726b83b4df66eacf extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div data-region="plans">
';
        $buffer .= $indent . '<div class="float-left">
';
        $value = $context->find('navigation');
        $buffer .= $this->sectionD08ce944aaf75f9befb6599caacf6c31($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<table class="generaltable fullwidth">
';
        $buffer .= $indent . '    <caption>';
        $value = $context->find('str');
        $buffer .= $this->section09e005df23779e0770c7817af8c87ce2($context, $indent, $value);
        $buffer .= '</caption>
';
        $buffer .= $indent . '    <thead>
';
        $buffer .= $indent . '        <tr>
';
        $buffer .= $indent . '            <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->sectionD62313e8ba55f79c5acde6aa1f29d2e6($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->sectionCfac7ef66189c234f117fe5c1b2d68e1($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->section6cf3cf31f053d15ce18f5e7bf34f2d21($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->section4df404defbaa4e47c852157743964c8c($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '        </tr>
';
        $buffer .= $indent . '    </thead>
';
        $buffer .= $indent . '    <tbody>
';
        $value = $context->find('plans');
        $buffer .= $this->section5a2db0bf8be867d075a7884282fe6e3e($context, $indent, $value);
        $buffer .= $indent . '    </tbody>
';
        $buffer .= $indent . '</table>
';
        $buffer .= $indent . '
';
        $value = $context->find('plans');
        if (empty($value)) {
            
            $buffer .= $indent . '<p class="alert alert-info">
';
            $buffer .= $indent . '    ';
            $value = $context->find('str');
            $buffer .= $this->sectionEa7d6067d46959966a4bf229173f651e($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '</p>
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('canreaduserevidence');
        $buffer .= $this->sectionF9aaa90e0caf149d9c4cd7f6d5e3dc34($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section5e82a2ba825aba0aea53fcc55696d692($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionD08ce944aaf75f9befb6599caacf6c31(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{.}}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section09e005df23779e0770c7817af8c87ce2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'listplanscaption, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'listplanscaption, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD62313e8ba55f79c5acde6aa1f29d2e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'planname, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'planname, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCfac7ef66189c234f117fe5c1b2d68e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'templatebased, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'templatebased, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6cf3cf31f053d15ce18f5e7bf34f2d21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'status, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'status, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4df404defbaa4e47c852157743964c8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'actions, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'actions, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d56240b217f929d4677ce34bb80d3a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'yes';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'yes';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF392edea1e102841f3173d3c349b3263(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <span class="badge badge-info">{{#str}}yes{{/str}}</span>
               ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '               <span class="badge badge-info">';
                $value = $context->find('str');
                $buffer .= $this->section0d56240b217f929d4677ce34bb80d3a8($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0ac7f20e9de08dda74d7d5716455c77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'no';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'no';
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

    private function section158e0c1c410a936022f4ff6d4c98097c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{pluginbaseurl}}/editplan.php?id={{id}}&amp;userid={{userid}}&amp;return=plans
                                 ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/editplan.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&amp;userid=';
                $value = $this->resolveValue($context->find('userid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&amp;return=plans
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06156a95c0067bea78d4929542c7acc4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/edit';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2cdac327a7ddab3f7ccb82af448ed9dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editthisplan, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'editthisplan, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30e5b1127e78adca71afb024437ca4e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'reopenplan, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'reopenplan, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5704d6ec10f5c07458c9e405a6082ad9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-reopen" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}reopenplan, tool_lp{{/str}}
                        </a>
                    </li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-reopen" href="#">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->section30e5b1127e78adca71afb024437ca4e4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAf94e292f88e092fe890901004b81523(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completeplan, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completeplan, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9ca9c83aecbcad00609e76ad165df2d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-complete" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}completeplan, tool_lp{{/str}}
                        </a>
                    </li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-complete" href="#">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->sectionAf94e292f88e092fe890901004b81523($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8da287375ade747d99c234e6e8982412(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'requestreview, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'requestreview, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e413e6ed59349cf1c4b5e8827180f57(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-request-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}requestreview, tool_lp{{/str}}</a>
                    </li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-request-review" href="#">';
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->section8da287375ade747d99c234e6e8982412($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDbd111003f3359ac9cad2f73c86166ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cancelreviewrequest, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'cancelreviewrequest, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2416ee953d1c310a0c74d08bb28ea826(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-cancel-review-request" href="#">{{#pix}}t/edit{{/pix}} {{#str}}cancelreviewrequest, tool_lp{{/str}}</a>
                    </li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-cancel-review-request" href="#">';
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->sectionDbd111003f3359ac9cad2f73c86166ba($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8adf1d824e306aaf125b1a037a20c224(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startreview, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'startreview, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3882ae46798569e1411d97d5640333b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-start-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}startreview, tool_lp{{/str}}</a>
                    </li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-start-review" href="#">';
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->section8adf1d824e306aaf125b1a037a20c224($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf4950d626f5c331244c6f4673ecd957(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'stopreview, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'stopreview, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3aa288a294e2ccd30028d3d29ec33d8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-stop-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}stopreview, tool_lp{{/str}}</a>
                    </li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-stop-review" href="#">';
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->sectionDf4950d626f5c331244c6f4673ecd957($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6df78be086dead020f45626be3f6c906(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'planapprove, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'planapprove, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6e6e160da0515d1e41a25251aa8fee79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-approve" href="#">{{#pix}}t/edit{{/pix}} {{#str}}planapprove, tool_lp{{/str}}</a>
                    </li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-approve" href="#">';
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->section6df78be086dead020f45626be3f6c906($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a875ec293f7a5dde815197b1bf15817(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'planunapprove, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'planunapprove, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section820097df93783fed0d1f0f834290b248(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-unapprove" href="#">{{#pix}}t/edit{{/pix}} {{#str}}planunapprove, tool_lp{{/str}}</a>
                    </li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-unapprove" href="#">';
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->section6a875ec293f7a5dde815197b1bf15817($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3676cac9b0cf0eb27ad766264e520177(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unlinkplantemplate, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'unlinkplantemplate, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section618392b08eb3775265476de9e8014d4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-unlink" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}unlinkplantemplate, tool_lp{{/str}}
                        </a>
                    </li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-unlink" href="#">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->section3676cac9b0cf0eb27ad766264e520177($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section164e871b9170fd2140595670ad4f9c08(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/delete';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/delete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB193148a1db47cc30d2c61ca6c2a8459(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'deletethisplan, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'deletethisplan, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD624db0547e093bbdf1757b04a0c83bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div style="display: inline-block;">
                <ul title="{{#str}}edit{{/str}}" class="planactions">
                <li>
                    <a href="#">{{#str}}edit{{/str}}</a><b class="caret"></b>
                    <ul class="dropdown dropdown-menu">
                    <li class="{{^canbeedited}} disabled {{/canbeedited}} dropdown-item">
                        <a href="{{#canbeedited}}
                                    {{pluginbaseurl}}/editplan.php?id={{id}}&amp;userid={{userid}}&amp;return=plans
                                 {{/canbeedited}}
                                 {{^canbeedited}}
                                    #
                                 {{/canbeedited}}
                                 ">
                            {{#pix}}t/edit{{/pix}} {{#str}}editthisplan, tool_lp{{/str}}
                        </a>
                    </li>
                    {{#isreopenallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-reopen" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}reopenplan, tool_lp{{/str}}
                        </a>
                    </li>
                    {{/isreopenallowed}}
                    {{#iscompleteallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-complete" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}completeplan, tool_lp{{/str}}
                        </a>
                    </li>
                    {{/iscompleteallowed}}
                    {{#isrequestreviewallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-request-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}requestreview, tool_lp{{/str}}</a>
                    </li>
                    {{/isrequestreviewallowed}}
                    {{#iscancelreviewrequestallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-cancel-review-request" href="#">{{#pix}}t/edit{{/pix}} {{#str}}cancelreviewrequest, tool_lp{{/str}}</a>
                    </li>
                    {{/iscancelreviewrequestallowed}}
                    {{#isstartreviewallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-start-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}startreview, tool_lp{{/str}}</a>
                    </li>
                    {{/isstartreviewallowed}}
                    {{#isstopreviewallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-stop-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}stopreview, tool_lp{{/str}}</a>
                    </li>
                    {{/isstopreviewallowed}}
                    {{#isapproveallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-approve" href="#">{{#pix}}t/edit{{/pix}} {{#str}}planapprove, tool_lp{{/str}}</a>
                    </li>
                    {{/isapproveallowed}}
                    {{#isunapproveallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-unapprove" href="#">{{#pix}}t/edit{{/pix}} {{#str}}planunapprove, tool_lp{{/str}}</a>
                    </li>
                    {{/isunapproveallowed}}
                    {{#isunlinkallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-unlink" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}unlinkplantemplate, tool_lp{{/str}}
                        </a>
                    </li>
                    {{/isunlinkallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-delete" href="#">
                            {{#pix}}t/delete{{/pix}} {{#str}}deletethisplan, tool_lp{{/str}}
                        </a>
                    </li>
                    </ul>
                </ul>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div style="display: inline-block;">
';
                $buffer .= $indent . '                <ul title="';
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $buffer .= '" class="planactions">
';
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                    <a href="#">';
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $buffer .= '</a><b class="caret"></b>
';
                $buffer .= $indent . '                    <ul class="dropdown dropdown-menu">
';
                $buffer .= $indent . '                    <li class="';
                $value = $context->find('canbeedited');
                if (empty($value)) {
                    
                    $buffer .= ' disabled ';
                }
                $buffer .= ' dropdown-item">
';
                $buffer .= $indent . '                        <a href="';
                $value = $context->find('canbeedited');
                $buffer .= $this->section158e0c1c410a936022f4ff6d4c98097c($context, $indent, $value);
                $value = $context->find('canbeedited');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    #
';
                }
                $buffer .= $indent . '                                 ">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->section2cdac327a7ddab3f7ccb82af448ed9dc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </li>
';
                $value = $context->find('isreopenallowed');
                $buffer .= $this->section5704d6ec10f5c07458c9e405a6082ad9($context, $indent, $value);
                $value = $context->find('iscompleteallowed');
                $buffer .= $this->section9ca9c83aecbcad00609e76ad165df2d0($context, $indent, $value);
                $value = $context->find('isrequestreviewallowed');
                $buffer .= $this->section7e413e6ed59349cf1c4b5e8827180f57($context, $indent, $value);
                $value = $context->find('iscancelreviewrequestallowed');
                $buffer .= $this->section2416ee953d1c310a0c74d08bb28ea826($context, $indent, $value);
                $value = $context->find('isstartreviewallowed');
                $buffer .= $this->section3882ae46798569e1411d97d5640333b5($context, $indent, $value);
                $value = $context->find('isstopreviewallowed');
                $buffer .= $this->section3aa288a294e2ccd30028d3d29ec33d8a($context, $indent, $value);
                $value = $context->find('isapproveallowed');
                $buffer .= $this->section6e6e160da0515d1e41a25251aa8fee79($context, $indent, $value);
                $value = $context->find('isunapproveallowed');
                $buffer .= $this->section820097df93783fed0d1f0f834290b248($context, $indent, $value);
                $value = $context->find('isunlinkallowed');
                $buffer .= $this->section618392b08eb3775265476de9e8014d4b($context, $indent, $value);
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-delete" href="#">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->section164e871b9170fd2140595670ad4f9c08($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->sectionB193148a1db47cc30d2c61ca6c2a8459($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </li>
';
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                </ul>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a2db0bf8be867d075a7884282fe6e3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <tr data-region="plan-node" data-id="{{id}}" data-userid="{{userid}}">
            <td>
                <span><a href="{{pluginbaseurl}}/plan.php?id={{id}}">{{{name}}}</a></span>
            </td>
             <td>
               {{#isbasedontemplate}}
               <span class="badge badge-info">{{#str}}yes{{/str}}</span>
               {{/isbasedontemplate}}
               {{^isbasedontemplate}}
               <span class="badge">{{#str}}no{{/str}}</span>
               {{/isbasedontemplate}}
            </td>
            <td>{{statusname}}</td>
            <td>
            {{#canmanage}}
                <div style="display: inline-block;">
                <ul title="{{#str}}edit{{/str}}" class="planactions">
                <li>
                    <a href="#">{{#str}}edit{{/str}}</a><b class="caret"></b>
                    <ul class="dropdown dropdown-menu">
                    <li class="{{^canbeedited}} disabled {{/canbeedited}} dropdown-item">
                        <a href="{{#canbeedited}}
                                    {{pluginbaseurl}}/editplan.php?id={{id}}&amp;userid={{userid}}&amp;return=plans
                                 {{/canbeedited}}
                                 {{^canbeedited}}
                                    #
                                 {{/canbeedited}}
                                 ">
                            {{#pix}}t/edit{{/pix}} {{#str}}editthisplan, tool_lp{{/str}}
                        </a>
                    </li>
                    {{#isreopenallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-reopen" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}reopenplan, tool_lp{{/str}}
                        </a>
                    </li>
                    {{/isreopenallowed}}
                    {{#iscompleteallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-complete" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}completeplan, tool_lp{{/str}}
                        </a>
                    </li>
                    {{/iscompleteallowed}}
                    {{#isrequestreviewallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-request-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}requestreview, tool_lp{{/str}}</a>
                    </li>
                    {{/isrequestreviewallowed}}
                    {{#iscancelreviewrequestallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-cancel-review-request" href="#">{{#pix}}t/edit{{/pix}} {{#str}}cancelreviewrequest, tool_lp{{/str}}</a>
                    </li>
                    {{/iscancelreviewrequestallowed}}
                    {{#isstartreviewallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-start-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}startreview, tool_lp{{/str}}</a>
                    </li>
                    {{/isstartreviewallowed}}
                    {{#isstopreviewallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-stop-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}stopreview, tool_lp{{/str}}</a>
                    </li>
                    {{/isstopreviewallowed}}
                    {{#isapproveallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-approve" href="#">{{#pix}}t/edit{{/pix}} {{#str}}planapprove, tool_lp{{/str}}</a>
                    </li>
                    {{/isapproveallowed}}
                    {{#isunapproveallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-unapprove" href="#">{{#pix}}t/edit{{/pix}} {{#str}}planunapprove, tool_lp{{/str}}</a>
                    </li>
                    {{/isunapproveallowed}}
                    {{#isunlinkallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-unlink" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}unlinkplantemplate, tool_lp{{/str}}
                        </a>
                    </li>
                    {{/isunlinkallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-delete" href="#">
                            {{#pix}}t/delete{{/pix}} {{#str}}deletethisplan, tool_lp{{/str}}
                        </a>
                    </li>
                    </ul>
                </ul>
            </div>
            {{/canmanage}}
            </td>
        </tr>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <tr data-region="plan-node" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-userid="';
                $value = $this->resolveValue($context->find('userid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            <td>
';
                $buffer .= $indent . '                <span><a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/plan.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></span>
';
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '             <td>
';
                $value = $context->find('isbasedontemplate');
                $buffer .= $this->sectionF392edea1e102841f3173d3c349b3263($context, $indent, $value);
                $value = $context->find('isbasedontemplate');
                if (empty($value)) {
                    
                    $buffer .= $indent . '               <span class="badge">';
                    $value = $context->find('str');
                    $buffer .= $this->sectionD0ac7f20e9de08dda74d7d5716455c77($context, $indent, $value);
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '            <td>';
                $value = $this->resolveValue($context->find('statusname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '            <td>
';
                $value = $context->find('canmanage');
                $buffer .= $this->sectionD624db0547e093bbdf1757b04a0c83bf($context, $indent, $value);
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa7d6067d46959966a4bf229173f651e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nouserplans, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nouserplans, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3e27a62ff9d87b11696cc77f5117dae1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'userevidence, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'userevidence, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF9aaa90e0caf149d9c4cd7f6d5e3dc34(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="float-left">
    <a href="{{pluginbaseurl}}/user_evidence_list.php?userid={{userid}}">{{#str}}userevidence, tool_lp{{/str}}</a>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="float-left">
';
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/user_evidence_list.php?userid=';
                $value = $this->resolveValue($context->find('userid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section3e27a62ff9d87b11696cc77f5117dae1($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e82a2ba825aba0aea53fcc55696d692(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
// Initialise the JS.
require([\'tool_lp/planactions\'],
        function(ActionsMod) {

    var planActions = new ActionsMod(\'plans\');
    planActions.enhanceMenubar(\'.planactions\');
});

';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '// Initialise the JS.
';
                $buffer .= $indent . 'require([\'tool_lp/planactions\'],
';
                $buffer .= $indent . '        function(ActionsMod) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    var planActions = new ActionsMod(\'plans\');
';
                $buffer .= $indent . '    planActions.enhanceMenubar(\'.planactions\');
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
