<?php

namespace App\Services\Legacy;

use Illuminate\Support\Facades\Log;

class LegacyIncludeBridgeService implements LegacyBridgeInterface
{
    public function fetchDashboard(array $context = []): array
    {
        return $this->includeScript(
            config('legacy.scripts.dashboard', 'public/old/api/dashboard.php'),
            $context
        );
    }

    public function fetchUsers(array $filters = []): array
    {
        return $this->includeScript(
            config('legacy.scripts.users', 'public/old/api/users.php'),
            $filters
        );
    }

    protected function includeScript(string $relativePath, array $params = []): array
    {
        $basePath = base_path();
        $fullPath = $basePath.'/'.ltrim(str_replace('\\', '/', $relativePath), '/');
        $allowedRoot = rtrim(str_replace('\\', '/', (string) config('legacy.include_allow_root', 'public/old')), '/');
        $fullPathNormalized = str_replace('\\', '/', $fullPath);

        if (! str_contains($fullPathNormalized, '/'.$allowedRoot.'/')) {
            Log::warning('Legacy include bridge blocked script outside allowlist root.', [
                'script' => $relativePath,
            ]);

            return [];
        }

        if (! is_file($fullPath)) {
            return [];
        }

        try {
            ob_start();
            $result = (static function (string $scriptFile, array $input) {
                $_GET = array_merge($_GET, $input);
                return include $scriptFile;
            })($fullPath, $params);
            $output = (string) ob_get_clean();

            if (is_array($result)) {
                return $result;
            }

            $decoded = json_decode($output, true);

            return is_array($decoded) ? $decoded : [];
        } catch (\Throwable $exception) {
            ob_end_clean();
            Log::warning('Legacy include bridge script failed.', [
                'script' => $relativePath,
                'error' => $exception->getMessage(),
            ]);

            return [];
        }
    }
}
