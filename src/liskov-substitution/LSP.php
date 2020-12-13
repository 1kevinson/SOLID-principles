<?php

/**
 * When extending a class, remember that you should be able to pass objects of the subclass in place of objects of the parent class without breaking the client code.
 */

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