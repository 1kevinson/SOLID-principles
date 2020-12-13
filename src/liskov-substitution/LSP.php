<?php

class Document
{
    private string $data;
    private string $filename;

    public function open(): void
    {
    }
}

class WritableDocument extends Document
{
    public function save()
    {
    }
}

class Project {
    private array $allDocs;
    private array $writableDocs;

    public function openAll() {
        $allDocs = $this->allDocs;
        foreach ($allDocs as $value) {
            $value->open();
        }
    }
    public function saveAll() {}
}