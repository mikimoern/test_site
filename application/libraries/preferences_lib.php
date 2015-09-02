<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Preferences_lib
{
    // Получаем значение конкретной настройки из базы на основании переданого параметра
    public function get_preference($pref_id)
    {
        $CI =& get_instance();
        
        $CI->db->where('pref_id',$pref_id);
        $query = $CI->db->get('preferences');
        
        // Получаем массив вида Array ([pref_id] => admin_login [value] => login)
        $pref_array = $query->row_array();
        
        // Возвращаем значение поля value этого массива (забираем значение самой настройки)
        return $pref_array['value'];
    }
}