<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ImageFlushCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'image:flush';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Flush all cached images';

    protected $filesystem;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Storage $storage)
    {
        parent::__construct();
        $this->filesystem = $storage::disk(config('images.cache'));
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $folders = $this->filesystem->allDirectories('.');
        foreach($folders as $folder) {
            $this->filesystem->deleteDirectory($folder);
        }
        if(!$this->filesystem->exists('.')) {
            $this->info('Image cache flushed.');
        } else {
            $this->warn('Image cache folder could not be removed.');
        }
    }
}
