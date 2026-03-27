<?php

require __DIR__ . '/vendor/autoload.php';
$app = require __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\User;
use Illuminate\Support\Facades\Hash;

$email = 'admin@tekquora.local';
$password = 'Admin@12345';

$user = User::firstOrNew(['email' => $email]);
$user->role_id = 1;
$user->name = 'Admin User';
$user->username = 'admin';
$user->password = Hash::make($password);
$user->is_active = 1;
$user->status = 1;
$user->email_verify = 1;
$user->email_verified_at = now();

if (empty($user->language_id)) {
    $user->language_id = '19';
}
if (empty($user->language_code)) {
    $user->language_code = 'en';
}
if (empty($user->language_name)) {
    $user->language_name = 'English';
}
if (empty($user->currency_id)) {
    $user->currency_id = 112;
}
if (property_exists($user, 'lms_id') && empty($user->lms_id)) {
    $user->lms_id = 1;
}
if (property_exists($user, 'policy_id') && empty($user->policy_id)) {
    $user->policy_id = 1;
}

$user->save();

echo 'ADMIN_CREATED id=' . $user->id . ' email=' . $user->email . ' role=' . $user->role_id . PHP_EOL;
