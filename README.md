# answer53
 гетеры сеттеры в ларавель

# описание задания


Тестовое задание для PHP + Laravel.
Существует понятие model в Laravel. В модели есть свойства, которые берут свои названия из столбцов БД. Обычно по стандартам SQL мы в БД составные слова пишем через нижнее подчеркивание, например group_name, file_name и т.д. Далее названия этих колонок траслируются в model laravel как group_name, file_name. Задача: сделать трансляцию имен столбцов из БД в модель в camelCase, например group_name -> groupName, file_name -> fileName. По итогу, что бы могли обращаться к свойствам модели в camelCase, например: $media->fileName, $role->groupName.

    Нужно учесть, что мы будем получать эти свойства из модели, а так же записывать и сохранять. То есть при сохранении модели, мы не должны получать ошибок, преобразования должны работать в обе стороны.
    Предлагается выполнить задание, при этом сам процесс выполнения записать на видео. Никакого монтажа делать не нужно, скидывать несколько файлов с записями, если были паузы. Можно использовать https://obsproject.com/ru или любой другой софт для записи видео с рабочего стола.
    Никаких ограничений в использовании справочных материалов при выполнении не накладывается (google, stackoverflow и т.д.). Будет плюсом, если процесс поиска информации вы так же запишите на видео.
    Код должен быть выложен на github.
    Видеозаписи должны быть выложены на любое бесплатное хранилище файлов (google, mailru, yandex).


Срок выполнения задания: не более 1 дня с момента получения.

 