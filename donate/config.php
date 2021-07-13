<?php

class Config
{
    // Ваш секретный ключ (из настроек проекта в личном кабинете UnitPay )
    const SECRET_KEY = 'a48da8e1a96a699a0a6f818257319978';
    // Стоимость товара в руб.
    const ITEM_PRICE = 1;

    // Таблица начисления товара, например `users`
    const TABLE_ACCOUNT = 'dle_users';
    // Название поля из таблицы начисления товара по которому производится поиск аккаунта/счета, например `email`
    const TABLE_ACCOUNT_NAME = 'name';
    // Название поля из таблицы начисления товара которое будет увеличено на колличево оплаченого товара, например `sum`, `donate`
    const TABLE_ACCOUNT_DONATE= 'balance';

    // Параметры соединения с бд
    // Хост
    const DB_HOST = '212.22.93.36';
    // Имя пользователя
    const DB_USER = 'spwpoksb';
    // Пароль
    const DB_PASS = 'Py156atBd4';
    // Назывние базы
    const DB_NAME = 'spwpoksb_35069';
    // номер порта(необязательно)
    const DB_PORT = '';

}