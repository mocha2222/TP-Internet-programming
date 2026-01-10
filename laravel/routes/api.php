<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TaskController;

// Get logged-in user info
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user()->load('roles');
});

// Group all routes under auth:api middleware
Route::middleware('auth:api')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Category Routes
    |--------------------------------------------------------------------------
    */
    Route::controller(CategoryController::class)->prefix('categories')->group(function () {
        Route::get('/', 'getCategories');                  // View all categories
        Route::post('/', 'createCategory');                // Create category
        Route::get('/{categoryId}', 'getCategory');       // View single category
        Route::patch('/{categoryId}', 'updateCategory');  // Update category
        Route::delete('/{categoryId}', 'deleteCategory'); // Delete category
    });

    /*
    |--------------------------------------------------------------------------
    | Product Routes
    |--------------------------------------------------------------------------
    */
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('/', 'getProducts');                           // View all products
        Route::post('/', 'createProduct');                        // Create product
        Route::get('/{productId}', 'getProduct');                 // View single product
        Route::patch('/{productId}', 'updateProduct');            // Update product
        Route::delete('/{productId}', 'deleteProduct');           // Delete product
        Route::get('/category/{categoryId}/products', 'getProductsByCategory'); // Products by category
    });

    /*
    |--------------------------------------------------------------------------
    | Task Routes
    |--------------------------------------------------------------------------
    | Only accessible to authenticated users. Policies enforce roles/permissions.
    */
    Route::get('/tasks/{id}', [TaskController::class, 'show']);           // View single task
    Route::patch('/tasks/{id}/status', [TaskController::class, 'updateStatus']); // Update task status
});

/*
|--------------------------------------------------------------------------
| Token Login Route
|--------------------------------------------------------------------------
| This route generates a Passport access token.
*/
Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (!auth()->attempt($request->only('email', 'password'))) {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    $user = auth()->user();
    $token = $user->createToken('mobile')->accessToken;

    return response()->json([
        'token' => $token,
        'user' => $user->load('roles')
    ]);
});
