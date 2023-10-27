<?php

namespace Creode\BulkUploadField\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UploadController extends Controller {
    public function __invoke(Request $request) {
        // Handle the upload...
        dd($request->all());
    }
}
