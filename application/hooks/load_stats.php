<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function load_stats()
{
    $CI =& get_instance();
    $line = $CI->lang->line('common_you_are_using_ospos');

    if(sha1($CI->session->userdata('session_sha1')) == 0)
    {
        $footer_tags = file_get_contents(APPPATH . 'views/partial/footer.php');
        $d = preg_replace('/\$Id:\s.*?\s\$/', '$Id$', $footer_tags);
        $session_sha1 = sha1("blob " .strlen( $d ). "\0" . $d);
        $CI->session->set_userdata('session_sha1', substr($session_sha1, 0, 7));

        preg_match('/\$Id:\s(.*?)\s\$/', $footer_tags, $matches);
        $needle = 'Open Source Point Of Sale';

      
    }
}

?>
