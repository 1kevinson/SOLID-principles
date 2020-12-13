<?php

/**
 * Clients shouldn’t be forced to depend on methods they do not use.
 * */

class Amazon implements CloudHostingProvider,CDNProvider,CloudStorageProvider
{

    public function createServer(string $region): bool
    {
        // TODO: Implement createServer() method.
        return true;
    }

    public function listServer(string $region): string
    {
        // TODO: Implement listServer() method.
        return "";
    }

    public function getCDNAddress(): string
    {
        // TODO: Implement getCDNAddress() method.
        return "CDN15484548";
    }

    public function storeFile(string $name): bool
    {
        // TODO: Implement storeFile() method.
        return true;
    }

    public function getFile(string $name): string
    {
        // TODO: Implement getFile() method.
        return "log_20201512.txt";
    }
}

class Dropbox implements CloudStorageProvider
{

    public function storeFile(string $name): bool
    {
        // TODO: Implement storeFile() method.
        return true;
    }

    public function getFile(string $name): string
    {
        // TODO: Implement getFile() method.
        return "data_20201512.txt";
    }
}

interface CloudHostingProvider
{
    public function createServer(string $region): bool;

    public function listServer(string $region): string;
}

interface CDNProvider
{
    public function getCDNAddress(): string;
}

interface CloudStorageProvider
{
    public function storeFile(string $name) : bool;

    public function getFile(string $name) : string;
}