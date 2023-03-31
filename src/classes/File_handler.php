<?php 
declare(strict_types=1);
class File_handler {
    private array $file;
    private string $name;
    public function __construct(array $file)
    {
        if(!isset($file)) {
            throw new Exception("no file uploaded");
        }
        if($file['error'] !== UPLOAD_ERR_OK) {
            throw new Exception("File upload error: " . $file['error']);
        }
        $this->file = $file;
        $this->name = $file['name'];
    }

    public function write($destination):string
    {
        if(!is_dir($destination)) {
            throw new Exception("destination directory does not exist");
        }

        if(!is_writable($destination)) {
            throw new Exception("Destination directory is not writable.");
        }
        $result = move_uploaded_file($this->file['tmp_name'], $destination . '/'. $this->name);
        if($result !== false) {
            return "file uploaded successfully.";
        } else {
            throw new Exception("Error uploading file.");
        }
    }
    public function delete():string
    {
        if(!file_exists($this->name)) {
            throw new Exception("File not found");
        }
        $result = unlink($this->name);
        if($result !== false) {
            return "File deleted successfully";
        } else {
            throw new Exception("Error deleting file");
        }
    }
    public function read(): string
    {
        if(!file_exists($this->file['tmp_name'])) {
            throw new Exception("File not found");
        }
        $content = file_get_contents($this->file['tmp_name']);
        return $content;
    }
    public function get_name():string
    {
        return $this->name;
    }

}





?>