<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\CustomPaymentController;
use App\Http\Controllers\CustomPolicyController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\CustomerDocumentController;

use App\Models\Notes;
use App\Models\CustomPayment;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');

Route::get('/dashboard', function () {
    $totalCustomers = CustomPayment::count(); // Assuming you have a 'Customer' model and table
    $totalToDoTasks = Notes::where('todo_list', true)->count();
    $totalRemainders = Notes::where('remainder', true)->count();
    $customers = CustomPayment::whereNotNull('next_pay')->get();

    // $remainders = Notes::orderBy('id','DESC')->get()->all();
    $remainders = Notes::where('remainder', true)
    ->where('status', '!=', 'Complete')
    ->orderByDesc('created_at')
    ->get();

    $taskList = CustomPayment::leftJoin('notes', 'custom_payments.email', '=', 'notes.customer_email')
    ->select('custom_payments.id', 'custom_payments.name', 'custom_payments.email')
    ->selectRaw('COUNT(DISTINCT CASE WHEN notes.todo_list = 1 THEN notes.id ELSE NULL END) as total_todo')
    ->selectRaw('SUM(notes.remainder) as total_remainders')
    ->groupBy('custom_payments.id', 'custom_payments.name', 'custom_payments.email')
    ->havingRaw('total_todo > 0 OR total_remainders > 0')
    ->get();

    return view('dashboard', compact('totalCustomers', 'totalToDoTasks', 'totalRemainders','taskList', 'remainders','customers'));
    // return view('dashboard', compact('totalCustomers', 'totalToDoTasks', 'totalRemainders', 'remainders'));
}
)->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('roles', RoleController::class);
Route::resource('permissions', PermissionController::class);
Route::resource('users', UserController::class);
// Route::group(['middleware' => ['permission:SuperAdmin']], function () {
// //Roles Moved
// });
Route::group(['middleware' => ['permission:agency']], function () {
    Route::resource('agency', AgencyController::class);
});


Route::group(['middleware' => ['permission:customer']], function () {
    Route::resource('customer', CustomerController::class);
});


Route::group(['middleware' => ['permission:vendor']], function () {
    Route::resource('vendor', VendorController::class);
});
// Route::group(['middleware' => ['permission:agent']], function () {
//     Route::resource('agent', AgentController::class);
// });
Route::group(['middleware' => ['permission:product']], function () {
    Route::resource('product', ProductController::class);
});
Route::group(['middleware' => ['permission:carrier']], function () {
    Route::resource('carrier', CarrierController::class);
});

//Permissions Moved

Route::group(['middleware' => ['permission:employee']], function () {
   Route::resource('employee', EmployeeController::class);
});



Route::resource('payment', CustomPaymentController::class);
// payment search

Route::get('payment', [CustomPaymentController::class, 'index'])->name('payment.index');



//Seeting this route requires index functionality
// un comment this later
Route::resource('policy', CustomPolicyController::class);
Route::resource('pay', PayController::class);


//TODO: add this route to the resource controller
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');






require __DIR__.'/auth.php';
// // Route::get('/policy', function () {
// //     return view('policy.create');
// // });
// Route::get('/employee', function () {
//     return view('employee.create');
// });
Route::get('/view', function () {
    return view('agents.view');
});

Route::get('record', function () {
    return view('record.index');
});

Route::get('record/create', function () {
    return view('record.create');
});

Route::get('record/create', function () {
    return view('record.create');
});

Route::get('record/todo', [CustomPolicyController::class, 'todo']);
Route::get('todo/create', [CustomPolicyController::class, 'todo_create']);
Route::get('record/remainder', [CustomPolicyController::class, 'remainder']);
Route::get('reminder/create', [CustomPolicyController::class, 'reminder_create']);

Route::get('document/{id}', [CustomPaymentController::class, 'document']);



// With these lines:
// Route::get('policy/todo', [CustomPolicyController::class, 'todo'])->name('policy.todo');
// Route::get('policy/remainder', [CustomPolicyController::class, 'remainder'])->name('policy.remainder');


// Create a new customer document
// Route::post('/customer-documents', 'CustomerDocumentController@store');

// View a customer document

// Route::get('/customer-documents/{document}', 'CustomerDocumentController@show');
// Route::put('/customer-documents/{document}', 'CustomerDocumentController@update');
// Route::delete('/customer-documents/{document}', 'CustomerDocumentController@destroy');

// Show customer documents and upload new documents for a specific customer
// Route::get('/customer-documents/{customerId}', 'CustomerDocumentController@index')->name('customer-documents.index');
Route::get('customer-documents/{customerId}', [CustomerDocumentController::class, 'index'])->name('customer-documents.index');
Route::post('customer-documents/{customerId}', [CustomerDocumentController::class, 'store'])->name('customer-documents.store');


// Route::post('/customer-documents/{customerId}', 'CustomerDocumentController@store')->name('customer-documents.store');
