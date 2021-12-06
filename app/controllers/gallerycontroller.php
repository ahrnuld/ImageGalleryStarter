<?php

require_once __DIR__ . '/../services/galleryservice.php';

class GalleryController
{
    private $galleryService;

    function __construct()
    {
       $this->galleryService = new GalleryService();
    }

    public function index()
    {
        $images = $this->galleryService->getAll();

        require __DIR__ . '/../views/gallery/index.php';
    }

    public function upload()
    {
        // handle an uploaded file

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            // read the uploaded file from the request

            // pass the file to the service, instead of null
            $result = $this->galleryService->saveFile(null);

            // perhaps it would be nice to show a bootstrap alert 
            // on the page if the upload succeeded or failed
        }   

        require __DIR__ . '/../views/gallery/upload.php';
    }
}
