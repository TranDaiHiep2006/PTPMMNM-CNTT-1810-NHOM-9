<?php
declare(strict_types=1);

function filterEvents(array $events, string $query, string $category = '',
    bool $availableOnly = false): array
{
    $result = [];
    foreach ($events as $event) {
        // 1. Lọc theo từ khóa (tìm trong title, không phân biệt hoa/thường).
        $matchQuery = $query === ''
            || stripos($event['title'], $query) !== false;
        // 2. Lọc theo loại sự kiện (rỗng nghĩa là không lọc).
        $matchCategory = $category === ''
            || (isset($event['category']) && $event['category'] === $category);
        // 3. Lọc theo tình trạng còn chỗ.
        $matchAvailable = !$availableOnly
            || ((int)$event['capacity'] - (int)$event['registered']) > 0;
        // Kết hợp ba điều kiện bằng AND.
        if ($matchQuery && $matchCategory && $matchAvailable) {
            $result[] = $event;
        }
    }
    return $result;
}
