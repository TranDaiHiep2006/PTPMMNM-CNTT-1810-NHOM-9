<?php
declare(strict_types=1);
// Bài tự làm: chỉ cho phép hoàn tất mô phỏng khi bản nháp phía máy chủ còn hạn và đúng sự kiện.
function canComplete(array $session, int $requestedEventId, int $now, int $ttl): bool {
    // Thời gian sống không dương thì không có bản nháp nào còn hiệu lực.
    if ($ttl <= 0) { return false; }

    // Phải có bản nháp và bản nháp phải là mảng hợp lệ.
    if (!isset($session['draft']) || !is_array($session['draft'])) { return false; }
    $draft = $session['draft'];

    // data phải là mảng và phải có khoá event_id.
    if (!isset($draft['data']) || !is_array($draft['data'])) { return false; }
    $data = $draft['data'];
    if (!array_key_exists('event_id', $data) || !is_scalar($data['event_id'])) { return false; }

    // Bản nháp phải được tạo cho đúng sự kiện đang yêu cầu.
    if ((int)$data['event_id'] !== $requestedEventId) { return false; }

    // created_at bắt buộc là số hợp lệ, nếu không thì coi như không xác định được tuổi nháp.
    if (!array_key_exists('created_at', $draft) || !is_numeric($draft['created_at'])) { return false; }
    $createdAt = (int)$draft['created_at'];

    // Bản nháp không được tạo ở tương lai.
    if ($createdAt > $now) { return false; }

    // Tuổi nháp là now - created_at; đúng ngưỡng TTL đã hết hạn nên so sánh nghiêm ngặt.
    return ($now - $createdAt) < $ttl;
}