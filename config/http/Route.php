<?php

namespace Config\Http;

/**
 * 
 * Class Route
 * 
 */
class Route
{

    /**
     * 
     * - Mảng lưu trữ route của ứng dụng
     * - Mỗi route sẽ gôm url, method, action và params
     * 
     */
    private $__routes;

    // Construct
    public function __construct()
    {
        $this->__routes = [];
    }

    /**
     * 
     * Method get
     * 
     * @param string $url 
     * @param string|callable 
     * 
     */
    public function get(string $url, $action)
    {

            $this->__request($url, 'GET', $action);
    }

    /**
     * 
     * Method POST
     * 
     * @param string $url 
     * @param string|callable 
     * 
     */
    public function post(string $url, $action)
    {
         $this->__request($url, 'POST', $action);
    }
    
    /**
     * 
     * Handle methods
     * 
     * @param string $url 
     * @param string $method method of route. GET or POST
     * @param string|callable 
     * 
     */
    private function __request(string $url, string $method, $action)
    {
        // Check the url for parram or not
        if (preg_match_all('/({([a-zA-Z]+)})/', $url, $params)) {
            $url = preg_replace('/({([a-zA-Z]+)})/', '(.+)', $url);
        }

        // Replace / to \/ (regex) in URL.
        $url = str_replace('/', '\/', $url);

        $route = [
            'url' => $url,
            'method' => $method,
            'action' => $action,
            'params' => $params[2]
        ];
        array_push($this->__routes, $route);
    }
    
    /**
     * 
     * Methos using handle url
     * 
     * @param string $url 
     * @param string $method method of url 
     * 
     */
    public function map(string $url, string $method){

        // Loop through the routes in the application, check whether the url is called
        foreach ($this->__routes as $route) {

            // If route have $method
            if ($route['method'] == $method) {

                // Check curernt route Is the url being called..
                $reg = '/^' . $route['url'] . '$/';
                if (preg_match($reg, $url, $params)) {
                    array_shift($params);
                    $this->__call_action_route($route['action'], $params);
                    return;
                }
            }
        }

        // Return 404 if url not map any router
        echo '404 - Not Found';
        return;
    }

    /**
     * 
     * Method using call action route
     * 
     * @param string|callable $action 
     * @param array $params
     * 
     * 
    */
    private function __call_action_route($action, $params)
    {
        // If $action is callback.
        if (is_callable($action)) {
            call_user_func_array($action, $params);
            return;
        }

        // If $action is a method of controller.
        if (is_string($action)) {
            $action = explode('@', $action);
            $controller_name = 'Src\\Controllers\\' . $action[0];
            $controller = new $controller_name();
            call_user_func_array([$controller, $action[1]], $params);

            return;
        }
    }
}