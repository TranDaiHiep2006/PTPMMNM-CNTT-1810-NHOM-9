<?php

declare(strict_types=1);
require_once __DIR__ . '/Database.php';
function registrationStats(mysqli $connection, int $eventId): array
{
    $sql = 'SELECT events.id AS event_id, events.title AS title, COUNT(registrations.id) AS total
            FROM events
            LEFT JOIN registrations ON registrations.event_id = events.id
            WHERE events.id = ?
            GROUP BY events.id, events.title';

    $statement = queryParams($connection, $sql, [$eventId]);
    try {
        $row = $statement->get_result()->fetch_assoc();
    } finally {
        $statement->close();
    }

    if ($row === null || $row === false) {
        return [];
    }

    return [
        'event_id' => (int)$row['event_id'],
        'title' => (string)$row['title'],
        'total' => (int)$row['total'],
    ];
}
