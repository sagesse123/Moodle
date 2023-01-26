<?php

class __Mustache_1b867830ab1b2317d97e94c6570ed84d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="text-center pt-3 icon-size-4">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';

        return $buffer;
    }
}
