<?php

class __Mustache_bedecde7f9ba46f79b65f891011cf160 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="progressbar_container mb-3">
';
        $buffer .= $indent . '    <div class="progress">
';
        $buffer .= $indent . '        <div id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '_bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-value="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="d-flex">
';
        $buffer .= $indent . '        <div style="flex: 1 1 0; min-width: 0;">
';
        $buffer .= $indent . '            <div id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '_status" class="text-truncate">&nbsp;</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="text-right pl-3" style="flex: 0 0 content">
';
        $buffer .= $indent . '            <span id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '_estimate" class="">&nbsp;</span>
';
        $buffer .= $indent . '            <span id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '_percentage" class="d-inline-block" style="width: 3em">0%</span>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . '(function() {
';
        $buffer .= $indent . '    var el = document.getElementById(\'';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\'),
';
        $buffer .= $indent . '        progressBar = document.getElementById(\'';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '_bar\'),
';
        $buffer .= $indent . '        statusIndicator = document.getElementById(\'';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '_status\'),
';
        $buffer .= $indent . '        estimateIndicator = document.getElementById(\'';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '_estimate\');
';
        $buffer .= $indent . '        percentageIndicator = document.getElementById(\'';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '_percentage\');
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    el.addEventListener(\'update\', function(e) {
';
        $buffer .= $indent . '        var msg = e.detail.message,
';
        $buffer .= $indent . '            percent = e.detail.percent,
';
        $buffer .= $indent . '            estimate = e.detail.estimate;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        statusIndicator.textContent = msg;
';
        $buffer .= $indent . '        progressBar.style.width = percent.toFixed(1) + \'%\';
';
        $buffer .= $indent . '        progressBar.setAttribute(\'value\', percent.toFixed(1));
';
        $buffer .= $indent . '        if (percent === 100) {
';
        $buffer .= $indent . '            progressBar.classList.add(\'bg-success\');
';
        $buffer .= $indent . '            progressBar.classList.remove(\'progress-bar-striped\');
';
        $buffer .= $indent . '            progressBar.classList.remove(\'progress-bar-animated\');
';
        $buffer .= $indent . '            percentageIndicator.textContent = \'100%\';
';
        $buffer .= $indent . '            estimateIndicator.textContent = \'\';
';
        $buffer .= $indent . '        } else {
';
        $buffer .= $indent . '            estimateIndicator.textContent = estimate;
';
        $buffer .= $indent . '            percentageIndicator.textContent =  percent.toFixed(1) + \'%\';
';
        $buffer .= $indent . '            progressBar.classList.remove(\'bg-success\');
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '})();
';
        $buffer .= $indent . '</script>
';

        return $buffer;
    }
}
