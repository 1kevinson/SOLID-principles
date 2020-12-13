<?php

// Can be replace by WritableDocument
class Document
{
    private string $data;
    private string $filename;

    public function open(): void
    {
    }
}

// Can replace Document
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