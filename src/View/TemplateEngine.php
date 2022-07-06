<?php

namespace SilverStripe\View;

interface TemplateEngine
{
    public function renderString(string $content, bool $includeDebugComments = false, string $templateName = ''): string;
}
