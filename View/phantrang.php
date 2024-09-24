<?php

$html_pagination = '';

foreach (range(1, $total_page) as $i) {
    $link = 'index.php?pg=recipes&page=' . $i;
    $html_pagination .= '<a class="page-link' . ($i === $current_page ? ' active' : '') . '" href="' . $link . '">' . $i . '</a>';
}

$prev_page_link = 'index.php?pg=recipes&page=' . max(1, $current_page - 1);
$next_page_link = 'index.php?pg=recipes&page=' . min($total_page, $current_page + 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination Example</title>
</head>

<body>
    <div class="pagination">
        <a class="page-link" href="<?= $prev_page_link ?>" aria-label="Previous">&laquo;</a>
        <?= $html_pagination; ?>
        <a class="page-link" href="<?= $next_page_link ?>" aria-label="Next">&raquo;</a>
    </div>
</body>

</html>
