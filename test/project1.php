<?php 
  $m; $mas;
class proj1
{

    function chis()
    {
        $f = 0;
        $g = 0;
        global $m;
        for ($i = 10; $i <= 53; $i++) {
            for ($j = 1; $j <= $i; $j++)
                if ($i % $j == 0) $f++;
            if ($f == 2) {
                $m[$g] = $i;
                $g++;
                $f = 0;
            } else $f = 0;


        }
        print_r($m);

    }

    function arr($m)
    {
        global $m, $mas;
        $mas[0]['a'] = $m[0];
        $mas[0]['b'] = $m[1];
        $mas[0]['c'] = $m[2];
        $mas[1]['a'] = $m[3];
        $mas[1]['b'] = $m[4];
        $mas[1]['c'] = $m[5];
        $mas[2]['a'] = $m[6];
        $mas[2]['b'] = $m[7];
        $mas[2]['c'] = $m[8];
        $mas[3]['a'] = $m[9];
        $mas[3]['b'] = $m[10];
        $mas[3]['c'] = $m[11];
        echo '</br>';
        echo '</br>';
        print_r($mas);
    }

    function area($mas)
    {
        global $mas;
        for ($i = 0; $i < 4; $i++) {
            $mas[$i]['s'] = (($mas[$i]['a'] + $mas[$i]['b']) / 2) * $mas[$i]['c'];
        }
        echo '</br>';
        echo '</br>';
        print_r($mas);
    }

    function conclusion($mas)
    {
        echo '</br>';
        echo '</br>';
        global $mas;
        $are = 0;
        echo 'Самая большая по площади трапеция но пощадью меньше 1400 №';
        for ($i = 0; $i < 4; $i++)
            if ($mas[$i]['s'] > $are && $mas[$i]['s'] < 1400) {
                $are = $mas[$i]['s'];
                $big = $i;
            }
        echo $big + 1;
        echo ' =';
        echo $mas[$big]['s'];
    }

    static function rate($n, $ra)
    {
        $nn = $n;
        for ($i = 1; $i < $ra; $i++) {
            $nn *= $n;
        }
        return $nn;
    }

    public function minim($masiv, $key)
    {
        //echo '</br>';
        // echo '</br>';
        $m = $masiv[0][$key];
        for ($i = 0; $i < (count($masiv) / 4) - 1; $i++) {
            if ($masiv[$i][$key] < $masiv[$i + 1][$key]) $m = $masiv[$i][$key];

        }
        return $m;
    }

    static function mini($a, $b, $c)
    {
        if ($a < $b) {
            $m = $a;
        } else
            if ($a < $b) {
                $m = $a;
            } else
                if ($b < $a) {
                    $m = $b;
                } else
                    if ($b < $c) {
                        $m = $b;
                    } else
                        if ($c < $b) {
                            $m = $c;
                        } else
                            if ($c < $a) {
                                $m = $c;
                            }


        return $m;
    }

    public function f1($mas)
    {
        for ($i = 0; $i <= 3; $i++) {
            $a = $mas[$i]['a'];
            $b = $mas[$i]['b'];
            $c = $mas[$i]['c'];
            $f = ($a * self::rate($b, $c)) + self::rate((self::rate($a / $c, $b) % 3), self::mini($a, $b, $c));
            $mas[$i]['f'] = $f;
        }
        //return $f;
        print_r($mas);
    }

    function e($mas)
    {
        for ($i = 0; $i <= 3; $i++) {
            if ($mas[$i]['s'] % 2 == 0) $mas[$i]['e'] = 'true'; else $mas[$i]['e'] = 'false';
        }
        print_r($mas);
    }

    function out($mas)
    {
        echo '</br>';
        echo 'a  ';
        echo 'b  ';
        echo 'c  ';
        echo 's';
        echo '</br>';
        for ($i = 0; $i <= 3; $i++) {
            if ($mas[$i]['s'] % 2 == 0) {
                echo $mas[$i]['a'];
                echo '  ';
                echo $mas[$i]['b'];
                echo '  ';
                echo $mas[$i]['c'];
                echo '  ';
                echo $mas[$i]['s'];
                echo '  ';
                echo '</br>';
            }
        }
    }

    function f2($mas)
    {
        for ($i = 0; $i <= 3; $i++) {
            $a = $mas[$i]['a'];
            $b = $mas[$i]['b'];
            $c = $mas[$i]['c'];
            $f2 = self::rate((self::rate(($a + $b), $c) * ($a / $c)),self::mini($a, $b, $c));
            return $f2;
        }
    }
}


    class conclusion {
        public function out($mas) {
            echo '<table border="1" width="100%" cellpadding="5"> 
   <tr>
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>s</th>
    
   </tr>';
            //for ($i=0;$i<=3;$i++) {
                //echo "
                // <tr>
                //  <td>$mas[$i]['a']</td>
                //   <td>$mas[$i]['b']</td>
                //  <td>$mas[$i]['c']</td>
                //  <td>$mas[$i]['s']</td>
                //  <td>$mas[$i]['e']</td>
                //</tr>
// ";
                foreach ($mas as $masArr) {
                    echo "<tr>";
                    foreach ($masArr as $sValue) {
                        echo "<td>{$sValue}</td>";
                    }
                    echo "</tr>";
                }
                echo '</table>';
            }//}
    }
$object = new proj1;
$ob=new conclusion;
$object-> chis();
echo '</br>';
$object->arr($m);
echo '</br>';
$object->area($mas);
echo '</br>';
$object->conclusion($mas);
echo '</br>';
$object-> f1($mas);
//echo '</br>';
echo '</br>';
$object->e($mas);
echo '</br>';
$object->out($mas);
//echo $mas[0]['s']%2;
echo '</br>';
echo $object->f2($mas);
$ob->out($mas);
?> 