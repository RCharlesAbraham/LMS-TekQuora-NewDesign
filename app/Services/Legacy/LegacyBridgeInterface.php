<?php

namespace App\Services\Legacy;

interface LegacyBridgeInterface
{
    public function fetchDashboard(array $context = []): array;

    public function fetchUsers(array $filters = []): array;
}
