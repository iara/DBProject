<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * CodeIgniter Form Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/helpers/general_helper.html
 */
// ------------------------------------------------------------------------

/**
 * Form Declaration
 *
 * Creates the opening portion of the form.
 *
 * @access	public
 * @param	string	the URI segments of the form destination
 * @param	array	a key/value pair of attributes
 * @param	array	a key/value pair hidden data
 * @return	string
 */
if (!function_exists('pre')) {

    function pre($array = '', $value = '') {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        if ($value)
            exit();
    }

}

/**
 * Form Declaration
 *
 * Creates the opening portion of the form.
 *
 * @access	public
 * @param	string	the URI segments of the form destination
 * @param	array	a key/value pair of attributes
 * @param	array	a key/value pair hidden data
 * @return	string
 */
if (!function_exists('last_query')) {

    function last_query($value = '') {
        if ($value){
            echo $this->db->last_query();
            exit();
        }
        else 
            echo $this->db->last_query();
    }

}

/* End of file general_helper.php */
/* Location: ./system/helpers/general_helper.php */
