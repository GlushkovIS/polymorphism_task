<?php

interface DriverCommon
{
    public function drive();

    public function repair();
}


class CarDriver implements DriverCommon
{
    public function drive()
    {
        echo 'Умею водить.';
    }

    public function repair()
    {
        echo 'За сервис заплачу!';
    }
}

class CarDriverYoung extends CarDriver
{
    public function drive()
    {
        echo 'Пристегните ремни! ';
        parent::drive();
    }
}

class CarDriverOld extends CarDriver
{
    public function drive()
    {
        parent::drive();
        echo ' Прочь с дороги';
    }

    public function repair()
    {
        echo 'Сам починю!';
    }

}


class BusDriverCommon implements DriverCommon
{
    public function drive()
    {
        echo 'Осторожно двери закрываются!';
    }

    public function repair()
    {
        echo 'Пора на автоколонну 1213.';
    }
}

class BusDriverYoung extends BusDriverCommon
{
    public function repair()
    {
        echo 'Починю сам.';
    }
}


class BusDriverOld extends BusDriverCommon
{
    public function drive()
    {
        echo 'Включаем радио шансон и поехали!';
    }
}

$carDriverOld = new CarDriverOld();
$carDriverYoung = new CarDriverYoung();
$busDriverOld = new BusDriverOld();
$busDriverYoung = new BusDriverYoung();

echo '<hr>';
echo 'Car Driver' . '<br>';
echo 'Car Driver Old: ' . '<br>';
$carDriverOld->drive();
echo '<br>';
$carDriverOld->repair();
echo '<br>';
echo 'Car Driver Young: ' . '<br>';
$carDriverYoung->drive();
echo '<br>';
$carDriverYoung->repair();
echo '<br>';
echo '<hr>';

echo 'Bus Driver' . '<br>';
echo 'Bus Driver Old: ' . '<br>';
$busDriverOld->drive();
echo '<br>';
$busDriverOld->repair();
echo '<br>';
echo 'Bus Driver Young: ' . '<br>';
$busDriverYoung->drive();
echo '<br>';
$busDriverYoung->repair();
echo '<br>';
