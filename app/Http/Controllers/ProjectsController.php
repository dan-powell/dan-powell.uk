<?php namespace App\Http\Controllers;

use App\Project;
use App\Tag;


class ProjectsController extends Controller {

    /**
    *   Return a view listing all of the projects
	*
	*/
	public function index()
	{
    	// Get all the projects
    	$projects = Project::with('tags')->orderBy('created_at', 'DESC')->get();

        // Loop through all of the projects and concatenate the tags together as a single string - keeps the template clean
    	foreach($projects as $project) {
        	$collectTags = '';
            foreach($project->tags as $tag){
        	    $collectTags .= '-' . str_slug($tag->title) . ' ';
            }
        	$project->allTags = $collectTags;
    	}

        // Get all the tags
    	$tags = Tag::with('projects')->orderBy('created_at', 'DESC')->get();

    	// We only need tags that have a relationship with a project
        // Use Eloquent's filter method, allowing only tags with relationships to Projects are be returned
        $tagsFiltered = $tags->filter(function($tag)
        {
            if(isset($tag->projects) && count($tag->projects) > 0) {
        	    return $tag;
        	}
        });

        // Return view along with projects and filterestags
		return view('projects.index')->with(['projects' => $projects, 'tags' => $tagsFiltered]);
	}


	/**
    *   Return a view showing one of the projects
	*
	* @param String $slug - if numeric will be treated as an id, otherwise will search for matching slug
	* @return View - returns created page, or throws a 404 if slug is invalid or can't find a matching record
	*/
	public function show($slug)
	{
        // check to see if id is valid then determine if it is an id or a slug
        if (is_numeric($slug)) {
            // If a number is suplied, use that to find project by ID
            $project = Project::find($slug);

            // Check if a project was found
            if ($project != null) {
                // Project found OK, return a 301 redirect to the correct slug
            	return redirect()->route('projects.show', $project->slug, 301);
            } else {
                // No project found, throw a 404.
	            return abort('404', 'Invalid project id');
	        }
        }
        else {
	        $query = Project::where('slug', '=', $slug);
	        $project = $query->first();

            // Check if a project was found
	        if ($project != null) {

                // Parse the body text in to sections
                //$project->sections = $this->parseSections($project->content, ['section', 'container']);

                // Set the default template if not provided
		        if ($project->template == null || $project->template == 'default') {
			        $template = 'projects.show';
			    } else {
				    $template = 'projects.layouts.' . $project->template;
				}

                // Return view with projects
				return view($template)->with(['project' => $project]);

		   	} else {
    		   	// No project found, throw a 404.
	            return abort('404', 'Invalid project slug');
	        }
        }
	}


    /**
    *   Processess a text string, splitting it into sections that have custom parameters. Used to split to body text in to something useful.
	*
	* @param String $source - The string to process
	* @param Array $parameter_names - An array of property names. Used as a fallback if a property is set without a name.
	* @return Array - Returns an array of objects. Each object represents a section of content and has a 'content' property as well as custom properties.
	*/

	private function parseSections($source, $parameter_names = []) {

        // Define a few regexes used to split up our markdown in to sections and parameters
		$section_splitter = '/\@{4,}/'; // @@@@
		$parameter_splitter = '/;{2,}/'; // ;;
		$value_splitter = '/:{2,}/'; // ::

		// First, split the text in to sections
		$sections = preg_split($section_splitter, $source, null, true);

        $array = [];
        // Loop through each section and process it. Add the section object to the array when done.
        foreach($sections as $key => $section) {
            if(trim($section) != ''){

                $object = new stdClass();

                // Split the section in to parameters.
                $params = preg_split($parameter_splitter, $section);

                // The last 'parameter' is in fact the content, so add that the section object and remove it from the array.
                $object->content = array_pop($params);

                // If the array still has elements, then we know the parameter(s) have been set.
                if(count($params) > 0) {

                    // Loop through each parameter..
                    foreach($params as $key => $param) {

                        //And split it in to an array that contains the property name [0] and value [1].
                        $parameter = preg_split($value_splitter, $param);

                        // Check if a property name was set and use it, othewise make one up or take it from the $parameter_names array provided.
                        if (count($parameter) > 1 && $parameter[0] != '') {
                            $property = str_replace([' ', '-'], '_', strtolower(trim($parameter[0])));
                            // Add the property and value to the object
                            $object->$property = trim($parameter[1]);
                        } else {
                            if (array_key_exists($key, $parameter_names)) {
                                $property = $parameter_names[$key];
                            } else {
                                $property = 'property' . $key;
                            }
                            // Add the property and value to the object
                            $object->$property = trim($parameter[0]);
                        }
                    }
                }
                // Add the object to the final array of sections.
                array_push($array, $object);
            }
        }
        // Return the array of sections.
        return $array;
    }
}
