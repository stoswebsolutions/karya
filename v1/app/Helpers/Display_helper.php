<?php
function error($validation, $field)
{
    if ($validation->hasError($field)) {
        return $validation->getError($field);
    } else {
        return false;
    }
}
