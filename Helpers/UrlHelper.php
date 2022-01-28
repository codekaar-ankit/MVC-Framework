<?php

namespace Helper\UrlController;

class UrlHelper
{
    const BASE_URL = 'http://localhost/MVC-Framework/';

    const VIEW_URL = 'views/';

    const CONTROLLER_URL = 'Controller/';

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
        return $this->getBaseUrl(). self::IMAGE_PATH. $fileName;
    }

    public function getViewUrl(string $fileName): string
    {
        return $this->getBaseUrl(). self::VIEW_URL. $fileName;
    }

    public function getControllerUrl(string $fileName): string
    {
        return $this->getBaseUrl(). self::CONTROLLER_URL. $fileName;
    }

}