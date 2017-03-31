<?php
namespace Jobs;

class MyJob
{
    public function setUp()
    {
        // ... Set up environment for this job
    }
    
    /**
     * essential method
     */
    public function perform()
    {
        // Work work work
        echo $this->args['name'];
    }
    
    public function tearDown()
    {
        // ... Remove environment for this job
    }
}