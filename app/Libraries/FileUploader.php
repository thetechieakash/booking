<?php

namespace App\Libraries;

use CodeIgniter\HTTP\Files\UploadedFile;
use CodeIgniter\Files\FileSizeUnit;

class FileUploader
{

    // File type, max size in kb and destination 
    protected $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/webp'];
    protected $maxSizeKB = 2048;
    protected $destination;

    public function __construct(string $destination)
    {
        $this->destination = rtrim($destination, '/\\') . '/';

        if (!is_dir($this->destination)) {
            mkdir($this->destination, 0755, true);
        }
    }

    public function setAllowedTypes(array $types): self
    {
        $this->allowedTypes = $types;
        return $this;
    }

    public function setMaxSizeKB(int $size): self
    {
        $this->maxSizeKB = $size;
        return $this;
    }

    // 🔁 Handle single file upload
    public function upload(UploadedFile $file): array
    {
        return $this->processFile($file);
    }

    // 🔁 Handle multiple file uploads
    public function uploadMultiple(array $files): array
    {
        $results = [];

        foreach ($files as $file) {
            if ($file instanceof UploadedFile) {
                $results[] = $this->processFile($file);
            }
        }

        return $results;
    }

    // 🔧 Internal reusable upload logic
    protected function processFile(UploadedFile $file): array
    {
        if (!$file->isValid()) {
            return ['status' => false, 'message' => 'Invalid file.'];
        }

        if ($file->hasMoved()) {
            return ['status' => false, 'message' => 'File already moved.'];
        }

        if (!in_array($file->getMimeType(), $this->allowedTypes)) {
            return ['status' => false, 'message' => 'File type not allowed.'];
        }

        if ($file->getSizeByBinaryUnit(FileSizeUnit::KB) > $this->maxSizeKB) {
            return ['status' => false, 'message' => 'File size exceeds the limit.'];
        }

        $newName = $file->getRandomName();
        $file->move($this->destination, $newName);

        return [
            'status'    => true,
            'file_name' => $newName,
            'file_path' => $this->destination . $newName
        ];
    }
}
