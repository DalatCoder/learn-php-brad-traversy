<?php
function truncatePostBody($content) {
    if (strlen($content) > 200) {
        return substr($content, 0, 200) . '...';
    }

    return $content;
}