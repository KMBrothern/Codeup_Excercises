<?php

   require_once 'users_login.php';

class Model {

    protected static $dbc;
    protected static $table;

    public $attributes = array();

    /*
     * Constructor
     */
    public function __construct()
    {
        self::dbConnect();
    }

    /*
     * Connect to the DB
     */
    private static function dbConnect()
    {
        if (!self::$dbc)
        {
            self::$dbc = new PDO(
                'mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS
                );
            self::$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo 'You are now connected to the database' . PHP_EOL;

        }
    }

    /*
     * Get a value from attributes based on name
     */
    public function __get($name)
    {
        // @TODO: Return the value from attributes with a matching $name, if it exists
        if (array_key_exists($name, $this->attributes)) 
        {

            return $this->attributes[$name];
        }

        return null;
    }



    /*
     * Set a new attribute for the object
     */
    public function __set($name, $value)
    {
        // @TODO: Store name/value pair in attributes array
         $this->attributes[$name] = $value;
    }

    /*
     * Persist the object to the database
     */
    public function save()
    {
        $query = 'SELECT * FROM contacts WHERE email = :email';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($result['email']))
        {
            $this->update();
        } else {
            $this->insert();
        }
    }

        // @TODO: Perform the proper action - if the key is set, this is an update, if not it is a insert
    protected function update()
    {
        $query = "UPDATE contacts 
        SET name = ':name', email = ':email'
        WHERE :email = $this->attributes['email']";
        $stmt = $dbc->prepare($query);

            $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
            $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
            $stmt->execute();


        echo "Updated ID: " . self::$dbc->lastInsertId() . PHP_EOL;
    
        echo "The update() method was called by the save() method";
    }

     protected function insert()
     {   
        $query = "INSERT INTO contacts (id, name, email)
        VALUES (:id, :name, :email)";
        
        $stmt = self::$dbc->prepare($query);

        $stmt->bindValue(':id', $this->id, PDO::PARAM_STR);
        $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
        $stmt->execute();
        echo "Inserted ID: " . self::$dbc->lastInsertId() . PHP_EOL;

        echo "The insert() method was called by the save() method" . PHP_EOL;
        
    }
        

    //     // @TODO: Ensure that update is properly handled with the id key

    //     // @TODO: After insert, add the id back to the attributes array so the object can properly reflect the id

    //     // @TODO: You will need to iterate through all the attributes to build the prepared query
 
    //     // @TODO: Use prepared statements to ensure data security

    // /*
    //  * Find a record based on an id
    //  */
    // }
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements

        $query = "SELECT * FROM contacts WHERE id = $id";
        $results = self::$dbc->query($query)->fetchAll(PDO::FETCH_ASSOC);
        return $results;


        // @TODO: Store the result set in a variable named $result

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }

    /*
     * Find all records in a table
     */
    public static function all()
    {
        self::dbConnect();

        // @TODO: Learning from the previous method, return all the matching records
        $query  = 'SELECT * FROM contacts';
        $results = self::$dbc->query($query)->fetchAll(PDO::FETCH_ASSOC);
        return $results;

      
    }

}


