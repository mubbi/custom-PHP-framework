<?php
/**
* BaseController
*/

class BaseController
{
    /**
     * load the view
     * @param  string $view   view name
     * @param  array  $params additional variables to pass in view
     * @return void
     */
    public function view($view, $params = [])
    {
        if (!file_exists(VIEWS . $view.'.php')) {
            die('View: ' . $view . ' file not found');
        }
        if (count($params)) {
            extract($params);
        }
        include VIEWS . $view.'.php';
    }

    /**
     * load the model
     * @param  string $model  model name
     * @return object         model class object
     */
    public function loadModel($model)
    {
        if (!file_exists(MODELS . $model.'.php')) {
            die('MODEL: ' . $model . ' file not found');
        }
        include MODELS . $model.'.php';
        return new $model;
    }
}
