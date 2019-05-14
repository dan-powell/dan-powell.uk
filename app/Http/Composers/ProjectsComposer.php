<?php namespace App\Http\Composers;

use Illuminate\View\View;

use App\Repositories\ProjectRepository;

class ProjectsComposer
{

    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepo = $projectRepository;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('projects', $this->projectRepo->all());
    }
}
