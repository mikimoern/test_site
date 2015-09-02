<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_lib
{
    // Проверяет на совпадение введенные данные с данными из базы и авторизует в случае совпадения
    public function do_login($login,$pass)
    {
        $CI =& get_instance(); 
        
        $CI->load->library('preferences_lib');
        
        // Правильные данные из базы
        $right_login = $CI->preferences_lib->get_preference('admin_login');
        $right_pass = $CI->preferences_lib->get_preference('admin_pass');
        
        // Проверка на совпадение
        if (($right_login === $login) && ($right_pass === $pass))
        {
            $ses = array();
            $ses['admin_logined'] = 'yes'; // Администратор вошел
            $ses['admin_hash'] = $this->the_hash(); // Дополонительная защита - хэш
            
            $CI->session->set_userdata($ses); // Запись сессии
            
            redirect ('administration');
        } 
        
        // если данные не совпали, выводим страницу входа
        else
        {
            redirect ('administration/login');            
        }      
    }
    
    // Очищает данные сессии
    public function do_logout()
    {
        $CI =& get_instance();
        
        $ses = array();
        $ses['admin_logined'] = '';
        $ses['admin_hash'] = '';
        
        // Удаляем сессию
        $CI->session->unset_userdata($ses);
        
        redirect ('administration/login');
        
    }
    
    public function the_hash()
    {
        $CI =& get_instance();
        
        $CI->load->library('preferences_lib');
        
        // формирование хэша: пароль + IP + доп. слово
        $hash = md5($CI->preferences_lib->get_preference('admin_pass').$_SERVER['REMOTE_ADDR'].'cigniter');
        
        return $hash;        
    }
    
    // Функция проверки того, был ли совершен вход - проставить во всех контоллерах и функциях, доступ к которым должен быть закрыт паролем
    public function check_admin()
    {
        $CI =& get_instance();
        
        // Если в сессии admin_logined = yes и хэш в сессии совпадает с заново сгенирированным хэшем
        if (($CI->session->userdata('admin_logined') === 'yes') && ($CI->session->userdata('admin_hash') === $this->the_hash()))
        {
            return TRUE; // Просто возвращем значение, если все совпадает
        }
        
        else
        {
            redirect ('administration/login');            
        }                        
    }
}