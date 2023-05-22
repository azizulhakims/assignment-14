<!-- Question 1:

You have a Laravel application with a form that submits user information using a POST request. Write the code to retrieve the 'name' input field value from the request and store it in a variable called $name. -->

 use Illuminate\Http\Request;


// ...

 

public function store(Request $request)

{

    $name = $request->input('name');

 

    // You can now use the $name variable as needed.

    // For example, you can store it in the database or perform any other operations.

 

    // ...

}

<!-- Question 2:

In your Laravel application, you want to retrieve the value of the 'User-Agent' header from the current request. Write the code to accomplish this and store the value in a variable called $userAgent.

 use Illuminate\Http\Request; -->

 

// ...

 

public function someMethod(Request $request)

{

    $userAgent = $request->header('User-Agent');

 

    // You can now use the $userAgent variable as needed.

    // For example, you can store it in the database or perform any other operations.

 

    // ...

}

<!-- Question 3:

You are building an API endpoint in Laravel that accepts a GET request with a 'page' query parameter. Write the code to retrieve the value of the 'page' parameter from the current request and store it in a variable called $page. If the parameter is not present, set $page to null.

  -->

use Illuminate\Http\Request;

 

// ...

 

public function someMethod(Request $request)

{

    $page = $request->input('page', null);

 

    // You can now use the $page variable as needed.

    // If the 'page' parameter is not present in the request, $page will be null.

 

    // ...

}

 

<!-- Question 4:

Create a JSON response in Laravel with the following data: -->

 

{

    "message": "Success",

    "data": {

        "name": "John Doe",

        "age": 25

    }

}

Ans:

use Illuminate\Http\Response;

 

// ...

 

public function someMethod()

{

    $data = [

        'name' => 'John Doe',

        'age' => 25

    ];

 

    $response = response()->json([

        'message' => 'Success',

        'data' => $data

    ], Response::HTTP_OK);

 

    return $response;

}

<!-- Question 5:

You are implementing a file upload feature in your Laravel application. Write the code to handle a file upload named 'avatar' in the current request and store the uploaded file in the 'public/uploads' directory. Use the original filename for the uploaded file. -->

 

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

 

// ...

 

public function uploadAvatar(Request $request)

{

    if ($request->hasFile('avatar')) {

        $file = $request->file('avatar');

        $originalFilename = $file->getClientOriginalName();

        $filePath = $file->storeAs('uploads', $originalFilename, 'public');

 

        // You can now use the $filePath variable as needed.

        // It contains the relative path of the uploaded file.

 

        // ...

    }

 

    // ...

}

 

<!-- Question 6:

Retrieve the value of the 'remember_token' cookie from the current request in Laravel and store it in a variable called $rememberToken. If the cookie is not present, set $rememberToken to null. -->

 use Illuminate\Http\Request;

 

// ...

 

public function someMethod(Request $request)

{

    $rememberToken = $request->cookie('remember_token', null);

 

    // You can now use the $rememberToken variable as needed.

    // If the 'remember_token' cookie is not present, $rememberToken will be null.

 

    // ...

}

<!-- Question 7:

Create a route in Laravel that handles a POST request to the '/submit' URL. Inside the route closure, retrieve the 'email' input parameter from the request and store it in a variable called $email. Return a JSON response with the following data: -->

{

    "success": true,

    "message": "Form submitted successfully."

}

 

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

 

Route::post('/submit', function (Request $request) {

    $email = $request->input('email');

 

    // You can now use the $email variable as needed.

    // For example, you can store it in the database or perform any other operations.

 

    $response = [

        'success' => true,

        'message' => 'Form submitted successfully.'

    ];

 

    return response()->json($response);

});

 

 

 

 
	
