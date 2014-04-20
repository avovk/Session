PHP session manager helper class

Benefits:
- Only allows certain session variables to be used. Throws exception if any other variable is used.
This helps stop other coders and yourself from creating unnecessary session variables.
- Easily change the session variable that all of the code is using to avoid merging conflicts.


Usage
-----

```php
/**
* Edit $_config variable at the top to set which session variables are allowed
* $_config = ['userID' => 'sessionUserID'];
* Means that "userID" can be set in the argument to set the "sessionUserID" session variable.
*/

//Set session variable userID
// *Can only set variables that are allowed
Session::set('userID',5);

//Get the variable userID from the session
//returns empty set if not set.
$userID = Session:get('userID');

//check if the variable userID is allowed to be used by checking if it's in $_config
if(Session::inConfig('userID')){
    return true;
}

//check if the variable userID exists in the session
if(Session::exists('userID')){
    return true
};

//Delete the variable userID
Session::delete('userID');

//Delete all the session variable that are in $_config
Session::deleteAll();


```

