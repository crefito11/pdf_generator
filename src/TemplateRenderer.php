<?php

namespace Crefito11\PdfGenerator;

class TemplateRenderer
{
    private $template;
    private $data;

    public function __construct(string $templatePath, array $data)
    {
        $this->template = file_get_contents($templatePath);
        $this->data = $data;
    }

    public function render(): string
    {
        $html = $this->template;
        foreach ($this->data as $key => $value) {
            $html = str_replace("{{" . $key . "}}", $value, $html);
        }
        return $html;
    }
}