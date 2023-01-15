<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Data1_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Data1_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
		$this->load->database();
  }

  // ------------------------------------------------------------------------
  public function getDataSatu()
  {
    // 
		$query = $this->db->get("data1");
		return $query->result_array();
  }

	public function getDataDua()
  {
    // 
		$query = $this->db->get("data2");
		return $query->result_array();
  }

	public function insert($data, $table="")
	{
		if(empty($table)) $table = 'data1';

		$this->db->insert($table,$data);
	}

  // ------------------------------------------------------------------------

}

/* End of file Data1_model.php */
/* Location: ./application/models/Data1_model.php */
