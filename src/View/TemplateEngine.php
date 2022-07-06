<?php

namespace SilverStripe\View;

use SilverStripe\Core\Flushable;
use SilverStripe\Template\View\SSViewer_Scope;

interface TemplateEngine extends Flushable
{
    /**
     * Process a given template, returning the rendered HTML.
     *
     * @param ViewableData $item The item to use as the root scope for the template
     * @param array $overlay Any variables to layer on top of the scope
     * @param array $underlay Any variables to layer underneath the scope
     * @param ViewableData|null $inheritedScope The current scope of a parent template including a sub-template
     */
    public function process(string $template, ViewableData $item, array $overlay, array $underlay, ?SSViewer_Scope $inheritedScope = null): string;
}
