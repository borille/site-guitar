<?php

class Admin_Model_Admin extends My_Model_Abstract implements Zend_Acl_Role_Interface
{
    private $adminId;
    private $adminUser;

    /**
     * Returns the string identifier of the Role
     *
     * @return string
     */
    public function getRoleId()
    {
        return 'A';
    }

    /**
     * @param mixed $adminId
     */
    public function setAdminId($adminId)
    {
        $this->adminId = $adminId;
    }

    /**
     * @return mixed
     */
    public function getAdminId()
    {
        return $this->adminId;
    }

    /**
     * @param mixed $adminUser
     */
    public function setAdminUser($adminUser)
    {
        $this->adminUser = $adminUser;
    }

    /**
     * @return mixed
     */
    public function getAdminUser()
    {
        return $this->adminUser;
    }

    public function getLanguage()
    {
        return 'pt';
    }


}

