<?php

namespace App\Services;

use League\Glide\Signatures\SignatureFactory;
use League\Glide\Signatures\SignatureException;

use League\Glide\Urls\UrlBuilderFactory;

class ImageService
{

    private $urlBuilder;
    private $properties = [];

    public function __construct()
    {
        // Set complicated sign key
        $signkey = config('images.key');

        $this->urlBuilder = UrlBuilderFactory::create(config('images.route') . '/', $signkey);

        $this->quality(config('images.quality'));

    }

    // Image Processors

    public function get($path, array $properties = []) {
        // Generate a URL
        return $this->urlBuilder->getUrl($path, $properties);
    }

    public function url($path, string $preset = null) {
        // Generate a URL
        if($preset) {
            $this->preset($preset);
        }
        return $this->urlBuilder->getUrl($path, $this->properties);
    }

    public function preset($key = '') {
        $this->props_single('p', $key);
        return $this;
    }

    // Image Effects

    public function orientation($amount = 'auto') {
        $this->props_single('or', $amount);
        return $this;
    }

    public function flip($amount = 'h') {
        $this->props_single('flip', $amount);
        return $this;
    }

    public function dpr($amount = 1) {
        $this->props_single('dpr', $amount);
        return $this;
    }

    public function quality($amount = 90) {
        $this->props_single('q', $amount);
        return $this;
    }

    public function format($type = 'png') {
        $this->props_single('fm', $type);
        return $this;
    }

    public function size($width = null, $height = null, $fit = 'max') {
        $this->props_array([
                'w' => $width,
                'h' => $height,
                'fit' => $fit
            ]);
        return $this;
    }

    public function crop($width = null, $height = null, $fit = 'crop') {
        $this->props_array([
                'w' => $width,
                'h' => $height,
                'fit' => $fit
            ]);
        return $this;
    }

    public function crop_left($width = null, $height = null) {
        $this->crop($width, $height, 'crop-left');
        return $this;
    }

    public function crop_top_left($width = null, $height = null) {
        $this->crop($width, $height, 'crop-top-left');
        return $this;
    }

    public function crop_top($width = null, $height = null) {
        $this->crop($width, $height, 'crop-top');
        return $this;
    }

    public function crop_top_right($width = null, $height = null) {
        $this->crop($width, $height, 'crop-top-right');
        return $this;
    }

    public function crop_right($width = null, $height = null) {
        $this->crop($width, $height, 'crop-right');
        return $this;
    }

    public function crop_bottom_right($width = null, $height = null) {
        $this->crop($width, $height, 'crop-bottom-right');
        return $this;
    }
    public function crop_bottom($width = null, $height = null) {
        $this->crop($width, $height, 'crop-bottom');
        return $this;
    }

    public function crop_bottom_left($width = null, $height = null) {
        $this->crop($width, $height, 'crop-bottom-left');
        return $this;
    }

    public function crop_focal($width = null, $height = null, $x = '50', $y = '50') {
        $this->crop($width, $height, 'crop-' . $x . '-' . $y);
        return $this;
    }

    public function blur($amount = 0) {
        $this->props_single('blur', $amount);
        return $this;
    }

    public function pixel($amount = 0) {
        $this->props_single('pixel', $amount);
        return $this;
    }

    public function greyscale() {
        $this->props_single('filt', 'greyscale');
        return $this;
    }

    public function sepia() {
        $this->props_single('filt', 'sepia');
        return $this;
    }

    public function brightness($amount = 0) {
        $this->props_single('bri', $amount);
        return $this;
    }

    public function contrast($amount = 0) {
        $this->props_single('con', $amount);
        return $this;
    }

    public function gamma($amount = 5) {
        $this->props_single('gam', $amount);
        return $this;
    }

    public function sharpen($amount = 0) {
        $this->props_single('sharp', $amount);
        return $this;
    }

    // Private Methods

    private function props_single(string $property, $value)
    {
        $this->properties[$property] = $value;
    }

    private function props_array(array $array)
    {
        $this->properties = array_merge($this->properties, $array);
    }
}
