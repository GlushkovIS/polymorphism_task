<?php

/**
 * Interface DriverCommon
 */
interface DriverCommon
{
    public function drive(): void;

    public function repair(): void;
}

/**
 * Class CarDriver
 */
class CarDriver implements DriverCommon
{
    public function drive(): void
    {
        echo 'Умею водить.';
    }

    public function repair(): void
    {
        echo 'За сервис заплачу!';
    }
}

/**
 * Class CarDriverYoung
 */
class CarDriverYoung extends CarDriver
{
    public function drive(): void
    {
        echo 'Пристегните ремни! ';
        parent::drive();
    }
}

class CarDriverOld extends CarDriver
{
    public function drive(): void
    {
        parent::drive();
        echo ' Прочь с дороги';
    }

    public function repair(): void
    {
        echo 'Сам починю!';
    }
}

/**
 * Class BusDriverCommon
 */
class BusDriverCommon implements DriverCommon
{
    public function drive(): void
    {
        echo 'Осторожно двери закрываются!';
    }

    public function repair(): void
    {
        echo 'Пора на автоколонну 1213.';
    }
}

/**
 * Class BusDriverYoung
 */
class BusDriverYoung extends BusDriverCommon
{
    public function repair(): void
    {
        echo 'Починю сам.';
    }
}

/**
 * Class BusDriverOld
 */
class BusDriverOld extends BusDriverCommon
{
    public function drive(): void
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
