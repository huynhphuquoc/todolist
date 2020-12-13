<?php

namespace Src\Services;

require_once('src\entity\Work.php');
require_once('src\DB.php');

use Src\Entity\Work;
use Src\DB\DB;

class WorkService {

     /**
     * 
     * Method using get all work
     * 
     * @return array
     * 
    */
    public  function all() {

        // Get data from database
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM work');
        
        // Set data for list[]
        foreach ($req->fetchAll() as $item) {
          $list[] = new Work($item['id'], $item['work_name']
                    ,$item['starting_date'], $item['ending_date'], $item['status']);
        }
        
        return $list;
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
     * @return boolean
     * 
    */
    public function add($workName, $startDate, $endDate, $status) {
        try {
            
            // Validate Name
            if ($workName == null) {
                return false;
            }

            // Excute delete
            $db = DB::getInstance();
            $req = $db->prepare('INSERT INTO work(work_name, starting_date, ending_date, status) 
                                        VALUES(?,?,?,?)');
            $response = $req->execute(array($workName,$startDate, $endDate, $status));

            // Check result
            if ($response == 1) {
                return true;
            } else {
                return false;
            }

        } catch(Exception $e) {
            return false;
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
    public function update($workName, $startDate, $endDate, $status, $id) {
        try {

            // Validate Name
            if ($workName == null) {
                return false;
            }
            
            // Excute delete
            $db = DB::getInstance();
            $req = $db->prepare('UPDATE work
                                    SET work_name = ?,
                                        starting_date = ?,
                                        ending_date = ?,
                                        status = ?
                                WHERE 
                                    id = ?');
            $response = $req->execute(array($workName,$startDate, $endDate, $status, $id));

            // Check result
            if ($response ==1) {
                return true;
            }else {
                return false;
            }

        } catch(Exception $e) {
            return false;
        }
    }

    /**
     * 
     * Method using delete work
     * 
     * @param int $id id of work
     * 
     * @return boolean
     * 
    */
    public function delete($id) {
        try {

            // validate $id
            if($id == null) {
                return false;
            }

            // Excute delete
            $db = DB::getInstance();
            $req = $db->prepare('DELETE FROM work WHERE id = ?');
            $response = $req->execute(array($id)); 

            // Check result
            if ($response ==1){
                return true;
            } else {
                return false;
            }
        } catch(Exception $e) {
            return false;
        }

    }
}