<?
print("REPEAT ");
    print("\033[0;32m [Y/N] \033[1;37m");
    $yn = trim(fgets(STDIN));
print("\n");
print("###################### \n");
print("\n");

if(($yn=='y')||($yn=='Y')){
    include './algo_r.php';
} elseif(($yn=='n')||($yn=='N')){
    include './conf/99.php';
}
