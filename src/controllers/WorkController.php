<?php  
namespace Src\Controllers;

require_once('src\controllers\BaseController.php');
require_once('src\services\WorkService.php');

use Src\Services\WorkService;

class WorkController extends BaseController {

    /**
     * 
     * Construct
     * 
     * @return true or false
     * 
    */
    function __construct() {
        $this->folder = 'homePage';
    }

     /**
     * 
     * Method using get all work
     * 
     * @return view
     * 
    */
    public function index() {
        
        // Get data form database
        $workService = new WorkService();
        $works = $workService->all();
        $data = array('works' => $works);
        
        // Return view
        $this->render('home', $data);
    }

     /**
     * 
     * Method using add work
     * 
     * @param Sring $workName name of work
     * @param Date $startDate start date of work
     * @param Date $endDate end date of work
     * @param Sring status status of work
     * 
     * @return view
     * 
    */
    public function add() {

        try {
            session_start();

            // Get param
            $workName = $_REQUEST['workName'];
            $startDate = $_REQUEST['startDate'];
            $endDate = $_REQUEST['endDate'];
            $status = $_REQUEST['status'];

            // Excute add work
            $workService = new WorkService();
            $works = $workService->add($workName, $startDate, $endDate, $status);

            // Check result and return view
            if($works == true) {
                $_SESSION["success"] = "add success";
                header('location:/');
            } else {
                $_SESSION["error"] = "add error";
                header('location:/');
            }
            
        } catch (Exception $e) {
            $_SESSION["error"] = "add error";
            header('location:/');
        }
    }

    /**
     * 
     * Method using update work
     * 
     * @param Sring $workName name of work
     * @param Date $startDate start date of work
     * @param Date $endDate end date of work
     * @param Sring $status status of work
     * @param int $id id of work
     * 
     * @return boolean
     * 
    */
    public function update() {

        try {
            // start session
            session_start();

            //Get param
            $workName = $_REQUEST['workName'];
            $startDate = $_REQUEST['startDate'];
            $endDate = $_REQUEST['endDate'];
            $status = $_REQUEST['status'];
            $id = $_REQUEST['id'];

            // Excute update
            $workService = new WorkService();
            $works = $workService->update($workName, $startDate, $endDate, $status, $id);

            // Check result and return view
            if($works == true) {
                $_SESSION["success"] = "update success";
                header('location:/');
            } else {
                $_SESSION["error"] = "update error";
                header('location:/');
            }

        } catch (Exception $e) {
            $_SESSION["error"] = "update error";
            header('location:/');
        }
    }
    
    /**
     * 
     * Method using delete work
     * 
     * @param int $id id of work
     * 
     * @return view
     * 
    */
    public function delete($id) { 
        try {
            // start session
            session_start();

            // Excute delete
            $workService = new WorkService();
            $works = $workService->delete($id);
            
            // Check result and return view
            if($works == true) {
                $_SESSION["success"] = "delete success";
                header('location:/');
            } else {
                $_SESSION["error"] = "delete error";
                header('location:/');
            }

        } catch (Exception $e) {
            $_SESSION["error"] = "delete error";
            header('location:/');
        }
    }
}