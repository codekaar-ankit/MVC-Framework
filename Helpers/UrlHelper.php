<?php

class UrlHelper
{
    const BASE_URL = 'http://localhost/Practice/';

    const CSS_PATH = "views/assets/css/";

    const IMAGE_PATH = "views/assets/images/";

    public function getBaseUrl(): string
    {
        return self::BASE_URL;
    }

    public function getCSSUrL(string $fileName): string
    {
        return $this->getBaseUrl(). self::CSS_PATH. $fileName;
    }

    public function getImageUrl(string $fileName): string
    {
        return self::BASE_URL . self::IMAGE_PATH. $fileName;
    }

}