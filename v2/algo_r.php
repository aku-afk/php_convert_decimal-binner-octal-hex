<?
print("   [::] OPTION \n");
include 'opt.php';
print("\n");
print("SELECT OPTION : \n");
print("\033[0;32m#  \033[1;37m");
$opt = trim(fgets(STDIN));

$slct = $opt + 0;

print("\n");
print("###################### \n");
print("\n");

if($slct=='1'){
    include 'conf/01.php';
} elseif($slct=='2'){
    include 'conf/02.php';
} elseif($slct=='3'){
    include 'conf/03.php';
} elseif($slct=='4'){
    include 'conf/04.php';
} elseif($slct=='5'){
    include 'conf/05.php';
} elseif($slct=='6'){
    include 'conf/06.php';
} elseif($slct=='7'){
    include 'conf/07.php';
} elseif($slct=='8'){
    include 'conf/08.php';
} elseif($slct=='9'){
    include 'conf/09.php';
} elseif($slct=='10'){
    include 'conf/10.php';
} elseif($slct=='11'){
    include 'conf/11.php';
} elseif($slct=='12'){
    include 'conf/12.php';
} elseif($slct=='99'){
    include 'conf/99.php';
} else {
    include 'oe.php';
}

print("\n");
