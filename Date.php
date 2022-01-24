<?php
class Date

{
  public $date;

  public function __construct($date)
  {
    $this->date = $date;
  }

  public function getDay()
  {
    return "День: " . date('d', strtotime($this->date));
  }

  public function getMonth($lang = null)
  {
    $arr = [
      'січень',
      'лютий',
      'березень',
      'квітень',
      'травень',
      'червень',
      'липень',
      'серпень',
      'вересень',
      'жовтень',
      'листопад',
      'грудень'
    ];

    // возвращает месяц
    switch ($lang) {
      case 'ru':
        $month = date('n', strtotime($this->date)) - 1;
        return 'Місяць: ' . $arr[$month];
        break;
      case 'en':
        return "Месяц: " . date('M', strtotime($this->date));

        break;
      default:
        return "Месяц: " . date('M', strtotime($this->date));
        break;
    }
  }

  public function getYear()
  {
    return date("Y", strtotime($this->date));
  }

  public function getWeekDay($lang = null)
  {
    $arr = [
      'понеділок',
      'вівторок',
      'середа',
      'четвер',
      'п\'ятниця',
      'субота',
      'неділя',
    ];

    // возвращает месяц
    switch ($lang) {
      case 'ru':
        $days = date('N', strtotime($this->date)) - 1;
        return 'День: ' . $arr[$days];
        break;
      case 'en':
        return "День: " . date('D', strtotime($this->date));
        break;

      default:
        return "День: " . date('D', strtotime($this->date));
        break;
    }
  }

  public function addDay($value)
  {
    // добавляет значение $value к дню
    $this->date = (date("d", strtotime($this->date)) + $value);
    return $this;
  }

  public function subDay($value)
  {
    $this->date = (date("d", strtotime($this->date)) - $value);
    return $this;
  }

  public function addMonth($value)
  {
    $this->date = date("m", strtotime($this->date)) + $value;
    return $this;
  }

  public function subMonth($value)
  {
    $this->date = (date("m", strtotime($this->date)) - $value);
    return $this;
  }

  public function addYear($value)
  {
    $this->date = (date("Y", strtotime($this->date)) - $value);
    return (int) $this->date;
  }

  public function subYear($value)
  {
    $this->date = (date("Y", strtotime($this->date))) - $value;
    return (int) $this->date;
    
  }

  public function format()
  {
  }

  public function __toString()
  {
    return  date("d-m-Y", strtotime($this->date));
  }
}
