<?php

use Illuminate\Support\Facades\Route;
use Tapp\LaravelUppyS3MultipartUpload\Http\Controllers\UppyS3MultipartController;

Route::middleware('auth:sanctum')->post('/s3/multipart', [UppyS3MultipartController::class, 'createMultipartUpload']);

Route::options('/s3/multipart', [UppyS3MultipartController::class, 'createMultipartUploadOptions']);

Route::middleware('auth:sanctum')->get('/s3/multipart/{uploadId}', [UppyS3MultipartController::class, 'getUploadedParts']);

Route::middleware('auth:sanctum')->get('/s3/multipart/{uploadId}/batch', [UppyS3MultipartController::class, 'prepareUploadParts']);

Route::middleware('auth:sanctum')->post('/s3/multipart/{uploadId}/complete', [UppyS3MultipartController::class, 'completeMultipartUpload']);

Route::middleware('auth:sanctum')->delete('/s3/multipart/{uploadId}', [UppyS3MultipartController::class, 'abortMultipartUpload']);
