<?php
declare(strict_types=1);
final class RegistrationPolicy {
    public function decide(int $capacity, int $registered,
        bool $open, bool $waitingEnabled): string {
        // 1. Kiểm tra dữ liệu không hợp lệ trước.
        if ($capacity <= 0 || $registered < 0 || $registered > $capacity) {
            return 'rejected';
        }
        // 2. Sự kiện đóng, kể cả khi còn chỗ.
        if (!$open) {
            return 'rejected';
        }
        // 3. Dữ liệu hợp lệ, sự kiện mở: xét số chỗ.
        if ($registered < $capacity) {
            return 'confirmed';
        }
        // 4. Hết chỗ: chờ hay từ chối tuỳ cấu hình danh sách chờ.
        return $waitingEnabled ? 'waiting' : 'rejected';
    }
}
