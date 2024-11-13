<?php

class DB
{
    public const HOST = "localhost";
    public const DBNAME = "ronin";
    public const USERNAME = "root";
    public const PASSWORD = "";

    /**
     * PDO connection object
     *
     * @var \PDO
     */
    protected static $_conn = null;

    /**
     * PDOStatement object used by Database class
     *
     * @var \PDOStatement
     */
    protected static $_stmt = null;

    /**
     * Method returns the connection to the database
     *
     * @throws \PDOException
     *
     * @return PDO connection object
     */
    public static function getConnection()
    {
        try {
            if (self::$_conn === null) {
                self::$_conn = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DBNAME, self::USERNAME, self::PASSWORD, [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]);
            }
        } catch (PDOException $e) {
            error_log("Database Connection Error: " . $e->getMessage(), 0);
            throw $e;
        }

        return self::$_conn;
    }

    /**
     * Query performs query on the database
     *
     * @param string $sql SQL query to be performed
     * @param array $params Parameters to be bound
     * @return PDOStatement|bool
     */
    public static function query($sql, $params = [])
    {
        try {
            self::$_stmt = self::getConnection()->prepare($sql);
            self::$_stmt->execute($params);

            if (strstr($sql, "SELECT") !== false) {
                return self::$_stmt;
            }

            return self::$_stmt->rowCount();
        } catch (PDOException $e) {
            error_log("Database Query Error: " . $e->getMessage(), 0);
            throw $e;
        }
    }

    /**
     * Login method to verify user credentials
     *
     * @param string $username
     * @param string $password
     * @return bool|array Returns user data on success, false on failure
     */
    public static function login($username, $password)
    {
        $sql = "SELECT id, full_name, password FROM users WHERE username = :username";
        $stmt = self::query($sql, ['username' => $username]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($password, $user['password'])) {
            return $user; // Returns user data on successful login
        }

        return false; // Login failed
    }

    /**
     * Get all users from the users table
     *
     * @return array
     */
    public static function getUsers()
    {
        $sql = "SELECT id, full_name FROM users";
        $stmt = self::query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Get all providers from the providers table
     *
     * @return array
     */
    public static function getProviders()
    {
        $sql = "SELECT id, full_name FROM providers";
        $stmt = self::query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Get all verified providers from the providers table
     *
     * @return array
     */
    public static function getVerifiedProviders()
    {
        $sql = "SELECT id, full_name FROM providers WHERE verified = 1";
        $stmt = self::query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Close the database connection
     */
    public static function closeConnection()
    {
        self::$_conn = null;
    }

    /**
     * Get the PDOStatement object
     *
     * @return \PDOStatement|null
     */
    public static function getStmt()
    {
        return self::$_stmt;
    }
}

// Close the connection when the script ends
register_shutdown_function([DB::class, 'closeConnection']);
