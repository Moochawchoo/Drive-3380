<?php
/**
* PHPLogin\AuthorizationHandler extends DbConn
*/
namespace PHPLogin;

/**
* Handles authorization functions
*
* Includes methods for checking session keys, user roles and permissions
*/
class AuthorizationHandler extends DbConn
{
    /**
     * Imports Role Trait
     * Includes `checkRole` function
     * @var RoleTrait
     */
    use Traits\RoleTrait;
    /**
     * Imports Permission Trait
     * Includes `checkPermission` function
     * @var PermissionTrait
     */
    use Traits\PermissionTrait;

    /**
     * Administrative roles
     * @var array
     */
    protected $adminroles = ['Admin', 'Superadmin'];

    /**
     * Checks if key exists in $_SESSION superglobal
     *
     * @param  string $key Name of key to check
     *
     * @return mixed Returns session value of given key if found, or false if not
     */
    private function checkSessionKey($key)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION[$key])) {
            return false;
        }
        return $_SESSION[$key];
    }

    /**
     * Checks if session IP address equals $_SERVER["REMOTE_ADDR"]
     *
     * @return boolean
     */
    private function sessionValid(): bool
    {
        return $_SERVER["REMOTE_ADDR"] == $this->checkSessionKey("ip_address");
    }

    /**
     * Checks if current user has given role
     *
     * @param  string $roleName Role name
     *
     * @return boolean
     */
    public function hasRole($roleName): bool
    {
        switch ($roleName) {
          case null:
            return true;
          case 'loginpage':
            return true;
          case 'Admin':
            return $this->isAdmin();
          case 'Superadmin':
            return $this->isSuperAdmin();
          case 'DriverRider':
            return $this->isRider() || $this->isDriver();
          default:
            return ($this->checkRole($this->checkSessionKey("uid"), $roleName) != false || $this->isAdmin()) && $this->sessionValid();
        }
    }

    /**
     * Checks if current user has given permission
     *
     * @param  string  $permissionName Permission name
     *
     * @return boolean
     */
    public function hasPermission($permissionName): bool
    {
        return ($this->checkPermission($this->checkSessionKey("uid"), $permissionName) != false || $this->isSuperAdmin()) && $this->sessionValid();
    }

    /**
     * Checks if current user belongs to the Superadmin role
     *
     * @return boolean
     */
    public function isSuperAdmin(): bool
    {
        return $this->checkRole($this->checkSessionKey("uid"), "Superadmin") != false && $this->sessionValid();
    }

    /**
     * Checks if current user belongs to the Admin role
     *
     * @return boolean
     */
    public function isAdmin(): bool
    {
        return ($this->checkRole($this->checkSessionKey("uid"), "Admin") != false || $this->isSuperAdmin()) && $this->sessionValid();
    }

    /**
     * Checks if session has registered username and if session IP address is valid
     *
     * @return bool
     */
    public function isLoggedIn(): bool
    {
        return $this->checkSessionKey("username") != false && $this->sessionValid();
    }

    //ADDED CHECKS

    /**
     * Checks user for Rider role
     * Options given to Admin and SuperAdmin for testing/moderation purposes
     * 
     * @return boolean
     */
    public function isRider(): bool
    {
        return ($this->checkRole($this->checkSessionKey("uid"), "Rider") != false || $this->isAdmin()) && $this->sessionValid();
    }

    /**
     * Checks user for Driver role
     * Options given to Admin and SuperAdmin for testing/moderation purposes
     * 
     * @return boolean
     */
    public function isDriver(): bool
    {
        return ($this->checkRole($this->checkSessionKey("uid"), "Driver") != false || $this->isAdmin() || $this->isRider()) && $this->sessionValid();
    }
}
