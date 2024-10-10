<?php
// مسار ملف يحتوي على عدد الزوار
$file = "counter.txt";

// قراءة عدد الزوار الحالي من الملف
$counter = file_exists($file) ? file_get_contents($file) : 0;

// زيادة العدد بمقدار 1
$counter++;

// حفظ العدد الجديد في الملف
file_put_contents($file, $counter);

// عرض عدد الزوار
echo $counter;
?>
