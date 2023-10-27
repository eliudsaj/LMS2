<?php
/**
 * This library helps us to deal with links to documentation
 * @copyright  Copyright (c) 2014-2023 Benjamin BALET
 * @license      http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link            https://github.com/bbalet/jorani
 * @since         0.3.0
 */

if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

/**
 * This class helps to build links to documentation pages
 */
class Help {

    /**
     * Access to CI framework so as to use other libraries
     * @var type Code Igniter framework
     */
    private $CI;

    /**
     * Default constructor
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->helper('language');
        $this->CI->load->library('session');
        $this->CI->lang->load('global', $this->CI->session->userdata('language'));
    }

    /**
     * Test if a help page is available and returns a help link if so
     * @param string $page name of a page of the application
     * @return string link to Help page or empty string
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function create_help_link($page) {
        if (lang($page) != "") {
            return '&nbsp;' .
                      '<a href="' . lang($page) . '"' .
                      ' title="' . lang('global_link_tooltip_documentation') . '"' .
                      ' target="_blank" rel="nofollow"><sup><i class="mdi mdi-help-circle-outline mdi-18px nolink"></i></sup></a>';
        } else {
            return '';
        }
    }

    /**
     * NOT USED AT THE MOMENT. MIGHT BE USED LATER
     * @param string $page name of a page of the application
     * @return string Default Help link
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function get_default_help_page($page) {
        if (lang('global_link_doc_page_calendar_organization') == "") {
            $defaut['global_link_doc_page_calendar_organization'] = '';
            $defaut['global_link_doc_page_my_summary'] = '';
            $defaut['global_link_doc_page_request_leave'] = '';
            $defaut['global_link_doc_page_edit_leave_type'] = '';
            $defaut['global_link_doc_page_hr_organization'] = '';
            $defaut['global_link_doc_page_reset_password'] = '';
            $defaut['global_link_doc_page_leave_validation'] = '';
            $defaut['global_link_doc_page_login'] = '';
            $defaut['global_link_doc_page_create_user'] = '';
            $defaut['global_link_doc_page_list_users'] = '';
            $defaut['global_link_doc_page_list_employees'] = '';
            if (array_key_exists($page, $defaut)) {
                return "";
            } else {
                return "";
            }
        }
    }

}
