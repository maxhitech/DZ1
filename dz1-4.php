<?php
/*
   �������� ���������� $age � ��������� �� ������������ �������� ��������.
   ��������� IF, �������� �����������.
   ���� �������� $age �������� � �������� 18-65 ������� ���� ��� �������� � ���������.
   ���� �������� $age ������ 65 ������� ���� ���� �� �������.
   ���� �������� $age �� 1 �� 17 ������� ���� �������� ��������.
   ���� �������� $age ����� 0 ������� �� ���� ��������!�.
   �� ���� ��������� ������� �������� ������.
 */
echo '<h2>dz1-4</h2>';
# ------------------------------------1------------------------------------------
$age = 21;
echo  "��� �������/Your age is --> ".$age."<br>";
# ------------------------------------2------------------------------------------
    if ($age >= 18 && $age <= 65) {
        echo "��� ��� �������� � ��������/You still work and work";
    }
    elseif ($age > 65) {
        echo "��� ���� �� ������/It's time for you to retire";
    }
    elseif ($age >= 1 && $age <= 17) {
        echo "��� �������� ��������/You are too young to work";
    }
    elseif ($age == 0) {
        echo "� ���� ��������!/Happy Birthday!";
    }
    else {
        echo "������!/ERROR!";
    }