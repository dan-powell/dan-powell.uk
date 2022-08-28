<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Services\ImageService;

class ImageUrl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'image:url
        {path : The page of the image}
        {--relative : Give a relative URL}
        {--preset= : Use image preset}
        {--width= : Image width (px)}
        {--height= : Image height (px)}
        {--crop : Crop image (used in conjunction with --width & --height)}
        {--orientation : Accepts auto, 0, 90, 180 or 270}
        {--flip : Accepts v, h and both}
        {--dpr : Device pixel ratio}
        {--quality : Quality (only affects jpg)}
        {--format : Accepts jpg, pjpg, png or gif}
        {--blur= : Blur image (px)}
        {--pixel= : Pixelate image (0 - 1000)}
        {--greyscale}
        {--sepia}
        {--brightness= : Adjusts the image brightness (-100 - +100)}
        {--contrast= : Adjusts the image contrast (-100 - +100)}
        {--gamma= : Adjusts the image gamma (0.1 - 9.99)}
        {--sharpen= : Adjusts the image sharpness (0 - +100)}
        ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a secure image link';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(protected ImageService $imageService)
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $w = $this->option('width');
        $h = $this->option('height');
        $c = $this->option('crop');
        if($this->option('width') || $this->option('width')) {
            $this->imageService->size($w, $h, ($c ? 'crop' : null));
        }
        if($this->option('crop') && (!$this->option('width') || !$this->option('height'))) {
            $this->warn('crop must be used in conjunction with --width AND --height');
        }
        if($this->option('orientation')) {
            $this->imageService->orientation($this->option('orientation'));
        }
        if($this->option('flip')) {
            $this->imageService->flip($this->option('flip'));
        }
        if($this->option('dpr')) {
            $this->imageService->dpr($this->option('dpr'));
        }
        if($this->option('quality')) {
            $this->imageService->quality($this->option('quality'));
        }
        if($this->option('format')) {
            $this->imageService->format($this->option('format'));
        }
        if($this->option('blur')) {
            $this->imageService->blur($this->option('blur'));
        }
        if($this->option('pixel')) {
            $this->imageService->pixel($this->option('pixel'));
        }
        if($this->option('greyscale')) {
            $this->imageService->greyscale();
        }
        if($this->option('sepia')) {
            $this->imageService->sepia();
        }
        if($this->option('brightness')) {
            $this->imageService->brightness($this->option('brightness'));
        }
        if($this->option('contrast')) {
            $this->imageService->contrast($this->option('contrast'));
        }
        if($this->option('gamma')) {
            $this->imageService->gamma($this->option('gamma'));
        }
        if($this->option('sharpen')) {
            $this->imageService->sharpen($this->option('sharpen'));
        }

        $preset = $this->option('preset');
        $url = $this->imageService->url($this->argument('path'), $preset);
        if($this->option('relative')) {
            $this->info($url);
        } else {
            $this->info(url($url));
        }
    }
}
