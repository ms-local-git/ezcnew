<?php

function mTh($minutes)
{
    $hours = intdiv($minutes, 60);
    $mins  = $minutes % 60;
    return "{$hours}:{$mins}";
}


if (!function_exists('calculate_attendance_minutes')) {

    /**
     * Calculate total, day, and night minutes
     *
     * @param string $checkIn  datetime (Y-m-d H:i:s)
     * @param string $checkOut datetime (Y-m-d H:i:s)
     * @return array
     */
    function calculate_attendance_minutes(string $checkIn, string $checkOut): array
    {
        $start = new DateTime($checkIn);
        $end   = new DateTime($checkOut);

        if ($end <= $start) {
            return [
                'minutes'       => 0,
                'day_minutes'   => 0,
                'night_minutes' => 0,
            ];
        }

        $totalMinutes = 0;
        $dayMinutes   = 0;
        $nightMinutes = 0;

        $current = clone $start;

        while ($current < $end) {
            $next = (clone $current)->modify('+1 minute');

            if ($next > $end) {
                $next = $end;
            }

            $hour = (int) $current->format('H');

            // Day time: 06:00 - 22:00
            if ($hour >= 6 && $hour < 22) {
                $dayMinutes++;
            } else {
                $nightMinutes++;
            }

            $totalMinutes++;
            $current = $next;
        }

        return [
            'minutes'       => $totalMinutes,
            'day_minutes'   => $dayMinutes,
            'night_minutes' => $nightMinutes,
        ];
    }
}

?>