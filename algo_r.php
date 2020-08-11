<?
print("   [::] OPTION \n");
include 'opt.php';
print("\n");
print("SELECT OPTION : \n");
print("\033[1;32m#  \033[1;37m");
$opt = trim(fgets(STDIN));
print("\n");
print("###################### \n");
print("\n");
include 'conf/'.$opt.'.php';
print("###################### \n");
print("\n");
