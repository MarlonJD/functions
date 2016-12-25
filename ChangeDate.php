<?php
function humanTiming ($time)
        {

            $time = time() - $time; // to get the time since that moment
            $time = ($time<1)? 1 : $time;
            $tokens = array (
                31536000 => 'year',
                2592000 => 'month',
                604800 => 'week',
                86400 => 'day',
                3600 => 'hour',
                60 => 'minute',
                1 => 'second'
            );

            foreach ($tokens as $unit => $text) {
                if ($time < $unit) continue;
                $numberOfUnits = floor($time / $unit);
                return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
            }

        }

echo humanTiming(1482691832), " Ago"; //TimeStamp 1482691832 (12/25/2016 @ 6:50pm (UTC)) --> for example "5 Minute Ago"
?>

<?php
function humanTimingTurk ($time)
        {

            $time = time() - $time; // to get the time since that moment
            $time = ($time<1)? 1 : $time;
            $tokens = array (
                31536000 => 'Yıl',
                2592000 => 'Ay',
                604800 => 'Hafta',
                86400 => 'Gün',
                3600 => 'Saat',
                60 => 'Dakika',
                1 => 'Saniye'
            );

            foreach ($tokens as $unit => $text) {
                if ($time < $unit) continue;
                $numberOfUnits = floor($time / $unit);
                return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'':'');
            }

        }

echo humanTimingTurk(1482691832), " Önce";  //TimeStamp 1482691832 (12/25/2016 @ 6:50pm (UTC)) --> "5 Dakika Önce" Şekline dönüştürür.
?>