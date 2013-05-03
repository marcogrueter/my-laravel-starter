<?php

class Base_Controller extends Controller {

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

	public function __construct()
	{
		Asset::container('head')
			->add('jquery', 'js/lib/jquery.js')
			->add('jquery-ui', 'js/lib/jquery-ui.min.js', 'jquery')
			->add('modernizr', 'js/lib/modernizr.foundation.js')
			->add('foundation', 'css/foundation.min.css')
			->add('jquery-ui-css', 'css/smoothness/jquery-ui.min.css')
			->add('app', 'css/app.css');

		Asset::container('bottom')
			->add('reveal', 'js/foundation/jquery.foundation.reveal.js', 'jquery')
			->add('customforms', 'js/foundation/jquery.foundation.forms.js', 'jquery')
			->add('placeholder', 'js/lib/jquery.placeholder.js', 'jquery')
			->add('tooltip', 'js/foundation/jquery.foundation.tooltips.js', 'jquery')
			->add('buttons', 'js/foundation/jquery.foundation.buttons.js', 'jquery')
			->add('alerts', 'js/foundation/jquery.foundation.alerts.js', 'jquery')
			->add('app', 'js/app.js', 'jquery');
	}

}