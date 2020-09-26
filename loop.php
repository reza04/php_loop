<?php

function nomor1()
{
    for($i=1 ;$i<=10;$i++)
    {
        if($i>3 && $i<8)
        {
            echo "";
        }else{
            echo " $i ";
        }
    }
}

nomor1();
 
echo PHP_EOL;

function nomer2()
{
    for($a=5 ;$a>=1;$a--)
    {
        if($a<3)
        {
            echo " * ";
        }else
        {
            echo " $a ";
        }
    }
}

nomer2();

echo PHP_EOL;

function nomer3()
{
    for($angka=1;$angka<=4;$angka++)
    {
        if($angka%2==0)
        {
            echo " $angka "." b ";
        }else
        {
            echo " $angka "." a ";
        }
    }
}

nomer3();

echo PHP_EOL;

function nomor4()
{
    for($i=1;$i<=7;$i++)
    {
        if($i>3 && $i<7)
        {
            echo  " A ";
        }else
        {
            echo " $i ";
        }
    }
}

nomor4();


// $angka=1;

// while($angka<8){

//     if($angka>3 && $angka<7)
//     {
//         echo " A ";
//     }else{
//         echo " $angka ";
//     }
//     $angka++;
// }


echo PHP_EOL;

function nomor5()
{
    for($angka2=4;$angka2>=0;$angka2--)
    {
        // echo $angka2;
        if($angka2<3)
        {
            if($angka2==1)
            {
                echo $angka2;
            }else{
                echo " A ";
            }
        }else{
            echo " $angka2 ";
        }
    }
}

nomor5();

// $angka=4;

// while($angka>=0)
// {
//     if($angka<3)
//     {
//         if($angka==1)
//         {
//             echo " $angka ";
//         }else
//         {
//             echo " A ";
//         }
//     }else{
//         echo " $angka ";
//     }
//     $angka--;
// }

echo PHP_EOL;

function nomor6()
{
    for($angka3=0;$angka3<=4;$angka3++)
    {
        if($angka3<2)
        {
            echo " A ";
        }else
        {
            echo " $angka3 ";
        }
    }

}

nomor6();

echo PHP_EOL;

function scar($ab)
{
    for($v=1;$v<=$ab;$v++)
    {

        for($z=1;$z<=$v;$z++)
        {
            echo "*";
        }
        echo "\n";
    }
}

scar(10);

function box($logo2)
{
for($v=1;$v<=$logo2;$v++)
    {
    for($z=1;$z<=$v;$z++)
    {
        echo " ";
    }
        echo "$v\n";
    }
}

box(5);

function logo($logo)
{
    for($v=$logo;$v>=1;$v--)
    {
    for($z=1;$z<=$v;$z++)
    {
        echo " ";
    }
        echo "$v\n";
    }
}

logo(5);


function tanggal($g)
{
for($tg=1;$tg<=$g;$tg++)
{
    for($tgl=1;$tgl<=$tg;$tgl+=7)
    {
        if($tg==$tgl)
        {
            echo " \n ";
        } 
    }
    echo " $tg\t ";
}
}

tanggal(31);
