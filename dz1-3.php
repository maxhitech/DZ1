<?php
/*
   �������� ��������� � ��������� �� ��������. ���������, ���������� ��
   ���������, ������� �� ������ ������������. �������� �������� ������ ���������.
   ����������� �������� �������� ��������� ���������. ����������?
 */
echo '<h2>dz1-3</h2>';
# ------------------------------------1------------------------------------------
define("CONST1", ":-)", true);
# ------------------------------------2------------------------------------------
    if ( defined("CONST1" ) ) {
        echo "CONST1 --> ".CONST1."<br><br>";
    }
    else {
        echo "NULL!!!<br><br>";
    }
# ------------------------------------3------------------------------------------
define("CONST1", ":-(");
echo "CONST1 --> ".CONST1."Yep, It's work!";