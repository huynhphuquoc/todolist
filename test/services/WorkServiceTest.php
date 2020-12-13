<?php

namespace Test;
require_once("src\services\WorkService.php");

use PHPUnit\Framework\TestCase;
use Src\Services\WorkService;

class WorkServiceTest extends TestCase
{
    
    /**
     * 
     * Method using  test add function in WorkService
     * 
    */
    public function testAddIsSuccess()
    {
        // Define data test and result
        $workServicer = new WorkService();
        $expectes = true;
        $result  = $workServicer->add("create new Date",date("y-m-d"),date("y-m-d"),"PLANNIN");

        // Run test
        $this->assertTrue($expectes == $result);
    }

    /**
     * 
     * Method using  test add function in WorkService
     * 
    */
    public function testAddIsError()
    {
        // Define data test and result
        $workServicer = new WorkService();
        $expectes = false;
        $result  = $workServicer->add(null,"y-m-d",date("y-m-d"),"PLANNIN");

        // Run test
        $this->assertTrue($expectes == $result);
    }

    /**
     * 
     * Method using test update function in WorkService
     * 
    */
    public function testupdateIsSuccess()
    {
        // Define data test and result
        $workServicer = new WorkService();
        $expectes = true;
        $result  = $workServicer->update("create new Date",date("y-m-d"),date("y-m-d"),"COMPLETE",23);

        // Run test
        $this->assertTrue($expectes == $result);
    }

    /**
     * 
     * Method using test update function in WorkService
     * 
    */
    public function testupdateIsError()
    {
        // Define data test and result
        $workServicer = new WorkService();
        $expectes = false;
        $result  = $workServicer->update(null,date("y-m-d"),date("y-m-d"),"PLANNIN",15);

        // Run test
        $this->assertTrue($expectes == $result);
    }

    /**
     * 
     * Method using test delete function in WorkService
     * 
    */
    public function testDeleteIsSuccess()
    {
        // Define data test and result
        $workServicer = new WorkService();
        $expectes = true;
        $result  = $workServicer->delete(17);

        // Run test
        $this->assertTrue($expectes == $result);
    }

    /**
     * 
     * Method using test delete function in WorkService
     * 
    */
    public function testDeleteIsError()
    {
        // Define data test and result
        $workServicer = new WorkService();
        $expectes = false;
        $result  = $workServicer->delete(null);

        // Run test
        $this->assertTrue($expectes == $result);
    }
}