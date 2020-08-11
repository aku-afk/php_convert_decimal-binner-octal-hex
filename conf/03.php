<?
    print("Enter Decimal Number : \n");
    print("\033[1;32m#  \033[1;37m");
    $num_des = trim(fgets(STDIN));
    print("Hex Number \n");
    $res = dechex($num_des);
    print("\033[1;32m#  \033[0;36m".$res."\033[1;34m\033[1;37m \n");
print("\n");
print("###################### \n");
print("\n");
include 'algo_r.php';
print("\n");
