<?php
include_once DOMAIN.'/entity/User.php';
include_once DOMAIN.'/repository/UserRepository.php';
include_once DOMAIN.'/entity/Result.php';
class LoginController {

    /**
     * Returns a JSON string object to the browser when hitting the root of the domain
     * 
     * @url GET /
     * @url GET /test
     */
    function __construct() {
        
    }

    public function test() {
        return "Hello World";
    }

    /**
     * Logs in a user with the given username and password POSTed. Though true
     * REST doesn't believe in sessions, it is often desirable for an AJAX server.
     * @noAuth
     * @url POST /login
     */
    public function login($data) {
        $userData = $data->user;
        $username = $userData->username;
        $password = $userData->password;
        // validate input and log the user in

        $User = UserRepository::getUser($username, $password);
        $result = new Result();
        if ($User != null) {
            $result->setError('');
            $result->setSuccess(true);
            $result->setMessage('Success');
            $result->setData($User);
        }  else {
            $result->setError('Kullanıcı Adı ve Şifre Doğrulanamadı');
            $result->setSuccess(false);
            $result->setMessage('Failue');
            $result->setData(null);
            
        }
        echo json_encode($result);
    }

    /**
     * Gets the user by id or current user
     *
     * @url GET /users/$id
     * @url GET /users/current
     */
    public function getUser($id = null) {
        if ($id) {
            $user = User::load($id); // possible user loading method
        } else {
            $user = $_SESSION['user'];
        }

        return $user; // serializes object into JSON
    }

    /**
     * Saves a user to the database
     *
     * @url POST /users
     * @url PUT /users/$id
     */
    public function saveUser($id = null, $data) {
        // ... validate $data properties such as $data->username, $data->firstName, etc.
        $data->id = $id;
        $user = UserRepository::create($data); // saving the user to the database
        return $user; // returning the updated or newly created user object
    }

}
