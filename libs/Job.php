<?php

class Job{
    private $db;

    public function __construct()
    {
      $this->db = new Database();   
    }
    public function getAllJobs()
    {
        $this->db->query("SELECT jobs.*,categories.name as cname
                            INNER JOIN categories FROM jobs
                            ON jobs_category_id = categories.id");
    }
}