# groupbwt-academy
Для запуску потрібен docker та docker-compose

Інструкція з налаштування проекту:

Склонувати проект
```
git clone git@github.com:KlimKosenko/groupbwt-academy.git
```
Перейти в папку з проектом
```
cd groupbwt-academy
```
Підняти контейнери
```
docker-compose up nginx -d
```
Встановити залежності:
```
docker-compose run --rm composer install
```
Виконати міграції:
```
docker-compose run --rm artisan migrate
```
Заповнити базу даними:
```
docker-compose run --rm artisan db:seed
```

