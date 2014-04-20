PHP session manager helper class

Only allows certain session variables to be used. Throws exception if any other variable is used.
This helps stop other coders and yourself from creating unnecessary session variables.



Usage
-----

```php

//Set session variable userID
// *Can only set variables that are allowed
Session::set('userID',5);

//Get the variable userID from the session
//returns emptySet if not set.
$userID = Session:get('userID');

//check if the variable userID exists in the session
Session::exists('userID');

//Delete the variable userID
Session::delete('userID');

//Delete all the variables session variable
Session::deleteAll();


```