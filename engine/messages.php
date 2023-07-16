<?php

function getMessages(): array {
    return [
        'OK' => 'Файл загружен',
        'ERROR' => 'Ошибка',
        'ERROR_SIZE' => 'Размер файла не больше 5 мб',
        'ERROR_SCRIPT' => 'Загрузка php-файлов запрещена!',
        'ERROR_NOT_IMAGE' => 'Можно загружать только jpg-файлы, неверное содержание файла, не изображение.',
        'ERROR_TYPE' => 'Можно загружать только jpg-файлы, неверное содержание файла, не изображение.',
    ];
}