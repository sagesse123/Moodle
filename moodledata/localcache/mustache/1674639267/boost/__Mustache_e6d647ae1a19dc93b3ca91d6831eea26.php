<?php

class __Mustache_e6d647ae1a19dc93b3ca91d6831eea26 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div data-region="timeline-view-dates">
';
        if ($partial = $this->mustache->loadPartial('block_timeline/event-list')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
